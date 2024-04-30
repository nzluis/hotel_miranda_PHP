@extends('layout')
    @section('content')
        <section class="header">
            <div class="header__container">
                <h5>THE ULTIMATE LUXURY EXPERIENCE</h5>
                <h1>The Perfect Base For You</h1>
                <button>TAKE A TOUR</button>
                <button>LEARN MORE</button>
            </div>

        </section>
        <section class="date_checker">
            <div class="date_checker__container">
                <div class="date_checker__container__inputbox">
                    <h6>Arrival Date</h6>
                    <div class="date_checker__container__inputbox__input">
                        <img src="./assets/7853753_event_kashifarif_calendar_schedule_appoinment_icon 1.svg"
                            alt="calendar icon">
                        <input placeholder="26/02/2024" type="date" name="arrival" id="arrival">
                    </div>
                </div>
                <div class="date_checker__container__inputbox">
                    <h6>Departure Date</h6>
                    <div class="date_checker__container__inputbox__input">
                        <img src="./assets/7853753_event_kashifarif_calendar_schedule_appoinment_icon 1.svg"
                            alt="calendar icon">
                        <input placeholder="03/01/2024" type="date" name="departure" id="departure">
                    </div>
                </div>
                <button>CHECK AVAILABILITY</button>
            </div>
        </section>
        <section class="about_us">
            <div class="about_us__description">
                <h5>ABOUT US</h5>
                <h1>Discover Our Underground.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo
                    consequat.</p>
                <button>BOOK NOW</button>
            </div>
            <div class="about_us__features">
                <div class="about_us__features__feature">
                    <img class="about_us__features__feature__image teamwork" src="./assets/bzqU01v-G54.jpeg"
                        alt="team work">
                    <div class="about_us__features__feature__item strongteam">
                        <img src="./assets/svg-gobbler - 2022-03-01T200745.428 1.svg" alt="team work icon">
                        <img class="about_us__features__feature__item__back_image" src="./assets/Vector.svg"
                            alt="team work icon">
                        <h3>Strong Team</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="about_us__features__feature">
                    <img class="about_us__features__feature__image" src="./assets/miikka-a-oDCwSESwPZ4-unsplash.jpg"
                        alt="luxury room">
                    <div class="about_us__features__feature__item dark">
                        <img class="luxuryroom" src="./assets/svg-gobbler - 2022-03-01T201407.985 1.svg"
                            alt="luxury room icon">
                        <h3>Luxury Room</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="rooms">
            <h5>ROOMS</h5>
            <h1>Hand Picked Rooms</h1>
            <div class="rooms__icons">
                <img src="./assets/8725460_bed_icon 1.svg" alt="bed icon">
                <img src="./assets/925808_wifi_icon 1.svg" alt="wif icon">
                <img src="./assets/car-front.svg" alt="car icon">
                <img src="./assets/384878_cold_new year_snowflake_wheather_winter_icon 1.svg" alt="ac icon">
                <img src="./assets/9042522_gym_icon 1.svg" alt="gym icon">
                <img src="./assets/9081473_smoking_no_icon 1.svg" alt="smoke forbidden icon">
                <img src="./assets/6623006_cocktail_drink_holidays_summer_vacation_icon 1.svg" alt="drink icon">
            </div>
            <div class="rooms__slider"
                style="background-image: url(./assets/roberto-nickson-emqnSQwQQDo-unsplash.jpg);">
                <img class="rooms__slider--left" src="./assets/Left arrow.svg" alt="left arrow icon">
                <img class="rooms__slider--right" src="./assets/Frame 60.svg" alt="right arrow icon">
            </div>
            <div class="rooms__description">
                <div class="rooms__description__text">
                    <h4>Minimal Duplex Room</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore.</p>
                </div>
                <h3>$345<span>/Night</span></h3>
            </div>
        </section>
        <section class="intro_video">
            <div class="intro_video__container">
                <h5>INTRO VIDEO</h5>
                <h1>Meet With Our Luxury Place</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo
                    consequat you
                    have to understand this.</p>
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/Bu3Doe45lcU?si=2MOUTz6bS1Q240Fy&start=25&end=75"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>

                <button>BOOK NOW</button>
            </div>
        </section>
        <section class="facilities">
            <h5>FACILITIES</h5>
            <h1>Core Features</h1>
            <div class="facilities__grid">
                <div class="facilities__grid__card">
                    <div class="facilities__grid__card__img_container">
                        <img class="facilities__grid__card--rating" src="./assets/icon 1.svg" alt="rating icon">
                        <img class="facilities__grid__card--number" src="./assets/01.svg" alt="number item">
                    </div>
                    <h3>Have High Rating</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna..</p>
                </div>
                <div class="facilities__grid__card">
                    <div class="facilities__grid__card__img_container">
                        <img class="facilities__grid__card--rating" src="./assets/icon 2.svg" alt="rating icon">
                        <img class="facilities__grid__card--number" src="./assets/02.svg" alt="number item">
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
                            src="./assets/svg-gobbler - 2022-03-02T121743.699 1.svg" alt="rating icon">
                        <img class="facilities__grid__card--number" src="./assets/03.svg" alt="number item">
                    </div>
                    <h3>Best Locations</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna..</p>
                </div>
                <div class="facilities__grid__card">
                    <div class="facilities__grid__card__img_container">
                        <img class="facilities__grid__card--rating" src="./assets/icon 3.svg" alt="rating icon">
                        <img class="facilities__grid__card--number" src="./assets/04.svg" alt="number item">
                    </div>
                    <h3>Free Cancelation</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna..</p>
                </div>
                <div class="facilities__grid__card">
                    <div class="facilities__grid__card__img_container">
                        <img class="facilities__grid__card--rating" src="./assets/Vector234.svg" alt="rating icon">
                        <img class="facilities__grid__card--number" src="./assets/05.svg" alt="number item">
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
                            src="./assets/svg-gobbler - 2022-03-02T124650.380 1.svg" alt="rating icon">
                        <img class="facilities__grid__card--number" src="./assets/06.svg" alt="number item">
                    </div>
                    <h3>Special Offers</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna..</p>
                </div>
            </div>
            <div class="facilities__dots_selection">
                <img src="./assets/Ellipse 5.svg" alt="dot icon">
                <img src="./assets/Ellipse 6.svg" alt="dot icon">
                <img src="./assets/Ellipse 6.svg" alt="dot icon">
                <img src="./assets/Ellipse 6.svg" alt="dot icon">
                <img src="./assets/Ellipse 6.svg" alt="dot icon">
                <img src="./assets/Ellipse 6.svg" alt="dot icon">
            </div>
        </section>
        <section class="menu">
            <img class="menu__doughnut" src="./assets/icon 4.svg" alt="douhgnut icon">
            <h5>MENU</h5>
            <h1>Our Foods Menu</h1>
            <div class="menu__slider">
                <div class="menu__slider__container">
                    <div class="menu__slider__container__item">
                        <img src="./assets/eggs-4264639_640.jpg" alt="eggs and bacon">
                        <div class="menu__slider__container__item__description">
                            <h3>Eggs & Bacon</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__container__item">
                        <img src="./assets/monika-grabkowska-J6xcKonS4nM-unsplash.jpg" alt="tea cup">
                        <div class="menu__slider__container__item__description">
                            <h3>Tea or Coffee</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__container__item">
                        <img src="./assets/micheile-henderson-OwvydDkjynM-unsplash.jpg" alt="oatmeal">
                        <div class="menu__slider__container__item__description">
                            <h3>Chia Oatmeal</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="menu__slider__container">
                    <div class="menu__slider__container__item">
                        <img src="./assets/cocobols-ydxt6NPMs78-unsplash.jpg" alt="fruit bowl">
                        <div class="menu__slider__container__item__description">
                            <h3>Fruit Parfait</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__container__item">
                        <img src="./assets/yulia-khlebnikova-o_O75f28GiA-unsplash.jpg" alt="marmalade in a jar">
                        <div class="menu__slider__container__item__description">
                            <h3>Marmalade Selection</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__container__item">
                        <img src="./assets/tobias-QZsNoluSh6U-unsplash.jpg" alt="cheese selections">
                        <div class="menu__slider__container__item__description">
                            <h3>Cheese Selection</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="menu__pagination">
                <img class="menu__pagination__left" src="./assets/Left arrow.svg" alt="">
                <img class="menu__pagination__right" src="./assets/Frame 60.svg" alt="">
            </div>
        </section>
        <section class="slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./assets/christina-rumpf-gUU4MF87Ipw-unsplash.jpg"
                            alt="fried vegetables" /></div>
                    <div class="swiper-slide">
                        <img src="./assets/cook-2364221_640.jpg" alt="fresh food" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/meal-5921491_640.jpg" alt="salad" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="stats">
            <div class="stats__card">
                <img src="./assets/icon 5.svg" alt="rocket icon">
                <h2>84k<span>+</span></h2>
                <h5>Projects are Completed</h5>
            </div>
            <div class="stats__card">
                <img src="./assets/icon 6.svg" alt="team icon">
                <h2>10M<span>+</span></h2>
                <h5>Active Backers Around World</h5>
            </div>
            <div class="stats__card">
                <img src="./assets/icon 7.svg" alt="financial icon">
                <h2>2k<span>+</span></h2>
                <h5>Categories Served</h5>
            </div>
            <div class="stats__card">
                <img src="./assets/icon 8.svg" alt="book icon">
                <h2>100M<span>+</span></h2>
                <h5>Idea Raised Funds</h5>
            </div>
        </section>
    @stop