@extends('front.master')

@section('title')
    Sholla School & College Admission | Admission
    @endsection

@section('content')
    <div class="container">
        <br/>
        <div class="well">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="schoo-addmission-form">
                        <form class="" action="" method="POST">
                            <h3>Personal Information</h3><hr>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-right-6">
                                    <div class="form-group">
                                        <label class="control-label">Applicant Name <sup>*</sup> </label>
                                        <input type="text" name="applicant_name" class="form-control" placeholder="Applicant Name" required>
                                    </div>
                                </div>
                            </div><!--end rwo-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Father's Name<sup>*</sup></label>
                                        <input type="text" name="father_name" class="form-control" placeholder="Father's Name" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Mother's Name <sup>*</sup></label>
                                        <input type="text" name="mother_name" class="form-control" placeholder="Mother's Name" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Father's NID</label>
                                        <input type="number" name="father_nid" class="form-control" placeholder="Father's NID">
                                    </div>
                                </div>

                            </div><!--end row-->
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Mother's NID</label>
                                        <input type="number" min="0" name="mother_nid" class="form-control" placeholder="Mother's NID">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Guardian Mobile <sup>*</sup></label>
                                        <input type="number" min="0" name="guardian_mobile" placeholder="Contact Mobile Number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">SMS Number<sup>*</sup></label>
                                        <input type="number" min="0" name="guardian_mobile" class="form-control" placeholder="Get SMS By Mobile">
                                    </div>
                                </div>
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Gender <sup>*</sup></label>
                                        <select class="form-control" name="gender" required>
                                            <option></option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Date Of  Birth <sup>*</sup></label>
                                        <input type="date" name="date_of_birth" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Birth Registration No <sup>*</sup></label>
                                        <input type="number" min="0" name="birth_reg_number" class="form-control" placeholder="Birth Registration No" required>
                                    </div>
                                </div>
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Religion <sup>*</sup></label>
                                        <select class="form-control" name="religion" required>
                                            <option></option>
                                            <option value="islam">Islam</option>
                                            <option value="hinduism">Hinduism</option>
                                            <option value="buddhist">Buddhist</option>
                                            <option value="christian">Christian</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Age</label>
                                        <input type="number" name="age" class="form-control" min="0" required placeholder="Applicant Age" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Village <sup>*</sup></label>
                                        <input type="text" name="village" class="form-control" required placeholder="Your Village Name">
                                    </div>
                                </div>
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Thana/Upajila <sup>*</sup></label>
                                        <input type="text" name="thana" class="form-control" required placeholder="Your Upajila">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">District <sup>*</sup></label>
                                        <input type="text" name="district" class="form-control" required placeholder="Your Home District">
                                    </div>
                                </div>
                            </div>

                            <h3>Academi Information</h3><hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Previous School Name   <sup>*</sup></label>
                                        <input type="text" name="previous_school" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Previous Class Name  <sup>*</sup></label>
                                        <input type="text" name="previous_class" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Previous Class Result <sup>*</sup></label>
                                        <input type="text" name="previous_class_result" class="form-control">
                                    </div>
                                </div>
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Class (Where You want to Admission) <sup>*</sup></label>
                                        <select class="form-control" name="admitted_class" required>
                                            <option></option>
                                            <option value="sex">Six</option>
                                            <option value="seven">Seven</option>
                                            <option value="eight">Eight</option>
                                            <option value="nine">Nine</option>
                                            <option value="ten">Ten</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Section (Where You want to Admission) <sup>*</sup></label>
                                        <select class="form-control" name="admitted_section" required>
                                            <option></option>
                                            <optgroup label="For Class six"></optgroup>
                                            <option value="shapla">Shapla</option>
                                            <option value="polash">Polash</option>
                                            <option value="shimol">Shimol</option>
                                            <option value="golap">Golap</option>
                                            <optgroup label="For Class Seven"></optgroup>
                                            <option value="padma">Padma</option>
                                            <option value="meghna">Meghna</option>
                                            <option value="jamuna">jumona</option>
                                            <optgroup label="For Class Eight"></optgroup>
                                            <option value="balaka">Balaka</option>
                                            <option value="doyel">Doyel</option>
                                            <optgroup label="For Class Nine"></optgroup>
                                            <option value="niharica">Niharica</option>
                                            <option value="ulka">Ulka</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Group (If Class Nine / Ten)</label>
                                        <select class="form-control" name="admitted_group">
                                            <option></option>
                                            <option value="science">Science</option>
                                            <option value="busines_study">Business Study</option>
                                            <option value="history">History</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Session (If Class Nine / Ten)</label>
                                        <input type="text" name="session" class="form-control" value="<?php echo date('Y');?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Give Your Image</label>
                                        <input type="file" name="applicant_image" required="" class="form-control" accept="image/*">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">&nbsp;</label>
                                        <input type="submit" name="admission" required class="btn btn-warning btn-block" value="Submit Application">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--end schoo-addmission-form-->
                </div>
            </div>
        </div><!--end well-->
    </div><!--end container-->
    @endsection