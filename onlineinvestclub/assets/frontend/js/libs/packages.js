angular.module("MyApp", []).controller("MyController", function($scope,$http) {

    $scope.add_package = function(package_id)
    {
        package_id = package_id || 0;
        //quantity = $("#package-id-"+package_id).find(".package_quantity").val() || 0;
        package_name = $("#package-id-"+package_id).find(".package_name").html() || '';

        if(confirm("Do you want to buy "+package_name+" package ?"))
        {
            add_package_success_cb = function(data)
            {
                alert_box(package_name + ' package purchased successfully..!!');
                window.location.href=window._site_url+'packages';
            }
            if(package_id == 0)
            {
                alert_box("Please select Package for "+package_name);
                return false;
            }
            request_data = {};
            request_data['package_id'] = package_id;
            SSK.site_call("AJAX",window._site_url+"packages/add_user_package",request_data, add_package_success_cb);    
        }
        
    }

    $scope.show_content = function(file_path)
    {
        $("#play_content").modal('show');
        var config = {
        file: file_path,
        width: '100%',
        aspectratio: '16:9',
        controlbar: 'none',
        androidhls: true,
        mute: false,
        controls:true,
        }
        jwplayer("myElement").setup(config);

        $("#play_content").on("hide.bs.modal", function () {
            jwplayer().stop();
        });      
    }
});