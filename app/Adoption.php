<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
        //Table name
        protected $table = 'adoption';

        //Primary key
        public $primaryKey = 'id';

        //Timestamps
        public $timestamps = true; 
}
