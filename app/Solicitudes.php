<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model
{
    
    protected $fillable = ['direccion','fecha','user_id','estado'];

    public function user(){
    	$this->belongsTo('App\User');
    }

}
