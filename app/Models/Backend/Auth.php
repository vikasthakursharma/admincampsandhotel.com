<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $primaryKey ="id";
}
