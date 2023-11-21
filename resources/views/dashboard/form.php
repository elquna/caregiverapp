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
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
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
                            <form>
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
                                            <label for="dob">Date Of Birth: <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="dob" name="dob" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Gender:</label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="gender">Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="notsay">Rather not Say</option>
                                            </select></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="service">Service <span class="text-danger">*</span></label>
                                            <select name="Service" class="form-control" id="service" required>
                                                <option value="">Service</option>
                                                <option value="dental">Dental Checkup</option>
                                                <option value="body">Full Body Checkup</option>
                                                <option value="heart">Heart Checkup</option>
                                                <option value="ent">ENT Checkup</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label for="date">Appointment Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="date" name="date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email: <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Contact Number:</label>
                                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Contact Number" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="symptoms">Tell Us About Your Problems:</label>
                                            <textarea cols="3" rows="3" id="symptoms" class="form-control" placeholder="Tell us about problems you are facing"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto">
                                    <button type="submit" class="btn btn-outline-success mr-1">Submit</button> <button type="submit" class="btn btn-outline-danger">Cancel</button>
                                </div>
                            </form>
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