<!--content-->
<div class="content row">
	<div class="col-md-12 clear-paddin">
		<div class="content-header">
			<ul class="breadcrumb">
				<li><a href="{prev_page}">Dashboard</a> <span class="divider"></span></li>
				<li class="active">Add a new</li>
			</ul>
		</div>

		<div class="col-md-12 datagrid">
			<div class="grid-header">
				<h3>Add a new</h3>
			</div>

			<div class="grid-content">
				<div>

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#general"
							aria-controls="general" role="tab" data-toggle="tab">General</a></li>
						<li role="presentation"><a href="#content" aria-controls="content"
							role="tab" data-toggle="tab">Content</a></li>
						<li role="presentation"><a href="#gallery" aria-controls="gallery"
							role="tab" data-toggle="tab">Gallery</a></li>
						<li role="presentation"><a href="#settings"
							aria-controls="settings" role="tab" data-toggle="tab">Log</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="general">
							<!--general-->

							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputTitle" class="col-xs-5 col-sm-2 control-label">Title:</label>
									<div class="col-xs-9 col-sm-8">
										<input type="text" class="form-control" id="inputTitle"
											placeholder="Title">
									</div>
									<div class="col-xs-3 col-sm-2">
										<i class="glyphicon glyphicon-info-sign form-info"
											data-toggle="tooltip" data-placement="right"
											title="Title must be between 1 to 200 characters."></i>
									</div>

								</div>

								<div class="form-group">
									<label for="inputShortDetail"
										class="col-xs-5 col-sm-2 control-label">Short Detail:</label>
									<div class="col-xs-9 col-sm-8">
										<input type="text" class="form-control" id="inputShortDetail"
											placeholder="ShortDetail">
									</div>
									<div class="col-xs-3 col-sm-2">
										<i class="glyphicon glyphicon-info-sign form-info"
											data-toggle="tooltip" data-placement="right"
											title="Short Detail must be between 1 to 200 characters."></i>
									</div>
								</div>

								<div class="form-group">
									<label for="uploadFile" class="col-xs-5 col-sm-2 control-label">Upload
										Image:</label>
									<div class="col-xs-9 col-sm-8">
										<div class="input-group">
											<span class="input-group-btn"> <span class="btn btn-primary"
												onclick="$(this).parent().find('input[type=file]').click();">Browse</span>

												<input name="uploaded_file"
												onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());"
												style="display: none;" type="file">
											</span> <span class="form-control"></span>
										</div>
									</div>
									<div class="col-xs-3 col-sm-2">
										<i class="glyphicon glyphicon-info-sign form-info"
											data-toggle="tooltip" data-placement="right"
											title="Upload file supports JPG and PNG only."></i>
									</div>
								</div>

								<div class="form-group">
									<label for="datepicker"
										class="col-xs-12 col-sm-2 control-label">Start Date:</label>
									<div class="col-xs-9 col-sm-8">
										<div class='input-group date' id='datetimepicker5'>
											<input type="text" data-date-format="dd/mm/yyyy"
												id="datepicker">

										</div>
									</div>
									<div class="col-xs-3 col-sm-2">
										<i class="glyphicon glyphicon-info-sign form-info"
											data-toggle="tooltip" data-placement="right"
											title="dd/mm/yyyy"></i>
									</div>
								</div>

								<div class="form-group">
									<label for="inputKeyword"
										class="col-xs-5 col-sm-2 control-label">Keyword:</label>
									<div class="col-xs-9 col-sm-8">
										<input type="text" class="form-control" id="inputKeyword"
											placeholder="Keyword">
									</div>
									<div class="col-xs-3 col-sm-2">
										<i class="glyphicon glyphicon-info-sign form-info"
											data-toggle="tooltip" data-placement="right"
											title="Keyword must be between 1 to 200 characters."></i>
									</div>
								</div>

								<div class="form-group form-btn-center">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-default">Save & Publish</button>
										<button type="submit" class="btn btn-default">Save</button>
									</div>
								</div>

							</form>

						</div>
						<div role="tabpanel" class="tab-pane" id="content">

							<form class="form-horizontal">
								<div class="form-group">
									<textarea id="mytextarea">Hello, World!</textarea>
								</div>

								<div class="form-group form-btn-center">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-default">Save & Publish</button>
										<button type="submit" class="btn btn-default">Save</button>
									</div>
								</div>
							</form>

						</div>
						<div role="tabpanel" class="tab-pane" id="gallery">
							<!--Gallery-->
							<div class="view-gallery">

								<div class="bth">
									<div class="grid-count">
										<label> <select aria-controls="DataTables_Table_0" size="1"
											name="DataTables_Table_0_length">
												<option selected="selected" value="10">10</option>
												<option value="25">25</option>
												<option value="50">50</option>
												<option value="100">100</option>
										</select>
										</label>
									</div>

									<div class="btn-add btn-add-gallery">
										<a data-target="#galleryModal" data-toggle="modal"
											href="javascript:;" class="btn btn-success">Add a new</a>
									</div>
								</div>

								<table class="table table-bordered table-hover" id="mt-gallery">
									<thead>
										<tr>
											<th width="8%">ID</th>
											<th width="150px;">Image</th>
											<th width="35%">Image Name</th>
											<th width="13%">Date</th>
											<th>File Info</th>
										</tr>
									</thead>
									<tbody>
										<tr id="00011">
											<td>10011</td>
											<td>
												<div class="thumbnail">
													<div class="thumbnail-view">
														<a class="fancybox-thumbs" href="../img/blur-lg.jpg"><img
															src="../img/blur-lg.jpg" width="120" alt="" /></a>
													</div>
												</div>
											</td>
											<td>Publish</td>
											<td>15/04/2016</td>
											<td><span><strong>Size:</strong> 215 Kb</span> <br> <span><strong>Format:</strong>
													.jpg</span> <br> <span><strong>Dimensions:</strong> 120 x
													120</span></td>
										</tr>

										<tr id="00012">
											<td>10012</td>
											<td>
												<div class="thumbnail">
													<div class="thumbnail-view">
														<a class="fancybox-thumbs" href="../img/blur-lg.jpg"><img
															src="../img/blur-lg.jpg" width="120" alt="" /></a>
													</div>
												</div>
											</td>
											<td>Publish</td>
											<td>15/04/2016</td>
											<td><span><strong>Size:</strong> 215 Kb</span> <br> <span><strong>Format:</strong>
													.jpg</span> <br> <span><strong>Dimensions:</strong> 120 x
													120</span></td>
										</tr>
									</tbody>
								</table>

								<!--modal gallery-->
								<div id="galleryModal" class="modal fade" tabindex="-1"
									role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header modal-header-primary">
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												<h4 class="modal-title">Add Gallery</h4>
											</div>
											<div class="modal-body">

												<div class="row">
													<div class="col-md-12">

														<form class="form-horizontal">
															<div class="form-group">
																<label for="imageName"
																	class="col-xs-12 col-sm-3 control-label">Image Name:</label>
																<div class="col-xs-9 col-sm-7">
																	<input type="text" class="form-control" id="imageName"
																		placeholder="">
																</div>
																<div class="col-xs-3 col-sm-2">
																	<i class="glyphicon glyphicon-info-sign form-info"
																		data-toggle="tooltip" data-placement="right"
																		title="Not empty."></i>
																</div>
															</div>

															<div class="form-group">
																<label for="metaTitle"
																	class="col-xs-12 col-sm-3 control-label">Meta Title:</label>
																<div class="col-xs-9 col-sm-7">
																	<input type="text" class="form-control" id="metaTitle"
																		placeholder="">
																</div>
																<div class="col-xs-3 col-sm-2">
																	<i class="glyphicon glyphicon-info-sign form-info"
																		data-toggle="tooltip" data-placement="right"
																		title="Insert digit only."></i>
																</div>
															</div>

															<div class="form-group">
																<label for="metaDesc"
																	class="col-xs-12 col-sm-3 control-label">Meta
																	Description:</label>
																<div class="col-xs-9 col-sm-7">
																	<textarea class="form-control" rows="4" id="metaDesc"></textarea>
																</div>
																<div class="col-xs-3 col-sm-2">
																	<i class="glyphicon glyphicon-info-sign form-info"
																		data-toggle="tooltip" data-placement="right"
																		title="Insert digit only."></i>
																</div>
															</div>

															<div class="form-group">
																<label for="keywordMeta"
																	class="col-xs-12 col-sm-3 control-label">Keyword:</label>
																<div class="col-xs-9 col-sm-7">
																	<textarea class="form-control" rows="4"
																		id="keywordMeta"></textarea>
																</div>
																<div class="col-xs-3 col-sm-2">
																	<i class="glyphicon glyphicon-info-sign form-info"
																		data-toggle="tooltip" data-placement="right"
																		title="Insert digit only."></i>
																</div>
															</div>

															<div class="form-group">
																<label for="ogTitle"
																	class="col-xs-12 col-sm-3 control-label">Og Title:</label>
																<div class="col-xs-9 col-sm-7">
																	<input type="text" class="form-control" id="ogTitle"
																		placeholder="">
																</div>
																<div class="col-xs-3 col-sm-2">
																	<i class="glyphicon glyphicon-info-sign form-info"
																		data-toggle="tooltip" data-placement="right"
																		title="Insert digit only."></i>
																</div>
															</div>

															<div class="form-group">
																<label for="ogDesc"
																	class="col-xs-12 col-sm-3 control-label">Og
																	Description:</label>
																<div class="col-xs-9 col-sm-7">
																	<textarea class="form-control" rows="4" id="ogDesc"></textarea>
																</div>
																<div class="col-xs-3 col-sm-2">
																	<i class="glyphicon glyphicon-info-sign form-info"
																		data-toggle="tooltip" data-placement="right"
																		title="Insert digit only."></i>
																</div>
															</div>

															<div class="form-group">
																<label for="ogUrl"
																	class="col-xs-12 col-sm-3 control-label">Og URL:</label>
																<div class="col-xs-9 col-sm-7">
																	<input type="text" class="form-control" id="ogUrl"
																		placeholder="">
																</div>
																<div class="col-xs-3 col-sm-2">
																	<i class="glyphicon glyphicon-info-sign form-info"
																		data-toggle="tooltip" data-placement="right"
																		title="Insert digit only."></i>
																</div>
															</div>

															<div class="form-group">
																<label class="col-xs-12 col-sm-3 control-label"
																	for="uploadFileGal">Upload Image:</label>
																<div class="col-xs-9 col-sm-7">
																	<div class="input-group">
																		<span class="input-group-btn"> <span
																			onclick="$(this).parent().find('input[type=file]').click();"
																			class="btn btn-primary">Browse</span> <input
																			type="file" style="display: none;"
																			onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());"
																			name="uploaded_file">
																		</span> <span class="form-control"></span>
																	</div>
																</div>
																<div class="col-xs-3 col-sm-2">
																	<i class="glyphicon glyphicon-info-sign form-info"
																		data-toggle="tooltip" data-placement="right"
																		title="Not empty."></i>
																</div>
															</div>

															<div class="form-group">
																<label for="priority"
																	class="col-xs-12 col-sm-3 control-label">Priority:</label>
																<div class="col-xs-9 col-sm-7">
																	<input type="text" class="form-control" id="priority"
																		placeholder="">
																</div>
																<div class="col-xs-3 col-sm-2">
																	<i class="glyphicon glyphicon-info-sign form-info"
																		data-toggle="tooltip" data-placement="right"
																		title="Insert digit only."></i>
																</div>
															</div>
														</form>

													</div>
												</div>

											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default"
													data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save changes</button>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
								<!-- /.modal -->

								<!--Open modal gallery
                                    <div id="galleryModalOpen" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header modal-header-primary">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">View Gallery</h4>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <div class="form-horizontal">
                                                                <div class="form-group">
                                                                    <label for="imageName" class="col-xs-12 col-sm-3 control-label">Image Name:</label>
                                                                    <div class="col-xs-9 col-sm-7">
                                                                        <input type="text"  class="form-control" id="imageName" placeholder="" disabled>
                                                                    </div>
                                                                    <div class="col-xs-3 col-sm-2">
                                                                        <i class="glyphicon glyphicon-info-sign form-info" data-toggle="tooltip" data-placement="right" title="Not empty."></i>
                                                                    </div>    
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-xs-12 col-sm-3 control-label" for="uploadFileGal">Upload File:</label>
                                                                    <div class="col-xs-9 col-sm-7">
                                                                        <div class="input-group">
                                                                            <div class="thumbnail">
                                                                                <div class="thumbnail-view">
                                                                                    <img src="../img/blur-lg.jpg" width="120" alt="" />
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                                        
                                                                    </div>
                                                                    <div class="col-xs-3 col-sm-2">
                                                                        <i class="glyphicon glyphicon-info-sign form-info" data-toggle="tooltip" data-placement="right" title="Not empty."></i>
                                                                    </div>    
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="priority" class="col-xs-12 col-sm-3 control-label">Priority:</label>
                                                                    <div class="col-xs-9 col-sm-7">
                                                                        <input  type="text" class="form-control" id="priority" placeholder="" disabled> 
                                                                    </div>
                                                                    <div class="col-xs-3 col-sm-2">
                                                                        <i class="glyphicon glyphicon-info-sign form-info" data-toggle="tooltip" data-placement="right" title="Insert digit only."></i>
                                                                    </div>    
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    
                                                </div>
                                            </div>                                            
                                        </div>                                    
                                    </div>
                                    -->
								<!-- /end open gallery -->

								<!--Edit modal gallery
                                    <div id="galleryModalEdit" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header modal-header-primary">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Edit Gallery</h4>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <form class="form-horizontal">
                                                                <div class="form-group">
                                                                    <label for="imageName" class="col-xs-12 col-sm-3 control-label">Image Name:</label>
                                                                    <div class="col-xs-9 col-sm-7">
                                                                        <input type="text" class="form-control" id="imageName" placeholder="">
                                                                    </div>
                                                                    <div class="col-xs-3 col-sm-2">
                                                                        <i class="glyphicon glyphicon-info-sign form-info" data-toggle="tooltip" data-placement="right" title="Not empty."></i>
                                                                    </div>    
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-xs-12 col-sm-3 control-label" for="uploadFileGal">Upload File:</label>
                                                                    <div class="col-xs-9 col-sm-7">
                                                                        <div class="input-group">
                                                                            <span class="input-group-btn">
                                                                                                <span onclick="$(this).parent().find('input[type=file]').click();" class="btn btn-primary">Browse</span>

                                                                            <input type="file" style="display: none;" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" name="uploaded_file">
                                                                            </span>
                                                                            <span class="form-control"></span>
                                                                        </div>                                                                        
                                                                    </div>
                                                                    <div class="col-xs-3 col-sm-2">
                                                                        <i class="glyphicon glyphicon-info-sign form-info" data-toggle="tooltip" data-placement="right" title="Not empty."></i>
                                                                    </div>    
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="priority" class="col-xs-12 col-sm-3 control-label">Priority:</label>
                                                                    <div class="col-xs-9 col-sm-7">
                                                                        <input  type="text" class="form-control" id="priority" placeholder=""> 
                                                                    </div>
                                                                    <div class="col-xs-3 col-sm-2">
                                                                        <i class="glyphicon glyphicon-info-sign form-info" data-toggle="tooltip" data-placement="right" title="Insert digit only."></i>
                                                                    </div>    
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Update changes</button>
                                                </div>
                                            </div>
                                           
                                        </div>
                                       
                                    </div>
                                    -->

								<div id="galleryModalDelete" class="modal fade" tabindex="-1"
									role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header modal-header-primary">
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												<h4 class="modal-title">Delete confirmation</h4>
											</div>
											<div class="modal-body">

												<div class="row">
													<div class="col-md-12">Delete This Entry?</div>
												</div>

											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary">Yes I am</button>
												<button type="button" class="btn btn-default"
													data-dismiss="modal">Close</button>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>

								<!--end modal gallery-->

								<!--right click menu-->
								<div id="context-menu-gallery">
									<ul class="dropdown-menu" role="menu">
										<li><a tabindex="-1">Open</a></li>
										<li><a tabindex="-1">Edit</a></li>
										<li class="divider"></li>
										<li><a tabindex="-1">Delete</a></li>
									</ul>
								</div>
								<!--end right click-->
								<!--paging-->
								<div class="paging row">
									<div class="col-md-6 show-paging">Showing 1 to 10 of 20 entries</div>

									<div class="col-md-6 paging-count">
										<ul class="pagination">
											<li class="prev disabled"><a href="#">â†� Previous</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li class="next"><a href="#">Next â†’ </a></li>
										</ul>
									</div>

								</div>
							</div>
							<!--End Gallery-->

						</div>
						<div role="tabpanel" class="tab-pane" id="settings">
							<div class="view-log">
								<table class="table table-bordered table-hover" id="mt">
									<thead>
										<tr>

											<th>Type</th>
											<th>DateTime</th>
											<th>Action</th>
											<th>Message</th>
											<th>By</th>
										</tr>
									</thead>
									<tbody>
										<tr id="0001">
											<td>Information</td>
											<td>15/04/2016</td>
											<td>Publish</td>
											<td>Json</td>
											<td>15/04/2016@example.com</td>
										</tr>
										<tr id="0002">
											<td>Information</td>
											<td>15/04/2016</td>
											<td>Publish</td>
											<td>Json</td>
											<td>mary@example.com</td>
										</tr>
									</tbody>
								</table>

								<!--right click menu-->
								<div id="context-menu">
									<ul class="dropdown-menu" role="menu">
										<li><a tabindex="-1">Action</a></li>
										<li><a tabindex="-1">Another action</a></li>
										<li><a tabindex="-1">Something else here</a></li>
										<li class="divider"></li>
										<li><a tabindex="-1">Separated link</a></li>
									</ul>
								</div>
								<!--end right click-->
								<!--paging-->
								<div class="paging row">
									<div class="col-md-6 show-paging">Showing 1 to 10 of 20 entries</div>

									<div class="col-md-6 paging-count">
										<ul class="pagination">
											<li class="prev disabled"><a href="#">â†� Previous</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li class="next"><a href="#">Next â†’ </a></li>
										</ul>
									</div>

								</div>
							</div>
							<!--end view log-->
						</div>
					</div>

				</div>
			</div>


		</div>
	</div>
</div>

<script type="text/javascript">
		$('#myTabs a').click(function(e) {
			e.preventDefault()
			$(this).tab('show')
		})

		$('#datepicker').datepicker();

		$('[data-toggle="tooltip"]').tooltip();

		/*gallery*/
		/*start click context selector*/
		$('#mt-gallery')
				.contextmenu(
						{
							target : '#context-menu-gallery',
							scopes : 'tbody > tr',
							onItem : function(row, e) {
								var id = $(row).attr("id");
								//var name = $(row.children('*')[0]).text();
								var action = $(e.target).text();
								//alert('You right clicked on ' + id + '\'s row and selected menu item "' + action  + '".');
								if (action === "Open") {
									var actionId = "galleryModalOpen";
									var titleModal = "View Gallery";
									/*
									    1.find class modal
									    2.remove and add id to class codal
									    3.change title modal
									    4.chage button to close only;
									 */
									var imageUrl = $(row).find("div div img")
											.attr("src");
									console.log(imageUrl);
									var oldId = $('.modal:first').attr("id");
									console.log(oldId);

									var isChageId = $('.modal:first').attr(
											"id", actionId);
									isChageId.find("input,textarea").attr(
											"disabled", "disabled");

									//modal-footer                        
									$(".modal-footer > button").remove();
									$(".modal-footer")
											.append(
													'<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>');

									/*set tile modal*/
									$(".modal-title").text(titleModal);
									/*
									    show image
									 */

									isChageId.modal('show');

									$("#" + actionId)
											.on(
													"hidden.bs.modal",
													function() {
														console.log("close");
														$(this).attr("id",
																oldId);
														isChageId
																.find(
																		"input,textarea")
																.removeAttr(
																		'disabled')

														/*set footer*/
														//modal-footer
														$(
																".modal-footer > button")
																.remove();

														var strButton = '<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>';
														strButton += '<button class="btn btn-primary" type="button">Save changes</button>';
														console.log(strButton);
														$(".modal-footer")
																.append(
																		strButton);

														/*set tile modal*/
														$(".modal-title").text(
																"Add Gallery");

													});

								} else if (action === "Edit") {

									var actionId = "galleryModalEdit";
									var titleModal = "Edit Gallery";
									/*
									    1.find class modal
									    2.remove and add id to class codal
									    3.change title modal
									    4.chage button to close only;
									 */
									var imageUrl = $(row).find("div div img")
											.attr("src");
									console.log(imageUrl);
									var oldId = $('.modal:first').attr("id");
									console.log(oldId);

									var isChageId = $('.modal:first').attr(
											"id", actionId);
									//isChageId.find("input,textarea").attr("disabled","disabled"); 

									//modal-footer                        
									$(".modal-footer > button").remove();
									var strButton = '<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>';
									strButton += '<button class="btn btn-primary" type="button">Update changes</button>';
									$(".modal-footer").append(strButton);

									/*set tile modal*/
									$(".modal-title").text(titleModal);
									/*
									    show image
									 */

									isChageId.modal('show');

									$("#" + actionId)
											.on(
													"hidden.bs.modal",
													function() {
														console.log("close");
														$(this).attr("id",
																oldId);
														// isChageId.find("input,textarea").removeAttr('disabled')

														//modal-footer
														$(
																".modal-footer > button")
																.remove();

														var strButton = '<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>';
														strButton += '<button class="btn btn-primary" type="button">Save changes</button>';
														console.log(strButton);
														$(".modal-footer")
																.append(
																		strButton);

														/*set tile modal*/
														$(".modal-title").text(
																"Add Gallery");

													});

								} else if (action === "Delete") {
									$('#galleryModalDelete').modal('show');
								}
							}
						});

		/*end click context selector*/

		$('.fancybox-thumbs').fancybox({
			prevEffect : 'none',
			nextEffect : 'none',

			closeBtn : true,
			arrows : false,
			nextClick : true,

			helpers : {
				thumbs : {
					width : 50,
					height : 50
				}
			}
		});
		/*end gallery*/
	</script>
	
	<!-- Bootstrap core JavaScript
    ================================================== -->

