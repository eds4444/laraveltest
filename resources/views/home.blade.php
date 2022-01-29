@extends('layouts.add')

@section('title-block')Главния страница@endsection

@section('content')

  <h1>Главния страница</h1>
    
@endsection

@section('aside') <?php //дополнительное подключение секции для дополнения своим текстом ?>
     @parent
    <p>Дополнительный текст</p>
@endsection