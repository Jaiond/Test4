<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/testGet',function()
{
	return "Tao Test Get Sassss ^^" ;
});

Route::post('/testPost',function()
{
	return "Tao Test Post ^^" ;
});
Route::get('/loadForm',function()
{
	return View::make('testForm');
});

Route::any('/anyRoute',function()
{
	return "Tao Test AnyRouth";
});

Route::get('testView2',function()
{
	return View::make('testView');
});

Route::get('/exam/index','ExamController@index');
Route::get('/exam/myView','ExamController@myView');
Route::get('/exam/showVar','ExamController@showVar');
Route::get('/exam/showVarWithMethod','ExamController@showVarWithMethod');
Route::get('/display','ExamRedirectController@display');
Route::get('/goToDisplay','ExamRedirectController@goToDisplay');

Route::get('setText','ExamRedirectController@setText');
Route::get('getText','ExamRedirectController@getText');
Route::get('/Okay','HomeController@Okay');

Route::get('/myTemplate','myTemplateController@index');
Route::get('/myVar','myTemplateController@myVar');
Route::get('myCondition','myTemplateController@myCondition');
Route::get('myLoop','myTemplateController@myLoop');
Route::get('myInclude','myTemplateController@myInclude');
Route::get('myComment','myTemplateController@myComment');

Route::get('testBelongsTo',function()
	{
		$model = Book::all();
		return View::make('test_relation.belongsTo')
			->with('model','$model');
	});
























