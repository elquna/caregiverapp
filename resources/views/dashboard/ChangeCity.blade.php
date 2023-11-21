                                                <label for="inputState">City</label>
                                                <select id="city_id" class="form-control">

                                                <option></option>

                                                 <?php foreach($cities as $one){?>

                                                  <option value="{{$one->id}}">{{$one->name}}</option>

                                                 <?php } ?> 
                                                  
                                                </select>