@extends('layouts.app')
@section('title')
    Tripcosts 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Trip cost</h1>

            <div class="section-header-breadcrumb">
                <a href="{{ route('tripcosts.create')}}" class="btn btn-primary form-btn">Tripcost <i class="fas fa-plus"></i></a>
            </div>
              <div class="no-print"   style="color: #ffffff;float: right;">

        <a onclick="printDiv('printableArea')" class="btn btn-danger">PDF</a>
    </div>
        </div>

    <div class="print section-body" id="printableArea">
       <div class="card">
            <div class="card-body">
                @include('tripcosts.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

