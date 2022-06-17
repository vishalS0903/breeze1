
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>

            </div>


        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2>Press on any button to perform action:</h2><br>
                <a href="{{('form')}}">
                    <center>  <x-button class="ml-3" type="submit">
                    add data
                    </x-button > </a>

                    <a href="{{('table')}}">
                        <x-button class="ml-3" type="submit">
                        show table data
                        </x-button > </a>  </center>
                    </div>
                </div>
            </div>
        </center>



    </div>

</x-app-layout>
