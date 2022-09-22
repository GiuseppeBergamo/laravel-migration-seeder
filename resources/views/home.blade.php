@extends('layouts.main')

@section('main-content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Azienda</th>
      <th scope="col">Stazione di partenza</th>
      <th scope="col">Stazione di arrivo</th>
      <th scope="col">Orario di partenza</th>
      <th scope="col">Orario di arrivo</th>
      <th scope="col">Codice treno</th>
      <th scope="col">Numero carrozze</th>
      <th scope="col">In orario</th>
      <th scope="col">Cancellato</th>
    </tr>
  </thead>
  <tbody>
    @foreach($trains as $train)
    <tr>
      <td>{{ $train->azienda }}</td>
      <td>{{ $train->stazione_partenza }}</td>
      <td>{{ $train->stazione_arrivo }}</td>
      <td>{{ $train->orario_partenza }}</td>
      <td>{{ $train->orario_arrivo }}</td>
      <td>{{ $train->codice_treno }}</td>
      <td>{{ $train->numero_carrozze }}</td>
      <td>
        @if($train->cancellato)
            Cancellato
        @elseif(!$train->in_orario)
            In ritardo
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection