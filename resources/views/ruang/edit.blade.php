@extends('layouts.main',['title' => 'Ruang'])
@section('content')
    <x-content :title="[
        'name'=>'Ruang',
        'icon'=>'fas fa-school',
    ]">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('ruang.update',['ruang'=>$ruang->id]) }}" class="card card-primary" method="POST">
                <div class="card-header">
                    <h3 class="card-title">Edit Ruang</h3>
                </div>
                <div class="card-body">
                    @csrf
                    @method('put')
                    <x-input label="Kode Ruang" name="kode_ruang" :value="$ruang->kode_ruang"/>
                    <x-input label="Nama Ruang" name="nama_ruang" :value="$ruang->nama_ruang"/>
                    <x-textarea label="keterangan" name="keterangan" :value="$ruang->keterangan"/>
                </div>
                <div class="card-footer">
                    <x-btn-update />
                </div>
            </form>
        </div>
    </div>
    </x-content>
@endsection
