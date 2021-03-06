<?php $this->load->view('admin/header'); ?>

<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span12">      		

                    <div class="widget ">

                        <div class="widget-header">
                            <i class="icon-user"></i>
                            <h3>ประวัติการรักษา -- <?php echo $patient_data[0]['patient_name']; ?></h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <a class="btn btn-large" href="<?php echo base_url(); ?>index.php/admin/login/patient"><i class="icon-backward"></i> กลับสู่หน้าหลัก</a>
                            <p>
                                
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;font-size: 13px;">เลขประจำตัว : </th>
                                        <th class="td-actions" style="width: 22%;font-size: 13px;"><?php echo $patient_data[0]['patient_number']; ?></th>
                                        <th style="width: 10%;font-size: 13px;">ชื่อ-นามสกุล : </th>
                                        <th class="td-actions" style="width: 22%;font-size: 13px;"><?php echo $patient_data[0]['patient_name']; ?></th>
                                        <th style="width: 14%;font-size: 13px;">เลขประจำตัวประชาชน : </th>
                                        <th class="td-actions" style="width: 22%;font-size: 13px;"><?php echo $patient_data[0]['identification']; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>วัน/เดือน/ปี เกิด : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['birthday']; ?></td>
                                        <td>อายุ : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['age']; ?></td>
                                        <td>กรุ๊ปเลือด : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['blood_group']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>เชื้อชาติ : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['ethnicity']; ?></td>
                                        <td>สัญชาติ : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['nationality']; ?></td>
                                        <td>ศาสนา : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['religion']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>สถานะ : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['status']; ?></td>
                                        <td>อาชีพ : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['career']; ?></td>
                                        <td>ประวัติการแพ้ยา/อาหาร : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['medical_history_food']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>โรคประจำตัว : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['congenital_disease']; ?></td>
                                        <td>ที่อยู่ปัจจุบัน : </td>
                                        <td class="td-actions"><?php echo $patient_data[0]['address']; ?></td>
                                        <td>เบอร์โทรศัพท์</td>
                                        <td class="td-actions"><?php echo $patient_data[0]['patient_tel']; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="td-actions"></td>
                                        <td></td>
                                        <td class="td-actions"></a></td>
                                        <td></td>
                                        <td class="td-actions"></td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <div class="control-group">
                                
                                <div class="controls">
                                    <!-- Button to trigger modal -->
                                    <a href="#myModal" role="button" class="btn" data-toggle="modal"><i class=" icon-user-md"></i> เพิ่มประวัติการรักษา</a>
                                </div> <!-- /controls -->	
                            </div> <!-- /control-group -->
                            <br>
                            
                            
                            <div class="show_main">
                                <?php foreach ($medical_records_data as $value) { 
                                    $show_date_temp = date("Y-m-d", strtotime($value['date_medical_records']));
                                    $show_date = explode('-', $show_date_temp);
                                ?>
                                    <div class="show_element widget" id="show_medical_<?php echo $value['id']; ?>" >
                                        <div class="span1" style="border: 1px solid #ccc;border-radius: 4px 4px 4px 4px;">   
                                            <div class="news-item-date"> 
                                                <span class="news-item-day"><?php echo $show_date[2]; ?></span> <span class="news-item-month"><?php echo date("F", strtotime($value['date_medical_records'])); ?></span>  <span class="news-item-title"><?php echo $show_date[0]; ?></span>
                                            </div>
                                        </div>
                                        <div class="span10">   
                                            <div class="message_wrap"> <span class="arrow"></span>
                                                <div class="info"> <a class="name news-item-title">รายละเอียดการรักษา</a> <span class="time">เวลา <?php echo date("H:i:s", strtotime($value['date_medical_records'])); ?> น.</span>
                                                    
                                                        <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"> <i class=" icon-list-ul"> จัดการ</i> </a>
                                                            <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                                                                <li><a onclick ="edit_medical_record(<?php echo $value['id']; ?>)" href="#myModal" role="button" data-toggle="modal"><i class=" icon-edit icon-large"></i> Edit</a></li>
                                                                <li><a onclick ="del_medical_record(<?php echo $value['id']; ?>)" href="javascript:void(0)"><i class=" icon-trash icon-large"></i> Delete</a></li>
                                                                <!--<li><a href="#"><i class=" icon-share icon-large"></i> Share</a></li>-->
                                                            </ul>
                                                        </div>
                                                    
                                                </div>
                                                <div class="text news-item-preview"> 
                                                     <table class="table table-striped ">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2"><b>อาการหลัก : </b><?php echo $value['symptom_main']; ?></td>
                                                                <td colspan="2"><b>อาการร่วม : </b><?php echo $value['joint_symptoms']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>ลิ้น : </b><?php echo $value['tongue']; ?> <br><b>ชีพจร : </b><?php echo $value['pulse']; ?></td>
                                                                <td><b>วินิจฉัย : </b><?php echo $value['diagnose']; ?></td>
                                                                <td colspan="2"><b>หลักการรักษา : </b><?php echo $value['treatment_principles']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>BP : </b><?php echo $value['blood_pressure']; ?> mm/Hg</td>
                                                                <td><b>P : </b><?php echo $value['pulse_beats']; ?> ครั้ง/นาที</td>
                                                                <td><b>น้ำหนัก : </b><?php echo $value['weight']; ?> กก.</td>
                                                                <td><b>ส่วนสูง : </b><?php echo $value['height']; ?> ซม.</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>ระดับการปวด : </b><?php echo $value['pain_level']; ?></td>
                                                                <td><b>ระดับการชา : </b><?php echo $value['cramp_level']; ?></td>
                                                                <td><b>ระดับการเคลื่อนไหว : </b><?php echo $value['motion_level']; ?></td>
                                                                <td><b>ใช้บริการ : </b><?php echo $value['service_use']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4"><b>จุดฝังเข็ม/ยาสมุนไพร : </b><?php echo $value['acupuncture_points']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><b>แพทย์ผู้ตรวจ : </b><?php echo $value['doctors_who_examine']; ?></td>
                                                                <td colspan="2"><b>นัดครั้งต่อไป : </b><?php echo ($value['the_next_appointments'] != "0000-00-00 00:00:00")? date("d-m-Y H:i:s", strtotime($value['the_next_appointments'])) : ""; ?></td>
                                                            </tr>
                                                        </tbody>
                                                     </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>   
                            
                            <!-- /widget-content -->
                            <div class="span5">
                                &nbsp;
                            </div>
                            <div class="span2">
                                <div class="progress progress-striped active show-hide-load" style="width:100%;">
                                    <div class="bar" style="width: 100%;">Loading...</div>
                                </div>
                            </div>
                            <div class="span4">
                                &nbsp;
                            </div>
                            
                        
                            <!-- /widget --> 
                            <div class="widget widget-nopad">
                                <input type="hidden" name="want" id="want" value="<?php echo $want; ?>">
                                <input type="hidden" name="start" id="start" value="<?php echo $start; ?>"> 
                                <!-- /widget-content --> 
                                <div class="widget-box"><a href="javascript:void(0)" id="load_data_element"><i class="icon-refresh"></i>
                                    โหลดประวัติการรักษาก่อนหน้านี้</a>
                                </div>
                            </div>
                            <!-- /widget -->
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->

                </div> <!-- /span8 -->




            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /main-inner -->

</div> <!-- /main -->

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" aria-hidden="true" style="width: 800px;left: 40%;top: 50%;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick = "clean_data_in_form()">×</button>
        <h3 id="myModalLabel">ฟอร์มบันทึกประวัติการรักษา</h3>
    </div>
    <div class="modal-body">
        <form id="form_medical" class="form-horizontal" action="<?php echo base_url(); ?>index.php/admin/login/save_medical_records" method="POST" accept-charset="utf-8">
            <fieldset>
                <div class="control-group">											
                    <label class="control-label" for="symptom_main">อาการหลัก :</label>
                    <div class="controls">
                        <input type="text" class="span5" id="symptom_main" name="symptom_main" placeholder="อาการหลัก" value="" required="true">
                    </div> <!-- /controls -->				
                </div> <!-- /control-group -->
                <div class="control-group">											
                    <label class="control-label" for="joint_symptoms">อาการร่วม :</label>
                    <div class="controls">
                        <input type="text" class="span5 " id="joint_symptoms" name="joint_symptoms" placeholder="อาการร่วม" value="" required="true">
                    </div> <!-- /controls -->				
                </div> <!-- /control-group -->
                <div class="control-group">											
                    <label class="control-label" for="tongue">ลิ้น :</label>
                    <div class="controls">
                        <input type="text" class="span2 " id="tongue" name="tongue" placeholder="ลิ้น" value="">
                        &nbsp;&nbsp;ชีพจร : <input type="text" class="span2 " id="pulse" name="pulse" placeholder="ชีพจร" value="">
                        
                    </div> <!-- /controls -->				
                </div> <!-- /control-group -->
                <div class="control-group">											
                    <label class="control-label" for="diagnose">วินิจฉัย :</label>
                    <div class="controls">
                        <input type="text" class="span5 " id="diagnose" name="diagnose" placeholder="วินิจฉัย" value="">
                    </div> <!-- /controls -->				
                </div> <!-- /control-group -->
                <div class="control-group">											
                    <label class="control-label" for="treatment_principles">หลักการรักษา :</label>
                    <div class="controls">
                        <input type="text" class="span6 " id="treatment_principles" name="treatment_principles" placeholder="หลักการรักษา" value="">
                    </div> <!-- /controls -->				
                </div> <!-- /control-group -->
                <div class="control-group">											
                    <label class="control-label" for=""></label>
                    <div class="controls">
                        BP : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="span2 " id="blood_pressure" name="blood_pressure" placeholder="BP" value=""> mm/Hg, 
                        &nbsp;&nbsp;P : <input type="text" class="span2 " id="pulse_beats" name="pulse_beats" placeholder="P" value=""> ครั้ง/นาที, 
                        <br><br>น้ำหนัก : <input type="text" class="span2 " id="weight" name="weight" placeholder="น้ำหนัก" value=""> กก., 
                        &nbsp;&nbsp;ส่วนสูง : <input type="text" class="span2 " id="height" name="height" placeholder="ส่วนสูง" value=""> ซม.
                    </div> <!-- /controls -->				
                </div> <!-- /control-group -->
                <div class="control-group">											
                    <label class="control-label" for=""></label>
                    <div class="controls">
                        ระดับการปวด : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" class="span2 " id="pain_level" name="pain_level" placeholder="ระดับการปวด" value=""> , 
                        &nbsp;&nbsp;ระดับการชา : <input type="text" class="span2 " id="cramp_level" name="cramp_level" placeholder="ระดับการปวด" value=""> , 
                        <br><br>ระดับการเคลื่อนไหว : &nbsp;<input type="text" class="span2 " id="motion_level" name="motion_level" placeholder="ระดับการเคลื่อนไหว" value="">
                        
                    </div> <!-- /controls -->				
                </div> <!-- /control-group -->
                <div class="control-group">											
                    <label class="control-label" for="">ใช้บริการ :</label>
                    <div class="controls">
                        <label class="checkbox inline">
                            <input type="checkbox" name="service_use[]" id="service_use_0" value="ฝังเข็ม" class=""> ฝังเข็ม
                        </label>

                        <label class="checkbox inline">
                            <input type="checkbox" name="service_use[]" id="service_use_1" value="กระตุ้นไฟฟ้า" class=""> กระตุ้นไฟฟ้า
                        </label>
                        <label class="checkbox inline">
                            <input type="checkbox" name="service_use[]" id="service_use_2" value="ครอบแก้ว" class=""> ครอบแก้ว
                        </label>
                        <label class="checkbox inline">
                            <input type="checkbox" name="service_use[]" id="service_use_3" value="กัวซา" class=""> กัวซา
                        </label>
                        <label class="checkbox inline">
                            <input type="checkbox" name="service_use[]" id="service_use_4" value="รมยา" class=""> รมยา
                        </label>
                        <label class="checkbox inline">
                            <input type="checkbox" name="service_use[]" id="service_use_5" value="-" class=""> อื่นๆ
                            <input type="text" name="" id="" class="span2 " placeholder="ระบุ">
                        </label>
                    </div> <!-- /controls -->				
                </div> <!-- /control-group -->
                <div class="control-group">											
                    <label class="control-label" for="acupuncture_points">จุดฝังเข็ม/ยาสมุนไพร :</label>
                    <div class="controls">
                        <textarea name="acupuncture_points" id="acupuncture_points" class="span5 " placeholder="จุดฝังเข็ม" rows="4"></textarea>
                    </div> <!-- /controls -->				
                </div> <!-- /control-group -->
                
                <div class="control-group">											
                    <label class="control-label" for="the_next_appointments"></label>
                    <div class="controls">
                        <table border="0" class="table table-striped">
                            <tr>
                                <td>นัดครั้งต่อไป : </td>
                                <td><input type="text" class="span2 " id="the_next_appointments" name="the_next_appointments" placeholder="นัดครั้งต่อไป" value=""></td>
                                <td>แพทย์ผู้ตรวจ : </td>
                                <td><input type="text" class="span2 " id="doctors_who_examine" name="doctors_who_examine" placeholder="แพทย์ผู้ตรวจ" value=""></td>
                            </tr>
                            <tr>
                                <td>เวลานัด(ชั่งโมง : นาที : วินาที) : </td>
                                <td colspan="3">
                                    <select class="span2" name="time_1" id="time_1">
                                        <?php 
                                            for($i = 0 ; $i <= 24 ; $i++){
                                                if($i <= 9){
                                                    echo "<option value='0".$i."'>0".$i."</option>";
                                                }else{
                                                    echo "<option value='".$i."'>".$i."</option>";
                                                }
                                                
                                            }
                                         ?>
                                    </select> : 
                                    <select class="span2" name="time_2" id="time_2">
                                        <?php 
                                            for($i = 0 ; $i <= 60 ; $i++){
                                                if($i <= 9){
                                                    echo "<option value='0".$i."'>0".$i."</option>";
                                                }else{
                                                    echo "<option value='".$i."'>".$i."</option>";
                                                }
                                                
                                            }
                                         ?>
                                    </select> : 
                                    <select class="span2" name="time_3" id="time_3">
                                        <?php 
                                            for($i = 0 ; $i <= 60 ; $i++){
                                                if($i <= 9){
                                                    echo "<option value='0".$i."'>0".$i."</option>";
                                                }else{
                                                    echo "<option value='".$i."'>".$i."</option>";
                                                }
                                                
                                            }
                                         ?>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        
                    </div> <!-- /controls -->				
                </div> <!-- /control-group -->
            </fieldset>
            <input type="hidden" name="patient_id" id="patient_id" value="<?php echo $patient_id; ?>">
            <input type="hidden" name="medical_records_id" id="medical_records_id" value="">
        </form>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true" onclick = "clean_data_in_form()">ยกเลิก</button>
        <button class="btn btn-primary" id="btn_submit_medical">บันทึกข้อมูล</button>
    </div>
</div>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

<script>
    $(document).ready(function () {
        $("#form_medical").validate({
    
            // Specify the validation rules
            rules: {
                symptom_main: "required",
                doctors_who_examine: "required"
            },

            // Specify the validation error messages
            messages: {
                symptom_main: "",
                doctors_who_examine: ""
            },

            submitHandler: function(form) {
                if(confirm('คุณต้องการบันทึกข้อมูลการรักษานี้หรือไม่...')){
                    form.submit();
                }else{
                    
                }
                
            }
        });

        
        $("#btn_submit_medical").click(function(event){
            //console.log($("#form_medical").serializeArray());
            $("#form_medical").submit();
            
        });
        //----------------------------------------------------------------------------------------
        $(".show-hide-load").hide();
        $("#load_data_element").click(function(){
            $(".show-hide-load").show();
            var num_start = $("div.show_main div.show_element").length;
            $.ajax({
                url: "<?php echo base_url(); ?>index.php/admin/login/load_data_medical_record",
                data: {num_start : num_start, patient_id: $("#patient_id").val()},
                error: function(){
                    alert('An error has occurred');
                },
                dataType: 'html',
                success: function(data) {
                    $("div.show_main div.show_element").last().append(data);
                    $(".show-hide-load").hide();
                },
                type: 'POST'
            });
            
        });
        //-----------------------------------------------------------------------------------------
    });
    function del_medical_record(medical_records_id){
        if(confirm("คุณต้องการลบประวัติการรักษานี้หรือไม่...")){
             $.ajax({
                    url: "<?php echo base_url(); ?>index.php/admin/login/del_medical_record",
                    data: {
                        medical_records_id: medical_records_id
                    },
                    error: function() {
                         //$('#info').html('<p>An error has occurred</p>');
                         alert('An error has occurred');
                    },
                    dataType: 'html',
                    success: function(data) {
                        if($.trim(data) == "success"){
                            $("#show_medical_"+medical_records_id).delay(600).fadeOut(400);
                            setTimeout(function() {
                              $("#show_medical_"+medical_records_id).remove();
                            }, 2000);
                        }
                    },
                    type: 'POST'
            });
        }
    }
    function edit_medical_record(medical_records_id){
        //alert(medical_records_id);
        $("h3#myModalLabel").html("ฟอร์มแก้ไขประวัติการรักษา");
        $.ajax({
                url: "<?php echo base_url(); ?>index.php/admin/login/edit_medical_record",
                data: {
                    medical_records_id: medical_records_id
                },
                error: function() {
                     //$('#info').html('<p>An error has occurred</p>');
                     alert('An error has occurred');
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $("#symptom_main").val(data[0].symptom_main);
                    $("#joint_symptoms").val(data[0].joint_symptoms);
                    $("#tongue").val(data[0].tongue);
                    $("#pulse").val(data[0].pulse);
                    $("#diagnose").val(data[0].diagnose);
                    $("#treatment_principles").val(data[0].treatment_principles);
                    $("#blood_pressure").val(data[0].blood_pressure);
                    $("#pulse_beats").val(data[0].pulse_beats);
                    $("#weight").val(data[0].weight);
                    $("#height").val(data[0].height);
                    $("#pain_level").val(data[0].pain_level);
                    $("#cramp_level").val(data[0].cramp_level);
                    $("#motion_level").val(data[0].motion_level);

                    var temp = data[0].service_use;
                    var str_service = temp.split(",");
                    for ( var i = 0; i < str_service.length; i++) {
                        $(':checkbox').each(function(){
                            if(str_service[i] == $(this).val()){
                                //alert('kkk');
                                $(this).prop('checked', true);
                            }
                        });
                    }
                    


                    $("#acupuncture_points").val(data[0].acupuncture_points);
                    $("#doctors_who_examine").val(data[0].doctors_who_examine);
                    //--------- วันนัดหมาย ---------------//
                    var str = data[0].the_next_appointments;
                    var res = str.split(" ");
                    var str_date = res[0].split("-");
                    $("#the_next_appointments").val(str_date[2]+"-"+str_date[1]+"-"+str_date[0]);
                    var str_time = res[1].split(":");
                    $("#time_1").val(str_time[0]);
                    $("#time_2").val(str_time[1]);
                    $("#time_3").val(str_time[2]);
                    //----------------------------------
                    $("#medical_records_id").val(data[0].id);
                },
                type: 'POST'
        });
    }
    function clean_data_in_form(){
        $("input.span1,input.span2,input.span3,input.span4,input.span5,input.span6").val("");
        $("textarea.span1,textarea.span2,textarea.span3,textarea.span4,textarea.span5,textarea.span6").val("");
        $("input[type='checkbox']").attr("checked", false);
        $("h3#myModalLabel").html("ฟอร์มบันทึกประวัติการรักษา");
        $("#medical_records_id").val('');
    }
</script>

<style>
    input.invalid, textarea.invalid{
        border: 1px solid red;
    }

    input.valid, textarea.valid{
        border: 1px solid green;
    }
</style>
<?php $this->load->view('admin/footer'); ?>