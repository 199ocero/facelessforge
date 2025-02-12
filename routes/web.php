<?php

use App\Livewire\Agent;
use Illuminate\Support\Facades\Route;

Route::get('/', Agent::class)->name('home');
