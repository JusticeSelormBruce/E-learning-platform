<?php

namespace App\Http\Controllers;

use App\AboutMe;
use App\Course;
use App\Topics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')->where('category_id', Auth::user()->category_id)->get()->all();
        $myStudents = DB::table('users')->where('role_id', 1)->where('category_id', Auth::user()->category_id)->get()->all();
        $myStudentsPopulation = DB::table('users')->where('role_id', 1)->where('category_id', Auth::user()->category_id)->count();
        return view('dashboard', compact('courses', 'myStudents', 'myStudentsPopulation'));
    }

    public function indexForSettings()
    {
        $forms = DB::table('forms')->get()->all();
        $courses = DB::table('courses')->where('category_id', Auth::user()->category_id)->get()->all();
        $categories = DB::table('categories')->get()->all();
        return view('settings.indexForSettings', compact('forms', 'courses', 'categories'));
    }

    public function aboutMeIndex()
    {
        $me = DB::table('about_mes')->where('user_id', Auth::user()->id)->first();
        return view('about_me', compact('me'));
    }

    public function aboutMeSave(Request $request)
    {
        AboutMe::create(['about' => $request->about, 'user_id' => Auth::user()->id]);
        return back();
    }

    public function UpdateAboutMe(Request $request)
    {
        DB::table('about_mes')->where('user_id', Auth::user()->id)->update(['about' => $request->about, 'user_id' => Auth::user()->id]);
        return back();
    }

    public function addCourse()
    {
        Course::create($this->validateCourseDetails());
        return back();
    }

    public function addTopic()
    {
        Topics::create($this->validateTopicDetails());
        return back();
    }


    public function resetUserAccountIndex()
    {
        $myStudentsAccount = DB::table('users')->where('role_id', 1)->where('category_id', Auth::user()->category_id)->get()->all();
        return view('reset_user_account', compact('myStudentsAccount'));
    }

    public function ResetAccount(Request $request)
    {
        $defaultPassword = Hash::make('password');
        $user = DB::table('users')->where('id', $request->user_id)->update(['password' => $defaultPassword]);
        return back();

    }


    public function validateCourseDetails()
    {
        return request()->validate([
            'title' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|numeric',
            'form_id' => 'required|numeric'
        ]);
    }

    public function validateTopicDetails()
    {
        return request()->validate([
            'topic' => 'required|string',
            'description' => 'required|string',
            'course_id' => 'required|numeric'
        ]);
    }
}
