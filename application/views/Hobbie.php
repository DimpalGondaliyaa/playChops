<div class="register-area">
	<div class="main">
		<div class="registerBox">
      <div class="title">
      <h5>hobbie details</h5>
    </div>
    <h5><!-- <?php echo $this->session->userdata('email'); ?> --></h5>
			 <div class="row">
    <form class="col s12" name="hobbyform" id="hobbyform" method='post' enctype="multipart/form-data">
      <div class="row">
         
        <div class="input-field col s12 m6">
          <input id="Favourite_TV_Shows" name="Favourite_TV_Shows" type="text" class="validate">
          <label for="Favourite_TV_Shows">Favourite_TV_Shows</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="Favourite_Music_Bands_Artists" name="Favourite_Music_Bands_Artists" type="text" class="validate">
          <label for="Favourite_Music_Bands_Artists">Favourite_Music_Bands_Artists</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="FavouriteBooks" name="FavouriteBooks" type="text" class="validate">
          <label for="FavouriteBooks">FavouriteBooks</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="FavouriteWriters" name="FavouriteWriters" maxlength="10" type="text" class="validate">
          <label for="FavouriteWriters">FavouriteWriters</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="FavouriteMovies" name="FavouriteMovies" type="text" class="validate">
          <label for="FavouriteMovies">FavouriteMovies</label>
        </div>

         <div class="input-field col s12 m6">
        <input id="FavouriteGames" name="FavouriteGames" type="text" class="validate">
          <label for="FavouriteGames">FavouriteGames</label>
        </div>

          <div class="input-field col s12 m6">
        <input id="OtherInterests" name="OtherInterests" type="text" class="validate">
          <label for="OtherInterests">OtherInterests</label>
        </div>

        <div class="col s12 input-field done-btn-cols">
        <a class="waves-effect waves-light btn hobbiedata">Done</a>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
