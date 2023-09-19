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
        <?php $lg='Affidavit of compliance';?>
		<legend class="mylegend" id="affidavit_lg1"><?php print $lg;?></legend>

        <div style='text-align:justify;'>
			<div class='row'>
				<div class='col-sm-4 text-center'><img style="width: 140px;" src="<?php print base_url('assets/images/ahca.png');?>" alt="AHCA"/></div>
				<div class='col-sm-8 text-center'>
					
					<h1><p>ATTESTATION OF COMPLIANCE</p></h1>
					<h2 style='font-weight:bold'>
						<p>with Background Screening</p>
						<p>Requirements</p>
					</h2>
				</div>
			</div>
			

            <p>Authority: This form shall be used by all employees to comply with:</p>
            <p>
                <ul>
                <li>the attestation requirements of section 435.05(2), Florida Statutes, which state that every employee required to undergo Level 2 background screening must attest, subject to penalty of perjury, to meeting the requirements for qualifying for employment pursuant to this chapter and agreeing to inform the employer immediately if arrested for any of the disqualifying offenses while employed by the employer; AND</li>
                <li>the proof of screening within the previous 5 years in section 408.809(2), Florida Statutes, which requires proof of compliance with level 2 screening standards that have been screened through the Care Provider Background Screening Clearinghouse created under Section 435.12, F.S., or screened within the previous 5 years by the Agency, Department of Health, Department of Elder Affairs, the Agency for Persons with Disabilities, Department of Children and Families, or the Department of Financial Services for an applicant for a certificate of authority to operate a continuing care retirement community under Chapter 651, F.S., and in accordance with the standards in Section 408.809(2), F.S., if that agency is not currently implemented in the Care Provider Background Screening Clearinghouse.</li>
                </ul>
            </p>
            <p>This form must be maintained in the employee’s personnel file. If this form is used as proof of screening for an administrator or chief financial officer to satisfy the requirements of an application for a health care provider license, please attach a copy of the screening results and submit with the licensure application.</p>

            <br>

            <p>Employee/Contractor Name:<b> <?php
                    if(isset($data['role']['data']->first_name)) print $data['role']['data']->first_name;
                    if(isset($data['role']['data']->second_name)) print ' '.$data['role']['data']->second_name;
                    if(isset($data['role']['data']->last_name)) print ' '.$data['role']['data']->last_name;
                    ?></b></p>
            <p>Health Care Provider/ Employer Name:<b> <?php print COMPANY;?></b></p>
            <p>Address of Health Care Provider:<b> <?php print ADDRESS;?></b></p>

            <p>You must attest to meeting the requirements for employment and you may not have been arrested for and awaiting final disposition of, have been found guilty of, regardless of adjudication, or have entered a plea of nolo contendere (no contest) or guilty to, or have been adjudicated delinquent and the record has not been sealed or expunged for, any offense prohibited under any of the following provisions of state law or similar law of another jurisdiction: Criminal offenses found in section 435.04, F.S.</p>


            <p style="margin-top: 5px;">(a) Section 393.135, relating to sexual misconduct with certain developmentally disabled clients and reporting of such sexual misconduct.</p>
            <p style="margin-top: 5px;">(b) Section 394.4593, relating to sexual misconduct with certain mental health patients and reporting of such sexual misconduct.</p>
            <p style="margin-top: 5px;">(c) Section 415.111, relating to adult abuse, neglect, or exploitation of aged persons or disabled adults.</p>
            <p style="margin-top: 5px;">(d) Section 777.04, relating to attempts, solicitation, and conspiracy to commit an offense listed in this subsection.</p>
            <p style="margin-top: 5px;">(e) Section 782.04, relating to murder.</p>

            <p style="margin-top: 5px;">(g) Section 782.071, relating to vehicular homicide</p>
            <p style="margin-top: 5px;">(h) Section 782.09, relating to killing of an unborn child by injury to the mother.</p>
            <p style="margin-top: 5px;">(i) Chapter 784, relating to assault, battery, and culpable negligence, if the offense was a felony.</p>
            <p style="margin-top: 5px;">(j) Section 784.011, relating to assault, if the victim of the offense was a minor.</p>
            <p style="margin-top: 5px;">(k) Section 784.03, relating to battery, if the victim of the offense was a minor.</p>
            <p style="margin-top: 5px;">(l) Section 787.01, relating to kidnapping.</p>

            <p style="margin-top: 5px;">(m) Section 787.02, relating to false imprisonment.</p>
            <p style="margin-top: 5px;">(n) Section 787.025, relating to luring or enticing a child.</p>
            <p style="margin-top: 5px;">(o) Section 787.04(2), relating to taking, enticing, or removing a child beyond the state limits with criminal intent pending custody proceedings.</p>
            <p style="margin-top: 5px;">(p) Section 787.04(3), relating to carrying a child beyond the state lines with criminal intent to avoid producing a child at a custody hearing or delivering the child to the designated person.</p>
            <p style="margin-top: 5px;">(q) Section 790.115(1), relating to exhibiting firearms or weapons within 1,000 feet of a school.</p>
            <p style="margin-top: 5px;">(r) Section 790.115(2)(b), relating to possessing an electric weapon or device, destructive device, or other weapon on school property.</p>
            <p style="margin-top: 5px;">(s) Section 794.011, relating to sexual battery.</p>
            <p style="margin-top: 5px;">(t) Former s. 794.041, relating to prohibited acts of persons in familial or custodial authority.</p>
            <p style="margin-top: 5px;">(u) Section 794.05, relating to unlawful sexual activity with certain minors.</p>
            <p style="margin-top: 5px;">(v) Chapter 796, relating to prostitution.</p>
            <p style="margin-top: 5px;">(w) Section 798.02, relating to lewd and lascivious behavior.</p>
            <p style="margin-top: 5px;">(x) Chapter 800, relating to lewdness and indecent exposure.</p>
            <p style="margin-top: 5px;">(y) Section 806.01, relating to arson. (z) Section 810.02, relating to burglary.</p>
            <p style="margin-top: 5px;">(aa) Section 810.14, relating to voyeurism, if the offense is a felony.</p>
            <p style="margin-top: 5px;">(bb) Section 810.145, relating to video voyeurism, if the offense is a felony.</p>
            <p style="margin-top: 5px;">(cc) Chapter 812, relating to theft, robbery, and related crimes, if the offense is a felony.</p>
            <p style="margin-top: 5px;">(dd) Section 817.563, relating to fraudulent sale of controlled substances, only if the offense was a felony.</p>
            <p style="margin-top: 5px;">(ee) Section 825.102, relating to abuse, aggravated abuse, or neglect of an elderly person or disabled adult.</p>
            <p style="margin-top: 5px;">(ff) Section 825.1025, relating to lewd or lascivious offenses committed upon or in the presence of an elderly person or disabled adult.</p>
            <p style="margin-top: 5px;">(gg) Section 825.103, relating to exploitation of an elderly person or disabled adult, if the offense was a felony.</p>

            <p style="margin-top: 5px;">(hh) Section 826.04, relating to incest.</p>
            <p style="margin-top: 5px;">(ii) Section 827.03, relating to child abuse, aggravated child abuse, or neglect of a child</p>
            <p style="margin-top: 5px;">(jj) Section 827.04, relating to contributing to the delinquency or dependency of a child.</p>
            <p style="margin-top: 5px;">(kk) Former s. 827.05, relating to negligent treatment of children.</p>
            <p style="margin-top: 5px;">(ll) Section 827.071, relating to sexual performance by a child.</p>
            <p style="margin-top: 5px;">(mm) Section 843.01, relating to resisting arrest with violence.</p>
            <p style="margin-top: 5px;">(nn) Section 843.025, relating to depriving a law enforcement, correctional, or correctional probation officer means of protection or communication.</p>
            <p style="margin-top: 5px;">(oo) Section 843.12, relating to aiding in an escape.</p>
            <p style="margin-top: 5px;">(pp) Section843.13,relatingtoaidingintheescapeof juvenile inmates in correctional institutions.</p>
            <p style="margin-top: 5px;">(qq) Chapter 847, relating to obscene literature.</p>
            <p style="margin-top: 5px;">(rr) Section 874.05(1), relating to encouraging or recruiting another to join a criminal gang.</p>
            <p style="margin-top: 5px;">(ss) Chapter 893, relating to drug abuse prevention and control, only if the offense was a felony or if any other person involved in the offense was a minor.</p>
            <p style="margin-top: 5px;">(tt) Section 916.1075, relating to sexual misconduct with certain forensic clients and reporting of such sexual misconduct.</p>
            <p style="margin-top: 5px;">(uu) Section 944.35(3), relating to inflicting cruel or inhuman treatment on an inmate resulting in great bodily harm.</p>
            <p style="margin-top: 5px;">(vv) Section 944.40, relating to escape.</p>
            <p style="margin-top: 5px;">(ww) Section 944.46, relating to harboring, concealing, or aiding an escaped prisoner.</p>
            <p style="margin-top: 5px;">(xx) Section 944.47, relating to introduction of contraband into a correctional facility.</p>
            <p style="margin-top: 5px;">(yy) Section 985.701, relating to sexual misconduct in juvenile justice programs.</p>
            <p style="margin-top: 5px;">(zz) Section 985.711, relating to contraband introduced into detention facilities.</p>
            <p style="margin-top: 5px;">(3) The security background investigations under this section must ensure that no person subject to this section has been found guilty of, regardless of adjudication, or entered a plea of nolo contendere or guilty to, any offense that constitutes domestic violence as defined in s. 741.28, whether such act was committed in this state or in another jurisdiction.</p>


            <p style="margin-top: 5px;">Criminal offenses found in section 408.809(4), F.S.</p>
            <p style="margin-top: 5px;">(a) Any authorizing statutes, if the offense was a felony. (b) This chapter, if the offense was a felony.</p>
            <p style="margin-top: 5px;">(c) Section 409.920, relating to Medicaid provider fraud. (d) Section 409.9201, relating to Medicaid fraud.</p>
            <p style="margin-top: 5px;">(e) Section 741.28, relating to domestic violence.</p>
            <p style="margin-top: 5px;">(f) Section 777.04, relating to attempts, solicitation, and conspiracy to commit an offense listed in this subsection.</p>
            <p style="margin-top: 5px;">(g) Section 817.034, relating to fraudulent acts through mail, wire, radio, electromagnetic, photoelectronic, or photooptical systems.</p>
            <p style="margin-top: 5px;">(h) Section 817.234, relating to false and fraudulent insurance claims.</p>
            <p style="margin-top: 5px;">(i) Section 817.481, relating to obtaining goods by using a false or expired credit card or other credit device, if the offense was a felony.</p>
            <p style="margin-top: 5px;">(j) Section 817.50, relating to fraudulently obtaining goods or services from a health care provider.</p>
            <p style="margin-top: 5px;">(k) Section 817.505, relating to patient brokering.</p>
            <p style="margin-top: 5px;">(l) Section 817.568, relating to criminal use of personal identification information.</p>
            <p style="margin-top: 5px;">(m) Section 817.60, relating to obtaining a credit card through fraudulent means.</p>
            <p style="margin-top: 5px;">(n) Section 817.61, relating to fraudulent use of credit cards, if the offense was a felony.</p>
            <p style="margin-top: 5px;">(o) Section 831.01, relating to forgery.</p>
            <p style="margin-top: 5px;">(p) Section 831.02, relating to uttering forged instruments.</p>
            <p style="margin-top: 5px;">(q) Section 831.07, relating to forging bank bills, checks, drafts, or promissory notes.</p>
            <p style="margin-top: 5px;">(r) Section 831.09, relating to uttering forged bank bills, checks, drafts, or promissory notes.</p>
            <p style="margin-top: 5px;">(s) Section 831.30, relating to fraud in obtaining medicinal drugs.</p>
            <p style="margin-top: 5px;">(t) Section 831.31, relating to the sale, manufacture, delivery, or possession with the intent to sell, manufacture, or deliver any counterfeit controlled substance, if the offense was a felony</p>
            <p style="margin-top: 5px;">(u) Section 895.03, relating to racketeering and collection of unlawful debts.</p>
            <p style="margin-top: 5px;">(v) Section 896.101, relating to the Florida Money Laundering Act.</p>

            <p>I have been granted an Exemption from Disqualification through the Agency for Healthcare Administration (AHCA).</p>
            <p>Date of Decision:</p>
            <p>I have been granted an Exemption from Disqualification through the Florida Department of Health. Date of Decision:</p>
            <p>**A copy of the Exemption from Disqualification decision letter must be attached**</p>

            <p>If you are also using this form to provide evidence of prior Level 2 screening (fingerprinting) in the last 5 years and have not been unemployed for more than 90 days, please provide the following information. A copy of the prior screening results must be attached.</p>

            <div class="col-sm-12">
                <p>Purpose of Prior Screening:_____________________________________</p>
            </div>

            <div class="col-sm-6">
                <p>Screening conducted by:_____________________________________</p>
            </div>
            <div class="col-sm-6">
                <p>Date of Prior Screening:_____________________________________</p>
            </div>

            <div class="col-sm-6">
                <p>Agency for Healthcare Administration</p>
                <p>Department of Health</p>
                <p>Agency for Persons with Disabilities</p>
            </div>
            <div class="col-sm-6">
                <p>Department of Elder Affairs</p>
                <p>Department of Financial Services</p>
                <p>Department of Children and Families</p>
            </div>

            <p>Attestation</p>
            <p>Under penalty of perjury, I, <b><?php
                    if(isset($data['role']['data']->first_name)) print $data['role']['data']->first_name;
                    if(isset($data['role']['data']->second_name)) print ' '.$data['role']['data']->second_name;
                    if(isset($data['role']['data']->last_name)) print ' '.$data['role']['data']->last_name;
                    ?></b>, hereby swear or affirm that I meet the requirements for qualifying for employment in regards to the background screening standards set forth in Chapter 435 and section 408.809, F.S. In addition, I agree to immediately inform my employer if arrested or convicted of any of the disqualifying offenses while employed by any health care provider licensed pursuant to Chapter 408, Part II F.S.</p>

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
            <input  type="text" name="affidavit_initial1" id="affidavit_initial1" class="form-control required" size='4' style='width:100px !important;' value="<?php if(isset($arr[0]['affidavit_initial1']))print $arr[0]['affidavit_initial1'];?>"/>
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
                <input  type="text" name="affidavit_form_sign" id="affidavit_form_sign" class="form-control required" value="<?php if(isset($arr[0]['affidavit_form_sign']))print $arr[0]['affidavit_form_sign'];?>"/>
            </div>
        </section>

        <section class="col col-4">
            <label>Date</label>
            <input type="text" name="affidavit_today_date" id="affidavit_today_date" class="form-control required" disabled='disabled'  value="<?php print date('m/d/Y');?>" />
        </section>
    </div>

    <div class="form-group pull-right">
        <button type="button" id="btn_save_affidavit" class="btn btn-primary">Next <span style="vertical-align: middle;font-size: 16px;" class="icon-control-forward"></span></button>
        <input type="hidden" name="affidavit_id_form" id="affidavit_id_form" value="<?php if(isset($data['form']['data']->id_form)) print $data['form']['data']->id_form;?>" />
    </div>

</div>
<?php require_once(APPPATH."views/includes/footer_scripts.php");?>
<script type="text/javascript">
    jQuery(document).ready(function()
    {
        App.init();
        Masking.initMasking();
        Datepicker.initDatepicker();

        jQuery('#btn_save_affidavit').on('click', function ()
        {
            ValidateFrm('frm15');
            if (jQuery("#frm15").valid())
            {
                var form_name='affidavit';
                var x=jQuery('#frm15').find('input[datafld!=ignore], select[datafld!=ignore]').serializeArray();
                var date=jQuery('#affidavit_today_date').val();
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
                var id_form=jQuery('#affidavit_id_form').val();

                var completed_percent=65;

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

                        jQuery("#frm15 input").prop("disabled", true);
                        jQuery('#btn_save_affidavit').hide();

                        if('<?php print $data['role']['data']->rol;?>'=='worker')
                        {
                            LoadDataComunicado(response);
                            jQuery('#tab16').show().tab('show');
                            jQuery('#s15').removeClass('active').addClass('fade');
                            jQuery('#s16').removeClass('fade').addClass('active');
                            goToByScroll('tab16');
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

        function LoadDataComunicado(id_employee)
        {
            jQuery.ajax({
                url: 'Main/LlenarDataTable',
                type: 'POST',
                data: {data_type:'data_comunicado',view_url:'employee/InputsUpdateComunicado', id_employee:id_employee}
            }).done(function(response, textStatus, jqXHR)
            {
                if(response)
                {
                    jQuery('#data_comunicado').html(response);
                }
            });
        }
    });
</script>