<?php include "header.php"; ?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
				
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
										Add Book
									</div>
									<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully uploaded a book!")?>
                                            </div>
                                            <?php endif;?>
									<div class="panel-body panel-body-com-m">
										
										<form class="com-mail" action="save-book.php" method="post" enctype="multipart/form-data">
											
												<label>Caption </label>
												<input type="text" name="caption" class="form-control1 control3">
												<label>Add Book Picture</label>
												<input type="file" name="file" class="form-control1 control3">
												<label>Add Book Pdf</label>
												<input type="file" name="pdffile" class="form-control1 control3">
								
											<hr>
											<input type="submit" value="Submit Book">
										</form>
									</div>
								 </div>
							  </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<?php include "footer.php"; ?>