<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        View Posts
    </h2>
</x-slot>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3" href="{{ url('post') }}"> Back</a>
    <div class="px-6 py-4">
            <strong>Name:</strong>
            {{ $posts->title }}
    </div>
    <div class="px-6 py-4">
            <strong>Body:</strong>
            {{ $posts->body }}   
               </div>
               <div class="px-6 py-4">
               <strong>Seo keyword:</strong>
               {{ $posts->meta_keyword }}</div>
               <div class="px-6 py-4">
               <strong>Seo description:</strong>
               {{ $posts->meta_description }}</div>

</div>
</div>






