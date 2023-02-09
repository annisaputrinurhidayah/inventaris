@extends('layouts.main',['title'=>'Profile'])
@section('content')
<x-content :title="[
    'name' => 'Profile',
    'icon' => 'fas fa-user'
]">
<div class="row">
    <div class="col-md-6">
        @if (session('message') == 'success update')
        <x-alert-success type="update" />
        @endif
        <form action="{{  route('admin.profile') }}" class="card card-primary" method="POST">
            <div class="card-header">
                <h3 class="card-title">My Profile</h3>
            </div>
            <div class="card-body">
                @csrf
                <x-input label="Nama" name="nama_petugas" :value="$petugas->nama_petugas"/>
                <x-input label="Username" name="username" :value="$petugas->username"/>
                <p class="text-muted mt-5">
                    Apabila tidal melakukan perubahan pada Password, pada inputan Password kosongkan.
                </p>
                <x-input label="Password" name="password" type="password"/>
                <x-input label="Password Confirmation" name="password_confirmation" type="password"/>
            </div>
            <div class="card-footer">
                <x-btn-update />
            </div>
        </form>
    </div>
</div>
</x-content>
@endsection
