<?php

namespace App\Http\Controllers\admin;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Classdetails;

class AdminController extends Controller
{
	// public function check($val)
	// {
	// 	$y=Registration::all()->where('user_name',$val)->count();
	// 	if($y){
	// 		return 1;
	// 	}else{
	// 		return redirect()->route('getLogin');
	// 	}
	// }

	// public function __construct(UserRepository $users)
 //    {
 //    	return "pandeyji";
 //        //$this->users = $users;
 //    }

    public function Home($userName)
    {
    	//check($userId);
    	$users=Registration::all()->where('user_name',$userName)->first();
// return $users;
    	return view('admin.index',[
    		'user'=>$users,
    	]);
    }

    public function NewStudent($userName)
    {
    	$users=Registration::all()->where('user_name',$userName)->first();
    	return view('admin.addStudentForm',[
    		'user'=>$users,
    	]);
    }

    public function AddNewStudent($userName)
    {
    	$newStudent=new Registration;
    	$count=Registration::all()->count();
    	$createdId='user'.($count+1);
    	$newStudent->user_name=$createdId;
    	$newStudent->first_name=request('stuName');
    	$newStudent->pass_code='pass'.($count+1);
    	$newStudent->password='pandeyji';
    	$newStudent->phone_number=request('stuPhone');
    
    	$newStudent->email_id=request('stuEmail');

    	$newStudent->aadhar_number=request('stuAadhar');
    	$newStudent->gender=request('stuGender');
    	$newStudent->class_id=request('stuClass');
    	$newStudent->address=request('stuAddress');
    	$newStudent->photo=request('stuPhoto');
    	$newStudent->save();

    	return redirect()->route('admin-studentDetails',[
    		'userName'=>$userName,
    		'studentId'=>$createdId,
    	]);

    }

    public function StudentDetails($userName,$studentId)
    {
    	$users=Registration::all()->where('user_name',$userName)->first();
    	$studentDetails=Registration::all()->where('user_name',$studentId)->first();

    	return view('admin.details',[
    		'user'=>$users,
    		'student_details'=>$studentDetails,
    	]);
    }

    public function StudentAll($userName)
    {
        $users=Registration::all()->where('user_name',$userName)->first();
        $studentList=Registration::all();
        return view('admin.allStudent',[
            'user'=>$users,
            'student_list'=>$studentList,
        ]);
    }

    public function NewClassForm($userName)
    {
       $users=Registration::all()->where('user_name',$userName)->first();
       return view('admin.addClassForm',[
            'user'=>$users,
        ]);
    }

    public function AddNewClass($userName)
    {
        $addClass=new Classdetails;
        $addClass->teacher_pass_code=session('pass');
        $count=Classdetails::all()->count();
        $addClass->class_id='clsss'.($count+1);
        $addClass->class_name=request('clsName');
        $addClass->subject_name=request('subName');
        $addClass->class_time=request('clsTime');
        $addClass->class_location=request('clsLocation');
        $addClass->class_working_time=request('workingTime');


        $classDay=json_encode(request('clsWorkDay'));//implode(request('clsWorkDay'));
        $addClass->class_working_days=$classDay;
        $x=$addClass->save();

        if($x){
            return redirect()->route('admin-allClassList',[
                 'userName'=>$userName,
            ]);
        }
    }

    public function ClassList($userName)
    {
        $techerId=session('pass');
        $classList=Classdetails::all()->where('teacher_pass_code',$techerId);
        $users=Registration::all()->where('user_name',$userName)->first();
        return view('admin.allClass',[
            'user'=>$users,
            'class_list'=>$classList,
        ]);
    }
}
