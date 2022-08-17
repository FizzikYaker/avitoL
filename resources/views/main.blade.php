
	<!-- ОТ КОГО НАСЛЕДЫВАТЬ ОСНОВНОЙ КОД СТРАНИЦЫ -->
	@extends('layouts.base')

	@section('title', 'Главная')

<!-- ЭТОТ БЛОК КОДА БУДЕТ ПЕРЕНЕСЕН НА ГЛАВНЫЙ СЛОЙ С ИМЕНЕМ MAIN СТИЛИ ПОДКЛЮЧАЮТЬСЯ ИМЕННО ТАМ НЕ ЗАБУДЬ ЗАКРЫТЬ СЕКЦИЮ -->
@section('main')

	<!-- цикл анологичный php  -->
@foreach ($posts as $item)
	<h1>{{ $item->title}}</h1>
	<br>
		<!-- в таких скобках можно использовать данные масива переданого через контролер -->
	<h1>{{ $item->content}}</h1>
	<br>
	<h1>{{ $item->damage}}</h1>
	<br>
	<!-- ССЫЛКА ИСПОЛЬЗУЕТ НЕ URN A МАРШИРУТИЗАТОР С ЗАДАННЫМ ИМЕНЕМ -->
	<a href="{{ route('detail', ['posts' => $item->id]) }}">Подробнее</a>
	<hr>
@endforeach
@endsection('main')
