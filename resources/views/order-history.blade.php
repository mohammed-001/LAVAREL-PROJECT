@extends('layout')

@section('content')

<div class="container">

<h2>Order History</h2>

<table border="1">

<tr>
<th>Order ID</th>
<th>Status</th>
<th>Total</th>
</tr>

<tr>
<td>1001</td>
<td>Delivered</td>
<td>$999</td>
</tr>

<tr>
<td>1002</td>
<td>Processing</td>
<td>$39</td>
</tr>

</table>

</div>

@endsection