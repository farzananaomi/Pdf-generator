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

use Illuminate\Support\Facades\App;

route::get('/', function () {


    /*    $data="hello word";

        $pdf = PDF::loadView('pdf.invoice', $data);
        return $pdf->download('invoice.pdf');*/
    //return PDF::loadFile('http://www.github.com')->inline('github.pdf');
    //return view('welcome');

    return "hello";
});

Route::get('pdfview',array('as'=>'pdfview','uses'=>'ItemController@pdfview'));