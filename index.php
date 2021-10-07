<!DOCTYPE html>
<html>
<script  src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js">  </script>
<body>
    <div ng-app="myApp" ng-controller="myCtrl">
        <form>
            No of Seats:-<input type="number" ng-model="bname" />
            <input type="button" value="Submit" ng-click="insertData()" />
        </form>
    </div>
    
    

    
    <table ng-app="myapp2" ng-controler="myctrl" >
  <tr ng-repeat="x in names">
    <td>{{ x }}</td>
    
  </tr>
</table>

    
    
    <script>
    var app = angular.module('myApp',[]);
    app.controller('myCtrl',function($scope,$http){    
        $scope.insertData=function(){      
            $http.post("backend.php", {
                'bname':$scope.bname,
            }).then(function(response){
                    console.log("Data Inserted Successfully");
                },function(error){
                    alert("Sorry! Data Couldn't be inserted!");
                    console.error(error);

                });
            }
        });
        
        var app2 = angular.module('myApp2', []);
app.controller('customersCtrl', function($scope, $http) {
  $http.get("backend.php")
  .then(function (response) {$scope.names = response;});
});
    </script>

</body>
</html>