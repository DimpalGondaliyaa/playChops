<div class="register-area">
	<div class="main">
		<div class="registerBox">
      <div class="title">
      <h5>Create Profile</h5>
    </div>
			 <div class="row">
    <form class="col s12" name="user_reg" id="user_reg" method='post' enctype="multipart/form-data">
      <div class="row">
         <div class="input-field col s12">
          <input id="fname"  name="fname" type="text" class="validate">
          <label for="fname">First Name</label>
        </div>
        <div class="input-field col s12">
          <input id="lname" name="lname" type="text" class="validate">
          <label for="lname">Last Name</label>
        </div>

         <div class="input-field col s12">
          <input id="email" name="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="mobile" name="mobile" maxlength="10" type="text" class="validate">
          <label for="mobile">Mobile</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="profile_photo" name="profile_photo" type="file" class="validate" style="display: none;">
          <button type="button" class="btn btn-flat btn-upload" onclick="$('input#profile_photo').click();">Upload Photo</button>
         <!--  <label for="profile_photo">Profile Photo</label> -->
        </div>
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
        <div class="col s12 input-field">
        <a class="waves-effect waves-light btn user_Register">Next</a>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
