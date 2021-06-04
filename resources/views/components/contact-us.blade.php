<section class="text-gray-600 body-font relative px-4 py-10 mx-auto bg-white" id="contact">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="text-3xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-5xl tracking-tighter font-extrabold text-center text-gray-700 "  style="color: #131DAA">Contactez nous</h1>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success">
    {{ Session::get('success') }}
     </div>
 @endif
  <form method="post"  action="{{ route('contact-us') }}">
      {{csrf_field()}}
    <div class="w-4/5  mx-auto">
      <div class="flex flex-col sm:flex-col md:flex-row lg:flex-row xl:flex-row flex-wrap -m-2  items-center">
        <div class="w-full sm:w-full md:w-1/2 ">
        <div class="p-2 w-full">
          <div class="relative">
            <input type="text" id="name" name="name" placeholder="Nom et Prenom" value="{{ old('name') }}" class="@error('name') is-invalid @enderror w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <input type="text" id="phone_number" name="phone_number" placeholder="Telephone" value="{{ old('phone_number') }}" class="@error('phone_number') is-invalid @enderror w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @error('phone_number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
          <select id="subject" name="subject" class="@error('subject') is-invalid @enderror w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            <option>Moyenne des commandes/jrs</option>
            <option value="entre 10 et 100 commandes" >10-50</option>
          <option value="entre 50 et 100 commandes">50-100</option>
          <option value="plus 100 commandes">+100</option>
        </select>
            @error('subject')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>
      </div>
        <div class="w-full sm:w-full md:w-1/2 ">
        <div class="p-2 w-full">
          <div class="relative">
            <textarea id="message" name="message" placeholder="Message" value="{{ old('message') }}" class="w-full h-56 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
      </div>
        <div class="p-2 w-full">
          <button type="submit" 
          class="flex mx-auto text-white bg-blue-550 py-2 px-8 hover:bg-blue-800 
          rounded-md font-bold uppercase">Envoyer</button>
        </div>
      </div>
    </div>
  </form>
</section>