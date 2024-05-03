@extends('layout')
    @section('content')
    <section class="header pages">
            <div class="header__container pages">
                <h5>THE ULTIMATE LUXURY</h5>
                <h2>About Us</h2>
                <h6>Home &nbsp | &nbsp<span>About</span></h6>
            </div>
        </section>
        <section class="intro_about">
            <div class="intro_about__frame_container">
                <iframe width="1170" height="650" src="https://www.youtube.com/embed/Bu3Doe45lcU?si=2MOUTz6bS1Q240Fy"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <h3>Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h3>
            <div class="intro_about__wrap">
                <div class="intro_about__wrap__item">
                    <img src="../assets/icon 11.svg" alt="breakfast icon">
                    <p>BREAKFAST</p>
                </div>
                <div class="intro_about__wrap__item">
                    <img src="../assets/icon 12.svg" alt="plane icon">
                    <p>AIRPORT PICKUP</p>
                </div>
                <div class="intro_about__wrap__item">
                    <img src="../assets/svg-gobbler - 2022-03-02T161851.313 1.svg" alt="location map icon">
                    <p>CITY GUIDE</p>
                </div>
                <div class="intro_about__wrap__item">
                    <img src="../assets/svg-gobbler - 2022-03-02T162427.880 1.svg" alt="room icon">
                    <p>LUXURY ROOM</p>
                </div>
            </div>
            <div class="intro_about__restaurant_container">
                <img src="../assets/jason-leung-poI7DelFiVA-unsplash.jpg" alt="restaurant">
                <div class="intro_about__restaurant_container__description
                ">
                    <h5>RESTAURANT</h5>
                    <h2>Get Restaurant Facilities & Many Other More</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut
                        labore
                        et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                    <button>TAKE A TOUR</button>
                </div>
            </div>
        </section>

        <section class="facilities dark">
            <h5>FACILITIES</h5>
            <h1>Core Features</h1>
            <div class="facilities__grid dark">
                <div class="facilities__grid__card dark">
                    <div class="facilities__grid__card__img_container dark">
                        <img class="facilities__grid__card--rating" src="../assets/icon 1.svg" alt="rating icon">
                        <img class="facilities__grid__card--number" src="../assets/dark01.svg" alt="number item">
                    </div>
                    <h3>Have High Rating</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna..</p>
                </div>
                <div class="facilities__grid__card">
                    <div class="facilities__grid__card__img_container">
                        <img class="facilities__grid__card--rating" src="../assets/icon 2.svg" alt="rating icon">
                        <img class="facilities__grid__card--number" src="../assets/02.svg" alt="number item">
                    </div>
                    <h3>Quiet Hours</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna..</p>
                </div>
                <div class="facilities__grid__card">
                    <div class="facilities__grid__card__img_container">
                        <img class="facilities__grid__card--rating"
                            src="../assets/svg-gobbler - 2022-03-02T121743.699 1.svg" alt="rating icon">
                        <img class="facilities__grid__card--number" src="../assets/03.svg" alt="number item">
                    </div>
                    <h3>Best Locations</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna..</p>
                </div>
                <div class="facilities__grid__card">
                    <div class="facilities__grid__card__img_container">
                        <img class="facilities__grid__card--rating" src="../assets/icon 3.svg" alt="rating icon">
                        <img class="facilities__grid__card--number" src="../assets/04.svg" alt="number item">
                    </div>
                    <h3>Free Cancelation</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna..</p>
                </div>
                <div class="facilities__grid__card">
                    <div class="facilities__grid__card__img_container">
                        <img class="facilities__grid__card--rating" src="../assets/Vector234.svg" alt="rating icon">
                        <img class="facilities__grid__card--number" src="../assets/05.svg" alt="number item">
                    </div>
                    <h3>Payment Options</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna..</p>
                </div>
                <div class="facilities__grid__card">
                    <div class="facilities__grid__card__img_container">
                        <img class="facilities__grid__card--rating"
                            src="../assets/svg-gobbler - 2022-03-02T124650.380 1.svg" alt="rating icon">
                        <img class="facilities__grid__card--number" src="../assets/06.svg" alt="number item">
                    </div>
                    <h3>Special Offers</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna..</p>
                </div>
            </div>
        </section>

        <section class="counter">
            <h5>Counter</h5>
            <h1>Some Fun Facts</h1>
            <div class="counter__facts_wrapper">
                <div class="counter__facts_wrapper__fact">
                    <img src="../assets/svg-gobbler - 2022-03-03T162637.580 1.svg" alt="arrow icon">
                    <div class="counter__facts_wrapper__fact__info">
                        <h3>8000</h3>
                        <p>Happy Users</p>
                    </div>
                    <img class="info--arrow" src="../assets/arrow.svg" alt="happy user icon">
                </div>
                <div class="counter__facts_wrapper__fact">
                    <img src="../assets/svg-gobbler - 2022-03-03T162637.580 1.svg" alt="arrow icon">
                    <div class="counter__facts_wrapper__fact__info">
                        <h3>10M</h3>
                        <p>Reviews & Appeciate</p>
                    </div>
                    <img class="info--arrow" src="../assets/arrow.svg" alt="happy user icon">
                </div>
                <div class="counter__facts_wrapper__fact">
                    <img src="../assets/svg-gobbler - 2022-03-03T162637.580 1.svg" alt="arrow icon">
                    <div class="counter__facts_wrapper__fact__info">
                        <h3>100</h3>
                        <p>Country Coverage</p>
                    </div>
                    <img class="info--arrow" src="../assets/arrow.svg" alt="happy user icon">
                </div>
            </div>
            <div class="counter__swiper">
                <div class="counter__swiper__wrapper">
                    <img src="../assets/jonas-jacobsson-A4Wty8Bv414-unsplash.jpg" alt="living room">
                    <img src="../assets/husna-miskandar-FC4z3l4sUYc-unsplash.jpg" alt="happy users">
                </div>
            </div>
        </section>
@stop