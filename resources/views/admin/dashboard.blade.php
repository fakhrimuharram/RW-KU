<!doctype html>
<html lang="en">
  <head>
  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.js"></script>
<link href="css/dashboard.css" rel="stylesheet" >


<!------ Include the above in your HEAD tag ---------->

</head>

<body>


<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Admin Rw-Ku</h3>
                </div>

                <ul class="list-unstyled components">
                <li><a href="#" class="download">Selamat datang, {{ Auth::user()->name }}</a></li>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Pemilih</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Input Pemilih</a></li>
                            <li><a href="#">Lihat Data</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Data Calon RW</a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Rekapitulasi</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Info DPT</a></li>
                            <li><a href="#">Log Pemilihan</a></li>
                            <li><a href="#">Hasil Akhir</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Tentang Aplikasi</a>
                    </li>
                    
                </ul>

                <ul class="list-unstyled CTAs">
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <center><button type="submit" class="btn btn-danger btn-lg">LOGOUT</button></center>
                    </form>
                </ul>
            </nav>

        
       
            <!-- Page Content Holder -->
            
        </div>
        <script>
         $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>

<div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                @yield('content')
                </div>
            </div>
            <!-- /.row -->
        </div>


            <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
                <!-- Bootstrap Js CDN -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <!-- jQuery Custom Scroller CDN -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        </body>
        </html>

