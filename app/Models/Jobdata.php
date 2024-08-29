<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jobdata extends Model
{
    use HasFactory;
    use SoftDeletes;

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
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
