@if(!empty(session()->has('results')))
    <div class="md:flex md:justify-center mb-1 mt-5" id="results">
        <h3 class="text-white">Exchange: {{ session()->get('results')[0] }} {{ number_format(session()->get('results')[1] / 100000, 2)}}</h3>
    </div>
@endif
