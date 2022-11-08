<div class="d-flex justify-content-between">
    <div id="left">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas">
            Menu
        </button>
    </div>
    <div id="center">
        <h1>Gestor de tareas Kanban</h1>
    </div>
    <div id="right">
        <button class="btn btn-outline-danger">
            sign in
        </button>
        <button class="btn btn-outline-primary">
            Log in
        </button>
    </div>
</div>

<!--Rest of menu-->

<div class="offcanvas offcanvas-start navbarColumn" tabindex="-1" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="navbarOffcanvasLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white" id="nav">
            <!--
                Unorder list: Menu
                Format: Navbar
                Position: Left-Side
                To Update: Format = Offcanvas
            -->
            <ul class="nav flex-column mb-sm-auto mb-0" id="menu">

                <li>
                    <a href="#" class="nav-link px-0 align-middle" style="color: white !important;" data-bs-dismiss="offcanvas">
                        <img src="assets/img/icons/users-solid.svg" style="width:25px; height: 25px; color:white !important;">
                        <span class="ms-1 d-none d-sm-inline" onclick="getVistaFiltros('Beneficiaries', 'getVistaFiltros');">Option 1</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link px-0 align-middle" style="color: white !important;" data-bs-dismiss="offcanvas">
                        <img src="assets/img/icons/users-solid.svg" style="width:25px; height: 25px; color:white !important;">
                        <span class="ms-1 d-none d-sm-inline" onclick="getVistaFiltros('Beneficiaries', 'getVistaFiltros');">Option 2</span>
                    </a>
                </li>


                <li>
                    <a href="#" class="nav-link px-0 align-middle" style="color: white !important;" data-bs-dismiss="offcanvas">
                        <img src="assets/img/icons/basket3.svg" style="width:25px; height: 25px; color:white !important;">
                        <span class="ms-1 d-none d-sm-inline" onclick="getVistaFiltros('Kitchen', 'getFilteringView');">Option 3</span></a>
                </li>

                <li>
                    <a href="#" class="nav-link px-0 align-middle" style="color: white !important;" data-bs-dismiss="offcanvas" onclick="getVistaFiltros('Volunteers', 'getVistaFiltros');">
                        <img src="assets/img/icons/handshake-angle-solid.svg" style="width:25px; height: 25px; color:white !important;">
                        <span class="ms-1 d-none d-sm-inline">Option 4</span>
                    </a>
                </li>

            </ul>

            <!-- zona de usuario donde le pasaremos su foto y nombre.  https://github.com/mdo.png-->
            <div class="dropdown pb-4" id="profile">
                <a href="#" style="color: white !important;" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                    <span class="d-none d-sm-inline mx-1">NombreApellido</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" id="dropDrownNav">
                    <li class="profileDropdown"><a style="color: white !important;" class="dropdown-item" onclick="getVistaPerfil('Beneficiaries', 'getVistaPerfil');" data-bs-dismiss="offcanvas">Perfil</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="profileDropdown"><a style="color: white !important;" class="dropdown-item" href="logout.php">Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>