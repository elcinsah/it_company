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
                            <h3 class="card-title">melumat elave et <span>
                                      <a href="{{route('team.add')}}"><button type="button"
                                                                              class="btn btn-primary">Add-Team</button></a>
                                </span></h3>
                        </div>


                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>

                                <tr>
                                    <th>foto</th>
                                    <th>name</th>
                                    <th>status</th>
                                    <th>islemler</th>

                                </tr>

                                </thead>
                                <tbody>
                                @if($teams !=null)
                                    @foreach($teams as $team)

                                        <tr>


                                            <td>
                                                <img src="{{$team->image}}" width="200">
                                            </td>
                                            <td>{{$team->name}}</td>
                                            <td>{{$team->status}}</td>


                                            <td>
                                                <a href="{{route('team.update',$team->id)}}" title="deyis"
                                                   class="btn btn-sm btn-primary"><i
                                                        class="fa fa-pen"></i></a>
                                                <a href="{{route('team.delate',$team->id)}}" title="sil"
                                                   class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                            </td>


                                        </tr>
                                    @endforeach

                                @endif

                                </tbody>


                            </table>
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

