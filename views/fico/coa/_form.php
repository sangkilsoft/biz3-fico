<?php
use dee\angular\NgView;

/* @var $this yii\web\View */
/* @var $widget NgView */

$widget->renderJs('js/form.js');
?>

<div class="coa-form">
    <form name="Form" >
        <div ng-if="errorStatus">
            <h1>Error {{errorStatus}}: {{errorText}}</h1>
            <ul>
                <li ng-repeat="(field,msg) in errors">{{field}}: {{msg}}</li>
            </ul>
        </div>

        <div class="form-group" ng-class="{error:!!errors.parent_id}">
            <label for="coa-parent_id" class="control-label">Parent ID</label>
            <input id="coa-parent_id" name="parent_id" class="form-control" ng-model="model.parent_id">
            <div class="help-block" ng-bind"errors.parent_id"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.code}">
            <label for="coa-code" class="control-label">Code</label>
            <input id="coa-code" name="code" class="form-control" ng-model="model.code">
            <div class="help-block" ng-bind"errors.code"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.name}">
            <label for="coa-name" class="control-label">Name</label>
            <input id="coa-name" name="name" class="form-control" ng-model="model.name">
            <div class="help-block" ng-bind"errors.name"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.type}">
            <label for="coa-type" class="control-label">Type</label>
            <input id="coa-type" name="type" class="form-control" ng-model="model.type">
            <div class="help-block" ng-bind"errors.type"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.normal_balance}">
            <label for="coa-normal_balance" class="control-label">Normal Balance</label>
            <input id="coa-normal_balance" name="normal_balance" class="form-control" ng-model="model.normal_balance">
            <div class="help-block" ng-bind"errors.normal_balance"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.created_at}">
            <label for="coa-created_at" class="control-label">Created At</label>
            <input id="coa-created_at" name="created_at" class="form-control" ng-model="model.created_at">
            <div class="help-block" ng-bind"errors.created_at"></div>
        </div>
        <div class="form-group" ng-class="{error:!!errors.created_by}">
            <label for="coa-created_by" class="control-label">Created By</label>
            <input id="coa-created_by" name="created_by" class="form-control" ng-model="model.created_by">
            <div class="help-block" ng-bind"errors.created_by"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.updated_at}">
            <label for="coa-updated_at" class="control-label">Updated At</label>
            <input id="coa-updated_at" name="updated_at" class="form-control" ng-model="model.updated_at">
            <div class="help-block" ng-bind"errors.updated_at"></div>
        </div>
        <div class="form-group" ng-class="{error:!!errors.updated_by}">
            <label for="coa-updated_by" class="control-label">Updated By</label>
            <input id="coa-updated_by" name="updated_by" class="form-control" ng-model="model.updated_by">
            <div class="help-block" ng-bind"errors.updated_by"></div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" ng-click="save()">Save</button>
            <button class="btn btn-danger" ng-click="discard()">Save</button>
        </div>
    </form>
</div>