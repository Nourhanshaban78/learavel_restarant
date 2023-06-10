<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
  
  
  <div class="container-scroller">
  @include("admin.navbar")
 
  <div style="position: relative; top:60px; right:-150px" >
         <form action="{{url('/uploadfood')}} " method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input style="color:black" type="text" name="title"  placeholder="Title "  required>
            </div>
            <div>
                <label>Price</label>
                <input  style="color:black" type="text" name="price"  placeholder="Price "  required>
            </div>
            <div>
                <label>Image</label>

                <input type="file" name="image"   required>
            </div>
            <div>
                <label>Description</label>
                <input style="color:black"  type="text" name="description"  placeholder=" Description "  required>
            </div>
               <input  type="submit"  class="btn btn-info" name="submit" value="Upload">
        
         </form>
         <div> 




          <table bgcolor="black" width="500" hight="500">
            <tr>
              <th  style="padding:30px">Food Name </th>
              <th  style="padding:30px">Food Price</th>
              <th  style="padding:30px">Food Image </th>
              <th  style="padding:30px">Food Description </th>
              <th  style="padding:30px">Actions1 </th>
              <th  style="padding:30px">Actions2 </th>
            </tr>
           
            @foreach($data as $data)

          <tr align="center">
            <td>{{$data->title}}</td>
            <td>{{$data->price}}$</td>
            <td><img hight="200" width="200" src="/foodimages/{{$data->image}}"></td>
            <td>{{$data->description}}</td>
            <td><a href="{{url('/deletemenu',$data->id)}}"  class="btn btn-light">Delete</a></td>
            <td><a href="{{url('/updateview',$data->id)}}"  class="btn btn-light">Update</a></td>
          </tr>
          @endforeach



          </table>
         </div>


       
  </div>
</div>

@include("admin.adminscript")




    
  </body>
</html>