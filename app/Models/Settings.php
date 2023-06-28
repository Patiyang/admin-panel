<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Settings extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'gpt_key',
        'elevenlabs_key',
        'gpt_append_message',
        'gpt_response_length'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        // 'password' => 'hashed',
    ];
}
