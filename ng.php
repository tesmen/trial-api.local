<meta charset="utf-8">
<script src="angular/angular.js"></script>
<script src="angular-notify.js"></script>
<script src="iq-notify.js"></script>
<link rel="stylesheet" href="notify.css">

<script>
    angular.module('myApp', ['cgNotify', 'iqNotify'])
        .controller('ctrl', function ($scope,$rootScope, notify, facc) {
            $rootScope.i18nCache = {};

            $rootScope.i18n = function(){
                return $rootScope.i18nCache
            };

            $scope.getIt = function () {
                $rootScope.i18nCache[$scope.keeey] = $scope.vaaal;
                console.log($rootScope.i18nCache[$scope.keeey]);
            }
        })
    ;
</script>

<div ng-app="myApp" ng-cloak>
    <div ng-controller="ctrl">
        <input type="text" ng-model="keeey" placeholder="key">
        <input type="text" ng-model="vaaal">
        <button ng-click="getIt()">load</button>
        <span> {{ i18n() | json }}</span>
    </div>
</div>
