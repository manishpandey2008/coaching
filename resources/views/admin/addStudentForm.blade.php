@extends('../common')
@section('main_page')
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>New Student</h3>
                    
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Book Area Start Here -->
                <div class="card height-auto" >
                    <div class="card-body" style="background-color: #abcdef">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Student</h3>
                            </div>
                        </div>
                        <form class="new-added-form" method="post" action="{{route('admin-addNewStudent',['userName'=>$user['user_name']])}}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Student Name *</label>
                                    <input type="text" placeholder="Enter Student Name" class="form-control" pattern="[a-zA-z\s]*" maxlength="30" type="" name="stuName">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Phone Number *</label>
                                    <input type="text" placeholder="Enter Phone Number" class="form-control" pattern="[0-9]{10}" required="" name="stuPhone">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Email ID *</label>
                                    <input type="email" placeholder="Enter Your Email" class="form-control" required="" name="stuEmail">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Aadhar No</label>
                                    <input type="text" placeholder="Enter Your Aadhar Number" class="form-control" pattern="[0-9]{12}" name="stuAadhar">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select class="form-control" required="" name="stuGender">
                                        <option value="">Please Select One *</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select class="form-control" required="" name="stuClass">
                                        <option value="">Please Select Class *</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                    </select>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Address *</label>
                                    <textarea type="text" placeholder="" class="form-control" style="height: 100px;" maxlength="100" name="stuAddress"></textarea>
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Photo</label>
                                    <input type="file" class="form-control" name="stuPhoto">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Save</button>
                                    <button type="reset" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark ">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Book Area End Here -->
 @endsection
