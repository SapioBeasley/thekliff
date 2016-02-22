<div class="row">
	<div class="col-lg-6">
		<div class="card-box">
			<h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>General</b></h5>

			<div class="form-group m-b-20">
				<label>Product name <span class="text-danger">*</span></label>
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'e.g : Apple iMac']) !!}
			</div>

			<div class="form-group m-b-20">
				<label>Product Description <span class="text-danger">*</span></label>
				{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Please enter description']) !!}
			</div>

			<div class="form-group m-b-20">

				<label>Category <span class="text-danger">*</span></label>
				{!! Form::select('category', $categories) !!}

			</div>

			<div class="form-group m-b-20">
				<label>Price <span class="text-danger">*</span></label>
				{!! Form::text('price', isset($product['price']) ? money_format('%i', $product['price']) : null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group m-b-20">
				<label class="m-b-15">Status <span class="text-danger">*</span></label>
				<br/>
				<div class="radio radio-inline">
					<input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
					<label for="inlineRadio1"> Published </label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" id="inlineRadio2" value="option2" name="radioInline">
					<label for="inlineRadio2"> Unpublished </label>
				</div>
			</div>

		</div>
	</div>

	<div class="col-lg-6">
		<div class="card-box">
			<h5 class="text-muted text-uppercase m-t-0 m-b-30"><b>Product Image</b></h5>

			@if (isset($product))
				@foreach($product['images'] as $image)
					<div class="table-box m-b-30">

						<div class="table-detail">
							<img src="{{$image['image_url']}}" class="thumb-md" alt="img">
						</div>

						<div class="table-detail">
							<div class="radio radio-inline">
								<input type="radio" id="inlineRadio4" value="option1" name="radioInline2" checked="">
								<label for="inlineRadio4"> Main Image </label>
							</div>
							<div class="radio radio-inline">
								<input type="radio" id="inlineRadio5" value="option2" name="radioInline2">
								<label for="inlineRadio5"> Thumbnail </label>
							</div>
							<div class="radio radio-inline">
								<input type="radio" id="inlineRadio6" value="option3" name="radioInline2">
								<label for="inlineRadio6"> Gallary </label>
							</div>
						</div>

						<div class="table-detail table-actions-bar" style="min-width: 60px;">
							<a href="ecommerce-product-detail.html#" class="table-action-btn"><i class="md md-edit"></i></a>
							<a href="ecommerce-product-detail.html#" class="table-action-btn"><i class="md md-close"></i></a>
						</div>

					</div>
				@endforeach
			@endif

			<div class="text-center m-t-30">
				<div class="fileupload btn btn-purple btn-md w-md waves-effect waves-light">
					<span><i class="ion-upload m-r-5"></i>Upload</span>
					<input type="file" class="upload">
				</div>
			</div>
		</div>
	</div>

</div>
