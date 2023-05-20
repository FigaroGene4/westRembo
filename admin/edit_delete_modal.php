<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<style>
	@media (min-width: 768px) {
		.wew {
			width: 600px;
			margin: 30px auto;
		}

	}
</style>


<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content wew">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Resident Info</h4>
				</center>

			</div>

			<div class="modal-body">
				<div class="container">
					<div class="row">

						<div class="col">



							<img src="../temp/images/<?php echo $row['image']; ?>" class="rounded-circle" alt="DP" width="300px" height="300px">
							<br><br>
							<h2 style="padding-left:10px; font-weight: bold">Name: <?php echo $row['firstName'] . ' ' . $row['lastName']; ?></h2>





						</div>

						<div class="col">

							<ul class="nav nav-pills nav-fill">
								<li class="nav-item">
									<a class="nav-link active" href="#">Personal Information</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#dh_<?php echo $row['id']; ?>" data-toggle='modal' data-dismiss="modal">Document History </a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#ah_<?php echo $row['id']; ?>" data-toggle='modal' data-dismiss="modal">Booking History</a>
								</li>



							</ul>

							<div class="container"><br>

								<h3 style="font-weight: bold">Email: </h3> <span>
									<h2 style="text-align: inline"> <?php echo $row['email']; ?></h2>
								</span>
								<h3 style="font-weight: bold">Contact Number: </h3> <span>
									<h2 style="text-align: inline"> <?php echo $row['contactNumber']; ?></h2>
								</span>
								<h3 style="font-weight: bold">Email: </h3> <span>
									<h2 style="text-align: inline"> <?php echo $row['email']; ?></h2>
								</span>
								<h3 style="font-weight: bold">Birthdate: </h3> <span>
									<h2 style="text-align: inline"> <?php echo $row['birthdate']; ?></h2>
								</span>
								<h3 style="font-weight: bold">Address: </h3> <span>
									<h2 style="text-align: inline"> <?php echo $row['houseNumber'] . ' ' . $row['streetNumber'] . ', Sitio ' . $row['sitio']; ?></h2>
								</span>




							</div>


						</div>

					</div>
				</div>




			</div>












			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a> </button>
				</form>


			</div>
		</div>
	</div>
</div>


<!-- dh -->


<div class="modal fade" id="dh_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content wew">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Resident Info</h4>
				</center>

			</div>

			<div class="modal-body">
				<div class="container">
					<div class="row">

						<div class="col">



							<img src="../temp/images/<?php echo $row['image']; ?>" class="rounded-circle" alt="DP" width="300px" height="300px">
							<br><br>
							<h3 style="padding-left:10px">Name: <?php echo $row['firstName'] . ' ' . $row['lastName']; ?></h3>





						</div>

						<div class="col">

							<ul class="nav nav-pills nav-fill">
								<li class="nav-item">
									<a class="nav-link" href="#edit_<?php echo $row['id']; ?>" data-toggle='modal' data-dismiss="modal">Personal Information</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active " href="#dh_<?php echo $row['id']; ?>" data-toggle='modal'>Document History </a>
								</li>
								<li class="nav-item active">
									<a class="nav-link" href="#ah_<?php echo $row['id']; ?>" data-toggle='modal' data-dismiss="modal">Booking History</a>
								</li>

							</ul>

							<div class="container"><br>
								<div class="row">
									<div class="col">



										<ul class="list-group">
											<li class="list-group-item"><?php echo $rowz['transactionNumber']; ?></li>
											<li class="list-group-item">Dapibus ac facilisis in</li>
											<li class="list-group-item">Morbi leo risus</li>
											<li class="list-group-item">Porta ac consectetur ac</li>
											<li class="list-group-item">Vestibulum at eros</li>
										</ul>

									</div>

								</div>



							</div>


						</div>

					</div>
				</div>




			</div>












			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a> </button>
				</form>


			</div>
		</div>
	</div>
</div>

<!-- appointmentt history -->


<div class="modal fade" id="ah_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content wew">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Resident Info</h4>
				</center>

			</div>

			<div class="modal-body">
				<div class="container">
					<div class="row">

						<div class="col">



							<img src="../temp/images/<?php echo $row['image']; ?>" class="rounded-circle" alt="DP" width="300px" height="300px">
							<br><br>
							<h3 style="padding-left:10px">Name: <?php echo $row['firstName'] . ' ' . $row['lastName']; ?></h3>





						</div>

						<div class="col">

							<ul class="nav nav-pills nav-fill">
								<li class="nav-item">
									<a class="nav-link" href="edit_<?php echo $row['id']; ?>" data-toggle='modal' data-dismiss="modal">Personal Information</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="#dh_<?php echo $row['id']; ?>" data-toggle='modal' data-dismiss="modal" data-toggle='modal'>Document History </a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" href="ah_<?php echo $row['id']; ?>" data-toggle='modal' data-dismiss="modal">Booking History</a>
								</li>

							</ul>


							<div class="container"><br>



								<ul class="list-group">
									<li class="list-group-item">Cras justo odio</li>
									<li class="list-group-item">Dapibus ac facilisis in</li>
									<li class="list-group-item">Morbi leo risus</li>
									<li class="list-group-item">Porta ac consectetur ac</li>
									<li class="list-group-item">Vestibulum at eros</li>
								</ul>


							</div>




						</div>

					</div>
				</div>




			</div>












			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a> </button>
				</form>


			</div>
		</div>
	</div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Delete Member</h4>
				</center>
			</div>
			<div class="modal-body">
				<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['firstName'] . ' ' . $row['lastName']; ?></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<a href="delete.php?id=<?php echo $row['id']; ?> " class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
			</div>

		</div>
	</div>
</div>



<div class="modal fade" id="decline_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Decline Member</h4>
				</center>
			</div>
			<div class="modal-body">
				<p class="text-center">Are you sure you want to Decline?</p>
				<h2 class="text-center"><?php echo $row['firstName'] . ' ' . $row['lastName']; ?></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<a href="delete.php?id=<?php echo $row['id']; ?> " class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="accept_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Accept Resident</h4>
				</center>
			</div>
			<div class="modal-body">
				<p class="text-center">Are you sure you want to Accept?</p>
				<h2 class="text-center"><?php echo $row['firstName'] . ' ' . $row['lastName']; ?></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<a href="accept.php?id=<?php echo $row['id']; ?> " class="btn btn-success"><span class="glyphicon glyphicon-trash"></span> Yes</a>
			</div>

		</div>
	</div>
</div>



<div class="modal fade" id="acceptDoc_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Document Request</h4>
				</center>
			</div>
			<div class="modal-body">
				<p class="text-center">Are you sure you want to Accept Document Request:</p>
				<h2 class="text-center"><?php echo $row['transactionNumber'] . ' | ' . $row['category']; ?></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<a href="acceptDoc.php?id=<?php echo $row['id']; ?> " class="btn btn-success"><span class="glyphicon glyphicon-trash"></span> Yes</a>
			</div>

		</div>
	</div>
</div>