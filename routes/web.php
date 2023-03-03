<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Post;
use App\User;
use App\Role;
use App\Country;

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

// Route::get('/admin/posts/example', array('as' => 'admin.home', function(){
//     $url = route('admin.home');
//     return 'This url is : ' . $url;
// }));

// CRUD Operation

// // inserting data
// Route::get('/insert', function() {
//     DB::insert('insert into posts(title, content) values(?,?)', ['Laravel', 'Laravel content and PHP basics are needed.']);
// });

// // reading data
// Route::get('/read', function() {
//     $results = DB::select('select * from posts where id = ?', [5]);
//     return $results;
//     // foreach($results as $post) {
//     //     return $post->title;
//     // }
// });

// // updating data
// Route::get('/update', function() {
//     $result = DB::update('update posts set title="PHP" where id=?', [5]);
//     return $result;
// });

// // deleting data
// Route::get('/delete', function() {
//     $deleted = DB::delete('delete from posts where id=?', [6]);
//     return $deleted;
// });

// // Reading data through ELOQUENT
// Route::get('/read', function() {
//     $posts = Post::all();
//     foreach($posts as $post) {
//         return $post->title;
//     }
//     // return $posts;
// });

// Route::get('/find', function() {
//     $found = Post::all();
//     // return $found;
//     foreach($found as $item) {
//         return $item->title;
//     }
// });

// Route::get('/findmore', function () {
//     $posts = Post::findOrFail(7);
//     return $posts;
// });

// Route::get('/del', function () {
//     $posts = Post::all();
//     foreach($posts as $post) {
//         $post->delete();
//     }
// });

// // Inserting a row
// Route::get('/basicinsert', function() {
//     $post = new Post;
//     $post->title = "new title";
//     $post->content = "new content";
//     $post->save();
// });

// // Updating a row
// Route::get('/find', function() {
//     $post = Post::find(9);
//     $post->title = "updated title";
//     $post->content = "updated content";
//     $post->save();
// });

// // creating row - Mass Assigning
// Route::get('/create', function() {
//     Post::create(['title' => '2nd title created', 'content' => '2nd content created']);
// });

// // updating using Eloquent
// Route::get('/update', function () {
//     Post::where('id', 10)->update(['title' => 'new title updated', 'content' => 'new content updated']);
// });

// // delete usign Eloquent
// Route::get('/delete', function() {
    // Post::find(9)->delete();
    // Post::destroy([9,10]);
    // Post::where('id', 11)->delete();
    // // $post->delete();
// });


// // soft delete
// Route::get('/softdel', function () {
//     Post::find(3)->delete();
// });

// // read soft delete
// Route::get('/readsoftdel', function () {
//     // // to get specific one
//     // $readData = Post::withTrashed()->where('id', 1)->get();

//     // // to get only trashed items
//     // $readData = Post::onlyTrashed()->get();
//     return $readData;
// });


// // restoring soft deleted items
// Route::get('/restore', function() {
//     $post = Post::onlyTrashed()->restore();
//     return $post;
// });

// // forced delete (to delete soft_deleted_item permanently) 
// Route::get('/forcedDel', function() {
//     Post::withTrashed()->where('id', 3)->forceDelete();
    // Post::onlyTrashed()->forceDelete();
// });

// Route::get('/post/{id}', [PostsController::class, 'index']);

// Route::resource('posts', 'PostsController');





// ELOQUENT RELATIONSHIPS --------------------------------


// // One to One Relationship --------
// // fetching one post of one user
// Route::get('user/{id}/post', function($id) {
//     // return User::find($id)->post;
//     $data = User::find($id)->post;
//     $data->content = 'new content updated';
//     $data->save();
//     return $data;
// });

// // One to One Relationship inverse relation-------------
// // fetching one user who belongs to one post
// Route::get('post/{id}/user', function($id) {
//     return Post::find($id)->user;
// });

// // One to Many Relationship ----------------------------
// // fetching many posts of one user
// Route::get('/posts', function() {
//     $user = User::find(1);
//     foreach($user->posts as $post) {
//         echo 'title : ' . $post->title . "<br>";
//     }
// });


// // Many to Many Relationaship ---------------------------

// Route::get('user/{id}/role', function($id){
//     $user = User::find($id);
//     foreach($user->roles as $role) {
//         return 'role : ' . $role->name . "<br>";
//     }
// });


// Route::get('role/{id}/user', function($id) {
//     $role = Role::find($id);
//     foreach($role->users as $user) {
//         echo 'user : ' . $user->name . '<br>';
//     }
// });


// Has Many Through Relations ---------------------------------------------
// Getting post related to the user from specific country ----or---- the post that belongs to the user from some country
Route::get('user/country/{id}', function($id) {
    $country = Country::find($id);
    foreach($country->posts as $post) {
        echo 'Post is : ' . $post->title . '<br>';
        // echo $post;
    }
});
