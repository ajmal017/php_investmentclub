angular.module("MyApp", []).controller("MyController", function($scope,$http) {

	$scope.clear_cache = function()
	{
		clear_cache_success_cb = function(data){
			alert_box('Cleared Cache..!!');
		}
		request_data = {};
		SSK.site_call("AJAX",window._site_url+"admin_home/clear_all_cache",request_data, clear_cache_success_cb);
	}
});