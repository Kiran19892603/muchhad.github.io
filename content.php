<?php
include_once('database.php');
if('data' == $_GET['trs'] )
{
   include_once('pages/upload_frm.php');
}
else if('ltst' == $_GET['trs'] )
{
   include_once('pages/ltst.php');
}
else if('hr' == $_GET['trs'] )
{
   include_once('pages/hr.php');
}
else if('pb' == $_GET['trs'] )
{
   include_once('pages/pb.php');
}
else if('contact' == $_GET['trs'] )
{
   include_once('pages/contact.html');
}
else
{
  include_once('pages/home.php');	
}
?>