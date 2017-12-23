<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                    <router-link to="/" tag="li" exact-active-class="is-active"><a>Dashboard</a></router-link>
                    <router-link to="/halaman" tag="li" exact-active-class="is-active"><a>Halaman</a></router-link>
                    <router-link to="/menus" tag="li" exact-active-class="is-active"><a>Menu</a></router-link>
                    <router-link to="/submenu" tag="li" exact-active-class="is-active"><a>Submenu</a></router-link>
                    <router-link to="/work" tag="li" exact-active-class="is-active"><a>Work</a></router-link>
                    <router-link to="/portfolio" tag="li" exact-active-class="is-active"><a>Portfolio</a></router-link>
            </ul>
        </div>
    </div>
</nav>
