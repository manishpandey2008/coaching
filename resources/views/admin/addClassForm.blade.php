@extends('../common')
@section('main_page')
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>New Class</h3>
                    
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Book Area Start Here -->
                <div class="card height-auto" >
                    <div class="card-body" style="background-color: #abcdef">
                        <div class="heading-layout1">
                            <div class="item-title ">
                                <h3 class="text-center">Add New Class</h3>
                            </div>
                        </div>
                        <form class="new-added-form" method="post" action="{{route('admin-newClassAdd',['userName'=>$user['user_name']])}}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Class Name *</label>
                                    <input type="text" placeholder="Enter Class Name" class="form-control" pattern="[a-zA-z\s]*" maxlength="30" type="" name="clsName" required="">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Class Time *</label>
                                    <input type="time" placeholder="Enter Class Time" class="form-control" pattern="[0-9]{,10}" required="" name="clsTime">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Class Location *</label>
                                    <select class="form-control" required="" name="clsLocation">
                                        <option value="">Please Select One *</option>
                                        <option value="dhobha">Dhobha</option>
                                        <option value="ara">Ara</option>
                                    </select>
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Subject Name *</label>
                                    <select class="form-control" required="" name="subName">
                                        <option value="">Please Select One *</option>
                                        <option value="math">Math</option>
                                        <option value="reasoning">Reasoning</option>
                                        <option value="all">All</option>
                                    </select>
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Class Working Time (In Min)*</label>
                                    <input type="number" placeholder="Enter Working Time" class="form-control" pattern="[0-9]{,10}" name="workingTime">
                                </div>
                                <div class="col-12 form-group">
                                    <label>Class Working Days *</label>
                                    <input type="checkbox" name="clsWorkDay[]" value="all" style="font-size: 20px" id="allDays"> All Days
                                    <input type="checkbox" name="clsWorkDay[]" value="Sunday" class="day"> Sunday
                                    <input type="checkbox" name="clsWorkDay[]" value="Monday" class="day"> Monday
                                    <input type="checkbox" name="clsWorkDay[]" value="Tuesday" class="day"> Tuesday
                                    <input type="checkbox" name="clsWorkDay[]" value="Wednesday" class="day"> Wednesday
                                    <input type="checkbox" name="clsWorkDay[]" value="Thursday" class="day"> Thursday
                                    <input type="checkbox" name="clsWorkDay[]" value="Friday" class="day"> Friday
                                    <input type="checkbox" name="clsWorkDay[]" value="Saturday" class="day"> Saturday

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
@section('script_section')
    <script type="text/javascript">
        $(document).ready(function(){
           $(document).on('change', '#allDays', function() {
                if(this.checked) {
                    $('.day').attr('checked','checked');
                 
                }else{
                    $('.day').attr('checked','none');
                    $('.day').removeAttr('checked');
                }
            });
        });
    </script>
@endsection