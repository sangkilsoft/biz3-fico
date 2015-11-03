var $location = $injector.get('$location');
var search = $location.search();
var $pageInfo = $injector.get('$pageInfo');

// data provider
$scope.provider = {
    sort: search.sort,
    paging: function () {
        search.page = $scope.provider.page;
        $location.search(search);
    },
    sorting:function(){
        search.sort = $scope.provider.sort;
        $location.search(search);
    }
};

// initial load
query = function(){
    accPeriode.query({
        page: search.page,
        sort: search.sort,
    }, function (rows, headerCallback) {
        $pageInfo(headerCallback, $scope.provider);
        $scope.rows = rows;
    });
}
query();

// delete Item
$scope.deleteModel = function(model){
    if(confirm('Are you sure you want to delete')){
        id = model.id;
        accPeriode.remove({id:id},{},function(){
            query();
        });
    }
}