@php
global $score;
global $row;
global $name_master;
global $EI_AG;
global $EI_SP;
global $EI_CC;
global $EI_NA;
global $EI_CL;
global $EI_P;
global $EI_K;
global $EI;

global $AX_NA;
global $AX_TG;
global $AX_TCH;
global $AX_WC;
global $AX_EO;
global $AX_LC;
global $AX_GL;
global $AX_CL;
global $AX_K;
global $AX;

global $CX_NA;
global $CX_TG;
global $CX_TCH;
global $CX_WC;
global $CX_EO;
global $CX_LC;
global $CX_GL;
global $CX_CL;
global $CX_K;
global $CX_PL;
global $CX;

global $HX_BU;
global $HX_AB;
global $HX_HG;
global $HX_FC;
global $HX_NC;
global $HX;

global $FC_AX;
global $FC_CX;
global $FC_CP;
global $FC_AG;
global $FC_CB;
global $FC_baseline;
global $FC;

global $DG_GB ;
global $DG_TCH ;
global $DG_BU ;
global $DG_PX ;
global $DG_CP ;
global $DG_HMR ;
global $DG_AG ;
global $DG_UA ;
global $DG_TG ;
global $DG_GL ;
global $DG_CL ;
global $DG ;

global $PX_P ;
global $PX_CH ;
global $PX_BU ;
global $PX_AB ;
global $PX_GB ;
global $PX_CT ;
global $PX_GO ;
global $PX_GP ;
global $PX_MG ;
global $PX;

global $LX_GO ;
global $LX_GP ;
global $LX_MG ;
global $LX_PX ;
global $LX_HX ;
global $LX_TCH ;
global $LX_AB ;
global $LX_BU ;
global $LX_BT ;
global $LX_BD ;
global $LX;

global $ASS_SP ;
global $ASS_NA ;
global $ASS_AX ;
global $ASS_GL ;
global $ASS_BU ;
global $ASS_CX ;
global $ASS;

global $HMR_AB ;
global $HMR_BT ;
global $HMR_UA ;
global $HMR_GB ;
global $HMR_LC ;
global $HMR_MN ;
global $HMR_LCMN ;
global $HMR_EO ;
global $HMR_BU ;
global $HMR_MC ;
global $HMR_LX ;
global $HMR_TCH ;
global $HMR_HD ;
global $HMR_TG ;
global $HMR ;

global $HI_AX ;
global $HI_CX ;
global $HI_FC ;
global $HI_HX ;
global $HI_LX ;
global $HI_ASS ;
global $HI_AVSCR ;
global $HI_AVP_N ;
global $HI_TCH ;
global $HI;

global $AX2_NA ;
global $AX2_TG ;
global $AX2_TCH ;
global $AX2_WC ;
global $AX2_EO ;
global $AX2_LC ;
global $AX2_GL ;
global $AX2_CL ;
global $AX2_K ;
global $AX2 ;

global $CX2_NA ;

global $CX2_TG ;
global $CX2_TCH ;
global $CX2_WC ;
global $CX2_EO ;
global $CX2_LC ;
global $CX2_GL ;
global $CX2_CL ;
global $CX2_K ;
global $CX2_PL ;
global $CX2 ;

global $HMR2_AB ;
global $HMR2_BT ;
global $HMR2_UA ;
global $HMR2_GB ;
global $HMR2_LC ;
global $HMR2_MN ;
global $HMR2_LCMN ;
global $HMR2_EO ;
global $HMR2_BU ;
global $HMR2_MC ;
global $HMR2_LX ;
global $HMR2_TCH ;
global $HMR2_HD ;
global $HMR2_TG ;
global $HMR2 ;

global $INF_GB ;
global $INF_FMG ;
global $INF_BBX ;
global $INF_HMR2 ;
global $INF_INS ;
global $INF_GO ;
global $INF_GP ;
global $INF_MG ;
global $INF_baseline ;
global $INF  ;

global $GI_GB ;
global $GI_CP ;
global $GI_UA ;
global $GI_TG ;
global $GI_CL ;
global $GI_LC ;
global $GI_MN ;
global $GI_baseline ;
global $GI ;

global $INS_GL ;
global $INS_TG ;
global $INS_HD ;
global $MCH_TCH_CH;
global $INS_MCH ;
global $INS_GBPX ;
global $INS_Baseline ;
global $INS_TGHD ;
global $INS ;

global $CVR2_INS;
global $CVR2_FMG;
global $CVR2_INF;
global $CVR2_Baseline;
global $CVR2;

global $BBX_EI;
global $MCH;
global $MCH_TCH_CH;
global $BBX_FC;
global $BBX_TG;
global $BBX_GL;
global $BBX_HMR2;
global $BBX_HD;
global $GBPX;
global $BBX_NC;
global $BBX;

global $FMG_CX2;
global $FMG_AX2;
global $FMG_AG;
global $FMG_CA;
global $FMG_P;
global $FMG_CA_P;
global $FMG_AB;
global $FMG;

global $AVSCR;
global $AVP_N;

global $TCH;
global $LH;
global $TGHD;

    session_start();
    error_reporting(E_ERROR | E_PARSE);

    $dbhost =  env("DB_HOST");
    $dbuser = env("DB_USERNAME");
    $dbpass = env("DB_PASSWORD");
    $dbname = env("DB_DATABASE");
    $lnk = mysqli_connect($dbhost, $dbuser, $dbpass);
    $db = mysqli_select_db($lnk, $dbname);
    $the_year = date('Y');
    $the_month = date('m');
    $the_day = date('d');
    $client_id = $_GET['client_id'];
    $test_id = $_GET['test_id'];


    // $client_query = mysqli_query($lnk, "SELECT first_name,mi,last_name,age,sex FROM hq_patients WHERE id = $client_id");
    // $client_results = mysqli_fetch_array($client_query);
    $client_results = mysqli_fetch_array(mysqli_query($lnk, "SELECT first_name, mi, last_name, age, sex FROM hq_patients WHERE id = $client_id"));
    $data_results = mysqli_fetch_array(mysqli_query($lnk, "SELECT * FROM hq_tests WHERE client_key = $client_id AND id = $test_id"));
    $missing_data_results = mysqli_fetch_array(mysqli_query($lnk,"SELECT * FROM missing_data WHERE id = $test_id"));

    // fetch the data again
    $clinician_id = $data_results['clinician_key'];
    $clinician_results = mysqli_fetch_array(mysqli_query($lnk, "SELECT first_name,last_name,degree,full_test FROM hq_clinicians WHERE id = $data_results[clinician_key]"));
    $test_date = date('F j, Y', $data_results['test_date']);
    //DISPLAY SCORE HEADERS
    //session_register("username");
    //session_register("password");
    //session_register("id");

    //echo "<p>User ID = " . $_SESSION['id'] . "</p>";
    //echo "<p>User Type = " . $_SESSION['usertype'] . "</p>";

    /********************************************************\
@ HEALTH EQUATIONS ONLINE SYSTEM                         @
@ analysis.php                                           @
@ Created 01/28/02                                       @
@ Last Updated 10/22/2002                                @
@ Copyright 2003 Health Equations,                       @
@ All rights reserved.                                   @
\********************************************************/

    //*\\ CHECK FOR USERNAME LOGGED IN

    $left_blank = '<FONT color=#ff0080><b>Data not required but please double-check.</b></font>';
    $out_of_range = '<FONT color=#ff0080><b>OUT OF RANGE! Please double-check.</b></font>';
    $not_available = 'N/A';
    $is_missing_data = false; //set to true only if one or more lab results are not available
    $months = ['Shim', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    $font = "font FACE=\"Verdana, Arial, Helvetica, sans-serif\"";

    //*\\HEADER

@endphp
@include('user.ic.lookup_components')
@include('user.ic.calculate_scores')
@include('user.ic.average_score')
@include('user.ic.average_plus_minus')
@include('user.ic.calculate_equations')

{{-- <html>

<head>
    <title>Health Equations Online ®</title>
    <link rel="stylesheet" type="text/css" media="all" href="plot.css">
    <META HTTP-EQUIV="EXPIRES" CONTENT="0">
    <script LANGUAGE="JavaScript">
        // <!--
        function MM_openBrWindow(theURL, winName, features) { //v2.0
            window.open(theURL, winName, features);
        }
        // -->
    </script>

    <SCRIPT>
        /*
    Check required form elements script-
    By JavaScript Kit (http://javascriptkit.com)
    Over 200+ free scripts here!
    */

        function checkrequired(which) {
            var pass = true;
            if (document.images) {
                for (i = 0; i < which.length; i++) {
                    var tempobj = which.elements[i];
                    if (tempobj.name.substring(0, 3) == "req") {
                        if (((tempobj.type == "text" || tempobj.type == "textarea") && tempobj.value == '') || (tempobj.type
                                .toString().charAt(0) == "s" && tempobj.selectedIndex == -1)) {
                            pass = false;
                            break;
                        }
                    }
                }
            }
            if (!pass) {
                alert("One or more of the required elements are not completed. Please complete them, then submit again!");
                return false;
            } else
                return true;
        }

        /*******************************************************************************/
        var xmlhttp;

        /*
         *  Display the lab reults entry form for the country selected by the clinician.
         *  This is an AJAX function that issues a GET request.
         */
        function displayLabResultsEntryForm(country, client_id, clinician_id) {
            xmlhttp = GetXmlHttpObject();
            if (xmlhttp == null) {
                alert("Browser does not support xml-http");
                return;
            }
            var url = "getLabResultsEntryForm.php";
            url = url + "?country=" + country;
            url = url + "&sid=" + Math.random();
            url = url + "&client_id=" + client_id;
            url = url + "&clinician_id=" + clinician_id;
            xmlhttp.onreadystatechange = stateChanged;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);
        }

        /*
         *  Complements the displayLabResultsEntryForm() function by actually rendering
         *  the returned markup in the div element with id = "labResultsEntryForm"
         */
        function stateChanged() {
            if (xmlhttp.readyState == 4) {
                document.getElementById("labResultsEntryForm").innerHTML = xmlhttp.responseText;
            }
        }

        /*
         *  Helper function for displayLabResultsEntryForm().
         */
        function GetXmlHttpObject() {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                return new XMLHttpRequest();
            }
            if (window.ActiveXObject) {
                // code for IE6, IE5
                return new ActiveXObject("Microsoft.XMLHTTP");
            }
            return null;
        }
    </SCRIPT>

</head> --}}

@php
    echo '
    <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-body px-0 pb-2">

      <table class="table col-md-12"  CELLSPACING="0" CELLPADDING="5" BORDERCOLOR="#333333">
        <tr BGCOLOR=\"#f4c24e\" STYLE="background:url(http://healthequations.com/gradient.gif) repeat 0 70%" VALIGN="MIDDLE" ALIGN="CENTER">
          <td class=\"border border-dark\" COLSPAN="2" ALIGN="CENTER">
            <font SIZE="+2" FACE="Verdana, Arial, sans serif" COLOR="#000000">Health Equations Online <font SIZE="2">®</font></font>
          </td>
        </tr>';

    $c1 = "<tr>
             <td class=\"border border-dark\" COLSPAN=\"2\"><$font SIZE=\"1\">©
               1993-$the_year Health Equations. All Rights Reserved.
               </font></td>
           </tr>";

    $c2 = "<$font SIZE=\"1\">©
               1993-$the_year Health Equations.<br>All Rights Reserved.<br>
               </font>";

        $footer = "  </table>
                     </div>
                    </div>
                </div>
            </div>
         ";

    //*\\ WRITE TEST DATA RECORD

//*\\ PERFORM EQUATION CALCULATIONS AND DISPLAY RESULTS
// if ($_REQUEST['funk'] == "view_test") {
// GETTING DATA
// $client_id = $_REQUEST['client_id'];

// $test_id = $_REQUEST['test_id'];

// //GET INITIAL TEST DATA
//   $client_query = mysqli_query($lnk, "SELECT first_name,mi,last_name,age,sex FROM hq_patients WHERE id=$client_id");
//   $client_results = mysqli_fetch_array($client_query);
//   $data_query = mysqli_query($lnk, "SELECT * FROM hq_tests WHERE client_key=$client_id AND id=$test_id");
//   $data_results = mysqli_fetch_array($data_query);
//   $missing_data_query=mysqli_query($lnk,"SELECT * FROM missing_data WHERE 'id=$test_id'");
//   $missing_data_results=mysqli_fetch_array($missing_data_query);
// //GET INITIAL TEST DATA

// // fetch the data again
//   $data_query = mysqli_query($lnk, "SELECT * FROM hq_tests WHERE client_key = $client_id AND id = $test_id");
//   $data_results=mysqli_fetch_array($data_query);
// $clinician_id = $data_results['clinician_key'];

// $clinician_query = mysqli_query($lnk,"SELECT first_name,last_name,degree,full_test FROM hq_clinicians WHERE id=$data_results[clinician_key]");
// $clinician_results = mysqli_fetch_array($clinician_query);
// $test_date = date("F j, Y",$data_results['test_date']);
//   //DISPLAY SCORE HEADERS

// 1st tabel
//*\\ WRITE TEST DATA RECORD
if (($_REQUEST['funk'] == "insert_test_data") && (!$_REQUEST['doubled'])) {

  extract($_POST);

  //FIRST -- CHECK FOR ADEQUATE (required) DATA

/*
 $NA = $reqNA ;
 $K = $reqK ;
 $CL = $reqCL ;
 $GL = $reqGL ;
 $CA = $reqCA ;
 $P = $reqP ;
 $BU = $reqBU ;
 $CT = $reqCT ;
 $UA = $reqUA ;
 $BT = $reqBT ;
 $GO = $reqGO ;
 $GP = $reqGP ;
 $AP = $reqAP ;
 $TP = $reqTP ;
 $AB = $reqAB ;
 $TG = $reqTG ;
 $CH = $reqCH ;
 $HD = $reqHD ;
 $CO = $reqCO ;
 $HG = $reqHG ;
 $HT = $reqHT ;
 $RBC = $reqRBC ;
 $MC = $reqMC ;
 $WC = $reqWC ;
 $NP = $reqNP ;
 $LC = $reqLC ;
 $MN = $reqMN ;
 $EO = $reqEO ;

*/
  //SECOND -- DOUBLE CHECK VALUES
    echo "
        <tr>
          <td class=\"border border-dark\">
            <$font SIZE=\"2\"><b>Current Date:</b> $this_date<br>
          <b>Test for:</b> $patient</font></td>
        <td class=\"border border-dark\" ALIGN=\"left\">
          <$font SIZE=\"2\"><b>Clinician: </b>$doc</font>
        </td>
  </tr>
  <tr>
        <td class=\"border border-dark\" COLSPAN=\"2\">
          <form METHOD=\"post\" ACTION=\"$PHP_SELF\">
                <table  class=\"table border-primary col-md-12\" BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"4\">
                  <tr>
                    <td class=\"border border-dark\" width=\"150\"> </td>
                    <td class=\"border border-dark\" width=\"150\"> </td>
                    <td class=\"border border-dark\" width=\"180\"> </td>
                    <td class=\"border border-dark\" width=\"140\"> </td>
                  </tr>
                  <tr>
                    <td class=\"border border-dark\" colspan=\"2\" WIDTH=\"300\"><$font SIZE=\"2\" color=\"#663399\"><b><br>PLEASE DOUBLE-CHECK TEST DATE</b></font></td>
                    <td class=\"border border-dark\" colspan=\"2\" WIDTH=\"320\"><$font SIZE=\"2\">
                      <select name=\"TestMonth\">\n";
                      for ($i = 1; $i <= 9; $i++) {
		        echo " <option value=\"0$i\"";
		          if ($TestMonth == $i) { echo " selected"; }
		        echo ">$months[$i]\n";
	              }
	              for ($i = 10; $i <= 12; $i++) {
		        echo " <option value=\"$i\"";
		          if ($TestMonth == $i) { echo " selected"; }
		        echo ">$months[$i]\n";
	              }
	        echo "</select>\n";

 	        echo "<select name=\"TestDay\">\n";
	              for ($i = 1; $i <= 31; $i++) {
		        echo " <option value=\"$i\"";
		          if ($TestDay == $i) { echo " selected"; }
		        echo ">$i\n";
	              }
 	        echo "</select>\n";

	        echo "<select name=\"TestYear\">\n";
	          for ($i = "1995"; $i <= $the_year; $i++) {
		    echo " <option value=\"$i\"";
		          if ($TestYear == $i) { echo " selected"; }
		        echo ">$i\n";
	          }
	        echo "</select>\n
	      			</td>
                  </tr>
                  <tr>
                    <td class=\"border border-dark\" colspan=\"4\"><hr size=\"1\" noshade></td>
                  </tr>";
//                  echo "<tr>
//                        <td class=\"border border-dark\" colspan=\"2\" WIDTH=\"300\"><$font SIZE=\"2\" color=\"#663399\"><b>Please be sure this box is checked if you
//                          are entering Canadian values</b></font></td>
//                        <td class=\"border border-dark\" colspan=\"2\" WIDTH=\"320\"><$font SIZE=\"2\">
//                          <input TYPE=\"checkbox\" NAME=\"canadian\" VALUE=\"YES\"";
//		          if ($canadian == 'YES') { echo " checked"; }
//		        echo "></font></td>
//                 </tr>
//                  <tr>
//                    <td class=\"border border-dark\" colspan=\"4\"><hr size=\"1\" noshade></td>
//                  </tr>";
            echo "<tr>
                        <td class=\"border border-dark\" colspan=\"2\" WIDTH=\"300\"> </td>
                        <td class=\"border border-dark\" colspan=\"2\" WIDTH=\"320\" align=\"right\">
                          <$font SIZE=\"2\"><b>Health Equations range ($country)</b></font></td>
                  </tr>";

            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Glucose</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($GL == NULL || strlen($GL) == 0){
							echo "<input TYPE=\"text\" NAME=\"GL\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $GL_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"GL\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$GL\"> $GL_units </font></td>";
            			    if (($GL < $GL_low) || ($GL > $GL_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                            else 
                        		echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						echo "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$GL_low - $GL_high</font></td></tr>";
            
			echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Uric Acid</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($UA == NULL || strlen($UA) == 0){
							echo "<input TYPE=\"text\" NAME=\"UA\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $UA_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"UA\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$UA\"> $UA_units </font></td>";
                          if (($UA < $UA_low) || ($UA > $UA_high)) 
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          else 
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
            			echo "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$UA_low - $UA_high</font></td></tr>";
			
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">BUN</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($BU == NULL || strlen($BU) == 0){
							echo "<input TYPE=\"text\" NAME=\"BU\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $BU_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"BU\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$BU\"> $BU_units </font></td>";
                          	if (($BU < $BU_low) || ($BU > $BU_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else 
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            			echo "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$BU_low - $BU_high</font></td></tr>";


            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Creatinine</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($CT == NULL || strlen($CT) == 0){
							echo "<input TYPE=\"text\" NAME=\"CT\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $CT_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"CT\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$CT\"> $CT_units </font></td>";
						  	if (($CT < $CT_low) || ($CT > $CT_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$CT_low - $CT_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Sodium</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($NA == NULL || strlen($NA) == 0){
							echo "<input TYPE=\"text\" NAME=\"NA\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $NA_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"NA\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$NA\"> $NA_units </font></td>";
							if (($NA < $NA_low) || ($NA > $NA_high)) {
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                            }else{
                                echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                            }
                            	
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$NA_low - $NA_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Potassium</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($K == NULL || strlen($K) == 0){
							echo "<input TYPE=\"text\" NAME=\"K\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $K_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"K\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$K\"> $K_units </font></td>";
						    if (($K < $K_low) || ($K > $K_high))
                        	    echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$K_low - $K_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Chloride</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($CL == NULL || strlen($CL) == 0){
							echo "<input TYPE=\"text\" NAME=\"CL\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $CL_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"CL\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$CL\"> $CL_units </font></td>";
						    if (($CL < $CL_low) || ($CL > $CL_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$CL_low - $CL_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">CO2(Bicarbonate)</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($CO == NULL || strlen($CO) == 0){
							echo "<input TYPE=\"text\" NAME=\"CO\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $CO_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"CO\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$CO\"> $CO_units </font></td>";
						    if (($CO < $CO_low) || ($CO > $CO_high))
                         	   echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$CO_low - $CO_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Calcium</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($CA == NULL || strlen($CA) == 0){
							echo "<input TYPE=\"text\" NAME=\"CA\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $CA_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"CA\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$CA\"> $CA_units </font></td>";
						    if (($CA < $CA_low) || ($CA > $CA_high)){
                                echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                            }else {
                                echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                            }
                            	
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$CA_low - $CA_high</font></td></tr>";
            
            
            echo "
                  <tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Phosphorus</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($P == NULL || strlen($P) == 0){
							echo "<input TYPE=\"text\" NAME=\"P\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $P_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"P\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$P\"> $P_units </font></td>";
						    if (($P < $P_low) || ($P > $P_high)){
                                echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                            }else {
                                echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                            }
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$P_low - $P_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Protein</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($TP == NULL || strlen($TP) == 0){
							echo "<input TYPE=\"text\" NAME=\"TP\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $TP_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"TP\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$TP\"> $TP_units </font></td>";
						    if (($TP < $TP_low) || ($TP > $TP_high)) {
                                echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                            }else{
                                echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                            }
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$TP_low - $TP_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Albumin</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($AB == NULL || strlen($AB) == 0){
							echo "<input TYPE=\"text\" NAME=\"AB\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $AB_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"AB\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$AB\"> $AB_units </font></td>";
						    if (($AB < $AB_low) || ($AB > $AB_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$AB_low - $AB_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Bilirubin, Total</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($BT == NULL || strlen($BT) == 0){
							echo "<input TYPE=\"text\" NAME=\"BT\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $BT_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"BT\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$BT\"> $BT_units </font></td>";
						    if (($BT < $BT_low) || ($BT > $BT_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$BT_low - $BT_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Bilirubin, Direct</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($BD == NULL || strlen($BD) == 0){
							echo "<input TYPE=\"text\" NAME=\"BD\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $BD_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"BD\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$BD\"> $BD_units </font></td>";
                          	if (($BD < $BD_low) || ($BD > $BD_high)) {
                                echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                            }else{
                                echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                            }
                            	
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$BD_low - $BD_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Alkaline Phosphatase</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($AP == NULL || strlen($AP) == 0){
							echo "<input TYPE=\"text\" NAME=\"AP\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $AP_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"AP\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$AP\"> $AP_units </font></td>";
                            if (($AP < $AP_low) || ($AP > $AP_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$AP_low - $AP_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">LDH</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($LD == NULL || strlen($LD) == 0){
							echo "<input TYPE=\"text\" NAME=\"LD\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $LD_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"LD\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$LD\"> $LD_units </font></td>";
                            if (($LD < $LD_low) || ($LD > $LD_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                       }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$LD_low - $LD_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">SGOT (AST)</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($GO == NULL || strlen($GO) == 0){
							echo "<input TYPE=\"text\" NAME=\"GO\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $GO_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"GO\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$GO\"> $GO_units </font></td>";
                            if (($GO < $GO_low) || ($GO > $GO_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
	                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$GO_low - $GO_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">SGPT (ALT)</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($GP == NULL || strlen($GP) == 0){
							echo "<input TYPE=\"text\" NAME=\"GP\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $GP_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"GP\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$GP\"> $GP_units </font></td>";
                            if (($GP < $GP_low) || ($GP > $GP_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$GP_low - $GP_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">GGT</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($MG == NULL || strlen($MG) == 0){
							echo "<input TYPE=\"text\" NAME=\"MG\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $MG_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"MG\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$MG\"> $MG_units </font></td>";
                            if (($MG < $MG_low) || ($MG > $MG_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$MG_low - $MG_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Cholesterol</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($CH == NULL || strlen($CH) == 0){
							echo "<input TYPE=\"text\" NAME=\"CH\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $CH_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"CH\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$CH\"> $CH_units </font></td>";
							if (($CH < $CH_low) || ($CH > $CH_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$CH_low - $CH_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Triglycerides</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($TG == NULL || strlen($TG) == 0){
							echo "<input TYPE=\"text\" NAME=\"TG\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $TG_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"TG\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$TG\"> $TG_units </font></td>";
                            if (($TG < $TG_low) || ($TG > $TG_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$TG_low - $TG_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">HDL Cholesterol</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($HD == NULL || strlen($HD) == 0){
							echo "<input TYPE=\"text\" NAME=\"HD\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $HD_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"HD\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$HD\"> $HD_units </font></td>";
                            if (($HD < $HD_low) || ($HD > $HD_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$HD_low - $HD_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Iron</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($FE == NULL || strlen($FE) == 0){
							echo "<input TYPE=\"text\" NAME=\"FE\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $FE_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"FE\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$FE\"> $FE_units </font></td>";
                         	if (($FE < $FE_low) || ($FE > $FE_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$FE_low - $FE_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">WBC</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($WC == NULL || strlen($WC) == 0){
							echo "<input TYPE=\"text\" NAME=\"WC\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $WC_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"WC\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$WC\"> $WC_units </font></td>";
                            if (($WC < $WC_low) || ($WC > $WC_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else 
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$WC_low - $WC_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">RBC</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($RBC == NULL || strlen($RBC) == 0){
							echo "<input TYPE=\"text\" NAME=\"RBC\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $RBC_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"RBC\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$RBC\"> $RBC_units </font></td>";
                            if (($RBC < $RBC_low) || ($RBC > $RBC_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$RBC_low - $RBC_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Hemoglobin</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($HG == NULL || strlen($HG) == 0){
							echo "<input TYPE=\"text\" NAME=\"HG\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $HG_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"HG\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$HG\"> $HG_units </font></td>";
                            if (($HG < $HG_low) || ($HG > $HG_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$HG_low - $HG_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">Hematocrit</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($HT == NULL || strlen($HT) == 0){
							echo "<input TYPE=\"text\" NAME=\"HT\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $HT_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"HT\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$HT\"> $HT_units </font></td>";
                            if (($HT < $HT_low) || ($HT > $HT_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$HT_low - $HT_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">MCV</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($MC == NULL || strlen($MC) == 0){
							echo "<input TYPE=\"text\" NAME=\"MC\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $MC_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"MC\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$MC\"> $MC_units </font></td>";
                            if (($MC < $MC_low) || ($MC > $MC_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$MC_low - $MC_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">MCH</font></td>
                        <td class=\"border border-dark\" WIDTH=\"150\"><$font SIZE=\"2\">";
						if($MCH == NULL || strlen($MCH) == 0){
							echo "<input TYPE=\"text\" NAME=\"MCH\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $MCH_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"MCH\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$MCH\"> $MCH_units </font></td>";
                            if (($MCH < $MCH_low) || ($MCH > $MCH_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$MCH_low - $MCH_high</font></td></tr>";
            
            
            echo "<tr>
                    <td class=\"border border-dark\" colspan=\"4\" class=\"col-md-12\"><hr size=\"1\" noshade></td>
                  </tr>";


            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Platelets</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($PL == NULL || strlen($PL) == 0){
							echo "<input TYPE=\"text\" NAME=\"PL\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $PL_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"PL\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$PL\"> $PL_units </font></td>";
                            if (($PL < $PL_low) || ($PL > $PL_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$PL_low - $PL_high</font></td></tr>";
            
            
            echo "<tr>
                    <td class=\"border border-dark\" colspan=\"4\" width=\"620\"><hr size=\"1\" noshade></td>
                  </tr>
                  <tr>
                        <td class=\"border border-dark\" colspan=\"2\" WIDTH=\"300\"><$font SIZE=\"2\" color=\"#663399\"><b>Please check this box if you
                          are<br>entering absolute values for the following five fields:</b></font></td>
                        <td class=\"border border-dark\" colspan=\"2\" WIDTH=\"320\"><$font SIZE=\"2\">
                          <input TYPE=\"checkbox\" NAME=\"absolute\" VALUE=\"YES\"";
		          if ($absolute == 'YES') { echo " checked"; }
		        echo "></font></td>
                  </tr>
                  <tr>
                    <td class=\"border border-dark\" colspan=\"4\" width=\"620\"><hr size=\"1\" noshade></td>
		        </tr>";




  if($absolute == 'YES') {
						      //note that the units being displayed are now $WC_units

						      //translate low and high ranges read from the database from percentages
						      //to real values based on the actual white blood cell count
						      $NP_low_abs = 	round((float)$NP_low 	/ 100.0 * (float)$WC_mid, 2);
						      $NP_high_abs = 	round((float)$NP_high	/ 100.0 * (float)$WC_mid, 2);
						      $LC_low_abs = 	round((float)$LC_low 	/ 100.0 * (float)$WC_mid, 2);
						      $LC_high_abs = 	round((float)$LC_high 	/ 100.0 * (float)$WC_mid, 2);
						      $MN_low_abs = 	round((float)$MN_low 	/ 100.0 * (float)$WC_mid, 2);
						      $MN_high_abs = 	round((float)$MN_high	/ 100.0 * (float)$WC_mid, 2);
						      $EO_low_abs = 	round((float)$EO_low 	/ 100.0 * (float)$WC_mid, 2);
						      $EO_high_abs = 	round((float)$EO_high 	/ 100.0 * (float)$WC_mid, 2);
						      $BS_low_abs = 	round((float)$BS_low 	/ 100.0 * (float)$WC_mid, 2);
						      $BS_high_abs = 	round((float)$BS_high 	/ 100.0 * (float)$WC_mid, 2);

		     		echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Neutrophils</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($NP == NULL || strlen($NP) == 0){
							echo "<input TYPE=\"text\" NAME=\"NP\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $WC_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {

									echo "<input TYPE=\"text\" NAME=\"NP\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$NP\"> $WC_units </font></td>";
                            if (($NP < $NP_low_abs) || ($NP > $NP_high_abs))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";

						}
            echo "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$NP_low_abs - $NP_high_abs</font></td></tr>";
						  

            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Lymphocytes</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($LC == NULL || strlen($LC) == 0){
							echo "<input TYPE=\"text\" NAME=\"LC\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $WC_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"LC\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$LC\"> $WC_units </font></td>";
                            if (($LC < $LC_low_abs) || ($LC > $LC_high_abs))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$LC_low_abs - $LC_high_abs</font></td></tr>";




            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Monocytes</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($MN == NULL || strlen($MN) == 0){
							echo "<input TYPE=\"text\" NAME=\"MN\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $WC_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"MN\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$MN\"> $WC_units </font></td>";
                            if (($MN < $MN_low_abs) || ($MN > $MN_high_abs))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                          	    echo "<td class=\"border border-dark\" WIDTH=\"130\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$MN_low_abs - $MN_high_abs</font></td></tr>";
            

            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Eosinophils</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($EO == NULL || strlen($EO) == 0){
							echo "<input TYPE=\"text\" NAME=\"EO\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $WC_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"EO\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$EO\"> $WC_units </font></td>";
                            if (($EO < $EO_low_abs) || ($EO > $EO_high_abs))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$EO_low_abs - $EO_high_abs</font></td></tr>";



            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Basophils</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($BS == NULL || strlen($BS) == 0){
							echo "<input TYPE=\"text\" NAME=\"BS\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $WC_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"BS\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$BS\"> $WC_units </font></td>";
                            if (($BS < $BS_low_abs) || ($BS > $BS_high_abs))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$BS_low_abs - $BS_high_abs</font></td></tr>";

	}
	else {
		     echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Neutrophils</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($NP == NULL || strlen($NP) == 0){
							echo "<input TYPE=\"text\" NAME=\"NP\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $NP_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"NP\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$NP\"> $NP_units </font></td>";
                            if (($NP < $NP_low) || ($NP > $NP_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$NP_low - $NP_high</font></td></tr>";
            



            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Lymphocytes</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($LC == NULL || strlen($LC) == 0){
							echo "<input TYPE=\"text\" NAME=\"LC\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $LC_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"LC\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$LC\"> $LC_units </font></td>";
                            if (($LC < $LC_low) || ($LC > $LC_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$LC_low - $LC_high</font></td></tr>";


            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Monocytes</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($MN == NULL || strlen($MN) == 0){
							echo "<input TYPE=\"text\" NAME=\"MN\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $MN_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"MN\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$MN\"> $MN_units </font></td>";
                            if (($MN < $MN_low) || ($MN > $MN_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                          	    echo "<td class=\"border border-dark\" WIDTH=\"130\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$MN_low - $MN_high</font></td></tr>";
            

            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Eosinophils</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($EO == NULL || strlen($EO) == 0){
							echo "<input TYPE=\"text\" NAME=\"EO\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $EO_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"EO\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$EO\"> $EO_units </font></td>";
                            if (($EO < $EO_low) || ($EO > $EO_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$EO_low - $EO_high</font></td></tr>";


            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Basophils</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($BS == NULL || strlen($BS) == 0){
							echo "<input TYPE=\"text\" NAME=\"BS\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $BS_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"BS\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$BS\"> $BS_units </font></td>";
                            if (($BS < $BS_low) || ($BS > $BS_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$BS_low - $BS_high</font></td></tr>";




  }





/*
		     echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Neutrophils</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($NP == NULL || strlen($NP) == 0){
							echo "<input TYPE=\"text\" NAME=\"NP\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $NP_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"NP\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$NP\"> $NP_units </font></td>";
                            if (($NP < $NP_low) || ($NP > $NP_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$NP_low - $NP_high</font></td></tr>";
          
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Lymphocytes</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($LC == NULL || strlen($LC) == 0){
							echo "<input TYPE=\"text\" NAME=\"LC\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $LC_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"LC\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$LC\"> $LC_units </font></td>";
                            if (($LC < $LC_low) || ($LC > $LC_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$LC_low - $LC_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Monocytes</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($MN == NULL || strlen($MN) == 0){
							echo "<input TYPE=\"text\" NAME=\"MN\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $MN_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"MN\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$MN\"> $MN_units </font></td>";
                            if (($MN < $MN_low) || ($MN > $MN_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                          	    echo "<td class=\"border border-dark\" WIDTH=\"130\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$MN_low - $MN_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Eosinophils</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($EO == NULL || strlen($EO) == 0){
							echo "<input TYPE=\"text\" NAME=\"EO\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $EO_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"EO\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$EO\"> $EO_units </font></td>";
                            if (($EO < $EO_low) || ($EO > $EO_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$EO_low - $EO_high</font></td></tr>";
            
            
            echo "<tr>
                        <td class=\"border border-dark\" WIDTH=\"120\"><$font SIZE=\"2\">Basophils</font></td>
                        <td class=\"border border-dark\" WIDTH=\"230\"><$font SIZE=\"2\">";
						if($BS == NULL || strlen($BS) == 0){
							echo "<input TYPE=\"text\" NAME=\"BS\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$not_available\"> $BS_units </font></td>";
                            echo "<td class=\"border border-dark\" WIDTH=\"140\"> </td>";
						}
						else {
							echo "<input TYPE=\"text\" NAME=\"BS\" SIZE=\"6\" MAXLENGTH=\"6\" VALUE=\"$BS\"> $BS_units </font></td>";
                            if (($BS < $BS_low) || ($BS > $BS_high))
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"><$font SIZE=\"2\">$out_of_range</font></td>";
                          	else
                            	echo "<td class=\"border border-dark\" WIDTH=\"130\"> </td>";
                        }
            echo        "<td class=\"border border-dark\" WIDTH=\"140\" align=\"center\"><$font SIZE=\"2\">$BS_low - $BS_high</font></td></tr>";
 */ 
/*
                  <tr>
                        <td class=\"border border-dark\" colspan=\"2\" WIDTH=\"300\"><$font SIZE=\"2\" color=\"#663399\">If this is your first test on the new system, please enter your
                          promotional code here:</font></td>
                        <td class=\"border border-dark\" colspan=\"2\" WIDTH=\"320\"><$font SIZE=\"2\">
                          <input TYPE=\"text\" NAME=\"promo_code\" SIZE=\"24\" MAXLENGTH=\"15\"></font></td>
                  </tr>
*/
            echo "<tr>
                        <td class=\"border border-dark\" colspan=\"4\" WIDTH=\"620\" align=\"center\"><$font SIZE=\"2\">
                          <input TYPE=\"hidden\" NAME=\"funk\" VALUE=\"insert_test_data\">
                          <input TYPE=\"hidden\" NAME=\"doubled\" VALUE=\"uh_huh\">
                          <input TYPE=\"hidden\" NAME=\"country\" VALUE=\"$country\">

                          <input TYPE=\"hidden\" NAME=\"GL_mid\" VALUE=\"$GL_mid\">
                          <input TYPE=\"hidden\" NAME=\"UA_mid\" VALUE=\"$UA_mid\">
                          <input TYPE=\"hidden\" NAME=\"BU_mid\" VALUE=\"$BU_mid\">
                          <input TYPE=\"hidden\" NAME=\"CT_mid\" VALUE=\"$CT_mid\">
                          <input TYPE=\"hidden\" NAME=\"NA_mid\" VALUE=\"$NA_mid\">
                          <input TYPE=\"hidden\" NAME=\"K_mid\" VALUE=\"$K_mid\">
                          <input TYPE=\"hidden\" NAME=\"CL_mid\" VALUE=\"$CL_mid\">
                          <input TYPE=\"hidden\" NAME=\"CO_mid\" VALUE=\"$CO_mid\">
                          <input TYPE=\"hidden\" NAME=\"CA_mid\" VALUE=\"$CA_mid\">
                          <input TYPE=\"hidden\" NAME=\"P_mid\" VALUE=\"$P_mid\">
                          <input TYPE=\"hidden\" NAME=\"TP_mid\" VALUE=\"$TP_mid\">
                          <input TYPE=\"hidden\" NAME=\"AB_mid\" VALUE=\"$AB_mid\">
                          <input TYPE=\"hidden\" NAME=\"BT_mid\" VALUE=\"$BT_mid\">
                          <input TYPE=\"hidden\" NAME=\"BD_mid\" VALUE=\"$BD_mid\">
                          <input TYPE=\"hidden\" NAME=\"AP_mid\" VALUE=\"$AP_mid\">
                          <input TYPE=\"hidden\" NAME=\"LD_mid\" VALUE=\"$LD_mid\">
                          <input TYPE=\"hidden\" NAME=\"GO_mid\" VALUE=\"$GO_mid\">
                          <input TYPE=\"hidden\" NAME=\"GP_mid\" VALUE=\"$GP_mid\">
                          <input TYPE=\"hidden\" NAME=\"MG_mid\" VALUE=\"$MG_mid\">
                          <input TYPE=\"hidden\" NAME=\"CH_mid\" VALUE=\"$CH_mid\">
                          <input TYPE=\"hidden\" NAME=\"TG_mid\" VALUE=\"$TG_mid\">
                          <input TYPE=\"hidden\" NAME=\"HD_mid\" VALUE=\"$HD_mid\">
                          <input TYPE=\"hidden\" NAME=\"FE_mid\" VALUE=\"$FE_mid\">
                          <input TYPE=\"hidden\" NAME=\"WC_mid\" VALUE=\"$WC_mid\">
                          <input TYPE=\"hidden\" NAME=\"RBC_mid\" VALUE=\"$RBC_mid\">
                          <input TYPE=\"hidden\" NAME=\"HG_mid\" VALUE=\"$HG_mid\">
                          <input TYPE=\"hidden\" NAME=\"HT_mid\" VALUE=\"$HT_mid\">
                          <input TYPE=\"hidden\" NAME=\"MC_mid\" VALUE=\"$MC_mid\">
                          <input TYPE=\"hidden\" NAME=\"MCH_mid\" VALUE=\"$MCH_mid\">
                          <input TYPE=\"hidden\" NAME=\"PL_mid\" VALUE=\"$PL_mid\">
                          <input TYPE=\"hidden\" NAME=\"NP_mid\" VALUE=\"$NP_mid\">
                          <input TYPE=\"hidden\" NAME=\"LC_mid\" VALUE=\"$LC_mid\">
                          <input TYPE=\"hidden\" NAME=\"MN_mid\" VALUE=\"$MN_mid\">
                          <input TYPE=\"hidden\" NAME=\"EO_mid\" VALUE=\"$EO_mid\">
                          <input TYPE=\"hidden\" NAME=\"BS_mid\" VALUE=\"$BS_mid\">

                          <input TYPE=\"hidden\" NAME=\"client_key\" VALUE=\"$client_key\">
                          <input TYPE=\"submit\" NAME=\"Submit\" VALUE=\"Confirm Test Entries\">
                          </font></td>
                  </tr>
                </table>
          </form>
        </td>
  </tr>";
  echo "$c1<br>";

}
// 1st tabel


//FOR LYNNE'S REPORT
if ($_REQUEST['ttype'] == 'l') {
    echo "<tr>
              <td class=\"border border-dark\">
                <table  class=\"table border-primary col-md-12\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" BGCOLOR=\"#FFFFFF\">
                  <tr>
                    <td class=\"border border-dark\" colspan=\"5\"><$font size=\"+1\">Lynne's Report for $client_results[first_name] $client_results[last_name]</font><br>
                      <$font size=\"1\"><br><b>Date of Test:</b> $test_date        <b>Sex:</b> $client_results[sex]       <b>Age:</b> $data_results[age]
                      <br><b>Clinician: </b> $clinician_results[first_name] $clinician_results[last_name] $clinician_results[degree]</font></td>
                  </tr>
                  <tr>
                    <td class=\"border border-dark\" width=\"150\" align=\"left\"><$font size=\"1\"><b>Component</b></font></td>
                    <td class=\"border border-dark\" width=\"30\" align=\"left\"> </td>
                    <td class=\"border border-dark\" width=\"70\" align=\"right\"><$font size=\"1\"><b>Lab Result</b></font></td>
                    <td class=\"border border-dark\" width=\"200\" align=\"center\"><$font size=\"1\"><b>HEqs<br>Range</b></font></td>
                    <td class=\"border border-dark\" width=\"50\" align=\"right\"><$font size=\"1\"><b>HEqs<br>Score</b></font></td>
                  </tr>";
}

//FOR 'FRIENDS' REPORT
if ($_REQUEST['ttype'] == 'f') {
    echo "<tr>
              <td class=\"border border-dark\">
                <table width=\"500\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" BGCOLOR=\"#FFFFFF\">
                  <tr>
                    <td class=\"border border-dark\" colspan=\"5\"><$font size=\"+1\">Detailed Score Report for $client_results[first_name] $client_results[last_name]</font><br>
                      <$font size=\"1\"><br><b>Date of Test:</b> $test_date        <b>Sex:</b> $client_results[sex]       <b>Age:</b> $data_results[age]
                      <br><b>Clinician: </b> $clinician_results[first_name] $clinician_results[last_name] $clinician_results[degree]</font></td>
                  </tr>
                  <tr>
                    <td class=\"border border-dark\" width=\"150\" align=\"left\"><$font size=\"1\"><b>Component</b></font></td>
                    <td class=\"border border-dark\" width=\"30\" align=\"left\"> </td>
                    <td class=\"border border-dark\" width=\"70\" align=\"right\"><$font size=\"1\"><b>Lab Result</b></font></td>
                    <td class=\"border border-dark\" width=\"200\" align=\"center\"><$font size=\"1\"><b>HEqs<br>Range</b></font></td>
                    <td class=\"border border-dark\" width=\"50\" align=\"right\"><$font size=\"1\"><b>HEqs<br>Score</b></font></td>
                  </tr>";
}
//FOR CLINICIAN'S REPORT
if ($_REQUEST['ttype'] == 'c') {
    echo "<tr>
              <td class=\"border border-dark\" valign=\"top\">
                <table width=\"620\" border=\"1\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" BGCOLOR=\"#FFFFFF\">
                  <tr>
                    <td class=\"border border-dark\" width=\"380\" valign=\"top\">
                      <table width=\"380\" align=\"left\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\" BGCOLOR=\"#FFFFFF\">
                        <tr>
                          <td class=\"border border-dark\" colspan=\"4\"><$font size=\"+1\">Clinician Report: Analysis<br>$client_results[first_name] $client_results[last_name]</font><br>
                            <$font size=\"1\"><br><b>Date of Test:</b> $test_date        <b>Sex:</b> $client_results[sex]       <b>Age:</b> $data_results[age]
                            <br><b>Clinician: </b> $clinician_results[first_name] $clinician_results[last_name] $clinician_results[degree]<br></font></td>
                        </tr>
                        <tr>
                          <td class=\"border border-dark\"  align=\"left\"><$font size=\"1\"><b>Component</b></font></td>
                          <td class=\"border border-dark\" width=\"80\" align=\"right\"><$font size=\"1\"><b>Lab Result</b></font></td>
                          <td class=\"border border-dark\" width=\"150\" align=\"center\"><$font size=\"1\"><b>HEqs Range</b></font></td>
                          <td class=\"border border-dark\" width=\"50\" align=\"right\"><$font size=\"1\"><b>HEqs Score</b></font></td>
                        </tr>";
}
//PATIENT REPORT IS NOT ADDRESSED HERE BECAUSE IT DOES NOT INCLUDE THE ANALYSIS - ONLY THE SCORE PLOT
//SORT AND DISPLAY RESULTS
if ($score !== null) {
    arsort($score);
    foreach ($score as $key => $value) {
        echo $row[$key];
    }

}
//only display the missing data footer if there is missing data

if ($missing_data_results['GL'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['UA'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['BU'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['CT'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['NA'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['K'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['CL'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['CO'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['CA'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['P'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['TP'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['AB'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['BT'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['BD'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['AP'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['LD'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['GO'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['GP'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['MG'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['CH'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['TG'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['HD'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['FE'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['WC'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['RBC'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['HG'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['HT'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['MC'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['MCH'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['PL'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['NP'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['LC'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['MN'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['EO'] == 'm') {
    $is_missing_data = true;
}
if ($missing_data_results['BS'] == 'm') {
    $is_missing_data = true;
}

if ($is_missing_data && ($_REQUEST['ttype'] == 'c' || $_REQUEST['ttype'] == 'l' || $_REQUEST['ttype'] == 'f')) {
    echo "<tr><td class=\"border border-dark\" colspan=\"4\" align=\"center\"><$font size=\"1\"><b><sup>m</sup></b> Midpoint used in lieu of missing data.</font></td></tr>";
}

//CLOSE FIRST SECTION FOR LYNNE'S REPORT
if ($_REQUEST['ttype'] == 'l' || $_REQUEST['ttype'] == 'f') {
    echo "</table>
          </td>
        </tr>
       </div>
                </div>
            </div>
        </div>
        ";
}

//DISPLAY SCORES
//FOR PATIENT REPORT
if ($_REQUEST['ttype'] == 'p') {
    echo "<tr BGCOLOR=\"#cc99cc\">
            <td class=\"border border-dark\" COLSPAN=\"2\" ALIGN=\"center\" VALIGN=\"TOP\">
              <$font SIZE=\"+1\">Patient Score Plot</font>
            </td>
          </tr>
          <tr>
            <td class=\"border border-dark\" align=\"center\">
              <table width=\"635\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\">
                <tr>
                  <td class=\"border border-dark\" colspan=\"5\" width=\"635\"><$font size=\"+1\">Health Equations Score Plot: $client_results[first_name] $client_results[last_name]</font><br>
                    <$font size=\"1\"><br>Date of Test: $test_date</font><br><br><br>
                  </td>
                </tr>
                <tr>
                  <td class=\"border border-dark\" width=\"115\"> </td>
                  <td class=\"border border-dark\" width=\"520\" colspan=\"4\"><img src=\"health_range_top.jpg\" height=\"50\" width=\"520\"></td>
                </tr>\n";
    //HX
    echo "      <tr>
                  <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">Cell Hydration/Charge</font></td>\n";
    if ($HX < 0) {
        $width = abs($HX) * 2.5;
        if ($width > 250) {
            $width = 250;
            $HX_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($HX_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left-wide\"><img style=\"position:absolute; clip:rect(0px,250px,28px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($HX > 0) {
        $width = $HX * 2.5;
        if ($width > 250) {
            $width = 250;
            $HX_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "      <td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right-wide\"><img style=\"position:absolute; clip:rect(0px," .
            $width .
            "px,28px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($HX_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo '    </tr>';
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"20\"></td>
            <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
    }
    //FC
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">¹Calcium Activity</font></td>\n";
    if ($FC < 0) {
        $width = abs($FC) * 2.5;
        if ($width > 250) {
            $width = 250;
            $FC_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($FC_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left\"><img style=\"position:absolute; clip:rect(0px,250px,21px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($FC > 0) {
        $width = $FC * 2.5;
        if ($width > 250) {
            $width = 250;
            $FC_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right\"><img style=\"position:absolute; clip:rect(0px," .
            $width . "px,21px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($FC_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "    </tr>\n";
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"20\"></td>
            <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
    }
    //TCH
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">Tissue Cholesterol</font></td>\n";
    if ($TCH < -0.9) {
        $width = abs($TCH) * 2.5;
        if ($width > 250) {
            $width = 250;
            $TCH_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($TCH_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left\"><img style=\"position:absolute; clip:rect(0px,250px,21px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($TCH > 0.9) {
        $width = $TCH * 2.5;
        if ($width > 250) {
            $width = 250;
            $TCH_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right\"><img style=\"position:absolute; clip:rect(0px," .
            $width .
            "px,21px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($TCH_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "    </tr>\n";
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>";
        if ($TCH == 'n/a') {
            echo "<td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" align=\"center\" width=\"500\"><$font size=\"2\">n/a</font></td>";
        } else {
            echo "<td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"20\"></td>";
        }
        echo " <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>";
    }
    //DG
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">Digestion</font></td>\n";
    if ($DG < 0) {
        $width = abs($DG) * 2.5;
        if ($width > 250) {
            $width = 250;
            $DG_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($DG_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left\"><img style=\"position:absolute; clip:rect(0px,250px,21px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($DG > 0) {
        $width = $DG * 2.5;
        if ($width > 250) {
            $width = 250;
            $DG_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "      <td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right\"><img style=\"position:absolute; clip:rect(0px," .
            $width .
            "px,21px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($DG_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo '    </tr>';
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"20\"></td>
            <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
    }
    //LH
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">LDL/HDL Ratio</font></td>\n";
    if ($data_results[TG] > 400) {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" align=\"center\" width=\"500\"><$font size=\"2\">n/a</font></td>
            <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
    } else {
        if ($score['LH'] < 0) {
            $width = abs($score['LH']) * 2.5;
            if ($width > 250) {
                $width = 250;
                $LH_arrow = 'left';
            }
            $unwidth = 250 - $width;
            if ($LH_arrow == 'left') {
                echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
            } else {
                echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
            }
            echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left\"><img style=\"position:absolute; clip:rect(0px,250px,21px," .
                $unwidth .
                "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
        } elseif ($score['LH'] > 0) {
            $width = $score['LH'] * 2.5;
            if ($width > 250) {
                $width = 250;
                $LH_arrow = 'right';
            }
            $unwidth = 250 - $width;
            echo "<td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right\"><img style=\"position:absolute; clip:rect(0px," .
                $width .
                "px,21px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
            if ($LH_arrow == 'right') {
                echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
            } else {
                echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
            }
            echo "    </tr>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
            if ($score['LH'] == 'n/a') {
                echo "<td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\">n/a</td>";
            } else {
                echo "<td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\">a<img src=\"scoreplot_0.gif\" width=\"40\" height=\"20\"></td>";
            }
            echo "<td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
        }
    }
    //CH
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">Blood Cholesterol</font></td>\n";
    if ($score['CH'] < 0) {
        $width = abs($score['CH']) * 2.5;
        if ($width > 250) {
            $width = 250;
            $CH_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($CH_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left\"><img style=\"position:absolute; clip:rect(0px,250px,21px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($score['CH'] > 0) {
        $width = $score['CH'] * 2.5;
        if ($width > 250) {
            $width = 250;
            $CH_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right\"><img style=\"position:absolute; clip:rect(0px," .
            $width .
            "px,21px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($CH_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "    </tr>\n";
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"20\"></td>
            <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>";
    }

    //PX
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">Body Protein</font></td>\n";
    if ($PX < 0) {
        $width = abs($PX) * 2.5;
        if ($width > 250) {
            $width = 250;
            $PX_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($PX_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left\"><img style=\"position:absolute; clip:rect(0px,250px,21px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($PX > 0) {
        $width = $PX * 2.5;
        if ($width > 250) {
            $width = 250;
            $PX_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "      <td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right\"><img style=\"position:absolute; clip:rect(0px," .
            $width .
            "px,21px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($PX_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "    </tr>\n";
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"20\"></td>
            <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
    }
    //GL
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">Blood Sugar</font></td>\n";
    if ($score[GL] < 0) {
        $width = abs($score[GL]) * 2.5;
        if ($width > 250) {
            $width = 250;
            $GL_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($GL_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left\"><img style=\"position:absolute; clip:rect(0px,250px,21px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($score[GL] > 0) {
        $width = $score[GL] * 2.5;
        if ($width > 250) {
            $width = 250;
            $GL_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right\"><img style=\"position:absolute; clip:rect(0px," .
            $width .
            "px,21px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($GL_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "    </tr>\n";
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"20\"></td>
            <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
    }
    //LX
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">Liver & Gallbladder Stress</font></td>\n";
    if ($LX < 0) {
        $width = abs($LX) * 2.5;
        if ($width > 250) {
            $width = 250;
            $LX_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($LX_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left-wide\"><img style=\"position:absolute; clip:rect(0px,250px,28px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($LX > 0) {
        $width = $LX * 2.5;
        if ($width > 250) {
            $width = 250;
            $LX_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right-wide\"><img style=\"position:absolute; clip:rect(0px," .
            $width .
            "px,28px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($LX_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "    </tr>\n";
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"20\"></td>
            <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
    }
    //ASS
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">Adrenal Stress</font></td>\n";
    if ($ASS < 0) {
        $width = abs($ASS) * 2.5;
        if ($width > 250) {
            $width = 250;
            $ASS_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($ASS_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left\"><img style=\"position:absolute; clip:rect(0px,250px,21px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($ASS > 0) {
        $width = $ASS * 2.5;
        if ($width > 250) {
            $width = 250;
            $ASS_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "      <td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right\"><img style=\"position:absolute; clip:rect(0px," .
            $width .
            "px,21px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($ASS_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo '    </tr>';
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"20\"></td>
            <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
    }
    //HMR
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">Toxin Load</font></td>\n";
    if ($HMR < 0) {
        $width = abs($HMR) * 2.5;
        if ($width > 250) {
            $width = 250;
            $HMR_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($HMR_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left\"><img style=\"position:absolute; clip:rect(0px,250px,21px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($HMR > 0) {
        $width = $HMR * 2.5;
        if ($width > 250) {
            $width = 250;
            $HMR_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right\"><img style=\"position:absolute; clip:rect(0px," .
            $width .
            "px,21px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($HMR_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "    </tr>\n";
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"20\"></td>
            <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
    }
    //FRA
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">²Free Radical Activity</font></td>\n";
    if ($FRA < 0) {
        $width = abs($FRA) * 2.5;
        if ($width > 250) {
            $width = 250;
            $FRA_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($FRA_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left\"><img style=\"position:absolute; clip:rect(0px,250px,21px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($FRA > 0) {
        $width = $FRA * 2.5;
        if ($width > 250) {
            $width = 250;
            $FRA_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right\"><img style=\"position:absolute; clip:rect(0px," .
            $width .
            "px,21px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($FRA_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "    </tr>\n";
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"20\"></td>
            <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
    }
    //TGHD
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">Cardiovascular Risk</font></td>\n";

    if ($TGHD < 0) {
        $width = abs($TGHD) * 2.5;
        if ($width > 250) {
            $width = 250;
            $TGHD_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($TGHD_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left\"><img style=\"position:absolute; clip:rect(0px,250px,21px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($TGHD > 0) {
        $width = $TGHD * 2.5;
        if ($width > 250) {
            $width = 250;
            $TGHD_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right\"><img style=\"position:absolute; clip:rect(0px," .
            $width .
            "px,21px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($TGHD_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "    </tr>\n";
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>";
        if ($TGHD == '0') {
            echo "<td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"20\"></td>";
        } else {
            echo "<td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\">n/a</td>";
        }
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
    }
    //HTM Hormone Therapy Monitor ( Shows only for women over 40 years old.
    //HTM Hormone Therapy Monitor ( Shows only for all adults. 01-06-2004
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">³Anti-Free Radical Activity</font></td>\n";
    if ($AX < 0) {
        $width = abs($AX) * 2.5;
        if ($width > 250) {
            $width = 250;
            $AX_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($AX_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left-wide\"><img style=\"position:absolute; clip:rect(0px,250px,28px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($AX > 0) {
        $width = $AX * 2.5;
        if ($width > 250) {
            $width = 250;
            $AX_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right-wide\"><img style=\"position:absolute; clip:rect(0px," .
            $width .
            "px,28px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($AX_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "    </tr>\n";
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"28\"></td>
            <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
    } // end Hormone Therapy Monitor

    //HI
    echo "<tr>
            <td class=\"border border-dark\" width=\"115\" align=\"left\"><$font size=\"1\">Health Index</font></td>\n";
    if ($HI < 0) {
        $width = abs($HI) * 2.5;
        if ($width > 250) {
            $width = 250;
            $HI_arrow = 'left';
        }
        $unwidth = 250 - $width;
        if ($HI_arrow == 'left') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"left.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "      <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-left\"><img style=\"position:absolute; clip:rect(0px,250px,21px," .
            $unwidth .
            "px);\" src=\"health_range_bg_left.jpg\" ></div></td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" width=\"10\"> </td>
                </tr>\n";
    } elseif ($HI > 0) {
        $width = $HI * 2.5;
        if ($width > 250) {
            $width = 250;
            $HI_arrow = 'right';
        }
        $unwidth = 250 - $width;
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"> </td>
                  <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" width=\"250\"><div class=\"plot-right\"><img style=\"position:absolute; clip:rect(0px," .
            $width .
            "px,21px,0px);\" src=\"health_range_bg_right.jpg\" ></div></td>\n";
        if ($HI_arrow == 'right') {
            echo "    <td class=\"border border-dark\" width=\"10\"><img src=\"right.jpg\"></td>\n";
        } else {
            echo "    <td class=\"border border-dark\" width=\"10\"> </td>\n";
        }
        echo "    </tr>\n";
    } else {
        echo "<td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" bgcolor=\"#CCCCCC\" colspan=\"2\" width=\"500\" align=\"center\"><img src=\"scoreplot_0.gif\" width=\"10\" height=\"28\"></td>
            <td class=\"border border-dark\" width=\"10\"> </td>
          </tr>\n";
    }

    echo "<tr>
            <td class=\"border border-dark\" width=\"115\"> </td>
            <td class=\"border border-dark\" width=\"520\" colspan=\"4\"><img src=\"health_range_bottom.jpg\" height=\"50\" width=\"520\"></td>
          </tr>
          <tr>
            <td class=\"border border-dark\" width=\"115\"> </td>
            <td class=\"border border-dark\" width=\"10\"> </td>
            <td class=\"border border-dark\" colspan=\"2\" width=\"500\"><br>

              <form action=\"interpretations.php?funk=view_interps\" method=\"POST\">
                <table width=\"500\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#CCCCCC\">
                        <tr>
                          <td class=\"border border-dark\" align=\"center\"><br>
                            <input type=\"hidden\" name=\"client_id\" value=\"$client_id\">
                            <input type=\"hidden\" name=\"test_id\" value=\"$test_id\">
                            <input type=\"hidden\" name=\"test_date\" value=\"$test_date\">
                            <input type=\"hidden\" name=\"TCH_score\" value=\"$TCH\">
                            <input type=\"hidden\" name=\"HX_score\" value=\"$HX\">
                            <input type=\"hidden\" name=\"FC_score\" value=\"$FC\">
                            <input type=\"hidden\" name=\"TG_score\" value=\"$score[TG]\">
                            <input type=\"hidden\" name=\"CH_score\" value=\"$score[CH]\">
                            <input type=\"hidden\" name=\"LL_score\" value=\"$score[LL]\">
                            <input type=\"hidden\" name=\"LH_score\" value=\"$score[LH]\">
                            <input type=\"hidden\" name=\"DG_score\" value=\"$DG\">
                            <input type=\"hidden\" name=\"PX_score\" value=\"$PX\">
                            <input type=\"hidden\" name=\"GL_score\" value=\"$score[GL]\">
                            <input type=\"hidden\" name=\"LX_score\" value=\"$LX\">
                            <input type=\"hidden\" name=\"ASS_score\" value=\"$ASS\">
                            <input type=\"hidden\" name=\"HMR_score\" value=\"$HMR\">
                            <input type=\"hidden\" name=\"FRA_score\" value=\"$FRA\">
                            <input type=\"hidden\" name=\"TGHD_score\" value=\"$TGHD\">
                            <input type=\"hidden\" name=\"AX_score\" value=\"$AX\">
                            <input type=\"hidden\" name=\"HI_score\" value=\"$HI\">
                            <br><br>
                          </td>
                        </tr>
                        <tr>
                          <td class=\"border border-dark\" colspan=\"2\" width=\"500\">
                           <$font size=\"1\">¹Calcium Activity... aka Tissue Mineralization</font><br>
                           <$font size=\"1\">²Free Radical Activity... aka Catabolic or Inflammatory Index</font><br>
                           <$font size=\"1\">³Anti-Free Radical Activity... aka Anabolic or Anti-inflammatory Index</font>
                          </td>
                        </tr>
                      </table>
                    </form>
                  </td>
                </tr>
              </table>
            </td>
          </tr>\n";
}

if ($_REQUEST['ttype'] == 'l') {
    echo "  </td>
            </tr>
            <tr>
              <td class=\"border border-dark\" align=\"center\" colspan=\"3\"><br><br><br><br>
          <table class=\"col-md-12 px-3 py-3\" border=\"1\">
            <tr>
              <td class=\"border border-dark\" colspan=\"6\"><$font size=\"1\"><b>FOR TESTING PURPOSES: EQUATION CALCULATIONS for $client_results[first_name] $client_results[last_name]</font><br>
                <$font size=\"1\">Date of Test: $test_date<br></b></font>
              </td>
            </tr>
            <tr>
              <td class=\"border border-dark\" colspan=\"4\" align=\"right\"><$font size=\"1\"><b>Average Score:</b></font>
              </td>
              <td class=\"border border-dark\" colspan=\"2\" align=\"left\"><$font size=\"1\"><b>$AVSCR</b></font>
              </td>
            </tr>
            <tr>
              <td class=\"border border-dark\" colspan=\"4\" align=\"right\"><$font size=\"1\"><b>Average +/-:</b></font>
              </td>
              <td class=\"border border-dark\" colspan=\"2\" align=\"left\"><$font size=\"1\"><b>$AVP_N</b></font>
              </td>
            </tr>
            <tr>
              <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "EI_AG = $EI_AG<br>";
    echo "EI_SP = $EI_SP<br>";
    echo "EI_CC = $EI_CC<br>";
    echo "EI_NA = $EI_NA<br>";
    echo "EI_CL = $EI_CL<br>";
    echo "EI_P = $EI_P<br>";
    echo "EI_K = $EI_K<br>";
    echo "<b>EI is $EI</b>";
    echo "</font>
              </td>
              <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "AX_NA = $AX_NA<br>";
    echo "AX_TG = $AX_TG<br>";
    echo "AX_TCH = $AX_TCH<br>";
    if ($AX_TCH_CH == 'true') {
        echo 'USED CH VALUE<br>';
    }
    echo "AX_WC = $AX_WC<br>";
    echo "AX_EO = $AX_EO<br>";
    echo "AX_LC = $AX_LC<br>";
    echo "AX_GL = $AX_GL<br>";
    echo "AX_CL = $AX_CL<br>";
    echo "AX_K = $AX_K<br>";
    echo 'The baseline is 20.<br>';
    echo "<b>AX is $AX</b>";
    echo "</font>
              </td>
              <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "CX_NA = $CX_NA<br>";
    echo "CX_TG = $CX_TG<br>";
    echo "CX_TCH = $CX_TCH<br>";
    if ($CX_TCH_CH == 'true') {
        echo 'USED CH VALUE<br>';
    }
    echo "CX_WC = $CX_WC<br>";
    echo "CX_EO = $CX_EO<br>";
    echo "CX_LC = $CX_LC<br>";
    echo "CX_GL = $CX_GL<br>";
    echo "CX_CL = $CX_CL<br>";
    echo "CX_K = $CX_K<br>";
    echo "CX_PL = $CX_PL<br>";
    echo 'The baseline is -20.<br>';
    echo "<b>CX is $CX</b>";
    echo "</font>
              </td>
              <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "HX_BU = $HX_BU<br>";
    echo "HX_AB = $HX_AB<br>";
    echo "HX_HG = $HX_HG<br>";
    echo "HX_FC = $HX_FC<br>";
    echo "HX_NC = $HX_NC<br>";
    echo "The baseline is $EI<br>";
    echo "<b>HX is $HX</b>";
    echo "</font>
              </td>
              <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "FC_AX = $FC_AX<br>";
    echo "FC_CX = $FC_CX<br>";
    echo "FC_CP = $FC_CP<br>";
    echo "FC_AG = $FC_AG<br>";
    echo "FC_CB = $FC_CB<br>";
    echo "The baseline is $FC_baseline<br>";
    echo "<b>FC is $FC</b>";
    echo "</font>
              </td>
              <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    if ($data_results['LL'] == '' || $LL == 'n/a') {
        echo 'LL = n/a<br>';
    } else {
        echo 'LL = ' . round((float)$data_results['LL'], 0) . '<br>';
    }
    echo 'HD = ' . round((float)$data_results['HD'], 0) . '<br>';
    if ($LH == '' || $LH == 'n/a') {
        echo 'LH = n/a<br>';
    } else {
        echo 'LH = ' . round((float)$LH, 0) . '<br>';
    }
    echo 'CH = ' . round((float)$data_results['CH'], 0) . '<br>';
    if ($TCH == '' || $TCH == 'n/a') {
        echo 'TCH = n/a<br>';
        //echo  $TCH_message .  $TCH_message2;
    } else {
        echo 'TCH = ' . round((float)$TCH, 0) . '<br>';
    }
    echo "</font>
              </td>
            </tr>
            <tr>
              <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "DG_GB = $DG_GB<br>";
    echo "DG_TCH = $DG_TCH<br>";
    if ($DG_TCH_CH == 'true') {
        echo 'USED CH VALUE<br>';
    }
    echo "DG_BU = $DG_BU<br>";
    echo "DG_PX = $DG_PX<br>";
    echo "DG_CP = $DG_CP<br>";
    echo "DG_HMR = $DG_HMR<br>";
    echo "DG_AG = $DG_AG<br>";
    echo "DG_UA = $DG_UA<br>";
    echo "DG_TG = $DG_TG<br>";
    echo "DG_GL = $DG_GL<br>";
    echo "DG_CL = $DG_CL<br>";
    echo "<b>DG is $DG</b>";
    echo "</font>
              </td>
              <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "PX_P = $PX_P<br>";
    echo "PX_CH = $PX_CH<br>";
    echo "PX_BU = $PX_BU<br>";
    echo "PX_AB = $PX_AB<br>";
    echo "PX_GB = $PX_GB<br>";
    echo "PX_CT = $PX_CT<br>";
    echo "PX_GO = $PX_GO<br>";
    echo "PX_GP = $PX_GP<br>";
    echo "PX_MG = $PX_MG<br>";
    echo 'The baseline is -20.<br>';
    echo "<b>PX is $PX</b>";
    echo "</font>
              </td>
              <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "LX_GO = $LX_GO<br>";
    echo "LX_GP = $LX_GP<br>";
    echo "LX_MG = $LX_MG<br>";
    echo "LX_PX = $LX_PX<br>";
    echo "LX_HX = $LX_HX<br>";
    echo "LX_TCH = $LX_TCH<br>";
    if ($LX_TCH_CH == 'true') {
        echo 'USED CH VALUE<br>';
    }
    echo "LX_AB = $LX_AB<br>";
    echo "LX_BU = $LX_BU<br>";
    echo "LX_BT = $LX_BT<br>";
    echo "LX_BD = $LX_BD<br>";
    echo "<b>LX is $LX</b>";
    echo "</font>
              </td>
              <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "ASS_SP = $ASS_SP<br>";
    echo "ASS_NA = $ASS_NA<br>";
    echo "ASS_AX = $ASS_AX<br>";
    echo "ASS_GL = $ASS_GL<br>";
    echo "ASS_BU = $ASS_BU<br>";
    echo "ASS_CX = $ASS_CX<br>";
    echo 'The baseline is 20.<br>';
    echo "<b>ASS is $ASS</b>";
    echo "</font>
              </td>
              <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "HMR_AB = $HMR_AB<br>";
    echo "HMR_BT = $HMR_BT<br>";
    echo "HMR_UA = $HMR_UA<br>";
    echo "HMR_GB = $HMR_GB<br>";
    echo "HMR_LC = $HMR_LC<br>";
    echo "HMR_MN = $HMR_MN<br>";
    echo "HMR_LC&MN = $HMR_LCMN<br>";
    echo "HMR_EO = $HMR_EO<br>";
    echo "HMR_BU = $HMR_BU<br>";
    echo "HMR_MC = $HMR_MC<br>";
    echo "HMR_LX = $HMR_LX<br>";
    echo "HMR_TCH = $HMR_TCH<br>";
    echo "HMR_HD = $HMR_HD<br>";
    if ($HMR_TCH_CH == 'true') {
        echo 'USED CH VALUE<br>';
    }
    echo "HMR_TG = $HMR_TG<br>";
    echo "<b>HMR is $HMR</b>";
    echo "</font>
              </td>
              <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "HI_AX = $HI_AX<br>";
    echo "HI_CX = $HI_CX<br>";
    echo "HI_FC = $HI_FC<br>";
    echo "HI_HX = $HI_HX<br>";
    //      echo "HI_PX = $HI_PX<br>";
    echo "HI_LX = $HI_LX<br>";
    echo "HI_ASS = $HI_ASS<br>";
    //      echo "HI_HMR = $HI_HMR<br>";
    // dd($HI_AVSCR);
    echo "HI_AVSCR = $HI_AVSCR<br>";
    echo "HI_AVP_N = $HI_AVP_N<br>";
    //      echo "HI_LH = $HI_LH<br>";
    echo "HI_TCH = $HI_TCH<br>";
    if ($HI_TCH_CH == 'true') {
        echo 'USED CH VALUE<br>';
    }
    echo "<b>HI is $HI</b>";
    echo "</font>
          </td>
        </tr>
        <tr>
          <td class=\"border border-dark\" colspan=\"6\" align=\"center\">
            <table width=\"200\" border=\"1\">";

    //SORT SELECTED SCORES DESCENDING
    $sorter['LH'] = $score['LH'];
    $sorter['LL'] = $score['LL'];
    $sorter['HD'] = $score['HD'];
    $sorter['CH'] = $score['CH'];
    $sorter['GL'] = $score['GL'];
    $sorter['TG'] = $score['TG'];
    $sorter['TGHD'] = $TGHD;
    arsort($sorter);
    foreach ($sorter as $key => $value) {
        echo '<tr>';
        if ($key == 'TGHD') {
            echo "<td class=\"border border-dark\"  align=\"center\"><font size=\"2\"><b>CVR</b></font></td>";
        } else {
            echo "<td class=\"border border-dark\"  align=\"center\"><font size=\"2\"><b>$key</b></font></td>";
        }
        echo "<td class=\"border border-dark\"  align=\"center\"><font size=\"2\"><b>$value</b></font></td></tr>";
    }
    echo "</table>
      	  </td>
      	</tr>";

    echo "<tr>
          <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "AX2_NA = $AX2_NA<br>";
    echo "AX2_TG = $AX2_TG<br>";
    echo "AX2_TCH = $AX2_TCH<br>";
    if ($AX_TCH_CH == 'true') {
        echo 'USED CH VALUE<br>';
    }
    echo "AX2_WC = $AX_WC<br>";
    echo "AX2_EO = $AX_EO<br>";
    echo "AX2_LC = $AX_LC<br>";
    echo "AX2_GL = $AX_GL<br>";
    echo "AX2_CL = $AX_CL<br>";
    echo "AX2_K = $AX_K<br>";
    echo 'The baseline is 20.<br>';
    echo "<b>AX2 is $AX2</b>";
    echo "</font>
          </td>
          <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "CX2_NA = $CX2_NA<br>";
    echo "CX2_TG = $CX2_TG<br>";
    echo "CX2_TCH = $CX2_TCH<br>";
    if ($CX_TCH_CH == 'true') {
        echo 'USED CH VALUE<br>';
    }
    echo "CX2_WC = $CX_WC<br>";
    echo "CX2_EO = $CX_EO<br>";
    echo "CX2_LC = $CX_LC<br>";
    echo "CX2_GL = $CX_GL<br>";
    echo "CX2_CL = $CX_CL<br>";
    echo "CX2_K = $CX_K<br>";
    echo "CX2_PL = $CX_PL<br>";
    echo 'The baseline is -20.<br>';
    echo "<b>CX2 is $CX2</b>";
    echo "</font>
          </td>
	      <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "HMR2_AB = $HMR2_AB<br>";
    echo "HMR2_BT = $HMR2_BT<br>";
    echo "HMR2_UA = $HMR2_UA<br>";
    echo "HMR2_GB = $HMR2_GB<br>";
    echo "HMR2_LC = $HMR_LC<br>";
    echo "HMR2_MN = $HMR_MN<br>";
    echo "HMR2_LC&MN = $HMR_LCMN<br>";
    echo "HMR2_EO = $HMR_EO<br>";
    echo "HMR2_BU = $HMR_BU<br>";
    echo "HMR2_MC = $HMR_MC<br>";
    echo "HMR2_LX = $HMR2_LX<br>";
    echo "HMR2_TCH = $HMR_TCH<br>";
    echo "HMR2_HD = $HMR2_HD<br>";
    if ($HMR_TCH_CH == 'true') {
        echo 'USED CH VALUE<br>';
    }
    echo "HMR2_TG = $HMR2_TG<br>";
    echo 'The baseline is 20.<br>';
    echo "<b>HMR2 is $HMR2</b>";
    echo "</font>
	      </td>         		
		  <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "INF_GB = $INF_GB<br>";
    echo "INF_FMG = $INF_FMG<br>";
    echo "INF_BBX = $INF_BBX<br>";
    echo "INF_HMR2 = $INF_HMR2<br>";
    echo "INF_INS = $INF_INS<br>";
    echo "INF_GO = $INF_GO<br>";
    echo "INF_GP = $INF_GP<br>";
    echo "INF_MG = $INF_MG<br>";
    echo "The baseline is $INF_baseline.<br>";
    echo "<b>INF is $INF</b>";
    echo "</font>
		  </td>
		  <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "GI_GB = $GI_GB<br>";
    echo "GI_CP = $GI_CP<br>";
    echo "GI_UA = $GI_UA<br>";
    echo "GI_TG = $GI_TG<br>";
    echo "GI_CL = $GI_CL<br>";
    echo "GI_LC = $GI_LC<br>";
    echo "GI_MN = $GI_MN<br>";
    echo "The baseline is $GI_baseline.<br>";
    echo "<b>GI is $GI</b>";
    echo "</font>
		  </td>
		  <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "INS_GL = $INS_GL<br>";
    echo "INS_TG = $INS_TG<br>";
    echo "INS_HD = $INS_HD<br>";
    echo "MCh = $INS_MCH<br>";
    if ($MCH_TCH_CH == 'true') {
        echo 'USED CH VALUE<br>';
    }
    echo "GBPX = $INS_GBPX<br>";
    echo "INS_TGHD = $INS_TGHD<br>";
    echo "The baseline is $INS_Baseline.<br>";
    echo "<b>INS is $INS</b>";
    echo "</font>
		  </td>
		</tr>";
}

if ($_REQUEST['ttype'] == 'l' || $_REQUEST['ttype'] == 'f') {
    echo "</tr>
        <tr>
          <td class=\"border border-dark\" colspan=\"3\" align=\"center\">
            <form action=\"interpretations.php?funk=view_interps\" method=\"POST\">
              <table width=\"200\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
                <tr>
                  <td class=\"border border-dark\"><br>
                    <input type=\"hidden\" name=\"client_id\" value=\"$client_id\">
                    <input type=\"hidden\" name=\"test_id\" value=\"$test_id\">
                    <input type=\"hidden\" name=\"test_date\" value=\"$test_date\">
                    <input type=\"hidden\" name=\"TCH_score\" value=\"$TCH\">
                    <input type=\"hidden\" name=\"HX_score\" value=\"$HX\">
                    <input type=\"hidden\" name=\"FC_score\" value=\"$FC\">
                    <input type=\"hidden\" name=\"TG_score\" value=\"$score[TG]\">
                    <input type=\"hidden\" name=\"CH_score\" value=\"$score[CH]\">
                    <input type=\"hidden\" name=\"LL_score\" value=\"$score[LL]\">
                    <input type=\"hidden\" name=\"LH_score\" value=\"$score[LH]\">
                    <input type=\"hidden\" name=\"DG_score\" value=\"$DG\">
                    <input type=\"hidden\" name=\"PX_score\" value=\"$PX\">
                    <input type=\"hidden\" name=\"GL_score\" value=\"$score[GL]\">
                    <input type=\"hidden\" name=\"LX_score\" value=\"$LX\">
                    <input type=\"hidden\" name=\"ASS_score\" value=\"$ASS\">
                    <input type=\"hidden\" name=\"HMR_score\" value=\"$HMR\">
                    <input type=\"hidden\" name=\"FRA_score\" value=\"$FRA\">
                    <input type=\"hidden\" name=\"TGHD_score\" value=\"$TGHD\">
                    <input type=\"hidden\" name=\"AX_score\" value=\"$AX\">
                    <input type=\"hidden\" name=\"HTM_score\" value=\"$AX\">
                    <input type=\"hidden\" name=\"HI_score\" value=\"$HI\">
                  </td>
                </tr>
              </table>
            </form>
            <form action=\"c_notes.php?funk=view_cnotes\" method=\"POST\">
              <table width=\"200\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
                <tr>
                  <td class=\"border border-dark\">
                            <input type=\"hidden\" name=\"client_id\" value=\"$client_id\">
                            <input type=\"hidden\" name=\"test_id\" value=\"$test_id\">
                            <input type=\"hidden\" name=\"test_date\" value=\"$test_date\">
                            <input type=\"hidden\" name=\"TCH_score\" value=\"$TCH\">
                            <input type=\"hidden\" name=\"HX_score\" value=\"$HX\">
                            <input type=\"hidden\" name=\"FC_score\" value=\"$FC\">
                            <input type=\"hidden\" name=\"DG_score\" value=\"$DG\">
                            <input type=\"hidden\" name=\"LL_score\" value=\"$score[LL]\">
                            <input type=\"hidden\" name=\"CH_score\" value=\"$score[CH]\">
                            <input type=\"hidden\" name=\"LH_score\" value=\"$score[LH]\">
                            <input type=\"hidden\" name=\"PX_score\" value=\"$PX\">
                            <input type=\"hidden\" name=\"LX_score\" value=\"$LX\">
                            <input type=\"hidden\" name=\"ASS_score\" value=\"$ASS\">
                            <input type=\"hidden\" name=\"HMR_score\" value=\"$HMR\">
                            <input type=\"hidden\" name=\"FRA_score\" value=\"$FRA\">
                            <input type=\"hidden\" name=\"TGHD_score\" value=\"$TGHD\">
                            <input type=\"hidden\" name=\"AX_score\" value=\"$AX\">
                            <input type=\"hidden\" name=\"CP_score\" value=\"$score[CP]\">
                            <input type=\"hidden\" name=\"UA_score\" value=\"$score[UA]\">
                            <input type=\"hidden\" name=\"FE_score\" value=\"$score[FE]\">
                            <input type=\"hidden\" name=\"HG_score\" value=\"$score[HG]\">
                            <input type=\"hidden\" name=\"MN_score\" value=\"$score[MN]\">
                            <input type=\"hidden\" name=\"NP_score\" value=\"$score[NP]\">
                            <input type=\"hidden\" name=\"LC_score\" value=\"$score[LC]\">
                            <input type=\"hidden\" name=\"EO_score\" value=\"$score[EO]\">
                            <input type=\"hidden\" name=\"MC_score\" value=\"$score[MC]\">
                            <input type=\"hidden\" name=\"MCH_score\" value=\"$score[MCH]\">
                  </td>
                </tr>
              </table>
            </form>
            <form action=\"recommendations.php?funk=view_recs\" method=\"POST\">
              <table width=\"200\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
                <tr>
                  <td class=\"border border-dark\">
                            <input type=\"hidden\" name=\"client_id\" value=\"$client_id\">
                            <input type=\"hidden\" name=\"test_id\" value=\"$test_id\">
                            <input type=\"hidden\" name=\"test_date\" value=\"$test_date\">
                            <input type=\"hidden\" name=\"TCH_score\" value=\"$TCH\">
                            <input type=\"hidden\" name=\"CL_score\" value=\"$score[CL]\">
                            <input type=\"hidden\" name=\"NA_score\" value=\"$score[NA]\">
                            <input type=\"hidden\" name=\"K_score\" value=\"$score[K]\">
                            <input type=\"hidden\" name=\"EI_score\" value=\"$EI\">
                            <input type=\"hidden\" name=\"FC_score\" value=\"$FC\">
                            <input type=\"hidden\" name=\"MC_score\" value=\"$score[MC]\">
                            <input type=\"hidden\" name=\"FE_score\" value=\"$score[FE]\">
                            <input type=\"hidden\" name=\"ASS_score\" value=\"$ASS\">
                            <input type=\"hidden\" name=\"HMR_score\" value=\"$HMR\">
                            <input type=\"hidden\" name=\"CP_score\" value=\"$score[CP]\">
                            <input type=\"hidden\" name=\"PX_score\" value=\"$PX\">
                            <input type=\"hidden\" name=\"GB_score\" value=\"$score[GB]\">
                            <input type=\"hidden\" name=\"DG_score\" value=\"$DG\">
                            <input type=\"hidden\" name=\"BU_score\" value=\"$score[BU]\">
                            <input type=\"hidden\" name=\"CT_score\" value=\"$score[CT]\">
                            <input type=\"hidden\" name=\"AB_score\" value=\"$score[AB]\">
                            <input type=\"hidden\" name=\"AX_score\" value=\"$AX\">
                            <input type=\"hidden\" name=\"AG_score\" value=\"$score[AG]\">
                            <input type=\"hidden\" name=\"LL_value\" value=\"$data_results[LL]\">
                            <input type=\"hidden\" name=\"LL_score\" value=\"$score[LL]\">
                            <input type=\"hidden\" name=\"HD_value\" value=\"$data_results[HD]\">
                            <input type=\"hidden\" name=\"CH_score\" value=\"$score[CH]\">
                            <input type=\"hidden\" name=\"CH_value\" value=\"$data_results[CH]\">
                            <input type=\"hidden\" name=\"GL_score\" value=\"$score[GL]\">
                            <input type=\"hidden\" name=\"TGHD_score\" value=\"$TGHD\">
                            <input type=\"hidden\" name=\"LX_score\" value=\"$LX\">
                            <input type=\"hidden\" name=\"LH_score\" value=\"$score[LH]\">
                            <input type=\"hidden\" name=\"CA_score\" value=\"$score[CA]\">
                            <input type=\"hidden\" name=\"P_score\" value=\"$score[P]\">
                            <input type=\"hidden\" name=\"TG_score\" value=\"$score[TG]\">
                            <input type=\"hidden\" name=\"CX_score\" value=\"$CX\">
                            <input type=\"hidden\" name=\"HD_score\" value=\"$score[HD]\">
                            <input type=\"hidden\" name=\"HG_score\" value=\"$score[HG]\">
                            <input type=\"hidden\" name=\"LD_score\" value=\"$score[LD]\">
                            <input type=\"hidden\" name=\"MCH_score\" value=\"$score[MCH]\">
                            <input type=\"hidden\" name=\"UA_score\" value=\"$score[UA]\">
                            <input type=\"hidden\" name=\"funk\" value=\"view_recs\">
                            <br/><br/>
                            $c2
                  </td>
                </tr>
              </table>
            </form>
            
            	  <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "CVR2_INS = $CVR2_INS<br>";
    echo "CVR2_FMG = $CVR2_FMG<br>";
    echo "CVR2_INF = $CVR2_INF<br>";
    echo "The baseline is $CVR2_Baseline.<br>";
    echo "<b>CVR2 is $CVR2</b>";
    echo "</font>
				  </td>   
		          <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "BBX_EI = $BBX_EI<br>";
    echo "MCh = $MCH<br>";
    if ($MCH_TCH_CH == 'true') {
        echo 'USED CH VALUE<br>';
    }
    echo "BBX_FC = $BBX_FC<br>";
    echo "BBX_TG = $BBX_TG<br>";
    echo "BBX_GL = $BBX_GL<br>";
    echo "BBX_HMR2 = $BBX_HMR2<br>";
    echo "BBX_HD = $BBX_HD<br>";
    echo "GBPX = $GBPX<br>";
    echo "BBX_NC = $BBX_NC<br>";
    echo "<b>BBX is $BBX</b>";
    echo "</font>
				  </td>
				  <td class=\"border border-dark\"  valign=\"top\"><$font size=\"1\">";
    echo "FMG_CX2 = $FMG_CX2<br>";
    echo "FMG_AX2 = $FMG_AX2<br>";
    echo "FMG_AG = $FMG_AG<br>";
    echo "FMG_CA = $FMG_CA<br>";
    echo "FMG_P = $FMG_P<br>";
    echo "FMG_CA_P = $FMG_CA_P<br>";
    echo "FMG_AB = $FMG_AB<br>";
    echo "<b>FMG is $FMG</b>";
    echo "</font>
				  </td>
    </td>
  </tr>";
}

/* Added by Yvan on 3/15/2017 */
    //if ($_SESSION['usertype'] == 'clinician') {

    //session_register("id");

    $id = $data_results['clinician_key'];
    $clinician_id = $data_results['clinician_key'];
    //  $_SESSION['id'] = $data_results[clinician_key];

    //}

    if ($_REQUEST['ttype'] == 'p') {
        echo "<tr>
          <td class=\"border border-dark\" align=\"center\" colspan=\"6\">
            <$font size=\"1\">
              <a href=\"../system/main.php?funk=patient_tests&client_id=$client_id\">Return to Patient Tests</a><br><br>
              <a href=\"../system/main.php\">Return to Main Menu</a></font>
          </td>
        </tr>
      ";
    }
    // }
@endphp
