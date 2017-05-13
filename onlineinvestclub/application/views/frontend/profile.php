<?php $this->view('frontend/includes/header1'); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.form.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/libs/profile.js"></script>
    <div class="middle-content">
      <div class="tab">
        <button class="tablinks active" onclick="openCity(event, 'London')">Profile</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Payment Details</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">kyc</button>
        <button class="tablinks last" onclick="openCity(event, 'security')">security</button>
        <div id="London" class="tabcontent" style="display: block;">
          <h3>Personal Details</h3>
          <a data-toggle="modal" data-target="#personal_details">Edit</a>
          <ul class="reset first-part">
            <li> <img src="<?= base_url(); ?>assets/frontend/images/person.png" />
              <p>Name :</p>
              <h5>{{user_info.firstname}} {{user_info.lastname}}</h5>
            </li>
            <li>
              <p>E-mail ID :</p>
              <h5>{{user_info.email}}</h5>
            </li>
            <li>
              <p>Mobile No :</p>
              <h5>{{user_info.mobile}}</h5>
            </li>
          </ul>
          <div class="clear"></div>
          <h3>Address Details</h3>
          <a data-toggle="modal" data-target="#address_details">Edit</a>
          <ul class="reset third-part">
            <li>
              <p>Country :</p>
              <h5>{{user_info.country}}</h5>
            </li>
            <li>
              <p>City:</p>
              <h5>{{user_info.city}}</h5>
            </li>
            <li>
              <p>Address:</p>
              <h5>{{user_info.address}}</h5>
            </li>
            <li>
              <p>Pincode :</p>
              <h5>{{user_info.pincode}}</h5>
            </li>
          </ul>
          
        </div>
        <div id="Paris" class="tabcontent bank-details">
          <h3>Bank Details</h3>
          <a data-toggle="modal" data-target="#bank_details">Edit</a>
          <ul class="reset">
          <li>
          <p>Account Holder Name</p>
          <h6>{{user_info.bank_account_holder_name}}</h6>
          </li>
          <li><p>Bank Name</p>
          <h6>{{user_info.bank_name}}</h6>
          </li>
          <li><p>Branch</p>
          <h6>{{user_info.branch}}</h6>
          </li>
          <li>
          <p>Account Number</p>
          <h6>{{user_info.account_number}}</h6>
          </li>
          <li>
          <p>IFSC Code</p>
          <h6>{{user_info.ifsc_code}}</h6>
          </li>          
          </ul>
        </div>
        <div id="Tokyo" class="tabcontent">
          <div class="security-form">
            <h5>Upload Documnets</h5>
            <form action="" method="get" class="form">
              <ul class="reset">
                <li>
                  <label>ID/Passport</label>
                  <input name="" type="text" />
                </li>
                <li>
                  <label>Proo of Address</label>
                  <input name="" type="text" />
                </li>
                <li>
                  <input name="submit" type="submit"  class="submit"/>
                </li>
              </ul>
            </form>
            <h3>Informetion</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
          </div>
        </div>
        <div id="security" class="tabcontent">
          <div class="security-form">
            <h5>Change Password</h5>
            <form action="" method="get">
              <ul class="reset">
                <li>
                  <label>Current Password</label>
                  <input name="" type="password" ng-model="current_password" />
                </li>
                <li>
                  <label>New Password</label>
                  <input name="" type="password" ng-model="new_password"/>
                </li>
                <li>
                  <label>Re Enter Password</label>
                  <input name="" type="password" ng-model="reenter_password"/>
                </li>
                <li>
                  <input name="submit" type="button"  class="submit" value="Save" ng-click="change_password()"/>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
      <div class="right-side">
        <h6>Invite Link</h6>
        <input type="text" value="http://localhost/projects/amit-project/index.php" class="form-control"> </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
<?php $this->view('frontend/profile_modal'); ?>  
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
</html>
