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

Route::get('/', function () {
    return view('pages/landingPage');
});

// Route::get('/download/{id}',function($id){
//     $file = public_path()."/files/".$id.".pdf";
//     $headers = array(
//         'Content-Type: application/pdf',
//     );
//     return response()->download($file, 'kodegiri.pdf', $headers);
// });

Route::get('/review-pdf/{id}',function($id){
    $file = public_path()."/files/".$id.".pdf";
    return response()->file($file);
});