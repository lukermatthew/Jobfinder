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



Route::get('/', 'HomeController@index')->name('home');
Route::get('about', 'AboutController@index')->name('about');

Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact','ContactController@sendMessage')->name('contact.send');

Route::get('posts','PostController@index')->name('post.index');
Route::get('post/{slug}','PostController@details')->name('post.details');


Route::get('/category/{slug}','PostController@postByCategory')->name('category.posts');
Route::get('/tag/{slug}','PostController@postByTag')->name('tag.posts');

Route::get('profile/{username}','AuthorController@profile')->name('author.profile');

Route::post('subscriber','SubscriberController@store')->name('subscriber.store');

Route::get('/search','SearchController@search')->name('search');
Route::get('/searchjob','SearchjobController@searchjob')->name('searchjob');


Auth::routes();


Route::group(['middleware'=>['auth']], function (){
    Route::post('favorite/{post}/add','FavoriteController@add')->name('post.favorite');
    Route::post('comment/{post}','CommentController@store')->name('comment.store');
 });




//Admin Route
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){
    
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('tag','TagController');
    Route::resource('category','CategoryController');
    Route::resource('jobcategory','JobcategoryController');
    Route::resource('jobtypecategory','JobtypecategoryController');
    Route::resource('post','PostController');
    Route::resource('appjob','AppjobController');

    Route::resource('applicant','ApplicantController');
    Route::resource('client','ClientController');



    Route::resource('job','JobController');

    Route::get('/pending/post','PostController@pending')->name('post.pending');
    Route::put('/post/{id}/approve','PostController@approval')->name('post.approve');

    Route::get('/subscriber','SubscriberController@index')->name('subscriber.index');
    Route::delete('/subscriber/{subscriber}','SubscriberController@destroy')->name('subscriber.destroy');
   
    Route::get('settings','SettingsController@index')->name('settings');
    Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingsController@updatePassword')->name('password.update');

    Route::get('/favorite','FavoriteController@index')->name('favorite.index');

    Route::get('authors','AuthorController@index')->name('author.index');
    Route::delete('authors/{id}','AuthorController@destroy')->name('author.destroy');


});

//Client Route
Route::group(['as'=>'client.','prefix'=>'client','namespace'=>'Client','middleware'=>['auth','client']], function (){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('post','PostController');
    Route::resource('appjob','AppjobController');
    Route::resource('job','JobController');

    Route::get('settings','SettingsController@index')->name('settings');
    Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingsController@updatePassword')->name('password.update');


    

});





//Applicant Route
Route::group(['as'=>'applicant.','prefix'=>'applicant','namespace'=>'Applicant','middleware'=>['auth','applicant']], function (){

    Route::get('home','HomeController@index')->name('home');
    Route::resource('job','JobController');
    Route::post('comment/{post}','CommentController@store')->name('comment.store');
    Route::post('appjob/{job}','AppjobController@store')->name('appjob.store');


    
    Route::resource('profile','ProfileController');

    Route::get('settings','AppinfoController@index')->name('settings');
    Route::put('profile-update','AppinfoController@updateProfile')->name('profile.update');
    Route::put('password-update','AppinfoController@updatePassword')->name('password.update');
});