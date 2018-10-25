<div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom"
                      action="http://webapplayers.com/inspinia_admin-v2.3/search_results.html">

                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Hakim Alokozay Dental Clinic.</span>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-calendar text-navy">&nbsp;</i><strong>Today : {{ Carbon\Carbon::now()->format('l d F Y') }}
                            &nbsp;&nbsp;|</strong>
                    </a>
                </li>

                <li class="dropdown">
                    <form action="/language" method="post">
                    <select name="locale" id="selectLanguage">
                        <option value="en">English</option>
                        <option value="fr">دری</option>
                    </select>
                            {{--{{csrf_field()}}--}}
                        <button type="submit" class="btn btn-primary btn-xs">change</button>
                    </form>

                </li>

                {{-- current exchange --}}

                <li>
                    <a href="/logout">
                        <i class="fa fa-sign-out text-warning"></i>Log out
                    </a>
                </li>
                {{-- current exchange --}}
            </ul>
        </nav>

    </div>
