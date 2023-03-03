<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    // protected $table = "posts";
    // protected $primaryKey = "post_id";

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    // creating row - Mass Assigning error resolver
    protected $fillable = [
        'title',
        'content'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
