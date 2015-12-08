<?php
use dee\angular\NgView;

/* @var $this yii\web\View */
/* @var $widget NgView */

$widget->renderJs('js/form.js');
?>

<div class="sales-std-form">
    <form name="Form" >
        <div ng-if="errorStatus">
            <h1>Error {{errorStatus}}: {{errorText}}</h1>
            <ul>
                <li ng-repeat="(field,msg) in errors">{{field}}: {{msg}}</li>
            </ul>
        </div>

        <div class="form-group required" ng-class="{error:!!errors.number}">
            <label for="sales-number" class="control-label">Number</label>
            <input id="sales-number" name="number" class="form-control" ng-model="model.number">
            <div class="help-block" ng-bind"errors.number"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.branch_id}">
            <label for="sales-branch_id" class="control-label">Branch ID</label>
            <input id="sales-branch_id" name="branch_id" class="form-control" ng-model="model.branch_id">
            <div class="help-block" ng-bind"errors.branch_id"></div>
        </div>
        <div class="form-group" ng-class="{error:!!errors.customer_id}">
            <label for="sales-customer_id" class="control-label">Customer ID</label>
            <input id="sales-customer_id" name="customer_id" class="form-control" ng-model="model.customer_id">
            <div class="help-block" ng-bind"errors.customer_id"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.date}">
            <label for="sales-date" class="control-label">Date</label>
            <input id="sales-date" name="date" class="form-control" ng-model="model.date">
            <div class="help-block" ng-bind"errors.date"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.value}">
            <label for="sales-value" class="control-label">Value</label>
            <input id="sales-value" name="value" class="form-control" ng-model="model.value">
            <div class="help-block" ng-bind"errors.value"></div>
        </div>
        <div class="form-group" ng-class="{error:!!errors.discount}">
            <label for="sales-discount" class="control-label">Discount</label>
            <input id="sales-discount" name="discount" class="form-control" ng-model="model.discount">
            <div class="help-block" ng-bind"errors.discount"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.status}">
            <label for="sales-status" class="control-label">Status</label>
            <input id="sales-status" name="status" class="form-control" ng-model="model.status">
            <div class="help-block" ng-bind"errors.status"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.created_at}">
            <label for="sales-created_at" class="control-label">Created At</label>
            <input id="sales-created_at" name="created_at" class="form-control" ng-model="model.created_at">
            <div class="help-block" ng-bind"errors.created_at"></div>
        </div>
        <div class="form-group" ng-class="{error:!!errors.created_by}">
            <label for="sales-created_by" class="control-label">Created By</label>
            <input id="sales-created_by" name="created_by" class="form-control" ng-model="model.created_by">
            <div class="help-block" ng-bind"errors.created_by"></div>
        </div>
        <div class="form-group required" ng-class="{error:!!errors.updated_at}">
            <label for="sales-updated_at" class="control-label">Updated At</label>
            <input id="sales-updated_at" name="updated_at" class="form-control" ng-model="model.updated_at">
            <div class="help-block" ng-bind"errors.updated_at"></div>
        </div>
        <div class="form-group" ng-class="{error:!!errors.updated_by}">
            <label for="sales-updated_by" class="control-label">Updated By</label>
            <input id="sales-updated_by" name="updated_by" class="form-control" ng-model="model.updated_by">
            <div class="help-block" ng-bind"errors.updated_by"></div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" ng-click="save()">Save</button>
            <button class="btn btn-danger" ng-click="discard()">Save</button>
        </div>
    </form>
</div>