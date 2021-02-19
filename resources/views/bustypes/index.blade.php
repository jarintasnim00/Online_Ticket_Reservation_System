@extends('layouts.app')
@section('title')
    Bustypes 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Bustypes</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('bustypes.create')}}" class="btn btn-primary form-btn">Bustype <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('bustypes.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

