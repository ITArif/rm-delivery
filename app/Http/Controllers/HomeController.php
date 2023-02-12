<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function registerForm(){
        $districts = array("BARGUNA", "BARISAL", "BHOLA","JHALOKATI","PATUAKHALI","PIROJPUR","BANDARBAN","BRAHMANBARIA","CHANDPUR","CHITTAGONG","COMILLA","COX'S BAZAR","FENI","KHAGRACHHARI","LAKSHMIPUR","NOAKHALI","RANGAMATI","DHAKA","FARIDPUR","GAZIPUR","GOPALGANJ","JAMALPUR","KISHOREGONJ","MADARIPUR","MANIKGANJ","MUNSHIGANJ","MYMENSINGH","NARAYANGANJ","NARSINGDI","NETRAKONA","RAJBARI","SHARIATPUR","SHERPUR","TANGAIL","BAGERHAT","CHUADANGA","JESSORE","JHENAIDAH","KHULNA","KUSHTIA","MAGURA","MEHERPUR","NARAIL","SATKHIRA","BOGRA","JOYPURHAT","NAOGAON","NATORE","CHAPAI","PABNA","RAJSHAHI","SIRAJGANJ","DINAJPUR","GAIBANDHA","KURIGRAM","LALMONIRHAT","NILPHAMARI","PANCHAGARH","RANGPUR","THAKURGAON","HABIGANJ","MAULVIBAZAR","SUNAMGANJ","SYLHET");
        //dd($districts);
        return view('registration_form',compact('districts'));
    }

    public function registered(Request $request){
        $this->validate($request,[
            'full_name' => 'required',
            'phone' => 'required|regex:/(01)[0-9]{9}/|size:11',
            'age' => 'required',
            'gender' => 'required',
            'district' => 'required',
            'thana' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'education' => 'required',
            'Occupation' => 'required',
            'motorcycle_ride' => 'required',
            'smart_phone_map' => 'required',
            'passport_validity' => 'required',
        ]);
            $user = new User;
            $user->full_name = $request->full_name;        
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->age = $request->age;
            $user->gender = $request->gender;
            $user->district = $request->district;
            $user->thana = $request->thana;
            $user->present_address = $request->present_address;
            $user->permanent_address = $request->permanent_address;
            $user->education = $request->education;
            $user->Occupation = $request->Occupation;
            $user->motorcycle_ride = $request->motorcycle_ride;
            $user->smart_phone_map = $request->smart_phone_map;
            $user->passport_validity = $request->passport_validity;
            $user->marital_status = $request->marital_status;
            $user->status = 1;

            // file upload(applicat/customer image)
            if ($image = $request->file('photo')){
                $extension = $request->file('photo')->getClientOriginalExtension();
                $imageName = time().'.'.$extension;
                $path = public_path('clients/photo/');
                $image->move($path, $imageName);

                if(file_exists('clients/photo/'.$user->photo) AND !empty($user->photo)){
                    unlink('clients/photo/'.$user->photo);
                }
            
            $user->photo = $imageName;
            // dd('ok');
            }else{
                $user->photo = "Null";
            }

            //dd($user);
            $user->save(); 
            return redirect()->back()->with('success','Registration Information Successfully Completed');
    }
}
