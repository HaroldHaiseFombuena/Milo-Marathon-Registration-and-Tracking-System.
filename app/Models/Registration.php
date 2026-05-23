<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    
    protected $table = 'registration';
    public $timestamps = false;

    protected $fillable = [
       'Full_name',
        'age',
        'gender',
        'email',
        'phone',
        'address',
        'marathon_category',
        'Jersey_size',
        'school_organization',
        'emergency_contact_name',
        'emergency_contact_phone',
        'emergency_contact_relationship',
        'runner_number',
        'registration_date',
    ];
}
