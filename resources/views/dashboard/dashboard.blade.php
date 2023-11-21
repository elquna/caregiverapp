@include('dashboard.header')
@include('dashboard.menu')
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Hospital Info cards -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-user-md font-large-2 success"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Doctors Available</h5>
                                            <h3 class="text-bold-600">122</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-stethoscope font-large-2 warning"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Visiting Doctors</h5>
                                            <h3 class="text-bold-600">34</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-calendar-check-o font-large-2 info"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Today's Inquiry</h5>
                                            <h3 class="text-bold-600">3.5K</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-bed font-large-2 danger"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Rooms Available</h5>
                                            <h3 class="text-bold-600">179</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hospital Info cards Ends -->

                <!-- Appointment Bar Line Chart -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Appointment</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body chartjs">
                                    <canvas id="combo-bar-line" height="400"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Appointment Bar Line Chart Ends -->

                <!-- Appointment Table -->
                <div class="row match-height">
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Doctors Available</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate p-1 border-top-0">
                                                    <div class="avatar avatar-md">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="Avatar">
                                                    </div>
                                                </td>
                                                <td class="text-truncate pl-0 border-top-0">
                                                    <div class="name">Jane Andre</div>
                                                    <div class="designation text-light font-small-2">Dentist</div>
                                                </td>
                                                <td class="text-right border-top-0">
                                                    <a href="hospital-book-appointment.html" class="btn btn-sm btn-outline-success">Book Appointment</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate p-1">
                                                    <div class="avatar avatar-md">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="Avatar">
                                                    </div>
                                                </td>
                                                <td class="text-truncate pl-0 border-top-0">
                                                    <div class="name">Kail Reack</div>
                                                    <div class="designation text-light font-small-2">Dentist</div>
                                                </td>
                                                <td class="text-right border-top-0 ">
                                                    <a href="hospital-book-appointment.html" class="btn btn-sm btn-outline-success">Book Appointment</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate p-1">
                                                    <div class="avatar avatar-md">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="Avatar">
                                                    </div>
                                                </td>
                                                <td class="text-truncate pl-0 border-top-0 border-top-0 ">
                                                    <div class="name">Shail Black</div>
                                                    <div class="designation text-light font-small-2">Dentist</div>
                                                </td>
                                                <td class="text-right">
                                                    <a href="hospital-book-appointment.html" class="btn btn-sm btn-outline-success">Book Appointment</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate p-1">
                                                    <div class="avatar avatar-md">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-11.png" alt="Avatar">
                                                    </div>
                                                </td>
                                                <td class="text-truncate pl-0 border-top-0">
                                                    <div class="name">Zena wall</div>
                                                    <div class="designation text-light font-small-2">Dentist</div>
                                                </td>
                                                <td class="text-right">
                                                    <a href="hospital-book-appointment.html" class="btn btn-sm btn-outline-success">Book Appointment</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate p-1 border-bottom-0 ">
                                                    <div class="avatar avatar-md">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="Avatar">
                                                    </div>
                                                </td>
                                                <td class="text-truncate pl-0 border-top-0 border-bottom-0 ">
                                                    <div class="name">Colin Welch</div>
                                                    <div class="designation text-light font-small-2">Dentist</div>
                                                </td>
                                                <td class="text-right border-bottom-0 ">
                                                    <a href="hospital-book-appointment.html" class="btn btn-sm btn-outline-success">Book Appointment</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="recent-appointments" class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Appointments</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="hospital-book-appointment.html" target="_blank">View all</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content mt-1">
                                <div class="table-responsive">
                                    <table id="recent-orders-doctors" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Doctor</th>
                                                <th class="border-top-0">Patients</th>
                                                <th class="border-top-0">Specialities</th>
                                                <th class="border-top-0">Timings</th>
                                                <th class="border-top-0">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="pull-up">
                                                <td class="text-truncate">Jane Andre</td>
                                                <td class="text-truncate p-1">
                                                    <ul class="list-unstyled users-list m-0">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-5.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="Avatar">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <span class="badge badge-info">+8 more</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger round">Dentist</button>
                                                </td>
                                                <td class="text-truncate">8:00 A.M. - 12:00 P.M.</td>
                                                <td class="text-truncate">$ 1200.00</td>
                                            </tr>
                                            <tr class="pull-up">
                                                <td class="text-truncate">Kail Reack</td>
                                                <td class="text-truncate p-1">
                                                    <ul class="list-unstyled users-list m-0">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="Avatar">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <span class="badge badge-info">+5 more</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-success round">Dermatologist</button>
                                                </td>
                                                <td class="text-truncate">10:00 A.M. - 1:00 P.M.</td>
                                                <td class="text-truncate">$ 1190.00</td>
                                            </tr>
                                            <tr class="pull-up">
                                                <td class="text-truncate">Shail Black</td>
                                                <td class="text-truncate p-1">
                                                    <ul class="list-unstyled users-list m-0">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="Avatar">
                                                        </li>
                                                        <li class="avatar avatar-sm">
                                                            <span class="badge badge-info">+3 more</span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger round">Psychiatrist</button>
                                                </td>
                                                <td class="text-truncate">11:00 A.M. - 2:00 P.M.</td>
                                                <td class="text-truncate">$ 999.00</td>
                                            </tr>
                                            <tr class="pull-up">
                                                <td class="text-truncate">Zena wall</td>
                                                <td class="text-truncate p-1">
                                                    <ul class="list-unstyled users-list m-0">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-11.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-12.png" alt="Avatar">
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-success round">Gastroenterologist</button>
                                                </td>
                                                <td class="text-truncate">11:30 A.M. - 3:00 P.M.</td>
                                                <td class="text-truncate">$ 1150.00</td>
                                            </tr>
                                            <tr class="pull-up">
                                                <td class="text-truncate">Colin Welch</td>
                                                <td class="text-truncate p-1">
                                                    <ul class="list-unstyled users-list m-0">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="Avatar">
                                                        </li>
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="Avatar">
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger round">Pediatrician</button>
                                                </td>
                                                <td class="text-truncate">5:00 P.M. - 8:00 P.M.</td>
                                                <td class="text-truncate">$ 1180.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Appointment Table Ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

@include('dashboard.footer')

</body>
<!-- END: Body-->

</html>