<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KebabDetail extends Model
{
    use HasFactory;

    protected $table = 'kebab_details'; // Table name

    protected $fillable = [
        'kebab_id',
        'opening_hours',
        'meat_types',
        'sauces',
        'status',
        'is_craft',
        'is_in_stall',
        'is_chain_member',
        'ordering_options',
    ];

    protected $casts = [
        'opening_hours' => 'array',
        'meat_types' => 'array',
        'sauces' => 'array',
        'ordering_options' => 'array',
    ];
}
