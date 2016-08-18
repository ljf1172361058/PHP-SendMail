<?php
  
/**
 * 亲测成功!
 *
 * 注意事项如下:
 * 1. 用户名和密码是否正确；
 * 2. 检查邮箱设置是否启用了smtp服务；
 * 3. 是否是php环境的问题导致；
 * 4. $smtp->debug = false改为true
 *
 * 特别注意:
 * 用qq邮箱发送失败了,后面使用163邮箱才成功了,建议大家发送失败的时候可以尝试换个邮箱发送
 * 
 * author:Lzh
 */

require_once "email.class.php";

//******************** 配置信息 ********************************
$smtpserver = "smtp.163.com";  // SMTP服务器
$smtpserverport =25;  // SMTP服务器端口
$smtpusermail = ""; // SMTP服务器的用户邮箱
$smtpemailto = "";  // 发送给谁
$smtpuser = "";  // SMTP服务器的用户帐号
$smtppass = "xxxx"; // SMTP服务器的用户密码 输入密码提示验证失败的话请往后看（如果你是163或者126邮箱，那么你检查一下你SMTP开启的时候，有授权码的，你重新关闭SMTP服务再重新开启你就知道了，其他邮箱也可能是类似授权码的问题，要你输入的并不是密码，而是输入授权码）
$mailsubject = "PHP100测试邮件"; // 邮件主题 
$mailbody = "<h1> 这是一个测试程序 </h1>";  // 邮件内容 
$mailtype = "HTML";  // 邮件格式（HTML/TXT）,TXT为文本邮件 
//************************ 配置信息 ****************************
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证. 
$smtp->debug = false;//是否显示发送的调试信息 
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype,"utf-8"); 

?> 