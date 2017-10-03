@extends('layout')

@section('content')

<div id="app">
   <div class="instructions">You can use your keyboard to navigate</div>
  <vue-timepicker
  format="hh:mm A"
  v-model="yourTimeValue">
</vue-timepicker>
</div>
<script>
	// Work with <script> block
Vue.use(window.VueTimepicker)

// Else
Vue.use(VueTimepicker)
</script>

@stop