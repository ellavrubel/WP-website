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

















<?php get_footer(); ?>
