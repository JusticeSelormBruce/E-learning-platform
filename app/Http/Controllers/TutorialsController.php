<?php

namespace App\Http\Controllers;

use App\Book;
use App\Ebooks;
use App\note;
use App\others;
use App\Post;
use App\Tutorials;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TutorialsController extends Controller
{
    public function index()
    {
        $forms = DB::table('forms')->get()->all();
        $courses = DB::table('courses')->where('category_id', Auth::user()->category_id)->get()->all();
        $tutorials1 = DB::table('tutorials')->where('form_id', 1)->get()->where('category_id', Auth::user()->category_id)->all();
        $tutorials2 = DB::table('tutorials')->where('form_id', 2)->get()->where('category_id', Auth::user()->category_id)->all();
        $tutorials3 = DB::table('tutorials')->where('form_id', 3)->get()->where('category_id', Auth::user()->category_id)->all();
        $tutorials = DB::table('tutorials')->get();
        $categories = DB::table('categories')->get()->all();
        $comment_for_tutorials_for_form1 = DB::table('comments')->where('form_id', 1)->get()->where('classroom_id', Auth::user()->category_id)->all();
        $comment_for_tutorials_for_form2 = DB::table('comments')->where('form_id', 2)->get()->where('classroom_id', Auth::user()->category_id)->all();
        $comment_for_tutorials_for_form3 = DB::table('comments')->where('form_id', 3)->get()->where('classroom_id', Auth::user()->category_id)->all();
        return view('tutorials.index', compact('courses',
            'tutorials', 'forms', 'categories',
            'tutorials1', 'tutorials2', 'tutorials3', 'comment_for_tutorials_for_form3', 'comment_for_tutorials_for_form2', 'comment_for_tutorials_for_form1'
        ));
    }

    public function saveTutorials()
    {
        $data = Tutorials::create($this->validateTutorialDetails());
        $this->storeVideo($data);
        return back();
    }

    public function deleteTutorialForForm1(Request $request)
    {

        DB::table('tutorials')->where('id', $request->id)->delete();

        $value = DB::table('posts')->where('tutorial_id', $request->id)->first();
        if ($value == null) {
            return back();
        }
        DB::table('posts')->where('tutorial_id', $request->id)->delete();
        return back();


    }

    public function deleteTutorialForForm2(Request $request)
    {
        DB::table('tutorials')->where('id', $request->id)->delete();
        $value = DB::table('posts')->where('tutorial_id', $request->id)->first();
        if ($value == null) {
            return back();
        }
        DB::table('posts')->where('tutorial_id', $request->id)->delete();
        return back();



    }

    public function deleteTutorialForForm3(Request $request)
    {
        DB::table('tutorials')->where('id', $request->id)->delete();
        $value = DB::table('posts')->where('tutorial_id', $request->id)->first();
        if ($value == null) {
            return back();
        }
        DB::table('posts')->where('tutorial_id', $request->id)->delete();
        return back();


    }

    public function E_Book_index()
    {
        $forms = DB::table('forms')->get()->all();
        $courses = DB::table('courses')->where('category_id', Auth::user()->category_id)->get()->all();
        $tutorials1 = DB::table('books')->where('form_id', 1)->get()->where('category_id', Auth::user()->category_id)->all();
        $tutorials2 = DB::table('books')->where('form_id', 2)->get()->where('category_id', Auth::user()->category_id)->all();
        $tutorials3 = DB::table('books')->where('form_id', 3)->get()->where('category_id', Auth::user()->category_id)->all();
        $tutorials = DB::table('books')->get();
        $categories = DB::table('categories')->get()->all();

        return view('books.index', compact('courses',
            'tutorials', 'forms', 'categories',
            'tutorials1', 'tutorials2', 'tutorials3'

        ));
    }

    public function saveEbook()
    {
        $data = Book::create($this->validateEBookDetails());
        $this->storeEBook($data);
        return back();
    }

    public function deleteTutorialForFormb1b(Request $request)
    {

        DB::table('books')->where('id', $request->id)->delete();
        $value = DB::table('posts')->where('tutorial_id', $request->id)->first();
        if ($value == null) {
            return back();
        }
        DB::table('posts')->where('tutorial_id', $request->id)->delete();
        return back();



    }

    public function deleteTutorialForFormb2b(Request $request)
    {
        DB::table('books')->where('id', $request->id)->delete();
        $value = DB::table('posts')->where('tutorial_id', $request->id)->first();
        if ($value == null) {
            return back();
        }
        DB::table('posts')->where('tutorial_id', $request->id)->delete();
        return back();



    }

    public function deleteTutorialForFormb3b(Request $request)
    {
        DB::table('books')->where('id', $request->id)->delete();
        $value = DB::table('posts')->where('tutorial_id', $request->id)->first();
        if ($value == null) {
            return back();
        }
        DB::table('posts')->where('tutorial_id', $request->id)->delete();
        return back();


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


    public function Registerindex()
    {
        $users = User::all()->where('role_id', 1)->all();
        return view('auth.register', compact('users'));
    }


    public function makeTutorialFree(Request $request)
    {

        $data = ['tutorial_id' => $request->tutorial_id, 'state' => $request->state];
        $result = Post::all()->where('tutorial_id', $request->tutorial_id)->first();
        if ($result == null) {
            Post::create($data);
            return back();
        } else {
            return back();
        }

    }

    public function Register()
    {

        $data = $this->validateUserDetails();
        User::create([
            'name' => $data['name'],
            'role_id' => $data['role_id'],
            'category_id' => $data['category_id'],
            'level_id' => $data['level_id'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return back();
    }


    public function others(Request $request)
    {
        $data = $request->all();
        others::create($data);
        return back();

    }

    public function SaveFreeEbooks(Request $request)
    {
        $data = ['tutorial_id' => $request->tutorial_id, 'state' => $request->state];
        $result = Ebooks::all()->where('tutorial_id', $request->tutorial_id)->first();
        if ($result == null) {
            Ebooks::create($data);
            return back();
        } else {
            return back();
        }
    }

    public function latestPost()
    {
        $freeTutorials = DB::table('ebooks')->get()->all();
        if (!$freeTutorials == null) {
            foreach ($freeTutorials as $list) {
                $result[] = DB::table('books')->where('id', $list->id)->get()->first();
            }

            return view('latest_posts', compact('result'));

        } else {
            $result = null;
            return view('latest_posts', compact('result'));
        }

    }

    public function validateUserDetails()
    {
        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
            'role_id' => [''],
            'category_id' => [''],
            'level_id' => [''],

        ]);
    }


    public function validateTutorialDetails()
    {


        return tap(
            request()->validate(
                [
                    'name' => 'required',
                    'course_id' => 'required|numeric',
                    'description' => 'required|string',
                    'form_id' => 'required|numeric',
                    'category_id' => 'required|numeric',
                    'tutorial' => 'required'
                ]
            ),
            function () {
                if (request()->hasFile('tutorial')) {
                    request()->validate(
                        [
                            'tutorial' => 'mimes:mp4,mov,ogg,WEBM,OGG,AVI,WMV| max:200000'
                        ]
                    );
                }
            }
        );
    }

    public function storeVideo($video)
    {

        if (request()->has('tutorial')) {
            $video->update(
                [
                    'tutorial' => request()->tutorial->store('Tutorials', 'public')
                ]

            );
        }
    }

    public function validateEBookDetails()
    {


        return tap(
            request()->validate(
                [
                    'name' => 'required',
                    'course_id' => 'required|numeric',
                    'description' => 'required|string',
                    'form_id' => 'required|numeric',
                    'category_id' => 'required|numeric',
                    'book' => 'required'
                ]
            ),
            function () {
                if (request()->hasFile('book')) {
                    request()->validate(
                        [
                            'book' => 'mimes:pdf| max:10000'
                        ]
                    );
                }
            }
        );
    }

    public function storeEBook($book)
    {

        if (request()->has('book')) {
            $book->update(
                [
                    'book' => request()->book->store('EBooks', 'public')
                ]

            );
        }
    }

    public function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
    }
}
