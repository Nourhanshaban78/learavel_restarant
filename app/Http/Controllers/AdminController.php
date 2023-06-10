<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
use App\Models\Order;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function user(){
        $data=User::all();
        return view ('admin.user',compact("data"));
    }


    public function deleteuser($id){
        $data=User::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id){
        $data=Food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function deletechef($id){
        $data=Foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function foodmenu(){
        $data=Food::all();
        return view ('admin.foodmenu',compact('data'));
    }

    public function upload(Request $request){
        
        // $data = new Food;
        // $data->title=$request->title;
        // $data->price=$request->price;
        // $data->image=$request->file('image')->getClientOriginalName();
        // //$path = $data->store('public/foodimages', $data);
        // $data->description=$request->description;
        // $data->save();
        // return redirect()->back();

        $data = new Food;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('foodimages', $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }


    public function updateview($id){
        $data=Food::find($id);
        return view('admin.updateview',compact('data'));

    }

    public function update(Request $request , $id){
        $data=Food::find($id);
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('foodimages', $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }



    public function reservation(Request $request){
        $data= new Reservation;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;
        $data->save();
        return redirect()->back();

    }
    public function viewreservation(){
        if(Auth::id()){
        $data=Reservation::all();
        return view ('admin.adminreservation',compact('data'));
        }
        else{
            return redirect('login');
        }

    }
    public function viewchef(){
        $data=Foodchef::all();
        return view ('admin.adminchefs',compact('data'));

    }
    public function uploadchef(Request $request){
        $data= new Foodchef;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('chefimages', $imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();
    }

    
    public function updatechef($id){
       // $data=Foodchef::all();
       $data=Foodchef::find($id);
        return view ('admin.updatechef',compact('data'));
       
    }
 public function updatefoodchef(Request $request , $id){
    $data=Foodchef::find($id);
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('chefimages', $imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();

 }
 public function order(){
    $data=Order::all();
    return view('admin.order',compact('data'));
 }

public function search(Request $request){
$search=$request->search;
$data=Order::where('name','Like','%'.$search.'%')->orwhere('foodname','Like','%'.$search.'%')->get();
return view('admin.order',compact('data'));
}


}
