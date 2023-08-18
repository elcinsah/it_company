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
                            @if( $about !=null)
                            <h3 class="card-title">melumat elave et <span>
                                      <a href="{{route('about.add')}}"><button type="button"
                                                                                   class="btn btn-primary">Add-About</button></a>
                                </span></h3>
                        </div>


                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>

                                <tr>
                                    <th>foto</th>
                                    <th>title</th>
                                    <th>status</th>
                                    <th>islemler</th>

                                </tr>

                                </thead>
                                <tbody>

                                    @foreach( $about as $abouts)



                                        <tr>


                                            <td>
                                                <img src="{{$abouts->image}}" width="200">
                                            </td>
                                            <td>{{$abouts->title}}</td>

                                            <td>{{$abouts->status===1?"active":"passive"}}</td>




                                            <td>
                                                <a href="{{route('about.update',$abouts->id)}}" title="deyis"
                                                   class="btn btn-sm btn-primary"><i
                                                        class="fa fa-pen"></i></a>
                                                <a href="{{route('about.delete',$abouts->id)}}" title="sil"
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

