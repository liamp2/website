<!-- NAVBAR -->
<nav id="navbar" class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a href="index.php" class="navbar-brand">Pumpkin Homes</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item <?php if($activePage=="index.php"){echo "active";}?>">
                    <a href="index.php" class="nav-link <?php if($activePage=="index.php"){echo "active";}?>">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="feature-home.php" class="nav-link">Feature Home</a>
                </li> -->
                <li class="nav-item <?php if($activePage=="rent-to-own-home.php"){echo "active";}?>">
                    <a href="rent-to-own-home.php" class="nav-link <?php if($activePage=="rent-to-own-home.php"){echo "active";}?>">Rent To Own Program</a>
                </li>
                <li class="nav-item <?php if($activePage=="about.php"){echo "active";}?>">
                    <a href="about.php" class="nav-link <?php if($activePage=="about.php"){echo "active";}?>">About Us</a>
                </li>
                <li class="nav-item">
                    <!-- <a href="apply.php" class="nav-link">Apply Now</a> -->
                    <a href="" class="nav-link" data-bs-target="#application-modal" data-bs-toggle="modal">Apply Now</a>
                </li>
                <li class="nav-item <?php if($activePage=="partner.php"){echo "active";}?>">
                    <a href="partner.php" class="nav-link <?php if($activePage=="partner.php"){echo "active";}?>">Partners</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    window.onscroll = function(e) {
    // print "false" if direction is down and "true" if up
        (this.oldScroll > this.scrollY) ? $('#navbar').addClass('sticky') : $('#navbar').removeClass('sticky');
        this.oldScroll = this.scrollY;
    }
</script>