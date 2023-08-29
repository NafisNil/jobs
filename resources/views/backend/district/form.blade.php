
@include('backend.sessionMsg')
<div class="card-body">




  <div class="form-group">
    <label for="exampleInputEmail1">Name <span style="color:red" >*</span></label>
   
    <input type="text" class="form-control" name="name" value="{!!old('title',@$edit->name)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Division</label>
   
    <select class="form-control" name="division_id" id="dropdown">
      
      <option>Select Division</option>
        
     @foreach ($division as $item)
     <option value="{{$item->id}}" {{ ( $item->id== @$edit->division_id) ? 'selected' : '' }}> 
      {{$item->name}}
    </option>

     @endforeach
      
  
  
        
    </select>
   
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Status</label>
   
    <select class="form-control" name="status" id="dropdown">
      
      <option>Select Status</option>
        
     
        <option value="1" {{ ( "1" == @$edit->type) ? 'selected' : '' }}> 
          Active
        </option>
        <option value="0" {{ ( "0" == @$edit->type) ? 'selected' : '' }}> 
Inactive
        </option>
  
  
        
    </select>
   
  </div>


</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
