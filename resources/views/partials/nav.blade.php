<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark h-20" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/">R&AGR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{setActive('home')}}" >
            <a class="nav-link js-scroll-trigger" href="{{route('home')}}">Inicio</a>
          </li>
          <li class="nav-item {{setActive('mision')}}" >
            <a class="nav-link js-scroll-trigger" href="{{route('mision')}}">Misi&oacute;n</a>
          </li>
          <li class="nav-item {{setActive('vision')}}" >
            <a class="nav-link js-scroll-trigger" href="{{route('vision')}}">Visi&oacute;n</a>
          </li> 
          <li class="nav-item {{setActive('demo')}}" >
            <a class="nav-link js-scroll-trigger" href="{{route('demo')}}">Demo</a>
          </li>
          <li class="nav-item {{setActive('comprar')}}" >
            <a class="nav-link js-scroll-trigger" href="{{route('comprar')}}">Comprar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>