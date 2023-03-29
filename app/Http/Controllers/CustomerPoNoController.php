<?php

namespace App\Http\Controllers;

use App\Models\CustomerPoNo;
use Illuminate\Http\Request;

class CustomerPoNoController extends Controller
{
    /**
 * Display a listing of the resource.
 */
public function index()
{
    $table =  CustomerPoNo::latest()->get();
    return response()->json($table);
}

/**
 * Show the form for creating a new resource.
 */
public function create()
{

}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $request->validate([
        'value' => 'required'
    ]);

    $product = CustomerPoNo::create([
        'value' => $request->value,
    ]);       
    return response()->json([
        'data' => $product
    ]);
}

/**
 * Display the specified resource.
 */
public function show()
{

}

/**
 * Show the form for editing the specified resource.
 */
public function edit()
{
    //
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, $id)
{
    $product = CustomerPoNo::findOrFail($id);
    $product->value = $request->value;
    return response()->json($products);
}

/**
 * Remove the specified resource from storage.
 */
public function destroy($id)
{
    CustomerPoNo::destroy($id);
    return response()->json([
        'message' => 'Item has been deleted'
    ]);
    //
}
}

