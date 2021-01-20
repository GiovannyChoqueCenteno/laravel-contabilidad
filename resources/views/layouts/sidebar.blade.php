
<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="sidebar-toggle text-light mr-3"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand" href="#"><i class="fa fa-code-branch"></i> Contanube</a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                    <i class="fa fa-user"></i> Username
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="d-flex">
    <nav class="sidebar bg-dark">
        <ul class="list-unstyled">
        <li>
                <a href="#submenu1" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i>Modulo  Empresa</a>
                <ul id="submenu1" class="list-unstyled collapse">
        <!-- Proveedores-->
                    <li>
                        <a href="#submenu11" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i>Proveedores</a>
                        <ul id="submenu11" class="list-unstyled collapse">
                            <li><a href={{url('proveedorcrear')}}>Registrar Proveedor</a></li>
                            <li><a href="{{url('proveedor')}}">Lista de Proveedores</a></li>
                        </ul>
                    </li>


                    <li>
                <a href="#submenu12" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i>Usuarios</a>
                <ul id="submenu12" class="list-unstyled collapse">
                    <li><a href="#">Registrar Usuario</a></li>
                    <li><a href="#">Lista de Usuarios</a></li>
                </ul>
                    </li>

                    <li>
                <a href="#submenu13" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i>Empresa</a>
                <ul id="submenu13" class="list-unstyled collapse">
                    <li><a href="#">Editar Empresa</a></li>
                    <li><a href="#">Lista de Usuarios</a></li>
                </ul>
                    </li>



                    <li><a href="#">Submenu Item</a></li>
                </ul>
            </li>
            <li>
                <a href="#submenu2" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i> Modulo Ventas</a>
                <ul id="submenu2" class="list-unstyled collapse">
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                </ul>
            </li>
            <li>
                <a href="#submenu2" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i> Modulo Compras</a>
                <ul id="submenu2" class="list-unstyled collapse">
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                </ul>
            </li>
            <li>
                <a href="#submenu3" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i> Modulo Informe</a>
                <ul id="submenu3" class="list-unstyled collapse">
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                </ul>
            </li>

        </ul>
    </nav>
