@extends('layouts.main')
@section('content')
<!-- @if(isset($result))
        <p>The result is: {{ $result }}</p>
    @endif -->
<form action="{{ route('submit') }}" method="get">
   <input name="num1"><br>
   <input name="num2"><br>
   <button type="submit" name="submit">Submit</button>
</form>
@endsection