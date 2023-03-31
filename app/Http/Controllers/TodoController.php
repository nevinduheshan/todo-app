<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoStoreRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('todo')
            ->with([
                'todos' => Todo::query()->get(),
            ]);
    }


    public function create()
    {
    }


    public function store(TodoStoreRequest $request)
    {
        $todo = new Todo();
        $todo->title = $request->get('title');
        $todo->description = $request->get('description');
        $todo->save();

        //Todo::create($request->validated());

        return back();
    }


    public function show(string $id)
    {
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Todo $todo)
    {
        $todo->update(['iscompleted' => true]);

        return Back();
    }


    public function destroy(Todo $todo)
    {
        $todo->delete();

        return Back();
    }
}
