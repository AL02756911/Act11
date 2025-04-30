<nav>
  <ul class="nav-menu">
    <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
      <a href="{{ route('home') }}">Inicio</a>
    </li>
    <li class="{{ request()->routeIs('fotos') ? 'active' : '' }}">
      <a href="{{ route('fotos') }}">Fotos</a>
    </li>
    <li class="{{ request()->routeIs('contacto') ? 'active' : '' }}">
      <a href="{{ route('contacto') }}">Contacto</a>
    </li>
  </ul>
</nav>
