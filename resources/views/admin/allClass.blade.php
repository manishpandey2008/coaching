@extends('../common')
@section('main_page')
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul>
                        <li>Class</li>
                        <li>All Classes</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Class Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Classes</h3>
                            </div>
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-xl-6 col-lg-6 col-12 form-group mx-auto">
                                    <input type="text" name="" placeholder="Search........." class="form-control">
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Class Name</th>
                                        <th>Subject Name</th>
                                        <th>Class Time</th>
                                        <th>Class Location</th>
                                        <th>Class Working Time</th>
                                        <th>Class Working Days</th>
                                        <th>Starting Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($class_list as $cl)
                                    <tr>
                                        <td>{{$cl['class_name']}}</td>
                                        <td>{{$cl['subject_name']}}</td>
                                        <td>{{$cl['class_time']}}</td>
                                        <td>{{$cl['class_location']}}</td>
                                        <td>{{$cl['class_working_time']}}</td>
                                        <td>
                                            {{$cl['class_working_days']}}
                                            
                                        </td>
                                        <td>{{$cl['created_at']}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                              <button type="button" class="btn btn-secondary" value="{{$cl['class_id']}}">Edit</button>
                                              <button type="button" class="btn btn-secondary" value="{{$cl['class_id']}}">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Class Table Area End Here -->
 @endsection