<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\Enrollment;
use App\Model\School;
use App\Model\Student;
use Alert;
use App\SubscriptionEnrollment;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /*All students with search option */
    public function index(Request $request)
    {
        if (Auth::user()->user_type == "Admin") {
            /*if Authenticated  user is admin , admin can show all students */
            if($request->get('search') || $request->get('student')) {
                $is_student = $request->get('student') === 'on' ? true : false;
                $students = Student::where('is_student', $is_student)
                    ->where(function ($q) use ($request) {
                        $q->where('name', 'like', '%' . $request->get('search') . '%')
                        ->orWhere('email', 'like', '%' . $request->get('search') . '%');
                    })
                    ->orderBydesc('id')->paginate(10);
            } else {
                $students = Student::orderBydesc('id')->paginate(10);
            }

        } else {
            /*There are the Instructor show only his/her register Students list*/
            $courses = Course::where('user_id', Auth::id())->get();
            $course_id_array = array();
            foreach ($courses as $i) {
                array_push($course_id_array, $i->id);
            }
            $enroll = Enrollment::whereIn('course_id', $course_id_array)->get();
            $subsEnrolls = SubscriptionEnrollment::whereIn('course_id', $course_id_array)->with('messages')->get();
            $enroll = $enroll->merge($subsEnrolls);

            $enroll_student_id = array();
            foreach ($enroll as $i) {
                array_push($enroll_student_id, $i->user_id);
            }

            if ($request->get('search') || $request->get('student')) {
                $is_student = $request->get('student') === 'on' ? true : false;
                $students = Student::where('is_student', $is_student)
                    ->where(function ($q) use ($request) {
                        $q->where('name', 'like', '%' . $request->get('search') . '%')
                            ->orWhere('email', 'like', '%' . $request->get('search') . '%');
                    })
                    ->orderBydesc('id')->paginate(10);
            } else {
                $students = Student::whereIn('user_id', $enroll_student_id)->orderBydesc('id')->paginate(10);
            }
        }
        return view('module.students.index', compact('students'));
    }

    /*This function show all instructor related history
    like Package, Course , Enrolment Student list Get Payment History*/
    public function show($id)
    {
        $each_student = Student::where('user_id', $id)->first();

        return view('module.students.show', compact('each_student'));
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->with('student')->first();
        $schools = School::all('id', 'name');

        $subs = SubscriptionEnrollment::where('user_id', $id)->with(['user', 'enrollCourse'])->paginate(10);
        return view('module.students.edit', compact('user', 'schools', 'subs'));
    }

    public function update(Request $request)
    {
        // registration validation
        $request->validate(
            [
                'name' => 'required',
                'id' => 'required'
            ],
            ['name.required' => translate('Name is required'),]
        );

        $student = Student::findOrFail($request->id);

        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->birthday = $request->birthday ? Carbon::createFromFormat('d/m/Y', $request->birthday) : null;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->is_student = $request->is_student == 'on' ? true : false;
        $student->school_id = $request->is_student == 'on' ? $request->school_id : null;

        $student->save();

        notify()->success(translate('Student updated successfully'));
        return back();
    }

    //END
}
