angular.module("MyApp", []).controller("MyController", function($scope,$http) {
    $scope.login = function()
    {
        if(confirm("Do you want to delete ?"))
        {
            deletePackage_success_cb = function(data)
            {
                if(data.status == "success")
                {
                    $('#package-id-'+package_id).remove();
                }
            }
            //SSK.site_call("AJAX",window._site_url+"admin_packages/deletePackage",{"package_id":package_id}, deletePackage_success_cb);
        }
    }

    $scope.register = function()
    {
        $('.cd-error-message').removeClass('is-visible');
        register_success_cb = function(data)
        {
            if(data.status == "success")
            {
                alert('User registered successfully.')
            }
        }

        register_failure_cb = function(data)
        {
            $.each(data['message'], function( key, value ) {
                $('#r_'+key+'-error').addClass('is-visible').html(value);
            });
        }

        
        if($scope.r_password != $scope.r_password1)
        {
            $('#r_password-error').addClass('is-visible').html('Please enter same password');
            return false;
        }
        request_data = {}
        request_data['username'] = $scope.r_username;
        request_data['email'] = $scope.r_email;
        request_data['password'] = $scope.r_password;
        
        SSK.site_call("AJAX",window._site_url+"profile/register",request_data, register_success_cb,register_failure_cb);
    }
});