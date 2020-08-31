<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use  App\Tasklist;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Todo.registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $taskdetail = new Tasklist;
        //Eloquent(ORM)オブジェクトを作成

        $taskdetail->title = $request->input('title');
        $taskdetail->content = $request->input('content');
        $taskdetail->due_date = $request->input('due_date');
        
        $taskdetail->save();
        
        return redirect('/tasklist');
    }

    public function test(Request $request)
    {
        $tasklist = Tasklist::all();
        //Eloquent(ORM)オブジェクトを作成してレコードを全件取得
        return view('Todo.tasklist',[
            'tasklist' => $tasklist,
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tasklist = Tasklist::find($id);
        
        return view('Todo.show',[
            'tasklist' => $tasklist
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasklist = Tasklist::find($id);
        
        return view('Todo.edit',[
            'tasklist' => $tasklist
        ]);
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
        $tasklist = Tasklist::find($id);
        $tasklist->content = $request->input('body');
        $tasklist->save();

        return redirect('/tasklist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasklist = Tasklist::find($id);
        $tasklist->delete(); 
        
        return redirect('/tasklist');
    }
}
