@extends('layouts.app')

@section('title_page')Редактирование сообщения@endsection

@section('content')
	<h1>Редактирование сообщения</h1>

	<form action="{{ route('contact_update_submit', $element->id) }}" method="post">
		@csrf

		<div class="form-group">
			<label for="name">Введите имя</label>
			<input type="text" name="name" value="{{ $element->name }}" class="form-control" placeholder="Введите имя" id="name">
		</div>
		<div class="form-group">
			<label for="email">Введите Email</label>
			<input type="email" name="email" value="{{ $element->email }}" class="form-control" placeholder="Введите Email" id="email">
		</div>
		<div class="form-group">
			<label for="subject">Тема сообщения</label>
			<input type="text" name="subject" value="{{ $element->subject }}" class="form-control" placeholder="Тема сообщения" id="subject">
		</div>
		<div class="form-group">
			<label for="message">Сообщение</label>
			<textarea name="message" 
					class="form-control" 
					placeholder="Введите сообщение" 
					id="message">{{ $element->message }}
			</textarea>
		</div>

		<button type="submit" class="btn btn-success mt-3">Обновить</button>
	</form>
@endsection