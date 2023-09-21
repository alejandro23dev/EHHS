
<!-- Topbar -->
<div class="topbar">
    <div class="container">
        <!-- Topbar Navigation -->
        <ul class="loginbar pull-right">
            <li>
                <i class="fa fa-globe"></i>
                <a>Languages</a>
                <ul class="lenguages">
                    <li><a onclick="SwitchLanguage('english');">English <i class="fa fa-check check_lang" id="check_english" ></i></a></li>
                    <li><a onclick="SwitchLanguage('spanish');">Spanish <i class="fa fa-check check_lang" id="check_spanish" ></i></a></li>
                </ul>
            </li>

            
        </ul>
        <!-- End Topbar Navigation -->
    </div>
</div>
<!-- End Topbar -->


<script type="text/javascript">

    function SwitchLanguage(language)
    {
        jQuery('.check_lang').hide();
        jQuery('#check_'+language).show();

        jQuery.ajax({
            type: "POST",
            dataType: "html",
            url: 'Main/SwitchLanguage',
            data:{language:language}
        }).done(function(response, textStatus, jqXHR)
        {
            window.location.replace("Main");
        }).fail(function(jqHTR, textStatus, thrown)
        {
            alertify.error('Something is wrong with AJAX:' + textStatus);
        });
    }

    function Logout(pag, click=1, div='main-view')
    {
        var target = document.getElementById('main-view');
        var spinner = new Spinner(opts).spin(target);

        jQuery.ajax({
            type: "POST",
            dataType: "html",
            url: pag
        }).done(function(response, textStatus, jqXHR)
        {
            RebuildHeader(spinner);
        }).fail(function(jqHTR, textStatus, thrown)
        {
            alertify.error('Something is wrong with AJAX:' + textStatus);
        });
    }

    function RebuildHeader(spinner)
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
                LoadContent('Dashboard/GoDashboard', 0, 'main-view');
                spinner.stop();
            }
        });
    }

</script>


