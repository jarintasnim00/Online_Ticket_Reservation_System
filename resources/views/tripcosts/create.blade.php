@extends('layouts.app')
@section('title')
    Create Tripcost 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">Add Tripcost</h3>
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('tripcosts.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body ">
                                {!! Form::open(['route' => 'tripcosts.store']) !!}
                                    <div class="row">
                                        @include('tripcosts.fields')
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

   <!--  <script type="text/javascript">
    function display() {
        var date = $('#bname').val();
       // alert(date)
        $.ajax({
            url: "/getdata1",
            type: 'GET',
            // data: {
            //     date: date,
            // },
            success: function (data) {
                // alert(data);  data:'_token = php echo csrf_token() ?>',
                $('#loaddata').html(data);
            }, error: function () {
                alert('error');
            }
        });
    }
</script>
 -->