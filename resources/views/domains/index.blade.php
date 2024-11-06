@extends("layouts.adminLayout")
@section("admin")
<div class="container mt-5">
    <h2>Domains List</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Year</th>
                <th>Raw New</th>
                <th>Transfer</th>
                <th>Register</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($domains as $domain)
                <tr>
                    <td>{{ $domain->id }}</td>
                    <td>{{ $domain->name }}</td>
                    <td>{{ $domain->year }}</td>
                    <td>{{ $domain->rawNew }}</td>
                    <td>{{ $domain->transfer }}</td>
                    <td>{{ $domain->register }}</td>
                    <td>
                        <a href="{{ route('domains.edit', $domain->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('domains.destroy', $domain->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('domains.create') }}" class="btn btn-primary">Add New Domain</a>
</div>
@endsection