<?php get_header(); ?>


<div id="intro">
    <div class="container">
        <h1>Over 25 years serving the Richmond, Virginia community.</h1>
    </div>
</div>

<!-- features -->
<div id="features">
    <div class="container">

        <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>
        <?php endwhile; // end of the loop. ?>


        <!-- header -->
        <h2 class="section_header">
            <hr class="left visible-desktop">
            <span>Features</span>
            <hr class="right visible-desktop">
        </h2>

        <!-- feature list -->
        <div class="row">
            <div class="span4 feature">
                <img src="img/feature1.jpg" alt="feature1" class="thumb" />
                <h3>
                    <i class="i_cloud"></i> Responsive clean theme
                </h3>
                <p class="description">
                    There are many variations of passages of Lorem Ipsum available, but the
                    majority have suffered alteration in some form, by injected humour, or randomised
                    words which don't look even slightly believable.
                </p>
                <a href="#" class="btn btn-default">more</a>
            </div>
            <div class="span4 feature">
                <img src="img/feature2.jpg" alt="feature2" class="thumb" />
                <h3>
                    <i class="i_chart"></i> Responsive clean theme
                </h3>
                <p class="description">
                    There are many variations of passages of Lorem Ipsum available, but the
                    majority have suffered alteration in some form, by injected humour, or randomised
                    words which don't look even slightly believable.
                </p>
                <a href="#" class="btn btn-default">more</a>
            </div>
            <div class="span4 feature">
                <img src="img/feature3.jpg" alt="feature3" class="thumb" />
                <h3>
                    <i class="i_movil"></i> Responsive clean theme
                </h3>
                <p class="description">
                    There are many variations of passages of Lorem Ipsum available, but the
                    majority have suffered alteration in some form, by injected humour, or randomised
                    words which don't look even slightly believable.
                </p>
                <a href="#" class="btn btn-default">more</a>
            </div>
        </div>
    </div>
</div>

<!-- starts pricing -->
<div id="pricing">
    <div class="container">
        <!-- header -->
        <h2 class="section_header">
            <hr class="left visible-desktop">
                <span>
                    Pricing 
                    <small>
                        See all plan details here</small>
                </span>
            <hr class="right visible-desktop">
        </h2>

        <!-- pricing charts -->
        <div class="row">
            <div class="span4">
                <div class="price_wrapper lite regular">
                    <div class="header">
                        <span>Lite</span>
                        <div class="price">
                            <span>$ 35</span>
                            Per Month
                        </div>
                    </div>
                    <div class="section">
                        <h3>Passages of Lorem randomised
                            words which look slightly.</h3>
                        <ul class="perks">
                            <li>
                                <i class="i_shuffle"></i>
                                Cross-browser
                            </li>
                            <li>
                                <i class="i_loading"></i>
                                Fast-loading
                            </li>
                        </ul>
                        <a href="#" class="btn">Order now</a>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="price_wrapper pro">
                    <div class="header">
                        <span>Pro</span>
                        <div class="price">
                            <span>$ 99</span>
                            Per Month
                        </div>
                    </div>
                    <div class="section">
                        <h3>Passages of Lorem randomised
                            words which look slightly.</h3>
                        <ul class="perks">
                            <li>
                                <i class="i_shuffle"></i>
                                Cross-browser
                            </li>
                            <li>
                                <i class="i_loading"></i>
                                Fast-loading
                            </li>
                            <li>
                                <i class="i_bookmark"></i>
                                Bookmarkable URLs
                            </li>
                            <li>
                                <i class="i_bars"></i>
                                W3C Standards
                            </li>
                        </ul>
                        <a href="#" class="btn">Order now</a>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="price_wrapper standard regular">
                    <div class="header">
                        <span>Standard</span>
                        <div class="price">
                            <span>$ 65</span>
                            Per Month
                        </div>
                    </div>
                    <div class="section">
                        <h3>Passages of Lorem randomised
                            words which look slightly.</h3>
                        <ul class="perks">
                            <li>
                                <i class="i_shuffle"></i>
                                Cross-browser
                            </li>
                            <li>
                                <i class="i_loading"></i>
                                Fast-loading
                            </li>
                            <li>
                                <i class="i_bookmark"></i>
                                Bookmarkable URLs
                            </li>
                        </ul>
                        <a href="#" class="btn">Order now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- starts testimonial -->
<div id="testimonials">
    <div class="container">
        <div class="controls">
            <hr>
        </div>
        <div class="phrases_wrapper">
            <div class="phrase">
                <div class="row">
                    <div class="span7">
                        <p class="testimony">
                            There are many variations of passages words which don't look even slightly passage of anything embarrassing hidden in the middle.
                            <span>"</span>
                        </p>
                    </div>
                    <div class="span3 offset1">
                        <div class="pic">
                            <img src="img/pic1.jpg" alt="author" class="img-circle" />
                            <span class="name">Alejandra Galvan Castillo</span>
                            <span class="position">Bootstrap wizard</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

