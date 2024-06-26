@extends('layout')
    @section('content')
    <section class="header pages headerRooms">
            <div class="header__container pages headerRooms">
                <h5>THE ULTIMATE LUXURY</h5>
                <h2>Room Details</h2>
                <h6>Home &nbsp | &nbsp<span>Room Details</span></h6>
            </div>
    </section>
    <section class="room_detail">
        <div class="room_detail__left">
            <div class="room_detail__left__photobox">
                <div class="description">
                    <div class="description__title">
                        <h3>{{strtoupper($room['room_type'])}}</h3>
                        <h2>Luxury {{$room['room_type']}}</h2>
                    </div>
                    <h5>${{$room['price']}}<span>/Night</span></h5>
                    
                </div>
                <img src="../assets/sasha-kaunas-67-sOi7mVIk-unsplash.jpg" alt="room">
            </div>
            <p>{{$room['description']}}</p>
            <div class="amenities">
                <h4>Amenities</h4>
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
            <div class="amenities">
                <h4>Cancelation</h4>
                <p>{{$room['cancelation']}}</p>
            </div>
            <h4>Related Rooms</h4>
        </div>
        <div class="room_detail__right">
            <h3>Reservation</h3>
            <form action="#">
                <label for="check_in">Check In
                </label>
                    <input type="date" name="check_in" id="check_in">
                <label for="check_out">Check Out
                </label>
                    <input type="date" name="check_out" id="check_out">
                <label for="full_name">Full Name
                </label>
                    <input type="text" name="full_name" id="full_name">
                <label for="email">Email
                </label>
                    <input type="email" name="email" id="email">
                <label for="phone">Phone
                </label>
                    <input type="number" name="phone" id="phone">
                <label for="message">Message
                </label>
                <textarea name="message" id="message" rows="12"></textarea>
                <button>Book</button>
            </form>
        </div>
    </section>
    <section class="popular_list__room_detail">
        @foreach($popularRooms as $room)
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
                        <h6><a href="/room_detail.php?id={{$room['_id']}}">Booking Now</a></h6>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@stop