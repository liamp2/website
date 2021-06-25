<?php include 'header.php' ?>
<body>
<?php $activePage = 'about.php' ?>
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
                    <a href="https://www.rmhc.org/" target="_blank">Ronald McDonald House</a> - a charity dedicated to helping families with a sick child stay together through illness by providing local housing options for parents who would otherwise need to travel long distances to be with their sick child or pay expensive hotel fees. 
                </p>
                <p class="text-justify">
                    <a href="https://www.sickkids.ca/" target="_blank">SickKids | The Hospital for Sick Children</a> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam, molestias?
                </p>

                <div class="kenya-slider">
                    <!-- <div class="img-container"> -->
                        
                        
                        <img src="img/kenya1.webp"  id="carousel1" class="">
                    <!-- </div> -->
                    
                    <!-- <div class="img-container"> -->
                        <img src="img/kenya2.webp"  id="carousel2" class="" >
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