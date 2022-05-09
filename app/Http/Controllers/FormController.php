<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;





class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo "this is our home page";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // form validation 
    public function getdata(Request $request)
    {
        $request->validate([
            'lectures_name'=> 'required'
            // 'gender'=> 'required',
            // 'phone'=> 'required',
            // 'email_id'=> 'required',
            // 'address '=> 'required',
            // 'nationality '=> 'required',
            // 'dob '=> 'required',
            // 'faculty '=> 'required'

        ]);
                return $request->input();

    }


   public function formdata(Request $request){

        $teacher = new Teacher();
        
            $teacher->id = $request->id;
            $teacher->timestamps = $request->timestamps;
            $teacher ->lectures_name = $request ->lectures_name;
            $teacher ->gender = $request ->gender;
            $teacher ->phone = $request ->phone;
            $teacher ->email_id = $request ->email_id;
            $teacher ->address = $request ->address; 
            $teacher ->nationality = $request ->nationality;
            $teacher ->dob = $request ->dob;
            $teacher ->faculty = $request ->faculty;
            
            $teacher ->save();
            echo"your data was Submitted Successfully";
    }
    


    public function viewList(){

        //store this data to a single variable

        
        //$data = teacher::all(); //here all the data will show to make pagination we will replace 'all' with 'paginate'
        $data = teacher ::paginate(5);  // this is pagination of 5, it will show the table with only 5 data rows

        return view('list',['teachers'=>$data]);
    }



    public function abc(){
        //
        echo "this is our ABC page";
    }

    
    
   
   
}
