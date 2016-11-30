
<h4> User List </h4>


	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone #</th>
				<th>Register Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach(App\User::all() as $user)
				<tr>
					<td>{{ $user['id'] }}</td>
					<td>{{ $user['name'] }}</td>
					<td>{{ $user['email'] }}</td>
					<td>{{ $user['telephone'] }}</td>
					<td>{{ $user['created_at'] }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>