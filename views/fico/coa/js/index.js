var $location = $injector.get('$location');
var search = $location.search();
var $pageInfo = $injector.get('$pageInfo');
$scope.childof = [];
$scope.coagroup = [];

// data provider
$scope.provider = {
    sort: search.sort,
    paging: function() {
        search.page = $scope.provider.page;
        $location.search(search);
    },
    sorting: function() {
        search.sort = $scope.provider.sort;
        $location.search(search);
    }
};

// initial load
query = function() {
    coa.query({
       page: search.page,
       sort: search.sort
    }, function(rows, headerCallback) {
        $pageInfo(headerCallback, $scope.provider);
        $scope.rows = rows;
        var parentbfor = null;
        var indbfor = 0;
        angular.forEach(rows, function(value, key) {
            var has_parent = (value.parent_id !== null) ? true : false;
            var indnow = (parentbfor === value.parent_id) ? indbfor : (has_parent) ? (parentbfor > value.parent_id) ? indbfor - 1 : indbfor + 1 : 0;
            var space = "";
            for (i = 0; i < indnow; i++) {
                space += "\u00A0\u00A0\u00A0\u00A0\u00A0";
            }
            var new_row = angular.extend(value, {'indention': space});
            this.push(new_row);
            parentbfor = value.parent_id;
            indbfor = indnow;
        }, $scope.childof);

        $scope.coagroup = find_in_object($scope.childof, {parent_id: null});
    });
};
query();

// delete Item
$scope.deleteModel = function(model) {
    if (confirm('Are you sure you want to delete')) {
        id = model.id;
        coa.remove({id: id}, {}, function() {
            query();
        });
    }
};

function find_in_object(my_object, my_criteria) {
    return my_object.filter(function(obj) {
        return Object.keys(my_criteria).every(function(c) {
            return obj[c] === my_criteria[c];
        });
    });
}
;