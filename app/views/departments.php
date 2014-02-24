<!DOCTYPE html>
<html lang="zh-TW" ng-app>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
  <title>科系列表</title>
  <!-- <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/edit.css') }}"> -->
  <style>
    .row{
      cursor: pointer;
    }
    .row:hover{
      background: ghostwhite;
    }
    .center-block{
      display: block;
      margin: auto;
    }
  </style>

  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js"></script>
</head>

<body>

  <div ng-controller="DepartmentController">
    <img src="<?= URL::asset('img/ajax-loader.gif') ?>" alt="LOADING..." ng-hide="departments" class="center-block">
    <table ng-show="departments">
      <thead>
        <tr>
          <th>學校</th>
          <th>科系名稱</th>
          <th>網址</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="d in departments" ng-click="show(d)" class="row">
          <td>{{ d.school }}</td>
          <td>{{ d.department }}</td>
          <td><a ng-href="{{ d.website }}">{{ d.website }}</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

<script>
  function DepartmentController ($scope, $http, $timeout) {
    $timeout(function () {
      $http.get('<?= URL::action('DepartmentApiController@index'); ?>').success(function (data) {
        $scope.departments = data;
      });
    }, 500);

    $scope.show = function (d) {
      location.href = '<?=url('/');?>/courses/' + d.id;
    }
  }
</script>
</html>
