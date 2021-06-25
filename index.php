<?php include 'header.php' ?>
<body>
    <div>
        <section id="home" class="active">
            <div class="text flex">
                <h1>Hello, I am <span class="accent"> Liam Patterson!</span> </h1>
                <h2>This site is still under construction, </h2>
                <h2>please check back soon for updates!</h2>
            </div>
        </section>
        
        <nav class="sticky topNav" id="myTopNav">
            <a class="nav-link" href="#home" onClick="resizeBar()">Home</a> 
            <a class="nav-link" href="#about" onClick="resizeBar()">About</a>
            <a class="nav-link" href="#projects" onClick="resizeBar()">Projects</a> 
            <a class="nav-link" href="#blog" onClick="resizeBar()">Blog</a>
            <a class="nav-link" href="#contact" onClick="resizeBar()">Contact</a>
            <a href="javascript:void(0);" class="nav-link icon" onClick="resizeBar()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>

        <section id="about">
            <div>
                <h1 class="header">About</h1>

                <p class="text flex">
                    I am currently a third year computer engineering student at Queen's University. 
                    I am looking to practice my web development skills, while also making a professional portfolio.
                </p>
            </div>
        </section>
        <section id="projects">
            <div>
                <h1 class="header"> Projects </h1>
                <p class="text flex">
                   I will be listing programming projects that I have been working on here. 
                </p>
            </div>
        </section>
        <section id="blog" >
            <div padding-bottom: 2000>
                <h1 class="header">Blog</h1> 
                <p class="text flex">
                   I will be writing a blog here where I will talk about whatever I feel like. 
                </p>
            </div>
        </section>
        <section id="contact">
            <div>
                <h1 class="header">Contact</h1> 
                <p class="text flex">
                   You can reach me at liampatterson02@gmail.com
                    <br>
                    or connect with me with using one of the links below
                </p>
                <div class="flex row">
                    <a href="https://github.com/liamp2">
                        <div class="socials">
                            <i class="fab fa-github-square fa-2x"></i>
                        </div>
                    </a>

                    <a href="https://www.linkedin.com/in/liam-patterson-bb6a0a177/">
                        <div class="socials">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </div>
                    </a>
                           
                      
                </div>
            </div>
        </section>
    </div>
</body>
<?php include 'footer.php'?>
</html>