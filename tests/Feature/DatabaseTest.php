<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    public function test_Database(){
        $this->assertDatabaseHas('alkatreszs',['ar' => 5000]);
        $this->assertDatabaseCount('alkatreszs',5);

        $this->assertDatabaseCount('anyags',4);
        
        $this->assertDatabaseCount('gepjarmus',3);
        
        $this->assertDatabaseCount('munkafelvevos',3);
        
        $this->assertDatabaseCount('munkafolyamatoks',5);
        
        $this->assertDatabaseCount('munkafolyamats',5);
        
        $this->assertDatabaseCount('munkalaps',2);
        
        $this->assertDatabaseCount('munkalap_alkatreszs',5);
        
        $this->assertDatabaseCount('munkalap_anyagoks',4);

        $this->assertDatabaseCount('szerelos',3);
        
        $this->assertDatabaseCount('tulajdonos',3);

    }
}
