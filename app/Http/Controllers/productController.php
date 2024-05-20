<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\Product;
use App\Models\productIn;
use App\Models\productOut;
use App\Models\User;


class productController extends Controller
{
    public function index(Request $request){
        // $id = $request->id;
        // $product = Product::where('id',$id)->get();

        return view('xy_shop\productInsert');
        // return view('xy_shop\productInsert',['data'=>$product]);

    }


    //getting productIn on client side
    public function index2(){
        $products = Product::all();
        $productIns = ProductIn::all();
        $productOuts = ProductOut::all();
        $countProductOut = ProductOut::count();
        $product = product::select('productName')->first('productName');

        return view('xy_shop.client',['products' => $products,'productIns' => $productIns,'cart' => $countProductOut,'productOuts' => $productOuts,'products' => $product]);
        
    }

    // public function cart(){
    //     $countProductOut = ProductOut::count();
    //     return view('xy_shop.client',)
    // }

    //sending productNames to admin select
    public function select(){
        $products = Product::all();
        return view('xy_shop.admin',compact('products'));
    }

    //counting products,productIns and outs
    public function count(){
        $proCount = Product::count();
        $inCount  =  ProductIn::count();
        $outCount = ProductOut::count();
        return view('xy_shop.home',['productCount' => $proCount,'inCount' => $inCount,'CountOut' => $outCount]);
    }

    


    //inserting products in database
    public function insert(Request $request){
        $id = $request->id;
        $productCode = $request->input('productCode');
        $productName = $request->input('productName');

            $product = new Product();
            $product->productCode = $productCode;
            $product->productName = $productName;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi').$file->getclientOriginalName();
                $file->move(public_path('uploads'),$filename);
                $product->image = 'uploads/'.$filename;
            }
            $product->save();
    

            return redirect()->back();

    }
    


    public function showAdmin(){
        return view('xy_shop/admin');
    }

    public function showProducts(){
        $products = Product::all();
        return view('xy_shop\getProducts',compact('products'));
    }

    public function productIn(Request $request){

        $productId = $request->input('product_id');
        $dateTime = $request->input('DateTime');
        $quantity = $request->input('Quantity');
        $unitp = $request->input('UnitPrice');
        $totalp = $request->input('TotalPrice');
        $name = $request->input('name');

        $productIn = new ProductIn();
        $productIn->product_id = $productId;
        $productIn->DateTime = $dateTime;
        $productIn->Quantity = $quantity;
        $productIn->UnitPrice = $unitp;
        $productIn->TotalPrice = $quantity * $unitp;
        $productIn->name = $name;
        

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getclientOriginalName();
            $file->move(public_path('uploads'),$filename);
            $productIn->image = 'uploads/'.$filename;
        }

        $productIn->save();

        return redirect()->back()->with('message','product set successfully');
    }

    //passing data to panel view
    public function panel(){
        $products = Product::all();
        return view('xy_shop/panel',['products' => $products]);
    }  

    //deleting product
    public function destroy($id)
 {
 DB::delete("delete from product where id = $id");
echo "Record deleted successfully.<br/>";
echo '<a href="/delete-records">Click Here</a> to go back.';
 }

 public function show($id)
 {
 $products = DB::select("select * from product where id = '$id'");
return view('xy_shop.updateProduct',['products'=>$products]);
 }

 public function update(Request $request, $id)
 {
    $code = $request->input('productCode');
    $name = $request->input('productName');
    DB::update("update product set productCode='$code',productName='$name' where id = '$id' ");
    echo "Record updated successfully!<br/>";
    echo '<a href="/edit-records">Click Here</a> to go back.';

 }

public function showAll(){
    $productIns = ProductIn::all();
    $productOuts = ProductOut::all();
    return view('xy_shop.inList',[ 'productIns' => $productIns, 'productOuts' => $productOuts]);
}

public function replace(Request $request){
    $recordId = $request->input('product_id');

    $record = productIn::where('id',$recordId)->first();

    if($record){
         
            ProductOut::create($record->toArray());
            $record->delete();

        return response()->json(['success'=>true,'message'=>'record is replaced']);
    }
    else {
    }       
} 


}