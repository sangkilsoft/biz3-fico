
$location = $injector.get('$location');
$routeParams = $injector.get('$routeParams');

$scope.paramId = $routeParams.id;
// model
AccPeriode.get({id:$scope.paramId},function(row){
    $scope.model = row;
});

// save Item
$scope.save = function(){
    AccPeriode.update({id:$scope.paramId},$scope.model,function(model){
        id = model.id;
        $location.path('/' + id);
    },function(r){
        $scope.errors = {status: r.status, text: r.statusText, data: {}};
        if (r.status == 422) {
            angular.forEach(r.data,function(err) {
                $scope.errors.data[err.field] = err.message;
            });
        }
    });
}

$scope.discard = function(){
    window.history.back();
}