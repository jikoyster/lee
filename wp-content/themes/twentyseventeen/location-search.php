
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
<script src="<?php bloginfo("template_url") ?>/assets/js/ng-script.js"></script>


<div id="Location-Search" ng-app="tabApp">
	<div class="wrap tabApp" ng-controller="TabController">
		
		<h3>Buy, sell, rent properties online.</h3>

		<ul>
			<li ng-click="setTab(1)" ng-class="{ selected : isSet(1) }"><a href="#">For Sale</a></li>
			<li ng-click="setTab(2)" ng-class="{ selected : isSet(2) }"><a href="#">For Rent</a></li>
		</ul>

		<div class="tabcontent">
			<div ng-show="isSet(1)"><?php include 'location-search-tab1.php'; ?></div>
			<div ng-show="isSet(2)"><?php include 'location-search-tab2.php'; ?></div>
		</div>

	</div>
</div>



<style>
	#Location-Search{
		position: absolute;
		z-index: 99999;
		top: 2%;

		color: #fff;
		width: 100%;
		background: rgba(0,0,0,.3);
		padding: 20px;
	}
	
	.tabApp h3{
		color: #fff;
		font-size: 2em;
		letter-spacing: 5px;
	}
	.tabApp ul{
		margin: 0;
		padding: 0;
	}
	.tabApp li{
		list-style: none;
		display: inline-block;
	}
	.tabApp li a{
		display: inline-block;
		color: #000;
		background: rgba(255,255,255,.3);
		padding: 5px 20px;
		border-radius: 6px 6px 0 0;
	}
		.tabApp ul li.selected a{
			background: rgba(255,255,255,1);
			outline: none;
		}

	.tabcontent div{
		background: #fff;
		color: #000;
		padding: 10px;
	}

	#ForSale-Form{
		margin: 0;
		padding: 0;
	}
	#ForSale-Form input[type='submit']{
		margin-top: 10px;
	}
	#ForSale-Form select{
		width: 100%;
	}
</style>