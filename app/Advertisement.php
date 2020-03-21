<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisements extends Model
{
    //
    protected $table = 'advertisements';
    protected $primaryKey = 'add_id';
    public $timestamps = false;
    //protected $fillable =['campaign_id','name', 'image', 'description', 'budget_amount', 'post_start_date', 'post_end_date', 'total_sharing','available_sharing', 'media_platform'];
}
