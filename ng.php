<meta charset="utf-8">

<!--<script src="jquery-3.1.0.min.js"></script>-->
<!--<script src="bootstrap.js"></script>-->
<script src="angular/angular.js"></script>
<script src="angular/angular-route.js"></script>
<script src="angular/controllers.js"></script>


<div ng-app="myApp">
    <div class="nav navbar">
        <a href="#red">Red</a>
        <a href="#blue">Blue</a>
    </div>

    <ng-view></ng-view>

    <script type="text/ng-template" id="blue.htm">
        blue
    </script>
</div>
