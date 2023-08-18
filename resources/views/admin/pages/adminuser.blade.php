@extends('admin.backlayout.backlayout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>

                    </div>


                    <div class="card">
                        <div class="card-header">
                            @if( $admin_user !=null)
                                <h3 class="card-title">melumat elave et <span>
                                      <a href="{{route('admin.add.users')}}"><button type="button"
                                                                               class="btn btn-primary">Add-Admin</button></a>
                                </span></h3>
                        </div>


                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>

                                <tr>
                                    <th>name</th>
                                    <th>email</th>

                                    <th>islemler</th>

                                </tr>

                                </thead>
                                <tbody>

                                @foreach( $admin_user as $admins)



                                    <tr>



                                        <td>{{$admins->name}}</td>
                                        <td>{{$admins->email}}</td>






                                        <td>
                                            <a href="{{route('admin-user.update',$admins->id)}}" title="deyis"
                                               class="btn btn-sm btn-primary"><i
                                                    class="fa fa-pen"></i></a>
                                            <a href="{{route('admin-user.delete',$admins->id)}}" title="sil"
                                               class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                        </td>


                                    </tr>
                                @endforeach

                                @endif

                                </tbody>


                            </table>
                            <br>

                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection

