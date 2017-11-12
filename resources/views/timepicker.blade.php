@extends('layout')

@section('content')

<timepicker></timepicker>

<script>
  Vue.component(
    'timepicker',
    require('./components/vue-timepicker.vue')
  );
</script>

@stop