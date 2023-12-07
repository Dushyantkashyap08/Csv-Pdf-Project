<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class login extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;
    protected $table= 'login';
    public $timestamps = false;

    protected $fillable = ['password','username'];

}
