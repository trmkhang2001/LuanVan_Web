<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.supplier.index', compact('suppliers'));
    }
    public function create()
    {
        return view('admin.supplier.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);
        Supplier::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->route('admin.page.supplier.index')->with('success', 'Add Supllier Success');
    }
    public function edit(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.supplier.create', compact('supplier'));
    }
    public function update(Request $request, string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());
        return redirect()->route('admin.page.supplier.index')->with('success', 'Update Category Success');
    }
    public function destroy(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->route('admin.page.supplier.index')->with('success', 'Delete Category Success');
    }
}
