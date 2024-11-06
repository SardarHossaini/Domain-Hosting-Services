@extends('layouts.layout')

@section('content')

<section class="free-domain layout_padding2">
  <div class="container">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-6 box-domain">
        <h3>Is your domain available?</h3>
        <form method="POST" action="{{ route('check.domain') }}" id="domainForm">
          @csrf
          <input type="search" name="domain" placeholder="Enter your full domain (e.g., example.com)" required />
          <!-- <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div> -->
          <button type="submit">Search</button>
        </form>
      </div>
    </div>

    @if(isset($data))
      <div class="row domain-info">
        <div class="col-12">
        @if(empty($data['WhoisRecord']['expiresDate']))
      <div class="availability-info alert alert-success text-center">
        <strong>{{ $data['WhoisRecord']['domainName'] ?? '' }}</strong>
        <h4 class="text-center">
        <h3 class="bg-success text-white p-2 d-inline-block">{{ $data['WhoisRecord']['domainName'] ?? '' }}</h3>
        This domain is available!
        </h4>
        <p class="text-center">You can check more details on <a href="https://www.whois.com"
        target="_blank">whois.com</a>.
        </p>
      </div>
    @else
      <h4 class="text-center alert alert-danger">
        This Domain is not available but you can connect!:
        <strong>{{ $data['WhoisRecord']['domainAvailability'] ?? '' }}</strong>
      </h4>
      <div class="row">
        <div class="col-md-4">
        <div class="domain-details card mb-3">
        <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Domain Information</h5>
        </div>
        <div class="card-body">
        <p><strong>Domain Name:</strong> {{ $data['WhoisRecord']['domainName'] ?? '' }}</p>
        <p><strong>Status:</strong>
          {{ is_array($data['WhoisRecord']['status'] ?? null) ? implode(', ', $data['WhoisRecord']['status']) : '' }}
        </p>
        <p><strong>Created Date:</strong> {{ $data['WhoisRecord']['createdDate'] ?? '' }}</p>
        <p><strong>Updated Date:</strong> {{ $data['WhoisRecord']['updatedDate'] ?? '' }}</p>
        <p><strong>Expires Date:</strong> {{ $data['WhoisRecord']['expiresDate'] ?? '' }}</p>
        </div>
        </div>
        </div>

        <div class="col-md-4">
        <div class="domain-details card mb-3">
        <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Registrant Information</h5>
        </div>
        <div class="card-body">
        <p><strong>Name:</strong> {{ $data['WhoisRecord']['registrant']['name'] ?? 'Data protected' }}</p>
        <p><strong>Organization:</strong> {{ $data['WhoisRecord']['registrant']['organization'] ?? '' }}</p>
        <p><strong>Country:</strong> {{ $data['WhoisRecord']['registrant']['country'] ?? '' }}</p>
        <p><strong>Email:</strong> {{ $data['WhoisRecord']['registrant']['email'] ?? '' }}</p>
        </div>
        </div>
        </div>

        <div class="col-md-4">
        <div class="domain-details card mb-3">
        <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Administrative Contact</h5>
        </div>
        <div class="card-body">
        <p><strong>Name:</strong> {{ $data['WhoisRecord']['administrativeContact']['name'] ?? '' }}</p>
        <p><strong>Organization:</strong>
          {{ $data['WhoisRecord']['administrativeContact']['organization'] ?? '' }}</p>
        <p><strong>Country:</strong> {{ $data['WhoisRecord']['administrativeContact']['country'] ?? '' }}</p>
        <p><strong>Email:</strong> {{ $data['WhoisRecord']['administrativeContact']['email'] ?? '' }}</p>
        </div>
        </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
        <div class="domain-details card mb-3">
        <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Technical Contact</h5>
        </div>
        <div class="card-body">
        <p><strong>Name:</strong> {{ $data['WhoisRecord']['technicalContact']['name'] ?? '' }}</p>
        <p><strong>Organization:</strong> {{ $data['WhoisRecord']['technicalContact']['organization'] ?? '' }}
        </p>
        <p><strong>Country:</strong> {{ $data['WhoisRecord']['technicalContact']['country'] ?? '' }}</p>
        <p><strong>Email:</strong> {{ $data['WhoisRecord']['technicalContact']['email'] ?? '' }}</p>
        </div>
        </div>
        </div>

        <div class="col-md-4">
        <div class="domain-details card mb-3">
        <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Name Servers</h5>
        </div>
        <div class="card-body">
        <pre>{{ implode("\n", $data['WhoisRecord']['nameServers']['hostNames'] ?? []) }}</pre>
        </div>
        </div>
        </div>

        <div class="col-md-4">
        <div class="domain-details card mb-3">
        <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Additional Information</h5>
        </div>
        <div class="card-body">
        <div class="details">
          <div>
          <h6>Registrar</h6>
          <p><strong>Name:</strong> {{ $data['WhoisRecord']['registrarName'] ?? '' }}</p>
          <p><strong>URL:</strong> <a href="{{ $data['WhoisRecord']['registrarURL'] ?? '#' }}"
          target="_blank">{{ $data['WhoisRecord']['registrarURL'] ?? '' }}</a></p>
          </div>
          <div>
          <h6>Domain Age</h6>
          <p>{{ $data['WhoisRecord']['estimatedDomainAge'] ?? '' }} days</p>
          </div>
        </div>
        </div>
        </div>
        </div>
      </div>
      </div>

      </div>
    @endif
      </div>
      </div>
    @endif

  </div>
</section>
<img src="images/photo.png" alt="" style="width: 100%;">
<div class="container">
  <div class="row" style="text-align: center">
    <table class="table text-start align-middle table-bordered table-hover mb-0">
      <thead>
        <tr class="text-dark">
          <th scope="col">Name</th>
          <th scope="col">Year</th>
          <th scope="col">Raw New</th>
          <th scope="col">Transfer</th>
          <th scope="col">Register</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($domains as $domain)
      <tr>
        <form action="/ordering" method="POST">
        @csrf
        <td class="domain_name">
          <input type="text" name="name" value="{{ $domain->name }}" readonly
          style="border:none;background-color:transparent">
        </td>
        <td>
          <input type="text" name="year" value="{{ $domain->year }}" readonly
          style="border:none;background-color:transparent">
        </td>
        <td>{{ $domain->rawNew }}</td>
        <td>{{ $domain->transfer }}</td>
        <td>{{ $domain->register }}</td>
        <td>
          <button type="submit" class="btn btn-primary">Buy</button>
        </td>
        </form>
      </tr>
    @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
  document.getElementById('domainForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the form from submitting immediately

    var recaptchaResponse = grecaptcha.getResponse(); // Corrected from recaptcha to grecaptcha
    if (recaptchaResponse.length === 0) {
      alert('Please complete the reCAPTCHA.');
    } else {
      this.submit(); // Submit the form if reCAPTCHA is completed
    }
  });
</script>

@section('styles')
<style>
  .box-domain {
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
    justify-content: center;
    align-items: center;
  }

  .box-domain form {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .box-domain input[type="search"] {
    width: 75%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .box-domain button {
    padding: 10px 20px;
    border: none;
    background: #007bff;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
  }

  .box-domain button:hover {
    background: #0056b3;
  }

  .domain-info {
    margin-top: 20px;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .domain-details {
    margin-bottom: 20px;
  }

  .domain-details h5 {
    margin-bottom: 10px;
    font-size: 1.2em;
    color: #333;
  }

  .domain-details p {
    margin: 5px 0;
    font-size: 1em;
    color: #666;
    line-height: 1.6;
  }

  .domain-details pre {
    background: #f8f8f8;
    padding: 10px;
    border-radius: 4px;
    overflow-x: auto;
    white-space: pre-wrap;
    font-size: 0.9em;
    color: #333;
  }

  .details {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }

  .details div {
    background: #f8f8f8;
    padding: 10px;
    border-radius: 4px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  }

  .details div h6 {
    margin-top: 0;
    font-size: 1.1em;
    color: #444;
  }

  .availability-info {
    background: #d4edda;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  .availability-info h4 {
    color: #155724;
  }

  .availability-info a {
    color: #155724;
    text-decoration: underline;
  }

  .availability-info a:hover {
    text-decoration: none;
  }

  #domainForm {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  #domainForm input[type="search"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }

  #domainForm .g-recaptcha {
    margin-bottom: 15px;
  }

  #domainForm button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    cursor: pointer;
  }

  #domainForm button[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>
@endsection