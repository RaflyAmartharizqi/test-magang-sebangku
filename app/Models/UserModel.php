<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'telp',
        'email',
        'password',
    ];
}
