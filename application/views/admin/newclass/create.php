<style>
.imageupload_area{width:100%;float:left;}
.imageupload_area_L{width:30%;float:left;}
.imageupload_area_R{width:70%;float:left;}
.smallImgArea{width:40px;height:40px;float:left;margin-right:5px;margin-bottom:5px;}
.feature_LR{width:50%;float:left;}
.airport_stopage{float: left;clear: both;}
.airport_list_div{display: none;}
</style>
<script>
var stops_incrementer = 0; 
var fare_suummary_inc = 0; 


var feature_incrementer = 0; 
var subject_incrementer = 0; 
var package_incrementer = 0; 
var facility_incrementer = []; 
var fileindex = 1; 
facility_incrementer[0] = 0;
</script>
<link href="<?php echo BASEURL?>admin-img-css-js/datepicker/jquery-ui.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="all" type="text/css" href="<?php echo BASEURL?>admin-img-css-js/datepicker/jquery-ui-timepicker-addon.css" />

<script type="text/javascript" src="<?php echo BASEURL?>admin-img-css-js/datepicker/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="<?php echo BASEURL?>admin-img-css-js/datepicker/jquery-ui-sliderAccess.js"></script>

<?php
  $countryList = getCountryList(); 
?>
<!-- Validation form -->
        <form id="validate" name="validate" class="form" method="post" action="">
            <fieldset>
                <div class="widget">
                    <div class="title"><h6>Create Class</h6></div>
                        
                    <div class="formRow" >
                        <label>Class<span class="req">*</span></label>
                        <div class="formRight">
                            <span class="oneThree">
                                <select id="class_name_id" name="class_name_id">
                                     <option value="">Select One</option>
                                     <?php
                                     if($class)
                                     {
                                         foreach($class as $cls)
                                         {
                                     ?>
                                            <option value="<?php echo $cls['class_name_id']?>" ><?php echo $cls['classname']?></option>
                                     <?php
                                         }
                                     }
                                     ?>
                                </select>
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="formRow" >
                        <label>Subject<span class="req">*</span></label>
                        <div class="formRight" >
                            <span class="oneThree" id="subject_div_id">
                                <input class="validate[required]" type="text" value="" name="subject[0]" id="subject_0"/><div style="clear:both;"></div>
                            </span>
                        </div>
                        <div class="clear"></div>
                        <a href="javascript:void(0);" onclick="add_new_subject();">Add Another Subject</a>
                    </div>
                    
                    <div class="formRow" >
                        <label>Section<span class="req">*</span></label>
                        <div class="formRight">
                            <span class="oneThree">
                                <table>
                                    <?php
                                     if($section)
                                     {
                                         foreach($section as $sec)
                                         {
                                     ?>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="section_id_<?php echo $sec['section_id']?>"  name="section_id[<?php echo $sec['section_id']?>]"  value="<?php echo $sec['section_id']?>" />
                                                </td>
                                                <td>
                                                    <?php echo $sec['section']?>
                                                </td>
                                            </tr>
                                     <?php
                                         }
                                     }
                                     ?>
                                </table>
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="formSubmit"><input type="submit" value="submit" class="redB" /></div>
                    <div class="clear"></div>
                </div>
                
            </fieldset>
        </form> 
        
        <script type="text/javascript" src="<?php echo BASEURL?>admin-img-css-js/cmn.js"></script>
        