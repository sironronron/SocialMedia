<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $users = Cache::get('online-users');

            if (empty($users)) {
                Cache::put('online-users', [['id' => Auth::user()->id, 'last_activity_at' => now()]], now()->addMinutes(10));
            } else {
                foreach ($users as $key => $user) {
                    if ($user['id'] === Auth::user()->id) {
                        unset($users[$key]);
                        continue;
                    }

                    if ($user['last_activity_at'] < now()->subMinutes(10)) {
                        unset($users[$key]);
                        continue;
                    }
                }

                $users[] = ['id' => Auth::user()->id, 'last_activity_at' => now()];

                // Put thiss array in the cache
                Cache::put('online-users', $users, now()->addMinutes(10));
            }
        }

        return $next($request);
    }
}
