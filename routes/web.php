<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TasksController;

use Illuminate\Support\Facades\Mail;

use App\Mail\MailtrapExample;
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
    return view('welcome');
});

Route::get('tasks/add', [TasksController::class, 'add'])->name('tasks.add');

Route::resource('tasks', TasksController::class);


Route::get('/send-mail', function() {

Mail::to('newuser@example.com')->send(new MailtrapExample());
return 'A message has been sent to Mailtrap';

});