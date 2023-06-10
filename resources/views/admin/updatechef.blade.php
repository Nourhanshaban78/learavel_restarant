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

  <form action="{{url('/updatefoodchef',$data->id)}} " method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Chef Name</label>
                <input style="color:black" type="text" name="name"  value="{{$data->name}}"   required>
            </div>
            <div>
                <label>Speciality</label>
                <input  style="color:black" type="text" name="speciality"  value="{{$data->speciality}}"  required>
            </div>
        
            

            <div>
                <label>Old Image</label>

                <img hight="200" width="200" src="/chefimages/{{$data->image}}">
                
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