<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
            <div class="row justify-content-center">
                <h1 class="display-1">Bentornato , Revisore</h1>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success text-center">
                {{session('message')}}
            </div>
          
        @endif

        @if (session('alert'))
      <div class="alert alert-danger text-center">
         {{session('alert')}}
         </div>
          
      @endif

      @if (session('blurt'))
      <div class="alert alert-warning text-center">
         {{session('blurt')}}
         </div>
          
      @endif

        <div class="container my-5">
            <div class="row justify content-center">
                <div class="col-12">
                    <h2>Articolo da revisionare</h2>
                    <x-article-table :article="$unrevisionedArticles"/>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify content-center">
                <div class="col-12">
                    <h2>Articoli Pubblicati</h2>
                    <x-article-table :article="$acceptedArticles"/>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify content-center">
                <div class="col-12">
                    <h2>Articoli Respinti</h2>
                    <x-article-table :article="$rejectedArticles"/>
                </div>
            </div>
        </div>

</x-layout>