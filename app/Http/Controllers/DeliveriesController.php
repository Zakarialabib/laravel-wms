<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deliveries;
use App\Models\Sales;
use App\Models\Products;
use App\Models\User;

class DeliveriesController extends Controller
{

    public function store(Request $request)
    {

        if (Sales::where('id', '=', $request->get('sale_id'))->count() > 0) {
            $this->validate($request, [
                'sale_id' => 'required|unique:deliveries',
                'tracking_number' => 'required',
                'recipient' => 'required',
                'address' => 'required',
                'price' => 'required',
                'expected_arrival' => 'required|date|after:tomorrow',
                'actual_arrival' => 'nullable|date|after:expected_arrival',
                'status' => 'required',
                'description' => 'required'
            ]);

            $delivery = new Deliveries([
                'sale_id' => $request->get('sale_id'),
                'tracking_number' => $request->get('tracking_number'),
                'recipient' => $request->get('recipient'),
                'address' => $request->get('address'),
                'price' => $request->get('price'),
                'expected_arrival' => $request->get('expected_arrival'),
                'actual_arrival' => $request->get('actual_arrival'),
                'status' => $request->get('status'),
                'description' => $request->get('description'),
            ]);
            $delivery->save();
            return redirect('/deliveries')->with('success', 'Delivery added!');
        } else {
            return redirect('/deliveries')->with('error', 'Sale ID doesn\'t exist!');
        }
    }

    public function edit($id)
    {
        $delivery = Deliveries::find($id);
        return view('deliveries-edit', compact('delivery'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'sale_id' => 'required|unique:deliveries',
            'tracking_number' => 'required',
            'recipient' => 'required',
            'address' => 'required',
            'price' => 'required',
            'expected_arrival' => 'required|date|after:tomorrow',
            'actual_arrival' => 'nullable|date|after:expected_arrival',
            'status' => 'required',
            'description' => 'required'
        ]);

        $delivery = Deliveries::find($id);
        $delivery->sale_id = $request->get('sale_id');
        $delivery->name = $request->get('name');
        $delivery->price = $request->get('price');
        $delivery->description = $request->get('description');

        $delivery->save();
        return redirect('/deliveries')->with('success', 'Delivery updated!');
    }

    public function destroy($id)
    {
        $delivery = Deliveries::find($id);
        $delivery->delete();

        return redirect('/deliveries')->with('success', 'Delivery deleted!');
    }

    public function index()
    {
        $deliveries = Deliveries::all();
        $sales = Sales::all();
        $products = Products::all();
        $users = User::all();
        
        return view('deliveries', compact('deliveries','sales','products','users'));
    }

    public function orderTrack(){
        return view('frontend.pages.order-track');
    }

    public function deliveryTrackOrder(Request $request){
        // return $request->all();
        $delivery = Deliveries::where('tracking_number',$request->tracking_number)->first();
        if($delivery){
            if($delivery->status=="new"){
            request()->session()->flash('success','Your delivery has been placed. please wait.');
            return redirect()->route('home');

            }
            elseif($delivery->status=="process"){
                request()->session()->flash('success','Your delivery is under processing please wait.');
                return redirect()->route('home');
    
            }
            elseif($delivery->status=="delivered"){
                request()->session()->flash('success','Your delivery is successfully delivered.');
                return redirect()->route('home');
    
            }
            else{
                request()->session()->flash('error','Your delivery canceled. please try again');
                return redirect()->route('home');
    
            }
        }
        else{
            request()->session()->flash('error','Invalid delivery numer please try again');
            return back();
        }
    }
}
