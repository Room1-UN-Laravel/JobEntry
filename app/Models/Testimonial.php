<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
    'name',
    'profession',
    'description',
    'image',
    'pub',
    'adminID',
    ];

    #for when we make a relation w/the admins
    //public function admin() {
      //  return $this->belongsTo(Admin::class, 'catID');
    //}
}
