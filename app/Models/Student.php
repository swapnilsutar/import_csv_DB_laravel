<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illiminate\Support\Facades\DB;

class Student extends Model
{
    
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['id','first_name','last_name','class_name'];

    public static function getStudent(){
        $record = DB::table('students')->select('id','first_name','last_name','class_name');
        return $record;
    }

}
