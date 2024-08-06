<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Services\FileStorageService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(CreateProductRequest $request)
    {
        $data = $request->validated();
        $thumbnail = FileStorageService::upload($data['thumbnail']);
        $data['thumbnail'] = $thumbnail;
        $product = Product::create($data);
        if ($product) {
            return redirect()->back()->with([['success' => 'Товар добавлен']]);
        }

        return redirect()->back()->with([['error' => 'Smth went wrong']]);
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        if (isset($data['thumbnail'])) {
            FileStorageService::remove($data['thumbnail']);
            $thumbnail = FileStorageService::upload($data['thumbnail']);
            $data['thumbnail'] = $thumbnail;
        }

        if ($product->update($data)) {
            return redirect()->route('products.index')->with(['success' => "Товар $product->name изменен"]);
        }
    }

    public function destroy()
    {

    }
}
