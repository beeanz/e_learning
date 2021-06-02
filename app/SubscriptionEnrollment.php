<?php

namespace App;

use App\Model\Course;
use App\Model\Massage;
use Illuminate\Database\Eloquent\Model;

class SubscriptionEnrollment extends Model
{

    protected $fillable = ['end_at'];

    public function enrollCourse()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id')
            ->with('relationBetweenInstructorUser')
            ->with('category')
            ->with('enrollClasses');
    }

    public function user(){
        return $this->hasOne('App\User','id','user_id');
    }

    /*Message*/
    public function messages()
    {
        return $this->hasMany(Massage::class, 'enroll_id', 'id')->with('user');
    }

    public function messagesForInbox()
    {
        return $this->hasOne(Massage::class, 'enroll_id', 'id')
            ->latest()->with('user');
    }

    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }

    public function student_email()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
