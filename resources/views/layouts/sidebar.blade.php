<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Proyecto trabajo</h3>
            <strong>PRO</strong>
        </div>

        <ul class="list-unstyled components">
            <li>

                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true">

                    <i class="fas fa-home fa-lg" aria-hidden="true"></i>
                    <b>Dashboard</b>
                </a>
            </li>
            <li>

                <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false">

                    <i class="fas fa-user fa-lg" aria-hidden="true"></i>
                    <b>Usuarios</b>
                </a>
                <ul class="collapse list-unstyled" id="userSubmenu">
                    <li><a href="{{ route('users.index') }}">Lista Usuarios</a></li>
                    <li><a href="#">Roles</a></li>
                    <li><a href="#">Permisos</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-industry fa-lg" aria-hidden="true"></i>
                    <b>Generadores</b>
                </a>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-fire fa-lg" aria-hidden="true"></i>
                    <b>Calderas</b>
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="#">Pagina</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-chart-bar fa-lg" aria-hidden="true"></i>
                    <b>Reporte</b>
                </a>
            </li>
            <li>

                <a href="#">
                    <i class="fa fa-book fa-lg" aria-hidden="true"></i>
                    <b>Sección de API´S</b>
                </a>
            </li>

        </ul>

    </nav>


</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
</script>