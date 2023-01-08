<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'Description',
        'nameFile'

    ];

    use HasFactory;
}
