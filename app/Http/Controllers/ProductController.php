<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->filter(request(['q']))->paginate(20)->withQueryString();
        return view('content.products.index', [
            'content' => 'Products',
            'title' => 'Products',
            'products' => $products
        ]);
    }

    public function create(){
        return view('content.products.form', [
            'url_form' => url('/products'),
            'title' => 'Create Products',
            'content' => 'Products'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|unique:products,nama',
            'company' => 'required|string',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'link_gambar' => 'required'
        ]);
        $data = Product::create($request->except(['_token']));

        return redirect('products')
            ->with('success', 'Produk Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('content.products.form', [
            'product' => $product,
            'url_form' => url('/products/' . $id),
            'content' => 'Products',
            'title' => 'Edit Products'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|unique:products,nama,'.$id,
            'company' => 'required|string',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'link_gambar' => 'required'
        ]);

        $data =Product::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('products')->with('success', 'Produk Berhasil Diedit');
    }

    public function destroy($id)
    {
        Product::where('id', '=', $id)->delete();
        return redirect('products')->with('success', 'Produk Berhasil Dihapus');
    }

    public function show(Product $product){
        return view('content.products.details', [
            'product' => $product,
            'title' => 'Product Details',
            'content' => 'Products'
        ]);
    }
}
