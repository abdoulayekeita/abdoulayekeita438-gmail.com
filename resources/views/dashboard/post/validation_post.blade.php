@extends('dashboard.layouts.app',['title'=>'Détail annonce'])
@section('style')
    <link href="{{asset('css/purpose.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet" type="text/css" >
    <style>

    </style>

@endsection

<!-- begin:: Aside Menu -->
@section('AsideMenu')
    <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
            <ul class="kt-menu__nav ">
                <li class="kt-menu__item  " aria-haspopup="true"><a href="{{route('dashboard')}}" class="kt-menu__link "><span class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg></span>
                        <span class="kt-menu__link-text"> Tableau de bord</span></a></li>
                <li class="kt-menu__section ">
                    <h4 class="kt-menu__section-text">Annonce</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>
                @if(auth()->user()->profile->role=="Busness" || auth()->user()->profile->role=="Particulier")
                    <li class="kt-menu__item  kt-menu__item--submenu " aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('post.create')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
                                    <rect fill="#000000"  transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/>
                                </g>
                            </svg>
                            </span><span class="kt-menu__link-text">Déposer une annonce</span></a>
                    </li>
                @endif
                <li class="kt-menu__item  kt-menu__item--submenu " aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('shop.create')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000"/>
                                <rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1"/>
                            </g>
                        </svg>
                        </span><span class="kt-menu__link-text">Détail de l'annonce</span></a>
                </li>
                @if(auth()->user()->profile->role=="Busness" || auth()->user()->profile->role=="Particulier")
                    <li class="kt-menu__item  kt-menu__item--submenu " aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('post.edit',$post)}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                    <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                </g>
                            </svg>
                            </span><span class="kt-menu__link-text">Modifier l'annonce</span></a>
                    </li>
                @endif
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('shop.create')}}" class="kt-menu__link kt-menu__toggle" data-toggle="modal" data-target="#kt_modal_6"><span class="kt-menu__link-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
                                <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                            </g>
                        </svg>
                        </span><span class="kt-menu__link-text">Supprimer l'annonce</span></a>
                </li>
                @if(auth()->user()->profile->role=="admin")
                    @if($post->is_publish)
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('annule_valide.post',$post)}}" class="kt-menu__link kt-menu__toggle" ><span class="kt-menu__link-icon">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/home/keenthemes/www/metronic/themes/metronic/theme/html/demo1/dist/../src/media/svg/icons/Code/Done-circle.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero"/>
                            </g>
                        </svg><!--end::Svg Icon--></span>
                        </span><span class="kt-menu__link-text">Annuler la validation</span></a>
                        </li>
                    @else
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('valide.post',$post)}}" class="kt-menu__link kt-menu__toggle" ><span class="kt-menu__link-icon">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/home/keenthemes/www/metronic/themes/metronic/theme/html/demo1/dist/../src/media/svg/icons/Code/Done-circle.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero"/>
                            </g>
                        </svg><!--end::Svg Icon--></span>
                        </span><span class="kt-menu__link-text">Valider l'annonce</span></a>
                        </li>
                    @endif
                @endif
                @if(auth()->user()->profile->role=="admin")
                    @if(!$post->is_publish)
                        <li class="kt-menu__item  kt-menu__item--submenu  kt-menu__item--active" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="{{route('form_valide_post',$post)}}" class="kt-menu__link kt-menu__toggle" ><span class="kt-menu__link-icon">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/home/keenthemes/www/metronic/themes/metronic/theme/html/demo1/dist/../src/media/svg/icons/Code/Done-circle.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                    <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span>
                        </span><span class="kt-menu__link-text">Refuser la validation</span></a>
                        </li>
                    @endif
                @endif
                @if(auth()->user()->profile->role=="admin")
                    <li class="kt-menu__section ">
                        <h4 class="kt-menu__section-text">Boutique</h4>
                        <i class="kt-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu " aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('shop.index')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="4" y="10" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="10" y="4" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="10" y="10" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="16" y="4" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="16" y="10" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="4" y="16" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="10" y="16" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="16" y="16" width="4" height="4" rx="2"/>
                                </g>
                            </svg>
                            </span><span class="kt-menu__link-text">Liste des boutiques</span></a>
                    </li>
                @endif
                @if(auth()->user()->profile->role=="Busness")
                    <li class="kt-menu__section ">
                        <h4 class="kt-menu__section-text">Boutique</h4>
                        <i class="kt-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('shop.create')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
                                    <rect fill="#000000"  transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/>
                                </g>
                            </svg>
                            </span><span class="kt-menu__link-text">Créer une boutique</span></a>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu " aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('shop.index')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="4" y="10" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="10" y="4" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="10" y="10" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="16" y="4" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="16" y="10" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="4" y="16" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="10" y="16" width="4" height="4" rx="2"/>
                                    <rect fill="#000000" x="16" y="16" width="4" height="4" rx="2"/>
                                </g>
                            </svg>
                            </span><span class="kt-menu__link-text">Mes boutiques</span></a>
                    </li>
                @endif
                <li class="kt-menu__section ">
                    <h4 class="kt-menu__section-text">Aide</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('how_it_work')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                    <path d="M12,16 C12.5522847,16 13,16.4477153 13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 C11,16.4477153 11.4477153,16 12,16 Z M10.591,14.868 L10.591,13.209 L11.851,13.209 C13.447,13.209 14.602,11.991 14.602,10.395 C14.602,8.799 13.447,7.581 11.851,7.581 C10.234,7.581 9.121,8.799 9.121,10.395 L7.336,10.395 C7.336,7.875 9.31,5.922 11.851,5.922 C14.392,5.922 16.387,7.875 16.387,10.395 C16.387,12.915 14.392,14.868 11.851,14.868 L10.591,14.868 Z" fill="#000000"/>
                                </g>
                            </svg>
                            </span><span class="kt-menu__link-text">Comment ça marche</span></a>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('contact')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M11.914857,14.1427403 L14.1188827,11.9387145 C14.7276032,11.329994 14.8785122,10.4000511 14.4935235,9.63007378 L14.3686433,9.38031323 C13.9836546,8.61033591 14.1345636,7.680393 14.7432841,7.07167248 L17.4760882,4.33886839 C17.6713503,4.14360624 17.9879328,4.14360624 18.183195,4.33886839 C18.2211956,4.37686904 18.2528214,4.42074752 18.2768552,4.46881498 L19.3808309,6.67676638 C20.2253855,8.3658756 19.8943345,10.4059034 18.5589765,11.7412615 L12.560151,17.740087 C11.1066115,19.1936265 8.95659008,19.7011777 7.00646221,19.0511351 L4.5919826,18.2463085 C4.33001094,18.1589846 4.18843095,17.8758246 4.27575484,17.613853 C4.30030124,17.5402138 4.34165566,17.4733009 4.39654309,17.4184135 L7.04781491,14.7671417 C7.65653544,14.1584211 8.58647835,14.0075122 9.35645567,14.3925008 L9.60621621,14.5173811 C10.3761935,14.9023698 11.3061364,14.7514608 11.914857,14.1427403 Z" fill="#000000"/>
                                </g>
                            </svg>
                            </span><span class="kt-menu__link-text">Nous contactez</span></a>
                </li>
                <li class="kt-menu__section ">
                    <h4 class="kt-menu__section-text">Yankadi Shop</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('home')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M12.6572352,10 L12.6572352,5.67013288 C12.6572352,5.25591932 12.3214488,4.92013288 11.9072352,4.92013288 C11.7235496,4.92013288 11.5462507,4.98754181 11.4089624,5.10957589 L4.25173515,11.4715556 C3.94214808,11.7467441 3.91426253,12.2207984 4.18945104,12.5303855 C4.19921056,12.541365 4.20929054,12.5520553 4.21967795,12.5624427 L11.3769052,19.7196699 C11.6697984,20.0125631 12.1446721,20.0125631 12.4375653,19.7196699 C12.5782176,19.5790176 12.6572352,19.3882522 12.6572352,19.1893398 L12.6572352,15 C14.0044226,14.9188289 16.8348635,14.9157978 21.1485581,14.9909069 L21.1485586,14.9908794 C21.424644,14.9956866 21.6523523,14.7757721 21.6571595,14.4996868 C21.65721,14.4967857 21.6572352,14.4938842 21.6572352,14.4909827 L21.6572888,10.5050185 C21.6572888,10.2288465 21.4334072,10.0049649 21.1572352,10.0049649 C21.1556184,10.0049649 21.1540016,10.0049728 21.1523849,10.0049884 C16.0216074,10.0547574 13.1898909,10.0530946 12.6572352,10 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                        </span><span class="kt-menu__link-text">Retour au site</span></a>
                </li>


            </ul>
        </div>
    </div>

@endsection
<!-- end:: Aside Menu -->
<div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="fa">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Suppression de l'annonce  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <p>Voulez-vous vraiment supprimer ce annonce</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <form action="{{route('post.destroy',$post)}}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <button  class="btn btn-danger text-white">Supprimer</button>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- begin:: Header -->
@section('Header')
    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed  justify-content-end ">

        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">

        </div>


        <!-- end:: Header Menu -->

        <!-- begin:: Header Topbar -->
        <div class="kt-header__topbar">

            <!--begin: Search -->

            <!--begin: Search -->

            <!--begin: Language bar -->

            <!--end: Language bar -->

            <!--begin: User Bar -->
            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                    <div class="kt-header__topbar-user">
                        <span class="kt-header__topbar-welcome kt-hidden-mobile">Bienvenue,</span>
                        <span class="kt-header__topbar-username kt-hidden-mobile">Keita</span>
                        <img class="kt-hidden" alt="Pic" src="{{asset('assets/media/users/300_25.jpg')}}" />

                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                        <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">S</span>
                    </div>
                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                    <!--begin: Head -->
                    <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url({{asset('assets/media/misc/bg-1.jpg')}})">
                        <div class="kt-user-card__avatar">
                            <img class="kt-hidden" alt="Pic" src="{{asset('assets/media/users/300_25.jpg')}}" />

                            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                            <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
                        </div>
                        <div class="kt-user-card__name">
                            Keita
                        </div>
                    </div>

                    <!--end: Head -->

                    <!--begin: Navigation -->
                    <div class="kt-notification">

                        <div class="kt-notification__custom kt-space-between justify-content-center">
                            <a  class="btn btn-label btn-label-brand btn-sm btn-bold" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Déconnexion') }}</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>

                    <!--end: Navigation -->
                </div>
            </div>

            <!--end: User Bar -->
        </div>

        <!-- end:: Header Topbar -->
    </div>
@endsection
<!-- end:: Header -->

<!-- begin:: Content Head -->
@section('ContentHead')
    <div class=" pr-5 pl-5 justify-content-center " >
        @if (session('message'))
            <div class="alert alert-success container row justify-content-center lead">
                {{ session('message') }}
            </div>
        @endif
    </div>
@endsection
<!-- end:: Content Head -->

<!-- begin:: Content -->
@section('Content')

    <div class="kt-container  kt-container">
        <div class="kt-portlet p-5">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-grid">
                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                        <form class="mt-2"  action="{{route('cancel_post')}}" accept-charset="UTF-8"  method="POST" enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" autocomplete="OFF" name="post_id" value="{{$post->id}}" class="form-control input-sm" required />

                            <div class="form-group">
                                <label for="exampleTextarea">Motif</label>
                                <textarea class="form-control @error('motif') is-invalid @enderror"  rows="3" name="motif">{{ old('motif') }}</textarea>
                            </div>
                            @error('motif')
                            <span class="alert alert-danger mt-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                 </span>
                            @enderror
                            <div class="form-group row justify-content-center">
                                <button type="submit"  class="btn btn-outline-primary w-auto text-uppercase text-bold btn-pill btn-elevate btn-elevate-air ">

                                    Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
<!-- end:: Content -->

@section('script')

@endsection

