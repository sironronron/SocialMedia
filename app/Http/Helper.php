<?php

namespace App\Http;

use App\Models\User;
use Illuminate\Support\Facades\Cache;


class Helper {

    /**
     * [getOnlineUsers description]
     * @return [type] [description]
     */
    public static function getOnlineUsers()
    {
        $users = Cache::get('online-users');

        if (!$users) return null;

        $onlineUsers = collect($users);

        $dbUsers = User::find($onlineUsers->pluck('id')->toArray());

        $displayUsers = [];

        foreach ($dbUsers as $user) {
            $onlineUser = $onlineUsers->firstWhere('id', $user['id']);

            $displayUsers[] = [
                'id' => $user->id,
                'name' => $user->name,
                'away' => $onlineUser['last_activity_at'] < now()->subMinutes(3)
            ];
        }

        return collect($displayUsers);
    }
}
