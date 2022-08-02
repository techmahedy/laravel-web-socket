<?php

use App\Events\RealTimeMessage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    event(new RealTimeMessage('Hello World'));
    return  view('welcome');
});
