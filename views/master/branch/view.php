<?php
use dee\angular\NgView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $widget NgView */

?>

<div class="branch-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <a ng-href="#/{{paramId}}/edit" class="btn btn-primary">Update</a>
        <a href ng-click="deleteModel()"class="btn btn-danger">Delete</a>
    </p>

    <table class="table table-striped table-bordered detail-view">
        <tr><th>ID</th><td>{{model.id}}</td></tr>
        <tr><th>Orgn ID</th><td>{{model.orgn_id}}</td></tr>
        <tr><th>Code</th><td>{{model.code}}</td></tr>
        <tr><th>Name</th><td>{{model.name}}</td></tr>
        <tr><th>Created At</th><td>{{model.created_at}}</td></tr>
        <tr><th>Created By</th><td>{{model.created_by}}</td></tr>
        <tr><th>Updated At</th><td>{{model.updated_at}}</td></tr>
        <tr><th>Updated By</th><td>{{model.updated_by}}</td></tr>
    </table>
</div>