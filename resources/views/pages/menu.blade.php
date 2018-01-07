<nav class="navbar navbar-expand-lg navbar-dark bg-info text-white navbar-fixed" id="menu">

  <a class="navbar-brand" href="#">MVM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarNavDropdown">

    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mural</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Skills</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>

{{-- 
      <li class="nav-item dropdown text-right">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{ Auth::user()->name }} 
       </a>

       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">Perfil</a>
        <a class="dropdown-item" href="#">Sair</a>

      </div>
    </li> --}}

    

  </ul>

</div>

<ul class="navbar-nav">


  <li class="nav-item dropdown text-right">

   @if (Route::has('login'))
   <div class="top-right links">
    @auth

    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      {{ Auth::user()->name }} 
    </a>

    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="#">Perfil</a>

      
      <a href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" class="dropdown-item">
      Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
    </form>
    

  </div> 
  @else
  <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
  <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>


  @endauth
</div>
@endif



</li>



</ul>
</nav>
<br>