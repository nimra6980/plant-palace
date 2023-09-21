<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plants;
use App\Models\User;
use App\Models\feedback;
use App\Models\accessories;

use App\Models\order;
use App\Models\testimonial;
use App\Models\blog;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.index');
    }
    public function plants(){
        $plant= plants::all();
        return view('admin.plants',compact('plant'));
    }
    public function createplants(){
        return view('admin.addplants');
    }
    public function addplants(Request $request){
        $plants = new plants;
        $plants->name = $request->name;
        $plants->detail = $request->detail;
        $plants->price = $request->price;
        $plants->badge = $request->badge;
        $plants->category = $request->category;
        $plants->requirments = $request->requirments;
        $plants->life = $request->life;
        if ($request->image) {
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time() . '_' . \Str::random(8) . '.' . $ext;
            $request->image->move(public_path().'/uploads/product/images/',$newFileName); // This will save file in a folder
            $plants->image = $newFileName;
            $plants->save();
        }
        

        $plants->save();

        return redirect()->route('plants');
    }
    public function deleteplants($id){
        $data=plants::find($id);
        $data->delete();
        return redirect()->back()->with('massage','plant deleted successfully !');
    }
    public function editplants($id){
        $plant = plants::findOrFail($id);
      
        return view("admin.editplants",compact('plant'));
    }
    public function updateplants($id, Request $request){

        $plants = plants::find($id);
        $plants->name = $request->name;
        $plants->detail = $request->detail;
        $plants->price = $request->price;
        $plants->badge = $request->badge;
        $plants->category = $request->category;
        $plants->requirments = $request->requirments;
        $plants->life = $request->life;
        if ($request->image) {
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time() . '_' . \Str::random(8) . '.' . $ext;
            $request->image->move(public_path().'/uploads/product/images/',$newFileName); // This will save file in a folder
            $plants->image = $newFileName;
            $plants->save();
        }
        

        $plants->save();
        return redirect()->route('plants');
    }
   

    public function testimonial(){
        $testimonial= testimonial::all();
        return view('admin.testimonial',compact('testimonial'));
    }
    public function createtestimonial(){
        return view('admin.addtestimonial');
    }
    public function addtestimonial(Request $request){
        $testimonial = new testimonial;
        $testimonial->name = $request->name;
        $testimonial->detail = $request->detail;
       
        if ($request->image) {
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time() . '_' . \Str::random(8) . '.' . $ext;
            $request->image->move(public_path().'/uploads/product/images/',$newFileName); // This will save file in a folder
            $testimonial->image = $newFileName;
            $testimonial->save();
        }
        

        $testimonial->save();

        return redirect()->route('testimonial');
    }
    public function deletetestimonial($id){
        $data=testimonial::find($id);
        $data->delete();
        return redirect()->back()->with('massage','plant deleted successfully !');
    }
    public function edittestimonial($id){
        $testimonial = testimonial::findOrFail($id);
      
        return view("admin.edittestimonial",compact('testimonial'));
    }
    public function updatetestimonial($id, Request $request){

        $testimonial = testimonial::find($id);
        $testimonial->name = $request->name;
        $testimonial->detail = $request->detail;
    
        if ($request->image) {
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time() . '_' . \Str::random(8) . '.' . $ext;
            $request->image->move(public_path().'/uploads/product/images/',$newFileName); // This will save file in a folder
            $testimonial->image = $newFileName;
            $testimonial->save();
        }
        

        $testimonial->save();
        return redirect()->route('testimonial');
    }



    // blog
    
    public function blog(){
        $blog= blog::all();
        return view('admin.blog',compact('blog'));
    }
    public function createblog(){
        return view('admin.addblog');
    }
    public function addblog(Request $request){
        $blog = new blog;
        $blog->title = $request->title;
        $blog->detail = $request->detail;
        $blog->detail1 = $request->detail1;
        $blog->detail2 = $request->detail2;
        $blog->detail3 = $request->detail3;
        $blog->category = $request->category;
        $blog->quote = $request->quote;
        $blog->tags = $request->tags;
       
        if ($request->image) {
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time() . '_' . \Str::random(8) . '.' . $ext;
            $request->image->move(public_path().'/uploads/product/images/',$newFileName); // This will save file in a folder
            $blog->image = $newFileName;
            $blog->save();
        }
        

        $blog->save();

        return redirect()->route('blog');
    }
    public function deleteblog($id){
        $data=blog::find($id);
        $data->delete();
        return redirect()->back()->with('massage','plant deleted successfully !');
    }
    public function editblog($id){
        $blog = blog::findOrFail($id);
      
        return view("admin.editblog",compact('blog'));
    }
    public function order(){
        $order = order::all();
        return view("admin.order",compact('order'));
    }
    public function updateblog($id, Request $request){

        $blog = blog::find($id);
        $blog->title = $request->title;
        $blog->detail = $request->detail;
        $blog->detail1 = $request->detail1;
        $blog->detail2 = $request->detail2;
        $blog->detail3 = $request->detail3;
        $blog->category = $request->category;
        $blog->quote = $request->quote;
        $blog->tags = $request->tags;
    
        if ($request->image) {
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time() . '_' . \Str::random(8) . '.' . $ext;
            $request->image->move(public_path().'/uploads/product/images/',$newFileName); // This will save file in a folder
            $blog->image = $newFileName;
            $blog->save();
        }
        

        $blog->save();
        return redirect()->route('blog');
    }
    public function showusers(){
        $users = User::all();
        return view('admin.showusers',compact('users'));
    }
    public function showfeedback(){
        $feedback = feedback::all();
        return view('admin.showfeedback',compact('feedback'));
    }
    public function removefeedback($id)
    {
        $data=feedback::find($id);
        $data->delete();
        return redirect()->back()->with('massage','feedback deleted successfully !');
    }


    // accessories

    public function accessories(){
        $accessories= accessories::all();
        return view('admin.accessories',compact('accessories'));
    }
    public function createaccessories(){
        return view('admin.addaccessories');
    }
    public function addaccessories(Request $request){
        $accessories = new accessories;
        $accessories->name = $request->name;
        $accessories->detail = $request->detail;
        $accessories->price = $request->price;
        $accessories->badge = $request->badge;
        if ($request->image) {
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time() . '_' . \Str::random(8) . '.' . $ext;
            $request->image->move(public_path().'/uploads/product/images/',$newFileName); // This will save file in a folder
            $accessories->image = $newFileName;
            $accessories->save();
        }
        

        $accessories->save();

        return redirect()->route('accessories');
    }
    public function deleteaccessories($id){
        $data=accessories::find($id);
        $data->delete();
        return redirect()->back()->with('massage','accessories deleted successfully !');
    }
    public function editaccessories($id){
        $accessories = accessories::findOrFail($id);
      
        return view("admin.editaccessories",compact('accessories'));
    }
    public function updateaccessories($id, Request $request){

        $accessories = accessories::find($id);
        $accessories->name = $request->name;
        $accessories->detail = $request->detail;
        $accessories->price = $request->price;
        $accessories->badge = $request->badge;

        if ($request->image) {
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time() . '_' . \Str::random(8) . '.' . $ext;
            $request->image->move(public_path().'/uploads/product/images/',$newFileName); // This will save file in a folder
            $accessories->image = $newFileName;
            $accessories->save();
        }
        

        $accessories->save();
        return redirect()->route('accessories');
    }
}
