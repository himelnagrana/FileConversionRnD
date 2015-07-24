var app = angular.module('IntroTour', ['angular-intro']);

app.controller('IntroController', function ($scope) {

    $scope.callMe = function (){
        alert('he he he');
    };

    $scope.CompletedEvent = function ($scope) {
        console.log("Completed Event called");
    };

    $scope.ExitEvent = function ($scope) {
        console.log("Exit Event called");
    };

    $scope.ChangeEvent = function (targetElement, $scope) {
        console.log("Change Event called");
        console.log(targetElement);  //The target element
        console.log(this);  //The IntroJS object
    };

    $scope.BeforeChangeEvent = function (targetElement, $scope) {
        console.log("Before Change Event called");
        console.log(targetElement);
    };

    $scope.AfterChangeEvent = function (targetElement, $scope) {
        console.log("After Change Event called");
        console.log(targetElement);
    };

    $scope.IntroOptions = {
        steps:[
            {
                element: document.querySelector('#step1'),
                intro: "This is the first tooltip."
            },
            {
                element: document.querySelectorAll('#step2')[0],
                intro: "<strong>You</strong> can also <em>include</em> HTML",
                position: 'right'
            },
            {
                element: '#step3',
                intro: 'More features, more fun.',
                position: 'left'
            },
            {
                element: '#step4',
                intro: "Another step.",
                position: 'bottom'
            },
            {
                element: '#step5',
                intro: 'Get it, use it.'
            }
        ],
        showStepNumbers: true,
        exitOnOverlayClick: false,
        exitOnEsc: false,
        nextLabel: '<strong style="color:blue;">NEXT!</strong>',
        prevLabel: '<span style="color:green">Previous</span>',
        skipLabel: 'Exit',
        doneLabel: 'Thanks'
    };

    $scope.ShouldAutoStart = false;

});