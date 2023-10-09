<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/finance-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2023 14:27:54 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>L-Weeding Event</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <link rel="stylesheet" href="{{ asset('build/assets/css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('build/assets/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('build/assets/vendors/swiper_slider/css/swiper.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('build/assets/vendors/select2/css/select2.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('build/assets/vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('build/assets/vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('build/assets/vendors/gijgo/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('build/assets/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('build/assets/vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('build/assets/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('build/assets/vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('build/assets/vendors/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('build/assets/vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('build/assets/css/metisMenu.css' ) }}">

    <link rel="stylesheet" href="{{ asset('build/assets/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/css/colors/default.css') }}" id="colorSkinCSS">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('style')
</head>

<body class="crm_body_bg">



    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="{{ asset('build/assets/img/logo.png')}}" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">

                    <img src="{{ asset('build/assets/img/menu-icon/1.svg') }}" alt="">
                    <span>Hall</span>
                </a>
                <ul>
                    <li><a class="active" href="{{route('hall.index')}}">Manage Hall</a></li>
                    <li><a href="{{route('hall.create')}}">Create Hall</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('build/assets/img/menu-icon/2.svg') }}" alt="">
                    <span>Stage</span>
                </a>
                <ul>
                    <li><a href="">Manage Stage</a></li>
                    <li><a href="">Create Stage</a></li>
                   
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('build/assets/img/menu-icon/3.svg') }}" alt="">
                    <span>Food Plater</span>
                </a>
                <ul>
                    <li><a href="">Manage Plater</a></li>
                    <li><a href="">Create Plater</a></li>
                    
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('build/assets/img/menu-icon/4.svg') }}" alt="">
                    <span>Bookings</span>
                </a>
                <ul>
                    <li><a class="active" href="{{route('booking.index')}}">Manage Bookings</a></li>
                    
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('build/assets/img/menu-icon/5.svg') }}" alt="">
                    <span>Payments</span>
                </a>
                <ul>
                    <li><a href="chart_box_1.html">Chart Boxes 1</a></li>
                    <li><a href="profilebox.html">Profile Box</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('build/assets/img/menu-icon/6.svg') }}" alt="">
                    <span>Economy</span>
                </a>
                <ul>
                    <li><a href="#">Elements</a>
                        <ul>
                            <li><a href="data_table.html">Data Tables</a></li>
                            <li><a href="bootstrap_table.html">Grid Tables</a></li>
                            <li><a href="datepicker.html">Date Picker</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Widgets</a>
                        <ul>
                            <li><a href="Input_Selects.html">Input Selects</a></li>
                            <li><a href="Input_Mask.html">Input Mask</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('build/assets/img/menu-icon/7.svg') }}" alt="">
                    <span>Logout</span>
                </a>
                <ul>
                    <li><a href="chartjs.html">ChartJS</a></li>
                    <li><a href="apex_chart.html">Apex Charts</a></li>
                    <li><a href="chart_sparkline.html">chart sparkline</a></li>
                </ul>
            </li>
        </ul>
    </nav>


    <section class="main_content dashboard_part">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="{{ asset('build/assets/img/icon/icon_search.svg') }}" alt=""> </button>
                                </form>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a href="#"> <img src="{{ asset('build/assets/img/icon/bell.svg') }}" alt=""> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="{{ asset('build/assets/img/icon/msg.svg') }}" alt=""> </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <!-- <img src="{{ asset('build/assets/img/client_img.png') }}" alt="#"> -->
                                <div class="profile_info_iner">
                                    <p>Welcome Admin!</p>
                                    <h5>Travor James</h5>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile <i class="ti-user"></i></a>
                                        <a href="#">Settings <i class="ti-settings"></i></a>
                                        <a href="#">Log Out <i class="ti-shift-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @yield('page')

        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by<a href="#"> Ishrat Zahan</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="{{ asset('build/assets/js/jquery1-3.4.1.min.js') }}"></script>

    <script src="{{ asset('build/assets/js/popper1.min.js') }}"></script>

    <script src="{{ asset('build/assets/js/bootstrap1.min.js') }}"></script>

    <script src="{{ asset('build/assets/js/metisMenu.js') }}"></script>

    <script src="{{ asset('build/assets/vendors/count_up/jquery.waypoints.min.js')}}"></script>

    <script src="{{ asset('build/assets/vendors/chartlist/Chart.min.js') }}"></script>

    <script src="{{ asset('build/assets/vendors/count_up/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('build/assets/vendors/swiper_slider/js/swiper.min.js') }}"></script>

    <script src="{{ asset('build/assets/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('build/assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('build/assets/vendors/gijgo/gijgo.min.js') }}"></script>

    <script src="{{ asset('build/assets/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/chart.min.js') }}"></script>

    <script src="{{ asset('build/assets/vendors/progressbar/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('build/assets/vendors/tagsinput/tagsinput.js') }}"></script>

    <script src="{{ asset('build/assets/vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/apex_chart/apexcharts.js') }}"></script>

    <script src="{{ asset('build/assets/js/custom.js') }}"></script>

    <script src="{{ asset('build/assets/js/active_chart.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/apex_chart/radial_active.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/apex_chart/stackbar.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/apex_chart/area_chart.js') }}"></script>

    <script src="{{ asset('build/assets/vendors/apex_chart/bar_active_1.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/chartjs/chartjs_active.js') }}"></script>
    @yield('script')
</body>

<!-- Mirrored from demo.dashboardpack.com/finance-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2023 14:28:19 GMT -->

</html>