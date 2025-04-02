<?php
// app/Http/Middleware/HandleInertiaRequests.php

namespace App\Http\Middleware;

use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app'; // Root view for Inertia

    public function share($request)
    {
        return array_merge(parent::share($request), [
            // Shared data for all Inertia requests
            'auth' => [
                'user' => $request->user(),
            ],
        ]);
    }
}
