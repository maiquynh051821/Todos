<?php

namespace App\Http\Controllers;

use App\Models\Sendmail;
use Illuminate\Http\Request;
use App\Models\Todo;
use App\Mail\SampleEmail;
use Illuminate\Support\Facades\Mail;
class TodosController extends Controller
{
   public function index()
   {
      $todos = Todo::all();
      return view('todos.index')->with('todos', $todos);
   }
   public function show(Todo $todo)
   {
      // $todo = Todo::find($todoId);
      return view('todos.show')->with('todo', $todo);
   }
   public function create()
   {
      return view('todos.create');
   }
   public function store()
   {

      // dd(request()->all());
      $this->validate(request(), [
         'name' => 'required|min:6|max:12',
         'description' => 'required'
      ]);

      $data = request()->all();
      $todo = new Todo();
      $todo->name = $data['name'];
      $todo->description = $data['description'];
      $todo->completed = false;
      $todo->save();
      session()->flash('success', 'Todo created successfully.');
      return redirect('/todos');
   }
   public function edit($todoId)
   {
      $todo = Todo::find($todoId);
      return view('todos.edit')->with('todo', $todo);
   }
   public function update(Todo $todo)
   {
      $this->validate(request(), [
         'name' => 'required|min:6|max:12',
         'description' => 'required'
      ]);
      $data = request()->all();
      // $todo = Todo::find($todoId);
      $todo->name = $data['name'];
      $todo->description = $data['description'];
      $todo->save();
      session()->flash('success', 'Todo update successfully.');
      return redirect('/todos');
   }
   public function destroy(Todo $todo)
   {
      // $todo = Todo::find($todoId);
      $todo->delete();
      session()->flash('success', 'Todo deleted successfully.');
      return redirect('/todos');
   }
   public function complete(Todo $todo)
   { {
         $todo->completed = true;
         $todo->save();
         session()->flash('success', 'Todo completed successfully');
         return redirect('/todos');
      }
   }
   public function sendmail()
   {

      return view('todos.sendmail');
   }
   public function storemail()
   {
      $this->validate(request(),[
         'email'=>'required|email',
         'content'=>'required'
      ]);
      $data = request()->all();
      $sendmail = new Sendmail();
      $sendmail->email = $data['email'];
      $sendmail->content = $data['content'];
      $sendmail->save();
      Mail::to($data['email'])->send(new SampleEmail($sendmail));
      session()->flash('success', 'You have successfully sent email.');
      return redirect('/send-email');

   }
  

}
