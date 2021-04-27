<div class="flex flex-wrap">
    @foreach ($currencies as $currency)
        <div class="w-1/2 md:w-1/3 xl:w-1/4 p-2">
            <div
                class="bg-gradient-to-b from-gray-300  border-b-4 border-grey-600 rounded-lg shadow-xl ">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="p-2"><img class="h-5 max-w-5 flags"
                                              src="images/flags/{{$currency->symbol}}.svg"></div>
                    </div>
                    <div class="flex-1 text-right md:text-center text-xs">
                        <span class="font-bold uppercase text-purple-900">{{$currency->symbol}}</span>
                        <span class="font-bold ">{{ number_format(($currency->rate) / 100000, 5) }} </span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
