<tr>
	{{-- <td><img src="assets/images/products/iphone.jpg" class="thumb-sm" alt=""></td> --}}
	<td>{{$order['created_at']}}</td>
	<td><a href="{{url('admin/orders', $order['order_number'])}}">{{$order['order_number']}}</a></td>
	<td>${{money_format('%i', $order['amount'])}}</td>
</tr>
