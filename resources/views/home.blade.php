@extends('app')

@section('content')

    <!-- Page Section (About) -->
    @include('sections.pages.o_nas')

    <!-- Page Section (Team) -->
    @include('sections.pages.team')

    <!-- Page Section (Features) -->
    @include('sections.pages.ponuka')

    <!-- Page Section (Gallery) -->
    @include('sections.pages.galeria')

    <!-- Page Section (Contacts) -->
    @include('sections.pages.kontaktujte_nas')

    <!-- Page Section (Location) -->
    @include('sections.pages.mapa')

@endsection