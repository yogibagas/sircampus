@extends('layouts.appStudent')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Timeline Widget -->
        <div class="widget">
            <div class="widget-extra themed-background-dark">
                <div class="widget-options">
                </div>
                <h3 class="widget-content-light">
                    1 Week <strong>Schedules</strong>
                    <small><a href="page_ready_timeline.html"><strong>View all</strong></a></small>
                </h3>
            </div>
            <div class="widget-extra">
                <!-- Timeline Content -->
                <div class="timeline">
                    <ul class="timeline-list">
                        @foreach($data as $d)
                        <li class="active">
                            <div class="timeline-icon themed-background-fire themed-border-fire"><i class="fa fa-file-text"></i></div>
                            <div class="timeline-time"><small>{{Helper::formatDate('l',$d->firstDate)}}</small></div>
                            <div class="timeline-content">
                                <p class="push-bit"><a href="page_ready_user_profile.html"><strong>{{ $d->classes->name . ' - '. $d->lecturers->courses->name}}</strong></a></p>
                                <strong>{{Helper::getFake($d->lecturers->gender,"Mr. ","Mrs. ") . ucwords($d->lecturers->name) }}</strong> 
                            </div>
                        </li>
                        @endforeach
                       
                    </ul>
                </div>
                <!-- END Timeline Content -->
            </div>
        </div>
        <!-- END Timeline Widget -->
    </div>

</div>
<!-- END Widgets Row -->
@endsection