
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Certifications</h2>
                        </div>
                        <div class="card-body">


                        <div class="table-responsive">
                                    <table class="table table-bordered mb-0" style="font-size:12px">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Cert date</th>
                                                <th>Expiry Date</th>
                                                <th>Notes</th>
                                                <th>File</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($certifications as $key ) {?>
                                                <tr>
                                                <td>{{$key->name}}</td>
                                                <td>{{$key->certificate_date}} </td>
                                                <td>{{$key->expiry_date}}</td>
                                                <td>{{$key->notes}}</td>
                                                <td>Download</td>
                                            </tr>
                                            <?php   } ?>
                                           
                                        </tbody>
                                    </table>
                                </div>

                                <br><br>



                            <span>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Certification Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="" required id="name" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Certificate date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" value="" required id="certificate_date" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Expiry date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control"  required id="expiry_date" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Notes <span class="text-danger">*</span></label>
                                            <textarea type="text" class="form-control"  required id="notes" ></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Upload Certificate <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control"  required id="imagee" >
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Make inactive if expired<span class="text-danger">*</span></label>
                                           <select id="makeinactiveifexpired" class="form-control">
                                            <option></option>
                                            <option>NO</option>
                                            <option >YES</option>
                                           </select>
                                        </div>
                                    </div>




                                   
                                </div>
                                <div class="row">
                                  
                                   

                                </div>
                                
                                <div class="card-footer ml-auto">
                                    <button type="submit" class="btn btn-outline-success mr-1" onclick="uploadCert('{{$addedsecond}}')">Submit</button>
                                    <br><span id="err"></div> 
                                </div>
                        </span>
                        </div>
                    </div>

                    
               