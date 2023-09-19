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
        <?php $lg='Independent contractor agreement';?>
        <legend class="mylegend" id="agreement_lg1"><?php print $lg;?></legend>

        <div style='text-align:justify;'>

            <p>This agreement is made and entered into this day <input type="text" name="date_agreement" id="date_agreement" class="form-control required" disabled='disabled'  value="<?php print date('m/d/Y');?>" style="width: 100px;display: inline;" />, by and between this home health agency <b><?php print COMPANY;?></b> a florida corporation, (herein after referred to as ‘corporation’, and <b><?php
                    if(isset($data['role']['data']->first_name)) print $data['role']['data']->first_name;
                    if(isset($data['role']['data']->second_name)) print ' '.$data['role']['data']->second_name;
                    if(isset($data['role']['data']->last_name)) print ' '.$data['role']['data']->last_name;
                    ?></b>, SSN# <b><?php if(isset($data['role']['data']->ssn)) print $data['role']['data']->ssn;?></b> a florida resident at <b><?php if(isset($data['role']['data']->ssn)) print $data['role']['data']->address;?></b>, (herein after referred as ‘contractor’), for the purpose as _____________________________________.</p>

            <p><b>Paragraph I</b></p>
            <p>Whereas, corporation desires to hire contractor to preform work in _______________ accordance with the terms of this agreement (see attached job description). Whereas, contractor is willing to preform services in accordance with the terms hereinafter set forth, now therefore in consideration of the mutual covenants and agreements herein contained, it is hereby agreed as follows:</p>

            <p><b>Paragraph II</b></p>
            <p>Corporation should not be liable for any withholding tax, social security taxes, workmen’s compensation or other expense or liability attributable to an employer/employee relationship.</p>

            <p><b>Paragraph III. Relationship beteween parties.</b></p>
            <p>Contractor is retained and employed by the corporation only for the purposes and to extent set forth in this agreement, and his relation to the corporation and its subsidiary companies shall, during the period of periods of his employment and services hereunder, be that of an independent practitioner.</p>
            <p>Contractor shall not be considered as being entitled to participate in any plans, arrangements, or distribution by the corporation or its subsidiary companies pertaining to or in connection with any pension, stock, bonus, profit-sharing or similar benefits for these regular employees.</p>
            <p>Both parties agree that the contractor shall be paid and hourly rate $_________ or per visit rate of $__________.</p>

            <p><b>Paragraph IV. Professional responsibility.</b></p>
            <p>Nothing in this agreement shall construed to interfere with or otherwise affect the rendering of services by contractor in accordance with his independent and professional judgement. This agreement shall be subject to the rules and regulations of any and all professional organizations or associations to which contractor may from time to time belong and the laws and regulations governing said practice in this states.</p>
            <p>Our agency has full responsibility over all contracted services.</p>
            <p>Our agency has full responsibility to retain and maintain all clinical records of patients served by this contract.</p>
            <p>The second party must submit evidence of liability and insurance coverage.</p>
            <p>Both parties agree that the employee shall submit clinical notes and progress reports to the director of nursing once a week (on/or before 72 hrs of service rendered), and shall conform with prescribed scheduling of visits and, periodic patient evolution. All patient’s health information must be maintained as confidential as hippa requirements.</p>
            <p>Both parties agree that this agency shall coordinate all job-related activities of the employee, control all job-related activities of the employee, and shall evaluate the employee’s job performance just as we do that of other employees.</p>

            <p><b>Paragraph V. Suspension and termination</b></p>
            <p>The initial terms of this agreement shall be for a period of 12 months, and shall automatically continue thereafter for successive terms of 12 months unless or until terminated as hereinafter provided. Corporation shall have the right to terminate this agreement if contractor fails to comply with all the rules and regulations provided to contractor by the corporation.</p>

            <p><b>Paragraph VI. Entire agreement</b></p>
            <p>This agreement (including any attachments, exhibits, and amendments hereto) constitute the entire understanding between the parties hereto and cancels and supersedes all prior negotiations representations, understanding and agreements, either written or oral, with respect to the subject matter hereof.</p>
            <p>Executed as of the day and year first above written.</p>
			
			<p><b>Paragraph VII. Entire agreement</b></p>
			<p>Both parties must agree that the employee (independent contractor) must present all documents required by ahca to work in the agency (personal information, trainings, liability insurance etc.)</p>
			<p>The contractor is responsible for keeping all of his documentation up-to-date.</p>
			<p>Both parties agree that by not having their documentation updated, they could not work with the patient until the documentation is updated</p>
			<p>Both parties agree that by not having their documentation updated, they would not be able to work with the patient until the documentation is updated.</p>
			<p>The days worked by the contractor with his documentation not updated, will not be paid by the agency, because they are not performing all the rules established by ahca.</p>
			
			<p><b>Paragraph VIII. Entire agreement</b></p>
			<p>Both parties agree that the employee should use the website of the agency www.Esperanzaehhs.Com to obtain work information, submit required documentation and general information. </p>

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
            <input  type="text" name="agreement_initial1" id="agreement_initial1" class="form-control required" size='4' style='width:100px !important;' value="<?php if(isset($arr[0]['agreement_initial1']))print $arr[0]['agreement_initial1'];?>"/>
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
                <input  type="text" name="agreement_form_sign" id="agreement_form_sign" class="form-control required" value="<?php if(isset($arr[0]['agreement_form_sign']))print $arr[0]['agreement_form_sign'];?>"/>
            </div>
        </section>

        <section class="col col-4">
            <label>Date</label>
            <input type="text" name="agreement_today_date" id="agreement_today_date" class="form-control required" disabled='disabled'  value="<?php print date('m/d/Y');?>" />
        </section>
    </div>

    <div class="form-group pull-right">
        <button type="button" id="btn_save_agreement" class="btn btn-primary">Next <span style="vertical-align: middle;font-size: 16px;" class="icon-control-forward"></span></button>
        <input type="hidden" name="agreement_id_form" id="agreement_id_form" value="<?php if(isset($data['form']['data']->id_form)) print $data['form']['data']->id_form;?>" />
    </div>

</div>

<?php require_once(APPPATH."views/includes/footer_scripts.php");?>
<script type="text/javascript">
    jQuery(document).ready(function()
    {
        App.init();
        Masking.initMasking();
        Datepicker.initDatepicker();

        jQuery('#btn_save_agreement').on('click', function ()
        {
            ValidateFrm('frm14');
            if (jQuery("#frm14").valid())
            {
                var form_name='agreement';
                var x=jQuery('#frm14').find('input[datafld!=ignore], select[datafld!=ignore]').serializeArray();
                var date=jQuery('#agreement_today_date').val();
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
                var id_form=jQuery('#agreement_id_form').val();

                var completed_percent=60;

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

                        jQuery("#frm14 input").prop("disabled", true);
                        jQuery('#btn_save_agreement').hide();

                        if('<?php print $data['role']['data']->rol;?>'=='worker')
                        {
                            LoadDataAffidavit(response);
                            jQuery('#tab15').show().tab('show');
                            jQuery('#s14').removeClass('active').addClass('fade');
                            jQuery('#s15').removeClass('fade').addClass('active');
                            goToByScroll('tab15');
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

        function LoadDataAffidavit(id_employee)
        {
            jQuery.ajax({
                url: 'Main/LlenarDataTable',
                type: 'POST',
                data: {data_type:'data_affidavit',view_url:'employee/InputsUpdateAffidavit', id_employee:id_employee}
            }).done(function(response, textStatus, jqXHR)
            {
                if(response)
                {
                    jQuery('#data_affidavit').html(response);
                }
            });
        }
    });
</script>