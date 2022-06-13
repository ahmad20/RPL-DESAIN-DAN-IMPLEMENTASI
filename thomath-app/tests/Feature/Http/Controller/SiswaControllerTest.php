<?php

namespace Tests\Feature\Http\Controller;

use Tests\TestCase;
use App\Models\Course;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SiswaControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        $course = Course::find(2);
        // dd($course->id_course);
        // dd($course);
        // $this->assertNull($course);
        $this->assertNotNull($course);
        $this->assertEquals(2, $course->id_course, 'tidak sesuai');
        // $response->assertStatus(200);
        // $this->assertEqual(1, $course->id_course);
    }
}
