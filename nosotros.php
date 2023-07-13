<header class="menu-header">
  <div class="logo">Logo</div>
  <nav class="menu-nav">
    <ul class="menu-contenedor_list">
      <li class="menu_list">
        <a href="#" class="menu_link">Inicio</a>
      </li>
      <li class="menu_list has-submenu">
        <a href="#" class="menu_link">Nosotros</a>
        <ul class="submenu">
          <li class="submenu_list"><a href="#" class="submenu_link">Nuestro Equipo</a></li>
          <li class="submenu_list"><a href="#" class="submenu_link">Misión</a></li>
          <li class="submenu_list"><a href="#" class="submenu_link">Visión</a></li>
        </ul>
      </li>
      <li class="menu_list has-submenu">
        <a href="#" class="menu_link">Servicios</a>
        <ul class="submenu">
          <li class="submenu_list"><a href="#" class="submenu_link">Servicio 1</a></li>
          <li class="submenu_list"><a href="#" class="submenu_link">Servicio 2</a></li>
          <li class="submenu_list"><a href="#" class="submenu_link">Servicio 3</a></li>
        </ul>
      </li>
      <li class="menu_list">
        <a href="#" class="menu_link">Aviso de Privacidad</a>
      </li>
      <li class="menu_list">
        <a href="#" class="menu_link">Contacto</a>
      </li>
    </ul>
  </nav>
</header>

<style>
    
.menu-header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: #333;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
}

.logo {
  font-size: 24px;
}

.menu-nav {
  display: none;
}

.menu-contenedor_list {
  list-style: none;
  margin: 0;
  padding: 0;
}

.menu_list {
  display: inline-block;
  position: relative;
}

.menu_link {
  display: block;
  padding: 10px;
  color: #fff;
  text-decoration: none;
}

.has-submenu .submenu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #333;
  min-width: 200px;
  z-index: 1;
}

.has-submenu:hover .submenu {
  display: block;
}

.submenu_list {
  padding: 10px;
}

.submenu_link {
  color: #fff;
  text-decoration: none;
}

/* Estilos para dispositivos móviles */
@media screen and (max-width: 768px) {
  .menu-nav {
    display: block;
  }

  .menu_list {
    display: block;
    margin-bottom: 10px;
  }

  .submenu_list {
    padding-left: 20px;
  }

  .has-submenu .submenu {
    position: static;
    display: block;
    background-color: initial;
    min-width: initial;
  }
}
</style>