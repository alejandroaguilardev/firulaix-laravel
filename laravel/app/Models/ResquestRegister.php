<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResquestRegister extends Model
{
    use HasFactory;
    protected $table = "request_register";
    protected $primary_key = "id";

    protected $guarded = [];
}
