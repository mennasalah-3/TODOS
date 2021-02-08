<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todos;

class TodosController extends Controller
{
    public function index(){
        $todos= Todos::all();
        return view('allTodos')->with('todos',$todos);
    }
  
    public function show(Todos $todo){
       
        return view('singleTodo')->with('todo',$todo);
    }
    public function showToEdit(Todos $todo){
       
       
        return view('Update',compact('todo'));
      }      
  
    public function update(Todos $todo){
   
      $todo->title= request('title');
      $todo->discription=request('discription');
      $todo->save();
      return redirect('/Todos');
    }      

    public function delete(Todos $todo){

       $todo->delete();
       return redirect('/Todos');
    }    
    public function create(){
     
        return view('createTodo');
    }    
    public function store(){
        Todos::create([
        'title'=>request('title'),
        'discription'=>request('discription')
        ]);
        return redirect('/Todos');
    
    }  

}
