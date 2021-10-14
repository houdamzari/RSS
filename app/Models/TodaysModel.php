<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodaysModel extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'date', 'link', 'smalldesc'];

}
