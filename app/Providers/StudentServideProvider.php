<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use View;

class StudentServideProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        //========  For Provide Data to  All School Students (front) & manage School student(Admin)
        // View::composer(
        //     [
        //         'front.academic.students.school-students.school-students',
        //         'admin.students.manage-school-students'
        //     ],
        //     function ($view){
        //         $view->with('schoolStudents',
        //             $schoolStudents=DB::table('students')
        //                 ->join('class_sections','students.section_id','=','class_sections.id')
        //                 ->select('students.*','class_sections.section_name')
        //                 ->orderBy('id','desc')->where('student_as','school-student')->get()
        //         );
        //     });

        // //========  For Provide Data to All College Student (front)& manage College student(Admin)
        // View::composer(
        //     [
        //         'front.academic.students.college-students.college-students',
        //         'admin.students.manage-college-students'
        //     ],
        //     function ($view){
        //         $view->with('collegeStudents',$collegeStudents=DB::table('students')
        //             ->join('class_sections','students.section_id','=','class_sections.id')
        //             ->select('students.*','class_sections.section_name')
        //             ->orderBy('id','desc')->where('student_as','college-student')->get()
        //         );
        //     });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
