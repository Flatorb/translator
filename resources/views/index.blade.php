@extends('Translator::app')

@section('heading')
	Translations
@endsection

@section('content')
	<div class="table-responsive">
		<table class="table table-striped table-sm">
			<thead>
			<tr>
				<th>ID</th>
				<th>Key</th>
				<th class="text-uppercase">{{ config('translator.primary_locale') ?? 'EN' }}</th>
				@foreach(explode(",", config('translator.locale_list')) as $locale)
					<th class="text-uppercase">{{ $locale }}</th>
					<th class="text-uppercase">{{ $locale }}_G</th>
				@endforeach
			</tr>
			</thead>
			<tbody>
			@foreach($keys as $key)
				<tr>
					<td>{{ $key->id }}</td>
					<td>{{ $key->key }}</td>
					<td>{{ $key->value }}</td>
					@foreach(explode(",", config('translator.locale_list')) as $locale)
						<td>{{ $key->where('locale')->first()->value ?? NULL }}</td>
						<td>{{ $key->where('locale')->first()->google ?? NULL }}</td>
					@endforeach
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection