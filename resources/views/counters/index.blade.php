@extends('layouts.app')
@section('title')
    Counters 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Counters</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('counters.create')}}" class="btn btn-primary form-btn">Counter <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('counters.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

