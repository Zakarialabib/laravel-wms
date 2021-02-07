@extends('layouts.web')
@section('content')   
@include('components.header')
    <div class="relative bg-white overflow-hidden">
  <div class="max-w-full mx-auto">
    <div class="relative z-10 lg:max-w-screen lg:w-full" style="background-color: #ffffffbf">
      @include('components.your_delivery_partner')
    </div>
  </div>
</div>
@include('components.why_choose_us')

@include('components.our-services')

@include('components.pricing')
 
@include('components.contact-us')

@include('components.footer')
<!--
<section class="tracking_box_area section_gap py-5">
  <div class="container">
      <div class="tracking_box_inner">
          <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given
              to you on your receipt and in the confirmation email you should have received.</p>
          <form class="row tracking_form my-4" action="{{route('delivery.track.order')}}" method="post" novalidate="novalidate">
            @csrf
              <div class="col-md-8 form-group">
                  <input type="text" class="form-control p-2"  name="tracking_number" placeholder="Enter your tracking number">
              </div>
              <div class="col-md-8 form-group">
                  <button type="submit" value="submit" class="btn submit_btn">Track Order</button>
              </div>
          </form>
      </div>
  </div>
</section>
-->


@endsection