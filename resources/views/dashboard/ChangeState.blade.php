<label for="inputState">State</label>
<select id="state_id" class="form-control" onchange="changeCity(this.value)" >
<option></option>
<?php foreach($states as $one){?>
<option value="{{$one->id}}">{{$one->name}}</option>
<?php } ?> 
</select>
                                                  
                                             