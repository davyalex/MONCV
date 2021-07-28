@extends('layouts.base')

@section('title' ,'Bienvenue')
    

@section('content')

    @include('pages.partials.banner')
    @include('pages.partials.infoperso')
    @include('pages.partials.diplome')
    @include('pages.partials.competence')
    @include('pages.partials.experience')
    @include('pages.partials.certification')
    @include('pages.partials.portfolio')



@endsection



