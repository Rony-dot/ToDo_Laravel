<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoAddRequest;
use App\Models\TodoModel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    //
    public function gotoTodoIndex()
    {
//        return view('todo.index');
        $todos = TodoModel::all();
        return view('todo.index')->with(['todos'=>$todos]);
    }
    public function gotoTodoAddView()
    {
        return view('todo.add');
    }

    public function addNewPost(TodoAddRequest $request)
    {
        /**
         * to show the inserted post
         *
         */
//        dd($request->all());

        /**
         *  to validate
         *
         */
//        $request->validate(['post'=>'required|max:255']);

        /**
          * to validate with more rules
         *
          */
//        $roles= ['post'=>'required|max:255'];
//        $messages = ['post.required'=>'The post field cannnot be empty',
//            'post.max'=>'The maxmimum character is 255'];
//        $validation = validator::make($request->all(),$roles,$messages);
//        if($validation->fails()){
//            return redirect()->back()->withErrors($validation);
//        }

        TodoModel::create($request->all());
        return redirect()->back()->with('msg','data saved successfully');
    }

    public function gotoTodoUpdate(TodoModel $todo){
//        dd($todo);
        return view('todo.update', compact('todo'));
    }

    public function todoUpdate(Request $request, TodoModel $todo){
//        dd($request->all(), $todo);
        $todo->update([
            'post'=>$request->post
        ]);
        return redirect()->back()->with('msg', 'update successfully done here..');
    }
    public function todoDelete(TodoModel $todo)
    {
        $todo->delete();
        return redirect()->back()->with('msg','delete success');
    }
}
