<?php
use dee\angular\NgView;

/* @var $this yii\web\View */
/* @var $widget NgView */

$widget->renderJs('js/form.js');
?>

<div class="acc-periode-form">
    <form name="Form" >
        <div ng-if="errorStatus">
            <h1>Error {{errorStatus}}: {{errorText}}</h1>
            <ul>
                <li ng-repeat="(field,msg) in errors">{{field}}: {{msg}}</li>
            </ul>
        </div>

        <div class="form-group required" ng-class="{error:!!errors.name}">
            <label for="accperiode-name" class="control-label">Name</label>
            <input id="accperiode-name" name="name" class="form-control" ng-model="model.name">
            <div class="help-block" ng-bind"errors.name"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.date_from}">
            <label for="accperiode-date_from" class="control-label">Date From</label>
            <input id="accperiode-date_from" name="date_from" class="form-control" ng-model="model.date_from">
            <div class="help-block" ng-bind"errors.date_from"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.date_to}">
            <label for="accperiode-date_to" class="control-label">Date To</label>
            <input id="accperiode-date_to" name="date_to" class="form-control" ng-model="model.date_to">
            <div class="help-block" ng-bind"errors.date_to"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.status}">
            <label for="accperiode-status" class="control-label">Status</label>
            <input id="accperiode-status" name="status" class="form-control" ng-model="model.status">
            <div class="help-block" ng-bind"errors.status"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.created_at}">
            <label for="accperiode-created_at" class="control-label">Created At</label>
            <input id="accperiode-created_at" name="created_at" class="form-control" ng-model="model.created_at">
            <div class="help-block" ng-bind"errors.created_at"></div>
        </div>
        <div class="form-group" ng-class="{error:!!errors.created_by}">
            <label for="accperiode-created_by" class="control-label">Created By</label>
            <input id="accperiode-created_by" name="created_by" class="form-control" ng-model="model.created_by">
            <div class="help-block" ng-bind"errors.created_by"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.updated_at}">
            <label for="accperiode-updated_at" class="control-label">Updated At</label>
            <input id="accperiode-updated_at" name="updated_at" class="form-control" ng-model="model.updated_at">
            <div class="help-block" ng-bind"errors.updated_at"></div>
        </div>
        <div class="form-group" ng-class="{error:!!errors.updated_by}">
            <label for="accperiode-updated_by" class="control-label">Updated By</label>
            <input id="accperiode-updated_by" name="updated_by" class="form-control" ng-model="model.updated_by">
            <div class="help-block" ng-bind"errors.updated_by"></div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" ng-click="save()">Save</button>
            <button class="btn btn-danger" ng-click="discard()">Save</button>
        </div>
    </form>
</div>