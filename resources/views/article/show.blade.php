<x-layout>
      <div class="container-fluid p-5 bg-info text-center text-white">
         <div class="row justify-content-center">
            <h1 class="display-1">
                Titolo : {{ $article->title }}
            </h1>
         </div>
      </div>
      <div class="container my-5">
         <div class="row justify-content-center">
               <div class="col-12 col-md-8">
                   <img src="{{Storage::url($article->image)}}" alt="" class="img-fluid my-3">
                   <div class="text-center">
                    <h2>{{$article->subtitle}}</h2>
                    @if ($article->category)
                       <p class="small text-muted">Categoria:
                          <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize text-muted">{{ $article->category->name }}</a>
                       </p>

                       @else

                       <p class="small text-muted">Nessuna categoria</p>

                       @endif

                       <p class="small text-muted my-0">
                        @foreach ($article->tags as $tag)
                            #{{ $tag->name }}
                        @endforeach
                        </p>
                        
                    <div class="my-3 text-muted fst-italic">
                        <p>Redatto da {{$article->user->name}} il {{ $article-> created_at->format('d/m/Y')}}</p>
                    </div>
                   </div>
                   <hr>
                   <p>{{ $article->body}}</p>

                     @if (Auth::user() && Auth::user()->is_revisor)
                        <div class="container my-5">
                           <div class="row">
                              <div class="col-12 d-flex justify-content-evenly">
                                 <form action="{{route('revisor.acceptArticle', $article)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Accetta articolo</button>
                                 </form>
                                 <form action="{{route('revisor.rejectArticle', $article)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Rifiuta articolo</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        
                     @endif
                     
                   <div class="text-center">
                    <a href="{{route('article.index')}}" class="btn btn-info text-white my-5">Torna indietro</a>
                   </div>
                   <p class="fs-5">Categoria:
                  <a href="{{route('article.byCategory' , $article->category)}}" class="text-capitalize fw-bold text-muted">{{$article->category->name}}</a>>
               </p>
               </div>
         </div>
      </div>

</x-layout>