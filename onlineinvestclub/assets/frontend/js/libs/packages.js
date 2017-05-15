angular.module("MyApp", []).controller("MyController", function($scope,$http) {

    $scope.add_package = function(package_id)
    {
        package_id = package_id || 0;
        quantity = $("#package-id-"+package_id).find(".package_quantity").val() || 0;
        package_name = $("#package-id-"+package_id).find(".package_name").html() || '';

        if(confirm("Do you want to buy "+package_name+" package ?"))
        {
            add_package_success_cb = function(data)
            {
                alert_box(package_name + ' package purchased successfully..!!');
            }
            if(package_id == 0)
            {
                alert_box("Please select Package for "+package_name);
                return false;
            }else if(quantity == 0)
            {
                alert_box("Please enter quantity for "+package_name);
                return false;
            }else if(!$.isNumeric(quantity))
            {
                alert_box("Please enter quantity in integer for "+package_name);
                return false;
            }
            request_data = {};
            request_data['package_id'] = package_id;
            request_data['quantity'] = quantity;
            SSK.site_call("AJAX",window._site_url+"packages/add_user_package",request_data, add_package_success_cb);    
        }
        
    }
});