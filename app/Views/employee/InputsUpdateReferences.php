<?php
$arr=array();
if(isset($data['form']['data']->form_sign))
{
	$json=stripslashes(html_entity_decode($data['form']['data']->form_sign));//echo $json;
	$arr= json_decode($json, true);
}
?>

<div class="col-sm-12">

    <fieldset class="myfieldset">
        <?php $lg='Education';?>
        <legend class="mylegend" id="references_lg1"><?php print $lg;?></legend>

        <div style='text-align:justify;'>
            <div class="col-sm-4 ">
                <div class="form-group">
                    <label>High School</label>
                    <input type="text" name="school" id="school" value="<?php if(isset($arr[0]['school']))print $arr[0]['school'];?>" class="form-control required">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>College</label>
                    <input type="text" name="College" id="College" value="<?php if(isset($arr[0]['College']))print $arr[0]['College'];?>" class="form-control">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Other</label>
                    <input type="text" name="Other" id="Other" value="<?php if(isset($arr[0]['Other']))print $arr[0]['Other'];?>" class="form-control">
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset class="myfieldset">
        <?php $lg='1st References';?>
        <legend class="mylegend" id="references_lg2"><?php print $lg;?></legend>

        <div style='text-align:justify;'>
            <div class="col-sm-8">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="Name_ref1" id="Name_ref1" value="<?php if(isset($arr[0]['Name_ref1']))print $arr[0]['Name_ref1'];?>" class="form-control required">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="Phone_ref1" id="Phone_ref1" value="<?php if(isset($arr[0]['Phone_ref1']))print $arr[0]['Phone_ref1'];?>" class="form-control required">
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset class="myfieldset">
        <?php $lg='2nd References';?>
        <legend class="mylegend" id="references_lg3"><?php print $lg;?></legend>

        <div style='text-align:justify;'>
            <div class="col-sm-8 ">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="Name_ref2" id="Name_ref2" value="<?php if(isset($arr[0]['Name_ref2']))print $arr[0]['Name_ref2'];?>" class="form-control">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="Phone_ref2" id="Phone_ref2" value="<?php if(isset($arr[0]['Phone_ref2']))print $arr[0]['Phone_ref2'];?>" class="form-control">
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset class="myfieldset">
        <?php $lg='1st Employment';?>
        <legend class="mylegend" id="references_lg4"><?php print $lg;?></legend>

        <div style='text-align:justify;'>
            <div class="col-sm-4 ">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="Name_emp1" id="Name_emp1" value="<?php if(isset($arr[0]['Name_emp1']))print $arr[0]['Name_emp1'];?>" class="form-control">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Position</label>
                    <input type="text" name="position_emp1" id="position_emp1" value="<?php if(isset($arr[0]['position_emp1']))print $arr[0]['position_emp1'];?>" class="form-control">
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <label>From</label>
                    <input type="text" name="from_emp1" id="from_emp1" value="<?php if(isset($arr[0]['from_emp1']))print $arr[0]['from_emp1'];?>" class="form-control">
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <label>To</label>
                    <input type="text" name="to_emp1" id="to_emp1" value="<?php if(isset($arr[0]['to_emp1']))print $arr[0]['to_emp1'];?>" class="form-control">
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset class="myfieldset">
        <?php $lg='2nd Employment';?>
        <legend class="mylegend" id="references_lg4"><?php print $lg;?></legend>

        <div style='text-align:justify;'>
            <div class="col-sm-4 ">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="Name_emp2" id="Name_emp2" value="<?php if(isset($arr[0]['Name_emp2']))print $arr[0]['Name_emp2'];?>" class="form-control">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Position</label>
                    <input type="text" name="position_emp2" id="position_emp2" value="<?php if(isset($arr[0]['position_emp2']))print $arr[0]['position_emp2'];?>" class="form-control">
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <label>From</label>
                    <input type="text" name="from_emp2" id="from_emp2" value="<?php if(isset($arr[0]['from_emp2']))print $arr[0]['from_emp2'];?>" class="form-control">
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <label>To</label>
                    <input type="text" name="to_emp2" id="to_emp2" value="<?php if(isset($arr[0]['to_emp2']))print $arr[0]['to_emp2'];?>" class="form-control">
                </div>
            </div>
        </div>
    </fieldset>

    <div class="row">
        <section class="col col-8">
            <div class="form-group">
                <label>
                    Sign typing your full name
                    <?php
                    if(isset($data['role']['data']->first_name)) print 'like this: '.$data['role']['data']->first_name;
                    if(isset($data['role']['data']->second_name)) print ' '.$data['role']['data']->second_name;
                    if(isset($data['role']['data']->last_name)) print ' '.$data['role']['data']->last_name;
                    ?>
                </label>
                <input  type="text" name="references_form_sign" id="references_form_sign" class="form-control required" value="<?php if(isset($arr[0]['references_form_sign']))print $arr[0]['references_form_sign'];?>"/>
            </div>
        </section>

        <section class="col col-4">
            <label>Date</label>
            <input type="text" name="references_today_date" id="references_today_date" class="form-control required" disabled='disabled'  value="<?php print date('m/d/Y');?>" />
        </section>
    </div>

    <div class="form-group pull-right" style="margin-top: 30px;">
        <button type="button" id="btn_save_references" class="btn btn-primary">Next <span style="vertical-align: middle;font-size: 16px;" class="icon-control-forward"></span></button>
        <input type="hidden" name="references_id_form" id="references_id_form" value="<?php if(isset($data['form']['data']->id_form)) print $data['form']['data']->id_form;?>" />
        <input type="hidden" name="references_today_date" id="references_today_date" class="form-control required" readonly  value="<?php print date('m/d/Y');?>" />
    </div>

</div>
<?php require_once(APPPATH."views/includes/footer_scripts.php");?>
<script type="text/javascript">
    jQuery(document).ready(function()
    {
        App.init();
        Masking.initMasking();
        Datepicker.initDatepicker();

        jQuery('#btn_save_references').on('click', function ()
        {
            ValidateFrm('frm17');
            if (jQuery("#frm17").valid())
            {
                var form_name='references';
                var x=jQuery('#frm17').find('input[datafld!=ignore], select[datafld!=ignore]').serializeArray();
                var date=jQuery('#references_today_date').val();
                var form_sign='[{';

                jQuery.each(x, function(i, field)
                {
                    if(field.value!='')
                    {
                        if(i!=0)
                            form_sign=form_sign+',';

                        form_sign = form_sign + '"' + field.name + '":"' + field.value + '"';
                    }
                });

                form_sign=form_sign+'}]';//alert(form_sign);

                var id_employee=jQuery('#id_employee').val();
                var id_form=jQuery('#references_id_form').val();

                var completed_percent=75;

                var data ='form_name='+form_name+
                '&form_sign='+form_sign+
                '&date='+date+
                '&completed_percent='+completed_percent+
                '&id_employee='+id_employee+
                '&id_form='+id_form;

                var url = 'Employee/SaveEmployeeForm';

                var target = document.getElementById('container');
                var spinner = new Spinner(opts).spin(target);

                jQuery.ajax({
                    type: "POST",
                    dataType: "html",
                    url: url,
                    data:data
                }).done(function(response, textStatus, jqXHR)
                {
                    if(jQuery.isNumeric(response) && response>0)
                    {
                        RebuildHeader();
                        alertify.success('Data Saved.');

                        jQuery("#frm17 input").prop("disabled", true);
                        jQuery('#btn_save_references').hide();

                        if('<?php print $data['role']['data']->rol;?>'=='worker')
                        {
                            LoadDataQuiz(response);
                            jQuery('#tab18').show().tab('show');
                            jQuery('#s17').removeClass('active').addClass('fade');
                            jQuery('#s18').removeClass('fade').addClass('active');
                            goToByScroll('tab18');
                        }
                    }
                    else{alertify.error('Error: The element could not be Saved. '+ response);}
                    spinner.stop();

                }).fail(function(jqHTR, textStatus, thrown)
                {
                    alertify.error('Something is wrong with AJAX:' + textStatus);
                });
            }
        });

        function RebuildHeader()
        {
            jQuery('#div_header').empty();

            jQuery.ajax({
                url:'Main/RebuildHeader',
                type:'POST'
            }).done(function(response, textStatus, jqXHR)
            {
                if(response)
                {
                    jQuery('#div_header').html(response);
                }
            });
        }

        function LoadDataQuiz(id_employee)
        {
            jQuery.ajax({
                url: 'Main/LlenarDataTable',
                type: 'POST',
                data: {data_type:'data_quiz',view_url:'employee/InputsUpdateQuiz', id_employee:id_employee}
            }).done(function(response, textStatus, jqXHR)
            {
                if(response)
                {
                    jQuery('#data_quiz').html(response);
                }
            });
        }
    });
</script>