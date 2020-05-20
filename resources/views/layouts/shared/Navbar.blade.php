<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">
        <i class="fa fa-file-excel"></i> Reportes de Nomina
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reporte1') }}"> <i class="fa fa-money-bill-alt"></i> Reporte de Nomina <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reporte2') }}">
                    <i class="fa fa-clone"></i> Conceptos Duplicados
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reporte3') }}">
                    <i class="fa fa-birthday-cake"></i> Cumpleaños
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reporte4') }}">
                    <i class="fa fa-calendar-check"></i> Permisos Aprob.
                </a>
            </li>
        </ul>
    </div>
</nav>
