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

  <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
 
  @csrf
<div>
    <label>Name</label>
    <input style="color:black" type="text" name="name" required="" placeholder=" name">
</div>
<div>
    <label>Speciality</label>
    <input style="color:black" type="text" name="speciality" required   placeholder=" speciality">
</div>
<div>
   
    <input type="file" name="image" required >
</div>

<div>
    
    <input type="submit"  class="btn btn-info" value="Submit" required="" >
</div>

</form>


<table bgcolor="black" >
            <tr>
              <th  style="padding:30px">Chef Name </th>
              <th  style="padding:30px">Speciality</th>
              <th  style="padding:30px">Image </th>
              <th  style="padding:30px">Actions1 </th>
              <th  style="padding:30px">Actions2 </th>
            </tr>
            @foreach($data as $data)

          <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td><img hight="200" width="200" src="/chefimages/{{$data->image}}"></td>
            <td><a href="{{url('/deletechef',$data->id)}}" class="btn btn-light">Delete</a></td>
            
            <td><a href="{{url('/updatechef',$data->id)}}" class="btn btn-light">Update</a></td>
          </tr>
          @endforeach

           
  <div>
  @include("admin.adminscript")



    
  </body>
</html>