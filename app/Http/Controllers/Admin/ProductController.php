<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class ProductController extends Controller
{
    function product(){
        return view('backend.product.product');
    }

    // add product view 
    function product_add(){
        $parent_categories = Category::where('parent_category_id', null)->get();
        $categories = Category::all();
        return view('backend.product.add_product', compact('parent_categories', 'categories'));
    }

    // getcategory with ajax 
    function getcategory(Request $request){
        $opt='<option value="">Choise One</option>';
        $categories= Category::where('parent_category_id', $request->parent_category_id)->get();
       foreach ($categories as $category) {
         $opt .= '<option value="'.$category->id.'">'.$category->category_name.'</option>';
       }
       echo $opt;
    }

    // new product store 
    function product_store(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'images' => 'required',
        ]);
        $product_id = Product::insert([
            'parent_category_id' => $request->parent_category_id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'status' => $request->status,
            'description' => $request->description,
            'created_at'=> Carbon::now(),
        ]);
        // $thumbnails = $request->images;
        // foreach ($thumbnails as $thumbnail) {
        //    $thumbnail_extension=$thumbnail->extension();
        //    $image_name=Str::lower(str_replace(' ','-',$request->product_name)).random_int(1000,10000).'.'.$thumbnail_extension;
        //    Image::make($thumbnail)->resize(800,960)->save(public_path('files/product/thumbnail/'.$image_name));
        //    Thumbnail::insert([
        //     'added_id'=>Auth::id(),
        //     'product_id'=>$product_id,
        //     'thumbnail'=>$image_name,
        //     'created_at'=>Carbon::now(),
        //    ]);

        // }
    }
}
