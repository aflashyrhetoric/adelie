<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
  protected $fillable = [
    'client_name',
    'about',
    'tagline',
    'thumbnail_url',
    'phase_one',
    'phase_two',
    'phase_three'
  ];
  protected $table = "casestudies";
}
