<!-- BEGIN switch_enable_pm_popup -->
<script language="javascript" type="text/javascript">
<!--
	if ( {PRIVATE_MESSAGE_NEW_FLAG} )
	{
		window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');;
	}
//-->
</script>
<!-- END switch_enable_pm_popup -->

<a name="top" id="top"></a>
{SESSIONS}
{FORUM_HEADER}
<table class="bodyline" width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
    <td align="center" valign="top">
      <table class="navbar" width="100%" cellspacing="1" cellpadding="2" border="0">
        <tr align="center">
          <td>
            <a href="{U_FAQ}"> {L_FAQ}</a>&nbsp; &#8226;&nbsp;
            <strong><a href="{U_SEARCH}"> {L_SEARCH}</a></strong>&nbsp; &#8226;&nbsp;
            <!-- BEGIN switch_user_logged_in -->
            <a href="{U_MEMBERLIST}"> {L_MEMBERLIST}</a>&nbsp; &#8226;&nbsp; 
            <!-- END switch_user_logged_in -->
            <!-- BEGIN switch_user_logged_out -->
            <a href="index.php?module=Users&func=loginscreen"> {L_REGISTER}</a>&nbsp; &#8226;&nbsp;
            <!-- END switch_user_logged_out -->
            <!-- BEGIN switch_user_logged_in -->
            <a href="{U_PROFILE}"> {L_PROFILE}</a>&nbsp; &#8226;&nbsp;
            <!-- END switch_user_logged_in -->
            <a href="{U_PRIVATEMSGS}"> {PRIVATE_MESSAGE_INFO}</a>
            &nbsp;&#8226; &nbsp;<a href="{U_LOGIN_LOGOUT}">{L_LOGIN_LOGOUT}</a>
            <!-- BEGIN switch_allow_sub_change -->
            &nbsp;&#8226; &nbsp;<a href="{U_SUBFORUM}">{L_SUBFORUM}</a>
            <!-- END switch_allow_sub_change -->
            <!-- BEGIN switch_allow_full_page -->
            &nbsp;&#8226; &nbsp;<a href="{U_MIN_MAX}">{L_MIN_MAX}</a>
            <!-- END switch_allow_full_page -->
            <!-- BEGIN switch_admin -->
            &nbsp;&#8226; &nbsp;<a href="{U_ADMIN_LINK}">{L_ADMIN_INFO}</a>
            <!-- END switch_admin -->
          </td>
        </tr>
      </table>
	      <br clear="all">
      
			<table width="100%" border="0" cellspacing="0" cellpadding="5">
				<tr>
					<td>
                    