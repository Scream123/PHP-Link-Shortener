<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $table = 'links';

    protected $fillable = ['original_url', 'short_code', 'clicks'];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

}
