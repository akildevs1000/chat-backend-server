<?php

use App\Events\MessageSent;
use Illuminate\Support\Facades\Route;

Route::post('/', function () {
    return request("id");
    event(new MessageSent(request("id")));
})->middleware('check.access');
