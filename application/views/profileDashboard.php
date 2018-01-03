<div class="row">
	<div class="parallax-container">
      <div class="parallax">
      	<img src="<?php echo base_url(); ?>html/images/user_profile_cover/tiger.jpg">
      	<div class="profileDetails-area">
      		<div class="row">
      		<div class="profile_img col s12 m4">
      			<img src="<?php echo base_url() ?>html/images/profile_photo/profile_Placeholder.png" class="responsive-img profile_photo">
      		</div>
      		<div class="profileData col s12 m8">
      			<div class="user_name">
      				<h4>Ravi Meswaniya</h4>
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
      				<li><a href="#!">About</a></li>
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
			</div>
		</div>
		<div class="col s12 m6">
		<div class="main">
			<div class="profile-area">
				<div class="max-width">
					<div class="post-area">

						<!-- post area for post -->
						<div class="postStoryBox">
							<div class="postBtns">
								
								<ul>
									<li><button type="button" class="btn btn-flat blue-text statusPostBtn">Status</button></li>
									<li><button type="button" class="btn btn-flat blue-text mediaPostBtn">Media</button></li>
									<li><button type="button" class="btn btn-flat blue-text locationPostBtn">Location</button></li>
								</ul>

							</div>
							<div class="postStory" id="postStatus">
								<form name="postPOST" id="postPOST">
									<div class="input-field col s12">
							          <textarea id="postStory" class="materialize-textarea" placeholder="Post Something..."></textarea>
							        </div>
							         <div class="col s12 m12">
							        <div class="attachmentBox col s12 m8">
							        	<ul class="addAttachment">
							        		<li class="fa fa-map-marker" aria-hidden="true"></li>
							        		<li class="fa fa-camera" aria-hidden="true"></li>
							        		<li class="fa fa-tags" aria-hidden="true"></li>
							        	</ul>
							        </div>
							        <div class="col s12 m4">
							        	<button id="postPOSTButton" type="button" class="btn btn-flat blue white-text">Post</button>
							        </div>
							    	</div>
								</form>
							</div>
							<!-- post media -->
							<div class="postMedia" style="display: none;" id="postMedia">
								<!-- <label>Post Media</label> -->
								<form>
									<div class="input-field col s12">
							          <textarea id="postStory" class="materialize-textarea" placeholder="Post Media File..."></textarea>
							        </div>
							        <div class="col s12 m12">
							        <div class="attachmentBox col s12 m8">
							        	<ul class="addAttachment">
							        		<li class="fa fa-map-marker" aria-hidden="true"></li>
							        		<li class="fa fa-camera" aria-hidden="true"></li>
							        		<li class="fa fa-tags" aria-hidden="true"></li>
							        	</ul>
							        </div>
							        <div class="col s12 m4">
							        	<button type="button" class="btn btn-flat blue white-text">Post</button>
							        </div>
							    	</div>
								</form>
							</div>
							<!-- // post Meda -->

							<!-- post Loaction  -->
							<div class="postLocation" style="display: none;" id="postLocation">
								<!-- <label>Post Media</label> -->
								<form>
									<div class="input-field col s12">
							          <textarea id="postStory" class="materialize-textarea" placeholder="Share Location..."></textarea>
							        </div>
							         <div class="col s12 m12">
							        <div class="attachmentBox col s12 m8">
							        	<ul class="addAttachment">
							        		<li class="fa fa-map-marker" aria-hidden="true"></li>
							        		<li class="fa fa-camera" aria-hidden="true"></li>
							        		<li class="fa fa-tags" aria-hidden="true"></li>
							        	</ul>
							        </div>
							        <div class="col s12 m4">
							        	<button type="button" class="btn btn-flat blue white-text">Post</button>
							        </div>
							    	</div>
								</form>
							</div>
							<!-- // post Location -->

						</div>
						<!-- // post area for post -->

						<div class="postBox">
							<div class="postProfile row">
								<div class="col s4 m1">
								<img src="<?php echo base_url() ?>html/images/profile_photo/profile_Placeholder.png" class="responsive-img">
								</div>
								<div class="col s4 m7">
								<span>Ravi Meswaniya</span>
								<label><h6>7 hr ago.</h6></label>
								</div>
								<div class="col s4 m4">
									
								</div>
							</div>
							<div class="postContent">
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
							</div>
							<div class="commentsBox">
								<div class="row">
									<div class="col s4 m4">
										<div class="like-container">
										  <div class="like-cnt unchecked" id="like-cnt">
										  <i class="like-btn material-icons">thumb_up</i>
										</div>
										</div>

										<i class="fa fa-heart red-text" aria-hidden="true"> 84</i>
									</div>
									<div class="col s4 m4">
										<i class="fa fa-comment blue-text" aria-hidden="true"> 284</i>
									</div>
									<div class="col s4 m4">
										<i class="fa fa-share" aria-hidden="true"> Share</i>
									</div>
								</div>
							</div>
						</div>
						<div class="postBox">
							<div class="postProfile row">
								<div class="col s4 m1">
								<img src="<?php echo base_url() ?>html/images/profile_photo/profile_Placeholder.png" class="responsive-img">
								</div>
								<div class="col s4 m7">
								<span>Ravi Meswaniya</span> <span class="shareLink">Share</span> a <span class="SharedLink">link</span>.
								<label><h6>7 hr ago.</h6></label>
								</div>
								<div class="col s4 m4">
									
								</div>
							</div>
							<div class="b4postContent">
								If someone missed it, check out the new song by System of a Revenge! I thinks they are going back to their roots...
							</div>
							<div class="postContent">
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
							</div>
							<div class="commentsBox">
								<div class="row">
									<div class="col s4 m4">
										<i class="fa fa-heart red-text" aria-hidden="true"> 84</i>
									</div>
									<div class="col s4 m4">
										<i class="fa fa-comment blue-text" aria-hidden="true"> 284</i>
									</div>
									<div class="col s4 m4">
										<i class="fa fa-share" aria-hidden="true"> Share</i>
									</div>
								</div>
							</div>
						</div>
						<div class="postBox">
							<div class="postProfile row">
								<div class="col s4 m1">
								<img src="<?php echo base_url() ?>html/images/profile_photo/profile_Placeholder.png" class="responsive-img">
								</div>
								<div class="col s4 m7">
								<h5>Ravi Meswaniya</h5>
								</div>
								<div class="col s4 m4">
									
								</div>
							</div>
							<div class="postContent">
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
							</div>
							<div class="commentsBox">
								<div class="row">
									<div class="col s4 m4">
										<i class="fa fa-heart red-text" aria-hidden="true"> 84</i>
									</div>
									<div class="col s4 m4">
										<i class="fa fa-comment blue-text" aria-hidden="true"> 284</i>
									</div>
									<div class="col s4 m4">
										<i class="fa fa-share" aria-hidden="true"> Share</i>
									</div>
								</div>
							</div>
						</div>
						
						<div class="postBox">
							<div class="postProfile row">
								<div class="col s4 m1">
								<img src="<?php echo base_url() ?>html/images/profile_photo/profile_Placeholder.png" class="responsive-img">
								</div>
								<div class="col s4 m7">
								<h5>Ravi Meswaniya</h5>
								</div>
								<div class="col s4 m4">
									
								</div>
							</div>
							<div class="postContent">
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
							</div>
							<div class="commentsBox">
								<div class="row">
									<div class="col s4 m4">
										<i class="fa fa-heart red-text" aria-hidden="true"> 84</i>
									</div>
									<div class="col s4 m4">
										<i class="fa fa-comment blue-text" aria-hidden="true"> 284</i>
									</div>
									<div class="col s4 m4">
										<i class="fa fa-share" aria-hidden="true"> Share</i>
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
			<div class="recentPostBox sticky">
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
			</div>
		</div>
	</div>
</div>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/mojs/latest/mo.min.js"></script>