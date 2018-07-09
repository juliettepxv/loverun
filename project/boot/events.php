<?php
//GET ACTION
use Pov\Defaults\C_povApi;
use Pov\System\ApiResponse;

//créée la home page si elle existe pas
pov()->events->listen("EVENT_ERROR_MISSING_HOME_PAGE",function(){
    $home=\Classiq\Models\Page::getByName("Home page",true);
    $home->urlpage->is_homepage=true;
    $home->urlpage->url="";
    $home->view="index";
    db()->store($home);
    db()->store($home->urlpage);
    die("il faut crééer la home page");
});


pov()->events->listen(C_povApi::EVENT_ACTION,
    /**
     *
     */
    function(ApiResponse $vv,string $actionName){
        /*
        $vv->addMessage("Hello action $actionName");
        switch ($actionName){
            case "formContact":
                $formDbRecord=db()->dispense("formulairecontact");
                $formDbRecord->date_envoi=pov()->utils->date->nowMysql();
                $formDbRecord->nom=$nom=the()->request("nom");
                $formDbRecord->email=$emailFrom=the()->request("email");
                $formDbRecord->message=$message=the()->request("message");
                db()->store($formDbRecord);
                $mailBody="";
                $mailBody.="<b>Nom</b><br>";
                $mailBody.="$nom<br><br>";
                $mailBody.="<b>Email</b><br>";
                $mailBody.="$emailFrom<br><br>";
                $mailBody.="<b>Message</b><br>";
                $mailBody.="$message<br><br>";
                $mailTo=the()->request("mailto");
                if($mailTo){
                    try {
                        cq()->sendMail(
                            $mailTo,
                            '[FORMULAIRE CONTACT SITE FK ' . fk()->name . '] ' . $nom,
                            $mailBody
                        );
                    }catch (Exception $e) {
                        $vv->addToJson("mailResult","nok ".$e->getMessage());
                    }
                }else{
                    $vv->addError("Personne ne recevra de mail pour ce formulaire");
                }
                break;
            default:
                $vv->addError("Action $actionName pas prise en charge par ".C_povApi::EVENT_ACTION);
        }
        */
    }
);