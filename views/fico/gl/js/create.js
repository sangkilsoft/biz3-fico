
$location = $injector.get('$location');
// model
$scope.model = {};


// save Item
$scope.save = function(){
    GlHeader.save({},$scope.model,function(model){
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
