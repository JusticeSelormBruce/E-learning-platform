<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76"
          href="{{asset('images/logo-round.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/logo-round.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Admin - Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"
          rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
          rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link href="{{asset('paper-dashboard/css/paper-dashboard.min.css')}}"
          rel="stylesheet"/>
    <link href="{{ asset('boostrap/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    @yield('title', 'Admin Dashboard')
    <style>
        img {
            width: 30px;
            height: 30px;
        }

        body {
            font-family: -apple-system;
        }
    </style>
</head>
<body>
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">

        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="/uploads/avatars/{{Auth::user()->avatar}}" alt="avatar" class=" img mr-2 float-left">
                </div>
            </a>
            <a href="#" class="simple-text logo-normal">

                <small>{{Auth::user()->name}}</small>

            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="/super-admin/dashboard">
                        <img src="{{asset('icons/dashboard.jpg')}}" alt="">
                        <br>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/about-me">
                        <img src="{{asset('icons/about.png')}}" alt="">
                        <br>
                        <p>About Me</p>
                    </a>
                </li>
                <li>
                    <a href="/register-user">
                        <img src="{{asset('icons/users.png')}}" alt="">
                        <br>
                        <p>User Account</p>
                    </a>
                </li>
                <li>
                    <a href="/super-admin/my-notes/index">
                        <img src="{{asset('icons/note.jpg')}}" alt="">
                        <br>
                        <p>My Notes</p>
                    </a>
                </li>
                <li>
                    <a href="/super-admin/tutorials/E-books-index">
                        <img src="{{asset('icons/book.png')}}" alt="">
                        <br>
                        <p>Upload Ebook</p>
                    </a>
                </li>
                <li>
                    <a href="/super-admin/tutorials/index">
                        <img src="{{asset('icons/video.png')}}" alt="">
                        <br>
                        <p>Upload Videos</p>
                    </a>
                </li>
                <li>
                    <a href="/reset-account">
                        <img src="{{asset('icons/users.png')}}" alt="">
                        <br>
                        <p>Account Settings</p>
                    </a>
                </li>
                <li>
                    <a href="/super-admin/settings">
                        <img src="{{asset('icons/settings.jpg')}}" alt="">
                        <br>
                        <p>Settings</p>
                    </a>
                </li>

                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>

                </div>


            </div>
        </nav>
        <main class=" pt-2 mt-5">
            @yield('render')
        </main>
    </div>
</div>


<script src="{{asset('paper-dashboard/js/jquery.min.js')}}"></script>
<script src="{{asset('paper-dashboard/js/popper.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('boostrap/js/bootstrap.js')}}"></script>
<script src="{{asset('boostrap/js/jquery.js')}}"></script>
<script src="{{asset('paper-dashboard/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('paper-dashboard/js/chartjs.min.js')}}"></script>
<script src="{{asset('paper-dashboard/js/bootstrap-notify.js')}}"></script>
<script src="{{asset('paper-dashboard/js/paper-dashboard.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });
</script>
<script>
    $(document).ready(function () {
        $('#table_id1').DataTable();
    });
</script>
<script>
    $(document).ready(function () {
        $('#table_id11').DataTable();
    });
</script>
</body>
</html>
