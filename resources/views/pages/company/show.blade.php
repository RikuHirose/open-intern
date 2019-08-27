@extends('layouts.app')

@section('content')
  <!-- local-strage -->
  @isset($currentUser)
    <store-local-strage
    :company-id="{{json_encode($company->id)}}"
    :user-id="{{json_encode($currentUser->id)}}"
    ></store-local-strage>
  @endisset

  <div class="p-company-show">

  </div>

@endsection