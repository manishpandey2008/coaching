@extends('../common')
@section('main_page')
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul>
                        <li>Student Details</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="row">
                            <div class="item-title col-12">
                                <h3>About Me</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                @if($student_details['gender']=='male')
                                <img src="{{asset('dashboard/img/figure/boy.jpg')}}" alt="student">
                                @elseif($student_details['gender']=='female')
                                <img src="{{asset('dashboard/img/figure/student1.jpg')}}" alt="student">
                                @endif
                                 <div id="idCard">
                                    <div class="id-card-tag"></div>
                                        <div class="id-card-tag-strip"></div>
                                        <div class="id-card-hook"></div>
                                        <div class="id-card-holder">
                                            <div class="id-card">
                                                <div class="header">
                                                    <img src="{{asset('assets/img/km3.png')}}" style="border-radius: 50%">
                                                </div>
                                                <h5><strong>{{$student_details['first_name']}}<br>{{$student_details['phone_number']}}<br>{{$student_details['class_id']}}<br>{{$student_details['address']}}</strong></h5>
                                               
                                                <hr>
                                                <p>Agarsanda Behara Bhojpur Ara Bihar <strong>802156</strong><br>Ph: 6375336527 <br> E-mail: smpandey.2008@gmail.com<br>www.Kashyap Mathematics.info</p>
                                                

                                            </div>
                                        </div>
                            </div>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                    <h3 class="text-center">{{$student_details['first_name']}}</h3>
                                <div class="info-table table-responsive">
                                    <table class="table  table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium">{{$student_details['first_name']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium">{{$student_details['gender']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Joining Date:</td>
                                                <td class="font-medium text-dark-medium">{{$student_details['created_at']}}</td>
                                            </tr>
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="font-medium text-dark-medium">{{$student_details['email_id']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td class="font-medium text-dark-medium">{{$student_details['phone_number']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Class:</td>
                                                <td class="font-medium text-dark-medium">{{$student_details['class_id']}}</td>
                                            </tr>
                                            <tr>
                                                <td>User Name:</td>
                                                <td class="font-medium text-dark-medium">{{$student_details['user_name']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Pass Code:</td>
                                                <td class="font-medium text-dark-medium">{{$student_details['pass_code']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Password:</td>
                                                <td class="font-medium text-dark-medium">XXXXX  <a href="">edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>Address:</td>
                                                <td class="font-medium text-dark-medium">{{$student_details['address']}}</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
  @endsection