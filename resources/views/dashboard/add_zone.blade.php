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
                    <div class="card col-md-6" >
                        <div class="card-header">
                            <h2 class="card-title">Add zone</h2>
                        </div>
                        <div class="card-body">
                            <span>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Zone name: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  required id="zone" id="zone">
                                        </div>
                                    </div>
                                    
                                <div class="card-footer ml-auto">
                                    <button type="submit" class="btn btn-outline-success mr-1" onclick="addzone()">Submit</button> 
                                </div>
                                </span>
                                <div id="errorformobile"></div>
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