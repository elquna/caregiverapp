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
                


             <!-- Both borders end-->
             <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Members</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                   
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <p class="card-text"></p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0" style="font-size:12px">
                                        <thead>
                                            <tr>
                                                
                                                <th>Jobcode</th>
                                                <th>Name</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Zone</th>
                                                <th>Status</th>
                                                <th>Open</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($mem as $key ) {?>
                                                <tr>
                                                <td>{{$key->jobcode}}</td>
                                                <td>{{$key->firstname}} {{$key->lastname}}</td>
                                                <td>{{$key->state}}</td>
                                                <td>{{$key->city}}</td>
                                                <td>{{$key->phone}}</td>
                                                <td>{{$key->email}}</td>
                                                <td>{{$key->zone}}</td>
                                                <td>{{$key->current_status}}</td>
                                                <td><a href="{{route('viewmemberdetails',['addedtime'=>$key->addedtime])}}"><button  class="btn btn-primary">open</button> </a></td>
                                            </tr>
                                            <?php   } ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Both borders end -->


              
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