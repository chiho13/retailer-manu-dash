var app = angular.module("app", ["xeditable"]);

app.run(function(editableOptions) {
  editableOptions.theme = 'bs3'; // bootstrap3 theme. Can be also 'bs2', 'default'
});

app.controller('Ctrl', function($scope) {
  $scope.user = {
    address: '10224 9th Street, Toronto, Ontario',
    email: "michael.balmer@freshco.ca",
    status: 2
  };  

  // $scope.jdm = {
  //   address: "23242 8th Street",
  //   email: "gill.bates@jdm.ca"
  //   status: 1
  // }

  $scope.statuses = [
    {value: 1, text: 'Yes'},
    {value: 2, text: 'No'},
  
  ]; 

 
});