<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointement_client extends Model
{
    use HasFactory;
    protected $table = 'appointement_client';
    protected $guarded=[];
    public $timestamps = false;

}
