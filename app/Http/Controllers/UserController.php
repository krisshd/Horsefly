<?php

namespace Horsefly\Http\Controllers;

use Horsefly\User;
use Horsefly\Task;
use Horsefly\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\MessageBag;
use DB;
use Alert;
class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('task.tasks');
    }

    public function create()
    {
        return view('task.tasks');
    }
    public function store(Request $request)
    {
         $this->validate(request(),[
            'name' => 'required'
         ]);
         $task_name = $request->input('name');
         DB::insert('insert into tasks(name) values (?)', [$task_name]);
         return redirect('/ShowTask');
    }
    public function show(){

        // Alert::message('Robots are working!');

      

        //storing value in session
        // $task_1 = $request->session()->put('show_all', $task);
        //get value of session
        // $task_2 = $request->session()->pull('show_all', $task);
        
        $task = Task::all();
        return view('task.show')->withTasks($task);
        
        //get data in json format
        // return response()->json($task);
        
        // $task =DB::select('select * from tasks');
        // return view('task.show',['tasks' => $task]);
    }
    public function export(){
        $task = Task::all();
        header('Content-Disposition:attachment;filename=export.xls');
        return view('task.export')->withTasks($task);
    }
    public function upload(Request $request){
       $data =[];
       if($request->isMethod('post'))
       {
         $this->validate(
            $request,
            [
                'image_upload'=> 'mimes:jpeg,bmp,png'
            ] 
         );
          $image = $request->file('image_upload');
          $fileName = $image->getClientOriginalName();
          $fileName_1 = time().'.'.$image->getClientOriginalExtension();
          Input::file('image_upload')->move('images', $fileName_1);
          return redirect('/');
       }
       return view('task.upload', $data);
    }
    public function edit($id){
        // $edit = Task::findOrFail($id);
        // return view('task.edit')->withTasks($edit);

        $edit = DB::select('select * from tasks where id =?',[$id]);
        return view('task.edit',['edit'=> $edit]);
    }
    public function update(Request $request, $id){
        $task_name = $request->input('name');
        DB::update('update tasks set name = ? where id = ?', [$task_name, $id]);
         Alert::message('Robots are working!');
       
        \Session::flash('flash_message','successfully updated.');
        return redirect('/ShowTask');
    }
    public function delete($id){
        $delete = DB::delete("delete from tasks where id = ?", [$id]);
        return redirect('/ShowTask');
    }
}