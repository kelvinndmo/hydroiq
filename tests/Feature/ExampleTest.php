<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_one_can_create_device(){
        $device = \factory(\App\Device::class)->make();
        $response = $this->post('/api/smart-devices',$device->toArray());
        $response->assertStatus(200)->assertJsonStructure(['data'])->assertSee($device->name);
    }
}
