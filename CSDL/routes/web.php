<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Models\Comment;
use App\Models\Deployment;
use App\Models\Environment;
use App\Models\Post;
use App\Models\Project;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::resource('customers', CustomerController::class);
Route::resource('users', UserController::class);
Route::get('/router/test-layout', function () {
    return view('layouts.app');
});
Route::get('/get-comments', function (){
    $comments = Comment::find(1);
    dd($comments);
});
Route::get('/get-post', function() {
    $posts = Post::find(1);
    dd($posts);
});
Route::get('/get-user-roles', function() {
    $roles = Role::find(1);
    dd($roles);
});
Route::get('/get-role-users', function () {
    $users = User::find(1);
    dd($users);
});

Route::get('/get-user', function() {
    $user = DB::table('users')
    ->join('phones', 'users.id', '=', 'phones.user_id')
    ->select('users.*', 'phones.phone_number')
    ->where('users.id', '=', '1')
    ->get();
    dd($user);
});

Route::get('/comments', function() {
    $comment = DB::table('posts')
    ->join('comments', 'posts.id', '=', 'comments.post_id')
    ->select('posts.*', 'comments.content')
    ->where ('posts.id', '=', '1')
    ->get();
    dd($comment);
});
// + lấy các quyền của user có id = 1 và tên user đó

Route::get('/roles', function() {
    $roles = DB::table('roles')
    ->join('role_user', 'roles.id', '=', 'role_user.role_id')
    ->join ('users', 'role_user.user_id', '=', 'users.id')
    ->select('role_user.*', 'users.name')
    ->where('users.id', '=', '1')
    ->get();
    dd($roles);
});



