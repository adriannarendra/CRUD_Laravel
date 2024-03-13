@extends('main')

@section('navbar')
<?php 
$number = 0;
?>
<a href="/add" class="btn btn-primary mb-5">Add</a>
<div class="flex w-full overflow-x-auto">
	<table class="table-zebra table">
		<thead>
			<tr>
                <th>No</th>
				<th>Name</th>
				<th>Food</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
        @foreach($animal as $a)
			<tr>
                <th>{{ ++$number }}</th>
                <th>{{ $a->name }}</th>
                <th>{{ $a->food }}</th>
                <th>{{ $a->status }}</th>
                <th>
                <a href="{{ $a->id }}/edit" class="btn btn-success">Edit</a>
                <form class="btn btn-error" action="/update/{{ $a->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
                </th>
			</tr>
        @endforeach
		</tbody>
	</table>
</div>
@endsection