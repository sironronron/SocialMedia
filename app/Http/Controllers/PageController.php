<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

// User
use App\Models\User;
use App\Models\UserProfile;

// Helper
use Helper;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified']);
    }

    /**
     * Show all posts from friends
     * @return array $dsahboard
     */
    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }

    /**
     * Show all messages
     * @return array $messages
     */
    public function messages()
    {
        return Inertia::render('Messages');
    }

    /**
     * [notifications description]
     * @return [type] [description]
     */
    public function notifications()
    {
        return Inertia::render('Notifications');
    }

    /**
     * [find_friends description]
     * @return [type] [description]
     */
    public function find_friends()
    {
        return Inertia::render('FindFriends');
    }

    /**
     * [show_profile description]
     * @param  [type] $public_id [description]
     * @return [type]            [description]
     */
    public function show_profile($public_id)
    {
        $user = UserProfile::where('public_id', $public_id)
            ->with('user')
            ->first();

        return Inertia::render('Profile', ['data' => $user]);
    }
}
