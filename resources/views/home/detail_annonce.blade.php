@extends('home.layouts.app',['title'=>'Détail du produit '.$product->name])
@section('style')
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
@endsection
@section('content')


    <section style="background-color: #daf0f4">
        <div class="kt-negative-spacing--8 "  style="background-image: url({{asset('images/dashboard/ecommerce1.jpg')}}); background-size: cover;height: 600px; background-position: center;">
            <div>
                <div class="text-center" style="z-index:2;position:absolute;color:#ffffff;margin-top:200px;width:100%;">
                    <h6 class="text-dark" style="font-size: 3.5em;">Tous vos annonces</h6>
                </div>
            </div>
        </div>
        <!-- end:: Hero -->
        <div class="kt-negative-spacing--7"></div>
        <!-- begin:: Section -->
        <div class="kt-container ">
            <div class="kt-portlet">
                <div class="kt-portlet__body">
                    <div class="kt-infobox">
                        <div class="kt-infobox__body">
                            <div class="row ">
                                <aside class="col-lg-6" >
                                    <div class="card card-product">
                                        <div class="card-image " >
                                            @if($product->images)
                                                @foreach($product->images as $image)
                                                    @if ($loop->first)
                                                        <div class="col-12 mb-2 ">
                                                            <a href="{{env('AWS_URL')."/".$image->url}}" data-fancybox="1" data-caption="{{$product->name}}" >
                                                                <img src="{{env('AWS_URL')."/".$image->url}}" class="img-fluid rounded " style=" height: 450px; width: 100% !important;display: inline-block;"/>
                                                            </a>
                                                        </div>
                                                    @else
                                                        <div class="col-12 mb-2 ll">
                                                            <a href="{{env('AWS_URL')."/".$image->url}}" data-fancybox="1" data-caption="{{$product->name}}">
                                                                <img src="{{env('AWS_URL')."/".$image->url}}" class="img-fluid rounded" />
                                                            </a>
                                                        </div>
                                                    @endif
                                                @endforeach

                                            @else
                                                <div class="col-12 mb-2 ll">
                                                    <a href="{{asset('images/dashboard/keita2.jpg')}}" data-fancybox="1" data-caption="{{$product->name}}">
                                                        <img src="{{asset('images/dashboard/keita2.jpg')}}" class="img-fluid rounded" />
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </aside>
                                <aside class="card col-lg-6 p-0">
                                    <div class="card-header  kt-bg-fill-primary">
                                        <h3 class="text-center text-uppercase text-white">{{$product->name}}</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mt-4">
                                        <span class="font-weight-bold text-info" style="font-size: 15px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon ">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero"/>
                                                </g>
                                            </svg>
                                            Description
                                        </span>
                                            <p class="lead">
                                                {{$product->description}}
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                         <span class="font-weight-bold text-info " style="font-size: 15px;">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <g transform="translate(12.500000, 12.000000) rotate(-315.000000) translate(-12.500000, -12.000000) translate(6.000000, 1.000000)" fill="#000000" opacity="0.3">
                                                        <path d="M0.353553391,7.14644661 L3.35355339,7.14644661 C3.4100716,7.14644661 3.46549471,7.14175791 3.51945496,7.13274826 C3.92739876,8.3050906 5.04222146,9.14644661 6.35355339,9.14644661 C8.01040764,9.14644661 9.35355339,7.80330086 9.35355339,6.14644661 C9.35355339,4.48959236 8.01040764,3.14644661 6.35355339,3.14644661 C5.04222146,3.14644661 3.92739876,3.98780262 3.51945496,5.16014496 C3.46549471,5.15113531 3.4100716,5.14644661 3.35355339,5.14644661 L0.436511831,5.14644661 C0.912589923,2.30873327 3.3805571,0.146446609 6.35355339,0.146446609 C9.66726189,0.146446609 12.3535534,2.83273811 12.3535534,6.14644661 L12.3535534,19.1464466 C12.3535534,20.2510161 11.4581229,21.1464466 10.3535534,21.1464466 L2.35355339,21.1464466 C1.24898389,21.1464466 0.353553391,20.2510161 0.353553391,19.1464466 L0.353553391,7.14644661 Z" transform="translate(6.353553, 10.646447) rotate(-360.000000) translate(-6.353553, -10.646447) "/>
                                                        <rect x="2.35355339" y="13.1464466" width="8" height="2" rx="1"/>
                                                        <rect x="3.35355339" y="17.1464466" width="6" height="2" rx="1"/>
                                                    </g>
                                                </g>
                                             </svg>
                                             Prix
                                         </span>
                                            <p class=" font-weight-bold pl-2 pt-1 lead "> {{$product->price}} FCFA</p>
                                        </div>
                                        <div class="mt-4">
                                         <span class="font-weight-bold text-info " style="font-size: 15px;">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z" fill="#000000" opacity="0.3"/>
                                                    <path d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z" fill="#000000"/>
                                                </g>
                                             </svg>
                                             Stock
                                         </span>
                                            <p class=" font-weight-bold pl-2 pt-1 lead "> {{$product->quantity}}</p>
                                        </div>
                                        <div class="mt-4">
                                         <span class="font-weight-bold text-info " style="font-size: 15px;">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#478fcd"/>
                                                    <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z"  fill="#478fcd" />
                                                </g>
                                             </svg>
                                             Tel
                                         </span>
                                            <p class=" font-weight-bold pl-2 pt-1 lead "> {{$shop->user->phone}}</p>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Section -->
    </section>
@endsection
@section('script')
    <script type="text/javascript">
        $(function(){
            $('.ll').hide()
        });

    </script>@endsection
