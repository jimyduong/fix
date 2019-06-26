<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use vendor\project\StatusTest;

class CustomerController extends Controller
{
    public function getAll()
    {
        $customers = DB::table('customers')->get();

        return view('index', compact('customers'));
    }

    public function getAdd()
    {
        return view('add');
    }
    public function addCustomer(Request $request){
        $name=$request->name;
        $email=$request->email;
        $address=$request->address;
        DB::insert('insert into `customers` (`name`, `email`,`address`) values (?, ?,?)', [$name, $email,$address]);
        return redirect()->route('getAll');
    }

    public function deleteCustomer($id)
    {
        DB::table('customers')->where('id',$id)->delete();
        return redirect()->route('getAll');
    }

    public function showFormEdit($id){
        $customer=Customer::findOrfail($id);

        return view('edit',compact('customer'));
    }

    public function getCustomerByID($id){
        return DB::table('customers')->where('id', $id);
    }
    public function editCustomer(Request $request,$id)
    {
//        $name=$request->name;
//        $email=$request-
//        DB::update('update `customers` set `name` = $name;
//        return redirect()->route('getAll');
//        $getForm=$request->all();
        $customer=new Customer();
        $customer->id = $request->id;
        $customer->name=$request->name;
        $customer->save();
        return redirect('getAll');
    }
}
