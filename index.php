<?php include 'header.php' ?>
<body data-bs-spy="scroll" data-bs-target="#nav-menu">
    
<section id="landing" class="">
    <div class="main-background vertical-align">
        
        <div class="vertical-align-self">
        
            <h1 id="myName" class="text-accent">Liam Patterson</h1>
        
        </div> 
    </div>
</section>

<nav id="nav-menu" class="navbar navbar-expand sticky-top bg-alternate">
    <div class="container">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#about" class="nav-link active">About Me</a>
                </li>
                <li class="nav-item">
                    <a href="#experiences" class="nav-link">My Experiences</a>
                </li>
                <li class="nav-item">
                    <a href="#projects" class="nav-link">Projects</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ABOUT -->
<section id="about" class="bg-dark py-5">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-5 d-flex justify-content-center">
                <img class="img-rounded" src="assets/img/headshot.jpg" alt="">
            </div>
            <div class="col-md-7 text-center">
                <h1 class="text-secondary">Who Am I?</h1>
                <div class="d-flex justify-content-center">
                    <hr class="hr-accent">
                </div>
                <p class="text-secondary">
                    I am a computer engineering student currently attending Queen's University and an aspiring software developer.
                    I have been programming and learning about software development for over 6 years. 
                    I have a passion for creating software and like to use my projects as a creative outlet for myself. 
                </p>
            </div>
        </div>
    </div>
</section>

<!-- WORK Experiences -->
<section id="experiences" class="bg-primary py-5">
    <div class="container py-5">
        
        <div class="text-center">
            <h1 class="text-secondary">My Professional Experience</h1>
            <div class="d-flex justify-content-center">
                <hr class="hr-accent">
            </div>
        </div>
        <div class="work-experience bg-primary-shade">
            <div class="work-header">
                <div class="vertical-align d-flex justify-content-between">
                    <a href="https://www.extremenetworks.com" target="_blank"><img class="company-logo" src="assets/img/extremenetworks_logo.png" alt=""></a>
                    <div class="vertical-align-self text-end">
                        <h3 class="text-secondary">Developer Co-Op</h3>
                        <h5 class="text-secondary ">May 2021 - Present</h5>
                    </div>
                </div>
            </div>
            <div class="work-body text-secondary py-3">
                <ul>
                    <li>
                        Bullet point 1
                    </li>
                    <li>
                        Bullet Point 2
                    </li>
                    <li>
                        Bullet Point 3
                    </li>
                </ul>
            </div>
        </div>

        
    </div>
</section>

<section id="projects" class="bg-dark py-5">
    <div class="container py-5">
        <div class="text-center">
            <h1 class="text-secondary">Personal Projects</h1>
            <div class="d-flex justify-content-center">
                <hr class="hr-accent">
            </div>
        </div>
    </div>
</section>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
    //init scrollspy
    
</script>
<?php include 'footer.php' ?>