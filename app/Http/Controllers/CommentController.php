<?php


namespace App\Http\Controllers;


use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{

    public function AddComment(Request $request)
    {
        $data = $request->all() + ['user_id' => Auth::user()->id];
        Comment::create($data);
        return back();
    }

    public function commentIndex(Request $request)
    {
        $my_tutorials = DB::table('tutorials')->where('category_id',
            Auth::user()->category_id)->where('form_id', Auth::user()->level_id)->get()->all();
        $comment = DB::table('comments')->where('id', $request->id)->get()->first();
        return view('comment.edit', compact('comment', 'my_tutorials'));
    }

    public function UpdateComment(Request $request)
    {
        DB::table('comments')->where('id', $request->id)->update(['comment' => $request->comment]);
        return redirect('student/tutorials');
    }

    public function deleteComment(Request $request)
    {
        DB::table('comments')->where('id', $request->id)->delete();
        return back();
    }

    public function AdminscommentIndex(Request $request)
    {
        $comment = DB::table('comments')->where('id', $request->id)->get()->first();
        return view('comment.Admins_edit', compact('comment'));
    }

    public function EditCommentForAdmins(Request $request)
    {

        DB::table('comments')->where('id', $request->id)->update(['comment' => $request->comment]);
        return redirect('super-admin/tutorials/index');
    }
}
