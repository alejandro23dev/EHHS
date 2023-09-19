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
        <?php $lg='Confidentiality statement';?>
        <legend class="mylegend" id="confidentiality_lg1"><?php print $lg;?></legend>
        
        <div style='text-align:justify;'>
            <p>I have been formally instructed in maintaining the confidentiality of the medical records and understand that the medical information regarding the patient may not be discussed with anyone, either inside or outside the agency (except and needed to conduct the business of the day ) I understand that no medical records are to be removed from the home health agency unless a “ release of information “  from has been completed and signed by the patient. It in my understanding that such discussion or release of information is cause for dismissal. I have been formally agency, also informed regarding the agency’s policy for hippa compliance, and I have read and signed a job description for my specific classification</p>
        </div>

        <div class="form-group">
            <label>
                Initials
                <?php
                if(isset($data['role']['data']->first_name)) print 'of '.$data['role']['data']->first_name;
                if(isset($data['role']['data']->second_name)) print ' '.$data['role']['data']->second_name;
                if(isset($data['role']['data']->last_name)) print ' '.$data['role']['data']->last_name;
                ?>
            </label>
            <input  type="text" name="confidentiality_initial1" id="confidentiality_initial1" class="form-control required" size='4' style='width:100px !important;' value="<?php if(isset($arr[0]['confidentiality_initial1']))print $arr[0]['confidentiality_initial1'];?>"/>
        </div>

    </fieldset>

    <fieldset class="myfieldset">
        <?php $lg='Personal health information';?>
        <legend class="mylegend" id="confidentiality_lg2"><?php print $lg;?></legend>

        <div style='text-align:justify;'>

            <p>I undersigned, have read and understand the This Home Health Agency, (hereinafter “This Home Health Agencyz”) policy on confidentiality of personal health information (PHI) as described in the Confidentiality Policy which is in accordance with relevant state and federal legislation.</p>

            <p>I also acknowledge that I’m aware of and understand  the policies of the This Home Health Agency , regarding the security of personal health information including the policies relating to the use , collection, disclosure, storage and destruction of personal health information.</p>

            <p>In consideration of my employment or association with This Home Health Agency, and as an integral part of the terms and conditions of my employment or association, I hereby agree, pledge and undertake  that i will  not at any time, during my employment or association with This Home Health Agency, or after my employment or association ends, access or use personal health information, or  reveal or disclose to any persons within or outside This Home Health Agency, any personal health information except as may be required in the course of my duties and responsibilities and in accordance with applicable Legislation, and This Home Health Agency, policies governing proper release of information.</p>

            <p>I understand that my obligations  outlined above will continue after my employment/contract/association/ appointment with This Home Health Agency, ends.</p>

            <p>I further understand that my obligations concerning the protection of the confidentiality of PHI relate  to all personal health information whether I acquired the information through my employment or contract or association or appointment with This Home Health Agency , or with any of the entities, which have an association with This Home Health Agency.</p>

            <p>I also understand that unauthorized use or disclosure of such information will result in a disciplinary action up to and including termination of employment or contract or association or appointment, the imposition of fines pursuant to relevant state and federal legislation, and report to my professional regulatory body.</p>

        </div>

        <div class="form-group">
            <label>
                Initials
                <?php
                if(isset($data['role']['data']->first_name)) print 'of '.$data['role']['data']->first_name;
                if(isset($data['role']['data']->second_name)) print ' '.$data['role']['data']->second_name;
                if(isset($data['role']['data']->last_name)) print ' '.$data['role']['data']->last_name;
                ?>
            </label>
            <input  type="text" name="confidentiality_initial2" id="confidentiality_initial2" class="form-control required" size='4' style='width:100px !important;' value="<?php if(isset($arr[0]['confidentiality_initial2']))print $arr[0]['confidentiality_initial2'];?>"/>
        </div>

    </fieldset>

    <fieldset class="myfieldset">
        <?php $lg='Personal policies sake and adequate care of the patient';?>
        <legend class="mylegend" id="confidentiality_lg3"><?php print $lg;?></legend>

        <div style='text-align:justify;'>

            <p>As an employee of This Home Health Agency, I  understand that the job I am being hired to perform belongs to This Home Health Agency, Inc. I also understand that it is illegal for me to transfer or attempt to transfer any case to another Agency or take ownership of any job that i am employed in. Should i act underhandedly and take over such a job so that i may be paid directly by the client, to the exclusion of my employer , or transfer any case to another Agency. I will be in violation of State, Federal and agency rules and will accordingly pay $10,000.00 to This Home Health Agency</p>

        </div>

        <div class="form-group">
            <label>
                Initials
                <?php
                if(isset($data['role']['data']->first_name)) print 'of '.$data['role']['data']->first_name;
                if(isset($data['role']['data']->second_name)) print ' '.$data['role']['data']->second_name;
                if(isset($data['role']['data']->last_name)) print ' '.$data['role']['data']->last_name;
                ?>
            </label>
            <input  type="text" name="confidentiality_initial3" id="confidentiality_initial3" class="form-control required" size='4' style='width:100px !important;' value="<?php if(isset($arr[0]['confidentiality_initial3']))print $arr[0]['confidentiality_initial3'];?>"/>
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
                <input  type="text" name="confidentiality_form_sign" id="confidentiality_form_sign" class="form-control required" value="<?php if(isset($arr[0]['confidentiality_form_sign']))print $arr[0]['confidentiality_form_sign'];?>"/>
            </div>
        </section>

        <section class="col col-4">
            <label>Date</label>
            <input type="text" name="confidentiality_today_date" id="confidentiality_today_date" class="form-control required" disabled='disabled'  value="<?php print date('m/d/Y');?>" />
        </section>
    </div>

    <div class="form-group pull-right">
        <button type="button" id="btn_save_confidentiality" class="btn btn-primary">Next <span style="vertical-align: middle;font-size: 16px;" class="icon-control-forward"></span></button>
        <input type="hidden" name="confidentiality_id_form" id="confidentiality_id_form" value="<?php if(isset($data['form']['data']->id_form)) print $data['form']['data']->id_form;?>" />
    </div>

</div>
<?php require_once(APPPATH."views/includes/footer_scripts.php");?>
<script type="text/javascript">
    jQuery(document).ready(function()
    {
        App.init();
        Masking.initMasking();
        Datepicker.initDatepicker();

        jQuery('#btn_save_confidentiality').on('click', function ()
        {
            ValidateFrm('frm13');
            if (jQuery("#frm13").valid())
            {
                var form_name='confidentiality';
                var x=jQuery('#frm13').find('input[datafld!=ignore], select[datafld!=ignore]').serializeArray();
                var date=jQuery('#confidentiality_today_date').val();
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
                var id_form=jQuery('#confidentiality_id_form').val();

                var completed_percent=55;

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

                        jQuery("#frm13 input").prop("disabled", true);
                        jQuery('#btn_save_confidentiality').hide();

                        if('<?php print $data['role']['data']->rol;?>'=='worker')
                        {
                            LoadDataAgreement(response);
                            jQuery('#tab14').show().tab('show');
                            jQuery('#s13').removeClass('active').addClass('fade');
                            jQuery('#s14').removeClass('fade').addClass('active');
                            goToByScroll('tab14');
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

        function LoadDataAgreement(id_employee)
        {
            jQuery.ajax({
                url: 'Main/LlenarDataTable',
                type: 'POST',
                data: {data_type:'data_agreement',view_url:'employee/InputsUpdateAgreement', id_employee:id_employee}
            }).done(function(response, textStatus, jqXHR)
            {
                if(response)
                {
                    jQuery('#data_agreement').html(response);
                }
            });
        }
    });
</script>