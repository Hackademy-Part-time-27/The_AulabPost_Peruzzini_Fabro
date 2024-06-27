<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
            <div class="row justify-content-center">
                <h1 class="display-1">
                    Bentornato , amministratore
                </h1>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success text-center">
                {{session('message')}}
            </div>
          
        @endif

        <div class="container my-5">
            <div class="row justify content-center">
                <div class="col-12">
                    <h2>Richieste per ruolo amministratori</h2>
                    <x-requests-table></x-requests-table>
                </div>
            </div>
        </div>

</x-layout>