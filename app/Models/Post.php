<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    // I can use this method - mass assignment - with an associative array to indicate which fields the database may receive, without setting many attributes in the Controller
    protected $fillable = [
        'title',
        'subtitle',
        'content'
    ];

    // This function ought to have this name pattern (set<AttributeName>Attribute) to be invoked when the attribute is set. In the this kind of function I may put rules in, like not to allow negative numbers with an "if", for example.
    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
