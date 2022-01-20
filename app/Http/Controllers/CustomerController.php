<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;
use Auth;

class CustomerController extends Controller
{
    //
public function index(){
	$customer =  DB::table('users')
        ->join('customer','customer.id', '=', 'users.id')
        ->where('users.account_role','customer')
        ->select('users.first_name as first_name', 'customer.address as address', 'users.phone as phone', 'users.id as id')
        ->get()->paginate(10);
        
        return view('customer.customer',[
            'customer' => $customer]);
    }

function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $customer =  DB::table('users')
        ->join('customer','customer.id', '=', 'users.id')
        ->where('users.account_role','customer')
        ->select('users.first_name as first_name', 'customer.address as address', 'users.phone as phone', 'users.id as id')
        ->get()->paginate(10);
      return view('pagination_data', compact('customer'))->render();
     }
    }

 public function store(Request $request)
    {
        $request->validate([
            'todo' => 'required',
            ]);

        $todo = new Todo();
        $todo->todo = $request->todo;
        $todo->save();
        return Response::json($todo);
    }

    public function update(Todo $todo, Request $request)
    {
        $request->validate([
            'todo' => 'required',
            ]);

        $todo->todo = $request->todo;
        $todo->save();
        return Response::json($todo);
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return Response::json($todo);
    }
    
}
