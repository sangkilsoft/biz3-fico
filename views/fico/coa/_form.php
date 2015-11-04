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
        <div class="form-group required" ng-class="{error:!!errors.normal_balance}">
            <label for="coa-normal_balance" class="control-label">Normal Balance</label>
            <input id="coa-normal_balance" name="normal_balance" class="form-control" ng-model="model.normal_balance">
            <div class="help-block" ng-bind"errors.normal_balance"></div>
        </div>        
        <div class="form-group">
            <button class="btn btn-primary" ng-click="save()">Save</button>
            <button class="btn btn-danger" ng-click="discard()">Discard</button>
        </div>
    </form>
</div>