<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
   
    public function test_device_belongs_to_manufacture(){
        $device = factory(\App\Device::class)->create();
        $this->assertInstanceOf(\App\Manufacturer::class,$device->manufacturer);
    }
    public function test_manufacture_has_many_to_devices(){
        $manu = factory(\App\Manufacturer::class)->create();
        $this->assertInstanceOf(Collection::class,$manu->devices);
    }

}
