@include('dashboard.header')
@include('dashboard.menu')
    

   <!-- BEGIN: Content-->
   <div class="app-content content" style="background:cyan">
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
                                <h4 class="card-title">Add New MEMBER</h4>
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
                                            
                                                <th id="basic" style="background:cyan" >Basic Setup</th>
                                                <th id="location" >Location</th>
                                                <th id="advanced" >Advanced</th>
                                                <th id="notes" >Notes</th>
                                                <th id="preferences" >Care Plan docs</th>
                                                <th id="billing" >Billing</th>
                                                <th id="admin" >Insurance</th>
                                                <th id="notes" >Custom Prompts</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <br><br>



                                    <section id="book-appointment">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Basic Setup</h2>
                        </div>
                        <div class="card-body">
                            <span>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Job Code: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  required id="jobcode" >
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">First name: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  required id="firstname" >
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="lastname">Middle name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  id="middlename" required>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="lastname">Lastname <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  id="lastname" required>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Job name: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  required id="jobname" >
                                        </div>
                                    </div>

                                   
                                </div>
                                <div class="row">
                                  
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="gender">Employee zone</label>
                                            <select name="gender" id="zone_id" class="form-control">
                                                <option value=""></option>
                                                @foreach($zones as $one)
                                                <option value="{{$one->id}}">{{$one->name}}</option>
                                                @endforeach
                                            </select></div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="gender">Facility</label>
                                            <select name="gender" id="facility_id" class="form-control">
                                                <option value=""></option>
                                                @foreach($fac as $one)
                                                <option value="{{$one->id}}">{{$one->name}}</option>
                                                @endforeach
                                            </select></div>
                                    </div>
                                    


                                  
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Contact Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  id="contact_name" required>
                                        </div>
                                    </div>

                                      
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Intake date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control"  id="intakedate" required>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Discharge date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control"  id="dischargedate" required>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Email <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  id="email" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Physician Firstname<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  id="physician_firstname" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Physician Lastname<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  id="physician_lastname" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Physician NPI<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  id="physician_npi" required>
                                        </div>
                                    </div>
                                 
                                 
                                 
                            

                                </div>
                                
                                <div class="card-footer ml-auto">
                                    <button type="submit" class="btn btn-outline-success mr-1" onclick="addmembergeneral('{{$addedtime}}')">Submit</button>
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
    <input type="hidden" id="addedttime" value="{{$addedtime}}" readonly>

@include('dashboard.footer')

</body>
<!-- END: Body-->

</html>