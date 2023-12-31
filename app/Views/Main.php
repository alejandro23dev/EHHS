<?php echo view('includes/header');?>

<body>

    <div class="wrapper">
    <?php echo view('includes/hidden');?>
    <?php echo view('nav/top_bar');?>
    </div>

        <div id="main-view"></div>

        <?php echo view('includes/footer_scripts');?>
        <?php echo view('includes/footer');?>



<script type="text/javascript">

    /*-------------------DO NOT CHANGE THE CODE-------------------*/
	if('<?php if(isset($ctr))print $ctr?>'!='' && '<?php if(isset($func))print $func?>'!='')//&& '<?php if(isset($view_area))print $view_area?>'!=''
	{
		var str='<?php if(isset($ctr) && isset($func))print $ctr."/".$func;?>';
		var str=str+'<?php if(isset($param1))print "/".$param1;?>';
		var str=str+'<?php if(isset($param2))print "/".$param2;?>';
		
		//alert(str);
		LoadContent(str, 0, '<?php if(isset($view_area))print $view_area?>');
	}
	else
    {
		LoadContent('Dashboard/GoDashboard', 0, 'main-view');
	}

    function UpdateContent(go_function, go_view, go_back, id='')
    {
        jQuery( '.main-view' ).empty();
        var target = document.getElementById('container');
        var spinner = new Spinner(opts).spin(target);

        jQuery.ajax({
            type: "POST",
            dataType: "html",
            url: go_function,
            data:{go_view:go_view, go_back:go_back, id:id}
        }).done(function(response, textStatus, jqXHR)
        {
            if(response!='NO_LOGGED')
            {
                jQuery('#main-view').html(response);
                jQuery('#view').val(go_back);
                spinner.stop();
            }
            else if(response=='NO_LOGGED')
            {
                alertify.error("You don\'t have access.");
                window.location.replace("Main");
            }
        }).fail(function(jqHTR, textStatus, thrown)
        {
            alertify.error('Something is wrong with AJAX:' + textStatus);
        });
    }

    function DeleteContent(go_function, table, field_id, id)
    {
        jQuery( '.main-view' ).empty();
        var target = document.getElementById('container');
        var spinner = new Spinner(opts).spin(target);

        jQuery.ajax({
            type: "POST",
            dataType: "html",
            url: go_function,
            data:{table:table, field_id:field_id, id:id}
        }).done(function(response, textStatus, jqXHR)
        {
            if(response!='NO_LOGGED')
            {
                if(response=='0'){alertify.success('Element deleted.');}
                else if(response=='EMPTY_ID'){alertify.warning('You have to delete something. The ID is empty.');}
                else if(response=='EMPTY_TABLE'){alertify.warning('You have to delete something. The table is empty.');}
                else {alertify.error('Error: The element could not be deleted. '+ response);}
                spinner.stop();
                LoadContent(jQuery('#view').val());
            }
            else if(response=='NO_LOGGED')
            {
                alertify.error("You don\'t have access.");
                window.location.replace("Main");
            }
        }).fail(function(jqHTR, textStatus, thrown)
        {
            alertify.error('Something is wrong with AJAX:' + textStatus);
        });
    }

    function LoadContent(pag, click=1, div='main-view')
    {
		if(div=='')div='main-view';
        //if(click!=0)jQuery('.navbar-toggle').click();

        var target = document.getElementById('main-view');
        var spinner = new Spinner(opts).spin(target);
		//alert(pag);
        jQuery('#'+div).empty();

        jQuery.ajax({
            type: "POST",
            dataType: "html",
            url: pag
        }).done(function(response, textStatus, jqXHR)
        {//alert(response);
            if(response!='NO_LOGGED')
            {
				jQuery('#'+div).html(response);
                jQuery('#view').val(pag);
            }
            else if(response=='NO_LOGGED')
            {
                alertify.error("You don\'t have access.");
                window.location.replace("Main");
            }

            //if(click==1)
                goToByScroll(div);
            spinner.stop();
        }).fail(function(jqHTR, textStatus, thrown)
        {
            alertify.error('Something is wrong with AJAX:' + textStatus);
        });
    }

    function SaveContent(url, array_inputs)
    {
        jQuery('.main-view').empty();
        var target = document.getElementById('container');
        var spinner = new Spinner(opts).spin(target);

        jQuery.ajax({
            type: "POST",
            dataType: "html",
            url: url,
            data:array_inputs
        }).done(function(response, textStatus, jqXHR)
        {
            if(response!='NO_LOGGED')
            {
                if(jQuery.isNumeric(response)){alertify.success('Data Saved.');}
                else{alertify.error('Error: The element could not be Saved. '+ response);}
                spinner.stop();
                LoadContent(jQuery('#view').val());
            }
            else if(response=='NO_LOGGED')
            {
                alertify.error("You don\'t have access.");
                window.location.replace("Main");
            }
        }).fail(function(jqHTR, textStatus, thrown)
        {
            alertify.error('Something is wrong with AJAX:' + textStatus);
        });
    }

    function goToByScroll(div)
    {//alert(div);
        jQuery('html, body').animate({
                scrollTop: jQuery("#"+div).offset().top-100},
            'slow');
    }

    /*-------------------DO NOT CHANGE THE CODE-------------------*/

</script>