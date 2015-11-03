<?php
use dee\angular\NgView;

/* @var $this yii\web\View */
/* @var $widget NgView */

$widget->renderJs('js/form.js');
?>

<div class="gl-form">
    <form name="Form" >
        <div ng-if="errors.status">
            <h1>Error {{errors.status}}: {{errors.text}}</h1>
            <ul>
                <li ng-repeat="(field,msg) in errors.data">{{field}}: {{msg}}</li>
            </ul>
        </div>

        <div class="form-group required" ng-class="{error:errors.number}">
            <label for="glheader-number" class="control-label">Number</label>
            <input id="glheader-number" name="number" class="form-control" ng-model="model.number">
            <div class="help-block">{{errors.number}}</div>
        </div>
        <div class="form-group required" ng-class="{error:errors.date}">
            <label for="glheader-date" class="control-label">Date</label>
            <input id="glheader-date" name="date" class="form-control" ng-model="model.date">
            <div class="help-block">{{errors.date}}</div>
        </div>
        <div class="form-group required" ng-class="{error:errors.periode_id}">
            <label for="glheader-periode_id" class="control-label">Periode ID</label>
            <input id="glheader-periode_id" name="periode_id" class="form-control" ng-model="model.periode_id">
            <div class="help-block">{{errors.periode_id}}</div>
        </div>
        <div class="form-group required" ng-class="{error:errors.branch_id}">
            <label for="glheader-branch_id" class="control-label">Branch ID</label>
            <input id="glheader-branch_id" name="branch_id" class="form-control" ng-model="model.branch_id">
            <div class="help-block">{{errors.branch_id}}</div>
        </div>
        <div class="form-group required" ng-class="{error:errors.reff_type}">
            <label for="glheader-reff_type" class="control-label">Reff Type</label>
            <input id="glheader-reff_type" name="reff_type" class="form-control" ng-model="model.reff_type">
            <div class="help-block">{{errors.reff_type}}</div>
        </div>
        <div class="form-group" ng-class="{error:errors.reff_id}">
            <label for="glheader-reff_id" class="control-label">Reff ID</label>
            <input id="glheader-reff_id" name="reff_id" class="form-control" ng-model="model.reff_id">
            <div class="help-block">{{errors.reff_id}}</div>
        </div>
        <div class="form-group required" ng-class="{error:errors.description}">
            <label for="glheader-description" class="control-label">Description</label>
            <input id="glheader-description" name="description" class="form-control" ng-model="model.description">
            <div class="help-block">{{errors.description}}</div>
        </div>
        <div class="form-group required" ng-class="{error:errors.status}">
            <label for="glheader-status" class="control-label">Status</label>
            <input id="glheader-status" name="status" class="form-control" ng-model="model.status">
            <div class="help-block">{{errors.status}}</div>
        </div>
        <div class="form-group required" ng-class="{error:errors.created_at}">
            <label for="glheader-created_at" class="control-label">Created At</label>
            <input id="glheader-created_at" name="created_at" class="form-control" ng-model="model.created_at">
            <div class="help-block">{{errors.created_at}}</div>
        </div>
        <div class="form-group" ng-class="{error:errors.created_by}">
            <label for="glheader-created_by" class="control-label">Created By</label>
            <input id="glheader-created_by" name="created_by" class="form-control" ng-model="model.created_by">
            <div class="help-block">{{errors.created_by}}</div>
        </div>
        <div class="form-group required" ng-class="{error:errors.updated_at}">
            <label for="glheader-updated_at" class="control-label">Updated At</label>
            <input id="glheader-updated_at" name="updated_at" class="form-control" ng-model="model.updated_at">
            <div class="help-block">{{errors.updated_at}}</div>
        </div>
        <div class="form-group" ng-class="{error:errors.updated_by}">
            <label for="glheader-updated_by" class="control-label">Updated By</label>
            <input id="glheader-updated_by" name="updated_by" class="form-control" ng-model="model.updated_by">
            <div class="help-block">{{errors.updated_by}}</div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" ng-click="save()">Save</button>
            <button class="btn btn-danger" ng-click="discard()">Save</button>
        </div>
    </form>
</div>