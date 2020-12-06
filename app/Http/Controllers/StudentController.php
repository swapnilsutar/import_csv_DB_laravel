<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use Excel;
use App\Imports\StudImport;

class StudentController extends Controller
{
    public function insert(Request $req){

        $stud = new Student;

        $stud->first_name = $req->f_name;
        $stud->last_name = $req->l_name;
        $stud->class_name = $req->class;

        $stud->save();

        return redirect()->back()->with("status","Registration Completed");
    }

    public function show(){

        $data = Student::orderBy('id', 'desc') -> paginate(10);

        return view('view_all', ['data'=>$data]);

    }

    public function adminimport(){
        return view('admin');
    } 

    public function import(Request $req){
        Excel::import(new StudImport,$req->file);

        return "Record Imported Successfully";

    }

}
    