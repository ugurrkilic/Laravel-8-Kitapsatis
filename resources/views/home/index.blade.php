@extends('layouts.home')
              @section('title', $setting->title)
              @section('description'){{$setting->description}}@endsection
@section('keywords'){{$setting->keywords}}@endsection
@section('content')
@include('home._sliderarea')
@include('home._content')
@endsection




