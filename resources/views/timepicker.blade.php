{{-- @extends('layout')

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

@stop --}}

<!DOCTYPE>

<html>
<head>
<title>Region > Country > Division</title>
<select name="country" class="countries order-alpha" id="countryId">
    <option value="">Select Country</option>
</select>
<select name="state" class="states order-alpha" id="stateId">
    <option value="">Select State</option>
</select>
<select name="city" class="cities order-alpha" id="cityId">
    <option value="">Select City</option>
</select>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
</body>
</html>