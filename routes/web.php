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

use App\Photo;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;
use App\Country;

/*
|-----------------------------------------------------------------------------
|       CARA PENULISAN ROUTER
|-----------------------------------------------------------------------------
|
|   ------------------------------ CARA 1 --------------------------------
|   Route::get('/', function () {
|        return view('index')
|   })->name('home');
|   ----------------------------------------------------------------------
|
|   ------------------------------ CARA 1 --------------------------------
|   Route::get('/', [
|       'uses' => 'NiceActionController@getHome',
|       'as' => 'home'
|   ]);
|   ----------------------------------------------------------------------
|
|   ------------------------------ CARA 1 --------------------------------
|   Route::get('/', NiceActionController@getHome)->name('home');
|   ----------------------------------------------------------------------
|
*/




//  ===========> Routing <===========
//
//
//Route::get('/', function(){
//
//    return view('welcome');
//
//
//});
//
//Route::get('/about', function(){
//
//    return 'Hi about page';
//
//
//});
//
//Route::get('/contact', function(){
//
//    return 'Hi I\'m Contact';
//
//
//});
//
//Route::get('/post/{id}/{name}', function($id, $name){
//
//    return "This is post number  " . $id . " " . $name;
//
//
//});
//
//Route::get('/admin/posts/example',array('as'=>"admin.home", function(){
//
//    $url = route('admin.home');
//
//    return $url;
//
//
//}));


//Route::get('/post', 'PostController@index');

//
//Route::get('/contact', 'PostController@contact');
//
//
//
//Route::get('/post/{id}/{nama}', 'PostController@show_post');



/*
|--------------------------------------------------------------------------
|           DATABASE Raw Sql Queries
|--------------------------------------------------------------------------
*/



//Route::get('/insert', function(){
//
//   DB::insert('insert into posts(title, content) values(?,?)', ['Php with laravel', 'Laravel is the best things that has happened to php']);
//
//
//
//});


//Route::get('/read', function (){
//
//
//    $results = DB::select('select * from posts where id = ?', [1]);
//
//    foreach ($results as $post){
//
//        return $post->title;
//
//
//    }
//});


//Route::get('/update', function (){
//
//
//
//    $update = DB::update('update posts set title = "Update Title" where id=?', [1]);
//
//
//    return $update;
//
//
//});


//Route::get('/delete', function (){
//
//
//
//
//    $deleted = DB::delete('delete from posts where id=?', [1]);
//
//    return $deleted;
//
//
//});


/*
|--------------------------------------------------------------------------
|           ELOQUENT
|--------------------------------------------------------------------------
*/


//Route::get('/find',function(){
//
//
//    $posts = Post::all();
////    $posts = Post::find(2);   id = 2
//
//
//    foreach($posts as $post){
//
//        return $post->title;
//
//    }
//
//});



//Route::get('/findwhere', function(){
//
//
//    $posts = Post::where('id', 2)->orderby('id', 'desc')->take(1)->get();
//
//
//    return $posts;
//
//
//
//});

//Route::get('/findmore', function(){
//
//
////    $posts = Post::findorFail(1);
////
////    return $posts;
//
//
//    $posts = Post::where('users_count', '<', 50)->firstOrFail();
//
//});

//Route::get('/basicinsert', function (){
//
//    $post = new Post;
//
//    $post->title = 'New Eloquent title insert';
//    $post->content = 'New Eloquent is Really Cool, look at this conttent';
//
//    $post->save();
//
//
//
//});

//Route::get('/basicinsert2', function (){
//
//    $post = Post::find(4);
//
//    $post->title = 'New Eloquent title insert';
//    $post->content = 'New Eloquent is Really Cool, look at this conttent yaaa';
//
//    $post->save();
//
//
//
//});

//Route::get('/create', function (){
//
//
//    Post::create(['title'=>"the create method", 'content'=>'wow i love php verry much']);
//
//
//});

//Route::get('/update', function(){
//
//    Post::where('id', 5)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'I love Widhy Veery Muccch']);
//
//
//
//
//});

//
//Route::get('/delete', function (){
//
//
//    $post = Post::find(5);
//
//    $post->delete();
//
//
//});

//Route::get('/delete2', function (){
//
//
//    Post::destroy(5);
//
//});

//Route::get('/softdelete', function (){
//
//    Post::find(3)->delete();
//
//
//});

//Route::get('/readsoftdelete', function (){
//
////    $post = Post::find(1);
////
////    return $post;
//
//
////    $post = Post::withTrashed()->where('id', 2)->get();
////
////    return $post;
//
//    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//
//    return $post;
//
//
//
//});


//Route::get('/restore', function(){
//
//   Post::withTrashed()->where('is_admin', 0)->restore();
//
//
//});


//Route::get('/forcedelete', function (){
//
//
//    Post::withTrashed()->where('id', 3)->forceDelete();
//
//
//});

/*
|--------------------------------------------------------------------------
|           ELOQUENT RELATIONSHIP
|--------------------------------------------------------------------------
*/


/*======> One to One Relationship <========*/

//Route::get('/user/post/{id}', function($id){
//
//    return User::find($id)->post->title;
//
//
//
//});
//Route::get('/post/{id}/user', function($id){
//
//    return Post::find($id)->user->name;
//
//
//
//});


/*=========> One to Many <=========*/

//Route::get('/posts', function (){
//
//    $user = User::find(1);
//
//
//    foreach ($user->posts as $post){
//
//        echo $post->title . "<br>";
//
//    }
//
//
//});


/*=========> Many to Many <=========*/

//Route::get('/user/{id}/role', function ($id){
//
//    $user = User::find($id);
//
//
//    foreach ($user->roles as $role){
//
//        echo $role->name . "<br>";
//
//    }
//
////    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
////
////    echo $user;
//
//
//});


/*========> Accessing the intermediated table/pivot <=============*/

//Route::get('/user/pivot', function(){
//
//
//    $user = User::find(1);
//
//    foreach ($user->roles as $role){
//
//        echo $role->pivot->created_at;
//    }
//
//
//});


/*============> Has Many Trough <==============*/

//Route::get('/user/country', function (){
//
//    $country = Country::find(1);
//
//    foreach ($country->posts as $post){
//
//        echo $post->title . "<br>";
//    }
//
//});


/*============> Polymorphic Relation <==============*/


//Route::get('user/photos', function (){
//
//    $user = User::find(1);
//
//    foreach ($user->photos as $photo){
//
//        return $photo;
//    }
//
//});
//
//
//Route::get('post/photos', function (){
//
//    $post = Post::find(2);
//
//    foreach ($post->photos as $photo){
//
//        return $photo;
//    }
//
//});


/*============> Inverse <==============*/

//Route::get('/photo/{id}/post', function ($id){
//
//    $photo = Photo::findOrFail($id);
//
//    return $photo->imageable;
//
//
//});


/*============> Many to Many Polymorphic Relation <==============*/

// NOT UNDERSTOOD YET

//Route::get('/post/tag', function (){
//
//    $post = Post::find(1);
//
//    foreach ($post->tags as $tag){
//
//        echo $tag->name;
//    }
//
//
//
//});



//Route::get('/tag/post', function (){
//
//    $tag = Tag::find(2);
//
//    foreach ($tag->posts as $post){
//
//        echo $post->title;
//
//    }
//
//});




/*
|--------------------------------------------------------------------------
|          Crud Application
|--------------------------------------------------------------------------
*/




Route::group(['middleware' => 'web'], function(){

    Route::resource('posts', 'PostController');

});


Route::get('/dates', function (){


    $date = new DateTime('+1 week');

    echo $date->format('m-d-Y');

    echo "<br>";

    echo Carbon::now()->diffForHumans();

    echo "<br>";

    echo Carbon::now()->addDays(2)->addHour(10)->addMinute(120)->diffForHumans();

});







