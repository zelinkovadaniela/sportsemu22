//   app.controller('profileController', function($scope, $http) {

// 	$http.get('/api/profile')
// .success(function(data, status, headers, config) {
//      $scope.profiles = data;
// })
// .error(function(error, status, headers, config) {
//      console.log(status);
//      console.log("Error occured");
// });



app.controller('profileController', function($scope) {

  $scope.color = {
    red: Math.floor(Math.random() * 255),
    green: Math.floor(Math.random() * 255),
    blue: Math.floor(Math.random() * 255)
  };

  $scope.rating1 = 3;
  $scope.rating2 = 2;
  $scope.rating3 = 4;

  $scope.disabled1 = Math.floor(Math.random() * 100);
  $scope.disabled2 = 0;
  $scope.disabled3 = 70;

  $scope.invert = Math.floor(Math.random() * 100);

  $scope.isDisabled = true;
    app.config(function($mdIconProvider) {
    $mdIconProvider
      app.iconSet('device', 'img/icons/sets/device-icons.svg', 24);
  })
});


/**
Copyright 2016 Google Inc. All Rights Reserved. 
Use of this source code is governed by an MIT-style license that can be foundin the LICENSE file at http://material.angularjs.org/HEAD/license.
**/

// 	$http.get('/api/listings')
// .success(function(data, status, headers, config) {
//      $scope.listings = data;
// })
// .error(function(error, status, headers, config) {
//      console.log(status);
//      console.log("Error occured");
// });









//     $scope.user = {
//       title: '{}',
//       email: '',
//       firstName: 'test',
//       lastName: '',
//       company: 'Google',
//       address: '1600 Amphitheatre Pkwy',
//       city: 'Mountain View',
//       state: 'CA',
//       biography: 'Loves kittens, snowboarding, and can type at 130 WPM.\n\nAnd rumor has it she bouldered up Castle Craig!',
//       postalCode: '94043'
//     };

//     $scope.states = ('AL AK AZ AR CA CO CT DE FL GA HI ID IL IN IA KS KY LA ME MD MA MI MN MS ' +
//     'MO MT NE NV NH NJ NM NY NC ND OH OK OR PA RI SC SD TN TX UT VT VA WA WV WI ' +
//     'WY').split(' ').map(function(state) {
//         return {abbrev: state};
//       }).config(function($mdThemingProvider) {

//     // Configure a dark theme with primary foreground yellow

//     $mdThemingProvider.theme('docs-dark', 'default')
//       .primaryPalette('yellow')
//       .dark();

//   });

