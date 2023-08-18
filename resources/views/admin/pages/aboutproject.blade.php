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
                            @if( $about_project !=null)

                        </div>


                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>

                                <tr>
                                    <th>project</th>
                                    <th>project_count</th>


                                </tr>

                                </thead>
                                <tbody>

                                @foreach( $about_project as $project)



                                    <tr>

                                        <td>{{$project->title}}</td>
                                        <td>{{$project->title_count}}</td>






                                        <td>
                                            <a href="{{route('about.project.update',$project->id)}}" title="deyis"
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

