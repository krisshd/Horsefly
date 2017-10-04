
@extends('layouts.app')

@section('content')

    <div class="row container">
        <div class="col s12 m6">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">Add Task</span>
            </div>
            <div class="card-action">
              
            <!-- Display Validation Errors -->
           <!--  {{--@include('common.errors')--}} -->

                <form action="/StoreTask" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                         @include('common.errors')
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input type="text" aria-label="Email or phone" name="name" id="task-name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default light-blue">
                                <i class="fa fa-plus"></i> Add Task
                            </button>
                        </div>
                    </div>
                </form>


            </div>
          </div>
        </div>
    </div>

    <!-- TODO: Current Tasks -->
@endsection