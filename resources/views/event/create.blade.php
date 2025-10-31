@extends('dashboard')

@section('content')
 <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">EVENTS</h1>
                </div><div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('event') }}">EVENTS</a>
                        </li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div></div></div></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="header-card">
                                <h3>Form Tambah Event</h3>
                            </div>

                            <form action="{{ route('event.store') }}" method="POST">
                                @csrf
                                
                                <div class="main-card">
                                    <label for="event_name">Nama Event</label>
                                    <input type="text" name="event_name" placeholder="Masukkan Nama Event" required/> <br/>
                                    <label for="location">Lokasi</label>
                                    <input type="text" name="location" placeholder="Masukkan Lokasi Event" required/> <br/>
                                    <label for="quota">Jumlah Kuota</label>
                                    <input type="number" name="quota" placeholder="Masukkan Jumlah Kuota"  required/> <br/>
    
                                    <button type="submit" >Simpan</button>
                                </div>
                            </form>
                            
                        </div></div></div></div></div></div>
@endsection