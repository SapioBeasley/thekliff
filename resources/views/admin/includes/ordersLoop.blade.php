<tr>
	<td><img src="assets/images/products/iphone.jpg" class="thumb-sm" alt=""></td>
	<td>{{$order['created_at']}}</td>
	<td><a href="#">TK#{{crc32($order['id'])}}</a></td>
	<td>${{money_format('%i', $order['amount'])}}</td>
	<td>
		<a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
		<a href="#" class="table-action-btn"><i class="md md-close"></i></a>
	</td>
</tr>
