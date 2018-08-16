@extends('layouts.app')
@section('content')
<div class="row">
    <div class="block">
        <div class="block-title">
            <h2>Students Data</h2>
        </div>

        <a href="{{route('student.create')}}" class=" btn btn-default" style="margin-bottom:20px;">Create new student</a>

        @if(Session::has('success'))
        <div class="alert alert-danger">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Date Of Birth</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Generation</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->nim}}</td>
                        <td>{{ucwords($d->name)}}</td>
                        <td>{{Helper::formatDate('d F Y',$d->dob)}}</td>
                        <td>{{$d->genderFake}}</td>
                        <td>{{$d->address}}</td>
                        <td>{{$d->phone}}</td>
                        <td>{{Helper::formatDate('Y',$d->created_at)}}</td>
                        <td>{{ $d->fakeStatus }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="{{ route('student.edit',$d->id)}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('student.delete',$d->id)}}" data-toggle="tooltip" title="" class="btn btn-{{$d->status == 1?"danger":"info"}}" 
                                   data-original-title="{{ $d->status == 1 ? "Deactive This Mahasiswa" : "Activated This Mahasiswa"}}">
                                    <i class="{{ $d->status == 1 ? 'fa fa-times' : 'fa fa-check' }}"></i>
                                </a>
                                <a href="#" data-toggle="modal" data-target="#myModal"
                                   class="btn btn-primary" id="{{$d->id}}}" data-id="{{$d->id}}">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Detail Data</h4>
            </div>
            <div class="modal-body">
                <div class="fetched-data">
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(function () {
        $("#myModal").on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).data('id');
            $.ajax({
                url: "student/" + id,
                method: "GET",
                beforeSend: function (xhr) {
                    $(".fetched-data").html("<div class='fa fa-spin fa-spinner'></div>");
                },
                success: function (data) {
                    var html = '<table class="table table-striped">' +
                            '<tr>' +
                            '<td width="10%">NIM</td>' +
                            '<td width="5%">:</td>' +
                            '<td>' + data.nim + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td>Name</td>' +
                            '<td>:</td>' +
                            '<td>' + data.name + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td>Phone</td>' +
                            '<td>:</td>' +
                            '<td>' + data.phone + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td>Class</td>' +
                            '<td>:</td>' +
                            '<td><strong><a href="{{url("class")}}/'+data.klas.id+'/edit">' + data.klas.name + '</a></strong></td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td>Address</td>' +
                            ' <td>:</td>' +
                            '<td>' + data.address + '</td>' +
                            ' </tr>' +
                            '</table>';
                    $(".fetched-data").html(html);
                }
            });
        });
    });
</script>
@endpush
@endsection