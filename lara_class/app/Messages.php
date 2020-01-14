<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table='messages';
    public $primarykey='id';
    public $timestamps=true;
    public function users(){
        return $this->belongsTo('App\user');
     }
}
