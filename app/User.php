<?php

namespace App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

      

    protected $table ='users';
    protected $primaryKey ='id';

    protected $fillable = [
        'name', 'direccion', 'num_documento','telefono','email', 'password','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUrlPathAttribute()
    {
    
    return Storage::url($this->avatar);
    }

    public function posts()
    {
      return $this->hasMany(Post::class);
    
    }
    



}
