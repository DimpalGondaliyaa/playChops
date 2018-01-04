<?php  $this->load->view("ProfileHeader"); ?>

<!--===============perdsonal info model============-->
<!-- Modal Structure -->
  <div id="personal-model" class="modal">
    <div class="modal-content">
    	<?php
     $this->load->view("update_personal_info");
    ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat edit-personal">edit</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cancel</a>
    </div>
  </div>
<!--===============hobby info model============-->
<!-- Modal Structure -->
  <div id="hobby-model" class="modal">
    <div class="modal-content">
    	<?php
     $this->load->view("update_hobbies");
    ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat edit-hobbie">edit</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cancel</a>
    </div>
  </div>
<!--===============education info model============-->
<!-- Modal Structure -->
  <div id="education-model" class="modal">
    <div class="modal-content">
    	<?php
     $this->load->view("update_education");
    ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat edit-education">edit</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cancel</a>
    </div>
  </div>





<div class="PostContainer">
	<div class="row">
		<div class="col s12 m3">
			<div class="recentPostBox sticky">
				<a class="waves-effect waves-light btn edit-pro-btn">edit</a>
		<div class="title">	
			<h5>personal info</h5>

		</div>

			<div class="recentPostData row">
				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    about me
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $pro_data['about_me']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Birthday:

						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						 <?php echo $pro_data['Birthday']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Birthplace:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $pro_data['Birthplace']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Lives in:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $pro_data['Lives_In']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						   Occupation:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $pro_data['Occupation']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Joined:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $pro_data['Joined']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Status:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $pro_data['Status']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Email:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $this->session->userdata('email'); ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						   Website:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						   <?php echo $pro_data['Website']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Phone Number:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						 <?php echo $pro_data['mobile']; ?>
						</div>
				    </div>
				</div>

		<div class="other-social">
			<div class="other-title">Other Social Networks:</div>
			<a class="waves-effect waves-light btn other-social-fb"><i class="fa fa-facebook social-icon" aria-hidden="true"></i>facebook</a>
			<a class="waves-effect waves-light btn other-social-twitter"><i class="fa fa-twitter social-icon" aria-hidden="true"></i>twitter</a>
			<a class="waves-effect waves-light btn other-social-dribble"><i class="fa fa-dribbble social-icon" aria-hidden="true"></i>dribbble</a>
		</div>		
				
			</div>
		</div>
		</div>

		<div class="col s12 m9">
<div class="main">
	<div class="profile-area">
		<div class="max-width">
			<div class="post-area">
				<div class="postBox">
					<div class="postProfile row">
						<!-- <div class="col s4 m1">
						<img src="<?php echo base_url() ?>html/images/profile_photo/profile_Placeholder.png" class="responsive-img">
						</div> -->
						<a class="waves-effect waves-light btn edit-hobbie-btn">edit</a>
						<div class="col s4 m7">

						<h5>Hobbies and Interests</h5>
						</div>
						<div class="col s4 m4">
							
						</div>
					</div>
					<div class="row">
						<div class="col s12 m6">
							<div class="postContent">
								<div class="Hobbies-title">Hobbies:</div>
								<div class="Hobbies-content">
								<?php echo $pro_data['hobby']; ?>
							   </div>
							</div>
						</div>

						<div class="col s12 m6">
							<div class="postContent">
								<div class="Hobbies-title">Favourite Music Bands / Artists:</div>
								<div class="Hobbies-content">
								<?php echo $pro_data['Favourite_Music_Bands_Artists']; ?>
							   </div>
							</div>
						</div>

						<div class="col s12 m6">
							<div class="postContent">
								<div class="Hobbies-title">Favourite TV Shows:</div>
								<div class="Hobbies-content">
								<?php echo $pro_data['Favourite_TV_Shows']; ?>
							   </div>
							</div>
						</div>

						<div class="col s12 m6">
							<div class="postContent">
								<div class="Hobbies-title">Favourite Books:</div>
								<div class="Hobbies-content">
								<?php echo $pro_data['FavouriteBooks']; ?>
							   </div>
							</div>
						</div>

						<div class="col s12 m6">
							<div class="postContent">
								<div class="Hobbies-title">Favourite Movies:</div>
								<div class="Hobbies-content">
								<?php echo $pro_data['FavouriteMovies']; ?>
							   </div>
							</div>
						</div>

						<div class="col s12 m6">
							<div class="postContent">
								<div class="Hobbies-title">Favourite Writers:</div>
								<div class="Hobbies-content">
							<?php echo $pro_data['FavouriteWriters']; ?>
							   </div>
							</div>
						</div>

						<div class="col s12 m6">
							<div class="postContent">
								<div class="Hobbies-title">Favourite Games:</div>
								<div class="Hobbies-content">
								<?php echo $pro_data['FavouriteGames']; ?>
							   </div>
							</div>
						</div>

						<div class="col s12 m6">
							<div class="postContent">
								<div class="Hobbies-title">Other Interests:</div>
								<div class="Hobbies-content">
								<?php echo $pro_data['OtherInterests']; ?>
							   </div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="postBox">
					<div class="postProfile row">
						<!-- <div class="col s4 m1">
						<img src="<?php echo base_url() ?>html/images/profile_photo/profile_Placeholder.png" class="responsive-img">
						</div> -->
						<a class="waves-effect waves-light btn edit-education-btn">edit</a>
						<div class="col s4 m7">

						<h5>Education and Employement</h5>
						</div>
						<div class="col s4 m4">
							
						</div>
					</div>
					<div class="row">

						<div class="col s12 m6">
							<div class="postContent">
								<div class="Hobbies-title"><?php echo $pro_data['college']; ?></div>
								<div class="education-date"><?php echo $pro_data['college_start_year']; ?> - <?php echo $pro_data['college_end_year']; ?></div>
								<!-- <div class="Hobbies-content">
								Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.
							   </div> -->
							</div>
						</div>

						<div class="col s12 m6">
							<div class="postContent">
								<div class="Hobbies-title"><?php echo $pro_data['primaryschool']; ?></div>
								<div class="education-date"><?php echo $pro_data['start_primary_year']; ?> - <?php echo $pro_data['end_primary_year']; ?></div>
								<!-- <div class="Hobbies-content">
								Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.
							   </div> -->
							</div>
						</div>

						<div class="col s12 m6">
							<div class="postContent">
								<div class="Hobbies-title"><?php echo $pro_data['highersecondary']; ?></div>
								<div class="education-date"><?php echo $pro_data['start_higher_year']; ?> - <?php echo $pro_data['end_higher_year']; ?></div>
								<!-- <div class="Hobbies-content">
								Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.
							   </div> -->
							</div>
						</div>

					</div>
				</div>
				
				
			</div>
		</div>
	</div>
</div>
</div>
<div class="col s12 m3">
<!-- 	<div class="recentPostBox sticky">
		<div class="title">
			<h5>Recent Post</h5>
		</div>
		<div class="recentPostData row">
			<div class="col s6 m4 recentBox">
			<img src="<?php echo base_url() ?>html/images/recentPost/placeholder-logo.png" class="responsive-img">
			</div>
			<div class="col s6 m4 recentBox">
			<img src="<?php echo base_url() ?>html/images/recentPost/placeholder-logo.png" class="responsive-img">
			</div>
			<div class="col s6 m4 recentBox">
			<img src="<?php echo base_url() ?>html/images/recentPost/placeholder-logo.png" class="responsive-img">
			</div>
			<div class="col s6 m4 recentBox">
			<img src="<?php echo base_url() ?>html/images/recentPost/placeholder-logo.png" class="responsive-img">
			</div>
			</div>

		</div> -->
	</div>
</div>
</div>
