@extends('admin.layouts.app')

@section('content')

<!-- Page Content -->
<div class="container-fluid p-y-md">
    <div class="row">
        <div class="col-md-12">
            <!-- Default Elements -->
            <div class="card">
                <div class="card-header">
                    <h6>系统功能/系统设置</h6>
                </div>
                <div class="card-block">
                    <form class="form-horizontal" action="/admin/setting" method="post" enctype="multipart/form-data" onsubmit="">
                        <div class="form-group">
                            <label class="col-xs-12" for="example-text-input">网站标题</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-text-input" name="example-text-input" placeholder="" />
                                <div class="help-block">网站标题</div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-xs-12">
                                <button class="btn btn-app" type="submit">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- .card-block -->
            </div>
            <!-- .card -->
            <!-- End Default Elements -->
        </div>

    </div>
    <!-- .row -->
    <!-- End CSS Checkboxes -->
</div>
<!-- End Page Content -->
@endsection
