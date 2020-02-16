<?php

namespace App\collegeModel;

use Illuminate\Database\Eloquent\Model;

class FecthCollegesModel extends Model
{
    // table declaration
    protected $table='colleges_and_universities';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable=['id','name'];

}
