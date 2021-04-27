@if($errors->any())
    <div class="md:flex md:justify-center mb-6 mt-1">
        <div class="bg-gradient-to-b from-red-200 border border-red-400 text-red-700 px-4 py-3 rounded relative"
             role="alert">
            @foreach ($errors->all() as $error)
                <strong class="font-bold">{{ $error }}</strong>
            @endforeach
        </div>
    </div>
@endif
