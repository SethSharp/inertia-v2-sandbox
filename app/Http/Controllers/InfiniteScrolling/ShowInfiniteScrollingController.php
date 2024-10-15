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
        return Inertia::render('InfiniteScrolling/Show', [
            'users' => Inertia::merge(function () {
                return User::query()->take(5)->get();
            }),
        ]);
    }
}
