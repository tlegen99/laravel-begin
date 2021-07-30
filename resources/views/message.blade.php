@extends('layouts.app')

@section('title_page'){{ $element->subject }}@endsection

@section('content')
	<h1>{{$element->subject}}</h1>
		<div class="alert alert-info">
			<p>{{ $element->email }}</p>
			<p>{{ $element->message }}</p>
			<p><small>{{ $element->created_at }}</small></p>
			<p>Автор: {{ $element->name }}</p>
			<a href="{{ route('contact_update', $element->id) }}" class="btn btn-secondary">Редактировать</a>
			<a href="{{ route('contact_delete', $element->id) }}" class="btn btn-danger">Удалить</a>
		</div>
@endsection