<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userverify extends Model
{
    use HasFactory;
    public $table="users_verify_tables";

    protected $fillable=[
        'user_id',
        'token'
     ];
     public function user()
     {
        return $this->belongsTo(user::class);
     }
}
