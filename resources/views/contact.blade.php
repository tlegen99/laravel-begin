@extends('layouts.app')

@section('title_page')Контакты@endsection

@section('content')
	<h1>Контакты</h1>

	<form action="{{ route('contact_submit') }}" method="post">
		@csrf

		<div class="form-group">
			<label for="name">Введите имя</label>
			<input type="text" name="name" class="form-control" placeholder="Введите имя" id="name">
		</div>
		<div class="form-group">
			<label for="email">Введите Email</label>
			<input type="email" name="email" class="form-control" placeholder="Введите Email" id="email">
		</div>
		<div class="form-group">
			<label for="subject">Тема сообщения</label>
			<input type="text" name="subject" class="form-control" placeholder="Тема сообщения" id="subject">
		</div>
		<div class="form-group">
			<label for="message">Сообщение</label>
			<textarea name="message" class="form-control" placeholder="Введите сообщение" id="message"></textarea>
		</div>

		<button type="submit" class="btn btn-success mt-3">Отправить</button>
	</form>
@endsection