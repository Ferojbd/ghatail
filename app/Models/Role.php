<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['role'];

    public function User(){
        return $this->belongsToMany(User::class, 'role_users', 'user_id', 'role_id');
    }
}
