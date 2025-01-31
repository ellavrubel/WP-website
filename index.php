<?php get_header(); ?>

<section class="welcome">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between welcome__all-wrapper">
            <div class="welcome-text__wrapper animated wow slideInLeft" data-wow-duration="2s" data-wow-offset="200">
                <p class="welcome__title">
                    <?php the_field('welcome__title'); ?>
                </p>
                <p class="welcome__subtitle">
                    <?php the_field('welcome__subtitle'); ?>
                </p>
                <p class="welcome__arrow">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/red_arrow.png" alt="">
                </p>
                <p class="welcome__text">
                    <?php the_field('welcome__text'); ?>
                </p>
                <div class="welcome__arrow-down">
                    <i class="fa fa-arrow-down"></i>
                </div>
                <p class="welcome__text welcome__text-hide">
                    In today’s food obsessed world, new restaurants tend to pop up overnight and disappear soon after opening. According to a study on failed restaurants by Ohio State University, 60% of restaurants fail within the first year and 80% do not make it past five years. While this may be true of many modern eateries, numerous old world restaurants have withstood the test of time and remain in operation today.
                </p>
                <p class="welcome__signature">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Matthew.png" alt="Matthew T. Slaan">
                </p>
            </div>
            <div class="bookTable__wrapper animated wow zoomIn" data-wow-duration="2s" data-wow-offset="200" data-wow-delay="1s">
                <div class="bookTable__redPlace">
                    <p class="welcome__bookTable">
                        <img src="img/book_table.png" alt="">
                        Book Table
                        <img src="img/book_table.png" alt=""></p>
                    <form class="welcome-form__wrapper">

                        <label for="YourName"></label>
                        <input class="form-control" type="text" id="YourName" name="customerName" placeholder="Your Name*" required>

                        <label for="totalPeople"></label>
                        <input class="form-control" type="text" name="digital" id="totalPeople" placeholder="Total People">

                        <label for="regDate"></label>
                        <input class="form-control" type="text" name="regDate" id="regDate" placeholder="Date: 24.12.2020">

                        <label for="regTime"></label>
                        <input class="form-control" type="text" name="regTime" id="regTime" placeholder="Time: 04:00 pm">

                        <label for="tableN"></label>
                        <input class="form-control" type="text" name="tableN" id="tableN" placeholder="Table No">

                        <button type="reset" class="btn btn-secondary btn-sm btn-block login-btn">Book Now</button>
                    </form>
                </div>
                <div class="welcome__greenLeave">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/green_leaves.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="futureItem">
    <div class="futureItem__text">
        <p class="title">
            Our Restorant Provide
        </p>
        <p class="subtitle">
            Future Item
        </p>
        <div class="futureItem__arrow">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/blue_arrow.png" alt="">
        </div>
    </div>
    <div class="futureItem__carousel-wrapper">
        <div class="owl-carousel owl-theme slider1">
            <div class="item d-flex flex-column animated wow fadeInUp" data-wow-duration="2s" data-wow-offset="200"><img src="<?php the_field('item'); ?>" alt="">
                <p class="dish-descr"><?php the_field('dish-descr'); ?><br>
                    <span class="item1-price"><?php the_field('item1-price'); ?><s class="old-price"><?php the_field('old-price'); ?></s></span></p>
            </div>
            <div class="item d-flex flex-column animated wow fadeInUp" data-wow-duration="2s" data-wow-offset="200"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/FT-dish1.png" alt="">
                <p class="dish-descr">Chicken Sandwich<br>
                    12.50$ <s>18.80$</s></p></div>
            <div class="item d-flex flex-column animated wow fadeInUp" data-wow-duration="2s" data-wow-offset="200"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/FT-dish2.png" alt=""">
                <p class="dish-descr">Chicken Crisper<br>
                    9.50$ <s>11.80$</s></p></div>
            <div class="item d-flex flex-column animated wow fadeInUp" data-wow-duration="2s" data-wow-offset="200"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/FT-dish3.png" alt="">
                <p class="dish-descr">Ribs & Stickes<br>
                    11.80$ <s>18.80$</s></p></div>
            <div class="item d-flex flex-column animated wow fadeInUp" data-wow-duration="2s" data-wow-offset="200"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/FT-dish4.png" alt="">
                <p class="dish-descr">Chicken Burger<br>
                    6.50$ <s>8.80$</s></p></div>
            <div class="item d-flex flex-column animated wow fadeInUp" data-wow-duration="2s" data-wow-offset="200"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/FT-dish5.png" alt="">
                <p class="dish-descr">Smokehouse Combo<br>
                    8.50$ <s>10.80$</s></p></div>
            <div class="item d-flex flex-column animated wow fadeInUp" data-wow-duration="2s" data-wow-offset="200"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/FT-dish1.png" alt="">
                <p class="dish-descr">Party platter<br>
                    21.50$ <s>26.80$</s></p>
            </div>
            <div class="item d-flex flex-column animated wow fadeInUp" data-wow-duration="2s" data-wow-offset="200"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/FT-dish2.png" alt="">
                <p class="dish-descr">Chicken Sandwich<br>
                    12.50$ <s>18.80$</s></p></div>
            <div class="item d-flex flex-column"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/FT-dish3.png" alt="">
                <p class="dish-descr">Chicken Crisper<br>
                    9.50$ <s>11.80$</s></p></div>
            <div class="item d-flex flex-column"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/FT-dish4.png" alt="">
                <p class="dish-descr">Ribs & Stickes<br>
                    11.80$ <s>18.80$</s></p></div>
            <div class="item d-flex flex-column"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/FT-dish5.png" alt="">
                <p class="dish-descr">Chicken Burger<br>
                    6.50$ <s>8.80$</s></p></div>
            <div class="item d-flex flex-column"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/FT-dish3.png" alt="">
                <p class="dish-descr">Smokehouse Combo<br>
                    8.50$ <s>10.80$</s></p></div>
        </div>
    </div>
</section>

<section id="about" class="services">
    <div class="container">
        <div class="services__wrapper d-flex justify-content-lg-between">
            <div class="services__text-wrapper animated wow rollIn" data-wow-offset="200" data-wow-duration="2s">
                <div class="futureItem__text services__text">
                    <p class="title futureItem__text_services">
                        We Provide best services
                    </p>
                    <p class="subtitle futureItem__text_services">
                        About Us
                    </p>
                    <div class="services__arrow">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/bluearrow-oneway.png" alt="">
                    </div>
                </div>
                <p class="services__description">
                    <?php the_field('services__description'); ?>
                </p>
                <div class="services__block one">
                    <div class="services__block-item">
                        <div class="services__block-title">
                            <span class="services__p1Title"> <?php the_field('services__p1Title'); ?></span>
                        </div>
                        <div class="services__block-text"> <span class="services__p1Text"> <?php the_field('services__p1Text'); ?></span>
                        </div>
                    </div>
                    <div class="services__block-item">
                        <div class="services__block-title">
                            <span class="services__p2Title"><?php the_field('services__p2Title'); ?></span>
                        </div>
                        <div class="services__block-text"> <span class="services__p2Text"> <?php the_field('services__p2Text'); ?></span>
                        </div>
                    </div>
                    <div class="services__block-item">
                        <div class="services__block-title">
                            <span class="services__p3Title"> <?php the_field('services__p3Title'); ?></span>
                        </div>
                        <div class="services__block-text">
                            <span class="services__p3Text"><?php the_field('services__p3Text'); ?></span>
                        </div>
                    </div>
                    <div class="services__block-item">
                        <div class="services__block-title">
                            <span class="services__p4Title"> <?php the_field('services__p4Title'); ?></span>
                        </div>
                        <div class="services__block-text">
                            <span class="services__p4Text"><?php the_field('services__p4Text'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services__woman-wrapper">
                <img src="<?php the_field('services__woman-wrapper'); ?>">
            </div>
        </div>
    </div>
</section>

<section class="delivery" style= "background-image: url(<?php the_field('delivery'); ?>)">
    <div class="container-fluid">
        <div class="container">
            <div class="futureItem__text">
                <p class="title delivery__title">
                    <?php the_field('delivery__title'); ?>
                </p>
                <p class="subtitle delivery__subtitle">
                    <?php the_field('delivery__subtitle'); ?>
                </p>
                <div class="futureItem__arrow">
                    <img src="<?php the_field('futureItem__arrow'); ?>" alt="">
                </div>
            </div>
            <div class="delivery__card-wrapper d-flex flex-column flex-md-row justify-content-around">
                <div class="delivery__card1 animated wow zoomIn" data-wow-duration="2s" data-wow-offset="200">
                    <p class="card1__title">
                        <?php the_field('card1__title'); ?>
                    </p>
                    <p class="card1__text">
                        <?php the_field('card1__text'); ?>
                    </p>
                    <img src="<?php the_field('select'); ?>" alt="" class="select img-fluid">
                </div>
                <div class="delivery__card2 animated wow zoomIn" data-wow-duration="2s" data-wow-offset="200" data-wow-delay="1s">
                    <p class="card1__title">
                        <span class="card2-title"><?php the_field('card2-title'); ?></span>
                    </p>
                    <p class="card1__text">
                       <span class="card2-subtitle"> <?php the_field('card2-subtitle'); ?></span>
                    </p>
                    <img src="<?php the_field('online'); ?>" alt="" class="online img-fluid">
                </div>
                <div class="delivery__card3 animated wow zoomIn" data-wow-duration="2s" data-wow-offset="200" data-wow-delay="2s">
                    <p class="card1__title">
                        <span class="card3-title"><?php the_field('card3-title'); ?></span>Recevied Delivery
                    </p>
                    <p class="card1__text">
                        <span class="card3-subtitle"> <?php the_field('card3-subtitle'); ?></span>
                    </p>
                    <img src="<?php the_field('hand'); ?>" alt="" class="hand img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="menu" class="mainDish">
    <div class="container">
        <div class="futureItem__text">
            <p class="title  futureItem__text-title">
                <?php the_field('futureItem__text-title'); ?>
            </p>
            <p class="subtitle mainDish__subtitle">
                <?php the_field('mainDish__subtitle'); ?>
            </p>
            <div class="futureItem__arrow">
                <img src="<?php the_field('futureItem__arrow'); ?>" alt="">
            </div>
        </div>

        <div class="mainDish__menu-wrapper">
            <ul class="d-flex justify-content-around tabs__caption">
                <li class="mainDish__menu-name active"><span class="menu-name1"> <a href="/"><?php the_field('menu-name1'); ?></a></span></li>
                <li class="mainDish__menu-name"><span class="menu-name2"> <a href="/"><?php the_field('menu-name2'); ?></a></span></li>
                <li class="mainDish__menu-name"><span class="menu-name3"> <a href="/"><?php the_field('menu-name3'); ?></a></span></li>
                <li class="mainDish__menu-name"><span class="menu-name4"> <a href="/"><?php the_field('menu-name4'); ?></a></span></li>
                <li class="mainDish__menu-name"><span class="menu-name5"> <a href="/"><?php the_field('menu-name5'); ?></a></span></li>
                <li class="mainDish__menu-name"><span class="menu-name6"> <a href="/"><?php the_field('menu-name6'); ?></a></span></li>
            </ul>
        </div>

        <!--All - visible pictires -->
        <div class="mainDish__photo-wrap d-flex flex-column flex-md-row flex-wrap justify-content-lg-between tabs__content active">
            <div class="menu__item d-flex">
                <span class="dish1-img1"><img class="img-fluid mainDish__picture" src="<?php the_field('dish1-img1'); ?>" alt=""></span>
                <span class="dish1-img2"><?php the_field('dish1-img2'); ?></span>
            </div>
            <div class="menu__item d-flex">
                <span class="dish2-img1"><img class="img-fluid mainDish__picture" src="<?php the_field('dish2-img1'); ?>" alt=""></span>
                <span class="dish2-img2"><?php the_field('dish2-img2'); ?></span>
            </div>
            <div class="menu__item d-flex">
                <span class="dish3-img1"><img class="img-fluid mainDish__picture" src="<?php the_field('dish3-img1'); ?>" alt=""></span>
                <span class="dish3-img2"><?php the_field('dish3-img2'); ?></span>
            </div>
            <div class="menu__item d-flex">
                <span class="dish4-img1"><img class="img-fluid mainDish__picture" src="<?php the_field('dish4-img1'); ?>" alt=""></span>
                <span class="dish4-img2"><?php the_field('dish4-img2'); ?></span>
            </div>
            <div class="menu__item d-flex">
                <span class="dish5-img1"><img class="img-fluid mainDish__picture" src="<?php the_field('dish5-img1'); ?>" alt=""></span>
                <span class="dish5-img2"><?php the_field('dish5-img2'); ?></span>
            </div>
            <div class="menu__item d-flex">
                <span class="dish6-img1"><img class="img-fluid mainDish__picture" src="<?php the_field('dish6-img1'); ?>" alt=""></span>
                <span class="dish6-img2"><?php the_field('dish6-img2'); ?></span>
            </div>
            <div class="menu__item d-flex">
                <span class="dish7-img1"><img class="img-fluid mainDish__picture" src="<?php the_field('dish7-img1'); ?>" alt=""></span>
                <span class="dish7-img2"><?php the_field('dish7-img2'); ?></span>
            </div>
            <div class="menu__item d-flex">
                <span class="dish8-img1"><img class="img-fluid mainDish__picture" src="<?php the_field('dish8-img1'); ?>" alt=""></span>
                <span class="dish8-img2"><?php the_field('dish8-img2'); ?></span>
            </div>
            <div class="menu__item d-flex">
                <span class="dish9-img1"><img class="img-fluid mainDish__picture" src="<?php the_field('dish9-img1'); ?>" alt=""></span>
                <span class="dish9-img2"><?php the_field('dish9-img2'); ?></span>
            </div>
            <div class="menu__item d-flex">
                <span class="dish10-img1"><img class="img-fluid mainDish__picture" src="<?php the_field('dish10-img1'); ?>" alt=""></span>
                <span class="dish10-img2"><?php the_field('dish10-img2'); ?></span>
            </div>
        </div>
        <!------------------------------------->

        <!--Breakfast-->
        <div class="mainDish__photo-wrap d-flex flex-wrap flex-column flex-md-row justify-content-lg-between tabs__content">
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/10.png" alt="Burger">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chickenBurg.png" alt="Burger">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/2.png" alt="Chocolate">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chocolate.png" alt="Chocolate">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/4.png" alt="Crispy">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/Crispy.png" alt="Crispy">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/3.png" alt="Mix Bol">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chicken.png" alt="Mix Bol">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/6.png" alt="Tutkey">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/california.png" alt="California">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/7.png" alt="House BBQ">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/housebbq.png" alt="House BBQ">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/8.png" alt="Wings">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/bolonese.png" alt="Wings">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/5.png" alt="Santa Fe">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/santafe.png" alt="Santa Fe">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/9.png" alt="Tripple Diple">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/tripple.png" alt="Tripples">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/1.png" alt="Pepper Pals">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/PepperPals.png" alt="Pepper Pals">
            </div>
        </div>
        <!------------------------------------->

        <!--Lunch-->
        <div class="mainDish__photo-wrap d-flex flex-wrap flex-column flex-md-row justify-content-lg-between tabs__content ">
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/2.png" alt="Chocolate">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chocolate.png" alt="Chocolate">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/1.png" alt="Pepper Pals">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/PepperPals.png" alt="Pepper Pals">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/4.png" alt="Crispy">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/Crispy.png" alt="Crispy">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/3.png" alt="Mix Bol">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chicken.png" alt="Mix Bol">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/6.png" alt="Tutkey">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/california.png" alt="California">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/5.png" alt="Santa Fe">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/santafe.png" alt="Santa Fe">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/7.png" alt="House BBQ">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/housebbq.png" alt="House BBQ">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/9.png" alt="Tripple Diple">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/tripple.png" alt="Tripples">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/8.png" alt="Wings">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/bolonese.png" alt="Wings">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/10.png" alt="Burger">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chickenBurg.png" alt="Burger">
            </div>
        </div>
        <!------------------------------------->

        <!--Dinner-->
        <div class="mainDish__photo-wrap d-flex flex-wrap flex-column flex-md-row justify-content-lg-between tabs__content">
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/10.png" alt="Burger">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chickenBurg.png" alt="Burger">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/9.png" alt="Tripple Diple">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/tripple.png" alt="Tripples">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/3.png" alt="Mix Bol">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chicken.png" alt="Mix Bol">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/8.png" alt="Wings">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/bolonese.png" alt="Wings">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/5.png" alt="Santa Fe">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/santafe.png" alt="Santa Fe">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/6.png" alt="Tutkey">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/california.png" alt="California">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/4.png" alt="Crispy">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/Crispy.png" alt="Crispy">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/7.png" alt="House BBQ">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/housebbq.png" alt="House BBQ">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/2.png" alt="Chocolate">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chocolate.png" alt="Chocolate">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/1.png" alt="Pepper Pals">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/PepperPals.png" alt="Pepper Pals">
            </div>

        </div>

        <!------------------------------------->

        <!--Dessert-->
        <div class="mainDish__photo-wrap d-flex flex-wrap flex-column flex-md-row justify-content-lg-between tabs__content">
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/6.png" alt="Tutkey">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/california.png" alt="California">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/8.png" alt="Wings">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/bolonese.png" alt="Wings">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/7.png" alt="House BBQ">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/housebbq.png" alt="House BBQ">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/1.png" alt="Pepper Pals">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/PepperPals.png" alt="Pepper Pals">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/2.png" alt="Chocolate">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chocolate.png" alt="Chocolate">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/9.png" alt="Tripple Diple">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/tripple.png" alt="Tripples">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/10.png" alt="Burger">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chickenBurg.png" alt="Burger">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/5.png" alt="Santa Fe">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/santafe.png" alt="Santa Fe">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/4.png" alt="Crispy">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/Crispy.png" alt="Crispy">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/3.png" alt="Mix Bol">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chicken.png" alt="Mix Bol">
            </div>
        </div>

        <!------------------------------------->

        <!--Kids Menu-->
        <div class="mainDish__photo-wrap d-flex flex-wrap flex-column flex-md-row justify-content-lg-between tabs__content">
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/2.png" alt="Chocolate">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chocolate.png" alt="Chocolate">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/1.png" alt="Pepper Pals">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/PepperPals.png" alt="Pepper Pals">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/4.png" alt="Crispy">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/Crispy.png" alt="Crispy">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/3.png" alt="Mix Bol">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chicken.png" alt="Mix Bol">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/6.png" alt="Tutkey">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/california.png" alt="California">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/5.png" alt="Santa Fe">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/santafe.png" alt="Santa Fe">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/8.png" alt="Wings">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/bolonese.png" alt="Wings">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/7.png" alt="House BBQ">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/housebbq.png" alt="House BBQ">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/10.png" alt="Burger">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/chickenBurg.png" alt="Burger">
            </div>
            <div class="menu__item d-flex">
                <img class="img-fluid mainDish__picture" src="img/MainDish/9.png" alt="Tripple Diple">
                <img class="img-fluid mainDish__picture2" src="img/MainDish/tripple.png" alt="Tripples">
            </div>
        </div>

        <!------------------------------------->

        <div class="mainDish__btn">
            <a href="<?php the_field('mainDish__btn'); ?>" download="">FULL MENU</a>
        </div>
    </div>
</section>

<section class="stuff">
    <div class="container">
        <div class="futureItem__text">
            <p class="title">
                We Have Awesome Team
            </p>
            <p class="subtitle mainDish__subtitle">
                Our Stuff
            </p>
            <div class="futureItem__arrow">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/blue_arrow.png" alt="">
            </div>
        </div>
        <div class="stuff__carousel-wrap">
            <div class="owl-carousel owl-theme slider2">

                <div class="stuff__first animated wow slideInUp" data-wow-duration="2s" data-wow-offset="200">
                    <div class="item d-flex flex-column ">
                        <span class="stuff-img1"><img src="<?php the_field('stuff-img1'); ?>" alt="" class="human"></span>
                        <div class="stuff__text-wrap">
                            <p class="stuff__name"><span class="name1"><?php the_field('name1'); ?></span> <br>
                                <span class="occupation1 occupation">
                            <?php the_field('occupation1'); ?></span></p>
                            <div class="stuff__social-wrap d-flex justify-content-around">
                                <span class="stuff__social-item">Follow:</span>
                                <i class="icon fa fa-facebook"></i>
                                <i class="icon fa fa-twitter"></i>
                                <i class="icon fa fa-instagram"></i>
                                <i class="icon fa fa-google-plus-square"></i>
                                <i class="fa fa-pinterest-square"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="stuff__second animated wow slideInUp" data-wow-duration="2s" data-wow-offset="200" data-wow-delay="1s">
                    <div class="item d-flex flex-column">
                        <div class="stuff__img-wrap">
                            <span class="stuff-img2"><img src="<?php the_field('stuff-img2'); ?>" alt="" class="human"></span>

                        </div>
                        <div class="stuff__text-wrap">
                            <p class="stuff__name"><span class="name2"><?php the_field('name2'); ?></span><br>
                                <span class="occupation2 occupation">
                            <?php the_field('occupation2'); ?></span></p>
                            <div class="stuff__social-wrap d-flex justify-content-around">
                                <span class="stuff__social-item">Follow:</span>
                                <i class="icon fa fa-facebook"></i>
                                <i class="icon fa fa-twitter"></i>
                                <i class="icon fa fa-instagram"></i>
                                <i class="icon fa fa-google-plus-square"></i>
                                <i class="fa fa-pinterest-square"></i>
                            </div>
                        </div>
                    </div>
                    <img class="photo__sign1" src="<?php bloginfo( 'template_url' ); ?>/assets/img/OurStuff/plus.png" alt="">
                    <img class="photo__sign2" src="<?php bloginfo( 'template_url' ); ?>/assets/img/OurStuff/sign.png" alt="">
                </div>

                <div class="stuff__third animated wow slideInUp" data-wow-duration="2s" data-wow-offset="200" data-wow-delay="2s">
                    <div class="item d-flex flex-column">
                        <span class="stuff-img3"><img src="<?php the_field('stuff-img3'); ?>" alt="" class="human"></span>
                        <div class="stuff__text-wrap">
                            <p class="stuff__name"><span class="name3"><?php the_field('name3'); ?></span><br>
                                <span class="occupation3 occupation">
                            <?php the_field('occupation3'); ?></span></span></p>
                            <div class="stuff__social-wrap d-flex justify-content-around">
                                <span class="stuff__social-item">Follow:</span>
                                <i class="icon fa fa-facebook"></i>
                                <i class="icon fa fa-twitter"></i>
                                <i class="icon fa fa-instagram"></i>
                                <i class="icon fa fa-google-plus-square"></i>
                                <i class="fa fa-pinterest-square"></i>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="stuff__first animated wow slideInUp" data-wow-duration="2s" data-wow-offset="200">
                    <div class="item d-flex flex-column ">
                        <span class="stuff-img1"><img src="<?php the_field('stuff-img1'); ?>" alt="" class="human"></span>
                        <div class="stuff__text-wrap">
                            <p class="stuff__name"><span class="name1"><?php the_field('name1'); ?></span> <br>
                                <span class="occupation1 occupation">
                            <?php the_field('occupation1'); ?></span></p>
                            <div class="stuff__social-wrap d-flex justify-content-around">
                                <span class="stuff__social-item">Follow:</span>
                                <i class="icon fa fa-facebook"></i>
                                <i class="icon fa fa-twitter"></i>
                                <i class="icon fa fa-instagram"></i>
                                <i class="icon fa fa-google-plus-square"></i>
                                <i class="fa fa-pinterest-square"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="stuff__second animated wow slideInUp" data-wow-duration="2s" data-wow-offset="200" data-wow-delay="1s">
                    <div class="item d-flex flex-column">
                        <div class="stuff__img-wrap">
                            <span class="stuff-img2"><img src="<?php the_field('stuff-img2'); ?>" alt="" class="human"></span>

                        </div>
                        <div class="stuff__text-wrap">
                            <p class="stuff__name"><span class="name2"><?php the_field('name2'); ?></span><br>
                                <span class="occupation2 occupation">
                            <?php the_field('occupation2'); ?></span></p>
                            <div class="stuff__social-wrap d-flex justify-content-around">
                                <span class="stuff__social-item">Follow:</span>
                                <i class="icon fa fa-facebook"></i>
                                <i class="icon fa fa-twitter"></i>
                                <i class="icon fa fa-instagram"></i>
                                <i class="icon fa fa-google-plus-square"></i>
                                <i class="fa fa-pinterest-square"></i>
                            </div>
                        </div>
                    </div>
                    <img class="photo__sign1" src="<?php bloginfo( 'template_url' ); ?>/assets/img/OurStuff/plus.png" alt="">
                    <img class="photo__sign2" src="<?php bloginfo( 'template_url' ); ?>/assets/img/OurStuff/sign.png" alt="">
                </div>

                <div class="stuff__third animated wow slideInUp" data-wow-duration="2s" data-wow-offset="200" data-wow-delay="2s">
                    <div class="item d-flex flex-column">
                        <span class="stuff-img3"><img src="<?php the_field('stuff-img3'); ?>" alt="" class="human"></span>
                        <div class="stuff__text-wrap">
                            <p class="stuff__name"><span class="name3"><?php the_field('name3'); ?></span><br>
                                <span class="occupation3 occupation">
                            <?php the_field('occupation3'); ?></span></span></p>
                            <div class="stuff__social-wrap d-flex justify-content-around">
                                <span class="stuff__social-item">Follow:</span>
                                <i class="icon fa fa-facebook"></i>
                                <i class="icon fa fa-twitter"></i>
                                <i class="icon fa fa-instagram"></i>
                                <i class="icon fa fa-google-plus-square"></i>
                                <i class="fa fa-pinterest-square"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <img class="small-circle" src="<?php bloginfo( 'template_url' ); ?>/assets/img/OurStuff/Ellips_small.png" alt="">
        </div>
        <div class="stuff__blue-circle">
            <img class="big-circle" src="<?php bloginfo( 'template_url' ); ?>/assets/img/OurStuff/Ellipse_big.png" alt="">
        </div>
    </div>
</section>

<section class="event">
    <div class="container-fluid event__photo" style="background-image: url(<?php the_field('event__photo'); ?>)">
        <div class="event__video-btn">
            <a class="page_link" href="<?php the_field('page_link'); ?>" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/events/video.png" alt=""></a>
        </div>
    </div>
    <div class="container event__offer-wrap">
        <div class="container event__offer">
            <div class="event__band-wrap">
                <div class="event__band">
                    <p class="kids-entry-free"><?php the_field('kids-entry-free'); ?></p>
                </div>
            </div>
            <div class="futureItem__text futureItem__text-event">
                <p class="subtitle mainDish__subtitle">
                    <span class="event-title"> <?php the_field('event-title'); ?></span>
                   </p>
                <div class="futureItem__arrow">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/blue_arrow.png" alt="">
                </div>
                <p class="event__red-text">
                    <?php the_field('event__red-text'); ?>
                    </p>
                <p class="event__discription">
                    <?php the_field('event__discription'); ?>
                     </p>
            </div>
            <div class="event__info d-flex flex-column flex-md-row justify-content-md-around">
                <div class="event__sponsors">
                    <p class="event__sponsors-title">
                        <?php the_field('event__sponsors-title'); ?>

                        <a href="/"><i class="event__arrow-down fa fa-arrow-down"></i></a>
                    </p>
                    <div class="event__sponsors-logo d-sm-flex justify-content-md-around flex-lg-row flex-wrap-reverse">
                        <span class="spons-logo1"><img class="logo-item" src="<?php the_field('spons-logo1'); ?>" alt=""></span>
                        <span class="spons-logo2"><img class="logo-item" src="<?php the_field('spons-logo2'); ?>" alt=""></span>
                        <span class="spons-logo3"><img class="logo-item" src="<?php the_field('spons-logo3'); ?>" alt=""></span>
                        <span class="spons-logo4"><img class="logo-item" src="<?php the_field('spons-logo4'); ?>" alt=""></span>
                    </div>
                </div>

                <div class="event__time">
                    <p class="event__time-title">
                        <?php the_field('event__time-title'); ?>
                        Time & Date
                        <a href="/"><i class="event__arrow-down2 fa fa-arrow-down"></i></a>
                    </p>
                    <p class="event__time-text">

                        <?php the_field('event__time-text'); ?>
                    </p>
                </div>

                <div class="event__button align-self-center">
                    <a class="buy-tickets" href="<?php the_field('buy-tickets'); ?>" target="_blank"> Buy Ticket </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feedback">
    <div class="container">
        <div class="futureItem__text feedback__title">
            <p class="title feedback__title">
                What Our Customers Say
            </p>
            <p class="subtitle mainDish__subtitle">
                Customer Feedback
            </p>
            <div class="futureItem__arrow">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/blue_arrow.png" alt="">
            </div>
        </div>

        <div class="owl-carousel owl-theme slider3">
            <div class="slider3-wrap d-flex justify-content-center animated wow slideInUp" data-wow-duration="2s" data-wow-offset="200">
                <div class="item item-img">
                    <span class="customer1-img"><img src="<?php the_field('customer1-img'); ?>" alt=""></span>
                </div>

                <div class="item item-text d-flex flex-column justify-content-center align-items-center">
                    <p class="quote">&#8243;</p>
                    <p class="feedback__text">
                        <?php the_field('feedback__text'); ?>

                    </p>
                    <p class="feedback__rating">
                        Personal Rating:
                        <span class="feedback__digit"> <?php the_field('feedback__digit'); ?> </span></p>
                    <div class="feedback__signature">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Matthew.png" alt="">
                    </div>
                </div>
                <div class="feedback__redMark">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/customer_feedback/redMark.png" alt="">
                </div>
            </div>

            <div class="slider3-wrap d-flex justify-content-center animated wow slideInUp" data-wow-duration="2s" data-wow-offset="200">
                <div class="item item-img">
                    <span class="customer1-img"><img src="<?php the_field('customer1-img'); ?>" alt=""></span>
                </div>

                <div class="item item-text d-flex flex-column justify-content-center align-items-center">
                    <p class="quote">&#8243;</p>
                    <p class="feedback__text">
                        <?php the_field('feedback__text'); ?>

                    </p>
                    <p class="feedback__rating">
                        Personal Rating:
                        <span class="feedback__digit"> <?php the_field('feedback__digit'); ?> </span></p>
                    <div class="feedback__signature">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Matthew.png" alt="">
                    </div>
                </div>
                <div class="feedback__redMark">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/customer_feedback/redMark.png" alt="">
                </div>
            </div>

            <div class="slider3-wrap d-flex justify-content-center animated wow slideInUp" data-wow-duration="2s" data-wow-offset="200">
                <div class="item item-img">
                    <span class="customer1-img"><img src="<?php the_field('customer1-img'); ?>" alt=""></span>
                </div>

                <div class="item item-text d-flex flex-column justify-content-center align-items-center">
                    <p class="quote">&#8243;</p>
                    <p class="feedback__text">
                        <?php the_field('feedback__text'); ?>

                    </p>
                    <p class="feedback__rating">
                        Personal Rating:
                        <span class="feedback__digit"> <?php the_field('feedback__digit'); ?> </span></p>
                    <div class="feedback__signature">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Matthew.png" alt="">
                    </div>
                </div>
                <div class="feedback__redMark">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/customer_feedback/redMark.png" alt="">
                </div>
            </div>

        </div>
    </div>
</section>
















<?php get_footer(); ?>
