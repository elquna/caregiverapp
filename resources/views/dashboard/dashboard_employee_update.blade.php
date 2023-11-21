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
                                <h4 class="card-title">Update Employee</h4>
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
                                                <th id="location" style="color:orange">Location</th>
                                                <th id="advanced" >Advanced</th>
                                                <th id="preferences" >Preferences</th>
                                                <th id="rvv" >RVV</th>
                                                <th id="certification" >Certification</th>
                                                <th id="admin" >Grant admin access</th>
                                                <th id="notes" >Notes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <br><br>



                <section id="book-appointment">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Location</h2>
                        </div>
                        <div class="card-body">
                            <span>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Address Line: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{$employee->address_line}}" required id="address_line" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Address Line two <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{$employee->address_line_two}}" id="address_line_two" required>
                                        </div>
                                    </div>

                                   
                                </div>
                                <div class="row">
                                  
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group" >
                                            <label for="gender">Country</label>
                                            <select name="gender" id="country_id" class="form-control" onchange="changeState(this.value)">
                                                @if($country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                                @else
                                                <option></option>
                                                @endif
                                                @foreach($countries as $one)
                                                <option value="{{$one->id}}">{{$one->name}}</option>
                                                @endforeach
                                            </select></div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group" id="sstate">
                                            <label for="gender">State</label>
                                            <select name="gender" id="state_id" class="form-control">
                                                @if($state)
                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                                @else
                                                <option></option>
                                                @endif
                                                @foreach($otherstates as $one)
                                                <option value="{{$one->id}}">{{$one->name}}</option>
                                                @endforeach
                                            </select></div>
                                       </div>


                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group" id="ccity">
                                            <label for="gender">City</label>
                                            <select name="gender" id="city_id" class="form-control">
                                            @if($city)
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                                @else
                                                <option></option>
                                                @endif
                                                @foreach($othercities as $one)
                                                <option value="{{$one->id}}">{{$one->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                



                                   
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="lastname">ZIP<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{$employee->zip}}" id="zip" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">SSN <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{$employee->ssn}}" id="ssn" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Pay rate <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control"  id="pay_rate" value="{{$employee->pay_rate}}" required>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Hire date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control"  id="hire_date" value="{{$employee->hire_date}}" required>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Birth date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control"  id="dob" value="{{$employee->dob}}" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group" id="">
                                            <label for="gender">Timezone</label>
                                            <select name="gender" id="timezone" class="form-control">
                                            <option>{{$employee->timezone}}</option>
                                            @foreach($timezones as $one)
                                            <option>{{$one}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>




                                </div>
                                
                                <div class="card-footer ml-auto">
                                    <button type="submit" class="btn btn-outline-success mr-1" onclick="updateLocationEmployee('{{$addedsecond}}')">Submit</button>
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