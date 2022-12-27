<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $fillable= ['email','email_verified_at','address','phone','phone2','salary','name','section_id','job','status'];
    //protected $guarded=[];


    // One To One get section of employee
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

  


}
