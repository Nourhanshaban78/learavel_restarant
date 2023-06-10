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

  <div class="container">
  <h1 align="center">Customer Orders</h1><br>
  <form align="center" action="{{url('search')}}" method="get">
    @csrf
    <input type="text" name="search" style="color:black";>
    <input type="submit" value="Search" class="btn btn-outline-success">
  </form>
  
  <div style="position:relative; top:60px; right:-100px">
  <table bgcolor="black"  border="4px">
            <tr align="center">
             
              <th  style="padding:40px">Name </th>
              <th  style="padding:40px">Phone </th>
              <th  style="padding:40px">Address </th>
              <th  style="padding:40px">Food Name </th>
              <th  style="padding:40px">Price</th>
              <th  style="padding:40px">Quantity </th>
              <th  style="padding:40px">Total Price </th>
            </tr>
           
            @foreach($data as $data)

          <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->foodname}}</td>
            <td>{{$data->price}}$</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->price * $data->quantity}}$</td>
          </tr>
          @endforeach



          </table>
</div>
</div>








</div>
  @include("admin.adminscript")
  </body>
</html>