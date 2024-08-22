<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobdata extends Model
{
    use HasFactory;
    protected $fillable=[
        'jobTitle',
        'location',
        'description',
        'responsibility',
        'qualifications',
        'companydetail',
        'salaryFrom',
        'salaryTo',
        'image',
        'published',
        'featured',
        'time',
        'dateline',
    ];
}
