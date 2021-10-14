<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaVieEco extends Model
{
    protected $fillable = ['title', 'content', 'date', 'link', 'smalldesc'];
}
