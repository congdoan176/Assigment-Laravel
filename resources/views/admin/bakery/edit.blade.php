@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Create Bakery...</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add Bakery
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" method="post" action="/admin/bakery/{{$obj->id}}">
                                    @method('PUT')
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" name="name" value="{{$obj->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="categoryId" value="{{$obj->categoryId}}">
                                            <option value="1">Bánh ngọt</option>
                                            <option value="2">Bánh mặn</option>
                                            <option value="3">Bánh trung thu</option>
                                            <option value="4">Bánh sinh nhật</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input class="form-control" name="price" value="{{$obj->price}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" name="description" value="{{$obj->description}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea class="form-control" rows="3" name="content">{{$obj->content}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="images" value="{{$obj->images}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Note</label>
                                        <input class="form-control" name="note" value="{{$obj->note}}">
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