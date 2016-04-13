<?php
use yii\helpers\Html;
?>
<div class="container" ng-controller="contentController">
<div class="row">
        <div class="col-md-12" ng-show="isDeals">
            <div class="col-md-2" style="padding-top: 10px;">
                <uib-tabset vertical="true" type="tabs" ng-click="displayPage()">
                    <uib-tab ng-repeat="tab in tabs" active="tab.active">
                        <uib-tab-heading>{{tab.title}}</uib-tab-heading>
                    </uib-tab>
                </uib-tabset>
            </div>
            <div class="col-md-10" ng-show="isDeals">
                <ul class="nav nav-pills nav-tabs nav-justified" ng-cloak>
                    <li>
                        <a href>Latest Offers<span class='badge'>100</span></a>
                    </li>
                    <li>
                        <a href>Apartments<span class='badge'>24</span></a>
                    </li>
                    <li>
                        <a href>Houses<span class='badge'>48</span></a>
                    </li>
                    <li>
                        <a href>Hotels deals<span class='badge'>28</span></a>
                    </li>
                    <li>
                        <button class="btn btn-info" data-toggle="collapse" data-target="#filter">
                            <span class="glyphicon glyphicon-search"></span> Filter</button>
                    </li>
                </ul>
                <div id="filter" class="collapse">
                    <div class="col-md-12">
                        <h4 class="col-md-2 col-md-offset-1">Check in</h4>
                        <h4 class="col-md-2 col-md-offset-1">Check out</h4>
                        <h4 class="col-md-2 col-md-offset-1">Region</h4>
                        <h4 class="col-md-2 col-md-offset-1">Type</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3"><md-datepicker ng-model="myDate" md-placeholder="Enter Date"></md-datepicker></div>
                        <div class="col-md-3"><md-datepicker ng-model="myDate1" md-placeholder="Enter Date"></md-datepicker></div>
                        <div class="col-md-3">
                            <ui-select multiple ng-model="multiple.region" theme="select2" ng-disabled="disabled" style="width: 200px;">
                                <ui-select-match placeholder="Select region...">{{$item}}</ui-select-match>
                                <ui-select-choices repeat="region in arrRegions | filter:$select.search">
                                    {{region}}
                                </ui-select-choices>
                            </ui-select>
                        </div>
                        <div class="col-md-3">
                            <ui-select class="col-md-3" multiple ng-model="multiple.type" theme="select2" ng-disabled="disabled" style="width: 200px;">
                                <ui-select-match placeholder="Select residence...">{{$item}}</ui-select-match>
                                <ui-select-choices repeat="type in arrTypes | filter:$select.search">
                                    {{type}}
                                </ui-select-choices>
                            </ui-select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="border: thin; border-color: #0083C9;height: 500px;width: 350px;margin-left: 15px;margin-right: 15px; margin-top: 15px; margin-bottom: 15px; padding-right: 0px;padding-left: 0px;;background-color: #f7f7f7" ng-repeat="tile in tiles">
                    <img ng-src="{{tile.img}}" style="width: 100%; height:60%;"/>
                    <h3 style="text-align: center">{{tile.title}}</h3>
                    <h5 style="text-align: center">{{tile.address}} <span class="glyphicon glyphicon-map-marker" style="cursor: pointer"></span></h5>
                    <h4 style="text-align: center" class="text-danger">MUR 1000</h4>
                    <div style="margin-left: 7px;margin-bottom: 5px">
                        <span class='badge'>Swimming Pool</span>
                        <span class='badge'>Sea View</span>
                        <span class='badge'>Sunset</span>
                        <span class='badge'>Cascavelle</span>
                        <span class='badge'>Value for money</span>
                    </div>
                    <div class="center-block">
                        <button type="button" class="btn btn-warning" style="width: 100px;margin-bottom: 5px;margin-left: 50px ">Details</button>
                        <button type="button" class="btn btn-info" style="width: 100px;margin-bottom: 5px; ">Buy Now</button>
                    </div>

                </div>
            </div>
            <div class="col-md-9" ng-show="isAccount">
                <h1>ACCOUNT</h1>
            </div>
            <div class="col-md-9" ng-show="isBookings">
                <h1>BOOKINGS</h1>
            </div>
            <div class="col-md-9" ng-show="isPrevPurchases">
                <h1>PREVPURCHASES</h1>
            </div>
            <div class="col-md-9" ng-show="isRewardStats">
                <h1>REWARDS</h1>
            </div>
            <div class="col-md-9" ng-show="isNotifs">
                <h1>NOTIFS</h1>
            </div>
            <div class="col-md-9" ng-show="isReviews">
                <h1>REVIEWS</h1>
            </div>
        </div>
    </div>