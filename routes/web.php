<?php

use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $randomNumber = rand(1, 100);

    return redirect("/welcome/{$randomNumber}");
});

Route::livewire('/welcome/{number}', Welcome::class);
