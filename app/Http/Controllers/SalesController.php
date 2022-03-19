<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Products;
use App\Models\User;
use App\Models\Deliveries;
use App\Models\Setting;

class SalesController extends Controller
{

    public function store(Request $request)
    {

        if (Products::where('id', '=', $request->get('product_id'))->count() > 0) {
            $this->validate($request, [
                'product_id' => 'required',
                'user_id' => 'required',
                'status' => 'required',
                'quantity' => 'required|integer|min:0'
            ]);

            $sale = new Sales([
                'product_id' => $request->get('product_id'),
                'user_id' => $request->get('user_id'),
                'status' => $request->get('status'),
                'quantity' => $request->get('quantity')

            ]);
            $sale->save();
            return redirect('/sales')->with('success', 'Sale added!');
        } else {
            return redirect('/sales')->with('error', 'Product ID doesn\'t exist!');
        }
    }

    public function edit($id)
    {
        $sale = Sale::find($id);
        $users = User::all();
        return view('sales-edit', compact('sale','users'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'user_id' => 'required',
            'status' => 'required',
            'quantity' => 'required|integer|min:0'
        ]);

        $sale = Sale::find($id);
        $sale->product_id = $request->get('product_id');
        $sale->user_id = $request->get('user_id');
        $sale->status = $request->get('status');
        $sale->quantity = $request->get('quantity');

        $sale->save();
        return redirect('/sales')->with('success', 'Sale updated!');
    }

    public function destroy($id)
    {
        $sale = Sale::find($id);
        try{
            $sale->delete();
        } catch(\Illuminate\Database\QueryException $ex){
            return redirect('/sales')->with('error', 'Cannot delete record due to use as foreign key!');
        }

        return redirect('/sales')->with('success', 'Sale deleted!');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::all();
        $deliveries = Deliveries::all();
        $products = Products::all();
        $users = User::all();
        $settings = Setting::all();

        return view('sales', compact('sales', 'deliveries', 'products', 'users', 'settings'));
    }
}
