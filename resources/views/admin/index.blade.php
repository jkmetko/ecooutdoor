@extends('app')

@section('content')

    <!-- Page Section (About) -->
    @include('sections.forms.o_nas')

    <!-- Page Section (Team) -->
    <div style="display: none">
        @include('sections.forms.team')
    </div>

    <!-- Page Section (Features) -->
    @include('sections.forms.ponuka')

    <!-- Page Section (Gallery) -->
    @include('sections.forms.galeria')

    <!-- Page Section (Contacts) -->
    @include('sections.forms.kontaktujte_nas')

    <!-- Page Section (Location) -->
    @include('sections.forms.mapa')

@endsection