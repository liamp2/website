var formApp = angular.module('formApp', []);

formApp.controller('contactFormController', ['$scope', function($scope){
    $scope.initForm = function() {
        console.log("contact form init");
    }

    $scope.submitContactForm = function(){
        console.log($scope.form);
        var encoded = JSON.stringify($scope.form);
         console.log(encoded);

        console.log(JSON.parse(encoded));
        $.post('formSubmit.php', {data: encoded}, function(data){
            console.log("posted contact");
            // console.log(data);
            var win = window.open("", "Title", "toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=780,height=200,top="+(screen.height-400)+",left="+(screen.width-840));
            win.document.body.innerHTML = data;
            //window.open('formSubmit.php');

        });
        
    }
}]);

formApp.controller('formController', ['$scope', function($scope){

    $scope.initForm = function(){
        console.log("initform");
        $scope.form = {
            applicantName: "",
            coApplicantName: "",
            email: "",
            phoneNumber: "",
            homeValue: "",
            grossIncome: "",
            downPayment: "",
        };

        $scope.dollarRegex = '\\$[0-9]{1,3}\\,?([0-9]{3}\\,?)*';
        $scope.phoneRegex = '\\([0-9]{3}\\) [0-9]{3}-[0-9]{4}';
        //$scope.applicationForm.phoneNumber.$setValidity("ho", true);
        
        // console.log($scope.form);
        // console.log($scope.applicationForm);
    }
   
    $('#phoneNumberInput').on('keyup change', function(e) {
        // console.log("beginning of function");
        // console.log(this.value);
        // var ph = this.value.replace(/^[^\+\d]?/g, '');
        // var longDistance = ph.search(/\+/g);
        // console.log("start of string: ");
        // console.log(longDistance);
        // this.value = longDistance;
        var ph = this.value.replace(/\D/g,'').substring(0,10);
        // console.log(ph);
        // Backspace and Delete keysup
        var deleteKey = (e.keyCode == 8 || e.keyCode == 46);
        var len = ph.length;
        if(len == 0) {
            ph = ph;
        } else if(len < 3){
            ph = '(' + ph;
        } else if(len == 3){
            ph = '(' + ph + (deleteKey ? '' : ') ');
        } else if(len < 6){
            ph = '(' + ph.substring(0,3) + ') ' + ph.substring(3,6);
        } else if(len == 6){
            ph = '(' + ph.substring(0,3) + ') ' + ph.substring(3,6) + (deleteKey ? '' : '-');
        } else {
            ph = '(' + ph.substring(0,3) + ') ' + ph.substring(3,6) + '-' + ph.substring(6,10);
        }
        //console.log(ph);
        e.target.value = ph;
    });


    $scope.submitApplication = function(){
        var encoded = JSON.stringify($scope.form);
        // console.log(encoded);

        // console.log(JSON.parse(encoded));
        $.post('formSubmit.php', {data: encoded}, function(data){
            console.log("posted");
            // console.log(data);
            var win = window.open("", "Title", "toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=780,height=200,top="+(screen.height-400)+",left="+(screen.width-840));
            win.document.body.innerHTML = data;
            //window.open('formSubmit.php');

        });
        
    }
}]);