<div class="row">
	<div class="parallax-container">
      <div class="parallax">
      	<img src="<?php echo base_url(); ?>html/images/user_profile_cover/tiger.jpg">
      	<div class="profileDetails-area">
      		<div class="row">
      		<div class="profile_img col s12 m4">
      			<img src="<?php echo base_url() ?>html/images/user_image/<?php echo $pro_data['profile_photo'];?>" class="responsive-img profile_photo">
      		</div>
      		<div class="profileData col s12 m8">
      			<div class="user_name">
      				<h4 class="about-name-title"><?php echo $pro_data['fname']; ?> &nbsp;<?php echo $pro_data['lname']; ?></h4>
      			</div>
      			<div class="totalData">
	      		<ul>
      				<li>
      				<div class="total_post">
	      				<h5>26</h5>
	      				<p>POST</p>
	      			</div>
		      		</li>
		      		<li>
		      		<div class="profile_followers">
	      				<h5>500</h5>
	      				<p>FOLLOWERS</p>
	      			</div>
	      			</li>
	      			<li>
	      			<div class="profile_followig">
	      				<h5>200</h5>
	      				<p>FOLLOWING</p>
	      			</div>
	      			</li>
      			</ul>
      			</div>
      			<div class="col s12 m12 profile_quickLinks">
      			<ul>
      				<li><a href="#!">Timeline</a></li>
      				<li><a href="#!">About</a></li>
      				<li><a href="#!">Friends</a></li>
      				<li><a href="#!">Posts</a></li>
      				<li><a href="<?php echo base_url(); ?>ProfileAbout">About</a></li>
      			</ul>
      			</div>
      		</div>
      		</div>
      	</div>
      </div>
    </div>
</div>

<div class="PostContainer">
	<div class="row">
		<div class="col s12 m3">
			<div class="recentPostBox sticky">
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
						    Hi, I’m James, I’m 36 and I work as a Digital Designer for the “Daydreams” Agency in Pier 56
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
						  UI/UX Designer
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
						  April 31st, 2014
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
						 daydreamsagency.com
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

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						   Religious Belifs:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						 -
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						   Political Incline:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  Democrat
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

						

					
						<div class="col s12 m6">
							<div class="postContent">
								<div class="Hobbies-title">The New College of Design</div>
								<div class="education-date">2001 - 2006</div>
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
