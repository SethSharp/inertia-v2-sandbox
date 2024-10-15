<?php

namespace App\Http\Controllers\WhenVisible;

use Inertia\Inertia;
use App\Models\User;
use Inertia\Response;
use App\Http\Controllers\Controller;

class ShowWhenVisibleController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('WhenVisible/Show', [
            'users' => Inertia::optional(function () {
                sleep(3);
                return User::all();
            }),
        ]);
    }
}
