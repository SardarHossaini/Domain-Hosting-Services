@extends("layouts.adminLayout")
@section("admin")
<div class="container-fluid pt-4 px-4">
  <div class="bg-light text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h6 class="mb-0">Orders</h6>
      <a href="salse">Show All</a>
    </div>
    <div class="table-responsive">
      <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
          <tr class="text-dark">

            <th scope="col">Name</th>
            <th scope="col">Date</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
        <tr>
        <td>{{$order->name}}</td>
        <td>{{$order->date}}</td>
        <td>{{$order->price}}</td>
        <td>{{$order->status}}</td>
        <td>
          <a class="btn btn-sm btn-primary" href="">Detail</a>
        </td>
        </tr>
      @endforeach 
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection