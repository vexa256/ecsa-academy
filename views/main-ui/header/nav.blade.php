 <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">


     <!--begin:Menu link--> <span class="menu-link"> <span class="menu-title text-light fw-bold" style="font-size:14px">
             <i class="fas fa-cogs fa-3x text-light me-2 fw-bold " aria-hidden="true"></i>

             Elearning Settings
         </span> <span class="menu-arrow d-lg-none"></span> </span>
     <!--end:Menu link-->
     <!--begin:Menu sub-->
     <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-300px">
         <!--begin:Menu item-->
         <?php

         MenuItem($link = route('MgtCourses'), $label = 'Courses');
         MenuItem($link = route('CourseSelect'), $label = 'Modules');
         MenuItem($link = route('SessionCourseSelect'), $label = 'Sessions');
         MenuItem($link = route('NotesSelectCourse'), $label = 'Session Notes');
         MenuItem($link = route('PreTestSelectCourse'), $label = 'Pre Tests');
         MenuItem($link = route('PostTestSelectCourse'), $label = 'Post Tests');
         MenuItem($link = route('ModularTestSelectCourse'), $label = 'Modular Tests');


         ?>

         <!--end:Menu item-->
     </div>
     <!--end:Menu sub-->
 </div>

 <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
     <!--begin:Menu link--> <span class="menu-link"> <span class="menu-title text-light fw-bold" style="font-size:14px">
             <i class="fas fa-book fa-3x text-light me-2 fw-bold" aria-hidden="true"></i>


             Course Catalogue</span> <span class="menu-arrow d-lg-none"></span> </span>
     <!--end:Menu link-->
     <!--begin:Menu sub-->
     <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-300px">
         <!--begin:Menu item-->
         <?php

        MenuItem($link = null, $label = 'View all courses');



        ?>

         <!--end:Menu item-->
     </div>
     <!--end:Menu sub-->
 </div>

 <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
     <!--begin:Menu link--> <span class="menu-link"> <span class="menu-title text-light fw-bold" style="font-size:14px">
             <i class="fas fa-pencil-alt fa-3x text-light me-2 fw-bold" aria-hidden="true"></i>


             Exams and Tests
         </span> <span class="menu-arrow d-lg-none"></span> </span>
     <!--end:Menu link-->
     <!--begin:Menu sub-->
     <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-300px">
         <!--begin:Menu item-->
         <?php

        MenuItem($link = null, $label = 'Track Your Progress');
        MenuItem($link = route('ViewYourExams'), $label = 'Course Tests');




        ?>

         <!--end:Menu item-->
     </div>
     <!--end:Menu sub-->
 </div>


 <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
     <!--begin:Menu link--> <span class="menu-link"> <span class="menu-title text-light fw-bold" style="font-size:14px">
             <i class="fas fa-question-circle fa-3x text-light me-2 fw-bold" aria-hidden="true"></i>


             Your Certificates</span> <span class="menu-arrow d-lg-none"></span> </span>
     <!--end:Menu link-->
     <!--begin:Menu sub-->
     <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-300px">
         <!--begin:Menu item-->
         <?php

       MenuItem($link = null, $label = 'Your Certifications');



       ?>

         <!--end:Menu item-->
     </div>
     <!--end:Menu sub-->
 </div>





 <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
     <!--begin:Menu link--> <span class="menu-link"> <span class="menu-title text-light fw-bold" style="font-size:14px">
             <i class="fas fa-wrench fa-3x text-light me-2 fw-bold " aria-hidden="true"></i>

             Account and Help</span> <span class="menu-arrow d-lg-none"></span>
     </span>
     <!--end:Menu link-->
     <!--begin:Menu sub-->
     <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-300px">
         <!--begin:Menu item-->
         <?php

         MenuItem($link = '#dfg', $label = 'Manage Admins');
         MenuItem($link = '#dfg', $label = 'How The Academy Works');
         MenuItem($link = '#dfg', $label = 'Contact Support');
         MenuItem($link = '#dfg', $label = 'Manage Your Account');

         ?>

         <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="menu-link null" data-route="null">
             <span class="menu-bullet">
                 <i class="me-2 fas fa-circle-notch text-danger "></i>
             </span>
             <span class="menu-title fs-6">

                 Logout

             </span>
         </a>

         <!--end:Menu item-->
     </div>
     <!--end:Menu sub-->
 </div>



 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
 </form>
