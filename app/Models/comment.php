<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{

    protected $fillable = [
        'id',
        'userName',
        'comment',
        'idBook',
        'created_at'

    ];
    use HasFactory;
}
