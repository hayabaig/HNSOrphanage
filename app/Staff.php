<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
        //Table name
        protected $table = 'staff';

        //Primary key
        public $primaryKey = 'pass';
    
        //Timestamps
        public $timestamps = true; 
}
