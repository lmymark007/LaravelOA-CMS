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
                    <form class="form-horizontal" action="base_forms_elements.html" method="post" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-xs-12">Static</label>
                            <div class="col-sm-9">
                                <div class="form-control-static">Username</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-text-input">Text</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-text-input" name="example-text-input" placeholder="Text.." />
                                <div class="help-block">Further info about this input</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-email-input">Email</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="email" id="example-email-input" name="example-email-input" placeholder="email..." />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-password-input">Password</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="password" id="example-password-input" name="example-password-input" placeholder="Password.." />
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-xs-12" for="example-text-input-success">Success State</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-text-input-success" name="example-text-input-success" placeholder="Success State.." />
                            </div>
                        </div>
                        <div class="form-group has-info">
                            <label class="col-xs-12" for="example-text-input-info">Info State</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-text-input-info" name="example-text-input-info" placeholder="Info State.." />
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <label class="col-xs-12" for="example-text-input-warning">Warning State</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-text-input-warning" name="example-text-input-warning" placeholder="Warning State.." />
                            </div>
                        </div>
                        <div class="form-group has-error">
                            <label class="col-xs-12" for="example-text-input-error">Error State</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-text-input-error" name="example-text-input-error" placeholder="Error State.." />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-disabled-input">Disabled</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-disabled-input" name="example-disabled-input" placeholder="Disabled.." disabled />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-textarea-input">Textarea</label>
                            <div class="col-xs-12">
                                <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="Content.."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-select">Select</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="example-select" name="example-select" size="1">
                <option value="0">Please select</option>
                <option value="1">Option #1</option>
                <option value="2">Option #2</option>
                <option value="3">Option #3</option>
            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-multiple-select">Multiple Select</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="example-multiple-select" name="example-multiple-select" size="5" multiple>
                <option value="1">Option #1</option>
                <option value="2">Option #2</option>
                <option value="3">Option #3</option>
                <option value="4">Option #4</option>
                <option value="5">Option #5</option>
                <option value="6">Option #6</option>
                <option value="7">Option #7</option>
                <option value="8">Option #8</option>
                <option value="9">Option #9</option>
                <option value="10">Option #10</option>
            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">Radios</label>
                            <div class="col-xs-12">
                                <div class="radio">
                                    <label for="example-radio1">
                    <input type="radio" id="example-radio1" name="example-radios" value="option1" /> Option 1
                </label>
                                </div>
                                <div class="radio">
                                    <label for="example-radio2">
                    <input type="radio" id="example-radio2" name="example-radios" value="option2" /> Option 2
                </label>
                                </div>
                                <div class="radio">
                                    <label for="example-radio3">
                    <input type="radio" id="example-radio3" name="example-radios" value="option3" /> Option 3
                </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">Inline Radios</label>
                            <div class="col-xs-12">
                                <label class="radio-inline" for="example-inline-radio1">
                <input type="radio" id="example-inline-radio1" name="example-inline-radios" value="option1" /> One
            </label>
                                <label class="radio-inline" for="example-inline-radio2">
                <input type="radio" id="example-inline-radio2" name="example-inline-radios" value="option2" /> Two
            </label>
                                <label class="radio-inline" for="example-inline-radio3">
                <input type="radio" id="example-inline-radio3" name="example-inline-radios" value="option3" /> Three
            </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">Checkboxes</label>
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label for="example-checkbox1">
                    <input type="checkbox" id="example-checkbox1" name="example-checkbox1" value="option1" /> Option 1
                </label>
                                </div>
                                <div class="checkbox">
                                    <label for="example-checkbox2">
                    <input type="checkbox" id="example-checkbox2" name="example-checkbox2" value="option2" /> Option 2
                </label>
                                </div>
                                <div class="checkbox">
                                    <label for="example-checkbox3">
                    <input type="checkbox" id="example-checkbox3" name="example-checkbox3" value="option3" /> Option 3
                </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">Inline Checkboxes</label>
                            <div class="col-xs-12">
                                <label class="checkbox-inline" for="example-inline-checkbox1">
                <input type="checkbox" id="example-inline-checkbox1" name="example-inline-checkbox1" value="option1" /> One
            </label>
                                <label class="checkbox-inline" for="example-inline-checkbox2">
                <input type="checkbox" id="example-inline-checkbox2" name="example-inline-checkbox2" value="option2" /> Two
            </label>
                                <label class="checkbox-inline" for="example-inline-checkbox3">
                <input type="checkbox" id="example-inline-checkbox3" name="example-inline-checkbox3" value="option3" /> Three
            </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-file-input">File Input</label>
                            <div class="col-xs-12">
                                <input type="file" id="example-file-input" name="example-file-input">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-file-multiple-input">Multiple File Input</label>
                            <div class="col-xs-12">
                                <input type="file" id="example-file-multiple-input" name="example-file-multiple-input" multiple />
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-xs-12">
                                <button class="btn btn-app" type="submit">Submit</button>
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
