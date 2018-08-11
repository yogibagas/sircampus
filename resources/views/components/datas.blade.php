
<div class="col-sm-6 col-lg-4">
    <!-- Widget -->
    <a href="page_ready_article.html" class="widget widget-hover-effect1">
        <div class="widget-simple">
            <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                <i class="fa fa-file-text"></i>
            </div>
            <h3 class="widget-content text-right animation-pullDown">
                {{$mhs['total']}} <strong>Data</strong><br>
                <small>Mahasiswa</small>
            </h3>
        </div>
    </a>
    <!-- END Widget -->
</div>
<div class="col-sm-6 col-lg-4">
    <!-- Widget -->
    <a href="page_comp_charts.html" class="widget widget-hover-effect1">
        <div class="widget-simple">
            <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                <i class="gi gi-calendar"></i>
            </div>
            <h3 class="widget-content text-right animation-pullDown">
                {{$mhs['thisYear']}}<strong> Data</strong><br>
                <small>Mahasiswa {{date('Y')}}</small>
            </h3>
        </div>
    </a>
    <!-- END Widget -->
</div>
<div class="col-sm-6 col-lg-4">
    <!-- Widget -->
    <a href="page_ready_inbox.html" class="widget widget-hover-effect1">
        <div class="widget-simple">
            <div class="widget-icon pull-left themed-background-fire animation-fadeIn">
                <i class="gi gi-kettle"></i>
            </div>
            <h3 class="widget-content text-right animation-pullDown">
                {{$mhs['admin']}} <strong>Account</strong>
                <small>Administrator</small>
            </h3>
        </div>
    </a>
    <!-- END Widget -->
</div>