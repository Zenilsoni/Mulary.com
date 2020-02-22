<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
    //
    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    public $timestamps = false;
    protected $fillable =['user_id','post_platform', 'posted_date', 'advertise_id'];
}
