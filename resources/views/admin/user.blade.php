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
  <div style="position:relative; top:60px; right:-160px">
<table  bgcolor="black "   border="4px">  

<tr>
    <th style="padding:60px">Name</th>
    <th style="padding:60px">Email</th>
    <th style="padding:60px">Action</th>
</tr>

@foreach($data as $data)
    <tr align="center">
    <td >{{$data->name}}</td>
    <td >{{$data->email}}</td>

    @if($data->usertype=="0")
    <td> <a href="{{url('/deleteuser',$data->id)}}"   class="btn btn-light"> Delete </a></td>
    @else
    <td> <a> Not Allowed </a></td>
    @endif




</tr>
@endforeach
</table>


 </div>
  @include("admin.adminscript")

    </div>

    
  </body>
</html>