@extends('layouts.dashboard')

@section('title', 'Greeting')

@section('style')
<style>

</style>
@endsection

@section('content-header')
<div class="content-header-left col-md-6  breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block text-capitalize">TISAM</h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    Dashboard
                </li>
                <li class="breadcrumb-item active">
                    TISAM
                </li>
            </ol>
        </div>
    </div>
</div>

@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-content collapse show">
        <div class="card-body">
            <table class="table table-responsive datatable" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Dari</th>
                        <th>Untuk</th>
                        <th>Isi Pesan</th>
                        <th>Status</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($greetings as $item)
                    <tr>
                        <td>{{ $no_greetings++ }}</td>
                        <td>{{ $item->from }}</td>
                        <td>{{ $item->to }}</td>
                        @if (strlen($item->body) > 54)
                            <td>{{ substr($item->body, 0, 54) }} ...</td>
                        @else
                            <td>{{ $item->body }}</td>
                        @endif
                        <td>
                            @if ($item->confirmed == true)
                                <p style="color: green;">Aktif</p>
                            @endif
                            @if ($item->confirmed == false)
                                <p style="color: red;">Nonaktif</p>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group text-center">
                                <button type="button" class="btn btn-info round dropdown-toggle" data-toggle="dropdown">
                                    <i class="la la-gear"></i>
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                    @if ($item->confirmed == false)
                                        <button class="dropdown-item btn btn-outline-info editGreetingButton" value="{{ $item->id }}">
                                            <i class="la la-check"></i> Konfirmasi
                                        </button>
                                    @endif
                                    <button class="dropdown-item btn btn-outline-danger hapusGreetingButton" value="{{ $item->id }}">
                                        <i class="la la-trash"></i> Hapus
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- MODAL EDIT -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="" method="POST" id="editGreetingForm">

                @csrf
                @method('PUT')
                <!-- Modal Header -->
                <div class="modal-header bg-info">
                    <h4 class="modal-title text-white">Apakah anda yakin ingin mengaktifkan data ini ?</h4>
                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <h5>
                            <span id="editTo"></span>
                        </h5>
                        <div class="py-2">
                            <h3 class="text-center" id="editBody"></h3>
                        </div>
                        <h5 class="text-right">
                            <span id="editFrom"></span>
                        </h5>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" name="id" class="btn round btn-success" style="color:white;">
                        <i class="la la-check"></i>
                    </button>
                    <button type="button" class="btn round btn-danger" data-dismiss="modal" style="color:white;">
                        <i class="la la-close"></i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- End Modals -->


<!-- MODAL DELETE -->
<div class="modal fade" id="delete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="" method="POST" id="deleteGreetingForm">

                @csrf
                @method('DELETE')
                <!-- Modal Header -->
                <div class="modal-header bg-info">
                    <h4 class="modal-title text-white">Apakah anda yakin ingin menghapus data ini ?</h4>
                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <h5>
                            <span id="deleteTo"></span>
                        </h5>
                        <div class="py-2">
                            <h3 class="text-center" id="deleteBody"></h3>
                        </div>
                        <h5 class="text-right">
                            <span id="deleteFrom"></span>
                        </h5>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" name="id" id="deleteId" class="btn round btn-success" style="color:white;">
                        <i class="la la-check"></i>
                    </button>
                    <button type="button" class="btn round btn-danger" data-dismiss="modal" style="color:white;">
                        <i class="la la-close"></i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- End Modals -->

@endsection

@section('script')

<script>

    $(".hapusGreetingButton").on("click", function(){
        var id = $(this).val();
        $("#deleteId").val(id);
        $("#deleteFrom").empty();
        $("#deleteTo").empty();
        $.ajax({
            method: "GET",
            url: "/dashboard/greeting/" + id + "/edit"
        }).done(function(response){
            $("#deleteGreetingForm").attr("action", "/dashboard/greeting/" + id);
            $("#deleteFrom").text("-" + response.from);
            $("#deleteTo").text("To : " + response.to);
            $("#deleteBody").text("\"" + response.body + "\"");
            $("#delete").modal();
        });
    });

    $(".editGreetingButton").on("click", function(){
        var id = $(this).val();
        $("#editId").val(id);
        $("#editFrom").empty();
        $("#editTo").empty();
        $.ajax({
            method: "GET",
            url: "/dashboard/greeting/" + id + "/edit"
        }).done(function(response){
            $("#editGreetingForm").attr("action", "/dashboard/greeting/" + id);
            $("#editFrom").append("-" + response.from);
            $("#editTo").append("To : " + response.to);
            $("#editBody").text("\"" + response.body + "\"");
            $("#edit").modal();
        });
    });
</script>

@endsection
