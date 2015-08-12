<!-- Header -->
<header class="header header__fixed">
    <div class="header-main">
        <div class="container">

            <!-- Navigation -->
            <nav class="navbar navbar-default fhmm" role="navigation">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Logo -->
                    <div class="logo scroll-local">
                        <a href="#top"><img src="/images/logo.png" alt="ECOBOARD"></a>
                    </div>
                    <!-- Logo / End -->
                </div><!-- end navbar-header -->

                <div id="main-nav" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav scroll-local">
                        <li><a href="#top">Domov</a></li>
                        <li><a href="#section-about">O nás</a></li>
                        <li><a href="#section-offer">Ponuka</a></li>
                        <!-- <li><a href="#section-gallery">Galéria</a></li> -->
                        <li><a href="#section-contacts">Kontakt</a></li>

                        @if(\Illuminate\Support\Facades\Auth::user())
                            <li><a href="{{ url('/admin/logout') }}">Odhlásiť sa</a></li>
                        @endif

                    </ul><!-- end nav navbar-nav -->
                </div><!-- end #main-nav -->

            </nav><!-- end navbar navbar-default fhmm -->
            <!-- Navigation / End -->

        </div>
    </div>

</header>
<!-- Header / End -->