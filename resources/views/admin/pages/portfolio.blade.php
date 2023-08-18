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
                                      <a href="{{route('portfolio.add')}}"><button type="button"
                                                                              class="btn btn-primary">Add-Portfolio</button></a>
                                </span></h3>
                        </div>


                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>

                                <tr>
                                    <th>foto</th>
                                    <th>title</th>
                                    <th>catname</th>
                                    <th>islemler</th>

                                </tr>

                                </thead>
                                <tbody>
                                @if( $portfolio !=null)
                                    @foreach( $portfolio as $port)



                                        <tr>


                                            <td>
                                                <img src="{{$port->image}}" width="200">
                                            </td>
                                            <td>{{$port->title}}</td>

                                                <td>{{$port->getProfolio->name}}</td>




                                            <td>
                                                <a href="{{route('portfolio.update',$port->id)}}" title="deyis"
                                                   class="btn btn-sm btn-primary"><i
                                                        class="fa fa-pen"></i></a>
                                                <a href="{{route('portfolio.delete',$port->id)}}" title="sil"
                                                   class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                            </td>


                                        </tr>
                                    @endforeach

                                @endif

                                </tbody>


                            </table>
                            <br>
                            {{ $portfolio->links() }}
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

