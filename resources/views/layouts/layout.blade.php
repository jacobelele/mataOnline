<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>PUML</title>
    <!-- Bootstrap -->

    <link rel="stylesheet" href="{{URL::asset('asset/vendors/iCheck/skins/flat/green.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/nprogress/nprogress.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/iCheck/skins/flat/green.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/build/css/custom.min.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/select2/dist/css/select2.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/select2/dist/css/select2.min.css')}}">
  </head>
  <style>
    div.scroll{
      overflow:scroll;
      border:1px solid #dfdfdf;
      width: 1100px;
      margin: 0 auto;
    }
  </style>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/home')}}" class="site_title"><span>MATA ONLINE</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <!-- <img src="#" alt="..." class="img-circle profile_img"> -->
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Administrator</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Bidang Kependudukan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/kependudukan')}}">Input Data Berdasarkan Kelompok Umur</a></li>
                      <li><a href="{{url('/kependudukan1')}}">Input Data Berdasarkan Jenis Kelamin</a></li>
                      <li><a href="{{url('/kartu')}}">Index</a></li>

                    </ul>
                  </li>
                   <li><a><i class="fa fa-calendar"></i> Bidang Keluarga Berenca <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/kb')}}">Input Data< Berdasarkan PUS dan Kesertaan Ber-KB/a></li>
                      <li><a href="{{url('/index')}}">Index</a></li>
                    </ul>
                  </li>

                   <li><a><i class="fa fa-clock-o"></i> Bidang Pembangunan Keluarga <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/pembangunan_keluarga')}}">Input Data Berdasarkan Tahapan Keluarga Sejahtera</a></li>
                      <li><a href="{{url('/pembangunan_keluarga1')}}">Input Data Berdasarkan Kesertaan Dalam Poktan</a></li>
                      <li><a href="media_gallery.html">Index</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-envelope"></i> Bidang Catatan Sipil <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/sipil')}}">Input Data Berdasarkan Kepemilikan Akte Kelahiran</a></li>
                      <li><a href="{{url('/sipil1')}}">Input Data Berdasarkan Kepemilikan Kartu Tanda Penduduk</a></li>
                      <li><a href="{{url('/sipil2')}}">Input Data Berdasarkan Kepemilikan Kartu Keluarga dan Akte Kawin</a></li>
                      <li><a href="media_gallery.html">Index</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-gear"></i> Bidang Kesehatan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/kesehatan')}}">Input Data Berdasarkan Kondisi Sarana Kesehatan Keluarga</a></li>
                      <li><a href="{{url('/kesehatan1')}}">Input Data Berdasarkan Kondisi Kesehatan</a></li>
                      <li><a href="media_gallery.html">Index</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-clone"></i> Bidang Pendidikan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/pendidikan')}}">Input Data Berdasarkan Kondisi Kondisi Keluarga Yang Melek Huruf</a></li>
                      <li><a href="{{url('/pendidikan1')}}">Input Data Berdasarkan Jumlah Siswa dan Angka Drop Out Sekolah</a></li>
                      <li><a href="media_gallery.html">Index</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-clone"></i> Bidang Ketenagakerjaan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/ketenagakerjaan')}}">Input Data Berdasarkan Penduduk Usia Produktif</a></li>
                      <li><a href="{{url('/ketenagakerjaan1')}}">Input Data Berdasarkan Jenis Pekerjaan Penduduk</a></li>
                      <li><a href="media_gallery.html">Index</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-clone"></i> Bidang Perumahan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/perumahan')}}">Input Data Berdasarkan Perumahan Layak Huni</a></li>
                      <li><a href="media_gallery.html">Index</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-clone"></i> Bidang Sosial <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/sosial')}}">Input Data Berdasarkan Jumlah Penyandang Masalah Kesejahteraan Sosial</a></li>
                      <li><a href="{{url('/sosial1')}}">Input Data Berdasarkan Jumlah Keluarga Penerima Program Keluarga Harapan</a></li>
                      <li><a href="media_gallery.html">Index</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-clone"></i> Bidang Potensi Desa <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/desa')}}">Input Data Berdasarkan Sumber Air Bersih</a></li>
                      <li><a href="{{url('/desa1')}}">Input Data Berdasarkan Fasilitas Umum</a></li>
                      <li><a href="media_gallery.html">Index</a></li>
                    </ul>
                  </li>

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{csrf_field()}}

                      </form>
                    </li>
                    <li>

                      </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Pusat Sistem Informasi USU
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


    <script src="{{URL::asset('asset/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/nprogress/nprogress.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/iCheck/icheck.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/skycons/skycons.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/select2/dist/js/select2.full.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/select2/dist/js/select2.full.min.js')}}"></script>

    <script src="{{URL::asset('asset/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <script src="{{URL::asset('asset/vendors/DateJS/build/date.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{URL::asset('asset/build/js/custom.min.js')}}"></script>
    @stack('scripts')
  </body>
</html>
