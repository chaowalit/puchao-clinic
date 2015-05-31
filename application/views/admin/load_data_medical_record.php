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