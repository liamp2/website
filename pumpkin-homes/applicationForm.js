var formApp = angular.module('formApp', []);

formApp.controller('formController', ['$scope', function($scope){


    console.log("liam");
    //console.log($scope);
    $scope.creditRating = null;
    console.log($scope);

    $scope.submitForm = function(){
        console.log('form submitted');
        console.log($scope);
    }

}]);