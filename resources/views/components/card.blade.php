<div class="card">
    <img src="{{Storage::url($image)}}" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $subtitle }}</p>
    @if
        <a href="{{ $urlCategory }}" class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</a>
    
    @endif

    <span class="text-muted small fst-italic">Tempo di lettura {{$readDuration}} min</span>

    @if ($tags)
    <p class="small text-muted my-0">
        @foreach ($tags as $tag)
            #{{ $tag->name }}
        @endforeach
     </p>
     @endif

    </div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        Redatto il {{ $data }} da {{ $user }}
        <a href="{{ $url }}" class="btn btn-info text-white">Leggi</a>
    </div>
</div>
