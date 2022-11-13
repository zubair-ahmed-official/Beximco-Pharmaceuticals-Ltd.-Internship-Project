<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Http\Controllers\OTP;
use App\Models\OTP;
use App\Models\Admin;
use App\Models\Manager;
use App\Models\Salesman;
use App\Models\Register;
use App\Models\ques_ans;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
//use Illuminate\Support\Facades\Input;  
use App\Models\Disease;
use App\Models\Doctor;
use App\Models\Order;
use App\Models\Delivered_order;
use App\Models\Booked_Appointment;
use App\Models\Postimage;
use Illuminate\Support\Str;


//use Validator;
//use Auth;

class PhoneAuthController extends Controller
{
    public function home()
    {
      return view('Medical.HomePage');
    }

    public function index()
    {
      return view('Medical.welcome');
    }

    public function register()
    {
      return view('Medical.register');
    }
    public function register_store(Request $request)
    {
        $request->validate(
          [
            'name'=>'required', 
            'code'=>'required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'email'=>'required|email|unique:register',
            'phone'=>'required|min:11|max:11',
            'nid'=>'required', 
            'address'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'edu'=>'required'
          ],
          [
            'name.required'=>'Please Enter a valid Name',
            'code.required'=>'Please Enter a valid code',
            'code.regex'=>'Password condition doesn\'t match',
            'email.required'=>'Please Enter a valid email',
            'email.unique'=>'This email is already in use',
            'phone.required'=>'Please Enter a valid phone',
            'phone.min'=>'Invalid phone number',
            'phone.max'=>'Invalid phone number',
            'nid.required'=>'Please Enter a valid nid',
            'address.required'=>'Please Enter a valid address',
            'gender.required'=>'Please Enter a valid gender',
            'age.required'=>'Please Enter a valid age',
            'edu.required'=>'Please Enter a valid education',
          ]
        );
        $reg = new Register;
        $reg->name = $request->input('name');
        $reg->code = $request->input('code');
        $reg->email = $request->input('email');
        $reg->phone = $request->input('phone');
        $reg->nid = $request->input('nid');
        $reg->address = $request->input('address');
        $reg->gender = $request->input('gender');
        $reg->age = $request->input('age');
        $reg->edu = $request->input('edu');
        
        if($request->file('image'))
        {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $reg['image']= $filename;
        }

        $otp = new OTP;
        $otp->name = $request->input('name');
        $otp->email = $request->input('email');
        $otp->phone = $request->input('phone');
        $otp->code = $request->input('code');

        //$data= new Postimage();

        
        //$data->save();

        $reg->save();
        
        $otp->save();
        return redirect()->back()->with('status','Registration and OTP Information saved Successfully');

        //return redirect()->back()->with('status','OTP Information saved Successfully');
    }
    public function edit_profile($id)
    {
        $reg = Register::find($id);
        return view('Medical.update_profile', compact('reg'));
    }

    public function edit_password()
    { 
        return view('Medical.ChangePassword');
    }

    public function check_password(Request $request)
    {
      $request->validate(
        [
          'email'=>'required|exists:otp_table,email',
          'code'=>'required|exists:otp_table,code'
        ],
        [
          'email.required'=>'Please enter a valid email',
          'code.required'=>'Please enter valid Password/OTP',
          'email.exists'=>'Email does not exist',
          'code.exists'=>'Password/OTP Code does not exist'
        ]
      );

      $reg = OTP:: where('email',$request->email)-> where('code',$request->code)->first();
      if($reg == true)
      {
        $reg->email = $request->input('email');
        $reg->code = $request->input('code');
        
        return redirect()->route('edit-password')->with('status','Password matched.');

      }
    }
    public function editing_password($id)
    { 
        $reg = OTP::find($id);
        return view('Medical.UpdatePassword', compact('reg'));
    }

    public function update_password(Request $request, $email)
    {
        // $email = session()->put('email');
      //$reg = OTP:: where('email',$request->email)-> where('code',$request->code)->first();
        $reg = OTP::find($email);

        $reg->email = $request->input('email');
        $reg->code = $request->input('code');
        
        $reg->update();
       
        return redirect()->back()->with('status','OTP Information updated Successfully');
    
    }

    public function update_profile(Request $request, $email)
    {
        
        $reg = Register::find($email);
        $reg->name = $request->input('name');
        //$reg->email = $request->input('email');
        $reg->phone = $request->input('phone');
        $reg->nid = $request->input('nid');
        $reg->address = $request->input('address');
        $reg->gender = $request->input('gender');
        $reg->age = $request->input('age');
        $reg->edu = $request->input('edu');

        
       /* $otp = OTP::find($email);
        $otp->name = $request->input('name');
        $otp->email = $request->input('email');
        $otp->phone = $request->input('phone');
        */

        $reg->update();
        
        //$otp->update();
       
      session()->flush();
      return redirect()->route('login_otp')->with('status','Profile Information Updated Successfully. Please, Login again to see the updated profile.');

        //return redirect()->back()->with('status','OTP Information saved Successfully');
    }

    /*public function deleteImage(Request $request,$id) 
    {
      $data = Register::find($id);
        $image_path = public_path('public/Image').'/'.$data->image;
        unlink($image_path);
        $data->delete();

      return back()->with("success", "Image deleted successfully.");

    }*/

    public function otp_store(Request $request)
    {
        $otp = new OTP;
        $otp->name = $request->input('name');
        $otp->email = $request->input('email');
        $otp->phone = $request->input('phone');
        $otp->code = $request->input('code');
        
        $otp->save();
        return redirect()->back()->with('status','OTP Information saved Successfully');
    }
    public function login_otp(Request $request)
    {
     
      return view('Medical.Login_otp');
    }

    public function checkLogin(Request $request)
    {
      //return $request;
      $request->validate(
        [
          'email'=>'required|exists:otp_table,email',
          'code'=>'required|exists:otp_table,code'
        ],
        [
          'email.required'=>'Please enter a valid email',
          'code.required'=>'Please enter valid Password/OTP',
          'email.exists'=>'Email does not exist',
          'code.exists'=>'Password/OTP Code does not exist'
        ]
      );
      $user = OTP:: where('email',$request->email)-> where('code',$request->code)->first();
      if($user == true)
      {
        session()->put('email',$user->email);
        //session()->flash('status','Login Successful');
        //return view('Medical.Customers_panel');
        //return redirect()->route('Medical.Customers_panel');
      
        $Name = $request->session()->get('email');
        $uname = Register :: all()->where('email',$Name);                                                
        
        return view('Medical.Customers_panel')->with('uname',$uname);
      }
    
    }

    public function logout()
    {
      if(session()->has('aname'))
      {
        session()->flush();
        return redirect()->route('admin_login');
      }
      
      if(session()->has('email'))
      {
        session()->flush();
        return redirect()->route('login_otp');
      }
      
    }


    public function admin_login(Request $request)
    {
     
      return view('Medical.Login_Admin');
    }

    public function check_admin_login(Request $request)
    {
      //return $request;
      $request->validate(
        [
          'aname'=>'required|exists:admins,aname',
          'code'=>'required|exists:admins,code'
        ],
        [
          'aname.required'=>'Please enter a valid Name',
          'code.required'=>'Please enter valid Password/OTP',
          'aname.exists'=>'Name does not exist',
          'code.exists'=>'OTP Code does not exist'
        ]
      );
      $user = Admin:: where('aname',$request->aname)-> where('code',$request->code)->first();
      if($user == true)
      {
        session()->put('aname',$user->aname);
        //session()->flash('status','Login Successful');
        //return view('Medical.Customers_panel');
        //return redirect()->route('Medical.Customers_panel');
      
        //$Name = $request->session()->get('aname');
        
        return view('Medical.Admin_panel');
      }
    }

    public function manager_login(Request $request)
    {
     
      return view('Medical.Login_Manager');
    }

    public function check_manager_login(Request $request)
    {
      //return $request;
      $request->validate(
        [
          'name'=>'required|exists:managers,name',
          'code'=>'required|exists:managers,code'
        ],
        [
          'name.required'=>'Please enter a valid Name',
          'code.required'=>'Please enter valid Password/OTP',
          'name.exists'=>'Name does not exist',
          'code.exists'=>'OTP Code does not exist'
        ]
      );
      $user = Manager:: where('name',$request->name)-> where('code',$request->code);
      if($user == true)
      {
        return view('Medical.Manager_panel');
      }
    }

    public function salesman_login(Request $request)
    {
     
      return view('Medical.Login_Sales');
    }

    public function check_salesman_login(Request $request)
    {
      //return $request;
      $request->validate(
        [
          'name'=>'required|exists:salesman,name',
          'code'=>'required|exists:salesman,code'
        ],
        [
          'name.required'=>'Please enter a valid Name',
          'code.required'=>'Please enter valid Password/OTP',
          'name.exists'=>'Name does not exist',
          'code.exists'=>'OTP Code does not exist'
        ]
      );
      $user = Salesman:: where('name',$request->name)-> where('code',$request->code);
      if($user == true)
      {
        return view('Medical.Salesman_panel');
      }
    }

    
    public function successlogin(Request $request)
    {
     
      return view('Medical.successlogin');
    }
    public function find()
    {	
    return view('Medical.search');			
    }		
    public function findSearch(Request $request)
    {			
      $request->validate(
        [
          'name'=>'required|exists:diseases,name', 
        ],
        [
          'name.required'=>'Please Enter a valid Name',
          'name.exists'=>'Name does not exist',
          
        ]
      );
      //$user = Disease:: where('name',$request->name);
      //return view('Medical.search_result', compact('user'));
      //$user = Doctor::where('name',$request->name);
      $Name = $request->name;
      $Name = Str::ucfirst($Name);
      $user = Disease :: all()->where('name',$Name);
      return view('Medical.search_result')->with('user',$user);
    }

    public function My_Orders(Request $request)
    {			
    if($request->session()->has('email'))
    {
      //echo $request->session()->get('name');
      $Name = $request->session()->get('email');
      $user = Order :: all()->where('email',$Name);                         
      $del = Delivered_order :: all()->where('email',$Name);                           
      return view('Medical.My_Orders')->with('user',$user)->with('del',$del);
    }
    else
      echo 'No data in the session';
      //$Name = Str::ucfirst($Name);
    
    }

    public function My_Questions(Request $request)
    {			
    if($request->session()->has('email'))
    {
      //echo $request->session()->get('name');
      $Name = $request->session()->get('email');
      $user = ques_ans :: all()->where('email',$Name);                                                  
      return view('Medical.My_Ques')->with('user',$user);
    }
    else
      echo 'No data in the session';
    }

    public function All_Questions(Request $request)
    {			
      $user = ques_ans :: all();                         
                                
      return view('Medical.All_Ques')->with('user',$user);
    }

    public function My_Appointments(Request $request)
    {			
    if($request->session()->has('email'))
    {
      //echo $request->session()->get('name');
      $Name = $request->session()->get('email');
      $user = Booked_Appointment :: all()->where('p_email',$Name);                         
                                
      return view('Medical.My_Appointments')->with('user',$user);
    }
    else
      echo 'No data in the session';
      //$Name = Str::ucfirst($Name);
    
    }

    public function All_Booked_Appointments(Request $request)
    {			
   
      $user = Booked_Appointment :: all();                         
                                
      return view('Medical.AllBookedAppointments')->with('user',$user);

    }
    
    public function profile(Request $request)
    {			
    if($request->session()->has('email'))
    {
      //echo $request->session()->get('name');
      $Name = $request->session()->get('email');
      $user = Register :: all()->where('email',$Name);                                                
      return view('Medical.profile')->with('user',$user);
    }
    else
      echo 'No data in the session';
      //$Name = Str::ucfirst($Name);
    
    }

    
   

}