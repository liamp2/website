<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <!-- CSS only -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
     <!-- SLICK SLIDE -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- <link rel="stylesheet" href="css/slick-theme.css"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pumpkin Homes</title>
</head>
<body>
    
    <?php include 'navbar.php'?>


    <!-- ABOUT US -->
    <section id="about-us">
        <div class="container pt-5 mb-5">
            <div class="row justify-content-around">
                <div class="col-md-5">
                    <h2 class="text-center text-primary">About Pumpkin Homes</h2>
                    <hr class="hr-green">
                    <p class="text-justify">
                        Pumpkin Homes is a family owned business that strives to help families like yours become homeowners. As a boutique private company working with only a few families at a time, we provide a personal relationship with you, and personally invest in every home purchased.
                    </p>
                    <p class="text-justify">
                        We know this is a big decision, and encourage you to take your time and consider all your options. When you are ready we can proceed quickly. And of course it goes without saying that everything between us remains confidential.
                    </p>
                    <p class="text-justify">
                        We have a strong commitment to provide full information disclosure which allows you to make an informed decision. We commit to providing all the agreements in advance of meeting to allow you to review, prepare questions and seek independent legal advice.  If any other RTO company does not provide full disclosure and time to review agreements you should be concerned.
                    </p>
                    <p class="text-justify">
                        We are a married couple blessed with five beautiful children and have been living in Aurora for nearly twenty years.  We understand the importance of a family home and believe strongly that everyone deserves a place to call home. As a business team, David focuses on initial client qualification and the home purchase, while Raquel manages the finances and day-to-day property management.
                    </p>
                    <p class="text-justify">
                        We often get asked why we chose the name Pumpkin Homes. Well the answer is, it is different and hopefully memorable but most importantly pumpkins remind us of many wonderful and cherished family memories. We hope that we can help you to build similar memories in your new home.
                    </p>
                </div>
                <div class="col-md-5">
                    <h2 class="text-center text-primary">Giving Back</h2>
                    <hr class="hr-green">
                    <p class="text-justify">
                        Our company mission is to use our capabilities and energy to help families and children in need. We commit to donating a portion of our proceeds to local and international charities. Currently we are supporting Ronald McDonald House and Free the Children.
                    </p>
                    <p class="text-justify">
                        <a href="https://www.rmhc.org/">Ronald McDonald House</a> - a charity dedicated to helping families with a sick child stay together through illness by providing local housing options for parents who would otherwise need to travel long distances to be with their sick child or pay expensive hotel fees. 
                    </p>
                    <p class="text-justify">
                        <a href="https://www.we.org/en-ca/">Free the Children</a> - an organization dedicated to helping educate and free children from poverty, disease and exploitation in Kenya, Ghana, Haiti, Ecuador and many other locations. It is an amazing organization started by two Toronto men Craig and Marc Kielburger. Our then 16 year old daughter returned from a volunteer trip to Kenya and she has opened our eyes to how we can and should help children around the globe.
                    </p>

                    <div class="kenya-slider">
                        <!-- <div class="img-container"> -->
                            
                            <!-- <img src="img/kenya3.webp"  id="carousel3" class=""> -->
                            <img src="img/kenya1.webp"  id="carousel1" class="">
                        <!-- </div> -->
                        
                        <!-- <div class="img-container"> -->
                            <img src="img/kenya2.webp"  id="carousel2" class="" >
                        <!-- </div> -->
                        
                        <!-- <div class="img-container"> -->
                            <!-- <img src="img/kenya3.webp"  id="carousel3" class="big-img d-none d-md-block "> -->
                        <!-- </div> -->
                        <!-- <div class="img-container"> -->
                            <img src="img/kenya4.webp"  id="carousel4" class="">
                        <!-- </div>
                        <div class="img-container"> -->
                            <img src="img/kenya5.webp"  id="carousel5" class="">
                        <!-- </div> -->
                    </div>

                </div>
            </div>
        </div> 
    </section>

    

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!--SLICK SLIDE  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php include 'footer.php' ?>
    <script>

        //KENYA SLIDER
        $('.kenya-slider').slick({
            inifinite: true,
            slideToShow: 1,
            slideToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            dots: true,
        });
    </script>
</body>
</html>