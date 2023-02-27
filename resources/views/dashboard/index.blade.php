<x-dashboard-layout title="Dashboard">
    <link rel="stylesheet" href="dashboard/css/templatemo-cyborg-gaming.css">
    <x-partials.alert />
    @if (auth()->user()->khodim->role == 'ADMIN')
        {{-- ESPECIALLY ADMIN ROLE --}}
        @include('dashboard.admin')
    @elseif(auth()->user()->khodim->role !== 'ADMIN')
        {{-- ESPECIALLY USER ROLE --}}
        @foreach ($profile as $profiles_row)
            @if ($profiles_row->nama_media != null && $profiles_row->jumlah_santri != null)
                {{-- ESPECIALLY USER ROLE IF NOT FILL COMPLETED FORM --}}
                @include('dashboard.user-profile')
            @else
                {{-- ESPECIALLY USER ROLE IF FILL COMPLETED FORM --}}
                @include('dashboard.user-form')
            @endif
        @endforeach
    @endif
</x-dashboard-layout>
