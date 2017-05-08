$('#addPackageForm').ajaxForm({
            beforeSend: function() {
                console.log('beforeSend')
                var percentVal = '0%';
               	$('#save').attr('disabled',true);                
            },
            uploadProgress: function(event, position, total, percentComplete) {
                var percentVal = percentComplete + '%';
            },
            success: function() {
                var percentVal = '100%';
            },
            complete: function(xhr) {
                console.log(xhr)
                if(xhr.status == 200)
                {
                    var response = xhr.responseJSON;
                    if(response.status == 'success')
                    {
                        alert_box('Package added successfully');
                        setTimeout(function(){
                            window.location.reload();
                        }, 2000);

                    } else if(response.status == 'error') {
                        var err_msg = '';
                        $.each(response.message, function( index, value ) {
                            err_msg += value+'</br>';
                        });
                        alert_box(err_msg);
                        $('#save').attr('disabled',false);
                    }
                }
            }
        });

$('#editPackageForm').ajaxForm({
            beforeSend: function() {
                console.log('beforeSend')
                var percentVal = '0%';
                $('#save').attr('disabled',true);                
            },
            uploadProgress: function(event, position, total, percentComplete) {
                var percentVal = percentComplete + '%';
            },
            success: function() {
                var percentVal = '100%';
            },
            complete: function(xhr) {
                console.log(xhr)
                if(xhr.status == 200)
                {
                    var response = xhr.responseJSON;
                    if(response.status == 'success')
                    {
                        alert_box('Package added successfully');
                        setTimeout(function(){
                            window.location.reload();
                        }, 2000);

                    } else if(response.status == 'error') {
                        var err_msg = '';
                        $.each(response.message, function( index, value ) {
                            err_msg += value+'</br>';
                        });
                        alert_box(err_msg);
                        $('#save').attr('disabled',false);
                    }
                }
            }
        });


angular.module("MyApp", []).controller("MyController", function($scope,$http) {
    $scope.deletePackage = function(package_id)
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
            SSK.site_call("AJAX",window._site_url+"admin_packages/deletePackage",{"package_id":package_id}, deletePackage_success_cb);
        }
    }
});