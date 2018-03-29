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

Route::get('/','HomeController@home')->name('welcome');
Route::get('/projects','ProjectController@projects')->name('projects.general');
Route::get('/dowloads',function(){
		return view('General.downloads');
})->name('downloads');
Route::get('/documents/{id}','PostController@documentation')->name('documentation');
Route::get('/posts','PostController@posts')->name('postall');
Route::get('/posts/{id}','PostController@single')->name('postone');
Route::get('/contact','ContactController@index')->name('contact');
Route::post('/contact/store','ContactController@store')->name('contact.store');

Auth::routes();


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

	Route::get('/', 'HomeController@index')->name('home');
	
	Route::get('/test',function(){
	return App\User::find(1)->profile;
});

Route::get('/post/create',[
	'uses'=>'PostController@create',
     'as'=>'post.create'

	]);
Route::post('/post/store',[
	'uses'=>'PostController@store', 
     'as'=>'post.store'
]);
Route::get('/category/create',[
	'uses'=>'CategoriesController@create',
     'as'=>'category.create'

	]);
Route::post('/category/store',[
	'uses'=>'CategoriesController@store',
     'as'=>'category.store'

	]);
Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete');
Route::post('/category/update/{id}', 'CategoriesController@update')->name('category.update');

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/post/delete/{id}', 'PostController@destroy')->name('post.delete');
Route::get('/post/trashed', 'PostController@trashed')->name('post.trashed');
Route::get('/post/kill/{id}', 'PostController@kill')->name('post.kill');
Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit');
Route::post('/post/update/{id}', 'PostController@update')->name('post.update');
Route::get('/tag', 'TagController@index')->name('tags');
Route::post('/tag/store', 'TagController@store')->name('tag.store');
Route::get('/tag/create', 'TagController@create')->name('tag.create');
Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
Route::post('/tag/update/{id}', 'TagController@update')->name('tag.update');
Route::get('/tag/delete/{id}', 'TagController@destroy')->name('tag.delete');

Route::get('/documentations', 'DocumentationController@index')->name('documentations');

//Route::get('/users','UsersController@index')->name('users');
//Route::get('/users/create','UsersController@create')->name('user.create');
//Route::post('/users/store','UsersController@store')->name('user.store');
//Route::get('/users/admin/{id}','UsersController@admin')->name('user.admin');
//Route::get('/users/notadmin/{id}','UsersController@notadmin')->name('user.not.admin');
//Route::get('/users/profile','ProfileController@index')->name('user.profile');
//Route::post('/users/profile','ProfileController@update')->name('user.profile.update');
//Route::get('/users/profile/delete/{id}','UsersController@destroy')->name('user.delete');


Route::post('/projects',[
	'uses'=>'ProjectController@store',
	'as'=>'project.store']);
Route::get('/projects/',[
	'uses'=>'ProjectController@index',
     'as'=>'projects'

	]);
Route::get('/projects/create',[
	'uses'=>'ProjectController@create',
     'as'=>'project.create'

	]);
Route::get('/projects/edit/{id}','ProjectController@edit')->name('project.edit');
Route::post('/projects/update/{id}','ProjectController@update')->name('project.update');
Route::get('project/delete/{id}','ProjectController@delete')->name('project.delete');
Route::get('messages','ContactController@getall')->name('message');
Route::get('messages/show/{id}','ContactController@show')->name('message.show');
Route::get('messages/delete/{id}','ContactController@destroy')->name('message.delete');
});
