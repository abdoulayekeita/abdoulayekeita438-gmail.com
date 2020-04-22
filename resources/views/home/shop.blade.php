@extends('home.layouts.app')
@section('style')

@endsection
@section('content')
    <div class="d-md-block" >
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/dashboard/shop3.jpg')}}" class="d-block w-100 h-100" alt="..." >
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/dashboard/ecommerce1.jpg')}}" class="d-block w-100 h-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/dashboard/ecommerce.jpg')}}" class="d-block w-100 h-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>    </div>
    <div class="kt-container--fluid pt-5 " style="background-color: #daf0f4" >
        <div class="kt-portlet container">
            <div class="kt-portlet__body ">
                <h2 class="row justify-content-center">Nos Boutiques</h2>
                <div class="row">
                    <div class="kt-grid-nav kt-grid-nav--skin-light">
                        <div class="kt-grid-nav__row">
                            <a href="{{route('content_shop')}}" class="kt-grid-nav__item pt-0">
													<span class="kt-grid-nav__icon">
                                                        <img src="{{asset('images/dashboard/cafe.jpg')}}" class="img-fluid  h-10"/>
                                                    </span>
                                <span class="kt-grid-nav__title" style="color: #478fcd">Nom du boutique</span>
                                <span class="kt-badge   kt-badge--inline kt-badge--pill mt-1" style="background-color: #478fcd;color: white;font-size: 15px">Catégorie</span>
                            </a>
                            <a href="{{route('content_shop')}}" class="kt-grid-nav__item pt-0">
													<span class="kt-grid-nav__icon">
                                                        <img src="{{asset('images/dashboard/cafe.jpg')}}" class="img-fluid  h-10"/>
                                                    </span>
                                <span class="kt-grid-nav__title" style="color: #478fcd">Nom du boutique</span>
                                <span class="kt-badge   kt-badge--inline kt-badge--pill mt-1" style="background-color: #478fcd;color: white;font-size: 15px">Catégorie</span>
                            </a>
                            <a href="{{route('content_shop')}}" class="kt-grid-nav__item pt-0">
													<span class="kt-grid-nav__icon">
                                                        <img src="{{asset('images/dashboard/cafe.jpg')}}" class="img-fluid  h-10"/>
                                                    </span>
                                <span class="kt-grid-nav__title" style="color: #478fcd">Nom du boutique</span>
                                <span class="kt-badge   kt-badge--inline kt-badge--pill mt-1" style="background-color: #478fcd;color: white;font-size: 15px">Catégorie</span>
                            </a>
                        </div>
                        <div class="kt-grid-nav__row">
                            <a href="{{route('content_shop')}}" class="kt-grid-nav__item pt-0">
													<span class="kt-grid-nav__icon">
                                                        <img src="{{asset('images/dashboard/shop3.jpg')}}" class="img-fluid  h-10"/>
                                                    </span>
                                <span class="kt-grid-nav__title" style="color: #478fcd">Nom du boutique</span>
                                <span class="kt-badge   kt-badge--inline kt-badge--pill mt-1" style="background-color: #478fcd;color: white;font-size: 15px">Catégorie</span>
                            </a>
                            <a href="{{route('content_shop')}}" class="kt-grid-nav__item pt-0">
													<span class="kt-grid-nav__icon">
                                                        <img src="{{asset('images/dashboard/open.jpg')}}" class="img-fluid  h-10"/>
                                                    </span>
                                <span class="kt-grid-nav__title" style="color: #478fcd">Nom du boutique</span>
                                <span class="kt-badge   kt-badge--inline kt-badge--pill mt-1" style="background-color: #478fcd;color: white;font-size: 15px">Catégorie</span>
                            </a>
                            <a href="{{route('content_shop')}}" class="kt-grid-nav__item pt-0">
													<span class="kt-grid-nav__icon">
                                                        <img src="{{asset('images/dashboard/shop2.png')}}" class="img-fluid  h-10"/>
                                                    </span>
                                <span class="kt-grid-nav__title" style="color: #478fcd">Nom du boutique</span>
                                <span class="kt-badge   kt-badge--inline kt-badge--pill mt-1" style="background-color: #478fcd;color: white;font-size: 15px">Catégorie</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection

