<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebab extends Model
{
    use HasFactory;

    protected $table = 'kebab';

    protected $fillable = [
        'name',
        'logo',
        'address',
        'latitude',
        'longitude',
        'year_opened',
        'year_closed',
        'opening_hours',
        'meat_types',
        'sauces',
        'status',
        'is_craft',
        'is_in_stall',
        'is_chain_member',
        'ordering_options',
    ];

    public function suggestions()
    {
        return $this->hasMany(Suggestion::class);
    }
    public function details()
    {
        return $this->hasOne(KebabDetail::class);
    }

}
