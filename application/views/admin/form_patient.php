<?php $this->load->view('admin/header'); ?>

<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span12">      		

                    <div class="widget ">

                        <div class="widget-header">
                            <i class="icon-user"></i>
                            <h3><?php echo $header; ?></h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <a class="btn btn-large" href="<?php echo base_url(); ?>index.php/admin/login/patient"><i class="icon-backward"></i> กลับสู่หน้าหลัก</a>
                            <p>

                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li  class="active">
                                        <a href="#formcontrols" data-toggle="tab"><?php echo $title; ?></a>
                                    </li>
                                    <!--<li><a href="#jscontrols" data-toggle="tab">JS Controls</a></li>-->
                                </ul>

                                <br>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="formcontrols">
                                        <?php if($this->session->flashdata('result') == 'success'){ ?>
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <strong>สำเร็จ!</strong> บันทึกข้อมูลผู้ป่วยเรียบร้อยแล้ว...
                                        </div>
                                        <?php } ?>
                                        <form id="edit-profile" class="form-horizontal" action="<?php echo base_url(); ?>index.php/admin/login/save_patient" method="POST">
                                            <fieldset>

                                                <div class="control-group">											
                                                    <label class="control-label" for="patient_number">เลขประจำตัว</label>
                                                    <div class="controls">
                                                        <input type="text" class="span4 disabled" id="patient_number" name="patient_number" placeholder="เลขประจำตัว" value="<?php echo @$edit_patient[0]['patient_number']; ?>">
                                                        <small class="help-block">***เลขประจำตัว ห้ามซ้ำกันกรุณาตรวจสอบ ก่อนการบันทึกข้อมูล</small>
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->


                                                <div class="control-group">											
                                                    <label class="control-label" for="patient_name">ชื่อ-นามสกุล</label>
                                                    <div class="controls">
                                                        <input type="text" class="span4" id="patient_name" name="patient_name" placeholder="ชื่อ-นามสกุล" value="<?php echo @$edit_patient[0]['patient_name']; ?>">
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->


                                                <div class="control-group">											
                                                    <label class="control-label" for="identification">เลขบัตรประจำตัวประชาชน</label>
                                                    <div class="controls">
                                                        <input type="text" class="span4" id="identification" name="identification" placeholder="เลขบัตรประจำตัวประชาชน" value="<?php echo @$edit_patient[0]['identification']; ?>">
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->


                                                <div class="control-group">											
                                                    <label class="control-label" for="birthday">วัน/เดือน/ปี เกิด</label>
                                                    <div class="controls">
                                                        <input type="text" class="span3" id="birthday" name="birthday" placeholder="วัน/เดือน/ปี เกิด" value="<?php echo @$edit_patient[0]['birthday']; ?>"> 
                                                        &nbsp;&nbsp;อายุ <input type="number" class="span1" id="age" name="age" placeholder="อายุ" value="<?php echo @$edit_patient[0]['age']; ?>"> ปี
                                                        &nbsp;&nbsp;กรุ๊ปเลือด 
                                                        <select name="blood_group" id="blood_group" class="span2">
                                                            <option value="A" <?php echo (@$edit_patient[0]['blood_group'] == 'A')? "selected":" " ?> >กรุ๊ป A</option>
                                                            <option value="B" <?php echo (@$edit_patient[0]['blood_group'] == 'B')? "selected":" " ?> >กรุ๊ป B</option>
                                                            <option value="AB" <?php echo (@$edit_patient[0]['blood_group'] == 'AB')? "selected":" " ?> >กรุ๊ป AB</option>
                                                            <option value="O" <?php echo (@$edit_patient[0]['blood_group'] == 'O')? "selected":" " ?> >กรุ๊ป O</option>
                                                        </select>
                                                    </div> <!-- /controls -->	
                                                    
                                                    
                                                </div> <!-- /control-group -->


                                                <br />

                                                <div class="control-group">											
                                                    <label class="control-label" for="ethnicity">เชื้อชาติ</label>
                                                    <div class="controls">
                                                        <input type="text" class="span2" id="ethnicity" name="ethnicity" placeholder="เชื้อชาติ" value="<?php echo @$edit_patient[0]['ethnicity']; ?>">
                                                        &nbsp;&nbsp;สัญชาติ <input type="text" class="span2" id="nationality" name="nationality" placeholder="สัญชาติ" value="<?php echo @$edit_patient[0]['nationality']; ?>">
                                                        &nbsp;&nbsp;ศาสนา <input type="text" class="span2" id="religion" name="religion" placeholder="ศาสนา" value="<?php echo @$edit_patient[0]['religion']; ?>">
                                                        &nbsp;&nbsp;สถานภาพ <input type="text" class="span2" id="status" name="status" placeholder="สถานภาพ" value="<?php echo @$edit_patient[0]['status']; ?>">
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->

                                                <div class="control-group">											
                                                    <label class="control-label" for="career">อาชีพ</label>
                                                    <div class="controls">
                                                        <input type="text" class="span3" id="career" name="career" placeholder="อาชีพ" value="<?php echo @$edit_patient[0]['career']; ?>">
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->

                                                <div class="control-group">											
                                                    <label class="control-label" for="medical_history_food">ประวัติการแพ้ยา/อาหาร</label>
                                                    <div class="controls">
                                                        <input type="text" class="span5" id="medical_history_food" name="medical_history_food" placeholder="ประวัติการแพ้ยา/อาหาร" value="<?php echo @$edit_patient[0]['medical_history_food']; ?>">
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                
                                                <div class="control-group">											
                                                    <label class="control-label" for="congenital_disease">โรคประจำตัว</label>
                                                    <div class="controls">
                                                        <input type="text" class="span4" id="congenital_disease" name="congenital_disease" placeholder="โรคประจำตัว" value="<?php echo @$edit_patient[0]['congenital_disease']; ?>">
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                
                                                <div class="control-group">											
                                                    <label class="control-label">ที่อยู่ปัจจุบัน</label>


                                                    <div class="controls">
                                                        <textarea name="address" id="address" class="span4" placeholder="ที่อยู่ปัจจุบัน" rows="3"><?php echo @$edit_patient[0]['address']; ?></textarea>
                                                    </div>		<!-- /controls -->		
                                                </div> <!-- /control-group -->



                                                <div class="control-group">											
                                                    <label class="control-label">เบอร์โทรศัพท์</label>


                                                    <div class="controls">
                                                        <input type="text" name="patient_tel" id="patient_tel" class="span2" placeholder="เบอร์โทรศัพท์" value="<?php echo @$edit_patient[0]['patient_tel']; ?>">
                                                    </div>	<!-- /controls -->			
                                                </div> <!-- /control-group -->




                                                <div class="control-group">											
                                                    <label class="control-label" for="emergency_contect">กรณีฉุกเฉินติดต่อ ชื่อ-สกุล</label>

                                                    <div class="controls">
                                                        <input type="text" name="emergency_contect" id="emergency_contect" class="span4" placeholder="กรณีฉุกเฉินติดต่อ" value="<?php echo @$edit_patient[0]['emergency_contect']; ?>">
                                                    </div>	<!-- /controls -->			
                                                </div> <!-- /control-group -->
                                                
                                                <div class="control-group">											
                                                    <label class="control-label" for="relationships_with_patients">ความสัมพันธ์กับผู้ป่วย </label>

                                                    <div class="controls">
                                                        <input type="text" name="relationships_with_patients" id="relationships_with_patients" class="span4" placeholder="ความสัมพันธ์กับผู้ป่วย" value="<?php echo @$edit_patient[0]['relationships_with_patients']; ?>">
                                                        <!--
                                                        <div class="input-append">
                                                            <input class="span2 m-wrap" id="appendedInputButton" type="text">
                                                            <button class="btn" type="button">Go!</button>
                                                        </div>
                                                        -->
                                                    </div>	<!-- /controls -->			
                                                </div> <!-- /control-group -->
                                                
                                                
                                                <div class="control-group">											
                                                    <label class="control-label">เบอร์โทรศัพท์</label>


                                                    <div class="controls">
                                                        <input type="text" name="relationships_tel" id="relationships_tel" class="span2" placeholder="เบอร์โทรศัพท์" value="<?php echo @$edit_patient[0]['relationships_tel']; ?>">
                                                    </div>	<!-- /controls -->			
                                                </div> <!-- /control-group -->
                                                
                                                <!--
                                                <div class="control-group">											
                                                    <label class="control-label" for="radiobtns">Dropdown in a button group</label>

                                                    <div class="controls">
                                                        <div class="btn-group">
                                                            <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> User</a>
                                                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                                                <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                                                <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="i"></i> Make admin</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>	<!-- /controls --		
                                                </div> <!-- /control-group -

                                                --



                                                <div class="control-group">											
                                                    <label class="control-label" for="radiobtns">Button sizes</label>

                                                    <div class="controls">
                                                        <a class="btn btn-large" href="#"><i class="icon-star"></i> Star</a>
                                                        <a class="btn btn-small" href="#"><i class="icon-star"></i> Star</a>
                                                        <a class="btn btn-mini" href="#"><i class="icon-star"></i> Star</a>
                                                    </div>	<!-- /controls --			
                                                </div> <!-- /control-group --
                                                -->


                                                <br />


                                                <div class="form-actions">
                                                    <input type="hidden" name="patient_id" id="patient_id" value="<?php echo @$edit_patient[0]['id']; ?>">
                                                    <button type="submit" class="btn btn-primary">Save</button> 
                                                    <button class="btn" type="reset">Cancel</button>
                                                </div> <!-- /form-actions -->
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="tab-pane" id="jscontrols">
                                        <form id="edit-profile2" class="form-vertical">
                                            <fieldset>





                                                <div class="control-group">
                                                    <label class="control-label">Alerts</label>
                                                    <div class="controls">
                                                        <div class="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                                        </div>


                                                        <div class="alert alert-success">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                                        </div>


                                                        <div class="alert alert-info">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                                        </div>







                                                        <div class="alert alert-block">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <h4>Warning!</h4>
                                                            Best check yo self, you're not...
                                                        </div>
                                                    </div> <!-- /controls -->	





                                                </div> <!-- /control-group -->




                                                <div class="control-group">
                                                    <label class="control-label">Progress Bar</label>
                                                    <div class="controls">
                                                        <div class="progress">
                                                            <div class="bar" style="width: 60%;"></div>
                                                        </div>


                                                        <div class="progress progress-striped">
                                                            <div class="bar" style="width: 20%;"></div>
                                                        </div>


                                                        <div class="progress progress-striped active">
                                                            <div class="bar" style="width: 40%;"></div>
                                                        </div>
                                                    </div> <!-- /controls -->	
                                                </div> <!-- /control-group -->







                                                <div class="control-group">
                                                    <label class="control-label">Accordion</label>
                                                    <div class="controls">

                                                        <div class="accordion" id="accordion2">
                                                            <div class="accordion-group">
                                                                <div class="accordion-heading">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                                                        Collapsible Group Item #1
                                                                    </a>
                                                                </div>
                                                                <div id="collapseOne" class="accordion-body collapse in">
                                                                    <div class="accordion-inner">
                                                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-group">
                                                                <div class="accordion-heading">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                                                        Collapsible Group Item #2
                                                                    </a>
                                                                </div>
                                                                <div id="collapseTwo" class="accordion-body collapse">
                                                                    <div class="accordion-inner">
                                                                        Anim pariatur cliche...
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <!-- /controls -->	
                                                </div> <!-- /control-group -->






                                                <div class="control-group">
                                                    <label class="control-label">Progress Bar</label>
                                                    <div class="controls">
                                                        <!-- Button to trigger modal -->
                                                        <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

                                                        <!-- Modal -->
                                                        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h3 id="myModalLabel">Thank you for visiting EGrappler.com</h3>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>One fine body…</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                                                <button class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div> <!-- /controls -->	
                                                </div> <!-- /control-group -->

















                                                <div class="control-group">
                                                    <label class="control-label">Social Buttons</label>
                                                    <div class="controls">
                                                        <button class="btn btn-facebook-alt"><i class="icon-facebook-sign"></i> Facebook</button>
                                                        <button class="btn btn-twitter-alt"><i class="icon-twitter-sign"></i> Twitter</button>
                                                        <button class="btn btn-google-alt"><i class="icon-google-plus-sign"></i> Google+</button>
                                                        <button class="btn btn-linkedin-alt"><i class="icon-linkedin-sign"></i> Linked In</button>
                                                        <button class="btn btn-pinterest-alt"><i class="icon-pinterest-sign"></i> Pinterest</button>
                                                        <button class="btn btn-github-alt"><i class="icon-github-sign"></i> Github</button>
                                                    </div> <!-- /controls -->	
                                                </div> <!-- /control-group -->

                                                <br />

                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Save</button> <button class="btn">Cancel</button>
                                                    <button class="btn btn-info">Info</button>
                                                    <button class="btn btn-danger">Danger</button>
                                                    <button class="btn btn-warning">Warning</button>
                                                    <button class="btn btn-invert">Invert</button>
                                                    <button class="btn btn-success">Success</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>


                            </div>





                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->

                </div> <!-- /span8 -->




            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /main-inner -->

</div> <!-- /main -->

<?php $this->load->view('admin/footer'); ?>