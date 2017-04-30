<?php
$this->load->view('admin/templates/header.php');
?>
<div id="content">
		<div class="grid_container">
			<div class="grid_12">
				<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6><?php echo $heading;?></h6>
					</div>
					<div class="widget_content">
					<?php 
						$attributes = array('class' => 'form_container left_label');
						echo form_open('admin',$attributes) 
					?>
	 						<ul>
                            	
                                <li>
								<div class="form_grid_12">
									<label class="field_title" for="City">City Name<span class="req">*</span></label>
									<div class="form_input">
                                    <?php echo $city_details->row()->name;?>
									</div>
								</div>
								</li>
                                
                                <li>
								<div class="form_grid_12">
									<label class="field_title" for="stateid">State Name<span class="req">*</span></label>
									<div class="form_input">
                                    
                                           <?php echo $city_details->row()->state_name;?>
                                    
                                    
									</div>
								</div>
								</li>
                                <li>
								<div class="form_grid_12">
									<label class="field_title" for="stateid">Country Name<span class="req">*</span></label>
									<div class="form_input">
                                    
                                           <?php echo $city_details->row()->country_name;?>
                                    
                                    
									</div>
								</div>
								</li>
                                <li>
								<div class="form_grid_12">
									<label class="field_title">image image</label>
									<div class="form_input">
                                    <img src="images/city/<?php echo $city_details->row()->citythumb;?>" width="50px" height="50px"  />
									</div>
								</div>
								</li>
                                <li>
                                  <div class="form_grid_12">
                                    <label class="field_title" for="description">Featured City</label>
                                    <div class="form_input">
                                      <?php if($city_details->row()->featured=='1'){echo '  <img src="images/checked.png" class="tip_top" title="Featured Neighborhood" />';}?>
                                    </div>
                                  </div>
                                </li>
                                <li>
								<div class="form_grid_12">
									<label class="field_title" for="status">Status</label>
									<div class="form_input">
                                    <?php echo $city_details->row()->status;?>
									</div>
								</div>
								</li>
                                
	 							<li>
                                  <div class="form_grid_12">
                                    <label class="field_title" for="meta_title">Meta Title</label>
                                    <div class="form_input">
                                      <?php echo $city_details->row()->meta_title;?>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="form_grid_12">
                                    <label class="field_title" for="meta_tag">Meta Keyword</label>
                                    <div class="form_input">
                                      <?php echo $city_details->row()->meta_keyword;?>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="form_grid_12">
                                    <label class="field_title" for="meta_description">Meta Description</label>
                                    <div class="form_input">
                                      <?php echo $city_details->row()->meta_description;?>
                                    </div>
                                  </div>
                                </li>
								<li>
								<div class="form_grid_12">
									<div class="form_input">
										<a href="admin/city/display_city_list" class="tipLeft" title="Go to location list"><span class="badge_style b_done">Back</span></a>
									</div>
								</div>
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
		</div>
		<span class="clear"></span>
	</div>
</div>
<?php 
$this->load->view('admin/templates/footer.php');
?>