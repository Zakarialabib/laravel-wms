@extends('layouts.web')
@section('content')

    @include('components.header')

    <div class="relative bg-white overflow-hidden">
        <div class="max-w-full mx-auto">
            <section class="h-full">
                <div class="grid grid-cols-12 gap-6 px-8 py-16 items-center">
                    <div class="col-span-12 sm:col-span-12 md:col-span-5 lg:col-span-5 xxl:col-span-5 ">
                        <div class="py-4">
                            <h1 class="pb-4 text-green-550 text-4xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl tracking-tighter font-extrabold">
                                Confiez-nous votre Relation Client et restez libre
                            </h1>
                            <p class="text-xl sm:text-xl md:text-1xl lg:text-2xl xl:text-3xl font-semibold text-blue-550 pt-5 pb-5" >
                                <span class="font-bold">Vous êtes un e-commerçant? </span></p>
                            <p class="text-black-550 text-lg">                                    
                                Nous vous simplifions la vie! <br>
                                Concentrez-vous sur vos ventes et <br><span class="font-bold">TWITLY</span> s'occupe du reste!
                            </p>
                            <div class="flex pt-8">
                            <button  class="px-4 py-3 text-white rounded-md bg-green-550 hover:text-white hover:bg-green-600 font-bold uppercase"><a href="#contact">Rejoignez nous</a> </button>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-span-12 sm:col-span-12 md:col-span-7 lg:col-span-7 xl:col-span-7 flex justify-center">
                       
                    </div>
                </div>
            </section>
        </div>
    </div>

    @include('components.our-solutions')

    {{-- @include('components.our-services') --}}

    @include('components.contact-us')

    @include('components.footer')

    {{-- <section class="tracking_box_area section_gap py-5">
  <div class="container">
      <div class="tracking_box_inner">
          <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given
              to you on your receipt and in the confirmation email you should have received.</p>
          <form class="row tracking_form my-4" action="{{route('delivery.track.order')}}" method="post" novalidate="novalidate">
            @csrf
              <div class="col-md-8 form-group">
                  <input type="text" class="btn border-gray-300 text-gray-700 dark:text-gray-300 active:bg-gray-50 active:text-gray-800 hover:text-gray-500 active:bg-dark-eval-1 active:text-gray-300 hover:text-gray-700 p-2"  name="tracking_number" placeholder="Enter your tracking number">
              </div>
              <div class="col-md-8 form-group">
                  <button type="submit" value="submit" class="btn submit_btn">Track Order</button>
              </div>
          </form>
      </div>
  </div>
</section> --}}

@endsection
