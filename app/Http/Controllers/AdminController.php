<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Product;

class AdminController extends Controller
{
    public function v_cat()
    {
        $data = category::all();

        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new category;
        $data-> category_name = $request->category;
        $data->save();
        toastr()->closeButton()->success('Category Added Scccessfully !');
        return redirect()->back();
    }
    public function delete_cat($id)
    {
        $data = category::find($id);
        $data->delete();
        
        return redirect()->back();
    }

    public function up_cat($id)
    {
        $data = category::find($id);
        return view('admin.up_cat',compact('data'));
       
    }
    public function upd_cat(Request $request,$id)
    {
        $data = category::find($id);
        $data->category_name=$request->category;
        $data->save();
        return redirect('/v_cat');
       
    }
    public function add_pro()
    {
        $cat=category::all();

      return view('admin.add_pro',compact('cat'));
       
    }
    public function upload(Request $request)
    {
        $data =  new Product;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->category=$request->category;

        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('arts',$imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back();
       
    }
    public function v_pro()
    {
        $data = Product::all();
      return view('admin.v_pro',compact('data'));
       
    }
    public function del_pro($id)
    {
        $data = Product::find($id);
        $image_path = public_path('atrs/.$data->image');
        if(file_exists($image_path))
     {
        unlink( $image_path);
     }
       
        $data->delete();
        
        return redirect()->back();
      
       
    }
    public function up_pro($id)
    {
        $data = Product::find($id);
        return view('admin.up_pro',compact('data'));
       
    }
    public function upd_pro(Request $request,$id)
    {
        $data = Product::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->category=$request->category;
        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('arts',$imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect('/v_pro');
       
    }


}
