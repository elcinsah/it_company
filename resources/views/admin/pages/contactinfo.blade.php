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
                                    <th>adres</th>
                                    <th>email_title</th>
                                    <th>pone_title</th>


                                    <th>islemler</th>

                                </tr>

                                </thead>
                                <tbody>
                                @if($info !=null)
                                    @foreach($info as $infos)
                                        <tr>
                                            <td>{{$infos->address}}</td>
                                            <td>{{$infos->email_title}}</td>
                                            <td>{{$infos->phone_title}}</td>
                                            <td>
                                                <a href="{{route('contact.info.update',$infos->id)}}" title="deyis" class="btn btn-sm btn-primary"><i
                                                        class="fa fa-pen"></i></a>

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

