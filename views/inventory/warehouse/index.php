<?php

use dee\angular\NgView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $widget NgView */
?>

<div class="warehouse-index">
    <div class="box box-primary">
        <div class="box-header with-border">
            <?= Html::a('Create', '#/create', ['class' => 'btn btn-success']) ?>
        </div>
        <div class="box-body">
            <div class="grid-view">
                <table class="table table-hover">
                    <thead>
                        <tr d-sort ng-model="provider.sort" ng-change="provider.sorting()" multisort="false">
                            <th>#</th>
                            <th><a href sort-field="id">Id</a></th>
                            <th><a href sort-field="branch_id">Branch_id</a></th>
                            <th><a href sort-field="code">Code</a></th>
                            <th><a href sort-field="name">Name</a></th>
        <!--                <th><a href sort-field="created_at">Created_at</a></th>
                            <th><a href sort-field="created_by">Created_by</a></th>
                            <th><a href sort-field="updated_at">Updated_at</a></th>
                            <th><a href sort-field="updated_by">Updated_by</a></th>
                            -->
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="(no,model) in rows">
                            <td>{{(provider.page - 1) * provider.itemPerPage + no + 1}}</td>
                            <td>{{model.id}}</td>
                            <td>{{model.branch_id}}</td>
                            <td>{{model.code}}</td>
                            <td>{{model.name}}</td>
                            <!--
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
            </div>
        </div>
        <div class="box-footer">
            <pagination total-items="provider.totalItems" ng-model="provider.page"
                        max-size="5" items-per-page="provider.itemPerPage"
                        ng-change="provider.paging()"
                        class="pagination-sm" boundary-links="true"></pagination>
        </div>
    </div>
</div>