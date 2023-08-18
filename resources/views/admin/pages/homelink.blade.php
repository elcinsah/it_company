
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



                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>


                                <tr>
                                    <th>cashback</th>
                                    <th> gift</th>
                                    <th>islemler</th>

                                </tr>

                                </thead>
                                <tbody>
                                @if( $home_link!=null)
                                    @foreach( $home_link as $home_links)



                                        <tr>
                                            <td>{{$home_links-> gift}}</td>

                                            <td>{{$home_links->cashback}}</td>




                                            <td>
                                                <a href="{{route('home-link.update',$home_links->id)}}" title="deyis"
                                                   class="btn btn-sm btn-primary"><i
                                                        class="fa fa-pen"></i></a>

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

