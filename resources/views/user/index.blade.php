@extends('user.header_footer_light')

@section('index') active @endsection

@section('main')

    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <p class="text-uppercase">
                                Ona tilini o'qitish va o'rganish bo'yicha elektron darslik
                            </p>
                            <h2 class="text-uppercase mt-4 mb-5">
                                QIZIQARLI ONA TILI
                            </h2>
                            <div>
                                <a href="#" class="primary-btn2 mb-3 mb-sm-0">Dastur haqida</a>
                                <a href="#" class="primary-btn ml-sm-3 ml-0">Bo'limlar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Sayt imkoniyatlari</h2>
                        <p>
                            Ushbu dasturdan foydalanib quidagi imkoniyatlarga ega bo'lasiz
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-student"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Qiziqarli ma'lumotlar</h4>
                            <p>
                                Doimiy yangilanib boradigan fanga oid bo'lgan ma'lumotlar
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-book"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">O'quv qo'llanmalar</h4>
                            <p>
                                Fanga doir bo'lgan turli qo'llanmlar va darsliklar
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-earth"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Qiziqarli topshiriqlar</h4>
                            <p>
                                Mavzulashtirilgan topshiriqlar, rebuslar va testlar
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Feature Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Bo'limlar</h2>
                        <p>
                            Web saytimiz quidagi bo'limlardan tashkil topgan
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single course -->
                <div class="col-lg-12">
                    <div class="owl-carousel active_course">
                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" src="img/courses/c1.jpg" alt="" />
                            </div>
                            <div class="course_content">
                                <span class="price">Tekin</span>
                                <span class="tag mb-4 d-inline-block">2 - sinf</span>
                                <h4 class="mb-3">
                                    <a href="course-details.html">Ona tili 1-qism</a>
                                </h4>
                                <p>
                                    2 - sinf ona tili fani 1 qismi bo'yicha qo'llanmalar va topshiqlar
                                </p>
                                <div
                                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                                >
                                    <div class="authr_meta">
                                        <img src="img/courses/author1.png" alt="" />
                                        <span class="d-inline-block ml-2">Odina Qayumova</span>
                                    </div>
                                    <div class="mt-lg-0 mt-3">
                                        <span class="meta_info"
                                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" src="img/courses/c1.jpg" alt="" />
                            </div>
                            <div class="course_content">
                                <span class="price">Tekin</span>
                                <span class="tag mb-4 d-inline-block">2 - sinf</span>
                                <h4 class="mb-3">
                                    <a href="course-details.html">Ona tili 2-qism</a>
                                </h4>
                                <p>
                                    2 - sinf ona tili fani 2 qismi bo'yicha qo'llanmalar va topshiqlar
                                </p>
                                <div
                                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                                >
                                    <div class="authr_meta">
                                        <img src="img/courses/author1.png" alt="" />
                                        <span class="d-inline-block ml-2">Odina Qayumova</span>
                                    </div>
                                    <div class="mt-lg-0 mt-3">
                                        <span class="meta_info"
                                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" src="img/courses/c1.jpg" alt="" />
                            </div>
                            <div class="course_content">
                                <span class="price">Tekin</span>
                                <span class="tag mb-4 d-inline-block">2 - sinf</span>
                                <h4 class="mb-3">
                                    <a href="course-details.html">Ona tili 3-qism</a>
                                </h4>
                                <p>
                                    2 - sinf ona tili fani 3 qismi bo'yicha qo'llanmalar va topshiqlar
                                </p>
                                <div
                                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                                >
                                    <div class="authr_meta">
                                        <img src="img/courses/author1.png" alt="" />
                                        <span class="d-inline-block ml-2">Odina Qayumova</span>
                                    </div>
                                    <div class="mt-lg-0 mt-3">
                                        <span class="meta_info"
                                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" src="img/courses/c1.jpg" alt="" />
                            </div>
                            <div class="course_content">
                                <span class="price">Tekin</span>
                                <span class="tag mb-4 d-inline-block">2 - sinf</span>
                                <h4 class="mb-3">
                                    <a href="course-details.html">Ona tili 4-qism</a>
                                </h4>
                                <p>
                                    2 - sinf ona tili fani 4 qismi bo'yicha qo'llanmalar va topshiqlar
                                </p>
                                <div
                                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                                >
                                    <div class="authr_meta">
                                        <img src="img/courses/author1.png" alt="" />
                                        <span class="d-inline-block ml-2">Odina Qayumova</span>
                                    </div>
                                    <div class="mt-lg-0 mt-3">
                                        <span class="meta_info"
                                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start Registration Area =================-->
    <div class="section_gap registration_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1 class="mb-3">Xabar qoldirish</h1>
                            <p>
                                There is a moment in the life of any aspiring astronomer that
                                it is time to buy that first telescope. It’s exciting to think
                                about setting up your own viewing station.
                            </p>
                        </div>
                        <div class="col clockinner1 clockinner">
                            <h1 class="days">150</h1>
                            <span class="smalltext">Days</span>
                        </div>
                        <div class="col clockinner clockinner1">
                            <h1 class="hours">23</h1>
                            <span class="smalltext">Hours</span>
                        </div>
                        <div class="col clockinner clockinner1">
                            <h1 class="minutes">47</h1>
                            <span class="smalltext">Mins</span>
                        </div>
                        <div class="col clockinner clockinner1">
                            <h1 class="seconds">59</h1>
                            <span class="smalltext">Secs</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="register_form">
                        <h3>Courses for Free</h3>
                        <p>It is high time for learning</p>
                        <form
                            class="form_area"
                            id="myForm"
                            action="mail.html"
                            method="post"
                        >
                            <div class="row">
                                <div class="col-lg-12 form_group">
                                    <input
                                        name="name"
                                        placeholder="Your Name"
                                        required=""
                                        type="text"
                                    />
                                    <input
                                        name="name"
                                        placeholder="Your Phone Number"
                                        required=""
                                        type="tel"
                                    />
                                    <input
                                        name="email"
                                        placeholder="Your Email Address"
                                        pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                        required=""
                                        type="email"
                                    />
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button class="primary-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Registration Area =================-->

    <!--================ Start Trainers Area =================-->
    <section class="trainer_area section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Mualliflar</h2>
                        <p>
                            O'quv dasturini tuzgan mualliflar
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid" src="img/trainer/t1.jpg" alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4>Odina Qayumova</h4>
                        <p class="designation">O'qituvchi</p>
                        <div class="mb-4">
                            <p>
                                Guliston davlat universiteti doktoranti
                            </p>
                        </div>
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================ End Trainers Area =================-->



@endsection
