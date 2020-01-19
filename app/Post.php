<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Post extends Model
{
    
   protected $fillable = [
      'textarea', 'title','user_id' 
 ];

protected $guarded=[];


public function user()
{
  return $this->belongsTo(User::class);
}

}
