@extends('home.layouts.app',['title'=>'Boutique '.$shop->name])
@section('style')
    <link rel="stylesheet" href="{{asset('css/searchcard.css')}}">
    <link rel="stylesheet" href="{{asset('css/shop.css')}}">
    <style>
        nav {

            background: white !important;

        }


    </style>
@endsection

@section('content')

    <section style="background-color: white">

        <div class="container-fluid " style="margin-top: 69px " >
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">

                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1"><img src="{{env('AWS_URL')."/".$shop->url}}" style=" height: 250px; width: 100% !important;display: inline-block;"/></div>
                                <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                                <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                                <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                                <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
                            </div>

                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">{{$shop->name}}</h3>
                            <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="review-no" style="font-size: 15px">Créer {{$shop->created_at->diffForHumans()}}</span>
                            </div>
                            <p class="product-description">{{$shop->description}}</p>

                            <h5 class="colors"><span class="mb-1">Page des reseaux sociaux</span><br>
                                <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                                <span class="color green"></span>
                                <span class="color blue"></span>
                            </h5>
                            <div class="action">
                                <p style="font-size: 20px;font-weight: bold">
                                   Partager la boutique
                                </p>
                                <script type="text/javascript"
                                        src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dd7bf09004169f0"></script>
                                <div class="addthis_inline_share_toolbox mt-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="kt-container--fluid pt-2 " style="background-color: white" >
            <div class="kt-portlet container ">
                <div class="kt-portlet__body ">
                    <h2 class="row justify-content-center">{{$shop->name}}</h2>
                    @if(count($products) >= 1)
                        @foreach($products as $product)
                            <div class="row">
                                <a href="{{route('shop_show',[$shop,$product])}}">
                                    <div class="card-media">
                                        <!-- media container -->
                                        <div class="card-media-object-container">
                                            @if($product->images)
                                                @foreach($product->images as $image)
                                                    @if ($loop->first)
                                                        <div class="card-media-object" style="background-image: url({{asset('storage/'.$image->url)}});"></div>
                                                    @endif
                                                @endforeach

                                            @else
                                                <div class="card-media-object" style="background-image: url({{asset('images/dashboard/ecommerce1.jpg')}});"></div>
                                            @endif
                                        </div>
                                        <!-- body container -->
                                        <div class="card-media-body">
                                            <div class="card-media-body-top" style="margin-bottom: 2rem;">
                                                <span class="font-weight-bold  lead" style="color: #478fcd;font-size: 20px">{{$product->name}}</span>
                                                <div class="card-media-body-top-icons u-float-right">
                                                </div>
                                            </div>
                                            <span class="card-media-body-heading text-primary h-pay" style="font-size: 15px"><strong>{{$product->price}} FCFA</strong></span>
                                            <span class="card-media-body-heading text-success h-pay mt-4"><span class="text-dark">publier depuis 10/10/2020 </span></span>
                                            <div class="card-media-body-supporting-bottom">
                                                <span class="card-media-body-supporting-bottom-text subtle">{{$product->subCategory->name}}</span>
                                            </div>
                                            <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                                                <br>
                                                <a href="" class="card-media-body-supporting-bottom-text card-media-link u-float-right">En savoir plus</a>
                                            </div>
                                        </div>{{--        <span class="card-media-body-supporting-bottom-text mt-2 text-primary">#Music #Party</span>--}}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="col-md-12" style="margin-top: 150px;">
                            <div class="text-center"><i class="fa fa-calendar fa-5x text-primary"></i></div>
                        </div>
                        <div class="col-md-12" style="margin-bottom: 150px">
                            <h1 class="text-center text-success"><p><small class="text-center">Aucun produit ajouter dans cette pour le moment</small></p></h1>
                        </div>
                    @endif
                </div>
                <div class="row justify-content-center">
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </section>
@endsection




