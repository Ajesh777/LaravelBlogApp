<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** 11.1: Table Name: */
        protected $table = 'posts'; 

    /** 11.2: Primary Key: */
        public $primaryKey = 'id';

    /** 11.3: Time Stamps:
     * public $timestamps = true; 
     */

    /** 24.1: Create Relation, Posts belongs to User: */
        public function user(){
            return $this->belongsTo('App\User');
        }
}
