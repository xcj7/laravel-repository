<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Teacher;
// use App\Http\Requests\StoreStudentRequest;
// use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
  
    

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
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        
    }

   
    public function destroy(Student $student)
    {
        
    }
    public function Registration()
    {
        return view('Student.student');
    }

    public function RegistrationSubmitted(Request $request)
    {
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'email'=>'email',
             'password'=>'required| min:8 | max:12'
        ]);
        $student = new Teacher();
        $student->name= $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        if($student)
        {
            $student->save();
            $request->session()->put('user',$request->name);
            return redirect()->route('contact');
        }
        return back();

        
    }
    public function login(){
        $errormsg=null;
        return view('Student.login')->with('errormsg', $errormsg);
    }
    public function loginSubmitted(Request $request){
        
        $teacher = Teacher::where('email',$request->email)
                        ->where('password',$request->password)
                        ->first();
                                    
       if($teacher)
       {
           $request->session()->put('user',$teacher->name);
           return redirect()->route('contact');
       }
       $errormsg="Invalid Email or Password";
        return view('Student.login')->with('errormsg', $errormsg);
    }
    public function contact(Request $request){
        $value = $request->session()->get('user');
        if($value)
        {
            return view('Student.contact');
        }
        return back();
        
    }
    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}
