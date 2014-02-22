<!DOCTYPE html>
<html lang="zh-TW" ng-app>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
  <title>課程列表</title>
  <!-- <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/edit.css') }}"> -->

  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js"></script>
</head>

<body>

  <div ng-controller="DepartmentController">
    <table>
      <thead>
        <tr>
          <th>學校</th>
          <th>科系名稱</th>
          <th>網址</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="d in departments" ng-click="show(d)">
          <td>{{ d.school }}</td>
          <td>{{ d.department }}</td>
          <td>{{ d.website }}</td>
        </tr>
      </tbody>
    </table>
  </div>

</body>

<script>
  function DepartmentController ($scope, $http) {
    $http.get('/api/departments').success(function (data) {
      $scope.departments = data;
    });

    $scope.show = function (d) {
      location.pathname = './courses/' + d.id;
    }
  }
</script>
</html>
