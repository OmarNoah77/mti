<?php $r = \Route::current()->getAction() ?>
<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

<ul class="sidebar-menu">
    <li class="header">MENU</li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.dash') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.dash') }}">
            <i class="fa fa-home"></i>
            <span>Inicio</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <i class="fa fa-list"></i>
            <span>Categorias</span>
        </a>
    </li> 

      <li class="<?php echo ( starts_with($route, ADMIN.'.indisponibilidadRoute') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.indisponibilidadRoute.index') }}">
            <i class="fa fa-heartbeat"></i>
            <span>Indisponibilidad</span>
        </a>
    </li>
   


    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.users') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.users.index') }}">
            <i class="fa fa-users"></i>
            <span>Usuarios</span>
        </a>
    </li>
    @endif

    <li class="<?php echo ( starts_with($route, ADMIN.'.rolesRoute') ) ? "active" : '' ?>">
    <a href="{{ route(ADMIN.'.rolesRoute.index') }}">
       <i class="fa fa-tint"></i> 
       <span>Roles</span>
    </a>
    </li>
@if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="treeview">
        <a href="#"><i class='fa fa-rocket'></i> <span>Sistema Operativo</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
             
  
          <li class="<?php echo ( starts_with($route, ADMIN.'.sisopRoute') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.sisopRoute.index') }}">
                    <i class="fa fa-laptop"></i>
                    <span>S.O</span>
                </a>
            </li>
          
          <li class="<?php echo ( starts_with($route, ADMIN.'.soversionesRoute') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.soversionesRoute.index') }}">
                    <i class="fa fa-laptop"></i>
                    <span>Version</span>
                </a>
            </li>
    
        </ul>
    </li>
 @endif

@if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="treeview">
        <a href="#"><i class='fa fa-rocket'></i> <span>Marca - Modelo</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
             
  
          <li class="<?php echo ( starts_with($route, ADMIN.'.marcasRoute') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.marcasRoute.index') }}">
                    <i class="fa fa-laptop"></i>
                    <span>Marca</span>
                </a>
            </li>
          
          <li class="<?php echo ( starts_with($route, ADMIN.'.modelosRoute') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.modelosRoute.index') }}">
                    <i class="fa fa-laptop"></i>
                    <span>Modelo</span>
                </a>
            </li>
    
        </ul>
    </li>
 @endif

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.tipoRoute') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.tipoRoute.index') }}">
            <i class="fa fa-ship"></i>
            <span>Tipos</span>
        </a>
    </li>
    @endif

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.estadosRoute') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.estadosRoute.index') }}">
            <i class="fa fa-hourglass-half"></i>
            <span>Estados</span>
        </a>
    </li>
    @endif

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.usosRoute') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.usosRoute.index') }}">
            <i class="fa fa-exchange"></i>
            <span>Usos</span>
        </a>
    </li>
    @endif

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.serviciosRoute') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.serviciosRoute.index') }}">
            <i class="fa fa-dashboard"></i>
            <span>Servicios</span>
        </a>
    </li>
    @endif

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.servidoresRoute') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.servidoresRoute.index') }}">
            <i class="fa fa-server"></i>
            <span>Servidores</span>
        </a>
    </li>
    @endif

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.instanciasRoute') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.instanciasRoute.index') }}">
            <i class="fa fa-tablet"></i>
            <span>Instancias</span>
        </a>
    </li>
    @endif

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.clientesRoute') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.clientesRoute.index') }}">
            <i class="fa fa-heartbeat"></i>
            <span>Clientes</span>
        </a>
    </li>
    @endif

    

    

  
        

        <!-- @if (auth()->user()->hasRole('Superadmin'))
    <li class="treeview">
        <a href="#"><i class='fa fa-link'></i> <span>Tools</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Settings</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Backups</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Logs</a></li>
        </ul>
    </li>
    @endif -->

    @if (auth()->user()->hasRole('Superadmin'))
    <li class="treeview">
        <a href="#"><i class='fa fa-rocket'></i> <span>Relaciones</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
             
  
          <li class="<?php echo ( starts_with($route, ADMIN.'.ixsRoute') ) ? "active" : '' ?>">
              <a href="{{ route(ADMIN.'.ixsRoute.index') }}">
                  <i class="fa fa-dashboard"></i>
                  <span>Instancias por Servidor</span>
              </a>
          </li>
          
          <li class="<?php echo ( starts_with($route, ADMIN.'.ixclientesRoute') ) ? "active" : '' ?>">
              <a href="{{ route(ADMIN.'.ixclientesRoute.index') }}">
                  <i class="fa fa-spinner"></i>
                  <span>Instancia x Cliente</span>
              </a>
          </li>
    
        </ul>
    </li>
    @endif
</ul>
