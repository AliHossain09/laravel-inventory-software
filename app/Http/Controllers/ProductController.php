<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function addProduct()
    {
        $user = Auth::User();
        return view('client.addProduct' , compact('user'));
    }

    public function create()
    {
        // Logic to show the form for creating a new product
    }

    public function store(Request $request)
    {
        // Logic to store a new product in the database
    }

    public function view($id)
    {
        // Logic to display a specific product
    }

    public function edit($id)
    {
        // Logic to show the form for editing a specific product
    }

    public function update(Request $request, $id)
    {
        // Logic to update a specific product in the database
    }

    public function destroy($id)
    {
        // Logic to delete a specific product from the database
    }
    public function search(Request $request)
    {
        // Logic to search for products based on the request
    }
    public function filter(Request $request)
    {
        // Logic to filter products based on the request
    }
    public function sort(Request $request)
    {
        // Logic to sort products based on the request
    }
    public function paginate(Request $request)
    {
        // Logic to paginate products based on the request
    }
    public function export(Request $request)
    {
        // Logic to export products based on the request
    }
}
