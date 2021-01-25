@extends('layouts.web')
@section('content')   

    <div class="relative bg-white overflow-hidden">
  <div class="max-w-full mx-auto">
    <div class="h-auto absolute lg:absolute  bottom-0 lg:right-0 lg:w-full">
      <img class="h-72 w-full object-cover bg-left sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('/public/img/section2.png') }}" alt="">
    </div>
    <div class="relative z-10 sm:pb-2 lg:max-w-screen lg:w-full  xl:pb-32" style="background-color: #ffffffbf">
     
    

      @include('components.header')

      <main class="mx-auto max-w-7xl px-4 py-4 sm:mt-7 sm:px-6 sm:mb-5 lg:mb-5 md:mb-5 md:mt-16 lg:mt-10 lg:px-8 xl:mt-10">
        <div class="sm:text-center lg:px-4 lg:py-4 xl:py-5 xl:px-5 lg:text-center rounded-lg" >
          <h1 class="text-4xl tracking-tight w-full font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block xl:inline">Pourquoi choisir</span>
            <span class="block xl:inline" style="color:#25D55F ">twitly?</span>
          </h1>
          <div class="grid gap-2  sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 overflow-hidden  lg:py-20 xl:py-23 -mx-2 sm:-mx-1 md:-mx-1 lg:-mx-2 xl:-mx-2">

            <div class="my-2 px-2 mx-1 align-text-center rounded-md shadow-xl border-t-8 border-b-8 border-green-500  bg-white overflow-hidden sm:my-1 sm:px-1 md:my-1 md:px-1 lg:my-2 lg:px-2 xl:my-2 xl:px-2">
              <h1 class="xl:text-3xl sm:text-2xl  xl:h-20 sm:h-15 py-2 px-2 font-bold uppercase">Zone de couverture    </h1>
              <p class="leading-relaxed xl:text-base lg:text-base md:text-sm sm:text-sm text-black py-3"> Nous sommes présents dans toutes les régions du Maroc avec plus de 100 destinations    </p>
            </div>
          
            <div class="my-2 px-2 mx-1 align-text-center rounded-md shadow-xl border-t-8 border-b-8 border-green-500  bg-white overflow-hidden sm:my-1 sm:px-1 md:my-1 md:px-1 lg:my-2 lg:px-2 xl:my-2 xl:px-2">
              <h1 class="xl:text-3xl sm:text-2xl xl:h-20 sm:h-15 py-2 px-2 font-bold uppercase">Délai de livraison    </h1>
              <p class="leading-relaxed xl:text-base lg:text-base md:text-sm sm:text-sm text-black py-3"> Nos délais de livraisons sont les plus compétitifs (J, J+1 et J+2)  </p>
          
            </div>
          
            <div class="my-2 px-2 mx-1 align-text-center rounded-md shadow-xl border-t-8 border-b-8 border-green-500  bg-white overflow-hidden sm:my-1 sm:px-1 md:my-1 md:px-1 lg:my-2 lg:px-2 xl:my-2 xl:px-2">
              <h1 class="xl:text-3xl sm:text-2xl xl:h-20 sm:h-15 py-2 px-2 font-bold uppercase">Paiement    </h1>
              <p class="leading-relaxed xl:text-base lg:text-base md:text-sm sm:text-sm text-black py-3">       Nous nous engageons dans un délai de 48h pour le retour de vos fonds      </p>
          
            </div>
          
            <div class="my-2 px-2 mx-1 align-text-center rounded-md shadow-xl border-t-8 border-b-8 border-green-500  bg-white overflow-hidden sm:my-1 sm:px-1 md:my-1 md:px-1 lg:my-2 lg:px-2 xl:my-2 xl:px-2">
              <h1 class="xl:text-3xl sm:text-2xl xl:h-20 sm:h-15 py-2 px-2 font-bold uppercase">Suivi</h1>
              <p class="leading-relaxed xl:text-base lg:text-base md:text-sm sm:text-sm text-black py-3"> Un outil 100% digital pour le suivi de vos colis et vos paiements    </p>
            </div>
          
          </div></div> 
         
        </div>
      </main>
    </div>
  </div>
</div>
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


@include('components.our-services')

@include('components.pricing')

@include('components.about-us')
 
@include('components.contact-us')

@include('components.footer')

@endsection