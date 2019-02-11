<?php

    namespace App\Http\Controllers;

    use App\Product;
    use Illuminate\Http\Request;

    class ProductController extends Controller
    {
        public function index()
        {
            return response()->json(Product::all(),200);
        }

        public function store(Request $request)
        {
            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'new_price' => $request->new_price,
                'old_price' => $request->old_price,
                'image' => $request->image,
                'category_id' => $request->category_id
            ]);

            return response()->json([
                'status' => (bool) $product,
                'data'   => $product,
                'message' => $product ? 'Product Created!' : 'Error Creating Product'
            ]);
        }

        public function show($id)
        {
            $data['product'] = Product::with('category')->find($id);
            return response()->json($data,200);
        }

        public function uploadFile(Request $request)
        {
            if($request->hasFile('img')){
                $name = time()."_".$request->file('img')->getClientOriginalName();
                $request->file('img')->move(public_path('img'), $name);
            }
            return response()->json(asset("img/$name"),201);
        }

        public function update(Request $request, Product $product)
        {
            $status = $product->update(
                $request->only(['name', 'description', 'units', 'new_price', 'old_price', 'image'])
            );

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Product Updated!' : 'Error Updating Product'
            ]);
        }



        public function destroy(Product $product)
        {
            $status = $product->delete();

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Product Deleted!' : 'Error Deleting Product'
            ]);
        }
    }
