<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testLearnMoreLink()
    {
        $this->visit('/');
        $this->click('Learn More');
        $this->see("The web has become a ubiquitous medium.");
        $this->seePageIs("/services/webdev");
    }
}
