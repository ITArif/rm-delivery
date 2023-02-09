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

}
