<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class France24 extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'date', 'link', 'smalldesc'];

}
