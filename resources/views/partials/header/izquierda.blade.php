<div class="navbar-header">
    <button type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#navbar"
            aria-expanded="false"
            aria-controls="navbar">

        <span class="sr-only">Toggle Navigation</span>
    </button>

        <a href="/" class="navbar-brand">Catalogos</a>


</div>{{-- navbar-header--}}
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    @if (Auth::check())
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="/catalogos" class="dropdown-toggle fa fa-btn" data-toggle="dropdown">
                    Catalogos <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/catalogos"> ABM </a></li>
                </ul>
            </li>
        </ul>
    @endif
