@extends('layouts.app')

{{-- active page --}}
@section('patient', 'active')

{{-- current page --}}
@section('pageTitle', 'Patient')

{{-- main content  --}}
@section('content')

<div class="flex flex_x_between full_w main_content_inner overflow_hidden">
    @includeIf('livewire.components.organisms.forms.patient-profile')
    @includeIf('livewire.components.organisms.forms.patient-list')
</div>

@endsection