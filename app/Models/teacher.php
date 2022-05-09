<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class teacher extends Model
{
    use HasFactory;
    public $table = "teachers";

    // public  function getTeacher(){
    //     $records = DB::table('teachers')->select('id','lectures_name','gender','phone','email_id','address','nationality','dob','faculty')->get()->toArray();
    //     return $records;
    // }
    
}
