<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\User;

class ShowDashboardController extends Controller
{
    public function __invoke()
    {
        ray('polling');
        return Inertia::render('Dashboard', [
            'users' => User::all()
        ]);
    }
}