<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserProfile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'public_id',
        'user_id',
        'nickname',
        'about_me',
        'birthday',
        'gender',
        'is_application_user',
        'picture_big_url',
        'picture_small_url',
        'picture_url',
        'cover_picture_big_url',
        'cover_picture_small_url',
        'cover_picture_url',
        'political_view',
        'religion',
        'looking_for',
        'looking_for_genders',
        'relationship_status',
        'significant_other_id',
        'affiliate_code',
        'work_places',
        'schools',
        'wall_count',
        'work_place_count',
        'school_count',
        'notes_count',
        'affiliation_count',
        'privacy_setting',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];

    /**
     * @return array
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'public_id';
    }
}
