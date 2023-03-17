<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;


    protected $fillable = [ 'title', 'body' ];
}
