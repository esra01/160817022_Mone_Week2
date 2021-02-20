<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});//

//Route::get('/Test1',function()
//{
//	return view('pages/index');
//});//
//

//Route::get('new/{id}',function($id)
//{
//	return $id;
//});//

//	
//Route::get('test',function()
//{
//	return "Test";
//});

Route::get('/', function()
{
	return view('pages/index');
});

Route::get('/menu',function()
{
	return view('pages/menu');
});

Route::get('/menu/puding/fla',function()
{
	return view('pages/fla');
});

Route::get('/menu/puding/pannacotta',function()
{
	return view('pages/pannacotta');
});

Route::get('/menu/puding/buah',function()
{
	return view('pages/buah');
});