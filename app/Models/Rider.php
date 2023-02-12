<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    use HasFactory;
    protected $table = 'riders';

    protected $fillable = [
        'name', 'email', 'phone', 'age', 'gender', 'district', "thana",
        'present_address', 'permanent_address', 'education', 'occupation', 'marital_status',
        'motorcycle_ride', 'smart_phone_map', 'passport_validity', 'verified_at', 'profile_pic', 'nid', 'passport_photo', 'driving_license', 'tracking_code'];

    protected $hidden = [
        'password',

    ];
    public static $rider_rules = [

        "name" => ' required|string|min:4|max:50 ',
        'phone' => 'required|string',
        "email" => "required|email|unique:riders",
        "age" => "required|numeric|min:10|max:100",
        "gender" => "required|in:Male,Female,male,female",
        "district" => "required|string",
        "thana" => "required|string",
        "present_address" => "required|string",
        "permanent_address" => "required|string",
        "education" => "required|string",
        "occupation" => "required|string",
        "marital_status" => "required|string",
        "motorcycle_ride" => "required|string|max:20",
        "smart_phone_map" => "required|string|max:20",
        "passport_validity" => "required|string|max:20",
        "profile_pic" => "required|file|mimes:jpg,jpeg,bmp,png|max:7000|dimensions:min_width=100,min_height=100 ",
        "nid" => "required|file|mimes:jpg,jpeg,bmp,png,pdf|max:10000",
        "passport_pic" => "required|file|mimes:jpg,jpeg,bmp,png,pdf|max:7000",
        "driving_lic" => "file|mimes:jpg,jpeg,bmp,png|max:7000",
    ];
    public static $rider_msg = [
        'name.required' => "you must fill the name field", // custom messages
        'name.min' => "name can't be less then 4 digit",
        'name.max' => "name can't be greater then 20 digit",
        'email.email' => "invalid email address",

    ];

}
