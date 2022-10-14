@extends('layouts.base')

@section('content')
  <a href="{{ route('comics.create') }}">
    <button type="button" class="btn btn-success">Aggiungi</button>
  </a>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">price</th>
        <th scope="col">series</th>
        <th scope="col">sale_date</th>
        <th scope="col">type</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
        <tr>
          <th scope="row">{{ $comic->id }}</th>
          <td>{{ $comic->title }}</th>
          <td>{{ $comic->price }}</th>
          <td>{{ $comic->series }}</th>
          <td>{{ $comic->sale_date }}</th>
          <td>{{ $comic->type }}</th>
          <td>
            <a href="{{ route('comics.show', $comic->id) }}">
              <button type="button" class="btn btn-primary">Mostra</button>
            </a>
            <a href="{{ route('comics.edit', $comic->id) }}">
              <button type="button" class="btn btn-secondary">Modifica</button>
            </a>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection