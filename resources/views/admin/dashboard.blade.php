<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
            <div class="row justify-content-center">
                <h1 class="display-1">Bentornato , Amministratore</h1>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success text-center">
                {{session('message')}}
            </div>
          
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container my-5">
            <div class="row justify content-center">
                <div class="col-12">
                    <h2>Richieste per il ruolo di amministratore</h2>
                    <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify content-center">
                <div class="col-12">
                    <h2>Richieste per ruolo revisore</h2>
                    <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify content-center">
                <div class="col-12">
                    <h2>Richieste per ruolo redattore</h2>
                    <x-requests-table :roleRequests="$writerRequests" role="redattore"/>
                </div>
            </div>
        </div>

    <hr>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Tutti i tags</h2>
                    <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Tutte le categorie</h2>
                    <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
                </div>
            </div>
        </div>
            

</x-layout>