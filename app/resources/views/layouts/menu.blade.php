<li class="nav-item">
    <a href="{{ route('stagiaire.index') }}" class="nav-link {{ Request::is('stagiaire.index') ? 'active' : '' }}">
      <i class="nav-icon fas fa-users"></i>
      <p>Stagiaire</p>
    </a>
</li>

<li class="nav-item">
  <a href="{{ route('formateur.index') }}" class="nav-link {{ Request::is('formateur.index') ? 'active' : '' }}">
    <i class="nav-icon fas fa-users"></i>
    <p>Formateur</p>
  </a>
</li>

