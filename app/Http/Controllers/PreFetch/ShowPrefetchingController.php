<?php

namespace App\Http\Controllers\PreFetch;

use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;

class ShowPrefetchingController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('Prefetch/Show');
    }
}