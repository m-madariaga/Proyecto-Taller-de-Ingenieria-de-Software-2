<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Proyecto trabajo</h3>
            <strong>PRO</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">

                <a href="{{ route('register') }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    Usuario
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="{{ route('register') }}">Ingreso datos Usuarios</a>
                    </li>
                    <li>
                        <a href="#">Modificación datos Usuarios</a>
                    </li>
                    <li>
                        <a href="#">Eliminar datos Usuario</a>
                    </li>
                    <li>
                        <a href="#vaparalist_user">Listar Usuarios</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#generatorSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                   Generador
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Ingreso datos Generador</a>
                    </li>
                    <li>
                        <a href="#">Modificación datos Generador</a>
                    </li>
                    <li>
                        <a href="#">Eliminar datos Generador</a>
                    </li>
                    <li>
                        <a href="#">Listar Generadores</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#calderaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                   Caldera
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Ingreso datos Caldera</a>
                    </li>
                    <li>
                        <a href="#">Modificación datos Caldera</a>
                    </li>
                    <li>
                        <a href="#">Eliminar datos Caldera</a>
                    </li>
                    <li>
                        <a href="#">Listar Calderas</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#actionSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                   
                    Acciones
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Acción 1</a>
                    </li>
                    <li>
                        <a href="#">Acción 2</a>
                    </li>
                    <li>
                        <a href="#">Acción 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    Consumo
                </a>
            </li>
        
            
        </ul>


    </nav>


</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
