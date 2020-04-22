<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('super-admin/settings', 'SuperAdminController@indexForSettings');
Route::post('super-admin/settings/add-course', 'SuperAdminController@addCourse');
Route::post('super-admin/settings/add-topic', 'SuperAdminController@addTopic');
Route::post('super-admin/settings/add-category', 'CategoryController@addCategory');

Route::get('super-admin/tutorials/index', 'TutorialsController@index');
Route::post('super-admin/tutorials/upload', 'TutorialsController@saveTutorials');

Route::get('super-admin/deleteTutorialForForm1/{id}', 'TutorialsController@deleteTutorialForForm1')->name('tutorial.delete');
Route::get('super-admin/deleteTutorialForForm2/{id}', 'TutorialsController@deleteTutorialForForm2')->name('tutorial2.delete');
Route::get('super-admin/deleteTutorialForForm3/{id}', 'TutorialsController@deleteTutorialForForm3')->name('tutorial3.delete');

Route::get('super-admin/tutorials/E-books-index', 'TutorialsController@E_Book_index');
Route::post('super-admin/tutorials/E-books-upload', 'TutorialsController@saveEbook');

Route::get('super-admin/deleteTutorialForFormb1/{id}', 'TutorialsController@deleteTutorialForFormb1b')->name('tutorialb.delete');
Route::get('super-admin/deleteTutorialForFormb2/{id}', 'TutorialsController@deleteTutorialForFormb2b')->name('tutorialb2.delete');
Route::get('super-admin/deleteTutorialForFormb3/{id}', 'TutorialsController@deleteTutorialForFormb3b')->name('tutorialb3.delete');


Route::get('super-admin/my-notes/index', 'TutorialsController@NotesIndex');
Route::post('super-admin/my-notes/index', 'TutorialsController@SaveNotes');
Route::patch('super-admin/my-notes/edit', 'TutorialsController@UpdateMyNotes');

Route::get('register-user', 'TutorialsController@Registerindex');
Route::post('register-user', 'TutorialsController@Register');
Route::get('super-admin/dashboard', 'SuperAdminController@index');

Route::get('student/dashboard', 'StudentController@index');
Route::get('student/my-notes/index', 'StudentController@NotesIndex');
Route::post('student/my-notes/index', 'StudentController@SaveNotes');
Route::patch('student/my-notes/edit', 'StudentController@UpdateMyNotes');
Route::get('student/tutorials', 'StudentController@tutorialsindex');
Route::get('student/e-books', 'StudentController@ebooksIndex');
Route::get('student/my-notes', 'StudentController@myNotes');

Route::get('about-me','SuperAdminController@aboutMeIndex');
Route::post('about-me','SuperAdminController@aboutMeSave');
Route::patch('update-about-me','SuperAdminController@UpdateAboutMe');

Route::post('student-chane-password','StudentController@changePassword');

Route::get('reset-account','SuperAdminController@resetUserAccountIndex');
Route::post('account-reset','SuperAdminController@ResetAccount');

Route::post('talk-to-us','HomeController@SendUsMessage');

Route::post('add-comment','CommentController@AddComment');
Route::get('eidt-comment-index/{id}','CommentController@commentIndex')->name('edit.comment');
Route::patch('edit-comment','CommentController@UpdateComment');
Route::get('delete-comment/{id}','CommentController@deleteComment')->name('delete.comment');
Route::get('edit-comment-Admins-index/{id}','CommentController@AdminscommentIndex')->name('Admins..edit.comment');
Route::patch('edit-comment-Admins-index','CommentController@EditCommentForAdmins');

Route::post('others','TutorialsController@others');

Route::post('post','TutorialsController@makeTutorialFree');

Route::post('post-ebook','TutorialsController@SaveFreeEbooks');
Route::get('latest-posts','TutorialsController@latestPost');