<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasFactory;

    protected $table = 'suggestions';

    protected $fillable = [
        'user_id',
        'subject',
        'is_reviewed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
