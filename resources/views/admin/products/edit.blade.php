@extends('layouts.admin')

@section('pageTitle', 'Edit Product')

@section('content')
<div class="row">
	<div class="col-sm-12">
		{!! Form::model($product, ['route' => ['admin.product.update', $product['id']],]) !!}

			@include('admin.includes.productForm')

			<div class="row">
				<div class="col-sm-12">
					<div class="text-center p-20">
						<button type="button" class="btn w-sm btn-default waves-effect waves-light">Save</button>
						<button type="button" class="btn w-sm btn-danger waves-effect waves-light">Delete</button>
					</div>
				</div>
			</div>

		{!! Form::close() !!}
	</div>
</div>
@endsection
