<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class AddproductController extends Controller
{
    public function index()
    {
        $products = AdminProductModel::all();
    return view('backend.add-product', compact('products'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        Log::info('Request Data:', $request->all());

        $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_Img_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_Img_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_Img_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_price' => 'required|numeric',
            'product_brand' => 'required|string|max:255',
            'category' => 'required|string|in:shoes,clothes,accessories',
            'description' => 'nullable|string|max:500',
        ]);

        $product = new AdminProductModel();
        $product->product_name = $request->input('product_name');
        $product->description = $request->input('description', '');
        $product->product_price = $request->input('product_price');
        $product->product_brand = $request->input('product_brand');
        $product->category = $request->input('category');


        if ($request->hasFile('product_Img_1')) {
            $product_Img_1 = $request->file('product_Img_1');
            $product_Img_1Name = 'product_' . time() . '_1.' . $product_Img_1->getClientOriginalExtension();
            $imagename = 'product_' . time() . '_1.' . $product_Img_1->getClientOriginalExtension();
            $folderPath = 'backend/images/products';
            $imagePath = $folderPath . '/' . $imagename;
             $request->product_Img_1->move(public_path($folderPath), $imagename);
            $product->product_Img_1 = 'products/' . $product_Img_1Name;
        }

        if ($request->hasFile('product_Img_2')) {
            $product_Img_2 = $request->file('product_Img_2');
            $product_Img_2Name = 'product_' . time() . '_2.' . $product_Img_2->getClientOriginalExtension();
            $imagename = 'product_' . time() . '_2.' . $product_Img_2->getClientOriginalExtension();
            $folderPath = 'backend/images/products';
            $imagePath = $folderPath . '/' . $imagename;
             $request->product_Img_2->move(public_path($folderPath), $imagename);
            $product->product_Img_2 = 'products/' . $product_Img_2Name;
        }

        if ($request->hasFile('product_Img_3')) {
            $product_Img_3 = $request->file('product_Img_3');
            $product_Img_3Name = 'product_' . time() . '_3.' . $product_Img_3->getClientOriginalExtension();
            $imagename = 'product_' . time() . '_3.' . $product_Img_3->getClientOriginalExtension();
            $folderPath = 'backend/images/products';
            $imagePath = $folderPath . '/' . $imagename;
             $request->product_Img_3->move(public_path($folderPath), $imagename);
            $product->product_Img_3 = 'products/' . $product_Img_3Name;
        }

        Log::info('Product Data:', $product->toArray());

        if ($product->save()) {
            Log::info('Product added successfully');
            return back()->with('success', 'Product added successfully');
        } else {
            Log::error('Failed to add product');
            return back()->with('error', 'Failed to add product');
        }
    }
    public function shoes()
    {
        $shoes = AdminProductModel::where('category', 'shoes')->get();
        // dd($shoes); // This line will stop execution, remove it in production
        return view('frontend.shoes-category', ['shoes' => $shoes]);
    }
    public function clothes()
    {
        $clothes = AdminProductModel::where('category', 'clothes')->get();
       // dd($shoes); // This line will stop execution, remove it in production
        return view('frontend.clothes-category', ['clothes' => $clothes]);
    }
    public function accessories()
    {
        $accessories = AdminProductModel::where('category', 'accessories')->get();
        // dd($shoes); // This line will stop execution, remove it in production
        return view('frontend.accessories-category', ['accessories' => $accessories]);
    }
    public function show(string $id)
    {
        $product = AdminProductModel::find($id);
        return view('backend.addproduct', ['product' => $product]);
    }
    public function editProduct($id)
{
    $product = AdminProductModel::findOrFail($id);
    return view('backend.product-edit', compact('product'));
}

    public function updateProduct(Request $request, $id)
{
    $validated = $request->validate([
        'product_name' => 'required|string|max:255',
        'product_Img_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'product_Img_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'product_Img_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'product_price' => 'required|numeric',
        'product_brand' => 'required|string|max:255',
        'category' => 'required|string|in:shoes,clothes,accessories',
        'description' => 'nullable|string|max:500',
    ]);

    $product = AdminProductModel::findOrFail($id);
    $product->product_name = $request->input('product_name');
    $product->description = $request->input('description', '');
    $product->product_price = $request->input('product_price');
    $product->product_brand = $request->input('product_brand');
    $product->category = $request->input('category');

    if ($request->hasFile('product_Img_1')) {
        $product_Img_1 = $request->file('product_Img_1');
        $product_Img_1Name = 'product_' . time() . '_1.' . $product_Img_1->getClientOriginalExtension();
        $product_Img_1->move(public_path('backend/images/products'), $product_Img_1Name);
        $product->product_Img_1 = 'backend/images/products/' . $product_Img_1Name;
    }

    if ($request->hasFile('product_Img_2')) {
        $product_Img_2 = $request->file('product_Img_2');
        $product_Img_2Name = 'product_' . time() . '_2.' . $product_Img_2->getClientOriginalExtension();
        $product_Img_2->move(public_path('backend/images/products'), $product_Img_2Name);
        $product->product_Img_2 = 'backend/images/products/' . $product_Img_2Name;
    }

    if ($request->hasFile('product_Img_3')) {
        $product_Img_3 = $request->file('product_Img_3');
        $product_Img_3Name = 'product_' . time() . '_3.' . $product_Img_3->getClientOriginalExtension();
        $product_Img_3->move(public_path('backend/images/products'), $product_Img_3Name);
        $product->product_Img_3 = 'backend/images/products/' . $product_Img_3Name;
    }

    if ($product->save()) {
        return redirect()->route('addproduct')->with('success', 'Product updated successfully');
    } else {
        return back()->with('error', 'Failed to update product');
    }
}


public function deleteProduct($id)
    {
        $product = AdminProductModel::findOrFail($id);
        if ($product->delete()) {
            return back()->with('success', 'Product deleted successfully');
        } else {
            return back()->with('error', 'Failed to delete product');
        }
    }


}
