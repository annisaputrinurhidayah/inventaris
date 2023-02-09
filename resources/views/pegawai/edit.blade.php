@extends('layouts.main',['title' => 'Pegawai'])
@section('content')
    <x-content :title="[
        'name'=>'Pegawai',
        'icon'=>'fas fa-id-card-alt',
    ]">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('pegawai.update',['pegawai'=>$pegawai->id]) }}" class="card card-primary" method="POST">
                <div class="card-header">
                    <h3 class="card-title">Edit Pegawai</h3>
                </div>
                <div class="card-body">
                    @csrf
                    @method('put')
                    <x-input label="Nama Pegawai" name="nama_pegawai" :value="$pegawai->nama_pegawai"/>
                    <x-input label="Username" name="username" :value="$pegawai->username"/>
                    <x-input label="NIP" name="nip" :value="$pegawai->nip"/>
                    <x-textarea label="Alamat" name="alamat" :value="$pegawai->alamat"/>
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
