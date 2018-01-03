<div class="register-area">
	<div class="main">
		<div class="registerBox">
      <div class="title">
      <h5>Profile details</h5>
    </div>
    <h5><!-- <?php echo $this->session->userdata('email'); ?> --></h5>
			 <div class="row">
    <form class="col s12" name="nextform" id="nextform" method='post' enctype="multipart/form-data">
      <div class="row">
         <div class="input-field col s12 m6">
          <input type="text"  class="datepicker" name='Birthday' id="Birthday">
          <label for="Birthday">Birthday</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="Birthplace" name="Birthplace" type="text" class="validate">
          <label for="Birthplace">Birthplace</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="Status" name="Status" type="text" class="validate">
          <label for="Status">Status</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="Lives_In" name="Lives_In" type="text" class="validate">
          <label for="Lives_In">Lives_In</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="country" name="country" maxlength="10" type="text" class="validate">
          <label for="country">country</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="state" name="state" type="text" class="validate">
          <label for="state">state</label>
        </div>

         <div class="input-field col s12 m6">
        <input id="college" name="college" type="text" class="validate">
          <label for="college">college</label>
        </div>

          <div class="input-field col s12 m6">
        <input id="college_start_year" name="college_start_year" type="text" class="validate">
          <label for="college_start_year">college_start_year</label>
        </div>

         <div class="input-field col s12 m6">
      <input id="college_end_year" name="college_end_year" type="text" class="validate">
          <label for="college_end_year">college_end_year</label>
        </div>

         <div class="input-field col s12 m6">
        <input id="primaryschool" name="primaryschool" type="text" class="validate">
          <label for="primaryschool">primaryschool</label>
        </div>

          <div class="input-field col s12 m6">
        <input id="start_primary_year" name="start_primary_year" type="text" class="validate">
          <label for="start_primary_year">start_primary_year</label>
        </div>

         <div class="input-field col s12 m6">
      <input id="end_primary_year" name="end_primary_year" type="text" class="validate">
          <label for="end_primary_year">end_primary_year</label>
        </div>

        <div class="input-field col s12 m6">
        <input id="highersecondary" name="highersecondary" type="text" class="validate">
          <label for="highersecondary">higher secondary</label>
        </div>

          <div class="input-field col s12 m6">
        <input id="start_higher_year" name="start_higher_year" type="text" class="validate">
          <label for="start_higher_year">start_higher_year</label>
        </div>
           <div class="input-field col s12 m6">
       <input id="end_higher_year" name="end_higher_year" type="text" class="validate">
         <label for="end_higher_year">end_higher_year</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="hobby" name="hobby" type="text" class="validate">
          <label for="hobby">hobby</label>
        </div>
        <div class="col s12 input-field done-btn-cols">
        <a class="waves-effect waves-light btn usernextdata">Done</a>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
