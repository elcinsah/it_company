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
                                      <a href="{{route('home.add')}}"><button type="button"
                                                                                   class="btn btn-primary">Add-home</button></a>
                                </span></h3>
                        </div>


                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>

                                <tr>

                                    <th>title</th>
                                    <th>status</th>


                                </tr>

                                </thead>
                                <tbody>
                                @if( $homes !=null)
                                    @foreach( $homes as $home)



                                        <tr>


                                            <td>{{$home->title}}</td>

                                            <td>{{$home->status===0?"pasive":"active"}}</td>




                                            <td>
                                                <a href="{{route('home.update',$home->id)}}" title="deyis"
                                                   class="btn btn-sm btn-primary"><i
                                                        class="fa fa-pen"></i></a>
                                                <a href="{{route('home.delete',$home->id)}}" title="sil"
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

