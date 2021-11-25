@extends('layouts.app')
<form>
@section('arr')
        <div class = "alert alert-danger">
            <ul>
                @foreach ($arr as $r)
                <li>{{ $r }}</li>
                @endforeach
            </ul>
        </div>
        @endsection

</form> 