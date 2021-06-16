<!-- FOOTER -->
<footer class="main-footer bg-dark ">
    <div class="container text-primary">
        <div class="row pt-4">
            <div class="col-lg-3 col-md-6 py-4">
                <h5 class="text-white">Quick Links</h5>
                <div class="text-left">
                    <a href="index.php" class="text-decoration-none">Home</a><br>
                    <a href="RTO.php" class="text-decoration-none">RTO Program</a><br>
                    <a href="about.php" class="text-decoration-none">About Us</a><br>
                    <a class="text-decoration-none" href="" data-bs-target="#application-modal" data-bs-toggle="modal">Apply Now</a><br>
                    <a href="partner.php#investors" class="text-decoration-none">Investors</a><br>
                    <a href="partner.php#realtors" class="text-decoration-none">Realtors</a><br>
                    <a href="partner.php#brokers" class="text-decoration-none">Brokers</a><br>
                    <a href="RTO.php#faq" class="text-decoration-none">FAQ</a><br>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 py-4">
                <h5 class="text-white">Mailing Address</h5>
                <div class="text-left">
                    <p>
                        6-14845 Yonge Street
                        <br>
                        Suite 441
                        <br>
                        Aurora, Ontario
                        <br>
                        L4G 6P7
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 py-4">
                <h5 class="text-white">Contact Us</h5>
                <h6>David Patterson <span class="text-muted"> - New Inquiries, Applications and Questions </span></h6>
                <p>
                    
                    Email: david@pumpkinhomes.ca
                    <br>
                    Phone: (647) 848-1668 EXT 1
                </p>
                <h6>Raquel Patterson <span class="text-muted"> - Administration, Rent and Payments</span></h6>
                <p>
                    Email: dgpatters@hotmail.ca
                </p>
                <button class="btn btn-success text-white" data-bs-target="#contact-modal" data-bs-toggle="modal">Contact Us Now</button>
            </div>     
            
            <div class="col-lg-3 cold-md-6 py-4">
                <h5 class="text-white">Follow Us</h5>
                <a href="https://www.facebook.com/PumpkinHomes" class="text-primary" target="_blank">
                    <i class="fab fa-facebook-square fa-2x" ></i>
                </a>

                <h5 class="text-white py-2">Blog</h5>

                <div class="col py-3">
                    <p class="text-muted">&copy; <span id="year"></span> Pumpkin Homes</p>
                </div>

            </div>

        </div>

    </div>

    
    <!-- CONTACT MODAL -->
    <div id="contact-modal" class="modal text-primary">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Contact Us Now</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body" >
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
                            <button type="submit" class="btn btn-success text-white">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- APPLICATION MODAL -->
<div class="modal" id="application-modal" ng-app="formApp" ng-controller="formController">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-primary ">Rent to Own Application</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
            <form name="applicationForm" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="mb-3">
                <span class="text-danger">* Indicates a Required Field</span> 
            </div>
            
            <div class="form-group input-group mb-3">
                <label class="input-group-text">
                        Applicant Name <span class="text-danger ms-auto"> &nbsp;*</span>  
                </label>
                <input type="name" class="form-control" placeholder="Applicant Name" 
                    name="applicantName" 
                    ng-class="{'is-invalid': (applicationForm.applicantName.$touched && applicationForm.applicantName.$invalid)}"
                    ng-model="form.applicantName" required>
                <div class="invalid-feedback">
                    Applicant name is invalid!
                </div>
            </div>
            
            <div class="form-group input-group mb-3">
                <label for="name" class="input-group-text">
                    Co-Applicant Name
                </label>
                <input type="name1" class="form-control" placeholder="Co-Applicant Name" 
                    name="coApplicantName" 
                    ng-model="form.coApplicantName">
            </div>

            <div class="form-group input-group mb-3">
                <label for="phone-number" class="input-group-text">
                    Phone Number <span class="text-danger"> &nbsp;*</span>  
                    </label>
                <input type="telNo" class="form-control" placeholder="123-456-7890" 
                    name="phoneNumber" 
                    ng-class="{'is-invalid': (applicationForm.phoneNumber.$touched && applicationForm.phoneNumber.$invalid)}"
                    ng-model="form.phoneNumber" required>
                <div class="invalid-feedback">
                    Phone number is invalid!
                </div>
            </div>

            <div class="form-group input-group mb-3">
                <label for="phone-number" class="input-group-text">
                    Email <span class="text-danger"> &nbsp;*</span>   
                </label>
                <input type="email" class="form-control" placeholder="Email" 
                    name="email" 
                    ng-class="{'is-invalid': (applicationForm.email.$touched && applicationForm.email.$invalid)}"
                    ng-model="form.email" required>
                <div class="invalid-feedback">
                    Email is invalid!
                </div>
            </div>

            
            <div class="form-group input-group mb-3 Aligner">
                <label class="input-group-text form-check form-check-inline">
                    Married / Common Law <span class="text-danger"> &nbsp;*</span>  
                </label>              
            
                <div class="form-check form-check-inline Aligner-item">
                    <input type="radio" class="form-check-input" 
                        name="marriedStatus"  
                        value="true" 
                        ng-class="{'is-invalid': (applicationForm.marriedStatus.$touched && applicationForm.marriedStatus.$invalid)}"
                        ng-model="form.marriedStatus" required> 
                    <label for="" class="form-check-label">Yes</label>
                    <div class="invalid-feedback">
                        Married / Common Law Status is invalid!
                    </div>
                </div>
            
            
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" 
                        name="marriedStatus"  
                        value="false" 
                        ng-class="{'is-invalid': (applicationForm.marriedStatus.$touched && applicationForm.marriedStatus.$invalid)}"
                        ng-model="form.marriedStatus" required> 
                    <label for="" class="form-check-label">No</label>
                    <div class="invalid-feedback">
                        Married / Common Law Status is invalid!
                    </div>
                </div>
            </div>
            
        
            <div class="form-group input-group mb-3">
                <label class="input-group-text">
                    What City/Region are you looking to live in? <span class="text-danger">&nbsp; *</span>   
                </label>
                <input type="text" class="form-control" placeholder="City Name" 
                    name="region" 
                    ng-class="{'is-invalid': (applicationForm.region.$touched && applicationForm.region.$invalid)}"
                    ng-model="form.region" required> 
                <div class="invalid-feedback">
                    Desired region is invalid!
                </div>
            </div>

            <div class="form-group input-group mb-3">
                <label class="input-group-text datepicker">
                    When are you looking to move in? <span class="text-danger">&nbsp; *</span>   
                </label>
                <input type="date" class="form-control" placeholder="Move in Date" 
                    name="moveInDate"
                    ng-class="{'is-invalid': (applicationForm.moveInDate.$touched && applicationForm.moveInDate.$invalid)}"
                    ng-model="form.moveInDate" required>
                <div class="invalid-feedback">
                    Desired move in date is invalid!
                </div>
            </div>

            <div class="form-group input-group mb-3">
                <label class="input-group-text">
                    What value of home are you looking at? <span class="text-danger"> &nbsp;*</span>  
                </label>
                <input type="integer" class="form-control" placeholder="$" 
                    name="homeValue"
                    ng-class="{'is-invalid': (applicationForm.homeValue.$touched && applicationForm.homeValue.$invalid)}"
                    ng-model="form.homeValue" required>
                <div class="invalid-feedback">
                    Desired home value is invalid!
                </div>
            </div>

            <div class="form-group input-group mb-3">
                <label class="input-group-text">
                    How many bedrooms? <span class="text-danger"> &nbsp;*</span>  
                </label>
                <input type="number" min="1" max="10" class="form-control" value="3" 
                    name="bedrooms" 
                    ng-class="{'is-invalid': (applicationForm.bedrooms.$touched && applicationForm.bedrooms.$invalid)}"
                    ng-model="form.bedrooms" required>
                <div class="invalid-feedback">
                    Desired number of bedrooms is invalid!
                </div>
            </div>


            <div class="form-group input-group mb-3">
                <label class="input-group-text">
                    What is your houselhold gross annual income? <span class="text-danger"> &nbsp;*</span>  
                </label>
                <input type="number" class="form-control" min="0" max="10000000" placeholder="$" 
                    name="grossIncome"
                    ng-class="{'is-invalid': (applicationForm.grossIncome.$touched && applicationForm.grossIncome.$invalid)}"
                    ng-model="form.grossIncome" required>
                <div class="invalid-feedback">
                    Annual household gross income is invalid!
                </div>
            </div>


            <div class="form-group input-group mb-3">
                <label class="input-group-text">
                    What amount of down payment can you afford? <span class="text-danger"> &nbsp;*</span>  
                </label>
                <input type="number" class="form-control" min="0" max="10000000" placeholder="$" 
                    name="downPayment" 
                    ng-class="{'is-invalid': (applicationForm.downPayment.$touched && applicationForm.downPayment.$invalid)}"
                    ng-model="form.downPayment">
                <div class="invalid-feedback">
                    Downpayment value is invalid!
                </div>
            </div>


            <div class="form-group input-group mb-3 Aligner">
                <label class="input-group-text form-check form-check-inline">
                    Is your credit rating: <span class="text-danger"> &nbsp;*</span>  
                </label>              
            
                <div class="form-check form-check-inline Aligner-item">
                    <input type="radio" class="form-check-input"
                        name="credit-rating" 
                        value="true" 
                        ng-model="form.goodCreditRating" required> 
                    <label for="" class="form-check-label">Good</label>
                </div>
            
            
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" 
                    name="credit-rating"
                    value="false" 
                    ng-model="form.goodCreditRating" required> 
                    <label for="" class="form-check-label">Poor</label>
                </div>
            </div>

            <div class="form-group input-group mb-3 Aligner" ng-show="(form.goodCreditRating == 'false')">
                <label class="input-group-text form-check form-check-inline">
                    Have you met with a credit counsellor? <span class="text-danger"> &nbsp;*</span>  
                </label>              
            
                <div class="form-check form-check-inline Aligner-item">
                    <input type="radio" class="form-check-input" 
                        name="credit-counsellor" 
                        value="true" 
                        ng-model="form.metCounsellor"
                        ng-required="form.goodCreditRating == 'false'"> 
                    <label for="" class="form-check-label">Yes</label>
                </div>
            
            
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" 
                        name="credit-counsellor" 
                        value="false" 
                        ng-model="form.metCounsellor" 
                        ng-required="form.goodCreditRating == 'false'"
                        > 
                    <label for="" class="form-check-label">No</label>
                </div>
            </div>

            <label >Do you have any Questions, Comments or Concerns?</label>
            <div class="form-group input-group mb-3">
                <textarea class="form-control" name="additionalComments" id=""  rows="5" placeholder="Additional Comments" ng-model="form.comments"></textarea>
            </div>

            </form>
        </div>
        <div class="modal-footer ">
            <div class="input-group d-grid">
                <button class="btn btn-primary text-white" type="submit" ng-disabled="applicationForm.$invalid">Submit</button>
            </div>
        </div>
        </div>
    </div>
</div>

 <!-- JQUERY -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!--SLICK SLIDE  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   

<script>
    //get the current year for the copyright
    $('#year').text(new Date().getFullYear());
</script>