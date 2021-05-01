<div class="flex h-screen bg-gray-100 justify-center items-center" x-data="{ toggle: '0' }">
    <div class="relative rounded-full w-12 h-6 transition duration-200 ease-linear"
         :class="[toggle === '1' ? 'bg-green-400' : 'bg-gray-400']">
      <label for="toggle" 
             class="absolute left-0 bg-white border-2 mb-2 w-6 h-6 rounded-full transition transform duration-100 ease-linear cursor-pointer"
             :class="[toggle === '1' ? 'translate-x-full border-green-400' : 'translate-x-0 border-gray-400']"></label>
      <input type="checkbox" id="toggle" name="toggle" 
             class="appearance-none w-full h-full active:outline-none focus:outline-none"
             @click="toggle === '0' ? toggle = '1' : toggle = '0'">
    </div>
  </div>