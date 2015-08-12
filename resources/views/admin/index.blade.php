@extends('app')

@section('content')

    <!-- Page Section (About) -->
    @include('sections.forms.o_nas')

    <!-- Page Section (Team) -->
    @include('sections.forms.team')

    <!-- Page Section (Features) -->
    @include('sections.forms.ponuka')

    <!-- Page Section (Gallery) -->
    @include('sections.forms.galeria')

    <!-- Page Section (Contacts) -->
    @include('sections.forms.kontaktujte_nas')

    <!-- Page Section (Location) -->
    @include('sections.forms.mapa')

@endsection