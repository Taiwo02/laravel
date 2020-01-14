<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // use Notifiable;
    // protected $filiable =[
    //     'body','user_id','comment_id'
    // ];
     //table Name
     protected $table ='comments';
     //key
     public $primarykey = 'id';
     //timestamps
     public $timestamps =true;
     public function user(){
        return $this->belongsTo('App\user');
     }
     public function post(){
      return $this->belongsTo('App\post');
   }
}
