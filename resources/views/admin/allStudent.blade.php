@extends('../common')
@section('main_page')
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul>
                        <li>Students</li>
                        <li>All Students</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Class Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Class Students</h3>
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
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Bartch</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th>Joining Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($student_list as $sl)
                                    @if($sl['class_id'] != 'Head')
                                    <tr>
                                        <td class="text-center">
                                            @if($sl['gender']=='male')
                                            <img src="{{asset('dashboard/img/figure/student2.png')}}" alt="student">
                                            @elseif($sl['gender']=='female')
                                            <img src="{{asset('dashboard/img/figure/student3.png')}}" alt="student">
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin-studentDetails',['userName'=>$user['user_name'],'studentId'=>$sl['user_name']])}}">{{$sl['first_name']}}</a></td>
                                        <td>{{$sl['gender']}}</td>
                                        <td>{{$sl['class_id']}}</td>
                                        <td>{{$sl['phone_number']}}</td>
                                        <td>{{$sl['email_id']}}</td>
                                        <td>{{$sl['created_at']}}</td>
                                         <td>
                                        <a href="{{route('admin-studentDetails',['userName'=>$user['user_name'],'studentId'=>$sl['user_name']])}}" class="btn btn-primary">Details</a>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Class Table Area End Here -->
 @endsection