<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.admin.dashboard');
    }
    public function create_agent_view()
    {
        $districts_en = [
            "BARGUNA", "BARISAL", "BHOLA", "JHALOKATI", "PATUAKHALI", "PIROJPUR", "BANDARBAN", "BRAHMANBARIA", "CHANDPUR", "CHITTAGONG", "COMILLA", "COX'S BAZAR", "FENI", "KHAGRACHHARI", "LAKSHMIPUR", "NOAKHALI", "RANGAMATI", "DHAKA", "FARIDPUR", "GAZIPUR", "GOPALGANJ", "JAMALPUR", "KISHOREGONJ", "MADARIPUR", "MANIKGANJ", "MUNSHIGANJ", "MYMENSINGH", "NARAYANGANJ", "NARSINGDI", "NETRAKONA", "RAJBARI", "SHARIATPUR", "SHERPUR", "TANGAIL", "BAGERHAT", "CHUADANGA", "JESSORE", "JHENAIDAH", "KHULNA", "KUSHTIA", "MAGURA", "MEHERPUR", "NARAIL", "SATKHIRA", "BOGRA", "JOYPURHAT", "NAOGAON", "NATORE", "CHAPAI", "PABNA", "RAJSHAHI", "SIRAJGANJ", "DINAJPUR", "GAIBANDHA", "KURIGRAM", "LALMONIRHAT", "NILPHAMARI", "PANCHAGARH", "RANGPUR", "THAKURGAON", "HABIGANJ", "MAULVIBAZAR", "SUNAMGANJ", "SYLHET",
        ];

        sort($districts_en, SORT_STRING);

        return view('backend.admin.create-agent')->with('districts', $districts_en);
    }

    public function create_agent(Request $req)
    {
        $validate_data = Validator::make($req->all(), Agent::$agent_rules, Agent::$agent_msg);

        if ($validate_data->fails()) {
            return redirect()->back()
                ->withErrors($validate_data)
                ->withInput();
        } else {
            $agent = Agent::create([
                'name' => $req->name,
                'phone' => $req->phone,
                'email' => $req->email,
                'age' => $req->age,
                'gender' => $req->gender,
                'district' => $req->district,
                'address' => $req->address,
            ]);
            if ($req->has('profile_pic')) {
                $file_base = time() . '-agent' . $agent->id;
                $photo_name = $file_base . "-photo." . $req->file('profile_pic')->getClientOriginalExtension();

                // storing all file in corosponding folder and inserting name in database
                $agent->profile_pic = $req->file('profile_pic')->storeAs('agents/agent_profile', $photo_name);
                $agent->save();
                // redirecting back to admin panel
                $msg = "Agent created successfully";
                return redirect('admin/create-agent-view')->with(['type' => 'bg-success', 'title' => "Agent Created", 'msg' => $msg]);
            }

        }
    }
    public function allClient()
    {
        $allClients = User::whereNotIn('id', [1])->get();
        return view('backend.clients.all_client', compact('allClients'));
    }

}
