<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    public function index()
    {
        return view('backend.agents.pages.dashboard');
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
        return view('backend.agents.pages.create-rider')->with('districts', $districts_bn);
        // return view('backend.agents.pages.create-rider', compact($districts));
    }
}
