<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <a href="{{ route('home') }}"><p class="navbar-text"><i class="fa fa-dashboard"></i> Dashboard</p></a>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('category.index')}}">Categorias</a></li>
        <li><a href="{{ route('product.index')}}">Productos</a></li>
        <li><a href="{{ route('order.index')}}">Pedidos</a></li>
        <li><a href="{{ route('user.index')}}">Usuarios</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('logout') }}">Finalizar sesión</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>