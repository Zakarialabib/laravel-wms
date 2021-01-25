<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
    public function store(Request $request)
    {
            $this->validate($request, [
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'address' => 'required'
            ]);

            $customer = new Customers([
                'name' => $request->get('name'),
                'phone' => $request->get('phone'),
                'email' => $request->get('email'),
                'address' => $request->get('address'),
            ]);
            $customer->save();
            return redirect('/customers')->with('success', 'Delivery added!');
        
    }

    public function edit($id)
    {
        $customer = Customers::find($id);
        return view('customers-edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);

        $customer = Customers::find($id);
        $customer->name = $request->get('name');
        $customer->phone = $request->get('phone');
        $customer->email = $request->get('email');
        $customer->address = $request->get('address');

        $customer->save();
        return redirect('/customers')->with('success', 'Delivery updated!');
    }

    public function destroy($id)
    {
        $customer = Customers::find($id);
        $customer->delete();

        return redirect('/customers')->with('success', 'Delivery deleted!');
    }

    public function index()
    {
        $customers = Customers::all();
        return view('customers', compact('customers'));
    }








}
