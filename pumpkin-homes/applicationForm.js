var formApp = angular.module('formApp', []);

formApp.controller('formController', ['$scope', function($scope){


    console.log("liam");
    console.log("localhosts");
    //console.log($scope);
    $scope.creditRating = null;
    console.log($scope);

    $scope.submitForm = function(form){
        console.log('form submitted');
        console.log(form);
        console.log('form submitted2');
        console.log($scope);
    }

}]);