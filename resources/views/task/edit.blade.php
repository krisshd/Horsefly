 @extends('layouts.app')

@section('content')
<div class="row container">
  <div class="col s12 m6">
  <div class="card white">
    <div class="card-content black-text">
      <span class="card-title">Update Task</span>
       <a class="btn-floating btn-large waves-effect waves-light red" href="/AddTask"><i class="material-icons">add</i></a>
    </div>
    <div class="card-action">
      
    <!-- Display Validation Errors -->
   <!--  {{--@include('common.errors')--}} -->

        <form action="/UpdateTask/<?php echo $edit[0]->id; ?>" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                 @include('common.errors')
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" aria-label="Email or phone" name="name" id="task-name" value="<?php echo $edit[0]->name; ?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default light-blue">Update Task</button>
                </div>
            </div>
        </form>


    </div>
  </div>
</div>

  

</div>






  @endsection
      
<script type="text/javascript">
  $(document).ready(function (){
    swal('here is to go');
  });
</script>
