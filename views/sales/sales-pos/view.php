<?php
use dee\angular\NgView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $widget NgView */

?>

<div class="sales-pos-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <a ng-href="#/{{paramId}}/edit" class="btn btn-primary">Update</a>
        <a href ng-click="deleteModel()"class="btn btn-danger">Delete</a>
    </p>

    <table class="table table-striped table-bordered detail-view">
        <tr><th>ID</th><td>{{model.id}}</td></tr>
        <tr><th>Number</th><td>{{model.number}}</td></tr>
        <tr><th>Branch ID</th><td>{{model.branch_id}}</td></tr>
        <tr><th>Customer ID</th><td>{{model.customer_id}}</td></tr>
        <tr><th>Date</th><td>{{model.date}}</td></tr>
        <tr><th>Value</th><td>{{model.value}}</td></tr>
        <tr><th>Discount</th><td>{{model.discount}}</td></tr>
        <tr><th>Status</th><td>{{model.status}}</td></tr>
        <tr><th>Created At</th><td>{{model.created_at}}</td></tr>
        <tr><th>Created By</th><td>{{model.created_by}}</td></tr>
        <tr><th>Updated At</th><td>{{model.updated_at}}</td></tr>
        <tr><th>Updated By</th><td>{{model.updated_by}}</td></tr>
    </table>
</div>