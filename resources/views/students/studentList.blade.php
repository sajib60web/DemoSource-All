@foreach($students as $student)
<tr>
	<td>{{ $student->id }}</td>
	<td>{{ $student->first_name }}</td>
	<td>{{ $student->last_name }}</td>
	<td>{{ $student->first_name.' '.$student->last_name }}</td>
	<td>{{ $student->sex }}</td>
	<td>
		<a href="#" class="btn btn-info pull-right btn-sm" id="view" data-id="{{ $student->id }}">View</a>
		<a href="#" class="btn btn-success pull-right btn-sm" id="edit" data-id="{{ $student->id }}">Edit</a>
		<a href="#" class="btn btn-danger pull-right btn-sm" id="del" data-id="{{ $student->id }}">Delete</a>
	</td>
</tr>
@endforeach