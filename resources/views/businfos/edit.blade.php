@extends('layouts.app')
@section('title')
    Edit Businfo 
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">Edit Businfo</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('businfos.index') }}"  class="btn btn-primary">Back</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                    {!! Form::model($businfo, ['route' => ['businfos.update', $businfo->id], 'method' => 'patch']) !!}
                                        <div class="row">
                                            @include('businfos.fields')
                                        </div>

                                    {!! Form::close() !!}
                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
@endsection
