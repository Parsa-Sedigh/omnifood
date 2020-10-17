<?php
declare(strict_types=1);

?>

<!-- Get pictures and content from jonas's github -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Remember: The <meta charset="UTF-8"> must be on top of everything in our html file (even comments shouldn't be on top of
    this tag. Because of SEO.) -->

    <!-- For optimization reasons, we want our images to be smaller than the actual size f them, because we don't want the original size of them
     on we website, so we want our image size to be always twice bigger than the largest actual size on the website (why largest? Because maybe an
    image on the responsive mode is bigger than the desktop mode or vice versa. So you must consider the largest size on your
    website and then multiply it by 2 and the result is the actual size of image you must upload to your website.). We do this stuff,
     because of high resolution displays like retina and also you can use `optimizilla` website to compress images.
      For minifing CSS and JS code you can use minifycss.com -->

    <!-- The next <meta> tag are important for responsive web design. -->
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- <<SEO>>
    1) <meta name="description"> is important for SEO, and it's the text that appears under our site title in serp page and the
    maximum number of characters is 160.
    2) Always provide good content on website and update them.
    3) Another tool for SEO is validator.w3.org, there we can copy and paste our entire HTML code and consider resolving the bugs and errors.
    4) Use keywords in <title> in <meta name="description"> in your headings <h1> and ... and <a> (links) but don't overuse keywords!
    5) Backlinks , you must make other websites to link to your websites.These links are called backlinks and they are like letters
    of recommendation of your website.

    Remember: You must place the google analitycs code in the <script> tag in very end of our website before closing the
    body tag (</body>), in every page of your website.
    -->
    <meta name="description" content="Omnifood is a premium food delivery service with the mission to bring healthy foods to many
    customers as possible.">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Omnifood 🍝🍖🥙</title>

    <!-- normalize-folder external reference must be BEFORE our style.css file -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/7.1%20Grid.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/media-queries.css">

    <!-- You can use favicon generator website for you site -->
    <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png">
    <link rel="manifest" href="/resources/favicons/site.webmanifest">

</head>

<body>

    <header>

        <nav>
            <!-- The class row will make things be centered. -->
            <div class="row">
                <img src="resources/images/logo-white.png" alt="Omnifood Logo" class="logo">
                <img src="resources/images/logo.png" alt="Omnifood Logo" class="logo-black">
                <ul class="main-nav js--main-nav">

                    <!-- Remember: We can also define a class for <a> and use jQuery .click() and .animate() methods for smooth
                      scrolling too! But here we use href values for smooth scrolling.To do smooth scrolling through this wa, we
                      define a href like #<whatever name you want> and then for the section or element that you want scroll to there,
                      you must declare an id attr with exact value of the name you declared in href attr of <a>. For example if you
                      declare href like #features the id attr value of the element you want to scroll to there must be id="features".
                      So now the <a> with href of #features is the anchor of the element we give the id of features. -->
                    <li><a href="#features">Food delivery</a></li>
                    <li><a href="#works">How it works</a></li>
                    <li><a href="#cities">Our cities</a></li>
                    <li><a href="#plans">Sign up</a></li>

                </ul>

                <!-- Burger button (on mobiles): -->
                <a class="mobile-nav-icon js--nav-icon"><ion-icon name="menu-outline"></ion-icon></a>

            </div>
        </nav>

        <div class="hero-text-box">
            <h1>Goodbye junk food. <br> Hello super healthy meals.😍</h1>
            <a class="btn btn-full js--scroll-to-plans js--wp-1" href="#">I’m hungry </a>
            <a class="btn btn-ghost js--scroll-to-start js--wp-2" href="#">Show me more </a>
        </div>
    </header>

    <section class="section-features js--section-features" id="features">

        <!-- We want our <p> to be centered so we use it in a <div> with row class -->
        <!-- Each page should only have 1 h1 element.We used h1 , so in here we use h2 element -->

        <!-- This <div> will have our first waypoint so will have our first animation.  -->
        <div class="row">
            <h2>
                <!-- We use special HTML characters or entities... -->
                Get food fast &mdash; not fast food
            </h2>
            <p class="long-copy">Hello, we’re Omnifood, your new premium food delivery service.
                We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it,
                we promise!</p>
        </div>

        <div class="row js--wp-3">
            <div class="col span-1-of-4 box">
                <ion-icon name="infinite-outline" class="icon-big"></ion-icon>
                <h3>Up to 365 days/year</h3>
                <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage.
                    You can also choose to order more flexibly if that's your style.</p>
            </div>

            <div class="col span-1-of-4 box">
                <ion-icon name="stopwatch-outline" class="icon-big"></ion-icon>
                <h3>Ready in 20 minutes</h3>
                <p>You're only twenty minutes away from your delicious and super healthy meals delivered right to your
                    home. We work with the best chefs in each town to ensure that you're 100% happy.</p>
            </div>

            <div class="col span-1-of-4 box">
                <ion-icon name="nutrition-outline" class="icon-big"></ion-icon>
                <h3>100% organic</h3>
                <p>All our vegetables are fresh, organic and local. Animals are raised without added hormones or
                    antibiotics. Good for your health, the environment, and it also tastes better!</p>
            </div>

            <div class="col span-1-of-4 box">
                <ion-icon name="cart-outline" class="icon-big"></ion-icon>
                <h3>Order anything</h3>
                <p>We don't limit your creativity, which means you can order whatever you feel like. You can also
                    choose from our menu containing over 100 delicious meals. It's up to you!</p>
            </div>
        </div>

    </section>

    <section class="section-meals">

        <!-- Remember: The child elements of these two <ul> have the float property so we need to clear these floats after the parent element.  -->

        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/images/1.jpg" alt="Korean bibimbap with egg and vegetables">
                </figure>
            </li>

            <li>
                <figure class="meal-photo">
                    <img src="resources/images/2.jpg" alt="Simple italian pizza with cherry tomatoes ">
                </figure>
            </li>

            <li>
                <figure class="meal-photo">
                    <img src="resources/images/3.jpg" alt="Chicken breast steak with vegetables ">
                </figure>
            </li>

            <li>
                <figure class="meal-photo">
                    <img src="resources/images/4.jpg" alt="Autumn pumpkin soup">
                </figure>
            </li>
        </ul>

        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/images/5.jpg" alt="Paleo beef steak with vegetables">
                </figure>
            </li>

            <li>
                <figure class="meal-photo">
                    <img src="resources/images/6.jpg" alt="Healthy baguette with egg and vegetables">
                </figure>
            </li>

            <li>
                <figure class="meal-photo">
                    <img src="resources/images/7.jpg" alt="Burger with cheddar and bacon ">
                </figure>
            </li>

            <li>
                <figure class="meal-photo">
                    <img src="resources/images/8.jpg" alt="Granola with cherries and strawberries">
                </figure>
            </li>
        </ul>
    </section>

    <section class="section-steps" id="works">
        <div class="row">
            <h2>How it works &mdash; Simple as 1, 2, 3</h2>
        </div>

        <div class="row">
            <div class="span-1-of-2 steps-box">
                <img src="resources/mini-images/app-iPhone-min.png" alt="Omnifood app on iPhone" class="app-screen js--wp-4">
            </div>

            <div class="span-1-of-2 steps-box">

                <div class="works-step">
                    <div class="">1</div>
                    <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                </div>

                <div class="works-step">
                    <div class="">2</div>
                    <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                </div>

                <div class="works-step">
                    <div class="">3</div>
                    <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                </div>

                <a href="#" class="btn-app"><img src="resources/images/download-app.svg" alt="App Store Button"></a>
                <a href="#" class="btn-app"><img src="resources/images/download-app-android.png"
                        alt="Play Store Button"></a>

            </div>
        </div>
    </section>

    <section class="section-cities" id="cities">
        <div class="row">
            <h2>We're currently in these cities</h2>
        </div>

        <div class="row js--wp-5">

            <div class="col span-1-of-4 box">
                <img src="resources/images/lisbon-3.jpg" alt="Lisbon">
                <h3>Lisbon</h3>

                <div class="city-feature">
                    <ion-icon name="person" class="icon-small"></ion-icon>
                    1600+ happy eaters
                </div>

                <div class="city-feature">
                    <ion-icon name="star" class="icon-small"></ion-icon>
                    60+ top chefs
                </div>

                <div class="city-feature">
                    <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                    <a href="#">@omnifood_lx</a>
                </div>

            </div>

            <div class="col span-1-of-4 box">
                <img src="resources/images/san-francisco.jpg" alt="San Francisco">
                <h3>San Francisco</h3>

                <div class="city-feature">
                    <ion-icon name="person" class="icon-small"></ion-icon>
                    3700+ happy eaters
                </div>

                <div class="city-feature">
                    <ion-icon name="star" class="icon-small"></ion-icon>
                    160+ top chefs
                </div>

                <div class="city-feature">
                    <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                    <a href="#">@omnifood_berlin</a>
                </div>

            </div>

            <div class="col span-1-of-4 box">
                <img src="resources/images/berlin.jpg" alt="Berlin">
                <h3>Berlin</h3>

                <div class="city-feature">
                    <ion-icon name="person" class="icon-small"></ion-icon>
                    2300+ happy eaters
                </div>

                <div class="city-feature">
                    <ion-icon name="star" class="icon-small"></ion-icon>
                    110+ top chefs
                </div>

                <div class="city-feature">
                    <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                    <a href="#">@omnifood_lx</a>
                </div>

            </div>

            <div class="col span-1-of-4 box">
                <img src="resources/images/london.jpg" alt="London">
                <h3>London</h3>

                <div class="city-feature">
                    <ion-icon name="person" class="icon-small"></ion-icon>
                    1200+ happy eaters
                </div>

                <div class="city-feature">
                    <ion-icon name="star" class="icon-small"></ion-icon>
                    50+ top chefs
                </div>

                <div class="city-feature">
                    <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                    <a href="#">@omnifood_london</a>
                </div>

            </div>
        </div>

    </section>

    <section class="section-testimonials">
        <div class="row">
            <h2>Our customers can't live without us</h2>
        </div>

        <div class="row">
            <div class="col span-1-of-3">
                <blockquote>
                    Omnifood is just awesome! I justlaunched a startup which leaves me with no time for cooking, so
                    Omnifood
                    is a life-saver. Now that I got used to it, I couldn't live without my daily meals!

                    <cite><img src="resources/images/customer-1.jpg" alt="">Alberto Duncan</cite>
                </blockquote>
            </div>

            <div class="col span-1-of-3">
                <blockquote>
                    Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food
                    delivery
                    here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!

                    <cite><img src="resources/images/customer-2.jpg" alt="">Joana Silva</cite>
                </blockquote>
            </div>

            <div class="col span-1-of-3">
                <blockquote>
                    I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and
                    ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!

                    <cite><img src="resources/images/customer-3.jpg" alt="">Milton Chapman</cite>
                </blockquote>
            </div>
        </div>

    </section>

    <section class="section-plans js--section-plans" id="plans">
        <div class="row">
            <h2>Start eating healthy today</h2>
        </div>

        <div class="row">
            <div class="col span-1-of-3">
                <div class="plan-box js--wp-6">
                    <!-- We must include another <div> inside the <div class="col span-1-of-3"> becasue if we don't do this we can't make
                        the plan box (these 3 boxes) as wide as we want, -->
                    <div>
                        <h3>Premium</h3>
                        <p class="plan-price">399$ <span>/ month</span></p>
                        <p class="plan-price-meal">That’s only 13.30$ per meal</p>
                    </div>
                    
                    <div>
                            <ul>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>1 meal every day</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Order 24/7</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Access to newest creations</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Free delivery</li>
                            </ul>
                    </div>

                    <div>
                        <a href="#" class="btn btn-full">Sign up now</a>
                    </div>

                </div>
            </div>

            <div class="col span-1-of-3">
                <div class="plan-box">
                    <!-- We must include another <div> inside the <div class="col span-1-of-3"> becasue -->
                    <div>
                        <h3>Pro</h3>
                        <p class="plan-price">149$ <span>/ month</span></p>
                        <p class="plan-price-meal">That’s only 14.90$ per meal</p>
                    </div>
                    
                    <div>
                            <ul>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>1 meal 10 days/month</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Order 24/7</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Access to newest creations</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Free delivery</li>
                            </ul>
                    </div>

                    <div>
                        <a href="#" class="btn btn-ghost">Sign up now</a>
                    </div>

                </div>
            </div>

            <div class="col span-1-of-3">
                <div class="plan-box">
                    <!-- We must include another <div> inside the <div class="col span-1-of-3"> becasue -->
                    <!-- &nbsp; will create an empty line with a little height. -->    
                    <div>
                        <h3>Starter</h3>
                        <p class="plan-price">19$ <span>/ meal</span></p>
                        <p class="plan-price-meal">&nbsp;</p>
                    </div>
                    
                    <div>
                            <ul>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>1 meal</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Order from 8 am to 12 pm</li>
                                <li><ion-icon name="close-outline" class="icon-small"></ion-icon></li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Free delivery</li>
                            </ul>
                    </div>

                    <div>
                        <a href="#" class="btn btn-ghost">Sign up now</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section-form">
        <div class="row">
            <h2 class="row">We're happy to hear from you</h2>
        </div>
        
        <div class="row" id="form">
            <form method="POST" action="mailer.php" class="contact-form">

                <!-- We use id attr for our inputs so in <label> we can use for attr. Now if you do this, if you click
                    on the <label> in the website, the linked <input> would be selected.linked means the value of for
                    attr in <label> and the value of id attr in <input> are equal so they are linked together. -->

                <div class="row">

                <?php

                    /* The values in URL are string not integer. */

                    if (isset($_GET['success']) && $_GET['success'] === '1') {
                        echo '<div class="form-messages success">
                                Thank you!Your message has been sent!
                              </div>';

                    } else if (isset($_GET['success']) && $_GET['success'] === '-1') {

                        echo '<div class="form-messages error">
                                 Something went wrong, please try again later!
                              </div>';

                    }
                    ?>



                </div>

                <div class="row">

                    <div class="col span-1-of-3">
                        <label for="name">Name</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="find-us">How did you find us?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <!-- Let's create a drop box or combo box -->
                        <select name="find-us" id="find-us">
                            <option value="friends" selected>Friends</option>
                            <option value="search">Search engine</option>
                            <option value="ad">Advertisment</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="news">Newsletter?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="checkbox" name="news" id="news" checked>Yes, please!
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="message">Drop us a line</label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea name="message" id="message" placeholder="Your message"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>&nbsp;</label>
                    </div>
                    <div class="col span-2-of-3">
                        <!-- The value attr of a button is the text that appears on the button. -->
                        <input type="submit" name="submit" value="Send it!" />
                    </div>
                </div>

            </form>
        </div>
    </section>

    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">iOS App</a></li>
                    <li><a href="#">Android App</a></li>
                </ul> 
            </div>

            <div class="col span-1-of-2">
                <ul class="social-links">
                    <li><a href="#"><ion-icon name="logo-facebook" class="facebook-icon"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-twitter" class="twitter-icon"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-google" class="google-icon"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-instagram" class="instagram-icon"></ion-icon></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <p>Copytight &copy; 2020 by Omnifood. All rights reserved.</p>
        </div>

    </footer>

    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>

    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

    <!-- The next <script>s are needed for browser compailibity and are important for older browsers. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>

    <!-- The next <script> allows us to use CSS3 pseudo classes like :last-child and ... on IE6 or IE7 and... -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

    <!-- Our <script> must be at the last <script> we include in our index.php file. -->
    <script src="resources/js/script.js"></script>    
</body>

</html>

















