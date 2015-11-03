
$location = $injector.get('$location');
$routeParams = $injector.get('$routeParams');

$scope.paramId = $routeParams.id;
// model
GlHeader.get({id:$scope.paramId},function(row){
    $scope.model = row;
});

// delete Item
$scope.deleteModel = function(){
    if(confirm('Are you sure you want to delete')){
        GlHeader.remove({id:$scope.paramId},{},function(){
            $location.path('/');
        });
    }
}