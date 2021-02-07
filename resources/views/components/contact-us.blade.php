<section class="text-gray-600 body-font relative" id="contact">
  <div class="px-4 py-4 mx-auto bg-white" >
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contactez Nous</h1>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success">
    {{ Session::get('success') }}
     </div>
 @endif
  <form method="post"  action="{{ route('contact-us') }}">
      {{csrf_field()}}
    <div class="w-4/5  mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <input type="text" id="name" name="name" placeholder="Nom" value="{{ old('name') }}" class="@error('name') is-invalid @enderror w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <input type="text" id="phone_number" name="phone_number" placeholder="Telephone" value="{{ old('phone_number') }}" class="@error('phone_number') is-invalid @enderror w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @error('phone_number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
          <select id="subject" name="subject" class="@error('subject') is-invalid @enderror w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          <option value="inscription" >Inscription</option>
          <option value="inscription">Problem</option>
          <option value="inscription">Info</option>
        </select>
            @error('subject')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <textarea id="message" name="message" placeholder="Message" value="{{ old('message') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button type="submit" class="flex mx-auto text-white bg-green-550 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Envoyer</button>
        </div>
      </div>
    </div>
  </form>
  </div>
</section>