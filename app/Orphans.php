<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orphans extends Model
{
        //Table name
        protected $table = 'orphans';

        //Primary key
        public $primaryKey = 'id';
    
        //Timestamps
        public $timestamps = true; 
}
