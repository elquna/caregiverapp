@include('dashboard.header')
@include('dashboard.menu')
    

   <!-- BEGIN: Content-->
   <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-6 mb-2">
                    <h3 class="content-header-title"></h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-6">
                           
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
                <!-- Book Appointment -->
                <section id="book-appointment">
                    


                <!-- Bordered table start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Employee</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                   
                                </div>
                                <div class="table-responsive">
                                    <div class="col-12">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th>General</th>
                                                <th>Location</th>
                                                <th>Advanced</th>
                                                <th>Preferences</th>
                                                <th>RVV</th>
                                                <th>Certification</th>
                                                <th>Grant admin access</th>
                                                <th>Notes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <br><br>



                                    <section id="book-appointment">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">General</h2>
                        </div>
                        <div class="card-body">
                            <span>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">First name: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  required id="firstname" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  id="lastname" required>
                                        </div>
                                    </div>

                                   
                                </div>
                                <div class="row">
                                  
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Employee zone</label>
                                            <select name="gender" id="zone_id" class="form-control">
                                                <option value=""></option>
                                                @foreach($zones as $one)
                                                <option value="{{$one->id}}">{{$one->name}}</option>
                                                @endforeach
                                            </select></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="service">Language<span class="text-danger">*</span></label>
                                            <select name="Service" class="form-control" id="language" required>
                                                <option value=""></option>
                                                <option>English</option>
                                                <option>Spanish</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="service">Employee Skill<span class="text-danger">*</span></label>
                                            <select name="Service" class="form-control" id="skilled_or_noneskilled" required>
                                                <option value=""></option>
                                                <option>Skilled</option>
                                                <option>None Skilled</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="service">Gender<span class="text-danger">*</span></label>
                                            <select name="Service" class="form-control" id="gender" required>
                                                <option value=""></option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="service">Current status<span class="text-danger">*</span></label>
                                            <select name="Service" class="form-control" id="status" required>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                                <option>Terminated</option>
                                            </select>
                                        </div>
                                    </div>



                                   
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="lastname">Clock out safeguard <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control"  id="clockoutsafeguard" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Email <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  id="email" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="service">Role<span class="text-danger">*</span></label>
                                            <select name="Service" class="form-control" id="role" required>
                                                <option></option>
                                                <option>Agency_admin</option>
                                                <option>HR</option>
                                                <option>Nurse</option>
                                                <option>Office_Manager</option>
                                                <option>Office_Clerk</option>
                                                <option>Billing</option>
                                                <option>Scheduler</option>
                                                <option>Oncall</option>
                                               
                                            </select>
                                        </div>
                                    </div>


                                </div>
                                
                                <div class="card-footer ml-auto">
                                    <button type="submit" class="btn btn-outline-success mr-1" onclick="addemployeegeneral('{{$addedsecond}}')">Submit</button>
                                    <br><span id="err"></div> 
                                </div>
                        </span>
                        </div>
                    </div>
                </section>




                                </div>
                            </div>
                            </div>
                        </div>


                        


                    </div>
                </div>
                <!-- Bordered table end -->


                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <input type="text" id="addedsecond" value="{{$addedsecond}}" readonly>

@include('dashboard.footer')

</body>
<!-- END: Body-->

</html>