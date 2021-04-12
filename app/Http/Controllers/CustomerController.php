<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return response()->json([
            'message' => 'Customers lists successfully fetched',
            'customers' => $customers
        ], 200);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'fullName' => 'required|unique:customers|max:255',
            'dateOfBirth' => 'required',
            'email' => 'required|unique:customers',
            'password' => 'required',
            'confirmPassword' => 'required'
        ]);

        if($request->password !== $request->confirmPassword){
            return response()->json([
                'message' => 'Please ensure the passwords match'
            ], 500);
        }

        $customer = Customer::create([
            'fullName' => $request->fullName,
            'dateOfBirth' => $request->dateOfBirth,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return response()->json([
            'message' => 'Customer successfully Created',
            'customer' => $customer
        ], 202);
    }

    public function show(Customer $id)
    {
        $customer = Customer::findOrFail($id);

        return response()->json([
            'message' => 'Customer successfully fetched',
            'customer' => $customer
        ], 200);
    }

    public function update(Request $request, Customer $customer)
    {
        $customer_id = $customer->id;
        $customer_to_update = Customer::findOrfail($customer_id);
        $customer_to_update->update($request->all());

        return response()->json([
            'message' => 'Customer acoount Successfully Updated',
            'customer' => $customer_to_update
        ], 200);
    }

    public function destroy(Customer $customer)
    {
        $customer_id = $customer->id;
        $customer_to_delete = Customer::findOrfail($customer_id);
        $customer_to_delete->delete();

        return response()->json([
            'message' => 'Customer acoount Successfully deleted',
            'customer' => $customer_to_delete
        ], 200);
    }
}
