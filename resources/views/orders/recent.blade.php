@extends("layouts.adminLayout")
@section("admin")
<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Recent Orders</h6>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">
                            <input class="form-check-input" type="checkbox" />
                        </th>
                        <th scope="col">Date</th>
                        <th scope="col">Invoice</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td><input class="form-check-input" type="checkbox" /></td>
                            <td>{{ $order->date }}</td>
                            <td>{{ $order->invoice }}</td>
                            <td>${{ $order->amount }}</td>
                            <td>{{ $order->status }}</td>
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