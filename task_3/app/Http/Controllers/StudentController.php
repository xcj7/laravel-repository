<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\student;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorestudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorestudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestudentRequest  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestudentRequest $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //
    }

    public function registration()
    {
        return view('pages.student');
    }
    public function registrationSubmitted(Request $request)
    {
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'email'=>'email',
            'phone'=>'required',
             'password'=>'required| min:8 | max:12'
        ]);
        
        $st = new student();
        $st->name = $request->name;
        $st->email = $request->email;
        $st->phone = $request->phone;
        $st->password = $request->password;
        $st->type = "user";
        if($st)
        {
            $st->save();
            $request->session()->put('user',$st->name);
            return redirect()->route('profile');
        }
    }
    public function login()
    {
        $msg = "";
        return view('pages.login')->with('msg',$msg);
    }
    public function loginSubmitted(Request $request)
    {
        $validate = $request->validate([
            'email'=>'email',
             'password'=>'required| min:8 | max:20'
        ]);
        $stu = student::where('email',$request->email)
                       ->where('password',$request->password)
                        ->first();
        if($stu->type =='admin'){
            $request->session()->put('user',$stu->name);
            return redirect()->route('adminprofile');
        }
        else if($stu->type =='user'){
            $request->session()->put('user',$stu->name);
            return redirect()->route('profile');
        }  
        $msg = "Invalid Email or Password";
        return view('pages.login')->with('msg',$msg);              
    }
    public function profile(Request $request)
    {
       $value = $request->session()->get('user');
       $stu = student::where('name',$value)->first();
       if($stu)
       {
        return view('pages.profile')->with('students',$stu);
       }

    }
    public function studentList(Request $request){
        $students = student::paginate(3);
        if($request->session()->has('user'))
        {
            return view('pages.adminDashboard')->with('students',$students);
        }
       
    }
    

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }

    public function edit(Request $request)
    {
        $stu = student::where('id',$request->id)->first();
        return view('pages.editprofile')->with('students',$stu);
    }

    public function editSubmitted(Request $request)
    {
        $stu = student::where('id',$request->id)->first();
        $stu->name = $request->name;
        $stu->email = $request->email;
        $stu->phone = $request->phone;
        $stu->save();
        return redirect()->route('profile');
    }
} 

