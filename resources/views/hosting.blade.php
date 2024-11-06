@extends("layouts.layout")
@section("content")
<section class="price_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Our Hosting</h2>
    </div>
    <div class="price_container">
      <form action="/ordering">
<div class="price_container">
@foreach($hosts as $host)
        <div class="box">
          <div class="detail-box">
            <h2>$ <span value="74.88" class="hidden" name="price" value={{$host->price}}>74.88</span>/Year </h2>
            <h6><span value="bronze" class="hidden" name="name" value={{$host->name}}>{{$host->name}}</span></h6>
            <ul class="price_features">
              <li>{{$host->web_space}}GB Web Space</li>
              <li>{{$host->bandwidth}} Bandwidth</li>
              <li>{{$host->sub_domains}} sub Domains</li>
              <li>{{$host->email_id}} E-mail Accounts</li>
            </ul>
          </div>
          <div class="btn-box">
            <button type="submit">Buy Now</button>
          </div>
        </div>
@endforeach
</div>
</form>
    </div>
</section>
@endsection