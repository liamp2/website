var formApp = angular.module('formApp', []);


formApp.controller('formController', ['$scope', function($scope){


    console.log("liam");
    console.log("localhosts");
    //console.log($scope);
    $scope.initForm = function(){
        console.log("initform");
        $scope.form = {
            phoneNumber: "",
            homeValue: "",
            grossIncome: "",
            downPayment: "",
            creditRating: null,
        };
        $scope.dollarRegex = '\\$[0-9]{1,3}\\,?([0-9]{3}\\,?)*';
        $scope.phoneRegex = '\\([0-9]{3}\\) [0-9]{3}-[0-9]{4}';
        //$scope.applicationForm.phoneNumber.$setValidity("ho", true);
        
        console.log($scope.form);
        console.log($scope.applicationForm);
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
        console.log(ph);
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
        console.log(ph);
        e.target.value = ph;
    });

    // $scope.validatePhoneNumber = function() {
    //     // console.log("validate");
    //     // console.log($scope.form.phoneNumber)
    //     var valid = $scope.form.phoneNumber.search(/\([0-9]{3}\) [0-9]{3}-[0-9]{4}/) === 0;
    //     $scope.applicationForm.phoneNumber.$setValidity('phone number is not proper format', valid);
    // }

    // $scope.changePhoneNumber = function() {
    //     // console.log($scope);
    //     if($scope.applicationForm.phoneNumber.$dirty){
    //         var valid = $scope.form.phoneNumber.search(/\([0-9]{3}\) [0-9]{3}-[0-9]{4}/) === 0;
    //         $scope.applicationForm.phoneNumber.$setValidity('phone number is not proper format', valid);
    //     }
    // }

    // $scope.validateDollarValue = function(dataValue, applicationFormField) {
    //     console.log(applicationFormField);
    //     console.log(dataValue);
    //     var valid = dataValue.toString().search(/\$[0-9]{1,3}\,?([0-9]{3}\,?)*/) === 0;
    //     console.log(valid);
    //     applicationFormField.$setValidity("error", valid);
    //     // /$scope.applicationForm.phoneNumber.$setValidity('phone number is not proper format', valid);
    // }

    // $scope.changeDollarValue = function(dataValue) {
    //     console.log(dataValue);
    // }

    $scope.formSubmit = function(){
        
        console.log($scope.form);
        
    }
}]);