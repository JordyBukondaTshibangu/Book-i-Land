<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $fillable = [
        'title',
        'author',
        'pages',
        'edition',
        'linkToBook',
        'category_id'
    ];
    
    public function user(){
        
        return $this->belongsTo(User::class);
    }

    public function category(){

        return $this->hasOne(Category::class);
        
    }
}
