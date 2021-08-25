<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\DB;
use App\Models\Crud;
class CrudController extends Controller
{
    // function index will display the view index.
    function index()
    {
        return view('crud.index');
       
    }
    function add(Request $request)
    {
        // vaildate the given field and data stored in database table.
        $request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'gender'=>'required',
        'qualifications'=>'required',
        'email'=>'required|email|unique:cruds'
        ]);
         

        $query = DB::table('cruds')->insert([
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'gender'=>$request->input('gender'),
            'qualifications'=>$request->input('qualifications'),
            'email'=>$request->input('email')
        ]);
        
        if($query){
            return back()->with('success','Data have been sucessfully inserted');
        }else{
            return back()->with('fail','something went wrong');
        }
    }
    function show()
    { 
        // it will dispaly the list
        $data= Crud::all();
        return view('crud.list',['cruds'=>$data]);
    }
    function delete($id)
    {
        $data= Crud::find($id);
        $data->delete();
        return redirect('list');
    }
    function showData($id){
$data= Crud::find($id);
return view('crud.edit',['data'=>$data]);
    }
    function update(Request $request)
    {
        $query = DB::table('cruds')->update([
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'gender'=>$request->input('gender'),
            'qualifications'=>$request->input('qualifications'),
            'email'=>$request->input('email')
        ]);
        return redirect('list');
    }
    function create()
    { 
        //email 
        $data=['name'=>"Remo",'data'=>"hello Remo,from codemax"];
        $user['to']='rajaanjith1997@gmail.com';
        Mail::send('crud.MyTestMail',$data,function($messages) use ($user)
    {
       $messages->to($user['to']);
        $messages->subject('hello');
    });
    }
    function upload(Request $req)
    {
        // to upload the files
        return $req->file('file')->store('docs');
    }
}
