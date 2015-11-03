
$location = $injector.get('$location');
// model
$scope.model = {};


// save Item
$scope.save = function(){
    branch.save({},$scope.model,function(model){
        id = model.id;
        $location.path('/' + id);
    },function(r){
        $scope.errors = {};
        $scope.errorStatus = r.status;
        $scope.errorText = r.statusTest;
        if (r.status == 422) {
            angular.forEach(r.data,function(err) {
                $scope.errors[err.field] = err.message;
            });
        }
    });
}

$scope.discard = function(){
    window.history.back();
}
