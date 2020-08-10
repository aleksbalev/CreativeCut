<?php
$vCardPath = '/assets/components/vcard/';
$vCardId = 'vCard_'.mt_rand();
if($name) {
    list($firstname, $lastname, $lastname1, $lastname2, $lastname3) = explode(" ", $name);
    $lastnameF = $lastname.' '.$lastname1.' '.$lastname2.' '.$lastname3;
}
if(!$jQuery) {
    $jQuery = '<script src="/assets/tmpl/js/jquery/jquery.min.js"></script>';
}
if(!$downloadJs) {
    $downloadJs = '<script defer src="'.$vCardPath.'download.js"></script>';
}

$contact = $modx->getObject('modResource', $modx->getOption('contact_page'));
$output = '<a href="javascript:;" class="teammember__link" id="'.$vCardId.'">vCard</a>';

$modx->regClientScript(
    $jQuery.
	$downloadJs.
    '<script>
        $(document).ready(function () {
            var nameMan = "'.str_replace('.', '', str_replace(' ', '_', $name)).'";
            var senddata = {
                title: "",
                lastname: "'.$lastnameF.'",
                firstname: "'.$firstname.'",
                additional: "",
                prefix: "",
                suffix: "",
                position: "'.$position.'",
                email: "'.$email.'",
                tel: "'.$phone.'",
                mob: "'.$mobilePhone.'",
                fax: "'.$fax.'",
                street: "'.strip_tags($address).'",
                city: "'.$city.'",
                zip: "'.$zip.'",
                country: "'.$country.'",
                foto_url: "'.$modx->getOption('server_protocol').'://'.$_SERVER['HTTP_HOST'].'/'.$photo.'",
                company_name: "'.$modx->getOption('site_logo').'",
                company_url: "'.$modx->getOption('server_protocol').'://'.$_SERVER['HTTP_HOST'].'"
            };
            
            $("#'.$vCardId.'").on("click", function(){
                $.post("'.$vCardPath.'vCard.php", senddata, function(returnData){
                    download(returnData, "vCard_" + nameMan, "text/x-vCard");
                });
            });
        });
    </script>
', true);
return $output;