
	<div class="content row">
		<div class="col-md-12 clear-paddin">

			<div class="content-header">
				<ul class="breadcrumb">
					<li class="active">Dashboard</li>
				</ul>
			</div>

			<div class="col-md-12 datagrid">
				<div class="grid-header">
					<h3>Data Content</h3>
				</div>
				<div class="grid-content">
					<div class="bth">
						<div class="grid-count">
							<label> <select name="DataTables_Table_0_length" size="1"
								aria-controls="DataTables_Table_0">
									<option value="10" selected="selected">10</option>
									<option value="25">25</option>
									<option value="50">50</option>
									<option value="100">100</option>
							</select>
							</label>
						</div>

						<div class="btn-add">
							<a class="btn btn-success" href="<?php echo base_url(uri_string());?>/add">Add a new</a>
						</div>
					</div>
					<table class="table table-bordered table-hover" id="mt-grid">
						<thead>
							<tr>
								<th style="width: 3%;" class="check-table"><input
									type="checkbox" value=""></th>
								<th style="width: 7%;">ID</th>
								<th style="width: 7%;">Thumb</th>
								<th style="width: 20%">Title</th>
								<th style="width: 15%">Start Time</th>
								<th style="width: 15%">Modify Time</th>
								<th style="width: 5%">Status</th>
								<th style="width: 15%">Modify by</th>
							</tr>
						</thead>
						<!-- <tbody>

						<?php //foreach($list['all'] as $val ){?>
							<tr id="<?php //echo $val['ID'];?>">
								<td><input type="checkbox" value=""></td>
								<td><?php //echo $val['ID'];?></td>
								<td style="text-align: center;"><img src="../img/_thumbnail.png" />
								</td>
								<td><?php //echo $val['post_title'];?></td>
								<td><?php //echo $val['post_date'];?></td>
								<td><?php //echo $val['post_modified'];?></td>
								<td><?php //echo $val['post_status'];?></td>
								<td><?php //echo $val['post_name'];?></td>
							</tr>
							<?php //}?>

						</tbody> -->
					</table>
					<!--right click menu-->
					<div id="context-menu">
						<ul class="dropdown-menu" role="menu">
							<li><a tabindex="-1">Open</a></li>
							<li><a tabindex="-1">Edit</a></li>
							<li><a tabindex="-1">Unpublish</a></li>
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
								<li class="prev disabled"><a href="#">← Previous</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li class="next"><a href="#">Next → </a></li>
							</ul>
						</div>

					</div>

					<!--modal-->
					<div id="ManageModal" class="modal fade" tabindex="-1"
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
														class="col-xs-12 col-sm-3 control-label">Meta Description:</label>
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
														<textarea class="form-control" rows="4" id="keywordMeta"></textarea>
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
														class="col-xs-12 col-sm-3 control-label">Og Description:</label>
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
													<label for="ogUrl" class="col-xs-12 col-sm-3 control-label">Og
														URL:</label>
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
																class="btn btn-primary">Browse</span> <input type="file"
																style="display: none;"
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
					</div>

					<!-- /.modal-dialog -->

					<div id="ModalDelete" class="modal fade" tabindex="-1"
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
				</div>
			</div>
		</div>
	</div>









	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	

	<script type="text/javascript">

	$('#datepicker').datepicker();
	
		$('#mt-grid').contextmenu({
			target : '#context-menu',
			scopes : 'tbody > tr',
			onItem : function(row, e) {
				var name = $(row).attr("id");
				//var name = $(row.children('*')[0]).text();
				var action = $(e.target).text();
				//alert('You right clicked on ' + name + '\'s row and selected menu item "' + action  + '".');

				console.log("action name:" + action);
				if (action === "Open") {
					window.open("./dashboard-view.php?cid=" + name, "_top");
				}else if(action==="Edit"){
					window.open("./dashboard-edit.html?cid=" + name, "_top");
				}
			}
		});
	</script>

