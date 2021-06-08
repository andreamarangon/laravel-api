@extends('layouts.app')

@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@endsection

@section('content')
<div id="app">
  <ul style="list-style: none">
    <li v-for="game in games" :key="game.id">
      <h4>@{{game.name}}</h4>
      <p>@{{game.description}}</p>
    </li>
  </ul>
</div>
@endsection

@section('foot-script')
<script src="{{asset('js/games.js')}}" charset="utf-8"></script>
</script>
@endsection