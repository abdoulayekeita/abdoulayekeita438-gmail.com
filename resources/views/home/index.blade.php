@extends('home.layouts.app',['title'=>''])
@section('style')
    <link href="css/carousel_card.css" rel="stylesheet" type="text/css" >

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
                                                                @foreach($categorys as $category)
                                                                    @if ($loop->iteration < 5)
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
                                                                            {{$category->name}}</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                                            </h3>
                                                                            <ul class="kt-menu__inner">
                                                                                @foreach($category->subCategorys as $subCategory)
                                                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('category',$subCategory->id)}}" class="kt-menu__link "><span class="kt-menu__link-text">{{$subCategory->name}}</span></a></li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </li>
                                                                    @else
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                            <ul class="kt-menu__content">
                                                                @foreach($categorys as $category)
                                                                    @if ($loop->iteration > 4 && $loop->iteration < 9)
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
                                                                            {{$category->name}}</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                                            </h3>
                                                                            <ul class="kt-menu__inner">
                                                                                @foreach($category->subCategorys as $subCategory)
                                                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('category',$subCategory->id)}}" class="kt-menu__link "><span class="kt-menu__link-text">{{$subCategory->name}}</span></a></li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </li>
                                                                    @else
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                            <ul class="kt-menu__content">
                                                                @foreach($categorys as $category)
                                                                    @if ($loop->iteration > 8 && $loop->iteration <= 12)
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
                                                                            {{$category->name}}</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                                            </h3>
                                                                            <ul class="kt-menu__inner">
                                                                                @foreach($category->subCategorys as $subCategory)
                                                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('category',$subCategory->id)}}" class="kt-menu__link "><span class="kt-menu__link-text">{{$subCategory->name}}</span></a></li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </li>
                                                                    @else
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <form  action="{{route('home_search.post')}}" method="POST" >
                                            {{ csrf_field() }}
                                            <div class="form-group ">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Que recherche vous?" name="query">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach($categorys as $category)
                                        @if ($loop->iteration < 5)
                                            <div class="col-lg-3 mb-2">
                                                <div class="accordion  accordion-toggle-arrow" id="accordionExample{{$category->id}}">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne{{$category->id}}">
                                                            <div class="card-title" data-toggle="collapse" data-target="#collapseOne{{$category->id}}" aria-expanded="true" aria-controls="collapseOne{{$category->id}}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"/>
                                                                        <polygon fill="#000000" opacity="0.3" points="6 7 6 15 18 15 18 7"/>
                                                                        <path d="M11,19 L11,16 C11,15.4477153 11.4477153,15 12,15 C12.5522847,15 13,15.4477153 13,16 L13,19 L14.5,19 C14.7761424,19 15,19.2238576 15,19.5 C15,19.7761424 14.7761424,20 14.5,20 L9.5,20 C9.22385763,20 9,19.7761424 9,19.5 C9,19.2238576 9.22385763,19 9.5,19 L11,19 Z" fill="#000000" opacity="0.3"/>
                                                                        <path d="M6,7 L6,15 L18,15 L18,7 L6,7 Z M6,5 L18,5 C19.1045695,5 20,5.8954305 20,7 L20,15 C20,16.1045695 19.1045695,17 18,17 L6,17 C4.8954305,17 4,16.1045695 4,15 L4,7 C4,5.8954305 4.8954305,5 6,5 Z" fill="#000000" fill-rule="nonzero"/>
                                                                    </g>
                                                                </svg>
                                                                {{$category->name}}
                                                            </div>
                                                        </div>
                                                        <div id="collapseOne{{$category->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample{{$category->id}}">
                                                            <div class="card-body">
                                                                <ul>
                                                                    @foreach($category->subCategorys as $subCategory)
                                                                        <li>
                                                                            <a href="{{route('category',$subCategory->id)}}">
                                                                                <span>{{$subCategory->name}}</span>
                                                                            </a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="row">
                                    @foreach($categorys as $category)
                                        @if ($loop->iteration > 4 && $loop->iteration < 9)
                                            <div class="col-lg-3 mb-2">
                                                <div class="accordion  accordion-toggle-arrow" id="accordionExample{{$category->id}}">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne{{$category->id}}">
                                                            <div class="card-title" data-toggle="collapse" data-target="#collapseOne{{$category->id}}" aria-expanded="true" aria-controls="collapseOne{{$category->id}}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"/>
                                                                        <polygon fill="#000000" opacity="0.3" points="6 7 6 15 18 15 18 7"/>
                                                                        <path d="M11,19 L11,16 C11,15.4477153 11.4477153,15 12,15 C12.5522847,15 13,15.4477153 13,16 L13,19 L14.5,19 C14.7761424,19 15,19.2238576 15,19.5 C15,19.7761424 14.7761424,20 14.5,20 L9.5,20 C9.22385763,20 9,19.7761424 9,19.5 C9,19.2238576 9.22385763,19 9.5,19 L11,19 Z" fill="#000000" opacity="0.3"/>
                                                                        <path d="M6,7 L6,15 L18,15 L18,7 L6,7 Z M6,5 L18,5 C19.1045695,5 20,5.8954305 20,7 L20,15 C20,16.1045695 19.1045695,17 18,17 L6,17 C4.8954305,17 4,16.1045695 4,15 L4,7 C4,5.8954305 4.8954305,5 6,5 Z" fill="#000000" fill-rule="nonzero"/>
                                                                    </g>
                                                                </svg>
                                                                {{$category->name}}
                                                            </div>
                                                        </div>
                                                        <div id="collapseOne{{$category->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample{{$category->id}}">
                                                            <div class="card-body">
                                                                <ul>
                                                                    @foreach($category->subCategorys as $subCategory)
                                                                        <li>
                                                                            <a href="{{route('category',$subCategory->id)}}">
                                                                                <span>{{$subCategory->name}}</span>
                                                                            </a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="row">
                                    @foreach($categorys as $category)
                                        @if ($loop->iteration > 8 && $loop->iteration <= 12)
                                            <div class="col-lg-3 mb-2">
                                                <div class="accordion  accordion-toggle-arrow" id="accordionExample{{$category->id}}">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne{{$category->id}}">
                                                            <div class="card-title" data-toggle="collapse" data-target="#collapseOne{{$category->id}}" aria-expanded="true" aria-controls="collapseOne{{$category->id}}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon mr-2">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"/>
                                                                        <polygon fill="#000000" opacity="0.3" points="6 7 6 15 18 15 18 7"/>
                                                                        <path d="M11,19 L11,16 C11,15.4477153 11.4477153,15 12,15 C12.5522847,15 13,15.4477153 13,16 L13,19 L14.5,19 C14.7761424,19 15,19.2238576 15,19.5 C15,19.7761424 14.7761424,20 14.5,20 L9.5,20 C9.22385763,20 9,19.7761424 9,19.5 C9,19.2238576 9.22385763,19 9.5,19 L11,19 Z" fill="#000000" opacity="0.3"/>
                                                                        <path d="M6,7 L6,15 L18,15 L18,7 L6,7 Z M6,5 L18,5 C19.1045695,5 20,5.8954305 20,7 L20,15 C20,16.1045695 19.1045695,17 18,17 L6,17 C4.8954305,17 4,16.1045695 4,15 L4,7 C4,5.8954305 4.8954305,5 6,5 Z" fill="#000000" fill-rule="nonzero"/>
                                                                    </g>
                                                                </svg>
                                                                {{$category->name}}
                                                            </div>
                                                        </div>
                                                        <div id="collapseOne{{$category->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample{{$category->id}}">
                                                            <div class="card-body">
                                                                <ul>
                                                                    @foreach($category->subCategorys as $subCategory)
                                                                        <li>
                                                                            <a href="{{route('category',$subCategory->id)}}">
                                                                                <span>{{$subCategory->name}}</span>
                                                                            </a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-3 pl-5">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner row w-100 justify-content-center">
                                @if(count($posts)>1)
                                    @foreach($posts as  $post)
                                        @if($loop->first)
                                            <div class="carousel-item col-lg-4 active" >
                                                <a href="{{route('post_show',$post)}}">
                                                    <div class="card" >
                                                        @if($post->product->images)
                                                            @foreach($post->product->images as $image)
                                                                @if ($loop->first)
                                                                    <img src="{{asset('storage/'.$image->url)}}" class="img-fluid rounded " style=" height: 250px; width: 100% !important;display: inline-block;"/>
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            <img src="{{asset('images/dashboard/keita1.jpg')}}" class="img-fluid rounded " style=" height: 250px; width: 100% !important;display: inline-block;"/>
                                                        @endif
                                                        <div class="card-body " style="height: 150px">
                                                            <h4 class="card-title">{{$post->product->name}} {{$post->product->price}} FCFA</h4>
                                                            <p class="card-text">{{Str::limit($post->product->description,80,'....')}}</p>
                                                            <p class="card-text"><small class="text-muted">Publier il y a 3 min</small></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @else
                                            <div class="carousel-item col-lg-4 " >
                                                <a href="{{route('post_show',$post)}}">
                                                    <div class="card" >
                                                        @if($post->product->images)
                                                            @foreach($post->product->images as $image)
                                                                @if ($loop->first)
                                                                    <img src="{{asset('storage/'.$image->url)}}" class="img-fluid rounded " style=" height: 250px; width: 100% !important;display: inline-block;"/>
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            <img src="{{asset('images/dashboard/keita1.jpg')}}" class="img-fluid rounded " style=" height: 250px; width: 100% !important;display: inline-block;"/>
                                                        @endif
                                                        <div class="card-body " style="height: 150px">
                                                            <h4 class="card-title">{{$post->product->name}} {{$post->product->price}} FCFA</h4>
                                                            <p class="card-text">{{Str::limit($post->product->description,80,'....')}}</p>
                                                            <p class="card-text"><small class="text-muted">Publier il y a 3 min</small></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
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
    <script src="js/carousel_card.js"></script>
@endsection
