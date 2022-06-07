<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();
        return view('admin.product.create',['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name'=>'required',
            'Description'=>'required',
            'Price'=>'required',
            'Stock'=>'required',
            'rating'=>'required',
        ]);

        if($request->file('Image')){
            $image_name=$request->file('Image')->store('images','public');
        }

        $product = new Product;
        $product->name = $request->get('Name');
        $product->description = $request->get('Description');
        $product->price = $request->get('Price');
        $product->stock = $request->get('Stock');
        $product->rating = $request->get('Rating');
        $product->image = $image_name;
        //fungsi eloquent untuk menambahkan data
        $category = new Category;
        $category->id = $request->get('category');

        $product->category()->associate($category);
        $product->save();
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.product.index')
        ->with('success','Produk Berhasil Ditambahakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Product::where('id', $id)->first();
        return view('admin.product.index', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Product::where('id', $id)->first();
        $category = category::all();
        return view('admin.product.edit', compact('item','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Name'=>'required',
            'Description'=>'required',
            'Price'=>'required',
            'Stock'=>'required',
            'Rating'=>'required',
        ]);

        $product = new Product;
        $product->name = $request->get('Name');
        $product->description = $request->get('Description');
        $product->price = $request->get('Price');
        $product->stock = $request->get('Stock');
        $product->rating = $request->get('Rating');
        if($product->image && file_exists(storage_path('app/public/'. $product->image))) {
                Storage::delete('public/' . $delete->image);
            }
        //fungsi eloquent untuk menambahkan data
        $category = new category;
        $category->id = $request->get('category');

        $product->category()->associate($category);
        $product->save();
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.product.index')
        ->with('success','Pelanggan Berhasil Ditambahakan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('admin.product.index')
                    ->with('success', 'Berhasi menghapus');
    }
}
