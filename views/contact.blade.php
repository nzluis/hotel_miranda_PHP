@extends('layout')
    @section('content')
        <section class="header pages">
            <div class="header__container pages">
                <h5>THE ULTIMATE LUXURY</h5>
                <h2>New Details</h2>
                <h6>Home &nbsp | &nbsp<span>Blog</span></h6>
            </div>
        </section>
        <section class="new_details">
            <div class="new_details__contact_info">
                <div class="new_details__contact_info__card">
                    <img class="image_icon" src="../assets/icon 10.svg" alt="" />
                    <div class="description">
                        <h4>Hotel Address</h4>
                        <p>31th Princesa Street, 2th floor <br> Madrid, Spain</p>
                    </div>
                    <img class="image_back" src="../assets/light01.svg" alt="" />
                </div>
                <div class="new_details__contact_info__card">
                    <img class="image_icon" src="../assets/Group.svg" alt="" />
                    <div class="description">
                        <h4>Phone Number</h4>
                        <p>+34 916679988 <br> +34 658208836</p>
                    </div>
                    <img class="image_back" src="../assets/light02.svg" alt="" />
                </div>
                <div class="new_details__contact_info__card">
                    <img class="image_icon" src="../assets/icon 9.svg" alt="" />
                    <div class="description">
                        <h4>Email</h4>
                        <p>luisnavarrofs@gmail.com <br> contacto@oxygenacademy.es</p>
                    </div>
                    <img class="image_back" src="../assets/light03.svg" alt="" />
                </div>
            </div>
            <img class="image_map" src="../assets/yhNVwsKTSaI.jpeg" alt="map">
            <form action="#">
                <div class="wrapper">
                    <div class="form_left">
                        <div class="input_container half">
                            <img src="../assets/392531_account_friend_human_man_member_icon 2.svg" alt="">
                            <input placeholder="Your full name" type="text" name="full_name" id="full_name">
                        </div>
                        <div class="input_container half">
                            <img src="../assets/2703069_phone_cell_contact_telephone_icon 1.svg" alt="">
                            <input placeholder="Add phone number" type="number" name="phone_number" id="phone_number">
                        </div>
                    </div>
                    <div class="form_right">
                        <div class="input_container half">
                            <img src="../assets/1904660_email_envelope_letter_mail_message_icon 1.svg" alt="">
                            <input placeholder="Enter email address" type="email" name="email" id="email">
                        </div>
                        <div class="input_container half">
                            <img src="../assets/svg-gobbler - 2022-03-03T212453.252 2.svg" alt="">
                            <input placeholder="Enter subject" type="text" name="subject" id="subject">
                        </div>
                    </div>
                </div>
                <div class="input_container">
                    <img src="../assets/622400_pen_pencil_edit_write_writing_icon 1.svg" alt="">
                    <textarea placeholder="Enter message" name="message" id="message"></textarea>
                </div>
                <button>SEND</button>
            </form>
        </section>
@stop