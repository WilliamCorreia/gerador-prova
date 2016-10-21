jQuery("document").ready(function($){
var nav = $('.nav');
$(window).scroll(function () {
if ($(this).scrollTop() > 168) {
nav.addClass("menu-fixo row container");
} else {
nav.removeClass("menu-fixo row container");
}
});
});



var app= angular.module('formfunc', []);
app.controller('funccontroller', function($scope,$http){
	$scope.cadastrar=function(){
		$http.post("insert.php", {'nome':$scope.nome,'mat':$scope.mat,'email':$scope.email,'senha':$scope.senha})
		.sucess(function(data,status,headers,config){
			console.log("Registrado com sucesso!");

		});
	}
	
});


var app = angular.module('myApp', []);
app.controller('inicioCtrl', function($scope) {
    $scope.iniciar = "A pagina inicio mostra os registros de eventos que estão marcados para acontecer nos proximos dias.",
    $scope.insere = "A pagina inserir registro permite ao usuario criar um novo evento determinando data, hora, local, quantidade de publico e até colocar imagens anexadas.",
    $scope.relatorio = "A pagina relatorio permite que voce tire relatorios como por exemplo, quantos eventos aconteceram este mês ou nos ultimos 6 meses.",
    $scope.download = "A pagina de Download "
    $scope.myVar = false;
    $scope.myVar2 = false;
    $scope.myVar3 = false;
    $scope.myVar4 = false;
    $scope.toggle1 = function() {
        $scope.myVar = !$scope.myVar;
    };
    $scope.toggle2 = function() {
        $scope.myVar2 = !$scope.myVar2;
    };
    $scope.toggle3 = function() {
        $scope.myVar3 = !$scope.myVar3;
    };
    $scope.toggle4 = function() {
        $scope.myVar4 = !$scope.myVar4;
    };
});
