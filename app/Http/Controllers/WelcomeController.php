<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\KeyGenerateCommand;
use Illuminate\Support\Facades\Artisan;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        Artisan::call(KeyGenerateCommand::class, ['--show' => true]);

        return view('welcome', [
            'key' => Artisan::output()
        ]);
    }
}
