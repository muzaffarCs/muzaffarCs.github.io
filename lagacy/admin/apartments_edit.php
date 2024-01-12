<?php require_once('header.php'); ?>



<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Apartment</h1>
	</div>
	<div class="content-header-right">
		<a href="apartments.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if($error_message): ?>
			<div class="callout callout-danger">
				<p>
				<?php echo $error_message; ?>
				</p>
			</div>
			<?php endif; ?>

			<?php if($success_message): ?>
			<div class="callout callout-success">
				<p><?php echo $success_message; ?></p>
			</div>
			<?php endif; ?>

			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Apartment Type(Like: LUXURY APARTMENT) <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="title" placeholder="Example: LUXURY APARTMENT">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Squre Area </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="squre_area" placeholder="Example: 20ffet">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Floor <span>(Optional)</span></label>
									<div class="col-sm-6">
								<input type="text" class="form-control" name="floor" placeholder="Example: 20ffet">
							</div>


						</div>
								<div class="form-group">
							<label for="" class="col-sm-2 control-label">Bedrooms <span>*</span></label>
									<div class="col-sm-6">
								<input type="text" class="form-control" name="bedrooms" placeholder="Example: 5">
							</div>

				
						</div>


								<div class="form-group">
							<label for="" class="col-sm-2 control-label">Bathroom <span>(Optional)</span></label>
									<div class="col-sm-6">
								<input type="text" class="form-control" name="bathroom" placeholder="Example: 2">
							</div>

				
						</div>





								<div class="form-group">
							<label for="" class="col-sm-2 control-label">Terrace <span>(Optional)</span></label>
									<div class="col-sm-6">
								<input type="text" class="form-control" name="terrace" placeholder="Example: 2">
							</div>

				
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">parking <span>(Optional)</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="parking"  placeholder="Example: 2" >
							</div>
						</div>

							<div class="form-group">
							<label for="" class="col-sm-2 control-label">Details <span>*</span></label>
							<div class="col-sm-6">
								<textarea class="form-control" name="details" id="editor1"></textarea>
							</div>
						</div>




								<div class="form-group">
							<label for="" class="col-sm-2 control-label">Price <span>(*)</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="price"  placeholder="Example: 2000" >
							</div>
						</div>




		<div class="form-group">
							<label for="" class="col-sm-2 control-label">rooms <span>(*)</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="rooms"  placeholder="Example: 5" >
							</div>
						</div>



		<div class="form-group">
							<label for="" class="col-sm-2 control-label">Hall <span>(Optional)</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="hall" id="datepicker" placeholder="Example: 2" >
							</div>
						</div>

	<div class="form-group">
							<label for="" class="col-sm-2 control-label">Kicthen <span>(Optional)</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="kicthen" id="datepicker" placeholder="Example: 2" >
							</div>
						</div>


						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Featured Photo</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <input type="file" name="photo">
				            </div>
				        </div>
					
			
				
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>

<?php require_once('footer.php'); ?>
