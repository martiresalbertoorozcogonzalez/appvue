@extends('layouts.home.master')



@section('content')

<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-md-5">
        <div>
          <h2>
            TE DAMOS LA BIENVENIDA A LA RED SHARE AQUI PODRAS COMPARTIR TUS EXPERIENCIAS
         </h2>
          
        </div>
      </div>
      <div class="col-md-7">
          <div class="graphic">
              <img src="/img/social3.png" width="500" alt="">
          </div>
      </div>
    </div>
  </div>

 
<div class="container h-100 mt-5">
    <div class="jumbotron row h-100 justify-content-center align-items-center">
        <div class="col-md-7">
          <h1>Comparte tus experiencias con millones de personas</h1>
        </div>
        <div class="col-md-5">  
            <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}">Unete ahora</a>
        </div>   
    </div>
</div>


<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-md-6">
        <div>
            <img src="/img/social4.png" width="400" alt="">
        </div>
    </div>
    <div class="col-md-6">
        <div>
            <img src="/img/social10.png" width="400" alt="">
        </div>
    </div>
  </div>


  <div class="row h-100 justify-content-center align-items-center mt-5">
    <div class="col-md-6">
        <div>
          <h1>Conecta con usuarios y comparte experecias</h1>
          <button type="button" class="btn btn-primary btn-round">Encuentra a personas que conoces</button>
        </div>
    </div>
    <div class="col-md-6">
        <div>
          <h1>Diviertete conociendo gente de todas partes del mundo</h1>
        </div>
    </div>
  </div>

</div>



@endsection