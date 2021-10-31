@extends('admin.main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">


                        <!-- <table class="table"> -->
                        <thead>
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th>Tin tức</th>
                                <th>Mô tả</th>
                                <th>Ngày cập nhật</th>
                                <th style="width: 150px;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            {!! \App\Helpers\Helper::category($categories) !!}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
</script>
@endsection
