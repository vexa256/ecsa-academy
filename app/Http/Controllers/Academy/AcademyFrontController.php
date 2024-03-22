<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use DB;

class AcademyFrontController extends Controller
{

    public function ECSAHC_ACADEMY()
    {

        $twitterAccount = 'ECSA_HC';
        $data = [
            'Title' => 'ECSA-HC e-Learning Academy | Enhancing Healthcare Education in East Central and Southern Africa',
            'Desc' => 'Welcome to ECSA-HC e-Learning Academy. Empowering healthcare professionals through online courses',
            'Keywords' => 'ECSA-HC, e-Learning Academy, Healthcare Education, Online Courses, Modules, East Central Africa, Southern Africa, Health Professionals',
            'Page' => 'Modules.MgtModule',
            'TwitterAccount' => $twitterAccount,

        ];

        return view('front.main.index', $data);

    }

    public function OurCourseCatalogue()
    {
// Change here to paginate
        $courses = DB::table('courses')->paginate(3); // paginate 6 items per page
        $twitterAccount = 'ECSA_HC';
        $data = [
            'Title' => 'ECSA-HC e-Learning Academy | Course Catalog',
            'Desc' => 'Explore our comprehensive catalog of online courses tailored for healthcare professionals in East, Central, and Southern Africa. Enhance your skills with our specialized modules.',
            'Keywords' => 'ECSA-HC, Online Healthcare Courses, e-Learning, Medical Education, Professional Development, Health Modules, Course Catalog, East Africa, Central Africa, Southern Africa',
            'DatabaseData' => $courses,
            'TwitterAccount' => $twitterAccount,
        ];

        return view('front.ViewCourses.CourseList', $data);
    }

    public function EcsaOperatedCourses()
    {
// Change here to paginate
        $courses = DB::table('courses')
            ->where('CourseOperator', 'ECSA-HC')
            ->paginate(3); // paginate 6 items per page
        $twitterAccount = 'ECSA_HC';
        $data = [
            'Title' => 'ECSA-HC e-Learning Academy | Course Catalog',
            'Filter' => 'ECSA-HC Operated Courses',
            'Desc' => 'Explore our comprehensive catalog of online courses tailored for healthcare professionals in East, Central, and Southern Africa. Enhance your skills with our specialized modules.',
            'Keywords' => 'ECSA-HC, Online Healthcare Courses, e-Learning, Medical Education, Professional Development, Health Modules, Course Catalog, East Africa, Central Africa, Southern Africa',
            'DatabaseData' => $courses,
            'TwitterAccount' => $twitterAccount,
        ];

        return view('front.ViewCourses.CourseList', $data);
    }

    public function EPNOperatedCourses()
    {
// Change here to paginate
        $courses = DB::table('courses')
            ->where('CourseOperator', 'EPN')
            ->paginate(3); // paginate 6 items per page
        $twitterAccount = 'ECSA_HC';
        $data = [
            'Title' => 'ECSA-HC e-Learning Academy | Course Catalog',
            'Filter' => 'EPN Operated Courses',
            'Desc' => 'Explore our comprehensive catalog of online courses tailored for healthcare professionals in East, Central, and Southern Africa. Enhance your skills with our specialized modules.',
            'Keywords' => 'ECSA-HC, Online Healthcare Courses, e-Learning, Medical Education, Professional Development, Health Modules, Course Catalog, East Africa, Central Africa, Southern Africa',
            'DatabaseData' => $courses,
            'TwitterAccount' => $twitterAccount,
        ];

        return view('front.ViewCourses.CourseList', $data);
    }

    public function FrenchCourses()
    {
// Change here to paginate
        $courses = DB::table('courses')
            ->where('CourseLanguage', 'French')
            ->paginate(3); // paginate 6 items per page
        $twitterAccount = 'ECSA_HC';
        $data = [
            'Title' => 'ECSA-HC e-Learning Academy | Course Catalog',
            'Filter' => 'French Courses',
            'Desc' => 'Explore our comprehensive catalog of online courses tailored for healthcare professionals in East, Central, and Southern Africa. Enhance your skills with our specialized modules.',
            'Keywords' => 'ECSA-HC, Online Healthcare Courses, e-Learning, Medical Education, Professional Development, Health Modules, Course Catalog, East Africa, Central Africa, Southern Africa',
            'DatabaseData' => $courses,
            'TwitterAccount' => $twitterAccount,
        ];

        return view('front.ViewCourses.CourseList', $data);
    }

    public function EnglishCourses()
    {
// Change here to paginate
        $courses = DB::table('courses')
            ->where('CourseLanguage', 'English')
            ->paginate(3); // paginate 6 items per page
        $twitterAccount = 'ECSA_HC';
        $data = [
            'Title' => 'ECSA-HC e-Learning Academy | Course Catalog',
            'Filter' => 'English Courses',
            'Desc' => 'Explore our comprehensive catalog of online courses tailored for healthcare professionals in East, Central, and Southern Africa. Enhance your skills with our specialized modules.',
            'Keywords' => 'ECSA-HC, Online Healthcare Courses, e-Learning, Medical Education, Professional Development, Health Modules, Course Catalog, East Africa, Central Africa, Southern Africa',
            'DatabaseData' => $courses,
            'TwitterAccount' => $twitterAccount,
        ];

        return view('front.ViewCourses.CourseList', $data);
    }

    public function PharmaCourses()
    {
// Change here to paginate
        $courses = DB::table('courses')
            ->where('Category', 'essentials-of-pharmaceutical-practice')
            ->paginate(3); // paginate 6 items per page
        $twitterAccount = 'ECSA_HC';
        $data = [
            'Title' => 'ECSA-HC e-Learning Academy | Course Catalog',
            'Filter' => 'Pharmacy Related Courses',
            'Desc' => 'Explore our comprehensive catalog of online courses tailored for healthcare professionals in East, Central, and Southern Africa. Enhance your skills with our specialized modules.',
            'Keywords' => 'ECSA-HC, Online Healthcare Courses, e-Learning, Medical Education, Professional Development, Health Modules, Course Catalog, East Africa, Central Africa, Southern Africa',
            'DatabaseData' => $courses,
            'TwitterAccount' => $twitterAccount,
        ];

        return view('front.ViewCourses.CourseList', $data);
    }
    public function HealthMgtCourses()
    {
// Change here to paginate
        $courses = DB::table('courses')
            ->where('Category', 'essentials-of-pharmaceutical-practice')
            ->paginate(3); // paginate 6 items per page
        $twitterAccount = 'ECSA_HC';
        $data = [
            'Title' => 'ECSA-HC e-Learning Academy | Course Catalog',
            'Filter' => 'Pharmacy Related Courses',
            'Desc' => 'Explore our comprehensive catalog of online courses tailored for healthcare professionals in East, Central, and Southern Africa. Enhance your skills with our specialized modules.',
            'Keywords' => 'ECSA-HC, Online Healthcare Courses, e-Learning, Medical Education, Professional Development, Health Modules, Course Catalog, East Africa, Central Africa, Southern Africa',
            'DatabaseData' => $courses,
            'TwitterAccount' => $twitterAccount,
        ];

        return view('front.ViewCourses.CourseList', $data);
    }

}
