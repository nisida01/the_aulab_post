<x-layout>
<div class="container-fluid-p-5 bg-info text-center text-white">
        <div class="row justify-content-center"></div>
            <h1 class="display-1">
                Accedi
            </h1>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
               @if ($error->any())
               <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
               </div>
               @endif

<form class="card p-5 shadow" action="{{ route ('login')}}" mothod="POST">
                @csrf
  

  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email" name="email" class="form-control" id="email" value="{{old( 'email' )}}">
    
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">password</label>
    <input type="password" name="password" class="form-control" id="password" value="{{old( 'password' )}}">
    
  </div>

  <div class="mb-3">
   <button class="btn bg-info text-white">accedi</button>
   <p class="small mt-2">Non sei registrato? <a href="{{ route('register') }}">Clicca qui </a></p>
  </div>


<form>  
            </div>
        </div>
    </div>

</x-layout>
