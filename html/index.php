<?php 
require_once("Akshay/connect.php");
//require_once("Akshay/index.php");
?>
<html lang="en" ng-app="myApp">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="description" content="Analysis">

    <title>Analysis</title>

    <script src="content/js/jquery-1.12.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src = "http:////ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.js"></script>
      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Local files -->
<script src = "app.js"></script>
<script src = "controllers/indexCtrl.js"></script>
<script src = "controllers/indexAdminCtrl.js"></script>
<script src = "service/dataService.js"></script>

<link href="content/css/style.css" rel="stylesheet" />

</head>
<body style="margin: 15px 0 15px 0;background:whitesmoke;" ng-controller="indexCtrl">
    
    <!-- One item per row in smaller devices, two in larger -->
    <div class="row" >
		
        <div ng-class="{'card':true, 'col-md-4':true, 'col-md-offset-1':true, 'col-sm-10':true, 'col-sm-offset-1':true, 'col-xs-10':true, 'col-xs-offset-1':true, 'col-xl-8':true,  'col-xl-offset-2':true, 'ms-card': group.projectId == currentProject }" 
			 ng-repeat="group in groups" > 
			
			<div id="pb_{{group.projectId}}" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="1" style="width: 100%;height:10px !important;display:none"></div>
			<h2 >
				{{group.projectName}}
				<img style="float:right;margin-right:20px;" src="content/images/lovedIt.png" class="emoticons" ng-show="group.rating==4">
				<img style="float:right;margin-right:20px;" src="content/images/smilingOpenMouth.png" class="emoticons" ng-show="group.rating==3">
				<img style="float:right;margin-right:20px;" src="content/images/smilingSlightly.png" class="emoticons" ng-show="group.rating==2">
				<img style="float:right;margin-right:20px;" src="content/images/expressionless.png" class="emoticons" ng-show="group.rating==1">
				<img style="float:right;margin-right:20px;" src="content/images/frowningSlightly.png" class="emoticons" ng-show="group.rating==0">

			</h2>
			<hr style="margin:5px;padding:0;"/>
           <div ng-show="group.projectId == currentProject">
				<img src="content/images/lovedIt_bw.png" class="emoticons" ng-click="!(group.projectId==currentProject)||registerInput(group.projectId,4)" ng-show="group.rating!=4">
				<img src="content/images/lovedIt.png" class="emoticons-selected" ng-click="!(group.projectId==currentProject)||registerInput(group.projectId,4)" ng-show="group.rating==4">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="content/images/smilingOpenMouth_bw.png" class="emoticons" ng-click="!(group.projectId==currentProject)||registerInput(group.projectId,3)" ng-show="group.rating!=3">
				<img src="content/images/smilingOpenMouth.png" class="emoticons-selected" ng-click="!(group.projectId==currentProject)||registerInput(group.projectId,3)" ng-show="group.rating==3">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="content/images/smilingSlightly_bw.png" class="emoticons" ng-click="!(group.projectId==currentProject)||registerInput(group.projectId,2)" ng-show="group.rating!=2">	
				<img src="content/images/smilingSlightly.png" class="emoticons-selected" ng-click="!(group.projectId==currentProject)||registerInput(group.projectId,2)" ng-show="group.rating==2">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="content/images/expressionless_bw.png" class="emoticons" ng-click="!(group.projectId==currentProject)||registerInput(group.projectId,1)" ng-show= "group.rating!=1">
				<img src="content/images/expressionless.png" class="emoticons-selected" ng-click="!(group.projectId==currentProject)||registerInput(group.projectId,1)" ng-show="group.rating==1">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="content/images/frowningSlightly_bw.png" class="emoticons" ng-click="!(group.projectId==currentProject)||registerInput(group.projectId,0)" ng-show="group.rating!=0">
				<img src="content/images/frowningSlightly.png" class="emoticons-selected" ng-click="!(group.projectId==currentProject)||registerInput(group.projectId,0)" ng-show="group.rating==0">
				&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
	</div>
        
    </div>
    
    
</body>

<style>

</style>
</html>
