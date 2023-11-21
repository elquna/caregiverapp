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
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Zones</h4>
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
                                                <th>#</th>
                                                <th>Zone name</th>
                                                <th>Date added</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @foreach($zones as $one)
                                            <tr>
                                                <th scope="row">#</th>
                                                <td>{{$one->name}}</td>
                                                <td>{{$one->created_at}}</td>
                                            </tr>
                                           @endforeach 
                                        </tbody>
                                    </table>
                                    <br><br>
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

@include('dashboard.footer')

</body>
<!-- END: Body-->

</html>