<?php

namespace App\Http\Controllers;

use App\Models\TodoModel;
use Illuminate\Http\Request;
use resources\views\todo;
use App\Http\Requests\TodoAddRequest;

class TodoController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('user.auth');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('todo.index');
        $todos = TodoModel::all();
        return view('todo.index')->with(['todos'=>$todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TodoAddRequest $request)
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
        return redirect(route('todo.index'))->with('msg','data saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = TodoModel::find($id);
        return view('todo.update', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //        dd($request->all(), $todo);
        $todo = TodoModel::find($id);
        $todo->update([
            'post'=>$request->post
        ]);
        return redirect()->back()->with('msg', 'update successfully done here..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = TodoModel::find($id);
        $todo->delete();
        return redirect()->back()->with('msg','delete success');
    }
}
