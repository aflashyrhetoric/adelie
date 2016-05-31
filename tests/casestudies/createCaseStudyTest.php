<?php

use App\User;
use App\CaseStudy;

class CaseStudyTest extends PHPUnit_Framework_TestCase
{

  protected $case;

  public function setUp(){
    $client_params = [
      'client_name' => 'Lucy Jones Designs',
      'about' => 'A beautiful store in the southern United States selling fine wines and keychains.',
      'tagline' => 'Best Southern Boutique',
      'thumbnail_url' => 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-university-assets.s3.amazonaws.com/79/ef4a80c5a111e5a5ce35080560fd45/coursera_logo.png',
      'hero_url' => 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-university-assets.s3.amazonaws.com/79/ef4a80c5a111e5a5ce35080560fd45/coursera_logo.png',
      'phase_one' => 'This is just some filler text about how the Lucy Jones Designs shop needs some lovin.',
      'phase_two' => 'I\'m planning some dope features so you\'ll all see it when it comes out.',
      'phase_three' => 'This is just some filler text about how the Lucy Jones Designs shop needs some lovin.',
    ];
    $this->case = new CaseStudy($client_params);
  }

  /** @test **/
  function ACaseStudyHasName(){
    // Case created successfully.
    $this->assertEquals('Lucy Jones Designs', $this->case->clientName());
  }  
  /** @test **/
  function ACaseStudyHasTagline(){
    // Case created successfully.
    $this->assertEquals('Best Southern Boutique', $this->case->tagline());
  }  
}
