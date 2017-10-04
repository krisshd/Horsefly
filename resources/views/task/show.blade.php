 @extends('layouts.app')

@section('content')
<div class="row container">
  <center><h1>View All Task</h1></center>
    <a class="btn-floating btn-large waves-effect waves-light red" href="/AddTask"><i class="material-icons">add</i></a>
    <a class="btn-floating btn-large waves-effect waves-light red" href="/export"><i class="material-icons">import_export</i></a>
    
                  
 <table class="striped responsive-table">
    <thead>
      <tr>
          <th>Name</th>
          <th>Create At</th>
          <th>Updated At</th>
          <th>Action</th>
      </tr>
    </thead>

    <tbody>
      @foreach($tasks as $task)
      <tr>
        <td>{{ $task->name }}</td>
        <td>{{ $task->created_at }}</td>
        <td>{{ $task->updated_at }}</td>
        <td>
          <a class="btn-floating btn-medium waves-effect waves-light red" href='/EditTask/{{ $task->id }}'><i class="material-icons">mode_edit</i></a>
          <a class="btn-floating btn-medium waves-effect waves-light red" href="/DeleteTask/{{ $task->id }}"><i class="material-icons">delete</i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  @endsection
      