<x-layout>
  <div class="container-fluid p-5 bg-info text-center text-white">
      <div class="row justify-content-center">
       <h1 class="display-1">
           Login
       </h1>
      </div>
   </div>
   <div class="container my-5">
      <div class="row justify-content-center">
          <div class="col-12 col-md-8">
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif

              <form class="card p-5 shadow" action="{{ route('login')}}" method="POST">
                  @csrf

                  <div class="mb-3">
                      <label for="email" class="form-label">Email:</label>
                      <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password:</label>
                      <input type="password" name="password" class="form-control" id="password" value="{{ old('password') }}">
                    </div>

                    <div class="mb-3">
                      <button class="btn bg-info text-white">Login</button>
                      <p class="small mt-2">Not registred?<a href="{{ route('register')}}">Click Here</a></p>
                    </div>
                    
                </form>
          </div>
      </div>
   </div>
</x-layout>