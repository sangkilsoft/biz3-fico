<?php
use dee\angular\NgView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $widget NgView */

?>

<div class="sales-pos-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create', '#/create', ['class' => 'btn btn-success']) ?>
    </p>
    <div class="grid-view">
        <table class="table table-striped table-bordered">
            <thead>
                <tr d-sort ng-model="provider.sort" ng-change="provider.sorting()" multisort="false">
                    <th>#</th>
                    <th><a href sort-field="id">Id</a></th>
                    <th><a href sort-field="number">Number</a></th>
                    <th><a href sort-field="branch_id">Branch_id</a></th>
                    <th><a href sort-field="customer_id">Customer_id</a></th>
                    <th><a href sort-field="date">Date</a></th>
<!--
                    <th><a href sort-field="value">Value</a></th>
                    <th><a href sort-field="discount">Discount</a></th>
                    <th><a href sort-field="status">Status</a></th>
                    <th><a href sort-field="created_at">Created_at</a></th>
                    <th><a href sort-field="created_by">Created_by</a></th>
                    <th><a href sort-field="updated_at">Updated_at</a></th>
                    <th><a href sort-field="updated_by">Updated_by</a></th>
-->
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="(no,model) in rows">
                    <td>{{(provider.page-1)*provider.itemPerPage + no + 1}}</td>
                    <td>{{model.id}}</td>
                    <td>{{model.number}}</td>
                    <td>{{model.branch_id}}</td>
                    <td>{{model.customer_id}}</td>
                    <td>{{model.date}}</td>
<!--
                    <td>{{model.value}}</td>
                    <td>{{model.discount}}</td>
                    <td>{{model.status}}</td>
                    <td>{{model.created_at}}</td>
                    <td>{{model.created_by}}</td>
                    <td>{{model.updated_at}}</td>
                    <td>{{model.updated_by}}</td>
-->
                    <td>
                        <a ng-href="#/{{model.id}}"><span class="glyphicon glyphicon-eye-open"></span></a>
                        <a ng-href="#/{{model.id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href ng-click="deleteModel(model)"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <pagination total-items="provider.totalItems" ng-model="provider.page"
                    max-size="5" items-per-page="provider.itemPerPage"
                    ng-change="provider.paging()"
                    class="pagination-sm" boundary-links="true"></pagination>
    </div>
</div>
