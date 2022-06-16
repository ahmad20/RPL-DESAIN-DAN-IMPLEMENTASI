<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Siswa;
use App\Models\Course;
use App\Models\Pengajar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MyControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_assign_course()
    {
        $siswa = Siswa::first();
        $course = Course::first();
        //jika sudah masuk course
        $this->assertEquals($siswa->course[0]->id_course, $course->id_course);
        $response = $this->actingAs($siswa, 'siswa')->get('siswa/dashboard', 
                        ['success' => 'Kamu Sudah masuk']);
        $response->assertStatus(200);
        //jika belum pernah masuk course
        $this->assertNotEquals($siswa->course[2]->id_course, $course->id_course);
        $response = $this->actingAs($siswa, 'siswa')->get('siswa/dashboard', 
                        ['success' => 'berhasil menambahkan']);
        $response->assertStatus(200);
    }
    
    public function test_masuk_dengan_autentikasi_role()
    { 
        $pengajar = Pengajar::first();
        $siswa = Siswa::first();
        // login dengan user siswa dan guard siswa
        $response = $this->actingAs($siswa, 'siswa')->get('/siswa/dashboard');
        // assert success
        $response->assertStatus(200);

        // login dengan user pengajar dan guard siswa
        $response = $this->actingAs($pengajar, 'siswa')->get('/siswa/dashboard');
        $response->assertStatus(500);
    }   

    public function test_update_course()
    {
        $course = Course::first();
        $pengajar = $course->pengajar;
        // jika nama sesuai
        $requestName = 'asdfasdf';
        $this->assertEquals($course->name, $requestName);
        //jika nama tidak sesuai
        $requestName = 'Math 3';
        $this->assertNotEquals($course->name, $requestName);
        //masuk kedalam dashboard pengajar
        $response = $this->actingAs($pengajar, 'pengajar')->get('pengajar/dashboard');
        $response->assertStatus(200);
    }
    public function test_single_course_view()
    {
        //jika course tidak punya course material
        $course = Course::first();
        $cm = $course->coursematerial;
        $this->assertNull($cm);
        $siswa = Siswa::first();
        $response = $this->actingAs($siswa, 'siswa')
                    ->get('/siswa/singlecourse/4', 
                    ['course' => $course, 'cm' => $cm]);
        $response->assertViewHasAll([
            'course',
            'cm',
        ]);
        //jika course punya course material
        $course = Course::find(4);
        $cm = $course->coursematerial;
        $this->assertNotNull($cm);
        $response = $this->actingAs($siswa, 'siswa')
                    ->get('/siswa/singlecourse/4', 
                    ['course' => $course, 'cm' => $cm]);
        $response->assertViewHasAll([
            'course',
            'cm',
        ]);
    }

    public function test_dashboard_pengajar()
    {
        $pengajar = Pengajar::first();
        $course = Course::where('created_by', $pengajar->id_course)->get();
        $arr = array();
        $i = 0;
        foreach($course as $c){
            $arr[$i] = TestPaper::where('id_course', $c->id_course)->get();
            $i = $i+1;
        }
        //jika tidak ada paper test
        $this->assertNotNull($arr);
        $response = $this->actingAs($pengajar, 'pengajar')
                    ->get('/pengajar/dashboard', 
                    ['courses' => $course, 'testpaper' => $arr, 'pengajar'=>$pengajar]);
        $response->assertViewHasAll([
            'courses',
            'testpaper',
            'pengajar'
        ]);
        $response->assertStatus(200);
    }

}
