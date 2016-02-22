@extends('layouts.admin')

@section('pageTitle', 'Create Product')

@section('content')
<div class="row">
	<div class="col-sm-12">
		{!! Form::open(['route' => ['admin.product.store']]) !!}

			@include('admin.includes.productForm')

			<style type="text/css">
				input[type=submit] {
					background: transparent;
					border: none
				}
			</style>

			<div class="row">
				<div class="col-sm-12">
					<div class="text-center p-20">
						{!! Form::submit('Create', ['class' => 'btn w-sm btn-default waves-effect waves-light']) !!}
						<button type="button" class="btn w-sm btn-default waves-effect waves-light">Create</button>
					</div>
				</div>
			</div>

		{!! Form::close() !!}
	</div>
</div>
@endsection
