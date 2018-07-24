@extends('admin.layout.index')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_obj as $item)
                                <tr class="odd gradeX">
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td class="center">{{$item->description}} vnd</td>
                                    <td><img src="{{$item->images}}" alt="" style="width: 100px; border-radius: 10%"></td>
                                    <td class="center">
                                        <a href="/admin/category/{{$item -> id}}/edit">Edit</a>&nbsp;&nbsp;
                                        <span class="btn-delete" id="{{$item-> id}}">Delete</span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <script>

        var listDeleteButton = document.getElementsByClassName('btn-delete');
        for (var i = 0; i < listDeleteButton.length; i++) {
            listDeleteButton[i].onclick = function () {
                if(confirm('Are you sure ?')){
                    var params = '_token={{csrf_token()}}';
                    var currentId = this.id;
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("DELETE", "/admin/bakery/" + currentId, true);
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            alert('Delete success!');
                            window.location.reload();
                        }
                    };
                    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhttp.send(params);
                }
            }
        }
    </script>
@endsection
@section('script')
    <script src="{{asset('layout/vendor/datatables/js/jquery.dataTables.js')}}"></script>
    <script !src="{{asset('layout/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('layout/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('layout/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
@endsection