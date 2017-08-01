angular.module("MyApp", []).controller("MyController", function($scope,$http) {
    $scope.deletePackage1 = function()
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

    $scope.register = function(sponsername,placement)
    {
        sponsername = sponsername || '';
        placement = placement || '';
        $('.cd-error-message').removeClass('is-visible');
        register_success_cb = function(data)
        {
            if(data.status == "success")
            {
                alert('User registered successfully.');
                window.location.reload();
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
        request_data['placement'] = placement;        
        SSK.site_call("AJAX",window._site_url+"register/signUp",request_data, register_success_cb);
    }

    $scope.forgot_password = function()
    {
        forgot_password_success_cb = function(data)
        {
            if(data.status == "success")
            {
                alert_box('Check your email id to reset password.');
            
            }
        }
        
        request_data = {}
        request_data['forgot_email'] = $scope.forgot_email;
        SSK.site_call("AJAX",window._site_url+"login/forgot_password_token_generation",request_data, forgot_password_success_cb);
    }
    $scope.forgot_password_token = window._forgot_password_token;
    $scope.change_password = function()
    {
        change_password_success_cb = function(data)
        {
            if(data.status == "success")
            {
                alert_box('Successfully changed password.');
            }
        }

        if($scope.new_password == '')
        {
            alert_box('Please enter New Password field.')
        }else if($scope.reenter_password == '')
        {
            alert_box('Please enter Re-Enter Password field.');
        }else if($scope.new_password != $scope.reenter_password)
        {
            alert_box('Please enter same passwords.');
        }
        
        request_data = {}
        request_data['password'] = $scope.new_password;
        request_data['forgot_password_token'] = $scope.forgot_password_token;
        
        SSK.site_call("AJAX",window._site_url+"login/change_password",request_data, change_password_success_cb);
    }

    $scope.login = function()
    {
        $('.cd-error-message').removeClass('is-visible');
        login_success_cb = function(data)
        {
            if(data.status == "success")
            {
                window.location.href = window._site_url+"packages";
            }else if(data.status == 'failed')
            {
                alert(data.message);
            }
        }

        login_failure_cb = function(data)
        {
            $.each(data['message'], function( key, value ) {
                $('#'+key+'-error').addClass('is-visible').html(value);
            });
        }

        request_data = {}
        request_data['username'] = $scope.login_username;
        request_data['password'] = $scope.login_password;
        
        SSK.site_call("AJAX",window._site_url+"login/signIn",request_data, login_success_cb,login_failure_cb);
    }

    $scope.save_contact = function()
    {
        $('.cd-error-message').removeClass('is-visible');
        save_contact_success_cb = function(data)
        {
            if(data.status == "success")
            {
                $scope.contact_name = '';
                $scope.contact_email = '';
                $scope.contact_mobile = '';
                $scope.contact_enquiry = '';
                alert_box("Enquiry sent");
            }else if(data.status == 'failed')
            {
                alert_box(data.message);
            }
        }

        request_data = {}
        request_data['name'] = $scope.contact_name;
        request_data['email'] = $scope.contact_email;
        request_data['mobile'] = $scope.contact_mobile;
        request_data['enquiry'] = $scope.contact_enquiry;
        
        SSK.site_call("AJAX",window._site_url+"contact_us/save_contact",request_data, save_contact_success_cb);
    }

    $scope.zerodha_lead = function()
    {
        zerodha_lead_success_cb = function(data)
        {
            console.log(data);
        }

        zerodha_lead_failure_cb = function(data)
        {
            console.log(data);
        }

        zerodha_name = $scope.zerodha_name || '';
        zerodha_phone = $scope.zerodha_phone || '';
        zerodha_email = $scope.zerodha_email || '';
        partner_id = "ZMPAJN";
        zerodha_link = "http://crm.zerodha.net/zlm/L2Lead/add/"+zerodha_name+"/"+zerodha_phone+"/"+zerodha_email+"/"+partner_id
        
        if(zerodha_name == '')
        {
            alert("Please enter your name.");
            return false;
        }else if(zerodha_phone == '' || !phoneNumberValidation(zerodha_phone))
        {
            alert("Please enter your phone number.");
            return false;
        }else if(zerodha_email == '' || !isValidEmailAddress(zerodha_email))
        {
            alert("Please enter your email address proper.");
            return false;
        }
        var request = new XMLHttpRequest();                                        
        request.open("get", zerodha_link, false, "false", "false");                                                                                                                             
        request.send();
        //SSK.site_call($http,zerodha_link,{}, zerodha_lead_success_cb,zerodha_lead_failure_cb,"GET",{'Access-Control-Allow-Origin':'*'});
    }
});