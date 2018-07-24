@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Create Bakery...</h2>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-6" style="margin-left: 230px">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add Bakery
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" method="post" action="/admin/category">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" name="description">
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input class="form-control" name="images">
                                    </div>
                                    <button type="submit" class="btn btn-default">Save</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
@endsection