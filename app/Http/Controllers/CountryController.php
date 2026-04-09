<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{

    public function index()
    {
        
        $countries = Country::latest()->paginate(1);

        return view('country.index', compact('countries'));
    }

    public function create()
    {
        return view('country.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'code'=>'required',
            'capital'=>'required',
            'continent'=>'required'
        ]);

        Country::create($request->all());

        return redirect()->route('country.index')
        ->with('success','Country created successfully');
    }

    public function edit($id)
    {
        $country = Country::find($id);
        return view('country.edit',compact('country'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'code'=>'required',
            'capital'=>'required',
            'continent'=>'required'
        ]);

        $country = Country::find($id);
        $country->update($request->all());

        return redirect()->route('country.index')
        ->with('success','Country updated successfully');
    }

    public function destroy($id)
    {
        Country::find($id)->delete();

        return redirect()->route('country.index')
        ->with('success','Country deleted successfully');
    }

}