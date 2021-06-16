<?php include 'header.php' ?>
<body>
    <?php include 'navbar.php' ?>
    
    <div class="container" ng-controller="blogController">
        <div id="blogCards" class="row d-flex flex-wrap py-5 show">

            <div id="blog3" class="card mx-auto" ng-model="blogCard" name="blog3" style="width: 20rem;">
                <div class="card-body">
                    <h4 class="card-title" ng-model="blogTitle" value="Selling Two Homes">Selling Two Homes</h4>
                    <h6 class="card-subtitle text-muted">Helping Two Families in Two Different Ways</h6>
                    <p class="card-text">We recently sold two homes to the families who had entered a Rent 
                        to Own program 2 and 3 years ago. The two families used our program in 2 very different 
                        ways and both prospered.</p>
                    <button id="blog3button" name="Selling Two Homes" class="btn btn-outline-primary" ng-click="changeActiveBlog($event)" >Read More</button>
                </div>
            </div>

            <div id="blog2" class="card mx-auto" ng-model="blogCard" name="blog2" style="width: 20rem;">
                <div class="card-body">
                    <h4 class="card-title">Eliminate my Expensive 2nd Mortgage with RTO</h4>
                    <p class="card-text">We have helped several families eliminate their expensive 2nd mortgage,
                         consolidate their debt and stay in control of their home. </p>
                    <button id="blog2button" class="btn btn-outline-primary" ng-click="changeActiveBlog($event)" >Read More</button>
                </div>
            </div>

            <div id="blog1" class="card mx-auto" ng-model="blogCard" name="blog1" style="width: 20rem;">
                <div class="card-body">
                    <h4 class="card-title">Help! I was approved  </h4>
                    <h6 class="card-subtitle text-muted">Now my mortgage application was denied!</h6>
                    <p class="card-text">I have easily received 3X more calls this week than normal, by clients, 
                        real estate agent and mortgage brokers.  The common question is 
                        “Can a Rent to Own Program Rescue the Offer”. </p>
                    <button id="blog3button" name="Help! I was approved" class="btn btn-outline-primary" ng-click="changeActiveBlog($event)" >Read More</button>
                </div>
            </div>
            
        </div>

        <div id="blogContent" class="row py-5">
            <h3 id="blogTitle" ng-model="title">{{blogTitle}}</h3>
            <div id="blogBody" ng-model="textBody">
                test
            </div>
        </div>


    </div>

    <?php include 'footer.php' ?>
</body>
</html>


<script>
    myApp.controller('blogController', ['$scope', function($scope){

    $scope.init = function(){
        $scope.blogTitle = "Liam";
    }

    $scope.changeActiveBlog = function(event){
        console.log("change vlog");
        console.log($scope.blogTitle);
        console.log(event);
        console.log(event.target.id);
        $scope.blogTitle = event.target.name
    }

    }]);
</script>
