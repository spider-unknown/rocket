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

Route::get('{path}', function (Illuminate\Http\Request $request) {
    $tag = \App\Tag::where('name', 'like', '%' . request('s') . '%')->get();
    $search_value = new \App\Search();
    $search_value->search_value = $request->s;
    $search_value->save();
    return view('index')
        ->with('posts',$tag)
        ->with('name', 'Search results: ' .request('s'))
        ->with('s',request('s'));
})->where('path', 'index|');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category/create', ['uses'=>'CategoriesController@create', 'as' => 'category.create']);
Route::get('/categories', ['uses'=>'CategoriesController@index', 'as' => 'category.index']);
Route::post('/category/store', ['uses'=>'CategoriesController@store', 'as' => 'category.store']);
Route::get('/category/edit/{id}', ['uses'=>'CategoriesController@edit', 'as' => 'category.edit']);
Route::post('/category/update/{id}', ['uses'=>'CategoriesController@update', 'as' => 'category.update']);
Route::get('/category/delete/{id}', ['uses'=>'CategoriesController@destroy', 'as' => 'category.delete']);

Route::get('/tag/create', ['uses'=>'TagsController@create', 'as' => 'tag.create']);
Route::get('/tags', ['uses'=>'TagsController@index', 'as' => 'tag.index']);
Route::post('/tag/store', ['uses'=>'TagsController@store', 'as' => 'tag.store']);
Route::get('/tag/edit/{id}', ['uses'=>'TagsController@edit', 'as' => 'tag.edit']);
Route::post('/tag/update/{id}', ['uses'=>'TagsController@update', 'as' => 'tag.update']);
Route::get('/tag/delete/{id}', ['uses'=>'TagsController@destroy', 'as' => 'tag.delete']);

Route::get('/posts', ['uses' => 'PostsController@index', 'as' => 'post.index']);
Route::get('/post/create', ['uses' => 'PostsController@create', 'as' => 'post.create']);
Route::post('/post/store', ['uses' => 'PostsController@store', 'as' => 'post.store']);