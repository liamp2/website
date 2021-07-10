<!-- FOOTER -->
<footer class="main-footer bg-dark ">
    <div class="container text-primary">
        <div class="row pt-4">

            <div class="col-lg-3 col-sm-6 py-4 order-1">
                <h5 class="text-white">Contact Us</h5>
                <h6>David Patterson <span class="text-muted">
                    <!-- - New Inquiries, Applications and Questions  -->
                </span></h6>
                <p class="text-nowrap">
                    
                    <a href="mailto:david@pumpkinhomes.ca" class="text-decoration-none">david@pumpkinhomes.ca</a> 
                    <br>
                    (647) 848-1668
                </p>
                <!-- <h6>Raquel Patterson <span class="text-muted"> - Administration, Rent and Payments</span></h6>
                <p>Email: <a href="mailto:dgpatters@hotmail.ca" class="text-decoration-none">dgpatters@hotmail.ca</a>
                </p> -->
                <button class="btn btn-success text-white" data-bs-target="#contact-modal" data-bs-toggle="modal">Contact Us Now</button>
            </div>  
            <div class="col-lg-3 col-sm-6 py-4 order-2">
                <h5 class="text-white">Quick Links</h5>
                <div class="text-left">
                    <a href="index.php" class="text-decoration-none">Home</a><br>
                    <a href="rent-to-own-home.php" class="text-decoration-none">Rent To Own Program</a><br>
                    <a href="about.php" class="text-decoration-none">About Us</a><br>
                    <a class="text-decoration-none" href="" data-bs-target="#application-modal" data-bs-toggle="modal">Apply Now</a><br>
                    <a href="partner.php#investors" class="text-decoration-none">Investors</a><br>
                    <a href="partner.php#realtors" class="text-decoration-none">Realtors</a><br>
                    <a href="partner.php#brokers" class="text-decoration-none">Brokers</a><br>
                    <a href="rent-to-own-home.php#faq" class="text-decoration-none">Rent To Own FAQ</a><br>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-4 order-4">
                <h5 class="text-white">Rent to Own and Lease to Own</h5>
                <div class="text-left">Rent to Own a Home and Lease to Own Home Barrie, Simcoe, Orilla, Bracebridge, Muskoka </div>
                <div class="col py-3">
                    <p class="text-muted">&copy; <span id="year"></span> Pumpkin Homes</p>
                </div>
            </div>
            
               
            
            <div class="col-lg-3 col-sm-6 py-4 order-3">
                <h5 class="text-white">Follow Us</h5>
                <a href="https://www.facebook.com/PumpkinHomes" class="text-primary" target="_blank">
                    <i class="fab fa-facebook-square fa-2x" ></i>
                </a>

                <h5 class="text-white my-3">Mailing Address</h5>
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

        </div>

    </div>
</footer>

<!-- CONTACT MODAL -->
<div id="contact-modal" class="modal text-primary" ng-controller="contactFormController">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">Contact Us Now</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body" >
                <form id="contactForm" name="contactForm" ng-init="initForm()">
                    <!-- Name -->
                    <div class="input-group mb-2">
                        <span class="input-group-text text-primary"><i class="fas fa-user form-icon"></i></span>
                        <input type="name" class="form-control" placeholder="Name"
                            name="name"
                            ng-model="form.name"
                            ng-class="{'is-invalid': (contactForm.name.$touched && contactForm.name.$invalid)}" required>
                        <div class="invalid-feedback">
                            Please enter your name.
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="input-group mb-2">
                        <span class="input-group-text text-primary"><i class="fas fa-at"></i></span>
                        <input type="email" class="form-control" placeholder="Email"
                            name="email"
                            ng-model="form.email"
                            ng-class="{'is-invalid': (contactForm.email.$touched && contactForm.email.$invalid)}" required>
                        <div class="invalid-feedback">
                            Please enter your email.
                        </div>
                    </div>
                    <!-- Subject -->
                    <div class="input-group mb-2">
                        <span class="input-group-text text-primary"><i class="fas fa-pencil-alt"></i></span>
                        <input type="Subject" class="form-control" placeholder="Subject"
                            name="subject"
                            ng-model="form.subject"
                            ng-class="{'is-invalid': (contactForm.subject.$touched && contactForm.subject.$invalid)}" required>
                        <div class="invalid-feedback">
                            Please enter a brief subject.
                        </div>
                    </div>
                    <!-- Message -->
                    <div class="input-group mb-2">
                        <span class="input-group-text text-primary"><i class="fas fa-envelope"></i></span>
                        <textarea class="form-control" rows="5" placeholder="Message"
                            name="message"
                            ng-model="form.message"
                            ng-class="{'is-invalid': (contactForm.message.$touched && contactForm.message.$invalid)}" required>
                        </textarea>   
                        <div class="invalid-feedback">
                            Please enter a message.
                        </div> 
                    </div>
                    <!-- Submit Button -->
                    <div class="input-group d-grid mb-2">
                        <button type="submit" class="btn btn-success text-white" id="contactForm" ng-disabled="contactForm.$invalid" ng-click="submitContactForm()">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="success-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-success">Submitted Successfully</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="error-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-danger">There was an error! Try again or contact us directly at david@pumpkinhomes.ca </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
        </div>
    </div>
</div>

<!-- APPLICATION MODAL -->
<div class="modal" id="application-modal" ng-controller="formController">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-primary ">Rent to Own Application</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-wrap">
            <form name="applicationForm" ng-init="initForm()">
            <!-- <form name="applicationForm" action="formSubmit.php" method="POST"> -->
            <div class="mb-3">
                <span class="text-danger">* Indicates a Required Field</span> 
            </div>
            
            <div class="form-group input-group mb-3">
                <label class="input-group-text input-group-width-lg text-wrap">
                        Applicant Name <span class="text-danger"> &nbsp;*</span>  
                </label>
                <input type="name" class="form-control" placeholder="Applicant Name" 
                    name="applicantName" 
                    ng-class="{'is-invalid': (applicationForm.applicantName.$touched && applicationForm.applicantName.$invalid)}"
                    ng-model="form.applicantName" required>
                <div class="invalid-feedback">
                    Applicant name is invalid!
                </div>
            </div>
            
            <div class="form-group text-right input-group mb-3">
                <label for="name" class="input-group-text input-group-width-lg text-wrap">
                    Co-Applicant Name
                </label>
                <input type="name1" class="form-control" placeholder="Co-Applicant Name" 
                    name="coApplicantName" 
                    ng-model="form.coApplicantName">
            </div>

            <div class="form-group input-group mb-3">
                <label for="phone-number" class="input-group-text input-group-width-lg text-wrap">
                    Phone Number <span class="text-danger"> &nbsp;*</span>  
                </label>
                
                <!-- <input type="telNo" class="form-control" placeholder="(123) 456-7890" 
                    name="phoneNumber" 
                    id="phoneNumberInput" 
                    ng-change="changePhoneNumber()"
                    ng-blur="validatePhoneNumber()"
                    ng-class="{'is-invalid': (applicationForm.phoneNumber.$touched && applicationForm.phoneNumber.$invalid)}"
                    ng-model="form.phoneNumber" required> -->
                    <input type="telNo" class="form-control" placeholder="(123) 456-7890" 
                    name="phoneNumber" 
                    id="phoneNumberInput" 
                    ng-pattern="phoneRegex"
                    ng-change="changePhoneNumber()"
                    ng-class="{'is-invalid': (applicationForm.phoneNumber.$touched && applicationForm.phoneNumber.$invalid)}"
                    ng-model="form.phoneNumber" required>
                    
                <div class="invalid-feedback">
                    Phone number is invalid!
                </div>
            </div>

            <div class="form-group input-group mb-3">
                <label for="phone-number" class="input-group-text input-group-width-lg text-wrap">
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
                <label class="input-group-text form-check form-check-inline input-group-width-lg text-wrap">
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
                <label class="input-group-text input-group-width-lg text-wrap">
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
                <label class="input-group-text datepicker input-group-width-lg text-wrap">
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
                <label class="input-group-text input-group-width-lg text-wrap">
                    What value of home are you looking at? <span class="text-danger"> &nbsp;*</span>  
                </label>
                <input type="integer" class="form-control" placeholder="$500,000"
                    name="homeValue"
                    id="homeValue"
                    ng-pattern='dollarRegex'
                    ng-class="{'is-invalid': (applicationForm.homeValue.$touched && applicationForm.homeValue.$invalid)}"
                    ng-model="form.homeValue" required>
                <div class="invalid-feedback">
                    Desired home value is invalid!
                </div>
            </div>

            <div class="form-group input-group mb-3">
                <label class="input-group-text input-group-width-lg text-wrap">
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
                <label class="input-group-text input-group-width-lg text-wrap">
                    What is your houselhold gross annual income? <span class="text-danger"> &nbsp;*</span>  
                </label>
                <input type="integer" class="form-control" placeholder="$50,000" 
                    name="grossIncome"
                    id="grossIncome"
                    ng-pattern='dollarRegex'
                    ng-class="{'is-invalid': (applicationForm.grossIncome.$touched && applicationForm.grossIncome.$invalid)}"
                    ng-model="form.grossIncome" required>
                <div class="invalid-feedback">
                    Annual household gross income is invalid!
                </div>
            </div>
            

            <div class="form-group input-group mb-3">
                <label class="input-group-text input-group-width-lg text-wrap">
                    What amount of down payment can you afford? <span class="text-danger"> &nbsp;*</span>  
                </label>
                <input type="integer" class="form-control" placeholder="$25,000" 
                    name="downPayment" 
                    id="downPayment"
                    ng-pattern='dollarRegex'
                    ng-class="{'is-invalid': (applicationForm.downPayment.$touched && applicationForm.downPayment.$invalid)}"
                    ng-model="form.downPayment" required>
                <div class="invalid-feedback">
                    Downpayment value is invalid!
                </div>
            </div>


            <div class="form-group input-group mb-3 Aligner">
                <label class="input-group-text form-check form-check-inline input-group-width-lg text-wrap">
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
                    <input type="radio" class="form-check-input input-group-width-lg text-wrap" 
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
                <button class="btn btn-primary text-white" type="submit" ng-disabled="applicationForm.$invalid" ng-click="formSubmit(form)">Submit</button>
                <!-- <button class="btn btn-primary text-white" type="submit" id="applicationForm"   ng-click="submitApplication(form)">Submit</button> -->
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
<!-- Input Mask  -->



<script>
    
    // document.getElementById("#toastBtn").onclick = function(){
    //     console.log("toast");
    //     var toastElList = [].slice.call(document.querySelectorAll('.toast'));
    //     var toastList = toastElList.map(function (toastEl) {
    //         return new bootstrap.Toast(toastElList, {})
    //     });
    //     toastList.forEach(toast => toast.show());
    //     console.log(toastList);
        
    //     // var bsAlert = new boostrap.Toast($('#success-toast'));
    //     // bsAlert.show();
    // };
    //get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    $('#homeValue').on('keyup change', function(e) { 
        formatDollarValue(e);
    });  

    $('#grossIncome').on('keyup change', function(e) {
        formatDollarValue(e);
    });

    $('#downPayment').on('keyup change', function(e) {
        formatDollarValue(e);
    });

    function formatDollarValue(e){
        
        var moneyString = e.target.value.replace(/\D/g, '').substring(0,14);
        // var reverseString = moneyString.split("").reverse().join("");
        
        // console.log("input str: " + moneyString);
        var len = moneyString.length;
        var ret = "$";
        if(len> 3){
            ret += moneyString.substr(0, len%3);
            moneyString = moneyString.substr(len%3,);
            var charSegments = moneyString.match(/.{1,3}/g);
            for(i = 0; i < charSegments.length; i ++){
                ret += ((ret == "$") ? "" : ",")  + charSegments[i];                
            }
        } else {
            ret += moneyString;
        }
        // var deleteKey = (e.keyCode == 8 || e.keyCode == 46);
        console.log(ret);
        e.target.value = ret;
    }

    
</script>