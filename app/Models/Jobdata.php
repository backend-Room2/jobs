<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jobdata extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'jobtitle',
        'description',
        'responsability',
        'qualifications',
        'companydetail',
        'salaryfrom',
        'salaryto',
        'fulltime',
        'dateline',
        'image',
        'featured',
        'published',
    ];


}