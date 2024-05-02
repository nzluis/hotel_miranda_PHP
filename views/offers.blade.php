@extends('layout')
    @section('content')
        <section class="header pages">
            <div class="header__container pages">
                <h5>THE ULTIMATE LUXURY</h5>
                <h2>Our Offers</h2>
                <h6>Home&#160&#160|&#160&#160<span>Offers</span></h6>
            </div>
        </section>

        <section class="offers">
            @foreach ($offeredRooms as $room)
                <div class="offers__room">
                    <div class="offers__room__image_container"><img
                            src="../assets/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="room" />
                        <h4 class="offers__room--before">${{$room['price']}}<span>/Night</span></h4>
                        <h4 class="offers__room--after">${{intval(intval($room['price']) * (1 - ($room['discount']/100)))}}<span>/Night</span></h4>
                    </div>
                    <div class="offers__room__description">
                        <h5>{{$room['room_type']}}</h5>
                        <h3>Luxury {{$room['room_type']}}</h3>
                        <div class="offers__room__description__text">
                            <p>{{$room['description']}}</p>
                            <ul>
                                <li><img src="../assets/svg-gobbler - 2022-03-03T180356.761 1.svg" alt="icon" />Air
                                    conditioner
                                </li>
                                <li><img src="../assets/svg-gobbler - 2022-03-03T180356.761 1.svg" />Breakfast</li>
                                <li><img src="../assets/svg-gobbler - 2022-03-03T180356.761 1.svg" />Cleaning</li>
                                <li><img src="../assets/svg-gobbler - 2022-03-03T180356.761 1.svg" />Grocery</li>
                                <li><img src="../assets/svg-gobbler - 2022-03-03T180356.761 1.svg" />Shop near</li>
                                <li><img src="../assets/svg-gobbler - 2022-03-03T180356.761 1.svg" />High speed WiFi</li>
                                <li><img src="../assets/svg-gobbler - 2022-03-03T180356.761 1.svg" />Kitchen</li>
                                <li><img src="../assets/svg-gobbler - 2022-03-03T180356.761 1.svg" />Shower</li>
                                <li><img src="../assets/svg-gobbler - 2022-03-03T180356.761 1.svg" />Single Bed</li>
                                <li><img src="../assets/svg-gobbler - 2022-03-03T180356.761 1.svg" />Towels</li>
                            </ul>
                        </div>
                        <button>BOOK NOW</button>
                    </div>
                </div>
            @endforeach
        </section>
        
        <section class="popular_list">
            <div class="popular_list__wrapper">
                <h5>POPULAR LIST</h5>
                <h1>Popular Rooms</h1>
                @foreach($cheapestRooms as $room)
                    <div class="popular_list__wrapper__container">
                        <div class="popular_list__wrapper__container__item">
                            <div class="popular_list__wrapper__container__item__slider offer">
                                <img src="../assets/sasha-kaunas-67-sOi7mVIk-unsplash.jpg" alt="room">
                            </div>
                            <div class="popular_list__wrapper__container__item__description">
                            <div class="popular_list__wrapper__container__item__description__icons">
                                <img src="../assets/8725460_bed_icon 1.svg" alt="bed icon">
                                <img src="../assets/925808_wifi_icon 1.svg" alt="wif icon">
                                <img src="../assets/car-front.svg" alt="car icon">
                                <img src="../assets/384878_cold_new year_snowflake_wheather_winter_icon 1.svg"
                                    alt="ac icon">
                                <img src="../assets/9042522_gym_icon 1.svg" alt="gym icon">
                                <img src="../assets/9081473_smoking_no_icon 1.svg" alt="smoke forbidden icon">
                                <img src="../assets/6623006_cocktail_drink_holidays_summer_vacation_icon 1.svg"
                                    alt="drink icon">
                            </div>
                            <div class="popular_list__wrapper__container__item__description__text">
                                <h4>{{$room['room_type']}}</h4>
                                <p>{{substr($room['description'], 0, 120)}}</p>
                                <h3>{{$room['price']}}/Night</h3>
                                <h6>Booking Now</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
@stop