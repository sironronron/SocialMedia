<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserStatus extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'user_id',
        'status',
        'last_online'
    ];

    /**
     * The attributes that should be cast to native types
     * 
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * @return array
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
