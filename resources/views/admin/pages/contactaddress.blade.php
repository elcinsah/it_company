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

                    @if( $contactaddress!=null)
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">melumat elave et <span>
                                      <a href="{{route('contact.address.add')}}"><button type="button"
                                                         class="btn btn-primary">Add-Contact-Email-Phone</button></a>
                                </span></h3>
                        </div>


                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>

                                <tr>
                                    <th>status</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>islemler</th>

                                </tr>

                                </thead>
                                <tbody>

                                    @foreach( $contactaddress as $adres)

                                        <tr>


                                            <td>
                                                {{$adres->status==1?"active":"passive"}}
                                            </td>
                                            <td>{{$adres->email}}</td>

                                            <td>{{$adres->phone}}</td>


                                            <td>
                                                <a href="{{route('contact.address.update',$adres->id)}}" title="deyis"
                                                   class="btn btn-sm btn-primary"><i
                                                        class="fa fa-pen"></i></a>
                                                <a href="{{route('contact.address.delete',$adres->id)}}" title="sil"
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

