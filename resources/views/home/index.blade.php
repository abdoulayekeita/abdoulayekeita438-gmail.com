@extends('home.layouts.app')
@section('style')
    <link href="{{ asset('css/carousel_card.css') }}" rel="stylesheet" type="text/css" >

    <style>
        .kt-svg-icon g [fill] {
            fill: #478fcd;
        }
        .accordion.accordion-toggle-arrow .card .card-header .card-title {
            color: #478fcd;
        }
        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: 0%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: transform 0.6s ease-in-out;
        }
        .accordion.accordion-toggle-arrow .card .card-header .card-title:after {
            content: none;
        }
        .accordion.accordion-toggle-arrow .card .card-header .card-title.collapsed:after {
            content: none;
        }
        .accordion.accordion-outline .card .card-header .card-title:after {
            position: absolute;
            right: 1.25rem;
            font-family: "LineAwesome";
            text-decoration: inherit;
            text-rendering: optimizeLegibility;
            text-transform: none;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-smoothing: antialiased;
            content: "\F28E";
            font-size: 1.7rem;
            font-weight: bold;
            color: #5d78ff;
        }
    </style>
@endsection
@section('content')
    <div class=" mt-5 "  >

        <!-- begin:: Content -->

        <!-- begin:: Hero -->
        <div class="kt-negative-spacing--8 " style="background-image: url('assets/media/bg/bg-9.jpg'); height: 200px">
            <div class="kt-container ">

            </div>
        </div>


        <!-- end:: Hero -->
        <div class="kt-negative-spacing--7"></div>

        <!-- begin:: Section -->
        <div class="kt-container mt-5">
            <div class="kt-portlet">
                <div class="kt-portlet__body ">
                    <div class="kt-infobox">
                        <div class="kt-infobox__body">
                            <div class="container">
                                <h2 class="text-center ">Vendez et achetez </h2>
                                <div class="row justify-content-center ">
                                    <div class="col-lg-2 ">
                                        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
                                            <ul class="kt-menu__nav ">
                                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel mb-5 " data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text text-uppercase ">
                                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#478fcd"/>
                                                                    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"/>
                                                                </g>
                                                            </svg>
                                                           Catégorie</span>
                                                        <i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu  kt-menu__submenu--fixed kt-menu__submenu--left" style="width:1000px">
                                                        <div class="kt-menu__subnav">
                                                            <ul class="kt-menu__content">
                                                                <li class="kt-menu__item ">
                                                                    <h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">
                                                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                                    <polygon fill="#000000" opacity="0.3" points="6 7 6 15 18 15 18 7"/>
                                                                                    <path d="M11,19 L11,16 C11,15.4477153 11.4477153,15 12,15 C12.5522847,15 13,15.4477153 13,16 L13,19 L14.5,19 C14.7761424,19 15,19.2238576 15,19.5 C15,19.7761424 14.7761424,20 14.5,20 L9.5,20 C9.22385763,20 9,19.7761424 9,19.5 C9,19.2238576 9.22385763,19 9.5,19 L11,19 Z" fill="#000000" opacity="0.3"/>
                                                                                    <path d="M6,7 L6,15 L18,15 L18,7 L6,7 Z M6,5 L18,5 C19.1045695,5 20,5.8954305 20,7 L20,15 C20,16.1045695 19.1045695,17 18,17 L6,17 C4.8954305,17 4,16.1045695 4,15 L4,7 C4,5.8954305 4.8954305,5 6,5 Z" fill="#000000" fill-rule="nonzero"/>
                                                                                </g>
                                                                            </svg>
                                                                            Multimedia</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                                    </h3>
                                                                    <ul class="kt-menu__inner">
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Ordinateurs</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Téléphones</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">TV &amp; Home Cinema</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Appareils Photos</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Equipement Vidéo et Audio</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Audit & Logs</span></a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="kt-menu__item ">
                                                                    <h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                                    <path d="M7.83498136,4 C8.22876115,5.21244017 9.94385174,6.125 11.999966,6.125 C14.0560802,6.125 15.7711708,5.21244017 16.1649506,4 L17.2723671,4 C17.3446978,3.99203791 17.4181234,3.99191839 17.4913059,4 L17.5,4 C17.8012164,4 18.0713275,4.1331782 18.2546625,4.34386406 L22.5900048,6.8468751 C23.0682974,7.12301748 23.2321726,7.73460788 22.9560302,8.21290051 L21.2997802,11.0816097 C21.0236378,11.5599023 20.4120474,11.7237774 19.9337548,11.4476351 L18.5,10.6198563 L18.5,20 C18.5,20.5522847 18.0522847,21 17.5,21 L6.5,21 C5.94771525,21 5.5,20.5522847 5.5,20 L5.5,10.6204852 L4.0673344,11.4476351 C3.58904177,11.7237774 2.97745137,11.5599023 2.70130899,11.0816097 L1.04505899,8.21290051 C0.768916618,7.73460788 0.932791773,7.12301748 1.4110844,6.8468751 L5.74424153,4.34512566 C5.92759515,4.13371 6.19818276,4 6.5,4 L6.50978325,4 C6.58296578,3.99191839 6.65639143,3.99203791 6.72872211,4 L7.83498136,4 Z" fill="#000000"/>
                                                                                </g>
                                                                            </svg>
                                                                            Mode & Beauté</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                                    </h3>
                                                                    <ul class="kt-menu__inner">
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Ordinateurs</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Téléphones</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">TV &amp; Home Cinema</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Appareils Photos</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Equipement Vidéo et Audio</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Audit & Logs</span></a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="kt-menu__item ">
                                                                    <h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24"/>
                                                                                        <path d="M15.9497475,3.80761184 L13.0246125,6.73274681 C12.2435639,7.51379539 12.2435639,8.78012535 13.0246125,9.56117394 L14.4388261,10.9753875 C15.2198746,11.7564361 16.4862046,11.7564361 17.2672532,10.9753875 L20.1923882,8.05025253 C20.7341101,10.0447871 20.2295941,12.2556873 18.674559,13.8107223 C16.8453326,15.6399488 14.1085592,16.0155296 11.8839934,14.9444337 L6.75735931,20.0710678 C5.97631073,20.8521164 4.70998077,20.8521164 3.92893219,20.0710678 C3.1478836,19.2900192 3.1478836,18.0236893 3.92893219,17.2426407 L9.05556629,12.1160066 C7.98447038,9.89144078 8.36005124,7.15466739 10.1892777,5.32544095 C11.7443127,3.77040588 13.9552129,3.26588995 15.9497475,3.80761184 Z" fill="#000000"/>
                                                                                        <path d="M16.6568542,5.92893219 L18.0710678,7.34314575 C18.4615921,7.73367004 18.4615921,8.36683502 18.0710678,8.75735931 L16.6913928,10.1370344 C16.3008685,10.5275587 15.6677035,10.5275587 15.2771792,10.1370344 L13.8629656,8.7228208 C13.4724413,8.33229651 13.4724413,7.69913153 13.8629656,7.30860724 L15.2426407,5.92893219 C15.633165,5.5384079 16.26633,5.5384079 16.6568542,5.92893219 Z" fill="#000000" opacity="0.3"/>
                                                                                    </g>
                                                                              </svg>
                                                                            Matériaux ,outils</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                                    </h3>
                                                                    <ul class="kt-menu__inner">
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Ordinateurs</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Téléphones</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">TV &amp; Home Cinema</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Appareils Photos</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Equipement Vidéo et Audio</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Audit & Logs</span></a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="kt-menu__item ">
                                                                    <h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">
                                                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"  viewBox="0 0 1280.000000 640.000000" preserveAspectRatio="xMidYMid meet" class="mr-2">
                                                                                <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)"
                                                                                   fill="#478fcd" stroke="none">
                                                                                    <path d="M4380 5623 c-692 -18 -1083 -36 -1520 -69 -433 -32 -625 -50 -785
                                                                                -74 -214 -31 -259 -44 -224 -65 6 -5 4 -16 -7 -33 -10 -15 -24 -39 -31 -54
                                                                                -11 -21 -23 -28 -56 -32 -23 -3 -116 -15 -207 -26 -343 -43 -535 -72 -563 -86
                                                                                -38 -20 -31 -43 20 -63 23 -9 52 -26 65 -37 13 -12 39 -25 58 -29 70 -13 71
                                                                                -14 58 -38 -6 -12 -39 -53 -74 -90 -35 -38 -112 -139 -172 -225 -100 -144
                                                                                -128 -186 -205 -309 l-26 -42 -40 22 -40 22 -23 -22 -22 -23 39 -40 38 -39
                                                                                -18 -41 c-20 -44 -36 -52 -160 -71 -38 -7 -78 -19 -88 -29 -19 -17 -77 -178
                                                                                -77 -212 0 -11 5 -28 11 -39 7 -15 5 -45 -10 -117 -41 -200 -52 -289 -71 -597
                                                                                -6 -88 -20 -202 -30 -254 -11 -52 -20 -112 -20 -134 0 -23 -9 -54 -21 -74 -19
                                                                                -30 -21 -46 -18 -141 l4 -106 -35 -7 c-19 -3 -51 -13 -70 -21 l-36 -15 -12
                                                                                -144 -12 -144 88 -88 c105 -106 212 -167 293 -167 60 0 387 -73 654 -145 110
                                                                                -30 219 -60 241 -66 l41 -11 7 -59 c12 -115 25 -131 90 -109 l34 11 1 87 c3
                                                                                132 10 156 47 160 31 3 31 3 44 -69 60 -338 302 -650 616 -795 173 -80 383
                                                                                -115 561 -94 59 7 137 21 173 31 301 83 551 291 692 574 36 71 88 215 88 242
                                                                                0 11 8 13 28 9 15 -3 56 -8 92 -11 108 -11 100 -1 100 -130 0 -63 4 -116 9
                                                                                -119 4 -3 16 3 25 13 14 16 17 35 14 100 l-3 81 43 0 c40 0 42 -2 42 -29 l0
                                                                                -29 373 -6 c204 -3 710 -8 1122 -11 l751 -5 47 30 c26 16 50 37 53 45 9 21
                                                                                518 22 672 0 120 -16 391 -49 557 -66 61 -7 263 -12 455 -12 l345 0 115 38
                                                                                115 39 200 4 201 4 12 -59 c13 -63 26 -83 53 -83 13 0 17 15 23 87 3 49 9 113
                                                                                12 144 l6 57 56 6 c31 4 66 9 79 12 21 6 23 3 23 -27 0 -54 35 -177 78 -276
                                                                                104 -241 287 -432 527 -548 189 -91 385 -128 571 -106 264 30 478 132 660 315
                                                                                101 100 172 201 224 319 l35 78 90 -3 90 -3 5 -35 c4 -28 10 -36 38 -44 18 -5
                                                                                35 -6 38 -3 4 3 9 26 11 50 5 43 7 45 62 67 31 13 95 43 143 67 l88 43 128 0
                                                                                c71 0 132 4 138 10 16 16 212 29 287 18 64 -9 71 -8 111 16 85 50 166 146 166
                                                                                197 0 22 -8 30 -47 47 -27 11 -67 25 -90 31 -24 7 -43 14 -43 17 0 3 9 42 20
                                                                                87 41 170 51 215 66 307 17 101 25 144 44 252 12 61 11 70 -7 105 -17 32 -26
                                                                                39 -64 46 -24 4 -54 5 -66 2 -29 -7 -29 -1 -2 102 15 58 27 84 40 88 39 13 40
                                                                                29 9 114 -34 94 -53 133 -85 176 -12 17 -30 50 -39 75 -24 62 -43 80 -83 80
                                                                                -45 0 -106 32 -173 92 -70 62 -202 127 -365 178 -71 23 -159 52 -195 65 -143
                                                                                53 -376 117 -650 179 -318 72 -963 183 -1280 221 -473 56 -518 67 -644 153
                                                                                -351 240 -1340 775 -1622 877 -197 72 -488 145 -697 175 -73 11 -81 14 -116
                                                                                53 -22 23 -39 46 -39 51 0 5 -6 13 -14 17 -19 11 -185 57 -268 74 -322 68
                                                                                -1239 108 -1990 88z m1322 -92 c78 -10 145 -34 183 -65 19 -16 19 -16 -15 -11
                                                                                -19 2 -174 12 -345 21 -457 24 -1286 14 -1955 -25 -430 -25 -1008 -74 -1067
                                                                                -91 -40 -10 -42 -2 -5 32 72 66 68 65 342 82 140 9 266 18 280 21 27 5 553 30
                                                                                910 45 278 11 1571 4 1672 -9z m-3594 -3797 c70 -6 73 -7 86 -37 12 -30 11
                                                                                -35 -18 -72 -46 -60 -148 -180 -156 -183 -21 -8 -120 229 -120 288 0 17 34 18
                                                                                208 4z m7849 -67 c2 -3 -23 -38 -57 -78 -33 -41 -73 -91 -88 -111 -15 -20 -31
                                                                                -36 -37 -35 -15 4 -102 186 -109 228 l-6 35 146 -17 c81 -10 148 -20 151 -22z
                                                                                m-6649 8 c7 -6 -59 -163 -84 -199 l-27 -39 -21 29 c-12 15 -52 73 -89 127
                                                                                l-68 100 143 -8 c79 -4 144 -8 146 -10z m-909 -207 c28 -12 50 -26 51 -30 0
                                                                                -5 -29 -56 -65 -114 -36 -59 -65 -110 -65 -115 0 -14 -8 -11 -70 22 -60 32
                                                                                -170 123 -170 141 0 5 38 56 85 113 l86 103 49 -48 c27 -27 72 -59 99 -72z
                                                                                m7760 -2 c35 -18 49 -31 44 -39 -73 -116 -123 -204 -123 -214 0 -18 -14 -16
                                                                                -59 7 -52 26 -193 139 -189 151 2 5 41 56 88 113 l85 104 51 -48 c28 -26 74
                                                                                -60 103 -74z m-7104 12 c47 -56 85 -105 85 -109 0 -20 -205 -170 -229 -169 -5
                                                                                1 -140 210 -149 231 -2 4 18 17 43 29 25 12 70 44 98 71 29 26 55 48 59 49 4
                                                                                0 46 -46 93 -102z m7757 -2 l86 -103 -46 -46 c-77 -75 -202 -146 -202 -115 0
                                                                                7 -31 60 -69 118 l-69 105 55 30 c31 16 77 49 102 72 25 23 48 42 51 43 3 0
                                                                                44 -47 92 -104z m198 67 c6 -5 -45 -97 -57 -100 -4 -2 -17 12 -29 30 -11 17
                                                                                -29 45 -39 61 l-19 29 69 -8 c39 -4 72 -9 75 -12z m-8260 -245 c44 -64 80
                                                                                -119 80 -121 0 -11 -68 -27 -149 -37 -66 -8 -107 -7 -180 4 -51 8 -97 18 -102
                                                                                23 -5 5 20 52 57 108 94 141 93 140 158 139 l56 0 80 -116z m7756 -4 c68 -98
                                                                                79 -121 67 -128 -9 -5 -58 -15 -110 -23 -97 -14 -211 -7 -290 18 l-33 10 42
                                                                                62 c23 34 60 89 84 122 l42 60 59 -1 58 0 81 -120z"/>
                                                                                </g>
                                                                            </svg>
                                                                            Vehicules</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                                    </h3>
                                                                    <ul class="kt-menu__inner">
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Ordinateurs</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Téléphones</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">TV &amp; Home Cinema</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Appareils Photos</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Equipement Vidéo et Audio</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Audit & Logs</span></a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            <ul class="kt-menu__content">
                                                                <li class="kt-menu__item ">
                                                                    <h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">
                                                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mr-2">
                                                                                <g  fill="#478fcd" >
                                                                                    <path d="M21 13v10h-6v-6h-6v6h-6v-10h-3l12-12 12 12h-3zm-1-5.907v-5.093h-3v2.093l3 3z"/>
                                                                                </g>
                                                                            </svg>
                                                                            Immobilier</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                                    </h3>
                                                                    <ul class="kt-menu__inner">
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Ordinateurs</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Téléphones</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">TV &amp; Home Cinema</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Appareils Photos</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Equipement Vidéo et Audio</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Audit & Logs</span></a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="kt-menu__item ">
                                                                    <h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">
                                                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mr-2">
                                                                                <g fill="#478fcd">
                                                                                    <path d="M12 9.185l7 6.514v6.301h-14v-6.301l7-6.514zm0-2.732l-9 8.375v9.172h18v-9.172l-9-8.375zm2 14.547h-4v-6h4v6zm10-8.852l-1.361 1.465-10.639-9.883-10.639 9.868-1.361-1.465 12-11.133 12 11.148z"/>
                                                                                </g>
                                                                            </svg>
                                                                            Maison</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                                    </h3>
                                                                    <ul class="kt-menu__inner">
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Ordinateurs</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Téléphones</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">TV &amp; Home Cinema</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Appareils Photos</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Equipement Vidéo et Audio</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Audit & Logs</span></a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="kt-menu__item ">
                                                                    <h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">
                                                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                                    <path d="M12,19 C15.8659932,19 19,15.8659932 19,12 C19,8.13400675 15.8659932,5 12,5 C8.13400675,5 5,8.13400675 5,12 C5,15.8659932 8.13400675,19 12,19 Z M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z" fill="#000000" fill-rule="nonzero"/>
                                                                                    <path d="M12,9.66666667 C11.3333333,8.64514991 11,7.88126102 11,7.375 C11,6.61560847 11.4477153,6 12,6 C12.5522847,6 13,6.61560847 13,7.375 C13,7.88126102 12.6666667,8.64514991 12,9.66666667 Z M12,14 C12.6666667,15.0215168 13,15.7854056 13,16.2916667 C13,17.0510582 12.5522847,17.6666667 12,17.6666667 C11.4477153,17.6666667 11,17.0510582 11,16.2916667 C11,15.7854056 11.3333333,15.0215168 12,14 Z M14.3333333,12 C15.3548501,11.3333333 16.118739,11 16.625,11 C17.3843915,11 18,11.4477153 18,12 C18,12.5522847 17.3843915,13 16.625,13 C16.118739,13 15.3548501,12.6666667 14.3333333,12 Z M10,12 C8.97848324,12.6666667 8.21459435,13 7.70833333,13 C6.9489418,13 6.33333333,12.5522847 6.33333333,12 C6.33333333,11.4477153 6.9489418,11 7.70833333,11 C8.21459435,11 8.97848324,11.3333333 10,12 Z M13.6499158,10.3500842 C13.9008327,9.15635823 14.2052815,8.38050496 14.5632621,8.02252436 C15.100233,7.48555345 15.8521164,7.36683502 16.2426407,7.75735931 C16.633165,8.1478836 16.5144465,8.89976702 15.9774756,9.43673792 C15.619495,9.79471852 14.8436418,10.0991673 13.6499158,10.3500842 Z M10.5857864,13.4142136 C10.3348695,14.6079395 10.0304208,15.3837928 9.67244018,15.7417734 C9.13546928,16.2787443 8.38358587,16.3974627 7.99306157,16.0069384 C7.60253728,15.6164141 7.72125572,14.8645307 8.25822662,14.3275598 C8.61620722,13.9695792 9.39206049,13.6651305 10.5857864,13.4142136 Z M13.6499158,13.6499158 C14.8436418,13.9008327 15.619495,14.2052815 15.9774756,14.5632621 C16.5144465,15.100233 16.633165,15.8521164 16.2426407,16.2426407 C15.8521164,16.633165 15.100233,16.5144465 14.5632621,15.9774756 C14.2052815,15.619495 13.9008327,14.8436418 13.6499158,13.6499158 Z M10.5857864,10.5857864 C9.39206049,10.3348695 8.61620722,10.0304208 8.25822662,9.67244018 C7.72125572,9.13546928 7.60253728,8.38358587 7.99306157,7.99306157 C8.38358587,7.60253728 9.13546928,7.72125572 9.67244018,8.25822662 C10.0304208,8.61620722 10.3348695,9.39206049 10.5857864,10.5857864 Z" fill="#000000" opacity="0.3"/>
                                                                                </g>
                                                                            </svg>
                                                                            Événements & loisirs</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                                    </h3>
                                                                    <ul class="kt-menu__inner">
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Ordinateurs</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Téléphones</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">TV &amp; Home Cinema</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Appareils Photos</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Equipement Vidéo et Audio</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Audit & Logs</span></a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="kt-menu__item ">
                                                                    <h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">
                                                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                                                    <path d="M9,1 C4.92361111,7.82926829 4.92361111,12.8292683 9,16 C12.9097222,12.8292683 12.9097222,7.82926829 9,1 Z" fill="#000000" opacity="0.3" transform="translate(8.937500, 8.500000) scale(-1, 1) rotate(-330.000000) translate(-8.937500, -8.500000) "/>
                                                                                    <path d="M15,1 C10.9236111,7.82926829 10.9236111,12.8292683 15,16 C18.9097222,12.8292683 18.9097222,7.82926829 15,1 Z" fill="#000000" opacity="0.3" transform="translate(14.937500, 8.500000) rotate(-330.000000) translate(-14.937500, -8.500000) "/>
                                                                                    <path d="M12,1 C7.92361111,7.82926829 7.92361111,12.8292683 12,16 C15.9097222,12.8292683 15.9097222,7.82926829 12,1 Z" fill="#000000" opacity="0.3"/>
                                                                                    <path d="M6.34403065,13 L17.6559693,13 C18.2082541,13 18.6559693,13.4477153 18.6559693,14 C18.6559693,14.0973246 18.6417616,14.1941279 18.6137956,14.2873479 L16.4275913,21.5746958 C16.1738009,22.4206637 15.3951551,23 14.5119387,23 L9.4880613,23 C8.60484486,23 7.82619911,22.4206637 7.57240873,21.5746958 L5.38620437,14.2873479 C5.22750651,13.758355 5.52768992,13.2008716 6.05668277,13.0421737 C6.14990279,13.0142077 6.24670609,13 6.34403065,13 Z" fill="#000000"/>
                                                                                </g>
                                                                            </svg>
                                                                            Agroalimentaire</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                                    </h3>
                                                                    <ul class="kt-menu__inner">
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Ordinateurs</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Téléphones</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">TV &amp; Home Cinema</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Appareils Photos</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Equipement Vidéo et Audio</span></a></li>
                                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><span class="kt-menu__link-text">Audit & Logs</span></a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <form class="">
                                            <div class="form-group ">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Que recherchez vous?">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 mb-2">
                                        <div class="accordion  accordion-toggle-arrow" id="accordionExample1">
                                            <div class="card">
                                                <div class="card-header" id="headingOne1">
                                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <polygon fill="#000000" opacity="0.3" points="6 7 6 15 18 15 18 7"/>
                                                                <path d="M11,19 L11,16 C11,15.4477153 11.4477153,15 12,15 C12.5522847,15 13,15.4477153 13,16 L13,19 L14.5,19 C14.7761424,19 15,19.2238576 15,19.5 C15,19.7761424 14.7761424,20 14.5,20 L9.5,20 C9.22385763,20 9,19.7761424 9,19.5 C9,19.2238576 9.22385763,19 9.5,19 L11,19 Z" fill="#000000" opacity="0.3"/>
                                                                <path d="M6,7 L6,15 L18,15 L18,7 L6,7 Z M6,5 L18,5 C19.1045695,5 20,5.8954305 20,7 L20,15 C20,16.1045695 19.1045695,17 18,17 L6,17 C4.8954305,17 4,16.1045695 4,15 L4,7 C4,5.8954305 4.8954305,5 6,5 Z" fill="#000000" fill-rule="nonzero"/>
                                                            </g>
                                                        </svg>
                                                        Multimedia
                                                    </div>
                                                </div>
                                                <div id="collapseOne1" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample1">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Ordinateurs</span>
                                                                    <span class="float-right">(5395)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Téléphones</span>
                                                                    <span class="float-right">(4988)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Tablettes</span>
                                                                    <span class="float-right">(575)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>TV &amp; Home Cinema</span>
                                                                    <span class="float-right">(1455)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Appareils Photos</span>
                                                                    <span class="float-right">(425)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Equipement Vidéo et Audio</span>
                                                                    <span class="float-right">(595)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Imprimantes &amp; Photocopieurs</span>
                                                                    <span class="float-right">(622)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Accessoires multimédia</span>
                                                                    <span class="float-right">(1555)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Jeux Vidéos &amp; Consoles</span>
                                                                    <span class="float-right">(980)</span>
                                                                </a>
                                                            </li>
                                                        </ul>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="accordion  accordion-toggle-arrow" id="accordionExample2">
                                            <div class="card">
                                                <div class="card-header" id="headingOne2">
                                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M7.83498136,4 C8.22876115,5.21244017 9.94385174,6.125 11.999966,6.125 C14.0560802,6.125 15.7711708,5.21244017 16.1649506,4 L17.2723671,4 C17.3446978,3.99203791 17.4181234,3.99191839 17.4913059,4 L17.5,4 C17.8012164,4 18.0713275,4.1331782 18.2546625,4.34386406 L22.5900048,6.8468751 C23.0682974,7.12301748 23.2321726,7.73460788 22.9560302,8.21290051 L21.2997802,11.0816097 C21.0236378,11.5599023 20.4120474,11.7237774 19.9337548,11.4476351 L18.5,10.6198563 L18.5,20 C18.5,20.5522847 18.0522847,21 17.5,21 L6.5,21 C5.94771525,21 5.5,20.5522847 5.5,20 L5.5,10.6204852 L4.0673344,11.4476351 C3.58904177,11.7237774 2.97745137,11.5599023 2.70130899,11.0816097 L1.04505899,8.21290051 C0.768916618,7.73460788 0.932791773,7.12301748 1.4110844,6.8468751 L5.74424153,4.34512566 C5.92759515,4.13371 6.19818276,4 6.5,4 L6.50978325,4 C6.58296578,3.99191839 6.65639143,3.99203791 6.72872211,4 L7.83498136,4 Z" fill="#000000"/>
                                                            </g>
                                                        </svg>
                                                        Mode & Beauté
                                                    </div>
                                                </div>
                                                <div id="collapseOne2" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample2">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Vêtements Homme</span>
                                                                    <span class="float-right">(579)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Vêtements Femme</span>
                                                                    <span class="float-right">(492)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Parfums &amp; produits cosmétiques</span>
                                                                    <span class="float-right">(803)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Montres &amp; Bijoux</span>
                                                                    <span class="float-right">(691)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Chaussures Homme</span>
                                                                    <span class="float-right">(541)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://www.expat-dakar.com/chaussures-femme">
                                                                    <span>Chaussures Femme</span>
                                                                    <span class="float-right">(289)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Enfant &amp; Bébé</span>
                                                                    <span class="float-right">(1005)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Lingerie</span>
                                                                    <span class="float-right">(219)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Valises &amp; Sacs</span>
                                                                    <span class="float-right">(317)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Cheveux et Coiffure</span>
                                                                    <span class="float-right">(350)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Accessoires de Mode</span>
                                                                    <span class="float-right">(166)</span>
                                                                </a>
                                                            </li>
                                                        </ul>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="accordion  accordion-toggle-arrow" id="accordionExample3">
                                            <div class="card">
                                                <div class="card-header" id="headingOne3">
                                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M15.9497475,3.80761184 L13.0246125,6.73274681 C12.2435639,7.51379539 12.2435639,8.78012535 13.0246125,9.56117394 L14.4388261,10.9753875 C15.2198746,11.7564361 16.4862046,11.7564361 17.2672532,10.9753875 L20.1923882,8.05025253 C20.7341101,10.0447871 20.2295941,12.2556873 18.674559,13.8107223 C16.8453326,15.6399488 14.1085592,16.0155296 11.8839934,14.9444337 L6.75735931,20.0710678 C5.97631073,20.8521164 4.70998077,20.8521164 3.92893219,20.0710678 C3.1478836,19.2900192 3.1478836,18.0236893 3.92893219,17.2426407 L9.05556629,12.1160066 C7.98447038,9.89144078 8.36005124,7.15466739 10.1892777,5.32544095 C11.7443127,3.77040588 13.9552129,3.26588995 15.9497475,3.80761184 Z" fill="#000000"/>
                                                                <path d="M16.6568542,5.92893219 L18.0710678,7.34314575 C18.4615921,7.73367004 18.4615921,8.36683502 18.0710678,8.75735931 L16.6913928,10.1370344 C16.3008685,10.5275587 15.6677035,10.5275587 15.2771792,10.1370344 L13.8629656,8.7228208 C13.4724413,8.33229651 13.4724413,7.69913153 13.8629656,7.30860724 L15.2426407,5.92893219 C15.633165,5.5384079 16.26633,5.5384079 16.6568542,5.92893219 Z" fill="#000000" opacity="0.3"/>
                                                            </g>
                                                        </svg>
                                                        Matériaux ,outils
                                                    </div>
                                                </div>
                                                <div id="collapseOne3" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample3">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Matériel Pro</span>
                                                                    <span class="float-right">(879)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Materiel de construction</span>
                                                                    <span class="float-right">(872)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Energie &amp; Groupes Electrogènes</span>
                                                                    <span class="float-right">(317)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Caméras de Surveillance</span>
                                                                    <span class="float-right">(238)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Equipement Restauration</span>
                                                                    <span class="float-right">(149)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Equipement Medical</span>
                                                                    <span class="float-right">(408)</span>
                                                                </a>
                                                            </li>
                                                        </ul>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="accordion  accordion-toggle-arrow" id="accordionExample4">
                                            <div class="card">
                                                <div class="card-header" id="headingOne4">
                                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"  viewBox="0 0 1280.000000 640.000000" preserveAspectRatio="xMidYMid meet" class="mr-2">
                                                            <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)"
                                                               fill="#478fcd" stroke="none">
                                                                <path d="M4380 5623 c-692 -18 -1083 -36 -1520 -69 -433 -32 -625 -50 -785
                                                            -74 -214 -31 -259 -44 -224 -65 6 -5 4 -16 -7 -33 -10 -15 -24 -39 -31 -54
                                                            -11 -21 -23 -28 -56 -32 -23 -3 -116 -15 -207 -26 -343 -43 -535 -72 -563 -86
                                                            -38 -20 -31 -43 20 -63 23 -9 52 -26 65 -37 13 -12 39 -25 58 -29 70 -13 71
                                                            -14 58 -38 -6 -12 -39 -53 -74 -90 -35 -38 -112 -139 -172 -225 -100 -144
                                                            -128 -186 -205 -309 l-26 -42 -40 22 -40 22 -23 -22 -22 -23 39 -40 38 -39
                                                            -18 -41 c-20 -44 -36 -52 -160 -71 -38 -7 -78 -19 -88 -29 -19 -17 -77 -178
                                                            -77 -212 0 -11 5 -28 11 -39 7 -15 5 -45 -10 -117 -41 -200 -52 -289 -71 -597
                                                            -6 -88 -20 -202 -30 -254 -11 -52 -20 -112 -20 -134 0 -23 -9 -54 -21 -74 -19
                                                            -30 -21 -46 -18 -141 l4 -106 -35 -7 c-19 -3 -51 -13 -70 -21 l-36 -15 -12
                                                            -144 -12 -144 88 -88 c105 -106 212 -167 293 -167 60 0 387 -73 654 -145 110
                                                            -30 219 -60 241 -66 l41 -11 7 -59 c12 -115 25 -131 90 -109 l34 11 1 87 c3
                                                            132 10 156 47 160 31 3 31 3 44 -69 60 -338 302 -650 616 -795 173 -80 383
                                                            -115 561 -94 59 7 137 21 173 31 301 83 551 291 692 574 36 71 88 215 88 242
                                                            0 11 8 13 28 9 15 -3 56 -8 92 -11 108 -11 100 -1 100 -130 0 -63 4 -116 9
                                                            -119 4 -3 16 3 25 13 14 16 17 35 14 100 l-3 81 43 0 c40 0 42 -2 42 -29 l0
                                                            -29 373 -6 c204 -3 710 -8 1122 -11 l751 -5 47 30 c26 16 50 37 53 45 9 21
                                                            518 22 672 0 120 -16 391 -49 557 -66 61 -7 263 -12 455 -12 l345 0 115 38
                                                            115 39 200 4 201 4 12 -59 c13 -63 26 -83 53 -83 13 0 17 15 23 87 3 49 9 113
                                                            12 144 l6 57 56 6 c31 4 66 9 79 12 21 6 23 3 23 -27 0 -54 35 -177 78 -276
                                                            104 -241 287 -432 527 -548 189 -91 385 -128 571 -106 264 30 478 132 660 315
                                                            101 100 172 201 224 319 l35 78 90 -3 90 -3 5 -35 c4 -28 10 -36 38 -44 18 -5
                                                            35 -6 38 -3 4 3 9 26 11 50 5 43 7 45 62 67 31 13 95 43 143 67 l88 43 128 0
                                                            c71 0 132 4 138 10 16 16 212 29 287 18 64 -9 71 -8 111 16 85 50 166 146 166
                                                            197 0 22 -8 30 -47 47 -27 11 -67 25 -90 31 -24 7 -43 14 -43 17 0 3 9 42 20
                                                            87 41 170 51 215 66 307 17 101 25 144 44 252 12 61 11 70 -7 105 -17 32 -26
                                                            39 -64 46 -24 4 -54 5 -66 2 -29 -7 -29 -1 -2 102 15 58 27 84 40 88 39 13 40
                                                            29 9 114 -34 94 -53 133 -85 176 -12 17 -30 50 -39 75 -24 62 -43 80 -83 80
                                                            -45 0 -106 32 -173 92 -70 62 -202 127 -365 178 -71 23 -159 52 -195 65 -143
                                                            53 -376 117 -650 179 -318 72 -963 183 -1280 221 -473 56 -518 67 -644 153
                                                            -351 240 -1340 775 -1622 877 -197 72 -488 145 -697 175 -73 11 -81 14 -116
                                                            53 -22 23 -39 46 -39 51 0 5 -6 13 -14 17 -19 11 -185 57 -268 74 -322 68
                                                            -1239 108 -1990 88z m1322 -92 c78 -10 145 -34 183 -65 19 -16 19 -16 -15 -11
                                                            -19 2 -174 12 -345 21 -457 24 -1286 14 -1955 -25 -430 -25 -1008 -74 -1067
                                                            -91 -40 -10 -42 -2 -5 32 72 66 68 65 342 82 140 9 266 18 280 21 27 5 553 30
                                                            910 45 278 11 1571 4 1672 -9z m-3594 -3797 c70 -6 73 -7 86 -37 12 -30 11
                                                            -35 -18 -72 -46 -60 -148 -180 -156 -183 -21 -8 -120 229 -120 288 0 17 34 18
                                                            208 4z m7849 -67 c2 -3 -23 -38 -57 -78 -33 -41 -73 -91 -88 -111 -15 -20 -31
                                                            -36 -37 -35 -15 4 -102 186 -109 228 l-6 35 146 -17 c81 -10 148 -20 151 -22z
                                                            m-6649 8 c7 -6 -59 -163 -84 -199 l-27 -39 -21 29 c-12 15 -52 73 -89 127
                                                            l-68 100 143 -8 c79 -4 144 -8 146 -10z m-909 -207 c28 -12 50 -26 51 -30 0
                                                            -5 -29 -56 -65 -114 -36 -59 -65 -110 -65 -115 0 -14 -8 -11 -70 22 -60 32
                                                            -170 123 -170 141 0 5 38 56 85 113 l86 103 49 -48 c27 -27 72 -59 99 -72z
                                                            m7760 -2 c35 -18 49 -31 44 -39 -73 -116 -123 -204 -123 -214 0 -18 -14 -16
                                                            -59 7 -52 26 -193 139 -189 151 2 5 41 56 88 113 l85 104 51 -48 c28 -26 74
                                                            -60 103 -74z m-7104 12 c47 -56 85 -105 85 -109 0 -20 -205 -170 -229 -169 -5
                                                            1 -140 210 -149 231 -2 4 18 17 43 29 25 12 70 44 98 71 29 26 55 48 59 49 4
                                                            0 46 -46 93 -102z m7757 -2 l86 -103 -46 -46 c-77 -75 -202 -146 -202 -115 0
                                                            7 -31 60 -69 118 l-69 105 55 30 c31 16 77 49 102 72 25 23 48 42 51 43 3 0
                                                            44 -47 92 -104z m198 67 c6 -5 -45 -97 -57 -100 -4 -2 -17 12 -29 30 -11 17
                                                            -29 45 -39 61 l-19 29 69 -8 c39 -4 72 -9 75 -12z m-8260 -245 c44 -64 80
                                                            -119 80 -121 0 -11 -68 -27 -149 -37 -66 -8 -107 -7 -180 4 -51 8 -97 18 -102
                                                            23 -5 5 20 52 57 108 94 141 93 140 158 139 l56 0 80 -116z m7756 -4 c68 -98
                                                            79 -121 67 -128 -9 -5 -58 -15 -110 -23 -97 -14 -211 -7 -290 18 l-33 10 42
                                                            62 c23 34 60 89 84 122 l42 60 59 -1 58 0 81 -120z"/>
                                                            </g>
                                                        </svg>
                                                        Vehicules
                                                    </div>
                                                </div>
                                                <div id="collapseOne4" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample4">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Voitures</span>
                                                                    <span class="float-right">(7894)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Motos &amp; Scooters</span>
                                                                    <span class="float-right">(942)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Équipements &amp; Pièces</span>
                                                                    <span class="float-right">(533)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Location de Véhicules</span>
                                                                    <span class="float-right">(320)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Bateaux</span>
                                                                    <span class="float-right">(50)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Cars &amp; Camions</span>
                                                                    <span class="float-right">(316)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Taxis</span>
                                                                    <span class="float-right">(58)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Vélos</span>
                                                                    <span class="float-right">(126)</span>
                                                                </a>
                                                            </li>
                                                        </ul>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 mb-2">
                                        <div class="accordion  accordion-toggle-arrow" id="accordionExample5">
                                            <div class="card">
                                                <div class="card-header" id="headingOne5">
                                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mr-2">
                                                            <g  fill="#478fcd" >
                                                                <path d="M21 13v10h-6v-6h-6v6h-6v-10h-3l12-12 12 12h-3zm-1-5.907v-5.093h-3v2.093l3 3z"/>
                                                            </g>
                                                        </svg>
                                                        Immobilier
                                                    </div>
                                                </div>
                                                <div id="collapseOne5" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample5">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Appartements à Louer</span>
                                                                    <span class="float-right">(1885)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Appartements meublés</span>
                                                                    <span class="float-right">(807)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Chambres à Louer</span>
                                                                    <span class="float-right">(444)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Terrains à Vendre</span>
                                                                    <span class="float-right">(1118)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Maisons à Louer</span>
                                                                    <span class="float-right">(604)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Maisons à Vendre</span>
                                                                    <span class="float-right">(751)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Appartements à Vendre</span>
                                                                    <span class="float-right">(286)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Maisons de vacances</span>
                                                                    <span class="float-right">(5)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Propriétés Commerciales</span>
                                                                    <span class="float-right">(312)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Propriétés Commerciales à Vendre</span>
                                                                    <span class="float-right">(22)</span>
                                                                </a>
                                                            </li>
                                                        </ul>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="accordion  accordion-toggle-arrow" id="accordionExample6">
                                            <div class="card">
                                                <div class="card-header" id="headingOne6">
                                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mr-2">
                                                            <g fill="#478fcd">
                                                                <path d="M12 9.185l7 6.514v6.301h-14v-6.301l7-6.514zm0-2.732l-9 8.375v9.172h18v-9.172l-9-8.375zm2 14.547h-4v-6h4v6zm10-8.852l-1.361 1.465-10.639-9.883-10.639 9.868-1.361-1.465 12-11.133 12 11.148z"/>
                                                            </g>
                                                        </svg>
                                                        Maison
                                                    </div>
                                                </div>
                                                <div id="collapseOne6" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample6">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Mobilier</span>
                                                                    <span class="float-right">(4366)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Electromenager</span>
                                                                    <span class="float-right">(2886)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Décoration, Linge de Maison</span>
                                                                    <span class="float-right">(1107)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Vaisselles</span>
                                                                    <span class="float-right">(360)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Jardinage, bricolage</span>
                                                                    <span class="float-right">(142)</span>
                                                                </a>
                                                            </li>
                                                        </ul>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="accordion  accordion-toggle-arrow" id="accordionExample7">
                                            <div class="card">
                                                <div class="card-header" id="headingOne7">
                                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M12,19 C15.8659932,19 19,15.8659932 19,12 C19,8.13400675 15.8659932,5 12,5 C8.13400675,5 5,8.13400675 5,12 C5,15.8659932 8.13400675,19 12,19 Z M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z" fill="#000000" fill-rule="nonzero"/>
                                                                <path d="M12,9.66666667 C11.3333333,8.64514991 11,7.88126102 11,7.375 C11,6.61560847 11.4477153,6 12,6 C12.5522847,6 13,6.61560847 13,7.375 C13,7.88126102 12.6666667,8.64514991 12,9.66666667 Z M12,14 C12.6666667,15.0215168 13,15.7854056 13,16.2916667 C13,17.0510582 12.5522847,17.6666667 12,17.6666667 C11.4477153,17.6666667 11,17.0510582 11,16.2916667 C11,15.7854056 11.3333333,15.0215168 12,14 Z M14.3333333,12 C15.3548501,11.3333333 16.118739,11 16.625,11 C17.3843915,11 18,11.4477153 18,12 C18,12.5522847 17.3843915,13 16.625,13 C16.118739,13 15.3548501,12.6666667 14.3333333,12 Z M10,12 C8.97848324,12.6666667 8.21459435,13 7.70833333,13 C6.9489418,13 6.33333333,12.5522847 6.33333333,12 C6.33333333,11.4477153 6.9489418,11 7.70833333,11 C8.21459435,11 8.97848324,11.3333333 10,12 Z M13.6499158,10.3500842 C13.9008327,9.15635823 14.2052815,8.38050496 14.5632621,8.02252436 C15.100233,7.48555345 15.8521164,7.36683502 16.2426407,7.75735931 C16.633165,8.1478836 16.5144465,8.89976702 15.9774756,9.43673792 C15.619495,9.79471852 14.8436418,10.0991673 13.6499158,10.3500842 Z M10.5857864,13.4142136 C10.3348695,14.6079395 10.0304208,15.3837928 9.67244018,15.7417734 C9.13546928,16.2787443 8.38358587,16.3974627 7.99306157,16.0069384 C7.60253728,15.6164141 7.72125572,14.8645307 8.25822662,14.3275598 C8.61620722,13.9695792 9.39206049,13.6651305 10.5857864,13.4142136 Z M13.6499158,13.6499158 C14.8436418,13.9008327 15.619495,14.2052815 15.9774756,14.5632621 C16.5144465,15.100233 16.633165,15.8521164 16.2426407,16.2426407 C15.8521164,16.633165 15.100233,16.5144465 14.5632621,15.9774756 C14.2052815,15.619495 13.9008327,14.8436418 13.6499158,13.6499158 Z M10.5857864,10.5857864 C9.39206049,10.3348695 8.61620722,10.0304208 8.25822662,9.67244018 C7.72125572,9.13546928 7.60253728,8.38358587 7.99306157,7.99306157 C8.38358587,7.60253728 9.13546928,7.72125572 9.67244018,8.25822662 C10.0304208,8.61620722 10.3348695,9.39206049 10.5857864,10.5857864 Z" fill="#000000" opacity="0.3"/>
                                                            </g>
                                                        </svg>
                                                        Événements & loisirs
                                                    </div>
                                                </div>
                                                <div id="collapseOne7" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample7">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Matériel de Sport</span>
                                                                    <span class="float-right">(564)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>CDs, DVDs &amp; Livres</span>
                                                                    <span class="float-right">(145)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Instruments de musique</span>
                                                                    <span class="float-right">(201)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Événements</span>
                                                                    <span class="float-right">(27)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Art &amp; Artisanat</span>
                                                                    <span class="float-right">(24)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Tourisme &amp; Activités</span>
                                                                    <span class="float-right">(25)</span>
                                                                </a>
                                                            </li>
                                                        </ul>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="accordion  accordion-toggle-arrow" id="accordionExample8">
                                            <div class="card">
                                                <div class="card-header" id="headingOne8">
                                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne8" aria-expanded="true" aria-controls="collapseOne8">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                                <path d="M9,1 C4.92361111,7.82926829 4.92361111,12.8292683 9,16 C12.9097222,12.8292683 12.9097222,7.82926829 9,1 Z" fill="#000000" opacity="0.3" transform="translate(8.937500, 8.500000) scale(-1, 1) rotate(-330.000000) translate(-8.937500, -8.500000) "/>
                                                                <path d="M15,1 C10.9236111,7.82926829 10.9236111,12.8292683 15,16 C18.9097222,12.8292683 18.9097222,7.82926829 15,1 Z" fill="#000000" opacity="0.3" transform="translate(14.937500, 8.500000) rotate(-330.000000) translate(-14.937500, -8.500000) "/>
                                                                <path d="M12,1 C7.92361111,7.82926829 7.92361111,12.8292683 12,16 C15.9097222,12.8292683 15.9097222,7.82926829 12,1 Z" fill="#000000" opacity="0.3"/>
                                                                <path d="M6.34403065,13 L17.6559693,13 C18.2082541,13 18.6559693,13.4477153 18.6559693,14 C18.6559693,14.0973246 18.6417616,14.1941279 18.6137956,14.2873479 L16.4275913,21.5746958 C16.1738009,22.4206637 15.3951551,23 14.5119387,23 L9.4880613,23 C8.60484486,23 7.82619911,22.4206637 7.57240873,21.5746958 L5.38620437,14.2873479 C5.22750651,13.758355 5.52768992,13.2008716 6.05668277,13.0421737 C6.14990279,13.0142077 6.24670609,13 6.34403065,13 Z" fill="#000000"/>
                                                            </g>
                                                        </svg>
                                                        Agroalimentaire
                                                    </div>
                                                </div>
                                                <div id="collapseOne8" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample8">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Chiens &amp; Chiots</span>
                                                                    <span class="float-right">(297)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Moutons</span>
                                                                    <span class="float-right">(140)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Lapins</span>
                                                                    <span class="float-right">(81)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Pigeons</span>
                                                                    <span class="float-right">(71)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Chats &amp; Chatons</span>
                                                                    <span class="float-right">(0)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Autres Animaux</span>
                                                                    <span class="float-right">(167)</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Accessoires Animaux</span>
                                                                    <span class="float-right">(120)</span>
                                                                </a>
                                                            </li>
                                                        </ul>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-3 pl-5">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner row w-100 ">
                                <div class="carousel-item col-lg-4 active" >
                                    <div class="card" >
                                        <img src="{{asset('images/dashboard/keita1.jpg')}}" class="img-fluid rounded " style=" height: 250px; width: 100% !important;display: inline-block;"/>
                                        <div class="card-body ">
                                            <h4 class="card-title">Produit 1 2000FCFA</h4>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Publier il y a 3 min</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-lg-4" >
                                    <div class="card " >
                                        <img src="{{asset('images/dashboard/keita1.jpg')}}" class="img-fluid rounded " style=" height: 250px; width: 100% !important;display: inline-block;"/>
                                        <div class="card-body">
                                            <h4 class="card-title">Produit 2 1000 FCFA</h4>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Publier il ya 3 min</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-lg-4">
                                    <div class="card" style="max-height: 400px">
                                        <img src="{{asset('images/dashboard/keita1.jpg')}}" class="img-fluid rounded " style=" height: 250px; width: 100% !important;display: inline-block;"/>
                                        <div class="card-body">
                                            <h4 class="card-title">Produit 3</h4>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Publier il y a 6 min</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-lg-4">
                                    <div class="card">
                                        <img src="{{asset('images/dashboard/keita1.jpg')}}" class="img-fluid rounded " style=" height: 250px; width: 100% !important;display: inline-block;"/>
                                        <div class="card-body">
                                            <h4 class="card-title">Produit 4</h4>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Publier il y a 7 min</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-lg-4">
                                    <div class="card">
                                        <img src="{{asset('images/dashboard/keita1.jpg')}}" class="img-fluid rounded " style=" height: 250px; width: 100% !important;display: inline-block;"/>
                                        <div class="card-body">
                                            <h4 class="card-title">Produi 5</h4>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Publier il y a 5 min</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- end:: Section -->

        <!-- begin:: Section -->

        <!-- end:: Section -->

        <!-- end:: Content -->

    </div>

@endsection

@section('script')
    <script src="{{ asset('js/carousel_card.js') }}"></script>
@endsection
