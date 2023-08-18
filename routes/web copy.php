<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Message;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage.landing'); // Mengganti 'welcome' dengan 'landingpage.landing'
});

Route::post('/submit-message', function (Request $request) {
    $message = new Message();

    $message->nama = $request->input('nama');
    $message->email = $request->input('email');
    $message->no_tlp = $request->input('no_tlp');
    $message->subject = $request->input('subject');
    $message->pesan = $request->input('pesan');

    $message->save();

    return redirect('/')->with('success', 'Pesan berhasil dikirim!');
});


// ends
