<?php  $this->load->view("ProfileHeader"); ?>
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
									<li><button type="button" class="btn btn-flat blue-text  mediaPostBtn">Media</button></li>
									<li><button type="button" class="btn btn-flat blue-text  locationPostBtn">Location</button></li>
								</ul>

							</div>
							<div class="postStory" id="postStatus">
								<form name="postPOST" id="postPOST">
									<div class="input-field col s12">
									  <input type="hidden" name="email" id="email" value="<?php echo $this->session->userdata('email'); ?>">
							          <textarea id="postStory" name="postStory" class="materialize-textarea" placeholder="Post Something..."></textarea>
							          <input type="hidden" name="postType" id="postType" value="status">
							          <input type="hidden" name="postStatus" id="postStatus" value="1">
							        </div>
							    <!--     <input id="post_attachment" name="post_attachment" type="file" class="validate" style="display: none;"> -->
							         <div class="col s12 m12">
							        <div class="attachmentBox col s12 m8">
							        	<ul class="addAttachment">
							        		<li class="fa fa-map-marker" aria-hidden="true"></li>
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
								<form name="postMediaa" id="postMediaa">
									<div class="input-field col s12">
									  <input type="hidden" name="email" id="email" value="<?php echo $this->session->userdata('email'); ?>">
							          <textarea id="postStory" name="postStory" class="materialize-textarea" placeholder="Post Media File..."></textarea>
							          <input type="hidden" name="postType" id="postType" value="status">
							          <input type="hidden" name="postStatus" id="postStatus" value="1">
							        </div>
							        <input id="post_attachment" name="post_attachment" type="file" class="validate" style="display: none;"> 
									<!-- <div class="input-field col s12">
							          <textarea id="postStory" class="materialize-textarea" placeholder="Post Media File..."></textarea>
							        </div> -->
							        <div class="col s12 m12">
							        <div class="attachmentBox col s12 m8">
							        	<ul class="addAttachment">
							        		<li class="fa fa-map-marker" aria-hidden="true"></li>
							        		  <li  aria-hidden="true" class="fa fa-camera btn-upload" onclick="$('input#post_attachment').click();"></li>
							        		<!-- <li class="fa fa-camera" aria-hidden="true"></li> -->
							        		<li class="fa fa-tags" aria-hidden="true"></li>
							        	</ul>
							        </div>
							        <div class="col s12 m4">
							        	<button type="button" id='mediapost' class="btn btn-flat blue white-text">Post</button>
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

						<?php 
							
							//$q=("SELECT * FROM buddyposts WHERE postDate > DATE_SUB(NOW(), INTERVAL 10 MINUTE)");

			/*	$email=$this->session->userdata('email');
				$row=$this->db->query("SELECT * FROM buddyposts WHERE email='".$email."' and postDate > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY post_Id DESC");
				$row=$this->db->query("SELECT sent_date FROM invitations WHERE email='$email' AND uid='$session_uid' AND `sent_date` < SUBDATE( CURRENT_DATE, INTERVAL 1 DAY)")
				$row=$row->result_array();*/

							foreach ($postRow as $key => $postData) {
						
							

						?>


						<div class="postBox">
							<div class="postProfile row">
								<div class="col s4 m1">
								<img src="<?php echo base_url() ?>html/images/profile_photo/profile_Placeholder.png" class="responsive-img">
								</div>
								<div class="col s4 m7">
								<span>
									<?php 
										echo $userData['fname']; 
										echo ' ';
										echo $userData['lname'];
									?>
								</span>
								<label><h6><?php echo $postData['postDate']; echo ' | '; echo $postData['postTime']; ?></h6></label>
								</div>
								<div class="col s4 m4">
									
							    </div>
							</div>
							<div class="row">
								<div class="col s12 m12">
									<div class="post">
										
										<?php echo $postData['postData'];  ?>
									</div>
									<div class="post_img">
										<?php if($postData['post_attachment']>0) {?>
									<img src="<?php echo base_url(); ?>html/images/post_images/<?php echo $postData['post_attachment']; ?>" >
									<?php } else { ?> <?php } ?>
								    </div>
								</div>
							</div>
							
							
							<div class="commentsBox">
								<div class="row">
									<div class="col s4 m4">
										  <div class="like-cnt unchecked" data-n="0" id="like-cnt circle" data-likesid="<?php echo $postData['post_Id'];  ?>"> <i class="like-btn material-icons">thumb_up</i></div>
										<i class="fa fa-heart red-text" aria-hidden="true"> <strong id='output' data-n="0">0<i></i></strong></i>
									</div>

									
									<div class="col s4 m4">
										 <div   id="coomm-div"">
										   <i class="fa fa-comment comm-btn blue-text " aria-hidden="true"></i>
										 </div>
										   <i class="fa fa-comment  comment-class" aria-hidden="true"> 284</i>
									</div>

									<div class="col s4 m4">
										<i class="fa fa-share" aria-hidden="true"> Share</i>
									</div>

								</div>
							</div>
								
						</div>
						
						<?php } ?>

				
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