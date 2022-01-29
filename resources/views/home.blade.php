@extends('layouts.add')

@section('title-block')Главния страница@endsection

@section('content')

  <h1>Главния страница</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores adipisci, quisquam similique omnis ratione optio sed dolores quos veniam nostrum dolor saepe hic, ab accusamus perspiciatis? Dolorem cumque accusamus ducimus?
  </p>

    
@endsection

@section('aside') <?php //дополнительное подключение секции для дополнения своим текстом ?>
     @parent
    <p>Дополнительный текст</p>
@endsection