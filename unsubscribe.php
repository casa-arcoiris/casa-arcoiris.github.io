<?php
   require 'vendor/autoload.php';
 
   use PHPMailer\PHPMailer\PHPMailer;
   
   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->SMTPDebug = 0;
   $mail->Host = 'smtp.hostinger.com';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'noticias@casa-arcoiris.org';
   $mail->Password = 'ADog2323.';
   $mail->setFrom('noticias@casa-arcoiris.org', 'Casa Arcoiris');
   $mail->addReplyTo('noticias@casa-arcoiris.org', 'Casa Arcoiris');
   $mail->addAddress($email);
   $mail->Subject = 'Lamentamos verte partir';
   $mail->Body = '<html>
  <head>
    <title>Lamentamos verte partir</title>
  </head>
  <body style="margin: 0;">
    <div class="rps_12b8"><div link="#0092ff" style="background-color: rgb(0, 174, 255) !important;" data-ogsb="rgb(0, 174, 255)"><table cellspacing="0" cellpadding="0" border="0" role="presentation" class="x_nl2go-body-table" width="100%" style="background-color: rgb(0, 174, 255) !important; width: 100%;" data-ogsb="rgb(0, 174, 255)"><tbody><tr><td align="center" class="x_r0-c"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="600" class="x_r1-o" style="table-layout:fixed; width:600px"><tbody><tr><td valign="top" class="x_r2-i" style="background-color: rgb(0, 174, 255) !important;" data-ogsb="rgb(0, 174, 255)"><table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td class="x_r3-c" align="center"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" class="x_r4-o" style="table-layout:fixed; width:100%"><tbody><tr class="x_nl2go-responsive-hide"><td height="20" style="font-size: 20px; line-height: 20px; background-color: rgb(0, 174, 255) !important;" data-ogsb="rgb(0, 174, 255)"></td></tr><tr><td class="x_r5-i" style="background-color: rgb(0, 174, 255) !important;" data-ogsb="rgb(0, 174, 255)"><table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><th width="100%" valign="top" class="x_r6-c"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" class="x_r7-o" style="table-layout:fixed; width:100%"><tbody><tr><td class="x_nl2go-responsive-hide" width="15" style="font-size:0px; line-height:1px"> </td><td valign="top" class="x_r8-i"><table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td class="x_r9-c" align="center"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="200" class="x_r10-o" style="table-layout:fixed; width:200px"><tbody><tr class="x_nl2go-responsive-hide"><td height="15" style="font-size:15px; line-height:15px"></td></tr><tr><td class="x_r11-i"><img data-imagetype="External" src="https://www.casa-arcoiris.org/assets/casa_arcoiris_logo.png" width="200" alt="Logo de Casa Arcoíris" border="0" class="" style="display:block; width:100%"></td></tr><tr class="x_nl2go-responsive-hide"><td height="15" style="font-size:15px; line-height:15px"></td></tr></tbody></table></td></tr></tbody></table></td><td class="x_nl2go-responsive-hide" width="15" style="font-size:0px; line-height:1px"> </td></tr></tbody></table></th></tr></tbody></table></td></tr><tr class="x_nl2go-responsive-hide"><td height="20" style="font-size: 20px; line-height: 20px; background-color: rgb(0, 174, 255) !important;" data-ogsb="rgb(0, 174, 255)"></td></tr></tbody></table></td></tr><tr><td class="x_r3-c" align="center"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" class="x_r4-o" style="table-layout:fixed; width:100%"><tbody><tr class="x_nl2go-responsive-hide"><td height="20" style="font-size: 20px; line-height: 20px; background-color: rgb(0, 174, 255) !important;" data-ogsb="rgb(0, 174, 255)"></td></tr><tr><td class="x_r12-i" style="background-color: rgb(0, 174, 255) !important;" data-ogsb="rgb(0, 174, 255)"><table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><th width="100%" valign="top" class="x_r6-c"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" class="x_r7-o" style="table-layout:fixed; width:100%"><tbody><tr><td class="x_nl2go-responsive-hide" width="15" style="font-size:0px; line-height:1px"> </td><td valign="top" class="x_r8-i"><table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td class="x_r13-c" align="left"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" class="x_r14-o" style="table-layout:fixed; width:100%"><tbody><tr class="x_nl2go-responsive-hide"><td height="15" style="font-size:15px; line-height:15px"></td></tr><tr><td align="center" valign="top" class="x_r15-i x_nl2go-default-textstyle" style="color: rgb(207, 212, 218) !important; font-family: arial, helvetica, sans-serif; font-size: 16px; line-height: 1.5; text-align: center;" data-ogsc="rgb(59, 63, 68)"><div><h1 class="x_default-heading1" style="margin: 0px; color: rgb(212, 227, 248) !important; font-family: arial, helvetica, sans-serif; font-size: 36px;" data-ogsc="rgb(31, 45, 61)">Lamentamos verte partir de nuestras noticias. Esperamos que tu experiencia haya sido agradable.</h1></div></td></tr></tbody></table></td></tr><tr><td class="x_r3-c" align="center"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="570" class="x_r16-o" style="table-layout:fixed; width:570px"><tbody><tr class="x_nl2go-responsive-hide"><td height="15" style="font-size:15px; line-height:15px"></td></tr><tr><td class="x_r17-i" style="font-size:0px; line-height:0px"></td></tr><tr class="x_nl2go-responsive-hide"><td height="15" style="font-size:15px; line-height:15px"></td></tr></tbody></table></td></tr></tbody></table></td><td class="x_nl2go-responsive-hide" width="15" style="font-size:0px; line-height:1px"> </td></tr></tbody></table></th></tr></tbody></table></td></tr><tr class="x_nl2go-responsive-hide"><td height="20" style="font-size: 20px; line-height: 20px; background-color: rgb(0, 174, 255) !important;" data-ogsb="rgb(0, 174, 255)"></td></tr></tbody></table></td></tr><tr><td class="x_r3-c" align="center"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" class="x_r4-o" style="table-layout:fixed; width:100%"><tbody><tr class="x_nl2go-responsive-hide"><td height="20" style="font-size: 20px; line-height: 20px; background-color: rgb(0, 174, 255) !important;" data-ogsb="rgb(0, 174, 255)"></td></tr><tr><td class="x_r5-i" style="background-color: rgb(0, 174, 255) !important;" data-ogsb="rgb(0, 174, 255)"><table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><th width="100%" valign="top" class="x_r6-c"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" class="x_r7-o" style="table-layout:fixed; width:100%"><tbody><tr><td class="x_nl2go-responsive-hide" width="15" style="font-size:0px; line-height:1px"> </td><td valign="top" class="x_r8-i"><table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td class="x_r13-c" align="left"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" class="x_r14-o" style="table-layout:fixed; width:100%"><tbody><tr class="x_nl2go-responsive-hide"><td height="15" style="font-size:15px; line-height:15px"></td></tr><tr><td align="center" valign="top" class="x_r18-i x_nl2go-default-textstyle" style="color: rgb(207, 212, 218) !important; font-family: arial, helvetica, sans-serif; font-size: 18px; line-height: 1.5; text-align: center;" data-ogsc="rgb(59, 63, 68)"><div><p style="margin:0">Casa Arcoiris</p></div></td></tr></tbody></table></td></tr><tr><td class="x_r13-c" align="left"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" class="x_r14-o" style="table-layout:fixed; width:100%"><tbody><tr class="x_nl2go-responsive-hide"><td height="15" style="font-size:15px; line-height:15px"></td></tr><tr><td align="center" valign="top" class="x_r18-i x_nl2go-default-textstyle" style="color: rgb(207, 212, 218) !important; font-family: arial, helvetica, sans-serif; font-size: 18px; line-height: 1.5; text-align: center;" data-ogsc="rgb(59, 63, 68)"><div><p style="margin:0; font-size:14px">Ya no vas a recibir correos por nuestra parte a: '.$email.' porque te diste de baja de nuestras noticias.</p></div></td></tr></tbody></table></td></tr><tr><td class="x_r13-c" align="left"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" class="x_r14-o" style="table-layout:fixed; width:100%"><tbody><tr><td align="center" valign="top" class="x_r19-i x_nl2go-default-textstyle" style="color: rgb(207, 212, 218) !important; font-family: arial, helvetica, sans-serif; font-size: 18px; line-height: 1.5; text-align: center;" data-ogsc="rgb(59, 63, 68)"><div></div></td></tr></tbody></table></td></tr><tr><td class="x_r13-c" align="left"><table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" class="x_r14-o" style="table-layout:fixed; width:100%"><tbody><tr class="x_nl2go-responsive-hide"><td height="15" style="font-size:15px; line-height:15px"></td></tr></tbody></table></td></tr><tr class="x_nl2go-responsive-hide"><td height="15" style="font-size:15px; line-height:15px"></td></tr></tbody></table></td></tr></tbody></table></td><td class="x_nl2go-responsive-hide" width="15" style="font-size:0px; line-height:1px"> </td></tr></tbody></table></th></tr></tbody></table></td></tr><tr class="x_nl2go-responsive-hide"><td height="20" style="font-size: 20px; line-height: 20px; background-color: rgb(0, 174, 255) !important;" data-ogsb="rgb(0, 174, 255)"></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table><div>
  </body>';
  $mail->IsHTML(true);
  $mail->addCustomHeader('List-Unsubscribe:', '<https://www.casa-arcoiris.org/desuscribir.php?email='.$email.'>');
  
   //$mail->addAttachment('test.txt');
   $mail->send();
?>