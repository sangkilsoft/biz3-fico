
$location = $injector.get('$location');
$routeParams = $injector.get('$routeParams');

$scope.paramId = $routeParams.id;
// model
coa.get({id:$scope.paramId},function(row){
    $scope.model = row;
});

// save Item
$scope.save = function(){
    coa.update({id:$scope.paramId},$scope.model,function(model){
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