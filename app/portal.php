<?php

/*

bWAPP, or a buggy web application, is a free and open source deliberately insecure web application.
It helps security enthusiasts, developers and students to discover and to prevent web vulnerabilities.
bWAPP covers all major known web vulnerabilities, including all risks from the OWASP Top 10 project!
It is for security-testing and educational purposes only.

Enjoy!

Malik Mesellem
Twitter: @MME_IT

bWAPP is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License (http://creativecommons.org/licenses/by-nc-nd/4.0/). Copyright © 2014 MME BVBA. All rights reserved.

*/

include("security.php");
include("security_level_check.php");
include("selections.php");

if(isset($_POST["form"]) && isset($_POST["bug"]))
{

    $key = $_POST["bug"];
    $bug = explode(",", trim($bugs[$key]));

    // Debugging
    // echo " value: " . $bug[0];
    // echo " filename: " . $bug[1] . "<br />";

    header("Location: " . $bug[1]);

}

?>
<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Architects+Daughter">-->
<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<!--<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
<script src="js/html5.js"></script>

<title>bWAPP - Portal</title>

</head>

<body>

<header>

<h1>bWAPP</h1>

<h2>an extremely buggy web app !</h2>

</header>

<div id="menu">

    <table>

        <tr>

            <td><font color="#ffb717">Bugs</font></td>
            <td><a href="password_change.php">Change Password</a></td>
            <td><a href="user_extra.php">Create User</a></td>
            <td><a href="security_level_set.php">Set Security Level</a></td>
            <td><a href="reset.php" onclick="return confirm('All settings will be cleared. Are you sure?');">Reset</a></td>
            <td><a href="credits.php">Credits</a></td>
            <td><a href="http://itsecgames.blogspot.com" target="_blank">Blog</a></td>
            <td><a href="logout.php" onclick="return confirm('Are you sure you want to leave?');">Logout</a></td>
            <td><font color="red">Welcome <?php if(isset($_SESSION["login"])){echo ucwords($_SESSION["login"]);}?></font></td>

        </tr>

    </table>

</div>

<div id="main">

    <h1>Portal</h1>

    <p>bWAPP, or a buggy web application, is a free and open source deliberately insecure web application.<br />
    It helps security enthusiasts, developers and students to discover and to prevent web vulnerabilities.<br />
    bWAPP covers all major known web vulnerabilities, including all risks from the OWASP Top 10 project!<br />
    It is for security-testing and educational purposes only.</p>

    <p><i>Which bug do you want to hack today? :)</i></p>

    <a href="htmli_get.php">Bug</a><br>
    <a href="htmli_post.php">Bug</a><br>
    <a href="htmli_current_url.php">Bug</a><br>
    <a href="htmli_stored.php">Bug</a><br>
    <a href=" iframei.php">Bug</a><br>
    <a href="ldapi.php">Bug</a><br>
    <a href="maili.php">Bug</a><br>
    <a href="commandi.php">Bug</a><br>
    <a href="commandi_blind.php">Bug</a><br>
    <a href="phpi.php">Bug</a><br>
    <a href="ssii.php">Bug</a><br>
    <a href="sqli_1.php">Bug</a><br>
    <a href="sqli_2.php">Bug</a><br>
    <a href="sqli_6.php">Bug</a><br>
    <a href="sqli_13.php">Bug</a><br>
    <a href="sqli_10-1.php">Bug</a><br>
    <a href="sqli_9.php">Bug</a><br>
    <a href="sqli_3.php">Bug</a><br>
    <a href="sqli_16.php">Bug</a><br>
    <a href="sqli_11.php">Bug</a><br>
    <a href="sqli_drupal.php">Bug</a><br>
    <a href="sqli_7.php">Bug</a><br>
    <a href="sqli_12.php">Bug</a><br>
    <a href="sqli_17.php">Bug</a><br>
    <a href="sqli_8-1.php">Bug</a><br>
    <a href="sqli_4.php">Bug</a><br>
    <a href="sqli_15.php">Bug</a><br>
    <a href="sqli_14.php">Bug</a><br>
    <a href="sqli_5.php">Bug</a><br>
    <a href="xmli_1.php">Bug</a><br>
    <a href="xmli_2.php">Bug</a><br>
    <a href="ba_captcha_bypass.php">Bug</a><br>
    <a href="ba_forgotten.php">Bug</a><br>
    <a href="ba_insecure_login.php">Bug</a><br>
    <a href="ba_logout.php">Bug</a><br>
    <a href="ba_pwd_attacks.php">Bug</a><br>
    <a href="ba_weak_pwd.php">Bug</a><br>
    <a href="smgmt_admin_portal.php">Bug</a><br>
    <a href="smgmt_cookies_httponly.php">Bug</a><br>
    <a href="smgmt_cookies_secure.php">Bug</a><br>
    <a href="smgmt_sessionid_url.php">Bug</a><br>
    <a href="smgmt_strong_sessions.php">Bug</a><br>
    <a href="xss_get.php">Bug</a><br>
    <a href="xss_post.php">Bug</a><br>
    <a href="xss_json.php">Bug</a><br>
    <a href="xss_ajax_2-1.php">Bug</a><br>
    <a href="xss_ajax_1-1.php">Bug</a><br>
    <a href="xss_back_button.php">Bug</a><br>
    <a href="xss_custom_header.php">Bug</a><br>
    <a href="xss_eval.php?date=Date()">Bug</a><br>
    <a href="xss_href-1.php">Bug</a><br>
    <a href="xss_login.php">Bug</a><br>
    <a href="xss_phpmyadmin.php">Bug</a><br>
    <a href="xss_php_self.php">Bug</a><br>
    <a href="xss_referer.php">Bug</a><br>
    <a href="xss_user_agent.php">Bug</a><br>
    <a href="xss_stored_1.php">Bug</a><br>
    <a href="xss_stored_3.php">Bug</a><br>
    <a href="xss_stored_2.php">Bug</a><br>
    <a href="xss_sqlitemanager.php">Bug</a><br>
    <a href="xss_stored_4.php">Bug</a><br>
    <a href="insecure_direct_object_ref_1.php">Bug</a><br>
    <a href="insecure_direct_object_ref_3.php">Bug</a><br>
    <a href="insecure_direct_object_ref_2.php">Bug</a><br>
    <a href="sm_samba.php">Bug</a><br>
    <a href="sm_cross_domain_policy.php">Bug</a><br>
    <a href="sm_cors.php">Bug</a><br>
    <a href="sm_xst.php">Bug</a><br>
    <a href="sm_dos_3.php">Bug</a><br>
    <a href="sm_dos_1.php">Bug</a><br>
    <a href="sm_dos_4.php">Bug</a><br>
    <a href="sm_dos_2.php">Bug</a><br>
    <a href="sm_ftp.php">Bug</a><br>
    <a href="sm_snmp.php">Bug</a><br>
    <a href="sm_webdav.php">Bug</a><br>
    <a href="sm_local_priv_esc_1.php">Bug</a><br>
    <a href="sm_local_priv_esc_2.php">Bug</a><br>
    <a href="sm_mitm_1.php">Bug</a><br>
    <a href="sm_mitm_2.php">Bug</a><br>
    <a href="sm_obu_files.php">Bug</a><br>
    <a href="sm_robots.php">Bug</a><br>
    <a href="insecure_crypt_storage_3.php">Bug</a><br>
    <a href="insuff_transp_layer_protect_3.php">Bug</a><br>
    <a href="insuff_transp_layer_protect_1.php">Bug</a><br>
    <a href="heartbleed.php">Bug</a><br>
    <a href="hostheader_2.php">Bug</a><br>
    <a href="insecure_crypt_storage_1.php">Bug</a><br>
    <a href="insuff_transp_layer_protect_4.php">Bug</a><br>
    <a href="insuff_transp_layer_protect_2.php">Bug</a><br>
    <a href="insecure_crypt_storage_2.php">Bug</a><br>
    <a href="directory_traversal_2.php?directory=documents">Bug</a><br>
    <a href="directory_traversal_1.php?page=message.txt">Bug</a><br>
    <a href="hostheader_1.php">Bug</a><br>
    <a href="hostheader_2.php">Bug</a><br>
    <a href="lfi_sqlitemanager.php">Bug</a><br>
    <a href="rlfi.php">Bug</a><br>
    <a href="restrict_device_access.php">Bug</a><br>
    <a href="restrict_folder_access.php">Bug</a><br>
    <a href="ssrf.php">Bug</a><br>
    <a href="xxe-1.php">Bug</a><br>
    <a href="csrf_1.php">Bug</a><br>
    <a href="csrf_3.php">Bug</a><br>
    <a href="csrf_2.php">Bug</a><br>
    <a href="bof_1.php">Bug</a><br>
    <a href="bof_2.php">Bug</a><br>
    <a href="sqli_drupal.php">Bug</a><br>
    <a href="heartbleed.php">Bug</a><br>
    <a href="php_cgi.php">Bug</a><br>
    <a href="php_eval.php">Bug</a><br>
    <a href="xss_phpmyadmin.php">Bug</a><br>
    <a href="shellshock.php">Bug</a><br>
    <a href="lfi_sqlitemanager.php">Bug</a><br>
    <a href="phpi_sqlitemanager.php">Bug</a><br>
    <a href="xss_sqlitemanager.php">Bug</a><br>
    <a href="unvalidated_redir_fwd_1.php">Bug</a><br>
    <a href="unvalidated_redir_fwd_2.php">Bug</a><br>
    <a href="clickjacking.php">Bug</a><br>
    <a href="cs_validation.php">Bug</a><br>
    <a href="hpp-1.php">Bug</a><br>
    <a href="http_response_splitting.php">Bug</a><br>
    <a href="http_verb_tampering.php">Bug</a><br>
    <a href="information_disclosure_4.php">Bug</a><br>
    <a href="information_disclosure_2.php">Bug</a><br>
    <a href="information_disclosure_1.php">Bug</a><br>
    <a href="information_disclosure_3.php">Bug</a><br>
    <a href="insecure_iframe.php">Bug</a><br>
    <a href="unrestricted_file_upload.php">Bug</a><br>
    <a href="aim.php">Bug</a><br>
    <a href="../ClientAccessPolicy.xml">Bug</a><br>
    <a href="../crossdomain.xml">Bug</a><br>
    <a href="manual_interv.php">Bug</a><br>
    <a href="admin/index.php">Bug</a><br>
    <a href="secret_html.php">Bug</a><br>
    <a href="secret.php">Bug</a><br>
    <a href="ws_soap.php">Bug</a><br>


    </div>

    <div id="side">

    <a href="http://twitter.com/MME_IT" target="blank_" class="button"><img src="./images/twitter.png"></a>
    <a href="http://be.linkedin.com/in/malikmesellem" target="blank_" class="button"><img src="./images/linkedin.png"></a>
    <a href="http://www.facebook.com/pages/MME-IT-Audits-Security/104153019664877" target="blank_" class="button"><img src="./images/facebook.png"></a>
    <a href="http://itsecgames.blogspot.com" target="blank_" class="button"><img src="./images/blogger.png"></a>

</div>

<div id="sponsor">

    <table>

        <tr>

            <td width="103" align="center"><a href="https://www.owasp.org" target="_blank"><img src="./images/owasp.png"></a></td>
            <td width="102" align="center"><a href="https://www.owasp.org/index.php/OWASP_Zed_Attack_Proxy_Project" target="_blank"><img src="./images/zap.png"></a></td>
            <td width="110" align="center"><a href="https://www.netsparker.com/?utm_source=bwappapp&utm_medium=banner&utm_campaign=bwapp" target="_blank"><img src="./images/netsparker.png"></a></td>
            <td width="152" align="center"><a href="http://www.missingkids.com" target="_blank"><img src="./images/mk.png"></a></td>

        </tr>

    </table>

</div>

<div id="disclaimer">

    <p>bWAPP is licensed under <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank"><img style="vertical-align:middle" src="./images/cc.png"></a> &copy; 2014 MME BVBA / Follow <a href="http://twitter.com/MME_IT" target="_blank">@MME_IT</a> on Twitter and ask for our cheat sheet, containing all solutions! / Need an exclusive <a href="http://www.mmebvba.com" target="_blank">training</a>?</p>

</div>

<div id="bee">

    <img src="./images/bee_1.png">

</div>

<div id="security_level">

    <form action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="POST">

        <label>Set your security level:</label><br />

        <select name="security_level">

            <option value="0">low</option>
            <option value="1">medium</option>
            <option value="2">high</option>

        </select>

        <button type="submit" name="form_security_level" value="submit">Set</button>
        <font size="4">Current: <b><?php echo $security_level?></b></font>

    </form>

</div>

<div id="bug">

    <form action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="POST">

        <label>Choose your bug:</label><br />

        <select name="bug">

<?php

// Lists the options from the array 'bugs' (bugs.txt)
foreach ($bugs as $key => $value)
{

   $bug = explode(",", trim($value));

   // Debugging
   // echo "key: " . $key;
   // echo " value: " . $bug[0];
   // echo " filename: " . $bug[1] . "<br />";

   echo "<option value='$key'>$bug[0]</option>";

}

?>


        </select>

        <button type="submit" name="form_bug" value="submit">Hack</button>

    </form>

</div>

</body>

</html>