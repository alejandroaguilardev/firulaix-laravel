<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{
    use HasFactory;
    protected $table = "newspapers";
    protected $primary_key = "id";

    protected $guarded = [];
}
