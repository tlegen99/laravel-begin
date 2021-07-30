@extends('layouts.app')

@section('title_page')Все сообщения@endsection

@section('content')
	<h1>Все сообщения</h1>
	@foreach($data as $element)
		<div class="alert alert-info">
			<h3>{{ $element->subject }}</h3>
			<p>{{ $element->email }}</p>
			<p><small>{{ $element->created_at }}</small></p>
			<a href="{{ route('message_one', $element->id) }}" class="btn btn-primary">Подробнее</a>
		</div>
	@endforeach
@endsection