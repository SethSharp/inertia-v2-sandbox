<?php

namespace App\Http\Controllers\PreFetch;

use Inertia\Inertia;
use App\Models\User;
use Inertia\Response;
use App\Http\Controllers\Controller;

class ShowPreFetchedUsersController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('Prefetch/Users', [
            'users' => User::all()
        ]);
    }
}