@extends('layouts.main')

@section('content')

{!! html_entity_decode($pageTranslation->content) !!}

@endsection