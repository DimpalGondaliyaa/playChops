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
          <label for="Favourite_TV_Shows">Favourite TV Shows</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="Favourite_Music_Bands_Artists" name="Favourite_Music_Bands_Artists" type="text" class="validate">
          <label for="Favourite_Music_Bands_Artists">Favourite Music Bands Artists</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="FavouriteBooks" name="FavouriteBooks" type="text" class="validate">
          <label for="FavouriteBooks">Favourite Books</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="FavouriteWriters" name="FavouriteWriters" maxlength="10" type="text" class="validate">
          <label for="FavouriteWriters">Favourite Writers</label>
        </div>

        <div class="input-field col s12 m6">
          <input id="FavouriteMovies" name="FavouriteMovies" type="text" class="validate">
          <label for="FavouriteMovies">Favourite Movies</label>
        </div>

         <div class="input-field col s12 m6">
        <input id="FavouriteGames" name="FavouriteGames" type="text" class="validate">
          <label for="FavouriteGames">Favourite Games</label>
        </div>

          <div class="input-field col s12 m12">
        <input id="OtherInterests" name="OtherInterests" type="text" class="validate">
          <label for="OtherInterests">Other Interests</label>
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
