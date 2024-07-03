<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
           <h1 class="display-1">
               Lavora con noi
           </h1>
        </div>
     </div>
     <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shawod">
            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p>Scegliendo di lavorare come amministratore, ti occuperai di gestire le richieste di lavoro e di aggiungere e modificare le categorie.</p>
                <h2>Lavora come revisore</h2>
                <p>Scegliendo di lavorare come revisore, deciderai se un articolo può essere pubblicato o meno in piattaforma.</p>
                <h2>Lavora come redattore</h2>
                <p>Scegliendo di lavorare come redattore, potrai scrivere gli articoli che saranno pubblicati.</p>
            </div>
            <div class="col-12 col-md-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                            
                        @endforeach
                    </ul>
                </div>
                    
                @endif
                <form action="{{ route('careers.submit')}}" method="POST" class="card p-5 shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-lable">Per quale ruolo ti stai candidando?</label>
                        <select name="role" id="role" class="form-control">
                            <option value=""selected disabled>Seleziona il ruolo</option>
                            @if (!Auth::user()->is_admin)
                            <option value="admin">Amministratore</option>
                            @endif 
                            @if (!Auth::user()->is_revisor)
                            <option value="revisor">Revisore</option>
                            @endif 
                            @if (!Auth::user()->is_writer)
                            <option value="writer">Redattore</option>
                            @endif
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-lable">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') ?? Auth::user()->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-lable">Parlaci di te</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{ old('message') }}</textarea>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-info text-white">Invia la tua candidatura</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
</x-layout>