<!-- FOOTER -->
<footer class="main-footer bg-dark ">
    <div class="container text-center text-primary">
        <div class="pt-4">
            <div class="col-lg-6 m-auto">
                <h3>Contact Us Now</h3>
                <form id="contactForm" action="">
                    <div class="input-group mb-2">
                        <span class="input-group-text"><i class="fas fa-user form-icon"></i></span>
                        <input type="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                        <input type="Subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <textarea class="form-control" rows="5" placeholder="Message"></textarea>    
                    </div>
                    <div class="input-group d-grid mb-2">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
                
            </div>
        </div>
        <div class="col pb-1">
            <p class="text-muted">Copyright &copy; <span id="year"></span></p>
        </div>
    </div>
</footer>

<script>
    //get the current year for the copyright
    $('#year').text(new Date().getFullYear());
</script>