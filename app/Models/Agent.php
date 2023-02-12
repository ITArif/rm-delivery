<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $table = 'agents';

    protected $fillable = [
        'name', 'email', 'phone', 'age', 'gender',
        'address', 'district', 'password', 'profile_pic', 'status'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',

    ];
    public static $agent_rules = [

        "name" => ' required|string|min:4|max:50 ',
        'phone' => 'required|string',
        "email" => "required|email|unique:agents",
        "age" => "required|numeric|min:10|max:100",
        "gender" => "required|in:Male,Female,male,female",
        "district" => "required|string",
        "address" => "required|string|max:250",
        "profile_pic" => "file|mimes:jpg,jpeg,bmp,png|max:7000|dimensions:min_width=100,min_height=100 ",
    ];
    public static $agent_msg = [
        'name.required' => "you must fill the name field", // custom messages
        'name.min' => "name can't be less then 4 character",
        'name.max' => "name can't be greater then 50 character",
        'email.email' => "invalid email address",
        'email.unique' => 'User Already Exists',
        "address" => "address Exceeds maximum length",
        'gender.in' => "invalid gender selection",
        'profile_pic.dimensions' => "Minimum image width & height are 100px",
        'profile_pic.max' => "image size exceed maximum limit",
    ];
}
