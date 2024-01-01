

    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active"><a href="{{route('dashboard')}}"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard Hospital">Dashboard </span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Professional">Professional</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Professional"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-edit"></i><span class="menu-title" data-i18n="Appointment">Agency</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{route('agency')}}"><i></i><span>Manage Agency</span></a>
                        </li>
                        <li><a class="menu-item" href="{{route('zone')}}"><i></i><span>Add Zone</span></a>
                        </li>
                        <li><a class="menu-item" href="{{route('viewzones')}}"><i></i><span>View Zones</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-stethoscope"></i><span class="menu-title" data-i18n="Doctors">Manage Employees </span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{route('addemployee',['holder'=>time(), 'rand'=>str_shuffle('1234567890232194838339338381209337473939393839322313674809876432123456789009876')])}}"><i></i><span>Add Employee</span></a>
                        </li>
                        <li><a class="menu-item" href="{{route('viewemployees')}}"><i></i><span>View Employees</span></a>
                        </li>
                        
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-users"></i><span class="menu-title" data-i18n="Patients">Manage Members</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{route('addmember',['holder'=>time(), 'rand'=>str_shuffle('12345678902321948383393383812093374739393938393223136748098764321ABCDEFGHILKMSQZNCNEW')])}}"><i></i><span>Add Member</span></a>
                        </li>
                        <li><a class="menu-item" href="{{route('viewmembers')}}"><i></i><span>View  Members</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href=""><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="Report">Authorization</span></a>
                </li>
              

               
                <li class=" nav-item"><a href="#"><i class="la la-table"></i><span class="menu-title" data-i18n="Bootstrap Tables">Scheduling</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href=""><i></i><span data-i18n="Basic Tables">Add schedule</span></a>
                        </li>
                        <li><a class="menu-item" href=""><i></i><span data-i18n="Table Border">View Schedule</span></a>
                        </li>
                       
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-table"></i><span class="menu-title" data-i18n="Bootstrap Tables">Time cards</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href=""><i></i><span data-i18n="Basic Tables">Add Time card</span></a>
                        </li>
                        <li><a class="menu-item" href=""><i></i><span data-i18n="Table Border">View Time cards</span></a>
                        </li>
                        <li><a class="menu-item" href=""><i></i><span data-i18n="Table Border">Edit Time cards</span></a>
                        </li>
                       
                    </ul>
                </li>

                <li class=" nav-item"><a href=""><i class="la la-clipboard"></i><span class="menu-title" data-i18n="Report">Maps</span></a>
                </li>
              
                
            </ul>
        </div>
    </div>
