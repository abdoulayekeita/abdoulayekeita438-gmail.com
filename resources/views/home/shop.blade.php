@extends('home.layouts.app',['title'=>'Boutique'])
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
                <div class="row justify-content-center">
                    @if (count($shops) === 1)
                        @foreach($shops as $shop)
                            <div class="col-md-12">
                                <div class="kt-grid-nav kt-grid-nav--skin-light">
                                    <div class="kt-grid-nav__row">
                                        <a href="{{route('shop_content',$shop)}}" class="kt-grid-nav__item pt-0">
                                                        <span class="kt-grid-nav__icon">
                                                            <img src="{{asset('storage/shop/'.$shop->image)}}" class="img-fluid  h-10"/>
                                                        </span>
                                            <span class="kt-grid-nav__title" style="color: #478fcd">{{$shop->name}}</span>
                                            <span class="kt-badge   kt-badge--inline kt-badge--pill mt-1" style="background-color: #478fcd;color: white;font-size: 15px">{{$shop->category->name}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @elseif (count($shops) > 1)
                        @foreach($shops as $shop)
                            <div class="col-md-4">
                                <div class="kt-grid-nav kt-grid-nav--skin-light">
                                    <div class="kt-grid-nav__row">
                                        <a href="{{route('shop_content',$shop)}}" class="kt-grid-nav__item pt-0">
                                            @if($shop->image)
                                                <span class="kt-grid-nav__icon">
                                                                <img src="{{env('AWS_URL')."/".$shop->url}}" class="img-fluid  h-10"/>
                                                            </span>
                                            @else
                                                <span class="kt-grid-nav__icon">
                                                                <img src="{{asset('assets/media/users/300_10.jpg')}}" class="img-fluid  h-10"/>
                                                            </span>
                                            @endif
                                            <span class="kt-grid-nav__title" style="color: #478fcd">{{$shop->name}}</span>
                                            <span class="kt-badge   kt-badge--inline kt-badge--pill mt-1" style="background-color: #478fcd;color: white;font-size: 15px">{{$shop->category->name}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-md-12" style="margin-top: 150px;">
                            <div class="text-center"><i class="fa fa-calendar fa-5x text-primary"></i></div>
                        </div>
                        <div class="col-md-12" style="margin-bottom: 150px">
                            <h1 class="text-center text-success"><p><small class="text-center">Aucune boutique disponible pour le moment</small></p></h1>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row justify-content-center pl-5">
                <div class="col-lg-3 ">
                    {{$shops->links()}}

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection

