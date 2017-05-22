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

    $scope.r_username = '';
    $scope.r_email = '';
    $scope.r_password = '';
    $scope.r_password1 = '';

    $scope.register = function(sponsername='')
    {
        sponsername = sponsername || '';
        $('.cd-error-message').removeClass('is-visible');
        register_success_cb = function(data)
        {
            if(data.status == "success")
            {
                alert('User registered successfully.')
            }
        }
        
        if($scope.r_password != $scope.r_password1)
        {
            alert('Please enter same password');
            return false;
        }
        request_data = {}
        request_data['username'] = $scope.r_username;
        request_data['email'] = $scope.r_email;
        request_data['password'] = $scope.r_password;
        request_data['sponserUsername'] = sponsername;
        
        SSK.site_call("AJAX",window._site_url+"register/signUp",request_data, register_success_cb);
    }

    $scope.login = function()
    {
        $('.cd-error-message').removeClass('is-visible');
        login_success_cb = function(data)
        {
            if(data.status == "success")
            {
                window.location.href = window._site_url+"dashboard";
            }else if(data.status == 'failed')
            {
                alert("Username and Password not matching.")
            }
        }

        login_failure_cb = function(data)
        {
            $.each(data['message'], function( key, value ) {
                $('#'+key+'-error').addClass('is-visible').html(value);
            });
        }

        request_data = {}
        request_data['username'] = $scope.username;
        request_data['password'] = $scope.password;
        
        SSK.site_call("AJAX",window._site_url+"login/signIn",request_data, login_success_cb,login_failure_cb);
    }
});