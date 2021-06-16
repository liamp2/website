<?php
    // if($_POST["message"]) {

   // $name = $_POST['applicantName'];
   // echo $name;
    // if(mail("liamhockey2@gmail.com","Here is the subject line", "my message")){
    //     echo "Success";
    // } else{
    //     echo "erorr";
    // }
    // }
?>

<!DOCTYPE html>
<html lang="en" ng-app="formApp">
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
   
    <!-- ANGULAR -->
    <script src="https://code.angularjs.org/1.8.2/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.8.2/angular-messages.min.js"></script>
    <script src="https://code.angularjs.org/1.8.2/angular-route.min.js"></script>
    <script src="applicationForm.js"></script>
    
    <title>Pumpkin Homes</title>
</head>
<body>

    <?php include 'navbar.php' ?>

    <!-- APPLICATION MODAL -->
    <div class="modal" id="application-modal" ng-controller="formController">
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
    
</body>
</html>