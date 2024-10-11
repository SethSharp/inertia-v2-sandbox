<?php

namespace App\Http\Controllers\Polling;

use Inertia\Inertia;
use App\Models\User;
use Inertia\Response;
use App\Http\Controllers\Controller;

class ShowPollingController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('Polling', [
            'users' => User::all()
        ]);
    }
}