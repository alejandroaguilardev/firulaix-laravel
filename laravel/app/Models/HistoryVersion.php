<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryVersion extends Model
{
    use HasFactory;

    protected $table = "history_versions";
    protected $primary_key = "id";

    protected $guarded = [];
}
