@extends('layouts.app')
@section('title')
    Businfos 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Businfos</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('businfos.create')}}" class="btn btn-primary form-btn">Businfo <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('businfos.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

