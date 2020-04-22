<?php

namespace App\Http\Controllers;

use App\note;
use App\others;
use App\Tutorials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $myTutor = DB::table('users')->where('role_id', '>=', 2)->where('category_id', Auth::user()->category_id)->first();
        return view('student.dashboard', compact('myTutor'));
    }

    public function NotesIndex()
    {
        $notes = DB::table('notes')->where('user_id', Auth::user()->id)->first();
        return view('notes.index', compact('notes'));
    }

    public function SaveNotes()
    {

        $notes = $this->validateRequest();
        note::create($notes + ['user_id' => Auth::user()->id]);
        return back();
    }

    public function UpdateMyNotes()
    {
        $note = $this->validateRequest();
        DB::table('notes')->where('user_id', Auth::user()->id)->update($note + ['user_id' => Auth::user()->id]);
        return back();
    }


    public function changePassword(Request $request)
    {
        $pass = Hash::make($request['password']);
        DB::table('users')->where('id', Auth::user()->id)->update(['password' => $pass]);
        return back();
    }

    public function tutorialsindex()
    {
        $my_tutorials = DB::table('tutorials')->where('category_id',
            Auth::user()->category_id)->where('form_id', Auth::user()->level_id)->get()->all();
        $comment = DB::table('comments')->where('form_id', Auth::user()->level_id)->get()->where('classroom_id', Auth::user()->category_id)->all();
        $others = DB::table('others')->where('user_id', Auth::user()->id)->get();
        $alltutorial =Tutorials::all();

        return view('student.my_tutorials', compact('my_tutorials', 'comment', 'others','alltutorial'));
    }

    public function ebooksIndex()
    {
        $my_ebooks = DB::table('books')->where('category_id',
            Auth::user()->category_id)->where('form_id', Auth::user()->level_id)->get()->all();
        return view('student.my_ebooks', compact('my_ebooks'));
    }

    public function myNotes()
    {
        $notes = DB::table('notes')->where('user_id', Auth::user()->id)->first();
        return view('student.notes.index', compact('notes'));
    }

    public function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
    }
}
