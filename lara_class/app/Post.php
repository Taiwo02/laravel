<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table Name
    protected $table ='posts';
    //key
    public $primarykey = 'id';
    //timestamps
    public $timestamps =true;
    public function user(){
       return $this->belongsTo('App\user');
    }
    public function comment(){
        return $this->belongsTo('App\comment');
     }
}
