<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Country Selector</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/countrySelector.js"></script>
	<link rel="stylesheet" href="css/countrySelector.css">
</head>
<body>
<label for="country">*Country</label>
<select name="countryCode" id="countryCode" required>
	<option  value="" >CHOOSE...</option>
	<option <?php if ($country === 'US' ) echo 'selected'; ?> value="US" data-flag="US" data-phone="+1" data-eu="false">USA </option>
    <option <?php if ($country === 'GB' ) echo 'selected'; ?> value="GB" data-flag="GB" data-phone="+44" data-eu="true">UK </option>
    <option <?php if ($country === 'CA' ) echo 'selected'; ?> value="CA" data-flag="CA" data-phone="+1" data-eu="false">Canada </option>
    <option <?php if ($country === 'DZ' ) echo 'selected'; ?> value="DZ" data-flag="DZ" data-phone="+213" data-eu="false">Algeria </option>
    <option <?php if ($country === 'AD' ) echo 'selected'; ?> value="AD" data-flag="AD" data-phone="+376" data-eu="false">Andorra </option>
    <option <?php if ($country === 'AO' ) echo 'selected'; ?> value="AO" data-flag="AO" data-phone="+244" data-eu="false">Angola </option>
    <option <?php if ($country === 'AI' ) echo 'selected'; ?> value="AI" data-flag="AI" data-phone="+1264" data-eu="false">Anguilla </option>
    <option <?php if ($country === 'AG' ) echo 'selected'; ?> value="AG" data-flag="AG" data-phone="+1268" data-eu="false">Antigua &amp; Barbuda </option>
    <option <?php if ($country === 'AR' ) echo 'selected'; ?> value="AR" data-flag="AR" data-phone="+54" data-eu="false">Argentina </option>
    <option <?php if ($country === 'AM' ) echo 'selected'; ?> value="AM" data-flag="AM" data-phone="+374" data-eu="false">Armenia </option>
    <option <?php if ($country === 'AW' ) echo 'selected'; ?> value="AW" data-flag="AW" data-phone="+297" data-eu="false">Aruba </option>
    <option <?php if ($country === 'AU' ) echo 'selected'; ?> value="AU" data-flag="AU" data-phone="+61" data-eu="false">Australia </option>
    <option <?php if ($country === 'AT' ) echo 'selected'; ?> value="AT" data-flag="AT" data-phone="+43" data-eu="true">Austria </option>
    <option <?php if ($country === 'AZ' ) echo 'selected'; ?> value="AZ" data-flag="AZ" data-phone="+994" data-eu="false">Azerbaijan </option>
    <option <?php if ($country === 'BS' ) echo 'selected'; ?> value="BS" data-flag="BS" data-phone="+1242" data-eu="false">Bahamas </option>
    <option <?php if ($country === 'BH' ) echo 'selected'; ?> value="BH" data-flag="BH" data-phone="+973" data-eu="false">Bahrain </option>
    <option <?php if ($country === 'BD' ) echo 'selected'; ?> value="BD" data-flag="BD" data-phone="+880" data-eu="false">Bangladesh </option>
    <option <?php if ($country === 'BB' ) echo 'selected'; ?> value="BB" data-flag="BB" data-phone="+1246" data-eu="false">Barbados </option>
    <option <?php if ($country === 'BY' ) echo 'selected'; ?> value="BY" data-flag="BY" data-phone="+375" data-eu="false">Belarus </option>
    <option <?php if ($country === 'BE' ) echo 'selected'; ?> value="BE" data-flag="BE" data-phone="+32" data-eu="true">Belgium </option>
    <option <?php if ($country === 'BZ' ) echo 'selected'; ?> value="BZ" data-flag="BZ" data-phone="+501" data-eu="false">Belize </option>
    <option <?php if ($country === 'BJ' ) echo 'selected'; ?> value="BJ" data-flag="BJ" data-phone="+229" data-eu="false">Benin </option>
    <option <?php if ($country === 'BM' ) echo 'selected'; ?> value="BM" data-flag="BM" data-phone="+1441" data-eu="false">Bermuda </option>
    <option <?php if ($country === 'BT' ) echo 'selected'; ?> value="BT" data-flag="BT" data-phone="+975" data-eu="false">Bhutan </option>
    <option <?php if ($country === 'BO' ) echo 'selected'; ?> value="BO" data-flag="BO" data-phone="+591" data-eu="false">Bolivia </option>
    <option <?php if ($country === 'BA' ) echo 'selected'; ?> value="BA" data-flag="BA" data-phone="+387" data-eu="false">Bosnia Herzegovina </option>
    <option <?php if ($country === 'BW' ) echo 'selected'; ?> value="BW" data-flag="BW" data-phone="+267" data-eu="false">Botswana </option>
    <option <?php if ($country === 'BR' ) echo 'selected'; ?> value="BR" data-flag="BR" data-phone="+55" data-eu="false">Brazil </option>
    <option <?php if ($country === 'BN' ) echo 'selected'; ?> value="BN" data-flag="BN" data-phone="+673" data-eu="false">Brunei </option>
    <option <?php if ($country === 'BG' ) echo 'selected'; ?> value="BG" data-flag="BG" data-phone="+359" data-eu="true">Bulgaria </option>
    <option <?php if ($country === 'BF' ) echo 'selected'; ?> value="BF" data-flag="BF" data-phone="+226" data-eu="false">Burkina Faso </option>
    <option <?php if ($country === 'BI' ) echo 'selected'; ?> value="BI" data-flag="BI" data-phone="+257" data-eu="false">Burundi </option>
    <option <?php if ($country === 'KH' ) echo 'selected'; ?> value="KH" data-flag="KH" data-phone="+855" data-eu="false">Cambodia </option>
    <option <?php if ($country === 'CM' ) echo 'selected'; ?> value="CM" data-flag="CM" data-phone="+237" data-eu="false">Cameroon </option>
    <option <?php if ($country === 'CV' ) echo 'selected'; ?> value="CV" data-flag="CV" data-phone="+238" data-eu="false">Cape Verde Islands </option>
    <option <?php if ($country === 'KY' ) echo 'selected'; ?> value="KY" data-flag="KY" data-phone="+1345" data-eu="false">Cayman Islands </option>
    <option <?php if ($country === 'CF' ) echo 'selected'; ?> value="CF" data-flag="CF" data-phone="+236" data-eu="false">Central African Republic </option>
    <option <?php if ($country === 'CL' ) echo 'selected'; ?> value="CL" data-flag="CL" data-phone="+56" data-eu="false">Chile </option>
    <option <?php if ($country === 'CN' ) echo 'selected'; ?> value="CN" data-flag="CN" data-phone="+86" data-eu="false">China </option>
    <option <?php if ($country === 'CO' ) echo 'selected'; ?> value="CO" data-flag="CO" data-phone="+57" data-eu="false">Colombia </option>
    <option <?php if ($country === 'KM' ) echo 'selected'; ?> value="KM" data-flag="KM" data-phone="+269" data-eu="false">Comoros </option>
    <option <?php if ($country === 'CG' ) echo 'selected'; ?> value="CG" data-flag="CG" data-phone="+242" data-eu="false">Congo </option>
    <option <?php if ($country === 'CK' ) echo 'selected'; ?> value="CK" data-flag="CK" data-phone="+682" data-eu="false">Cook Islands </option>
    <option <?php if ($country === 'CR' ) echo 'selected'; ?> value="CR" data-flag="CR" data-phone="+506" data-eu="false">Costa Rica </option>
    <option <?php if ($country === 'HR' ) echo 'selected'; ?> value="HR" data-flag="HR" data-phone="+385" data-eu="true">Croatia </option>
    <option <?php if ($country === 'CU' ) echo 'selected'; ?> value="CU" data-flag="CU" data-phone="+53" data-eu="false">Cuba </option>
    <option <?php if ($country === 'CY' ) echo 'selected'; ?> value="CY" data-flag="CY" data-phone="+90392" data-eu="true">Cyprus North </option>
    <option <?php if ($country === 'CY' ) echo 'selected'; ?> value="CY" data-flag="CY" data-phone="+357" data-eu="true">Cyprus South </option>
    <option <?php if ($country === 'CZ' ) echo 'selected'; ?> value="CZ" data-flag="CZ" data-phone="+42" data-eu="true">Czech Republic </option>
    <option <?php if ($country === 'DK' ) echo 'selected'; ?> value="DK" data-flag="DK" data-phone="+45" data-eu="true">Denmark </option>
    <option <?php if ($country === 'DJ' ) echo 'selected'; ?> value="DJ" data-flag="DJ" data-phone="+253" data-eu="false">Djibouti </option>
    <option <?php if ($country === 'DM' ) echo 'selected'; ?> value="DM" data-flag="DM" data-phone="+1809" data-eu="false">Dominica </option>
    <option <?php if ($country === 'DO' ) echo 'selected'; ?> value="DO" data-flag="DO" data-phone="+1809" data-eu="false">Dominican Republic </option>
    <option <?php if ($country === 'EC' ) echo 'selected'; ?> value="EC" data-flag="EC" data-phone="+593" data-eu="false">Ecuador </option>
    <option <?php if ($country === 'EG' ) echo 'selected'; ?> value="EG" data-flag="EG" data-phone="+20" data-eu="false">Egypt </option>
    <option <?php if ($country === 'SV' ) echo 'selected'; ?> value="SV" data-flag="SV" data-phone="+503" data-eu="false">El Salvador </option>
    <option <?php if ($country === 'GQ' ) echo 'selected'; ?> value="GQ" data-flag="GQ" data-phone="+240" data-eu="false">Equatorial Guinea </option>
    <option <?php if ($country === 'ER' ) echo 'selected'; ?> value="ER" data-flag="ER" data-phone="+291" data-eu="false">Eritrea </option>
    <option <?php if ($country === 'EE' ) echo 'selected'; ?> value="EE" data-flag="EE" data-phone="+372" data-eu="true">Estonia </option>
    <option <?php if ($country === 'ET' ) echo 'selected'; ?> value="ET" data-flag="ET" data-phone="+251" data-eu="false">Ethiopia </option>
    <option <?php if ($country === 'FK' ) echo 'selected'; ?> value="FK" data-flag="FK" data-phone="+500" data-eu="false">Falkland Islands </option>
    <option <?php if ($country === 'FO' ) echo 'selected'; ?> value="FO" data-flag="FO" data-phone="+298" data-eu="false">Faroe Islands </option>
    <option <?php if ($country === 'FJ' ) echo 'selected'; ?> value="FJ" data-flag="FJ" data-phone="+679" data-eu="false">Fiji </option>
    <option <?php if ($country === 'FI' ) echo 'selected'; ?> value="FI" data-flag="FI" data-phone="+358" data-eu="true">Finland </option>
    <option <?php if ($country === 'FR' ) echo 'selected'; ?> value="FR" data-flag="FR" data-phone="+33" data-eu="true">France </option>
    <option <?php if ($country === 'GF' ) echo 'selected'; ?> value="GF" data-flag="GF" data-phone="+594" data-eu="false">French Guiana </option>
    <option <?php if ($country === 'PF' ) echo 'selected'; ?> value="PF" data-flag="PF" data-phone="+689" data-eu="false">French Polynesia </option>
    <option <?php if ($country === 'GA' ) echo 'selected'; ?> value="GA" data-flag="GA" data-phone="+241" data-eu="false">Gabon </option>
    <option <?php if ($country === 'GM' ) echo 'selected'; ?> value="GM" data-flag="GM" data-phone="+220" data-eu="false">Gambia </option>
    <option <?php if ($country === 'GE' ) echo 'selected'; ?> value="GE" data-flag="GE" data-phone="+7880" data-eu="false">Georgia </option>
    <option <?php if ($country === 'DE' ) echo 'selected'; ?> value="DE" data-flag="DE" data-phone="+49" data-eu="true">Germany </option>
    <option <?php if ($country === 'GH' ) echo 'selected'; ?> value="GH" data-flag="GH" data-phone="+233" data-eu="false">Ghana </option>
    <option <?php if ($country === 'GI' ) echo 'selected'; ?> value="GI" data-flag="GI" data-phone="+350" data-eu="false">Gibraltar </option>
    <option <?php if ($country === 'GR' ) echo 'selected'; ?> value="GR" data-flag="GR" data-phone="+30" data-eu="true">Greece </option>
    <option <?php if ($country === 'GL' ) echo 'selected'; ?> value="GL" data-flag="GL" data-phone="+299" data-eu="false">Greenland </option>
    <option <?php if ($country === 'GD' ) echo 'selected'; ?> value="GD" data-flag="GD" data-phone="+1473" data-eu="false">Grenada </option>
    <option <?php if ($country === 'GP' ) echo 'selected'; ?> value="GP" data-flag="GP" data-phone="+590" data-eu="false">Guadeloupe </option>
    <option <?php if ($country === 'GU' ) echo 'selected'; ?> value="GU" data-flag="GU" data-phone="+671" data-eu="false">Guam </option>
    <option <?php if ($country === 'GT' ) echo 'selected'; ?> value="GT" data-flag="GT" data-phone="+502" data-eu="false">Guatemala </option>
    <option <?php if ($country === 'GN' ) echo 'selected'; ?> value="GN" data-flag="GN" data-phone="+224" data-eu="false">Guinea </option>
    <option <?php if ($country === 'GW' ) echo 'selected'; ?> value="GW" data-flag="GW" data-phone="+245" data-eu="false">Guinea - Bissau </option>
    <option <?php if ($country === 'GY' ) echo 'selected'; ?> value="GY" data-flag="GY" data-phone="+592" data-eu="false">Guyana </option>
    <option <?php if ($country === 'HT' ) echo 'selected'; ?> value="HT" data-flag="HT" data-phone="+509" data-eu="false">Haiti </option>
    <option <?php if ($country === 'HN' ) echo 'selected'; ?> value="HN" data-flag="HN" data-phone="+504" data-eu="false">Honduras </option>
    <option <?php if ($country === 'HK' ) echo 'selected'; ?> value="HK" data-flag="HK" data-phone="+852" data-eu="false">Hong Kong </option>
    <option <?php if ($country === 'HU' ) echo 'selected'; ?> value="HU" data-flag="HU" data-phone="+36" data-eu="true">Hungary </option>
    <option <?php if ($country === 'IS' ) echo 'selected'; ?> value="IS" data-flag="IS" data-phone="+354" data-eu="false">Iceland </option>
    <option <?php if ($country === 'IN' ) echo 'selected'; ?> value="IN" data-flag="IN" data-phone="+91" data-eu="false">India </option>
    <option <?php if ($country === 'ID' ) echo 'selected'; ?> value="ID" data-flag="ID" data-phone="+62" data-eu="false">Indonesia </option>
    <option <?php if ($country === 'IR' ) echo 'selected'; ?> value="IR" data-flag="IR" data-phone="+98" data-eu="false">Iran </option>
    <option <?php if ($country === 'IQ' ) echo 'selected'; ?> value="IQ" data-flag="IQ" data-phone="+964" data-eu="false">Iraq </option>
    <option <?php if ($country === 'IE' ) echo 'selected'; ?> value="IE" data-flag="IE" data-phone="+353" data-eu="true">Ireland </option>
    <option <?php if ($country === 'IL' ) echo 'selected'; ?> value="IL" data-flag="IL" data-phone="+972" data-eu="false">Israel </option>
    <option <?php if ($country === 'IT' ) echo 'selected'; ?> value="IT" data-flag="IT" data-phone="+39" data-eu="true">Italy </option>
    <option <?php if ($country === 'JM' ) echo 'selected'; ?> value="JM" data-flag="JM" data-phone="+1876" data-eu="false">Jamaica </option>
    <option <?php if ($country === 'JP' ) echo 'selected'; ?> value="JP" data-flag="JP" data-phone="+81" data-eu="false">Japan </option>
    <option <?php if ($country === 'JO' ) echo 'selected'; ?> value="JO" data-flag="JO" data-phone="+962" data-eu="false">Jordan </option>
    <option <?php if ($country === 'KZ' ) echo 'selected'; ?> value="KZ" data-flag="KZ" data-phone="+7" data-eu="false">Kazakhstan </option>
    <option <?php if ($country === 'KE' ) echo 'selected'; ?> value="KE" data-flag="KE" data-phone="+254" data-eu="false">Kenya </option>
    <option <?php if ($country === 'KI' ) echo 'selected'; ?> value="KI" data-flag="KI" data-phone="+686" data-eu="false">Kiribati </option>
    <option <?php if ($country === 'KP' ) echo 'selected'; ?> value="KP" data-flag="KP" data-phone="+850" data-eu="false">Korea North </option>
    <option <?php if ($country === 'KR' ) echo 'selected'; ?> value="KR" data-flag="KR" data-phone="+82" data-eu="false">Korea South </option>
    <option <?php if ($country === 'KW' ) echo 'selected'; ?> value="KW" data-flag="KW" data-phone="+965" data-eu="false">Kuwait </option>
    <option <?php if ($country === 'KG' ) echo 'selected'; ?> value="KG" data-flag="KG" data-phone="+996" data-eu="false">Kyrgyzstan </option>
    <option <?php if ($country === 'LA' ) echo 'selected'; ?> value="LA" data-flag="LA" data-phone="+856" data-eu="false">Laos </option>
    <option <?php if ($country === 'LV' ) echo 'selected'; ?> value="LV" data-flag="LV" data-phone="+371" data-eu="true">Latvia </option>
    <option <?php if ($country === 'LB' ) echo 'selected'; ?> value="LB" data-flag="LB" data-phone="+961" data-eu="false">Lebanon </option>
    <option <?php if ($country === 'LS' ) echo 'selected'; ?> value="LS" data-flag="LS" data-phone="+266" data-eu="false">Lesotho </option>
    <option <?php if ($country === 'LR' ) echo 'selected'; ?> value="LR" data-flag="LR" data-phone="+231" data-eu="false">Liberia </option>
    <option <?php if ($country === 'LY' ) echo 'selected'; ?> value="LY" data-flag="LY" data-phone="+218" data-eu="false">Libya </option>
    <option <?php if ($country === 'LI' ) echo 'selected'; ?> value="LI" data-flag="LI" data-phone="+417" data-eu="false">Liechtenstein </option>
    <option <?php if ($country === 'LT' ) echo 'selected'; ?> value="LT" data-flag="LT" data-phone="+370" data-eu="true">Lithuania </option>
    <option <?php if ($country === 'LU' ) echo 'selected'; ?> value="LU" data-flag="LU" data-phone="+352" data-eu="true">Luxembourg </option>
    <option <?php if ($country === 'MO' ) echo 'selected'; ?> value="MO" data-flag="MO" data-phone="+853" data-eu="false">Macao </option>
    <option <?php if ($country === 'MK' ) echo 'selected'; ?> value="MK" data-flag="MK" data-phone="+389" data-eu="false">Macedonia </option>
    <option <?php if ($country === 'MG' ) echo 'selected'; ?> value="MG" data-flag="MG" data-phone="+261" data-eu="false">Madagascar </option>
    <option <?php if ($country === 'MW' ) echo 'selected'; ?> value="MW" data-flag="MW" data-phone="+265" data-eu="false">Malawi </option>
    <option <?php if ($country === 'MY' ) echo 'selected'; ?> value="MY" data-flag="MY" data-phone="+60" data-eu="false">Malaysia </option>
    <option <?php if ($country === 'MV' ) echo 'selected'; ?> value="MV" data-flag="MV" data-phone="+960" data-eu="false">Maldives </option>
    <option <?php if ($country === 'ML' ) echo 'selected'; ?> value="ML" data-flag="ML" data-phone="+223" data-eu="false">Mali </option>
    <option <?php if ($country === 'MT' ) echo 'selected'; ?> value="MT" data-flag="MT" data-phone="+356" data-eu="true">Malta </option>
    <option <?php if ($country === 'MH' ) echo 'selected'; ?> value="MH" data-flag="MH" data-phone="+692" data-eu="false">Marshall Islands </option>
    <option <?php if ($country === 'MQ' ) echo 'selected'; ?> value="MQ" data-flag="MQ" data-phone="+596" data-eu="false">Martinique </option>
    <option <?php if ($country === 'MR' ) echo 'selected'; ?> value="MR" data-flag="MR" data-phone="+222" data-eu="false">Mauritania </option>
    <option <?php if ($country === 'YT' ) echo 'selected'; ?> value="YT" data-flag="YT" data-phone="+269" data-eu="false">Mayotte </option>
    <option <?php if ($country === 'MX' ) echo 'selected'; ?> value="MX" data-flag="MX" data-phone="+52" data-eu="false">Mexico </option>
    <option <?php if ($country === 'FM' ) echo 'selected'; ?> value="FM" data-flag="FM" data-phone="+691" data-eu="false">Micronesia </option>
    <option <?php if ($country === 'MD' ) echo 'selected'; ?> value="MD" data-flag="MD" data-phone="+373" data-eu="false">Moldova </option>
    <option <?php if ($country === 'MC' ) echo 'selected'; ?> value="MC" data-flag="MC" data-phone="+377" data-eu="false">Monaco </option>
    <option <?php if ($country === 'MN' ) echo 'selected'; ?> value="MN" data-flag="MN" data-phone="+976" data-eu="false">Mongolia </option>
    <option <?php if ($country === 'MS' ) echo 'selected'; ?> value="MS" data-flag="MS" data-phone="+1664" data-eu="false">Montserrat </option>
    <option <?php if ($country === 'MA' ) echo 'selected'; ?> value="MA" data-flag="MA" data-phone="+212" data-eu="false">Morocco </option>
    <option <?php if ($country === 'MZ' ) echo 'selected'; ?> value="MZ" data-flag="MZ" data-phone="+258" data-eu="false">Mozambique </option>
    <option <?php if ($country === 'MN' ) echo 'selected'; ?> value="MN" data-flag="MN" data-phone="+95" data-eu="false">Myanmar </option>
    <option <?php if ($country === 'NA' ) echo 'selected'; ?> value="NA" data-flag="NA" data-phone="+264" data-eu="false">Namibia </option>
    <option <?php if ($country === 'NR' ) echo 'selected'; ?> value="NR" data-flag="NR" data-phone="+674" data-eu="false">Nauru </option>
    <option <?php if ($country === 'NP' ) echo 'selected'; ?> value="NP" data-flag="NP" data-phone="+977" data-eu="false">Nepal </option>
    <option <?php if ($country === 'NL' ) echo 'selected'; ?> value="NL" data-flag="NL" data-phone="+31" data-eu="true">Netherlands </option>
    <option <?php if ($country === 'NC' ) echo 'selected'; ?> value="NC" data-flag="NC" data-phone="+687" data-eu="false">New Caledonia </option>
    <option <?php if ($country === 'NZ' ) echo 'selected'; ?> value="NZ" data-flag="NZ" data-phone="+64" data-eu="false">New Zealand </option>
    <option <?php if ($country === 'NI' ) echo 'selected'; ?> value="NI" data-flag="NI" data-phone="+505" data-eu="false">Nicaragua </option>
    <option <?php if ($country === 'NE' ) echo 'selected'; ?> value="NE" data-flag="NE" data-phone="+227" data-eu="false">Niger </option>
    <option <?php if ($country === 'NG' ) echo 'selected'; ?> value="NG" data-flag="NG" data-phone="+234" data-eu="false">Nigeria </option>
    <option <?php if ($country === 'NU' ) echo 'selected'; ?> value="NU" data-flag="NU" data-phone="+683" data-eu="false">Niue </option>
    <option <?php if ($country === 'NF' ) echo 'selected'; ?> value="NF" data-flag="NF" data-phone="+672" data-eu="false">Norfolk Islands </option>
    <option <?php if ($country === 'NP' ) echo 'selected'; ?> value="NP" data-flag="NP" data-phone="+670" data-eu="false">Northern Marianas </option>
    <option <?php if ($country === 'NO' ) echo 'selected'; ?> value="NO" data-flag="NO" data-phone="+47" data-eu="false">Norway </option>
    <option <?php if ($country === 'OM' ) echo 'selected'; ?> value="OM" data-flag="OM" data-phone="+968" data-eu="false">Oman </option>
    <option <?php if ($country === 'PW' ) echo 'selected'; ?> value="PW" data-flag="PW" data-phone="+680" data-eu="false">Palau </option>
    <option <?php if ($country === 'PA' ) echo 'selected'; ?> value="PA" data-flag="PA" data-phone="+507" data-eu="false">Panama </option>
    <option <?php if ($country === 'PG' ) echo 'selected'; ?> value="PG" data-flag="PG" data-phone="+675" data-eu="false">Papua New Guinea </option>
    <option <?php if ($country === 'PY' ) echo 'selected'; ?> value="PY" data-flag="PY" data-phone="+595" data-eu="false">Paraguay </option>
    <option <?php if ($country === 'PE' ) echo 'selected'; ?> value="PE" data-flag="PE" data-phone="+51" data-eu="false">Peru </option>
    <option <?php if ($country === 'PH' ) echo 'selected'; ?> value="PH" data-flag="PH" data-phone="+63" data-eu="false">Philippines </option>
    <option <?php if ($country === 'PL' ) echo 'selected'; ?> value="PL" data-flag="PL" data-phone="+48" data-eu="true">Poland </option>
    <option <?php if ($country === 'PT' ) echo 'selected'; ?> value="PT" data-flag="PT" data-phone="+351" data-eu="true">Portugal </option>
    <option <?php if ($country === 'PR' ) echo 'selected'; ?> value="PR" data-flag="PR" data-phone="+1787" data-eu="false">Puerto Rico </option>
    <option <?php if ($country === 'QA' ) echo 'selected'; ?> value="QA" data-flag="QA" data-phone="+974" data-eu="false">Qatar </option>
    <option <?php if ($country === 'RE' ) echo 'selected'; ?> value="RE" data-flag="RE" data-phone="+262" data-eu="false">Reunion </option>
    <option <?php if ($country === 'RO' ) echo 'selected'; ?> value="RO" data-flag="RO" data-phone="+40" data-eu="true">Romania </option>
    <option <?php if ($country === 'RU' ) echo 'selected'; ?> value="RU" data-flag="RU" data-phone="+7" data-eu="false">Russia </option>
    <option <?php if ($country === 'RW' ) echo 'selected'; ?> value="RW" data-flag="RW" data-phone="+250" data-eu="false">Rwanda </option>
    <option <?php if ($country === 'SM' ) echo 'selected'; ?> value="SM" data-flag="SM" data-phone="+378" data-eu="false">San Marino </option>
    <option <?php if ($country === 'ST' ) echo 'selected'; ?> value="ST" data-flag="ST" data-phone="+239" data-eu="false">Sao Tome &amp; Principe </option>
    <option <?php if ($country === 'SA' ) echo 'selected'; ?> value="SA" data-flag="SA" data-phone="+966" data-eu="false">Saudi Arabia </option>
    <option <?php if ($country === 'SN' ) echo 'selected'; ?> value="SN" data-flag="SN" data-phone="+221" data-eu="false">Senegal </option>
    <option <?php if ($country === 'CS' ) echo 'selected'; ?> value="CS" data-flag="CS" data-phone="+381" data-eu="false">Serbia </option>
    <option <?php if ($country === 'SC' ) echo 'selected'; ?> value="SC" data-flag="SC" data-phone="+248" data-eu="false">Seychelles </option>
    <option <?php if ($country === 'SL' ) echo 'selected'; ?> value="SL" data-flag="SL" data-phone="+232" data-eu="false">Sierra Leone </option>
    <option <?php if ($country === 'SG' ) echo 'selected'; ?> value="SG" data-flag="SG" data-phone="+65" data-eu="false">Singapore </option>
    <option <?php if ($country === 'SK' ) echo 'selected'; ?> value="SK" data-flag="SK" data-phone="+421" data-eu="true">Slovak Republic </option>
    <option <?php if ($country === 'SI' ) echo 'selected'; ?> value="SI" data-flag="SI" data-phone="+386" data-eu="true">Slovenia </option>
    <option <?php if ($country === 'SB' ) echo 'selected'; ?> value="SB" data-flag="SB" data-phone="+677" data-eu="false">Solomon Islands </option>
    <option <?php if ($country === 'SO' ) echo 'selected'; ?> value="SO" data-flag="SO" data-phone="+252" data-eu="false">Somalia </option>
    <option <?php if ($country === 'ZA' ) echo 'selected'; ?> value="ZA" data-flag="ZA" data-phone="+27" data-eu="false">South Africa </option>
    <option <?php if ($country === 'ES' ) echo 'selected'; ?> value="ES" data-flag="ES" data-phone="+34" data-eu="true">Spain </option>
    <option <?php if ($country === 'LK' ) echo 'selected'; ?> value="LK" data-flag="LK" data-phone="+94" data-eu="false">Sri Lanka </option>
    <option <?php if ($country === 'SH' ) echo 'selected'; ?> value="SH" data-flag="SH" data-phone="+290" data-eu="false">St. Helena </option>
    <option <?php if ($country === 'KN' ) echo 'selected'; ?> value="KN" data-flag="KN" data-phone="+1869" data-eu="false">St. Kitts </option>
    <option <?php if ($country === 'SC' ) echo 'selected'; ?> value="SC" data-flag="SC" data-phone="+1758" data-eu="false">St. Lucia </option>
    <option <?php if ($country === 'SD' ) echo 'selected'; ?> value="SD" data-flag="SD" data-phone="+249" data-eu="false">Sudan </option>
    <option <?php if ($country === 'SR' ) echo 'selected'; ?> value="SR" data-flag="SR" data-phone="+597" data-eu="false">Suriname </option>
    <option <?php if ($country === 'SZ' ) echo 'selected'; ?> value="SZ" data-flag="SZ" data-phone="+268" data-eu="false">Swaziland </option>
    <option <?php if ($country === 'SE' ) echo 'selected'; ?> value="SE" data-flag="SE" data-phone="+46" data-eu="true">Sweden </option>
    <option <?php if ($country === 'CH' ) echo 'selected'; ?> value="CH" data-flag="CH" data-phone="+41" data-eu="false">Switzerland </option>
    <option <?php if ($country === 'SI' ) echo 'selected'; ?> value="SI" data-flag="SI" data-phone="+963" data-eu="false">Syria </option>
    <option <?php if ($country === 'TW' ) echo 'selected'; ?> value="TW" data-flag="TW" data-phone="+886" data-eu="false">Taiwan </option>
    <option <?php if ($country === 'TJ' ) echo 'selected'; ?> value="TJ" data-flag="TJ" data-phone="+7" data-eu="false">Tajikstan </option>
    <option <?php if ($country === 'TH' ) echo 'selected'; ?> value="TH" data-flag="TH" data-phone="+66" data-eu="false">Thailand </option>
    <option <?php if ($country === 'TG' ) echo 'selected'; ?> value="TG" data-flag="TG" data-phone="+228" data-eu="false">Togo </option>
    <option <?php if ($country === 'TO' ) echo 'selected'; ?> value="TO" data-flag="TO" data-phone="+676" data-eu="false">Tonga </option>
    <option <?php if ($country === 'TT' ) echo 'selected'; ?> value="TT" data-flag="TT" data-phone="+1868" data-eu="false">Trinidad &amp; Tobago </option>
    <option <?php if ($country === 'TN' ) echo 'selected'; ?> value="TN" data-flag="TN" data-phone="+216" data-eu="false">Tunisia </option>
    <option <?php if ($country === 'TR' ) echo 'selected'; ?> value="TR" data-flag="TR" data-phone="+90" data-eu="false">Turkey </option>
    <option <?php if ($country === 'TM' ) echo 'selected'; ?> value="TM" data-flag="TM" data-phone="+7" data-eu="false">Turkmenistan </option>
    <option <?php if ($country === 'TM' ) echo 'selected'; ?> value="TM" data-flag="TM" data-phone="+993" data-eu="false">Turkmenistan </option>
    <option <?php if ($country === 'TC' ) echo 'selected'; ?> value="TC" data-flag="TC" data-phone="+1649" data-eu="false">Turks &amp; Caicos Islands </option>
    <option <?php if ($country === 'TV' ) echo 'selected'; ?> value="TV" data-flag="TV" data-phone="+688" data-eu="false">Tuvalu </option>
    <option <?php if ($country === 'UG' ) echo 'selected'; ?> value="UG" data-flag="UG" data-phone="+256" data-eu="false">Uganda </option>
    <option <?php if ($country === 'UA' ) echo 'selected'; ?> value="UA" data-flag="UA" data-phone="+380" data-eu="false">Ukraine </option>
    <option <?php if ($country === 'AE' ) echo 'selected'; ?> value="AE" data-flag="AE" data-phone="+971" data-eu="false">United Arab Emirates </option>
    <option <?php if ($country === 'UY' ) echo 'selected'; ?> value="UY" data-flag="UY" data-phone="+598" data-eu="false">Uruguay </option>
    <option <?php if ($country === 'UZ' ) echo 'selected'; ?> value="UZ" data-flag="UZ" data-phone="+7" data-eu="false">Uzbekistan </option>
    <option <?php if ($country === 'VU' ) echo 'selected'; ?> value="VU" data-flag="VU" data-phone="+678" data-eu="false">Vanuatu </option>
    <option <?php if ($country === 'VA' ) echo 'selected'; ?> value="VA" data-flag="VA" data-phone="+379" data-eu="false">Vatican City </option>
    <option <?php if ($country === 'VE' ) echo 'selected'; ?> value="VE" data-flag="VE" data-phone="+58" data-eu="false">Venezuela </option>
    <option <?php if ($country === 'VN' ) echo 'selected'; ?> value="VN" data-flag="VN" data-phone="+84" data-eu="false">Vietnam </option>
    <option <?php if ($country === 'VG' ) echo 'selected'; ?> value="VG" data-flag="VG" data-phone="+84" data-eu="false">Virgin Islands - British </option>
    <option <?php if ($country === 'VI' ) echo 'selected'; ?> value="VI" data-flag="VI" data-phone="+84" data-eu="false">Virgin Islands - US </option>
    <option <?php if ($country === 'WF' ) echo 'selected'; ?> value="WF" data-flag="WF" data-phone="+681" data-eu="false">Wallis &amp; Futuna </option>
    <option <?php if ($country === 'YE' ) echo 'selected'; ?> value="YE" data-flag="YE" data-phone="+96" data-eu="false">Yemen </option>
    <option <?php if ($country === 'ZM' ) echo 'selected'; ?> value="ZM" data-flag="ZM" data-phone="+260" data-eu="false">Zambia </option>
    <option <?php if ($country === 'ZW' ) echo 'selected'; ?> value="ZW" data-flag="ZW" data-phone="+263" data-eu="false">Zimbabwe </option>
</select>
<div class="region" data-country="US">
	<label for="regionUS">*State</label>
	<select id="regionUS">
	  <option value="">CHOOSE...</option>
	  <option <?php if ($state === 'AL' ) echo 'selected'; ?>value="AL">Alabama</option>
	  <option <?php if ($state === 'AK' ) echo 'selected'; ?>value="AK">Alaska</option>
	  <option <?php if ($state === 'AZ' ) echo 'selected'; ?>value="AZ">Arizona</option>
	  <option <?php if ($state === 'AR' ) echo 'selected'; ?>value="AR">Arkansas</option>
	  <option <?php if ($state === 'CA' ) echo 'selected'; ?>value="CA">California</option>
	  <option <?php if ($state === 'CO' ) echo 'selected'; ?>value="CO">Colorado</option>
	  <option <?php if ($state === 'CT' ) echo 'selected'; ?>value="CT">Connecticut</option>
	  <option <?php if ($state === 'DE' ) echo 'selected'; ?>value="DE">Delaware</option>
	  <option <?php if ($state === 'DC' ) echo 'selected'; ?>value="DC">District Of Columbia</option>
	  <option <?php if ($state === 'FL' ) echo 'selected'; ?>value="FL">Florida</option>
	  <option <?php if ($state === 'GA' ) echo 'selected'; ?>value="GA">Georgia</option>
	  <option <?php if ($state === 'HI' ) echo 'selected'; ?>value="HI">Hawaii</option>
	  <option <?php if ($state === 'ID' ) echo 'selected'; ?>value="ID">Idaho</option>
	  <option <?php if ($state === 'IL' ) echo 'selected'; ?>value="IL">Illinois</option>
	  <option <?php if ($state === 'IN' ) echo 'selected'; ?>value="IN">Indiana</option>
	  <option <?php if ($state === 'IA' ) echo 'selected'; ?>value="IA">Iowa</option>
	  <option <?php if ($state === 'KS' ) echo 'selected'; ?>value="KS">Kansas</option>
	  <option <?php if ($state === 'KY' ) echo 'selected'; ?>value="KY">Kentucky</option>
	  <option <?php if ($state === 'LA' ) echo 'selected'; ?>value="LA">Louisiana</option>
	  <option <?php if ($state === 'ME' ) echo 'selected'; ?>value="ME">Maine</option>
	  <option <?php if ($state === 'MD' ) echo 'selected'; ?>value="MD">Maryland</option>
	  <option <?php if ($state === 'MA' ) echo 'selected'; ?>value="MA">Massachusetts</option>
	  <option <?php if ($state === 'MI' ) echo 'selected'; ?>value="MI">Michigan</option>
	  <option <?php if ($state === 'MN' ) echo 'selected'; ?>value="MN">Minnesota</option>
	  <option <?php if ($state === 'MS' ) echo 'selected'; ?>value="MS">Mississippi</option>
	  <option <?php if ($state === 'MO' ) echo 'selected'; ?>value="MO">Missouri</option>
	  <option <?php if ($state === 'MT' ) echo 'selected'; ?>value="MT">Montana</option>
	  <option <?php if ($state === 'NE' ) echo 'selected'; ?>value="NE">Nebraska</option>
	  <option <?php if ($state === 'NV' ) echo 'selected'; ?>value="NV">Nevada</option>
	  <option <?php if ($state === 'NH' ) echo 'selected'; ?>value="NH">New Hampshire</option>
	  <option <?php if ($state === 'NJ' ) echo 'selected'; ?>value="NJ">New Jersey</option>
	  <option <?php if ($state === 'NM' ) echo 'selected'; ?>value="NM">New Mexico</option>
	  <option <?php if ($state === 'NY' ) echo 'selected'; ?>value="NY">New York</option>
	  <option <?php if ($state === 'NC' ) echo 'selected'; ?>value="NC">North Carolina</option>
	  <option <?php if ($state === 'ND' ) echo 'selected'; ?>value="ND">North Dakota</option>
	  <option <?php if ($state === 'OH' ) echo 'selected'; ?>value="OH">Ohio</option>
	  <option <?php if ($state === 'OK' ) echo 'selected'; ?>value="OK">Oklahoma</option>
	  <option <?php if ($state === 'OR' ) echo 'selected'; ?>value="OR">Oregon</option>
	  <option <?php if ($state === 'PA' ) echo 'selected'; ?>value="PA">Pennsylvania</option>
	  <option <?php if ($state === 'RI' ) echo 'selected'; ?>value="RI">Rhode Island</option>
	  <option <?php if ($state === 'SC' ) echo 'selected'; ?>value="SC">South Carolina</option>
	  <option <?php if ($state === 'SD' ) echo 'selected'; ?>value="SD">South Dakota</option>
	  <option <?php if ($state === 'TN' ) echo 'selected'; ?>value="TN">Tennessee</option>
	  <option <?php if ($state === 'TX' ) echo 'selected'; ?>value="TX">Texas</option>
	  <option <?php if ($state === 'UT' ) echo 'selected'; ?>value="UT">Utah</option>
	  <option <?php if ($state === 'VT' ) echo 'selected'; ?>value="VT">Vermont</option>
	  <option <?php if ($state === 'VA' ) echo 'selected'; ?>value="VA">Virginia</option>
	  <option <?php if ($state === 'WA' ) echo 'selected'; ?>value="WA">Washington</option>
	  <option <?php if ($state === 'WV' ) echo 'selected'; ?>value="WV">West Virginia</option>
	  <option <?php if ($state === 'WI' ) echo 'selected'; ?>value="WI">Wisconsin</option>
	  <option <?php if ($state === 'WY' ) echo 'selected'; ?>value="WY">Wyoming</option>
  </select>				
</div>
<label for="phone">*Phone</label>
<div class="input-group">
	<div class="input-group-prepend">
	<span class="input-group-text" name="phoneCode" id="phoneCode"></span>
	</div>
	<input type="tel" name="phone" id="phone" required>   
	<span class="text-danger"></span> 
</div>    
</body>
</html>

