
@extends('layouts.app')

@section('content')

    <div class="row container">
        <div class="col s12 m6">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">Upload File</span>
            </div>
            <div class="card-action">

                <form action="/upload" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                         @include('common.errors')
                    </div>
                    <div class="file-field input-field">
                      <div class="btn">
                        <span>File</span>
                        <input type="file" name="image_upload">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                      </div>
                    </div>
                    <small class="error">{{$errors->first('image_upload')}}</small>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default light-blue">
                           <i class="material-icons">file_upload</i>Upload File
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