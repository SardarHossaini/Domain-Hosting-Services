@extends("layouts.adminLayout")
@section("admin")
<div class="container mt-5">
    <link rel="icon" href="{{ asset('images/logo.jpeg') }}" type="image/gif" />

    <!-- Google Web Fonts -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet" />
    <h2>Add New Domain</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('domains.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="date" class="form-control" id="year" name="year" required>
        </div>
        <div class="mb-3">
            <label for="rawNew" class="form-label">Raw New</label>
            <input type="number" step="0.01" class="form-control" id="rawNew" name="rawNew" required>
        </div>
        <div class="mb-3">
            <label for="transfer" class="form-label">Transfer</label>
            <input type="number" step="0.01" class="form-control" id="transfer" name="transfer" required>
        </div>
        <div class="mb-3">
            <label for="register" class="form-label">Register</label>
            <input type="number" step="0.01" class="form-control" id="register" name="register" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection