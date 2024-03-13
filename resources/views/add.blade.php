@extends('main')

@section('navbar')
<form action="/store" method="post">
    @csrf
<div class="mx-auto flex w-full max-w-sm flex-col gap-6">
	<div class="flex flex-col items-center">
		<h1 class="text-3xl font-semibold">Add Data</h1>
	</div>
	<div class="form-group">
		<div class="form-field">
			<input name="name" placeholder="Type here" type="text" class="input max-w-full" />
		</div>
		<div class="form-field">
			<div class="form-control">
				<input name="food" placeholder="Type here" type="text" class="input max-w-full" />
			</div>
		</div>
        <div class="form-field">
			<div class="form-control">
				<input name="status" placeholder="Type here" type="text" class="input max-w-full" />
			</div>
		</div>
		<div class="form-field pt-5">
			<div class="btn btn-primary form-control justify-between">
				<button type="submit" class="w-full">Add</button>
			</div>
		</div>
	</div>
</div>
</form>
@endsection