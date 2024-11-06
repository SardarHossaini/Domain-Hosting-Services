<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style2.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
    @extends("../layouts/adminLayout")
    @section("admin")
    <div class="container mt-5">
        <link rel="icon" href="{{ asset('images/logo.jpeg') }}" type="image/gif" />

        <!-- Google Web Fonts -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style2.css') }}" rel="stylesheet" />
        <h2>Edit Domain</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('domains.update', $domain->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $domain->name }}" required>
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <input type="date" class="form-control" id="year" name="year" value="{{ $domain->year }}" required>
            </div>
            <div class="form-group">
                <label for="rawNew">Raw New:</label>
                <input type="number" class="form-control" id="rawNew" name="rawNew" value="{{ $domain->rawNew }}"
                    required>
            </div>
            <div class="form-group">
                <label for="transfer">Transfer:</label>
                <input type="number" class="form-control" id="transfer" name="transfer" value="{{ $domain->transfer }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Update Domain</button>
        </form>
    </div>
    @endsection
</body>

</html>