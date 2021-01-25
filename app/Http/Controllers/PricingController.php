<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pricing;

class PricingController extends Controller
{
    public function store(Request $request)
    {

        $this->validate($request, [
            'region' => 'required',
            'city' => 'required',
            'price' => 'required'
        ]);

        $pricing = new Pricing([
            'region' => $request->get('region'),
            'city' => $request->get('city'),
            'price' => $request->get('price')
        ]);
        $pricing->save();
        return redirect('/pricings')->with('success', 'Pricing added!');
    }

    public function edit($id)
    {
        $pricing = Pricing::find($id);
        return view('pricings-edit', compact('pricing'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'region' => 'required',
            'city' => 'required',
            'price' => 'required'
        ]);

        $pricing = Pricing::find($id);
        $pricing->region = $request->get('region');
        $pricing->city = $request->get('city');
        $pricing->price = $request->get('price');

        $pricing->save();
        return redirect('/pricings')->with('success', 'Pricing updated!');
    }

    public function destroy($id)
    {
        $pricing = Pricing::find($id);
        try {
            $pricing->delete();
        } catch(\Illuminate\Database\QueryException $ex){
            return redirect('/pricings')->with('error', 'Cannot delete record due to use as foreign key!');
        }

        return redirect('/pricings')->with('success', 'Pricing deleted!');
    }

    public function index()
    {
        $pricings = Pricing::all();
        return view('pricings', compact('pricings'));
    }
}
