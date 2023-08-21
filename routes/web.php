<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CommentPostController;

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



Route::get('/sesi', [SessionController::class, 'index'])->name('login');

Route::get('/sesi/register', [SessionController::class, 'register']);


Route::get('/', function () {
    return view('landingpage.landing'); // Mengganti 'welcome' dengan 'landingpage.landing'
});

Route::post('/submit-message', function (Request $request) {
    $message = new Message();

    $message->nama = $request->input('name');
    $message->email = $request->input('email');
    $message->no_tlp = $request->input('phone_number');
    $message->subject = $request->input('subject');
    $message->pesan = $request->input('message');

    $message->save();

    return redirect('/')->with('success', 'Pesan berhasil dikirim!');
});

Route::get('events', [EventController::class, 'index'])->name('events.index');
Route::get('events/create', [EventController::class, 'create'])->name('events.create');
Route::post('events', [EventController::class, 'store'])->name('events.store');
Route::get('events/{event}', [EventController::class, 'show'])->name('events.show');
Route::get('events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
Route::get('event', function () {
    return view('events.event');
})->name('event');
// ends

// sejarah
Route::get('/profile/sejarah', function () {
    return view('profile.sejarah');
})->name('sejarah');



Route::resource('comment_posts', CommentPostController::class);
