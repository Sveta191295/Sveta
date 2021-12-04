<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function account()    
    {
        return $this->hasOne('App\Models\Account');
        
    }

    public function orders(){
        return $this->hasMany(Order::class,
    );
}

    public function company(){
        return $this->belongsTo(Company::class,'company_id');
    }


    public function getNameAttribute($value){  
        return ucfirst($value);
    }


    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->company_id}";
    }


}
