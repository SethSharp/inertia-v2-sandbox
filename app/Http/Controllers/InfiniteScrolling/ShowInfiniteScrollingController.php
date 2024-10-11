<?php

namespace App\Http\Controllers\InfiniteScrolling;

use Inertia\Inertia;
use App\Models\User;
use Inertia\Response;
use App\Http\Controllers\Controller;

class ShowInfiniteScrollingController extends Controller
{
    public function __invoke(): Response
    {
        ray('fetching again');
        return Inertia::render('Infinite/Show', [
            'users' => Inertia::merge(User::query()->take(5)->get()),
        ]);
    }
}