<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name_user',
        'book',
        'favorite'

    ];
}
