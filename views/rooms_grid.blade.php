@extends('layout')
    @section('content')
        <section class="header pages headerRooms">
            <div class="header__container pages headerRooms">
                <h5>THE ULTIMATE LUXURY</h5>
                <h2>Ultimate Room</h2>
                <h6>Home &nbsp | &nbsp <span>Rooms</span></h6>
            </div>
        </section>
        <section class="rooms_grid">
            <div class="rooms_grid__wrapper">
                @foreach($rooms as $room)
                <div class="rooms_grid__wrapper__item">
                    <div class="item_slider"
                        style="background-image: url(../assets/sasha-kaunas-67-sOi7mVIk-unsplash.jpg);">
                    </div>
                    <div class="item_description">
                        <div class="item_description__icons">
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
                        <div class="item_description__text">
                            <h4>{{$room['room_type']}}</h4>
                            <p>{{substr($room['description'],0,75)}}</p>
                            <h3>${{$room['price']}}/Night</h3>
                            <h6><a href="/room_detail.php?id=<?php $room['_ id']?>">Booking Now</a></h6>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="rooms_grid__pagination">
                    <div class="left_arrow">
                        <img src="../assets/1031524_arrow_arrows_double arrow_doublechevronleft_left_icon (1) 1.svg"
                            alt="left arrow icon">
                    </div>
                    <p>1</p>
                    <p>2</p>
                    <p>3</p>
                    <div class="right_arrow">
                        <img src="../assets/1031524_arrow_arrows_double arrow_doublechevronleft_left_icon (1) 1(1).svg"
                            alt="right arrow icon">
                    </div>
                </div> -->
        </section>
@stop