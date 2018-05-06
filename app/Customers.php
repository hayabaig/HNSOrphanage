<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //Table name
    protected $table = 'customers';

    //Primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true; 
}
