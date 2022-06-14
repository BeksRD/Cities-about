<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'role',
        'about',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function city(){
        return $this->hasMany(City::class,'user_id');
    }
    public function reviews(){
        return $this->hasMany(Review::class,'user_id');
    }
    public function saveUser($request) : self
    {
        $this->name = $request->name;
        $this->email = $request->email;
        $this->username = $request->username;
        $this->password = bcrypt($request->password);
        $path = $request->file('image')->store('/images/avatars');
        $this->avatar = $path;
        if ($request->about){
            $this->about = $request->about;
        }
        $this->save();

        return $this;
    }

}
