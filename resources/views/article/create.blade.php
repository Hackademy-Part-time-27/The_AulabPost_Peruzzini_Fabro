<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white ">
        <div class="row justify-content-center">
         <h1 class="display-1">
             Pubblica un articolo
         </h1>
        </div>
     </div>

     <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                    <div class="alert danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                               <li>{{$error}}</li>
                            @endforeach

                        </ul>
                    </div>
                @endif
                <form action="{{route('article.store')}}" method="POST" class="card p-5 shadow" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-lable">Title:</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                    </div>

                    
                    <div class="mb-3">
                        <label for="subtitle" class="form-lable">Subtitle:</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{old('subtitle')}}">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-lable">Image:</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-lable">Category:</label>
                        <select name="category" id="category" class="for-control text-capitalize">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" name="tags" class="form-control" id="tags" value="{{old('tags')}}">
                        <span class="small text-muted fst-italic">Dividi ogni tag con una virgola</span>
                        @error('tags')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-lable">Body</label>
                        <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{old('body')}}</textarea>
                    </div>
                    <div class="mt-2 d-flex justify-content-center">
                        <button class="btn-info-text-white">Pubblica un articolo</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
</x-layout>