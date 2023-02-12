<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Rider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AgentController extends Controller
{
    public function index(Request $req)
    {
        if ($req->ajax()) {
            $data = Rider::all();
            return datatables($data)

                ->make(true);
        }
        return view('backend.agents.dashboard');
    }
    public function create_rider_view()
    {
        $districts_en = [
            "BARGUNA", "BARISAL", "BHOLA", "JHALOKATI", "PATUAKHALI", "PIROJPUR", "BANDARBAN", "BRAHMANBARIA", "CHANDPUR", "CHITTAGONG", "COMILLA", "COX'S BAZAR", "FENI", "KHAGRACHHARI", "LAKSHMIPUR", "NOAKHALI", "RANGAMATI", "DHAKA", "FARIDPUR", "GAZIPUR", "GOPALGANJ", "JAMALPUR", "KISHOREGONJ", "MADARIPUR", "MANIKGANJ", "MUNSHIGANJ", "MYMENSINGH", "NARAYANGANJ", "NARSINGDI", "NETRAKONA", "RAJBARI", "SHARIATPUR", "SHERPUR", "TANGAIL", "BAGERHAT", "CHUADANGA", "JESSORE", "JHENAIDAH", "KHULNA", "KUSHTIA", "MAGURA", "MEHERPUR", "NARAIL", "SATKHIRA", "BOGRA", "JOYPURHAT", "NAOGAON", "NATORE", "CHAPAI", "PABNA", "RAJSHAHI", "SIRAJGANJ", "DINAJPUR", "GAIBANDHA", "KURIGRAM", "LALMONIRHAT", "NILPHAMARI", "PANCHAGARH", "RANGPUR", "THAKURGAON", "HABIGANJ", "MAULVIBAZAR", "SUNAMGANJ", "SYLHET",
        ];
        // $district_en_sorted = sort($district_en, SORT_STRING);
        // dd($district_en_sorted, $district_en);
        $districts_bn = [
            "বাগেরহাট", "বান্দরবান", "বরগুনা", "বরিশাল", "ভোলা", "বগুড়া", "ব্রাহ্মণবাড়িয়া", "চাঁদপুর", "চাঁপাইনবাবগঞ্জ", "চট্টগ্রাম", "চুয়াডাঙ্গা", "কক্স বাজার", "কুমিল্লা", "ঢাকা", "দিনাজপুর", "ফরিদপুর", "ফেনী", "গাইবান্ধা", "গাজীপুর", "গোপালগঞ্জ", "হবিগঞ্জ", "জামালপুর", "যশোর", "ঝালকাঠী", "ঝিনাইদহ", "জয়পুরহাট", "খাগড়াছড়ি", "খুলনা", "কিশোরগঞ্জ", "কুড়িগ্রাম", "কুষ্টিয়া", "লক্ষ্মীপুর", "লালমনিরহাট", "মাদারীপুর", "মাগুরা", "মানিকগঞ্জ", "মেহেরপুর", "মৌলভীবাজার", "মুন্সিগঞ্জ", "ময়মনসিংহ", "নওগাঁ", "নড়াইল", "নারায়ণগঞ্জ", "নরসিংদী", "নাটোর", "নেত্রকোনা", "নিলফামারী", "নোয়াখালী", "পাবনা", "পঞ্চগড়", "পটুয়াখালী", "পিরোজপুর", "রাজবাড়ী", "রাজশাহী", "রাঙ্গামাটি", "রংপুর", "সাতক্ষীরা", "শরিয়তপুর", "শেরপুর", "সিরাজগঞ্জ", "সুনামগঞ্জ", "সিলেট", "টাঙ্গাইল", "ঠাকুরগাঁও",
        ];
        sort($districts_en, SORT_STRING);
        sort($districts_bn, SORT_STRING);
        return view('backend.agents.create-rider')->with('districts', $districts_en);
        // return view('backend.agents.pages.create-rider', compact($districts));
    }

    // *********************** rider creation main function start here ********************
    public function create_rider(Request $req)
    {
        // dd($req->all());
        $validated_data = Validator::make($req->all(),
            Rider::$rider_rules, Rider::$rider_msg
        );
        if ($validated_data->fails()) {
            return redirect()->back()
                ->withErrors($validated_data)
                ->withInput();
        } else {

            // dd($req->all());
            // generate random 10 digit alpha-numeric code
            $unique_code = bin2hex(random_bytes(5));
            // first checking if this code beed already been assigned to other riders
            $code_exists = Rider::select('*')->where('tracking_code', $unique_code)->get();
            // if exists then regenerating code
            while ($code_exists->count() != 0) {
                $unique_code = bin2hex(random_bytes(5));
            }
            // dd($code_exists->count());
            $riders = Rider::create([
                'name' => $req->name,
                'email' => $req->email,
                'phone' => $req->phone,
                'age' => $req->age,
                'gender' => $req->gender,
                'district' => $req->district,
                "thana" => $req->thana,
                'present_address' => $req->present_address,
                'permanent_address' => $req->permanent_address,
                'education' => $req->education,
                'occupation' => $req->occupation,
                'marital_status' => $req->marital_status,
                'motorcycle_ride' => $req->motorcycle_ride,
                'smart_phone_map' => $req->smart_phone_map,
                'passport_validity' => $req->passport_validity,
                'tracking_code' => $unique_code,
            ]);
            $rider_id = $riders->id;
            // creating a base name for photo , nid , passport name for storing
            $file_base = time() . '-rider' . $rider_id;
            $photo_name = $file_base . "-photo." . $req->file('profile_pic')->getClientOriginalExtension();
            $nid_name = $file_base . '-nid.' . $req->file('nid')->getClientOriginalExtension();
            $passport_name = $file_base . '-passport.' . $req->file('passport_pic')->getClientOriginalExtension();

            // storing all file in corosponding folder and inserting name in database
            $riders->profile_pic = $req->file('profile_pic')->storeAs('agents/riders/profile_photos', $photo_name);

            $riders->nid = $req->file('nid')->storeAs('agents/riders/nid', $nid_name);
            $riders->passport_photo = $req->file('passport_pic')->storeAs('agents/riders/passport', $passport_name);
            if ($req->has('driving_lic')) {
                $driving_name = $file_base . "-driving." . $req->file('driving_lic')->getClientOriginalExtension();
                $riders->driving_license = $req->file('driving_lic')->storeAs('agents/riders/driving_license', $driving_name);
            }
            // saving update data from riders
            $riders->save();
            // creating msg for toastr massge
            $msg = "Account for : " . $riders->name . "created successfully";
            return redirect('agents/create-rider-form')->with(['type' => 'bg-success', 'title' => "Rider Created", 'msg' => $msg]);
        }
    }

    // *********************** rider creation main function ends here ********************

    public function agent_password_view()
    {
        return view("backend.agents.pages.change_password");
    }
}
