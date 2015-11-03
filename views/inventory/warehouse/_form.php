<?php
use dee\angular\NgView;

/* @var $this yii\web\View */
/* @var $widget NgView */

$widget->renderJs('js/form.js');
?>

<div class="warehouse-form">
    <form name="Form" >
        <div ng-if="errorStatus">
            <h1>Error {{errorStatus}}: {{errorText}}</h1>
            <ul>
                <li ng-repeat="(field,msg) in errors">{{field}}: {{msg}}</li>
            </ul>
        </div>

        <div class="form-group required" ng-class="{error:!!errors.branch_id}">
            <label for="warehouse-branch_id" class="control-label">Branch ID</label>
            <input id="warehouse-branch_id" name="branch_id" class="form-control" ng-model="model.branch_id">
            <div class="help-block" ng-bind"errors.branch_id"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.code}">
            <label for="warehouse-code" class="control-label">Code</label>
            <input id="warehouse-code" name="code" class="form-control" ng-model="model.code">
            <div class="help-block" ng-bind"errors.code"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.name}">
            <label for="warehouse-name" class="control-label">Name</label>
            <input id="warehouse-name" name="name" class="form-control" ng-model="model.name">
            <div class="help-block" ng-bind"errors.name"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.created_at}">
            <label for="warehouse-created_at" class="control-label">Created At</label>
            <input id="warehouse-created_at" name="created_at" class="form-control" ng-model="model.created_at">
            <div class="help-block" ng-bind"errors.created_at"></div>
        </div>
        <div class="form-group" ng-class="{error:!!errors.created_by}">
            <label for="warehouse-created_by" class="control-label">Created By</label>
            <input id="warehouse-created_by" name="created_by" class="form-control" ng-model="model.created_by">
            <div class="help-block" ng-bind"errors.created_by"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.updated_at}">
            <label for="warehouse-updated_at" class="control-label">Updated At</label>
            <input id="warehouse-updated_at" name="updated_at" class="form-control" ng-model="model.updated_at">
            <div class="help-block" ng-bind"errors.updated_at"></div>
        </div>
        <div class="form-group" ng-class="{error:!!errors.updated_by}">
            <label for="warehouse-updated_by" class="control-label">Updated By</label>
            <input id="warehouse-updated_by" name="updated_by" class="form-control" ng-model="model.updated_by">
            <div class="help-block" ng-bind"errors.updated_by"></div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" ng-click="save()">Save</button>
            <button class="btn btn-danger" ng-click="discard()">Save</button>
        </div>
    </form>
</div>