<div class="panel-body">

	<div class="alert alert-info">
		Returning customer? Click <a href="/login">here</a> to login
	</div>

	<div class="row">
		<div class="col-md-8">
			<h4>BILLING DETAILS</h4>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
					</div>
				</div>
			</div>

			<div class="form-group">
				{!! Form::text('company_name', null, ['class' => 'form-control', 'placeholder' => 'Company (Optional)']) !!}
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone']) !!}
					</div>
				</div>
			</div>

			<div class="form-group">
				{!! Form::select('country', $countries, null, ['class' => 'form-control']) !!}
			</div>

			<h4>ADDRESS</h4>

			<div class="form-group">
				{!! Form::text('street_address', null, ['class' => 'form-control', 'placeholder' => 'Street Address']) !!}
			</div>

			<div class="form-group">
				{!! Form::text('address_2', null, ['class' => 'form-control', 'placeholder' => 'Apt # (Optional)']) !!}
			</div>

			<div class="form-group">
				{!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'City']) !!}
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::select('state', $states, null, ['class' => 'form-control', 'placeholder' => 'place']) !!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::text('zip', null, ['class' => 'form-control', 'placeholder' => 'Zip']) !!}
					</div>
				</div>
			</div>

			<div class="form-group">
				{!! Form::textarea('order_notes', null, ['class' => 'form-control', 'placeholder' => 'Order Notes']) !!}
			</div>
		</div>
		<div class="col-md-4">
			<h4>SHIPPING OPTION</h4>

			<div class="form-group">
				{!! Form::select('state', ['standard (4.00)', 'express (14.00)', 'next day (34.00)'], null, ['class' => 'form-control', 'placeholder' => 'place']) !!}
			</div>

			<div class="form-group">
				<a href="#" style="display: inline-block;font-size: 12px;color: #242424;background: #fff;font-weight: 900;border: 2px solid #242424;padding: 10px 25px;letter-spacing: 4px;margin-top: 0;margin-bottom: 0;-moz-transition: all 0.3s ease-in-out;-webkit-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;border-radius: 0;width:100%">Update Cart With Shipping</a>
			</div>

			<h4>CARD INFORMATION</h4>

			<div class="form-group">
				{!! Form::text('card_number', null, ['class' => 'form-control', 'placeholder' => 'Card Number']) !!}
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::text('exp_month', null, ['class' => 'form-control', 'placeholder' => 'Exp Month']) !!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::text('exp_year', null, ['class' => 'form-control', 'placeholder' => 'Exp Year']) !!}
					</div>
				</div>
			</div>

			<div class="form-group">
				{!! Form::text('cvv', null, ['class' => 'form-control', 'placeholder' => 'CVV']) !!}
			</div>
		</div>
	</div>
