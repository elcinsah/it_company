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
                                    <th>Imail</th>
                                    <th>name</th>
                                    <th>msc</th>
                                    <th>oparation</th>


                                </tr>

                                </thead>
                                <tbody>

                                @if($users!=null)
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->message}}</td>
                                            <td>
                                                <a onclick="deldata({{$user->id}})" title="sil"
                                                   class="btn btn-sm btn-danger"><i
                                                        class="fa fa-times"></i></a>

                                            </td>


                                        </tr>
                                    @endforeach
                                @endif

                                </tbody>


                            </table>
                            <br>
                            {{ $users->links() }}
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

        <script>

            function deldata(id) {
                var idi, r, d;
                idi = id;
                r = confirm('silmeye eminsiniz?');
                if (r == true) {
                    $.ajax({
                        url: "{{route('del.user.mail')}}",
                        type: "GET",
                        data: {
                            "idi": idi,
                        },
                        success: function (res) {
                            alert('emeliyat ugurlu seyfeni yenileyin');

                        }


                    });


                }


            }


        </script>

    </section>

@endsection

