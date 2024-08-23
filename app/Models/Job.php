<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    protected $table = 'job';

    use HasFactory, softDeletes;
    protected $fillable = [
        'title', 'description', 'location', 'salary', 'published', 'company_name', 'category_id',
      'job_nature', 'Vacancy', 'img', 'min_salary', 'max_salary',
    ];



    public function category()
    {
        return $this->belongsTo(category::class);
    }
}

