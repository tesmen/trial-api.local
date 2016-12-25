<meta charset="utf-8">
<script src="/vendor/angular_1.5.8/angular.js"></script>
<script src="/vendor/angular_1.5.8/angular-notify.js"></script>
<link rel="stylesheet" href="notify.css">

<script>
    angular.module('myApp', [])
        .controller('ctrl', function ($scope) {
            $scope.text = 'Hello';
        })
    ;
</script>

<div ng-app="myApp" ng-cloak>
    <div ng-controller="ctrl">
        {{ text }}
    </div>

</div>
