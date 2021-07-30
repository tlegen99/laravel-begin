@extends('layouts.app')

@section('title_page')Главная страница@endsection

@section('content')
	<h1>Главная страница</h1>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa facere, nostrum nobis modi nemo. Eos optio, mollitia atque perferendis sint sit rem quae quia! Beatae repudiandae hic optio quam fugiat!</p>
@endsection

@section('aside')
	@parent
	<p>Дополнительный текст</p>
@endsection