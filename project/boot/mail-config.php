<?php
use Classiq\Utils\MailConfig;
/*

cq()->defaultMailSender=$m=new MailConfig();
$m->port="465";
$m->SMTPSecure="ssl";
$m->host="smtp.xxxxx.xxx";
$m->password="xxxxx";
$m->username="xxxx@xxxxxx.xx";
$m->displayName="noreply";
$m->SMTPAuth=true;
*/

cq()->defaultMailSender=$m=new MailConfig();
$m->port="465";
$m->SMTPSecure="ssl";
$m->host="mail.le-drone.com";
$m->password="ChloeAnarchiste30!";
$m->username="noreply@tilty.io";
$m->password="Prokite1";
$m->username="noreply@pixelvinaigrette.com";
$m->displayName="noreply";
$m->SMTPAuth=true;