@extends("layouts.adminLayout")
@section("admin")
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Recent Host</h6>
            <a href="/AddHost">+</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">

                        <th scope="col">Name</th>
                        <th scope="col">Label</th>
                        <th scope="col">Web Space</th>
                        <th scope="col">Bandwith</th>
                        <th scope="col">Sub Domain</th>
                        <th scope="col">Email</th>
                        <th scope="col">Price</th>
                        <th scope="col">Host Amount</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($hosts as $host)
                        <tr>
                            <td>{{$host->name}}</td>
                            <td>{{$host->label}}</td>
                            <td>{{$host->web_space}}</td>
                            <td>{{$host->bandwith}}</td>
                            <td>{{$host->sub_domain}}</td>
                            <td>{{$host->email_id}}</td>
                            <td>{{$host->price}}</td>
                            <td>{{$host->hosting_amount}}</td>
                            <td>
                        <a href="{{ route('host.edit', $host->id) }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ route('host.delete', $host->id) }}" class="btn btn-danger">Delete</a>        
                    </td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection