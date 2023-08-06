<?php

namespace App\Http\Controllers;
use App\Models\form;
use Illuminate\Http\Request;

class addproductController extends Controller
{

    public function index()
    {
        //
   return view('addproduct');
    }







public function store(Request $request)
{
    $validatedData = $request->validate([
        'productName' => 'required|string|max:255',
        'quantity' => 'required|integer',
        'category' => 'required|string',
        'imageUpload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'phoneNumber' => 'required|string|regex:/^[0-9]{10}$/',
    ]);

    // Handle image upload and store the path in the database
    if ($request->hasFile('imageUpload') && $request->file('imageUpload')->isValid()) {
        $extension = $request->file('imageUpload')->getClientOriginalExtension();
        $imageName = uniqid() . '.' . $extension;
        $imagePath = $request->file('imageUpload')->storeAs('public/products', $imageName);
        $validatedData['imageUpload'] = $imagePath;
    }

    // Save data to the "form" table in the database
    Form::create($validatedData);

    // You can add any additional logic here if needed

    // Redirect back to the form with a success message
    return redirect()->route('add')->with('success', 'Form submitted successfully!');
}


public function display()
{
    $products = Form::all(); // Retrieve all products from the "form" table

    return view('products', compact('products'));
}

}
