@include('dashboard.header')
@include('dashboard.menu')
    

   <!-- BEGIN: Content-->
   <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Agency setup</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                           
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="">Cards</a><a class="dropdown-item" href="">Buttons</a></div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Book Appointment -->
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
                                            <label for="">Agency name: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  required id="agency_name" value="{{$agency->agency_name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Agency Code <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  id="agency_code" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Adress Line One: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  required id="address_line_one" value="{{$agency->address_line_one}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Adress Line Two: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  required id="address_line_two" value="{{$agency->address_line_two}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                   
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Country:</label>
                                            <select id="countryid" class="form-control" onchange="changeState(this.value)" >
                                                  <?php if($country != NULL){?>
                                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                                    <?php foreach ($countries as $key) {?>
                                                    <option value="{{$key->id}}">{{$key->name}}</option>
                                                 <?php } ?>
                                                  <?php } else {?>
                                                    <option></option>
                                                  <option value="{{$us->id}}">{{$us->name}}</option>
                                                  <?php foreach ($countries as $key) {?>
                                                    <option value="{{$key->id}}">{{$key->name}}</option>
                                                 <?php } ?>
                                                  <?php } ?>
                                                  <option></option>
                                                </select>
                                            </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 id="statearea"">
                                        <div class="form-group">
                                            <label for="inputState">State</label>
                                                <select id="stateid" class="form-control" onchange="changeCity(this.value)" >
                                                 <?php if($state != NULL){?>
                                                  <option value="{{$state->id}}">{{$state->name}}</option>
                                                  @foreach($otherstates as $sta)
                                                  <option value="{{$sta->id}}">{{$sta->name}}</option>
                                                  @endforeach
                                                 <?php } else { ?> 
                                                  <option></option>
                                                  
                                                  <?php } ?>
                                                </select>
                                        </div>
                                    </div>


                                        
                                    <div class="col-lg-3 col-md-6 id="cityarea"">
                                        <div class="form-group">
                                            <label for="inputState">City</label>
                                                <select id="cityid" class="form-control">
                                                  <?php if($city != NULL){?>
                                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                                    @foreach($othercities as $ca)
                                                  <option value="{{$ca->id}}">{{$ca->name}}</option>
                                                  @endforeach
                                                  <?php } else{?>
                                                  <option></option>
                                                  <?php }?>
                                                </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" value="{{$agency->zip}}" id="zip">
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="row">

                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Contact Name:</label>
                                            <input type="text" class="form-control" id="contact_name" name="phone" value="{{$agency->contact_name}}" required>
                                        </div>
                                    </div>

                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Contact Phone Number:</label>
                                            <input type="text" class="form-control" id="contact_phone" name="phone" value="{{$agency->contact_phone}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Contact Email: <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" id="contact_email" placeholder="{{$agency->contact_email}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Telephone / Fax: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="telephone" value="{{$agency->telephone}}" placeholder="">
                                        </div>
                                    </div>
                                  
                                </div>
                                
                               
                            </span>
                        </div>
                    </div>
                </section>


                <section id="book-appointment">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Configuration</h2>
                        </div>
                        <div class="card-body">
                            <span>
                                
                                <div class="row">
                                   
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Clock in Notification duration:</label>
                                            <select name="duration" id="clock_in_notification" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->clock_in_notification}}</option>    
                                            <option>YES</option>
                                            <option>NO</option>
                                            </select>
                                         </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Overtime alert</label>
                                            <select name="duration" id="overtime_alert" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->overtime_alert}}</option>    
                                            <option>YES</option>
                                            <option>NO</option>
                                            </select>
                                         </div>
                                    </div>


                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Overtime alert</label>
                                            <select name="duration" id="overtime_alert" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->overtime_alert}}</option>    
                                            <option>YES</option>
                                            <option>NO</option>
                                            </select>
                                         </div>
                                    </div>


                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Budget alert</label>
                                            <select name="duration" id="budget_alert" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->budget_alert}}</option>    
                                            <option>YES</option>
                                            <option>NO</option>
                                            </select>
                                         </div>
                                    </div>


                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Schedule default view</label>
                                            <select name="duration" id="schedule_default_view" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->schedule_default_view}}</option>    
                                            <option>today</option>
                                            <option>day</option>
                                            <option>week</option>
                                            <option>month</option>
                                            </select>
                                         </div>
                                    </div>


                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Popular Shift</label>
                                            <select name="duration" id="popular_shift" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->popular_shift}}</option>    
                                            <option>YES</option>
                                            <option>NO</option>
                                            </select>
                                         </div>
                                    </div>


                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Live In</label>
                                            <select name="duration" id="live_in" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->live_in}}</option>    
                                            <option>YES</option>
                                            <option>NO</option>
                                            </select>
                                         </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Allow timecard split</label>
                                            <select name="duration" id="allow_timecard_split" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->allow_timecard_split}}</option>    
                                            <option>YES</option>
                                            <option>NO</option>
                                            </select>
                                         </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Split snapshot</label>
                                            <select name="duration" id="allow_timecard_split" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->split_snapshot}}</option>    
                                            <option>YES</option>
                                            <option>NO</option>
                                            </select>
                                         </div>
                                    </div>


                                   

                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">sort_report_by</label>
                                            <select name="duration" id="sort_report_by" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->sort_report_by}}</option>    
                                            <option>firstname</option>
                                            <option>lastname</option>
                                            </select>
                                         </div>
                                    </div>


                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">job_name_preference :</label>
                                            <select name="duration" id="job_name_preference" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->job_name_preference }}</option>    
                                            <option>firstname,lastname</option>
                                            <option>lastname,firstname</option>
                                           
                                            </select>
                                         </div>
                                    </div>


                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Zone Type :</label>
                                            <select name="duration" id="zone_type" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->zone_type }}</option>    
                                            <option>job</option>
                                            <option>employee</option>
                                           
                                            </select>
                                         </div>
                                    </div>


                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">enable_billing :</label>
                                            <select name="duration" id="enable_billing" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->enable_billing }}</option>    
                                            <option>YES</option>
                                            <option>NO</option>
                                           
                                            </select>
                                         </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Default_billing:</label>
                                            <select name="duration" id="enable_billing" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->default_billing }}</option>    
                                            <option>claims</option>
                                            </select>
                                         </div>
                                    </div>


                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Default_invoice_type</label>
                                            <select name="duration" id="default_invoice_type" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->default_invoice_type}}</option>    
                                            <option>hourly</option>
                                            </select>
                                         </div>
                                    </div>



                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Defualt hourly rate</label>
                                            <select name="duration" id="defualt_hourly_rate" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->default_hourly_rate}}</option>    
                                            <option>15</option>
                                            <option>20</option>
                                            </select>
                                         </div>
                                    </div>


                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Payroll Period</label>
                                            <select name="duration" id="payroll_period" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->payroll_period }}</option>    
                                            <option>monthly</option>
                                            <option>weekly</option>
                                            </select>
                                         </div>
                                    </div>


                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Work week start</label>
                                            <select name="duration" id="week_start" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->week_start  }}</option>    
                                            <option>sunday</option>
                                            </select>
                                         </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">snapshot_based_on</label>
                                            <select name="duration" id="snapshot_based_on" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->snapshot_based_on}}</option>    
                                            <option>Clock-in/Outdate</option>
                                            <option>Record Added date</option>
                                            </select>
                                         </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="gender">Certification alert(How many weeks prior to expiration?):</label>
                                            <select name="duration" id="allow_timecard_split" class="form-control">
                                            <option >{{$agency->certification_alert}}</option>    
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            </select>
                                         </div>
                                    </div>
      
                                </div>

                                
                            </span>
                        </div>
                    </div>
                </section>



                <section id="book-appointment">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Notification</h2>
                        </div>
                        <div class="card-body">
                            <span>
                                <div class="row">


                                <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Threshold type</label>
                                            <select name="duration" id="snapshot_based_on" class="form-control col-sm-12 col-md-8">
                                            <option >{{$agency->threshold_type}}</option>    
                                            <option>active</option>
                                            <option>inactive</option>
                                            </select>
                                         </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Threshold value: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="threshold_value" placeholder="0.00" value="{{$agency->threshold_value}}" >
                                        </div>
                                    </div>

                                    

                                </div>
                                
                              
                        
                                <div class="card-footer ml-auto">
                                    <button type="submit" class="btn btn-outline-success mr-1">Submit</button> <button type="submit" class="btn btn-outline-danger">Cancel</button>
                                </div>
                               
                            </span>
                        </div>
                    </div>
                </section>



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