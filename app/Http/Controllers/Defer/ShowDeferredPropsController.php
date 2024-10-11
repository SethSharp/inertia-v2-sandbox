<?php

namespace App\Http\Controllers\Defer;

use Inertia\Inertia;
use App\Models\User;
use Inertia\Response;
use App\Http\Controllers\Controller;

class ShowDeferredPropsController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('DeferredProps/Show', [
            'users' => Inertia::defer(fn () => User::all()),
        ]);
    }
}