<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Reply extends Model
{
   public function quetsion(){

    return $this->belongsTo(Quesion::class);
   }
   public function user(){

    return $this->belongsTo(User::class);
   }
   public function like(){

    return $this->hasMany(Like::class);
   }
}
