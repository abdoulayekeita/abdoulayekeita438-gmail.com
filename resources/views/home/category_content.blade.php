@extends('home.layouts.app',['title'=>'Catégorie '.$subCategory->name])
@section('style')
    <link rel="stylesheet" href="{{asset('css/searchcard.css')}}">
@endsection

@section('content')


    <section style="background-color: #daf0f4">
        <div  style="background-image: url({{asset('images/dashboard/ecommerce1.jpg')}}); background-size: cover;height: 600px; background-position: center;">
            <div>
                <div class="text-center" style="z-index:2;position:absolute;color:#ffffff;margin-top:200px;width:100%;">
                    <h6 class="text-dark" style="font-size: 3.5em;">Tous vos annonces</h6>
                </div>
            </div>
        </div>
        <div class="kt-container--fluid pt-5 " style="background-color: #daf0f4" >
            <div class="kt-portlet container ">
                <div class="kt-portlet__body ">
                    <h2 class="row justify-content-center">{{$subCategory->name}}</h2>
                    @if (count($posts) === 1)
                        @foreach($posts as  $post)
                            <div class="row">
                                <a href="{{route('post_show',[$post])}}">
                                    <div class="card-media">
                                        <!-- media container -->
                                        <div class="card-media-object-container">
                                            @if($post->product->images)
                                                @foreach($post->product->images as $image)
                                                    @if ($loop->first)
                                                        <div class="card-media-object" style="background-image: url({{env('AWS_URL')."/".$image->url}});"></div>
                                                    @endif
                                                @endforeach
                                            @else
                                            @endif
                                        </div>
                                        <!-- body container -->
                                        <div class="card-media-body">
                                            <div class="card-media-body-top" style="margin-bottom: 2rem;">
                                                <span class="font-weight-bold  lead" style="color: #478fcd;font-size: 20px">{{$post->product->name}}</span>
                                                <div class="card-media-body-top-icons u-float-right">
                                                </div>
                                            </div>
                                            <span class="card-media-body-heading text-primary h-pay" style="font-size: 15px"><strong>{{$post->product->price}} FCFA</strong></span>
                                            <span class="card-media-body-heading text-success h-pay mt-4"><span class="text-dark">publier depuis 10/10/2020 </span></span>
                                            <div class="card-media-body-supporting-bottom">
                                                <span class="card-media-body-supporting-bottom-text subtle">{{$subCategory->name}} Tel: {{$post->user->phone}}</span>
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
                            <h1 class="text-center text-success"><p><small class="text-center">Aucune annonce de cette catégorie pour le moment</small></p></h1>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection




