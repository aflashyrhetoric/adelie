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
    'hero_url',
    'phase_one',
    'phase_two',
    'phase_three'
  ];
  // Tells Eloquent the name of the case study table
  // We write this manually because "case study" is two words
  // And eloquent may not be able to guess the plural.
  protected $table = "casestudies";

  // public function __construct($fillable){
  //   $this->client_name = $fillable['client_name'];
  //   $this->about = $fillable['about'];
  //   $this->tagline = $fillable['tagline'];
  //   $this->thumbnail_url = $fillable['thumbnail_url'];
  //   $this->hero_url = $fillable['hero_url'];
  //   $this->phase_one = $fillable['phase_one'];
  //   $this->phase_two = $fillable['phase_two'];
  //   $this->phase_three = $fillable['phase_three'];
  // }

  public function clientName(){
    return $this->client_name;
  }
  public function tagline(){
    return $this->tagline;
  }
}
