<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
       protected $guarded = array();
        protected $table = 'comments'; // table name
        public $timestamps = 'false' ; // to disable default timestamp fields
 
        // model function to store form data to database
        public static function saveFormData($data)
        {
            DB::table('comments')->insert($data);
        }
 
}
}
