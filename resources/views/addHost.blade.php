@extends("layouts.adminLayout")
@section("admin")
<div class="container">
    <div class="form-container">
        <h2 class="text-center">Create Hosting Plan</h2>
        <form method="POST" action="/storeHost">
            @csrf
            <div class="form-group m-8">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter plan name" required>
            </div>
            <div class="form-group m-8">
                <label for="label">Label</label>
                <input type="text" class="form-control" id="label" name="label" placeholder="Enter plan label" required>
            </div>
            <div class="form-group">
                <label for="web_space">Web Space (MB)</label>
                <input type="number" class="form-control" id="web_space" name="web_space" placeholder="Enter web space"
                    required>
            </div>
            <div class="form-group">
                <label for="bandwidth">Bandwidth</label>
                <input type="text" class="form-control" id="bandwidth" name="bandwidth" placeholder="Enter bandwidth"
                    required>
            </div>
            <div class="form-group">
                <label for="sub_domain">Sub Domain</label>
                <input type="text" class="form-control" id="sub_domain" name="sub_domain" placeholder="Enter sub domain"
                    required>
            </div>
            <div class="form-group">
                <label for="email_id">Email ID</label>
                <input type="number" class="form-control" id="email_id" name="email_id" placeholder="Enter email ID"
                    required>
            </div>
            <div class="form-group">
                <label for="price">Price ($)</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter price"
                    required>
            </div>
            <div class="form-group">
                <label for="hosting_amount">Hosting Amount</label>
                <input type="number" class="form-control" id="hosting_amount" name="hosting_amount"
                    placeholder="Enter hosting amount" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
    </div>
</div>
@endsection

@push('styles')
    <style>
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
@endpush