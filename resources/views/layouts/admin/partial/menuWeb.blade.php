 <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('images/logo3.png')}}">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        @include('layouts.admin.partial.menu')

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
