<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
     @include("admin.admincss")
  </head>


  <body>
  <div class="container-scroller">
  @include("admin.navbar")

<div style="position: relative; top:60px; right:-150px" >

         <form action="{{url('/update',$data->id)}} " method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input style="color:black" type="text" name="title"  value="{{$data->title}}"   required>
            </div>
            <div>
                <label>Price</label>
                <input  style="color:black" type="text" name="price"  value="{{$data->price}}"  required>
            </div>
        
            <div>
                <label>Description</label>
                <input style="color:black"  type="text" name="description"   value="{{$data->description}}"   required>
            </div>

            <div>
                <label>Old Image</label>

                <img hight="200" width="200" src="/foodimages/{{$data->image}}">
                
                <div>
                <label> New Image</label>
                <input type="file" name="image"      required>
                </div>

                <input type="submit"  class="btn btn-info" name="submit" value="Update">
        
              </form>
                </div> 
             </div>


  @include("admin.adminscript")

  </body>
</html>