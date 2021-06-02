<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use App\Model\School;
use Illuminate\Http\Request;
use Alert;

class SchoolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*Show all schools list*/
    public function index()
    {
        $schools = School::all();
        return view('school.index', compact('schools'));
    }

    /*Create school */
    public function create()
    {
        return view('school.create');
    }

    /*Store the school*/
    public function store(Request $request)
    {

        if (env('DEMO') === "YES") {
            Alert::warning('warning', 'This is demo purpose only');
            return back();
        }

        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => translate('Name is required'),
        ]);

        $school = new School();
        if ($request->has('image')) {
            $school->image = $request->image;
        }
        $school->name = $request->name;
        $school->image = $request->image;
        $school->phone = $request->phone;
        $school->address = $request->address;
        $school->site = $request->site;
        $school->save();
        notify()->success(translate('School registered successfully'));
        return back();
    }

    /*Show Edit Form*/
    public function edit($id)
    {
        $school = School::findOrFail($id);
        return view('school.edit', compact('school'));
    }

    /*Update the school*/
    public function update(Request $request)
    {
        if (env('DEMO') === "YES") {
            Alert::warning('warning', 'This is demo purpose only');
            return back();
        }
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => translate('Name is required'),
        ]);

        $school = School::where('id', $request->id)->first();
        $school->name = $request->name;
        $school->phone = $request->phone;
        $school->address = $request->address;
        $school->site = $request->site;
        if ($request->has('image')) {
            $school->image = $request->image;
        }
        $school->save();
        notify()->success(translate('School updated successfully'));
        return back();
    }

    /*Destroy the school if instructor have the school*/
    public function destroy($id)
    {
        if (env('DEMO') === "YES") {
            Alert::warning('warning', 'This is demo purpose only');
            return back();
        }
        School::where('id', $id)->forceDelete();
        notify()->success(translate('School is deleted successfully'));
        return back();
    }
    //END
}
