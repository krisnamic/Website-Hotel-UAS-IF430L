<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Paycation | Home</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://fonts.googleap0is.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
        <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.css')}}">
        <script src="{{asset('OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js')}}"></script>
        <script src="{{asset('OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.js')}}"></script>
        <script src="{{asset('OwlCarousel2-2.3.4/test/unit/autoplay.js')}}"></script>
        @include('Template/head')
    </head>
    <body class="antialiased">
        <div class="parallax">
            <div id="group2" class="parallax__group">
                <div class="parallax__layer parallax__layer--base">
                    <img src="{{ asset('img/paycation/paycation-2.svg')}}" class="title">
                </div>
                <div class="parallax__layer parallax__layer--back"></div>
            </div>
        </div>
        <div class="menu">
            @include('Template/userNavbar')
        </div>
        
        <section class="test container">
        <h2 class="subtext1 text-center" style="margin-bottom: 0.5em;">Book a Hotel!</h2>
        <p class="text-center">Paycation is a website that gives you a curated list of high-quality hotels for your pleasure.</p>
        <div id="owl-demo" class="owl-carousel owl-theme">
            @foreach($hotel as $h)
                <div class="item"><img src="{{asset('img/hotel/'.$h->gambarHotel1)}}" style="border-radius: 10px;"/></div>
                <div class="item"><img src="{{asset('img/hotel/'.$h->gambarHotel2)}}" style="border-radius: 10px;"/></div>
                <div class="item"><img src="{{asset('img/hotel/'.$h->gambarHotel3)}}" style="border-radius: 10px;"/></div>
                <div class="item"><img src="{{asset('img/hotel/'.$h->gambarHotel4)}}" style="border-radius: 10px;"/></div>
                <div class="item"><img src="{{asset('img/hotel/'.$h->gambarHotel5)}}" style="border-radius: 10px;"/></div>
            @endforeach
        </div>
        </section>
        <section>
            <h2 class="subtext1 text-center" style="margin-top: 1em; margin-bottom: 0.5em;">Hotel Catalogue</h2>
            <div class="d-flex flex-column container">
            <div id="hotel-list">

            <div class="row">
                <div class="col-3 mt-3">
                    <div style="background-color: #9ce0ff; padding: 1rem; border-radius: 10px;">
                    <div>
                        <h6>Search:</h6>
                        <input class="form-control search" style="font-size: 17px;"/>
                    </div>

                    <div class="my-2">
                        <h6>Sort by:</h6> 
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class='btn btn-primary sort' data-sort='nama' data-default-order='asc' style="font-size: 17px;">Name</button>
                            <button type="button" class='btn btn-primary sort' data-sort='bintang' data-default-order='asc' style="font-size: 17px;">Star</button>
                            <button type="button" class='btn btn-primary sort' data-sort='lokasi' data-default-order='asc' style="font-size: 17px;">Location</button>
                        </div>
                    </div>

                    <h6>Filter by:</h6>
                    <select name="filterOpt" id="filterOpt" class="form-control filterOpt" style="font-size: 17px;">
                        <option selected disabled hidden></option>
                        <option value="star" style="font-size: 17px;">Star</option>
                        <option value="price" style="font-size: 17px;">Price</option>
                        <option value="location" style="font-size: 17px;">Location</option>
                    </select>

                    <div class="starPage">
                        <ul style="list-style-type: none; padding: 0;">
                            <li><input type="checkbox" class='filter-5star'/>                 
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                            </li>
                            <li><input type="checkbox" class='filter-45star'/>  
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star fa-stack-1x" style="color: #CECECE;"></i>
                                    <i class="fas fa-star-half checked fa-stack-1x"></i>  
                                </span>           
                            </li>
                            <li><input type="checkbox" class='filter-4star'/>                 
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star unchecked"></i>
                                </span> 
                            </li>
                            <li><input type="checkbox" class='filter-35star'/>                 
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star fa-stack-1x" style="color: #CECECE;"></i>
                                    <i class="fas fa-star-half checked fa-stack-1x"></i>  
                                </span>    
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star unchecked"></i>
                                </span> 
                            </li>
                            <li><input type="checkbox" class='filter-3star'/>                 
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star checked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star unchecked"></i>
                                </span>
                                <span class="fa-stack" style="width:1em;">     
                                    <i class="fas fa-star unchecked"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="pricePage">
                        <ul style="list-style-type: none; padding: 0;">
                            <li style="font-size: 17px;"><input type="checkbox" class='filter-1500'/> < Rp. 1.500.000</li>
                            <li style="font-size: 17px;"><input type="checkbox" class='filter-1750'/> Rp. 1.500.000 - Rp. 2.000.000</li>
                            <li style="font-size: 17px;"><input type="checkbox" class='filter-2250'/> Rp. 2.000.000 - Rp. 2.500.000</li>
                            <li style="font-size: 17px;"><input type="checkbox" class='filter-2750'/> Rp. 2.500.000 - Rp. 3.000.000</li>
                            <li style="font-size: 17px;"><input type="checkbox" class='filter-3000'/> > Rp. 3.000.000</li>
                        </ul>
                    </div>
                    
                    <div class="locationPage">
                        <ul style="list-style-type: none; padding: 0;">
                            <li style="font-size: 17px;"><input type="checkbox" class='filter-tangerang'/> Tangerang</li>
                            <li style="font-size: 17px;"><input type="checkbox" class='filter-bandung'/> Bandung</li>
                            <li style="font-size: 17px;"><input type="checkbox" class='filter-jakarta'/> Jakarta Timur</li>
                            <li style="font-size: 17px;"><input type="checkbox" class='filter-bali'/> Bali</li>
                        </ul>
                    </div>
                </div>
                </div>

                <br/><br/>
                <div class="col-9">
                    <div class="row row-cols-1" style="display: flex;">
                        <ul class="list" style="list-style-type: none; padding: 0;">
                        @foreach($hotel as $h)
                        <li>
                        <a href="/{{$h->id}}" style="color: black;">
                        <div class="card mb-3" style="width: 100%;">
                            <div class="row no-gutters">
                                <div class="col-md-6 gambar-hotel">
                                    <img style="position: relative; border-top-left-radius: 10px; border-bottom-left-radius: 10px;" src="{{asset('img/hotel/'.$h->gambarHotel1)}}" class="card-img-top" alt="hotel_image">                                   
                                    <img style="position: absolute; width: 15%; margin: 0.5em 1em;" class="shadoww" src="{{asset('img/Logo/'.$h->logoHotel.'-h-light.svg')}}" alt="hotel_image">
                                </div>
                                <div class="col-md-6">
                                <div class="card-body" style="padding: 0;">
                                    <div class="home-logo-desc d-flex flex-row align-items-center" style="margin: 0;">
                                        <div class="home-desc">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h5 class="card-title nama" style="font-size: 1.35em; text-shadow: 1px 0 0 black;">{{$h->namaHotel}}</h5><br/>
                                                    <p class="mb-0 mt-2" style="font-size: 0.9em;">Rating :
                                                    @php $rating = $h->bintang; @endphp
                                                    @foreach(range(1,5) as $i)
                                                    <span class="fa-stack" style="width:1em">
                                                        <i class="fas fa-star fa-stack-1x" style="color: #CECECE;"></i>
                                                        @if($rating >0)
                                                        @if($rating >0.5)
                                                        <i class="fas fa-star checked fa-stack-1x"></i>
                                                        @else
                                                        <i class="fas fa-star-half checked fa-stack-1x"></i>
                                                        @endif
                                                        @endif
                                                        @php $rating--; @endphp
                                                    </span>
                                                    @endforeach
                                                    </p>
                                                    <p class="card-text py-0 mt-1 mb-0" style="font-size: 0.9em;">Price : {{$h->hargaKamar}}</p>
                                                    <p class="card-text py-0 mt-1 mb-0" style="font-size: 0.9em;">Available Rooms : {{$h->stokKamar}}</p>
                                                </div>
                                                <div class="col-4 d-flex justify-content-end">
                                                    <div class="home-logo">
                                                        <img src="{{asset('img/Logo/'.$h->logoHotel.'-v.svg')}}" alt="hotel_image">
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="bintang" hidden>{{$h->bintang}}</p>
                                            <p class="harga" hidden>{{$h->hargaKamar}}</p><hr/>
                                                <p class="card-text pt-2 m-0" style="text-align: justify; text-justify: inter-word; font-size: 0.9em;">{{$h->deskripsiHotel}}</p>
                                                <div class="d-flex justify-content-end">
                                                    <p class="card-text text-muted small lokasi pt-3">{{$h->lokasi}}</p>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        </li>
                        @endforeach
                        </ul>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pantai -->

        

        @include('Template/footer')
        <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    items : 3,
                    lazyLoad : true,
                    navigation : true,
                    autoplayTimeout:3000
                });
                $('.owl-carousel').trigger('play.owl.autoplay',[3000])
            });
        </script>
        <script>
            $('select.filterOpt').change(function(){
                var selectedOpt = $(this).children("option:selected").val();

                if ( selectedOpt == "star" ) {
                    hotelList.filter();
                    $('.starPage').css("display", "inline-block");
                    $('.pricePage').css("display", "none");
                    $('.locationPage').css("display", "none");
                    $('.filter-1500').prop("checked", false);
                    $('.filter-1500').removeClass('selected');
                    $('.filter-1750').prop("checked", false);
                    $('.filter-1750').removeClass('selected');
                    $('.filter-2250').prop("checked", false);
                    $('.filter-2250').removeClass('selected');
                    $('.filter-2750').prop("checked", false);
                    $('.filter-2750').removeClass('selected');
                    $('.filter-3000').prop("checked", false);
                    $('.filter-3000').removeClass('selected');
                    $('.filter-tangerang').prop("checked", false);
                    $('.filter-tangerang').removeClass('selected');
                    $('.filter-bandung').prop("checked", false);
                    $('.filter-bandung').removeClass('selected');
                    $('.filter-jakarta').prop("checked", false);
                    $('.filter-jakarta').removeClass('selected');
                    $('.filter-bali').prop("checked", false);
                    $('.filter-bali').removeClass('selected');
                } else if ( selectedOpt == "price" ) {
                    hotelList.filter();
                    $('.pricePage').css("display", "inline-block");
                    $('.starPage').css("display", "none");
                    $('.locationPage').css("display", "none");
                    $('.filter-5star').prop("checked", false);
                    $('.filter-5star').removeClass('selected');
                    $('.filter-45star').prop("checked", false);
                    $('.filter-45star').removeClass('selected');
                    $('.filter-4star').prop("checked", false);
                    $('.filter-4star').removeClass('selected');
                    $('.filter-35star').prop("checked", false);
                    $('.filter-35star').removeClass('selected');
                    $('.filter-3star').prop("checked", false);
                    $('.filter-3star').removeClass('selected');
                    $('.filter-tangerang').prop("checked", false);
                    $('.filter-tangerang').removeClass('selected');
                    $('.filter-bandung').prop("checked", false);
                    $('.filter-bandung').removeClass('selected');
                    $('.filter-jakarta').prop("checked", false);
                    $('.filter-jakarta').removeClass('selected');
                    $('.filter-bali').prop("checked", false);
                    $('.filter-bali').removeClass('selected');
                } else if ( selectedOpt == "location" ) {
                    hotelList.filter();
                    $('.locationPage').css("display", "inline-block");
                    $('.starPage').css("display", "none");
                    $('.pricePage').css("display", "none");
                    $('.filter-5star').prop("checked", false);
                    $('.filter-5star').removeClass('selected');
                    $('.filter-45star').prop("checked", false);
                    $('.filter-45star').removeClass('selected');
                    $('.filter-4star').prop("checked", false);
                    $('.filter-4star').removeClass('selected');
                    $('.filter-35star').prop("checked", false);
                    $('.filter-35star').removeClass('selected');
                    $('.filter-3star').prop("checked", false);
                    $('.filter-3star').removeClass('selected');
                    $('.filter-1500').prop("checked", false);
                    $('.filter-1500').removeClass('selected');
                    $('.filter-1750').prop("checked", false);
                    $('.filter-1750').removeClass('selected');
                    $('.filter-2250').prop("checked", false);
                    $('.filter-2250').removeClass('selected');
                    $('.filter-2750').prop("checked", false);
                    $('.filter-2750').removeClass('selected');
                    $('.filter-3000').prop("checked", false);
                    $('.filter-3000').removeClass('selected');
                }
            });

            var options = {
                valueNames: ['nama', 'bintang', 'harga', 'lokasi']
            };

            var hotelList = new List('hotel-list', options);

            $('.filter-5star').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().bintang == 5);
                    });
                    $(this).addClass('selected');
                    $('.filter-45star').prop("checked", false);
                    $('.filter-45star').removeClass('selected');
                    $('.filter-4star').prop("checked", false);
                    $('.filter-4star').removeClass('selected');
                    $('.filter-35star').prop("checked", false);
                    $('.filter-35star').removeClass('selected');
                    $('.filter-3star').prop("checked", false);
                    $('.filter-3star').removeClass('selected');
                }
            }); 
            $('.filter-45star').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().bintang == 4.5);
                    });
                    $(this).addClass('selected');
                    $('.filter-5star').prop("checked", false);
                    $('.filter-5star').removeClass('selected');
                    $('.filter-4star').prop("checked", false);
                    $('.filter-4star').removeClass('selected');
                    $('.filter-35star').prop("checked", false);
                    $('.filter-35star').removeClass('selected');
                    $('.filter-3star').prop("checked", false);
                    $('.filter-3star').removeClass('selected');
                }
            }); 
            $('.filter-4star').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().bintang == 4);
                    });
                    $(this).addClass('selected');
                    $('.filter-5star').prop("checked", false);
                    $('.filter-5star').removeClass('selected');
                    $('.filter-45star').prop("checked", false);
                    $('.filter-45star').removeClass('selected');
                    $('.filter-35star').prop("checked", false);
                    $('.filter-35star').removeClass('selected');
                    $('.filter-3star').prop("checked", false);
                    $('.filter-3star').removeClass('selected');
                }
            }); 
            $('.filter-35star').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().bintang == 3.5);
                    });
                    $(this).addClass('selected');
                    $('.filter-5star').prop("checked", false);
                    $('.filter-5star').removeClass('selected');
                    $('.filter-45star').prop("checked", false);
                    $('.filter-45star').removeClass('selected');
                    $('.filter-4star').prop("checked", false);
                    $('.filter-4star').removeClass('selected');
                    $('.filter-3star').prop("checked", false);
                    $('.filter-3star').removeClass('selected');
                }
            }); 
            $('.filter-3star').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().bintang == 3);
                    });
                    $(this).addClass('selected');
                    $('.filter-5star').prop("checked", false);
                    $('.filter-5star').removeClass('selected');
                    $('.filter-45star').prop("checked", false);
                    $('.filter-45star').removeClass('selected');
                    $('.filter-4star').prop("checked", false);
                    $('.filter-4star').removeClass('selected');
                    $('.filter-35star').prop("checked", false);
                    $('.filter-35star').removeClass('selected');
                }
            }); 
            

            $('.filter-1500').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().harga < 1500000);
                    });
                    $(this).addClass('selected');
                    $('.filter-1750').prop("checked", false);
                    $('.filter-1750').removeClass('selected');
                    $('.filter-2250').prop("checked", false);
                    $('.filter-2250').removeClass('selected');
                    $('.filter-2750').prop("checked", false);
                    $('.filter-2750').removeClass('selected');
                    $('.filter-3000').prop("checked", false);
                    $('.filter-3000').removeClass('selected');
                }
            }); 
            $('.filter-1750').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().harga >= 1500000 && item.values().harga <= 2000000);
                    });
                    $(this).addClass('selected');
                    $('.filter-1500').prop("checked", false);
                    $('.filter-1500').removeClass('selected');
                    $('.filter-2250').prop("checked", false);
                    $('.filter-2250').removeClass('selected');
                    $('.filter-2750').prop("checked", false);
                    $('.filter-2750').removeClass('selected');
                    $('.filter-3000').prop("checked", false);
                    $('.filter-3000').removeClass('selected');
                }
            });  
            $('.filter-2250').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().harga >= 2000000 && item.values().harga <= 2500000);
                    });
                    $(this).addClass('selected');
                    $('.filter-1500').prop("checked", false);
                    $('.filter-1500').removeClass('selected');
                    $('.filter-1750').prop("checked", false);
                    $('.filter-1750').removeClass('selected');
                    $('.filter-2750').prop("checked", false);
                    $('.filter-2750').removeClass('selected');
                    $('.filter-3000').prop("checked", false);
                    $('.filter-3000').removeClass('selected');
                }
            });  
            $('.filter-2750').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().harga >= 2500000 && item.values().harga <= 3000000);
                    });
                    $(this).addClass('selected');
                    $('.filter-1500').prop("checked", false);
                    $('.filter-1500').removeClass('selected');
                    $('.filter-1750').prop("checked", false);
                    $('.filter-1750').removeClass('selected');
                    $('.filter-2250').prop("checked", false);
                    $('.filter-2250').removeClass('selected');
                    $('.filter-3000').prop("checked", false);
                    $('.filter-3000').removeClass('selected');
                }
            }); 
            $('.filter-3000').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().harga > 3000000);
                    });
                    $(this).addClass('selected');
                    $('.filter-1500').prop("checked", false);
                    $('.filter-1500').removeClass('selected');
                    $('.filter-1750').prop("checked", false);
                    $('.filter-1750').removeClass('selected');
                    $('.filter-2250').prop("checked", false);
                    $('.filter-2250').removeClass('selected');
                    $('.filter-2750').prop("checked", false);
                    $('.filter-2750').removeClass('selected');
                }
            }); 
        
            
            $('.filter-tangerang').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().lokasi == "Tangerang");
                    });
                    $(this).addClass('selected');
                    $('.filter-bandung').prop("checked", false);
                    $('.filter-bandung').removeClass('selected');
                    $('.filter-jakarta').prop("checked", false);
                    $('.filter-jakarta').removeClass('selected');
                    $('.filter-bali').prop("checked", false);
                    $('.filter-bali').removeClass('selected');
                }
            }); 
            $('.filter-bandung').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().lokasi == "Bandung");
                    });
                    $(this).addClass('selected');
                    $('.filter-tangerang').prop("checked", false);
                    $('.filter-tangerang').removeClass('selected');
                    $('.filter-jakarta').prop("checked", false);
                    $('.filter-jakarta').removeClass('selected');
                    $('.filter-bali').prop("checked", false);
                    $('.filter-bali').removeClass('selected');
                }
            }); 
            $('.filter-jakarta').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().lokasi == "Jakarta Timur");
                    });
                    $(this).addClass('selected');
                    $('.filter-tangerang').prop("checked", false);
                    $('.filter-tangerang').removeClass('selected');
                    $('.filter-bandung').prop("checked", false);
                    $('.filter-bandung').removeClass('selected');
                    $('.filter-bali').prop("checked", false);
                    $('.filter-bali').removeClass('selected');
                }
            }); 
            $('.filter-bali').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().lokasi == "Bali");
                    });
                    $(this).addClass('selected');
                    $('.filter-tangerang').prop("checked", false);
                    $('.filter-tangerang').removeClass('selected');
                    $('.filter-bandung').prop("checked", false);
                    $('.filter-bandung').removeClass('selected');
                    $('.filter-jakarta').prop("checked", false);
                    $('.filter-jakarta').removeClass('selected');
                }
            }); 
        </script>
        <script>
            $(window).scroll(function() {
                var sticky = $('.menu'), scroll = $(window).scrollTop(); 
                var text = $('.test');
                
                if (scroll >= window.innerHeight) { 
                    sticky.addClass('fixed'); 
                    text.css('margin-top', '14.5rem');
                    sticky.css('width', '100%');
                } else { 
                    sticky.removeClass('fixed');
                    text.css('margin-top', '2rem');
                    sticky.css('width', '');
                }
            });
        </script>     
        <!-- Bootstrap 4 -->
        <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
    </body>
</html>