@extends('layouts.main')
@section('content')
<x-content :title="[
    'name' => 'Dashboard',
    'icon' => 'fas fa-home'
]">
    <div class="row">
        <x-box :dataBox="[
            'label' => 'Peminjaman',
            'background' => 'bg-success',
            'value' => $peminjaman->jumlah,
            'icon' => 'fas fa-hand-holding',
            'href' => route('admin.peminjaman.index')
        ]" />
        @can('admin')
        <x-box :dataBox="[
            'label' => 'Inventaris',
            'background' => 'bg-primary',
            'value' => $inventaris->total,
            'icon' => 'fas fa-dekstop',
            'href' => route('inventaris.index')
        ]" />
        <x-box :dataBox="[
            'label' => 'Pegawai',
            'background' => 'bg-pink',
            'value' => $pegawai->jumlah,
            'icon' => 'fas fa-id-card-alt',
            'href' => route('pegawai.index')
        ]" />
        @endcan

    </div>
</x-content>
@endsection
