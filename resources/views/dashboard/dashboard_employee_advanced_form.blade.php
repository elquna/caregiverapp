
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Advanced</h2>
                        </div>
                        <div class="card-body">
                            <span>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">External code 1 <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{$employee->external_code_1}}" required id="external_code_1" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">External code 2 <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{$employee->external_code_2}}" required id="external_code_2" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Agency Emp. Id <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{$employee->agency_employer_id}}" required id="agency_employer_id" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Phone <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{$employee->phone}}" required id="phone" >
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">How to notify <span class="text-danger"></span></label>
                                            <?php if($employee->)
                                            <input type="text" class="form-control" value="{{$employee->phone}}" required id="phone" >
                                        </div>
                                    </div>


                                    


                                   
                                </div>
                                <div class="row">
                                  
                                   


                                





                                </div>
                                
                                <div class="card-footer ml-auto">
                                    <button type="submit" class="btn btn-outline-success mr-1" onclick="updateEmployeeAdvanced('{{$addedsecond}}')">Submit</button>
                                    <br><span id="err"></div> 
                                </div>
                        </span>
                        </div>
                    </div>
               