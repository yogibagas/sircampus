@extends('layouts.app')
@section('content')
<div class="row">
    <div class="block" style="padding-bottom:50px;">
        <div class="block-title">
            <h2>Schedule Data</h2>
        </div>
        <a href="{{route('schedule.create')}}" class=" btn btn-default" style="margin-bottom:20px;">Add New Schedule</a>
        @if(Session::has('success'))
        <div class="alert        alert-danger">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="table-responsive">

            <table id="" class="table table-vcenter table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Class</th>
                        <th> Day</th>
                        <th>Course</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->classes->name}}</td>
                        <td>{{'Every '.Helper::formatDate('l',$d->firstDate)}}<br> {{'Start from '.Helper::formatDate('d - F - y',$d->firstDate)}}</td>
                        <td>{{$d->lecturers->courses->name}}</td>
                        <td>
                            <div class="btn-group btn-group-xs">
                                <a href="{{ route('schedule.edit',$d->id)}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('schedule.delete',$d->id)}}" data-toggle="tooltip" title="" class="btn btn-danger" 
                                   data-original-title="Delete">
                                    <i class="fa fa-times"></i>
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
                url: "schedule/" + id,
                method: "GET",
                beforeSend: function (xhr) {
                    $(".fetched-data").html("<div class='fa fa-spin fa-spinner'></div>");
                },
                success: function (data) {
                    var html = '<table class="table table-striped">' +
                            '<tr>' +
                            '<td width="25%">Class Name</td>' +
                            '<td width="5%">:</td>' +
                            '<td><a href="#">' + data.classes.name + '</a></td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td>Course</td>' +
                            '<td>:</td>' +
                            '<td>' + data.lecturers.courses.name + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td>Lecturer Name</td>' +
                            '<td>:</td>' +
                            '<td>' + data.lecturers.name + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td>Time</td>' +
                            '<td>:</td>' +
                            '<td>' + data.timeStart + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td>Duration</td>' +
                            '<td>:</td>' +
                            '<td><strong>' + data.duration + ' Mins</strong></td>' +
                            '</tr>' +
                            '</table>';
                    $(".fetched-data").html(html);
                }
            });
        });
    });
</script>
@endpush
@endsection