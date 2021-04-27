@extends('layouts.app')

@section('content')

    <div id="cover">

        <div class="md:flex md:justify-center mb-1 mt-5">
            <img src="images/logo-converter.png">
        </div>
        <div class="md:flex md:justify-center mb-6 mt-1">
            <form class="w-full max-w-md" method="POST" action="{{route('calculate')}}">
                @csrf
                <div class="w-full flex items-center border-b border-teal-500 py-2">
                    <select name="symbol"
                            class=" bg-transparent border-none w-4/12 text-gray-400 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                    >
                        @foreach ($currencies as $currency)
                            <option
                                value="{{$currency->symbol}}">{{$currency->symbol}}</option>
                        @endforeach
                    </select>
                    <input
                        class=" bg-transparent border-none w-full text-gray-400 mr-5 py-1 px-2 leading-tight focus:outline-none"
                        type="number" name="amount" placeholder="Enter amount 	&euro;" aria-label="Full name">
                    <button
                        class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white  rounded"
                        type="submit">
                        Convert
                    </button>
                </div>
            </form>
        </div>
        @include('errors.currencyInput')
        @include('includes.changeResults')
        <div class="md:flex md:justify-center mb-1 mt-5">
            <h3 class="text-gray-200">Data collected from <a href="https://www.bank.lv/">Latvijas banka</a>. <i>* Actual rates refreshes on every request</i></h3>
        </div>
        @include('includes.currencyList')
    </div>

@endsection
