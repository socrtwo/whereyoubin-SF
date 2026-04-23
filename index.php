<?php
error_reporting(0);

session_start();

include 'config.php'; 

$thisMap = $worldCookie;

$thisDomain = OWN_DOMAIN;

include 'header.php';
?>
			<h2 class="style1">Africa</h2>

			<table style="height: 206px; width: 900px; margin-left:auto; margin-right:auto" class="auto-style223" align="center">
			<tr>
			<td valign="top" class="auto-style1" style="width: 266px">
					<p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I1', 'dz')" id='dz' name='dz' value='dz_visited' class="style16">Algeria

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'ao')" id='ao' name='ao' value='ao_visited' class="style16">Angola

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'bj')" id='bj' name='bj' value='bj_visited' class="style16">Benin

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'bw')" id='bw' name='bw' value='bw_visited' class="style16">Botswana

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'bf')" id='bf' name='bf' value='bf_visited' class="style16">Burkina 
					Faso

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'bi')" id='bi' name='bi' value='bi_visited' class="style16">Burundi

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'cm')" id='cm' name='cm' value='cm_visited' class="style16">Cameroon

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'cv')" id='cv' name='cv' value='cv_visited' class="style16">Cape 
					Verde

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'cf')" id='cf' name='cf' value='cf_visited' class="style16">Central 
					African Republic

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'es_ce')" id='es_ce' name='es_ce' value='es_ce_visited' class="style16">Ceuta 
					and Melilla (Es)

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'td')" id='td' name='td' value='td_visited' class="style16">Chad

									 <br><a name="map10"><input type='checkbox' onclick="onBoxClicked('I1', 'km')" id='km' name='km' value='km_visited' class="style16">Comoro 
					Islands

									 </p>

									 </td>

									 <td style="width: 286pt; height: 382px;" valign="top" class="style9">

									 <p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I1', 'ci')" id='ci' name='ci' value='ci_visited' class="style16">Cote 
									 D&#39;Ivoire

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'dj')" id='dj' name='dj' value='dj_visited' class="style16">Djibouti

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'cg')" id='cg' name='cg' value='cg_visited' class="style16">Congo 
									 Brazzaville

									 <br><input type='checkbox' onclick="onBoxClicked('I1', 'cd')" id='cd' name='cd' value='cd_visited' class="style16">Congo 
									 Kinshasa

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'eg')" id='eg' name='eg' value='eg_visited' class="style16">Egypt

									 <br><input type='checkbox' onclick="onBoxClicked('I1', 'gq')" id='gq' name='gq' value='gq_visited' class="style16">Equatorial 
									 Guinea

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'er')" id='er' name='er' value='er_visited' class="style16">Eritrea 

									 <br><input type='checkbox' onclick="onBoxClicked('I1', 'et')" id='et' name='et' value='et_visited' class="style16">Ethiopia

									 <br><a name="map5"><input type='checkbox' onclick="onBoxClicked('I1', 'ga')" id='ga' name='ga' value='ga_visited' class="style16">Gabon</a><br>
									 <a name="map6"><input type='checkbox' onclick="onBoxClicked('I1', 'gh')" id='gh' name='gh' value='gh_visited' class="style16">Ghana

									 <br><input type='checkbox' onclick="onBoxClicked('I4', 'gw')" id='gw' name='gw' value='gw_visited' class="style16">Guinea&nbsp;Bissau

									 </a><br><a name="map11"><input type='checkbox' onclick="onBoxClicked('I4', 'gn')" id='gn' name='gn' value='gn_visited' class="style16">Guinea 
									 Conakry</p>

									 </td>

									 <td style="width: 286pt; height: 382px;" valign="top" class="style9">

									 <p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I4', 'ke')" id='ke' name='ke' value='ke_visited' class="style16">Kenya

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I4', 'ls')" id='ls' name='ls' value='ls_visited' class="style16">Lesotho

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I4', 'lr')" id='lr' name='lr' value='lr_visited' class="style16">Liberia

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I4', 'ly')" id='ly' name='ly' value='ly_visited' class="style16">Libya

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I4', 'mg')" id='mg' name='mg' value='mg_visited' class="style16">Madagascar

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I5', 'mw')" id='mw' name='mw' value='mw_visited' class="style16">Malawi

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I5', 'ml')" id='ml' name='ml' value='ml_visited' class="style16">Mali

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I5', 'mr')" id='mr' name='mr' value='mr_visited' class="style16">Mauritania

									 <br><input type='checkbox' onclick="onBoxClicked('I5', 'mu')" id='mu' name='mu' value='mu_visited' class="style16">Mauritius<br>
									 <a name="map7"><input type='checkbox' onclick="onBoxClicked('I5', 'ma')" id='ma' name='ma' value='ma_visited' class="style16">Morocco</a><br>
									 <a name="map8"><input type='checkbox' onclick="onBoxClicked('I5', 'mz')" id='mz' name='mz' value='mz_visited' class="style16">Mozambique</p>

									 </td>

									 <td style="width: 286pt; height: 382px;" valign="top" class="style9">

									 <p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I5', 'na')" id='na' name='na' value='na_visited' class="style16">Namibia

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ne')" id='ne' name='ne' value='ne_visited' class="style16">Niger

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ng')" id='ng' name='ng' value='ng_visited' class="style16">Nigeria

									 <br><input type='checkbox' onclick="onBoxClicked('I3', 'fr_re')" id='fr_re' name='fr_re' value='fr_re_visited' class="style16">Reunion

									 <br><input type='checkbox' onclick="onBoxClicked('I3', 'rw')" id='rw' name='rw' value='rw_visited' class="style16">Rwanda<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'sh')" id='sh' name='sh' value='sh_visited' class="style16">Saint&nbsp;Helena

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'st')" id='st' name='st' value='st_visited' class="style16">Sao 
									 Tome and Principe<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'sn')" id='sn' name='sn' value='sn_visited' class="style16">Senegal<br><input type='checkbox' onclick="onBoxClicked('I3', 'sc')" id='sc' name='sc' value='sc_visited' class="style16">Seychelles<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'sl')" id='sl' name='sl' value='sl_visited' class="style16">Sierra 
									 Leone<br><a name="map9"><input type='checkbox' onclick="onBoxClicked('I3', 'so')" id='so' name='so' value='so_visited' class="style16">Somalia</p>

									 </td>

									 <td style="width: 286pt; height: 382px;" valign="top" class="style9">

									 <p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I3', 'za')" id='za' name='za' value='za_visited' class="style16">South 
									 Africa<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'sd')" id='sd' name='sd' value='sd_visited' class="style16">Sudan<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ss')" id='ss' name='ss' value='ss_visited' class="style16">South Sudan<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'sz')" id='sz' name='sz' value='sz_visited' class="style16">Swaziland<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'tz')" id='tz' name='tz' value='tz_visited' class="style16">Tanzania<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'gm')" id='gm' name='gm' value='gm_visited' class="style16">The 
									 Gambia

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'tg')" id='tg' name='tg' value='tg_visited' class="style16">Togo

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'tn')" id='tn' name='tn' value='tn_visited' class="style16">Tunisia

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ug')" id='ug' name='ug' value='ug_visited' class="style16">Uganda<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'eh')" id='eh' name='eh' value='eh_visited' class="style16">Western 
									 Sahara

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'zm')" id='zm' name='zm' value='zm_visited' class="style16">Zambia

					<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'zw')" id='zw' name='zw' value='zw_visited' class="style16">Zimbabwe     

									 </p>

				

			</td>

			</tr>

			</table>


<h2 class="style1">Asia</h2>
<div class="center">
<table style="height: 206px; width: 900px; text-align:center" class="auto-style223" align="center">
<tr>
<td valign="top" class="auto-style1" style="width: 266px">
<p class="auto-style23">	<input type='checkbox' onclick="onBoxClicked('I1', 'af')" id='af' name='af' value='af_visited' class="style16">Afghanistan

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'us_as')" id='us_as' name='us_as' value='us_as_visited' class="style16">American 
Samoa

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'in_an')" id='in_an' name='in_an' value='in_an_visited' class="style16">Andaman 
and Nicobar Islands

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'am')" id='am' name='am' value='am_visited' class="style16">Armenia

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'au')" id='au' name='au' value='au_visited' class="style16">Australia

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'az')" id='az' name='az' value='az_visited' class="style16">Azerbaijan

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'bd')" id='bd' name='bd' value='bd_visited' class="style16">Bangladesh

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'bt')" id='bt' name='bt' value='bt_visited' class="style16">Bhutan

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'bn')" id='bn' name='bn' value='bn_visited' class="style16">Brunei

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'mm')" id='mm' name='mm' value='mm_visited' class="style16">Burma 
Myanmar

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'kh')" id='kh' name='kh' value='kh_visited' class="style16">Cambodia

				 <br><input type='checkbox' onclick="onBoxClicked('I1', 'cn')" id='cn' name='cn' value='cn_visited' class="style16">China

				 </td>

				 <td style="width: 286pt; height: 382px;" valign="top" class="style9">

				 <p class="auto-style23">

				 <a name="map1"><input type='checkbox' onclick="onBoxClicked('I1', 'fj')" id='fj' name='fj' value='fj_visited' class="style16">Fiji&nbsp;

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'ge')" id='ge' name='ge' value='ge_visited' class="style16">Georgia

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'us_gu')" id='us_gu' name='us_gu' value='us_gu_visited' class="style16">Guam<br><input type='checkbox' onclick="onBoxClicked('I1', 'in_di')" id='in_di' name='in_di' value='in_di_visited' class="style16">India

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'hk')" id='hk' name='hk' value='in_visited' class="style16">Hong 
				 Kong (China)

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'id')" id='id' name='id' value='id_visited' class="style16">Indonesia

				 <br><input type='checkbox' onclick="onBoxClicked('I1', 'jp')" id='jp' name='jp' value='jp_visited' class="style16">Japan

				 <br><input type='checkbox' onclick="onBoxClicked('I1', 'kz')" id='kz' name='kz' value='kz_visited' class="style16">Kazakhstan

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'ki')" id='ki' name='ki' value='ki_visited' class="style16">Kirimati

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'kg')" id='kg' name='kg' value='kg_visited' class="style16">Kyrgyzstan

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'la')" id='la' name='la' value='la_visited' class="style16">Laos

				 <br><input type='checkbox' onclick="onBoxClicked('I4', 'my')" id='my' name='my' value='my_visited' class="style16">Malaysia

				 </p>

				 </td>

				 <td style="width: 286pt; height: 382px;" valign="top" class="style9">

				 <p class="auto-style23">

				 <a name="map2"><input type='checkbox' onclick="onBoxClicked('I4', 'mo')" id='mo' name='mo' value='mo_visited' class="style16">Macau 
				 (China)

<br><input type='checkbox' onclick="onBoxClicked('I4', 'mv')" id='mv' name='mv' value='mv_visited' class="style16">Maldive 
				 Islands

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I4', 'mh')" id='mh' name='mh' value='mh_visited' class="style16">Marshall 
				 Islands

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I4', 'fm')" id='fm' name='fm' value='fm_visited' class="style16">Micronesia

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I4', 'mn')" id='mn' name='mn' value='mn_visited' class="style16">Mongolia

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I4', 'nr')" id='nr' name='nr' value='nr_visited' class="style16">Nauru 
				 Island

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I4', 'np')" id='np' name='np' value='np_visited' class="style16">Nepal

				 <br><input type='checkbox' onclick="onBoxClicked('I5', 'fr_nc')" id='fr_nc' name='fr_nc' value='fr_nc_visited' class="style16">New 
				 Caledonia

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I5', 'nz')" id='nz' name='nz' value='nz_visited' class="style16">New 
				 Zealand

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I5', 'kp')" id='kp' name='kp' value='kp_visited' class="style16">North 
				 Korea

<br><input type='checkbox' onclick="onBoxClicked('I5', 'nf')" id='nf' name='nf' value='nf_visited' class="style16">Norfolk 
				 Island</a><br><a name="map13"><input type='checkbox' onclick="onBoxClicked('I5', 'us_mp')" id='us_mp' name='us_mp' value='us_mp_visited' class="style16">Northern 
				 Mariana Islands</p>
	</td>

				 <td style="width: 286pt; height: 382px;" valign="top" class="style9">

				 <p class="auto-style23">

				 <a name="map3"><input type='checkbox' onclick="onBoxClicked('I5', 'pk')" id='pk' name='pk' value='pk_visited' class="style16">Pakistan

				 <br><input type='checkbox' onclick="onBoxClicked('I3', 'pw')" id='pw' name='pw' value='pw_visited' class="style16">Palau

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'pg')" id='pg' name='pg' value='pg_visited' class="style16">Papua 
				 New Guinea<br><input type='checkbox' onclick="onBoxClicked('I3', 'ph')" id='ph' name='ph' value='ph_visited' class="style16">Philippines

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ws')" id='ws' name='ws' value='ws_visited' class="style16">Samoa

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'sg')" id='sg' name='sg' value='sg_visited' class="style16">Singapore

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'kr')" id='kr' name='kr' value='kr_visited' class="style16">South 
				 Korea

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'sb')" id='sb' name='sb' value='sb_visited' class="style16">Solomon 
				 Islands

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'lk')" id='lk' name='lk' value='lk_visited' class="style16">Sri 
				 Lanka

				 

</a><br><a name="map14"><input type='checkbox' onclick="onBoxClicked('I3', 'fr_pf')" id='fr_pf' name='fr_pf' value='fr_pf_visited' class="style16">Tahiti 
				 (French Polynesia)

<br><input type='checkbox' onclick="onBoxClicked('I3', 'tw')" id='tw' name='tw' value='tw_visited' class="style16">Taiwan

				 </p>

				 </td>

				 <td style="width: 286pt; height: 382px;" valign="top" class="style9">

				 <p class="auto-style23">

				 <a name="map4"><input type='checkbox' onclick="onBoxClicked('I3', 'tj')" id='tj' name='tj' value='tj_visited' class="style16">Tajikistan

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'th')" id='th' name='th' value='th_visited' class="style16">Thailand

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'tl')" id='tl' name='tl' value='tl_visited' class="style16">Timor 
				 Leste

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'tk')" id='tk' name='tk' value='tk_visited' class="style16">Tokelau

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'to')" id='to' name='to' value='to_visited' class="style16">Tonga

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'tm')" id='tm' name='tm' value='tm_visited' class="style16">Turkmenistan

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'tv')" id='tv' name='tv' value='tv_visited' class="style16">Tuvalu

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'uz')" id='uz' name='uz' value='uz_visited' class="style16">Uzbekistan

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'vu')" id='vu' name='vu' value='vu_visited' class="style16">Vanuatu

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'vn')" id='vn' name='vn' value='vn_visited' class="style16">Viet 
				 Nam

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'fr_wf')" id='fr_wf' name='fr_wf' value='fr_wf_visited' class="style16">Wallis 
				 and Futuna


				

				 </p>


				

</td>

</tr>

</table>



<h2 class="style1">Europe</h2>
<div class="center">
<table style="height: 206px; width: 900px; text-align:center" class="auto-style223" align="center">
<tr>
<td valign="top" class="auto-style1" style="width: 266px">
		  		   <p class="auto-style24">

		  <input type='checkbox' onclick="onBoxClicked('I1', 'al')" id='al' name='al' value='al_visited' class="style16">Albania

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'ad')" id='ad' name='ad' value='ad_visited' class="style16">Andorra

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'at')" id='at' name='at' value='at_visited' class="style16">Austria

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'pt_az')" id='pt_az' name='pt_az' value='pt_az_visited' class="style16">Azores

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'by')" id='by' name='by' value='by_visited' class="style16">Belarus

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'be')" id='be' name='be' value='be_visited' class="style16">Belgium

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'ba')" id='ba' name='ba' value='ba_visited' class="style16">Bosnia 
				   and Herzegovina

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'bg')" id='bg' name='bg' value='bg_visited' class="style16">Bulgaria

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'ic')" id='ic' name='ic' value='ic_visited' class="style16">Canary&nbsp; 
				   Islands

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'ct')" id='ct' name='ct' value='ct_visited' class="style16">Crete 
				   (Greece)

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'hr')" id='hr' name='hr' value='hr_visited' class="style16">Croatia

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'cy')" id='cy' name='cy' value='cy_visited' class="style16">Cyprus

				   <br>

	<br class="style16"></p>

					 </td>

					 <td style="width: 286pt" valign="top" class="style9">

					 <p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I1', 'cz')" id='cz' name='cz' value='cz_visited' class="style16">Czech 
					 Republic <br><input type='checkbox' onclick="onBoxClicked('I1', 'dk')" id='dk' name='dk' value='dk_visited' class="style16">Denmark<br><input type='checkbox' onclick="onBoxClicked('I1', 'ee')" id='ee' name='ee' value='ee_visited' class="style16">Estonia

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'fo')" id='fo' name='fo' value='fo_visited' class="style16">Faroe 
					 Islands

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'fi')" id='fi' name='fi' value='fi_visited' class="style16">Finland

					 <br><input type='checkbox' onclick="onBoxClicked('I1', 'fr')" id='fr' name='fr' value='fr_visited' class="style16">France

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'de')" id='de' name='de' value='de_visited' class="style16">Germany<br>

					 <input type='checkbox' onclick="onBoxClicked('I1', 'gi')" id='gi' name='gi' value='gi_visited' class="style16">Gibraltar

					 <br><input type='checkbox' onclick="onBoxClicked('I4', 'gr')" id='gr' name='gr' value='gr_visited' class="style16">Greece

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I4', 'gg')" id='gg' name='gg' value='gg_visited' class="style16">Guernsey

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I4', 'hu')" id='hu' name='hu' value='hu_visited' class="style16">Hungary

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I4', 'is')" id='is' name='is' value='is_visited' class="style16">Iceland

					 <br>

	<br class="style16">

					 </p>

					 </td>

					 <td style="width: 286pt" valign="top" class="style9">

					 <p class="auto-style24">

	    <a name="map15">
	 				<input type='checkbox' onclick="onBoxClicked('I4', 'ie')" id='ie' name='ie' value='ie_visited' class="style16">Ireland

					 </a><br><input type='checkbox' onclick="onBoxClicked('I4', 'im_uk')" id='im_uk' name='im_uk' value='im_uk_visited' class="style16">Isle 
					 of Man

	<br><input type='checkbox' onclick="onBoxClicked('I4', 'it')" id='it' name='it' value='it_visited' class="style16">Italy<br><input type='checkbox' onclick="onBoxClicked('I5', 'je')" id='je' name='je' value='je_visited' class="style16">Jersey&nbsp;

					 <br><input type='checkbox' onclick="onBoxClicked('I5', 'ka')" id='ka' name='ka' value='ka_visited' class="style16">Kaliningrad 
					 (Russian Federation)

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I5', 'lv')" id='lv' name='lv' value='lv_visited' class="style16">Latvia <br class="style16"><input type='checkbox' onclick="onBoxClicked('I5', 'li')" id='li' name='li' value='li_visited' class="style16">Liechtenstein

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I5', 'lt')" id='lt' name='lt' value='lt_visited' class="style16">Lithuania

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I5', 'lu')" id='lu' name='lu' value='lu_visited' class="style16">Luxembourg

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I5', 'mk')" id='mk' name='mk' value='mk_visited' class="style16">Macedonia

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'pt_md')" id='pt_md' name='pt_md' value='pt_md_visited' class="style16">Madeira&nbsp;<br><input type='checkbox' onclick="onBoxClicked('I3', 'es_ma')" id='es_ma' name='es_ma' value='es_ma_visited' class="style16">Majorca, 
					 Minorca and Ibiza (Es) </p>

					 </td>

					 <td style="width: 286pt" valign="top" class="style9">

					 <p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I3', 'mt')" id='mt' name='mt' value='mt_visited' class="style16">Malta 

					 <br><input type='checkbox' onclick="onBoxClicked('I3', 'md')" id='md' name='md' value='md_visited' class="style16">Moldova

					 <br><input type='checkbox' onclick="onBoxClicked('I3', 'mc')" id='mc' name='mc' value='mc_visited' class="style16">Monaco

					 <br><input type='checkbox' onclick="onBoxClicked('I3', 'me')" id='me' name='me' value='me_visited' class="style16">Montenegro

					 <br><input type='checkbox' onclick="onBoxClicked('I3', 'an')" id='an' name='an' value='an_visited' class="style16">Netherlands

					 <br><input type='checkbox' onclick="onBoxClicked('I3', 'no')" id='no' name='no' value='no_visited' class="style16">Norway

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'pl')" id='pl' name='pl' value='pl_visited' class="style16">Poland

					 <br><input type='checkbox' onclick="onBoxClicked('I3', 'pt')" id='pt' name='pt' value='pt_visited' class="style16">Portugal

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'rd')" id='rd' name='rd' value='rd_visited' class="style16">Rhodes 
					 (Greece)

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ro')" id='ro' name='ro' value='ro_visited' class="style16">Romania<br><input type='checkbox' onclick="onBoxClicked('I3', 'ru')" id='ru' name='ru' value='ru_visited' class="style16">Russian 
					 Federation

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'sm')" id='sm' name='sm' value='sm_visited' class="style16">San 
					 Marino

	<br class="style16"></p>

					 </td>

					 <td style="width: 286pt" valign="top" class="style9">

					 <p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I3', 'sx')" id='sx' name='sx' value='sx_visited' class="style16">Sardinia 
					 (Italy) <br><input type='checkbox' onclick="onBoxClicked('I3', 'rs')" id='rs' name='rs' value='rs_visited' class="style16">Serbia

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'sq')" id='sq' name='sq' value='sq_visited' class="style16">Sicily 
					 (Italy)

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'sk')" id='sk' name='sk' value='sk_visited' class="style16">Slovakia

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'si')" id='si' name='si' value='si_visited' class="style16">Slovenia

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'es')" id='es' name='es' value='es_visited' class="style16">Spain

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'se')" id='se' name='se' value='se_visited' class="style16">Sweden

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ch')" id='ch' name='ch' value='ch_visited' class="style16">Switzerland

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ua')" id='ua' name='ua' value='ua_visited' class="style16">Ukraine

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'gb')" id='gb' name='gb' value='gb_visited' class="style16">United 
					 Kingdom

	<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'va')" id='va' name='va' value='va_visited' class="style16">Vatican 
					 City </p>
				

</td>

</tr>

</table>


<h2 class="style1">Middle East</h2>
<div class="center">
<table style="height: 206px; width: 900px; text-align:center" class="auto-style223" align="center">
<tr>
<td valign="top" class="auto-style1" style="width: 266px">
		  		 <p class="auto-style24">

	  <input type='checkbox' onclick="onBoxClicked('I1', 'bh')" id='bh' name='bh' value='bh_visited' class="style16">Bahrain

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'ps')" id='ps' name='ps1' value='ps_visited' class="style16">Gaza

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'ir')" id='ir' name='ir' value='ir_visited' class="style16">Iran

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'iq')" id='iq' name='iq' value='iq_visited' class="style16">Iraq

					</p>

					</td>

					<td style="width: 286pt" valign="top" class="style9">

	  			    <p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I1', 'il')" id='il' name='il' value='il_visited' class="style16">Israel

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'jo')" id='jo' name='jo' value='jo_visited' class="style16">Jordan

					<br><input type='checkbox' onclick="onBoxClicked('I1', 'kw')" id='kw' name='kw' value='kw_visited' class="style16">Kuwait

					</p>

					</td>

					<td style="width: 286pt" valign="top" class="style9">

					<p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I1', 'lb')" id='lb' name='lb' value='lb_visited' class="style16">Lebanon<br><input type='checkbox' onclick="onBoxClicked('I3', 'om')" id='om' name='om' value='om_visited' class="style16">Oman

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'qa')" id='qa' name='qa' value='qa_visited' class="style16">Qatar</p>

					</td>

					<td style="width: 286pt" valign="top" class="style9">

					<p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I3', 'sa')" id='sa' name='sa' value='sa_visited' class="style16">Saudi 
					Arabia<br><input type='checkbox' onclick="onBoxClicked('I3', 'sy')" id='sy' name='sy' value='sy_visited' class="style16">Syria

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'tr')" id='tr' name='tr' value='tr_visited' class="style16">Turkey

					</p>

					</td>

					<td style="width: 286pt" valign="top" class="style9">

					<p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I3', 'ae')" id='ae' name='ae' value='ae_visited' class="style16">United 
					Arab Emirates

<br><input type='checkbox' onclick="onBoxClicked('I3', 'ps')" id='ps0' name='ps' value='ps_visited' class="style16">West 
					Bank

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ye')" id='ye' name='ye' value='ye_visited' class="style16">Yemen

					</p>
				

</td>

</tr>

</table>


<h2 class="style1">North America</h2>
<div class="center">
<table style="height: 206px; width: 900px; text-align:center" class="auto-style223" align="center">
<tr>
<td valign="top" class="auto-style1" style="width: 266px">
		  		<p class="auto-style24">	  <input type='checkbox' onclick="onBoxClicked('I1', 'ai')" id='ai' name='ai' value='ai_visited' class="style16">Anguilla

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'aw')" id='aw' name='aw' value='aw_visited' class="style16">Aruba

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'bs')" id='bs' name='bs' value='bs_visited' class="style16">Bahamas

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'bb')" id='bb' name='bb' value='bb_visited' class="style16">Barbados

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'ag')" id='ag' name='ag' value='ag_visited' class="style16">Barbuda 
				and Antigua

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'bm')" id='bm' name='bm' value='bm_visited' class="style16">Bermuda

				 <br class="style16"></p>

				 </td>

				 <td style="width: 208px" valign="top" class="style9">

	  		     <p class="auto-style24">

    <a name="map20">
 				<input type='checkbox' onclick="onBoxClicked('I1', 'vg')" id='vg' name='vg' value='vg_visited' class="style16">British 
				 Virgin Islands</a><br><input type='checkbox' onclick="onBoxClicked('I1', 'ca')" id='ca' name='ca' value='ca_visited' class="style16">Canada

			   <br><input type='checkbox' onclick="onBoxClicked('I1', 'ky')" id='ky' name='ky' value='ky_visited' class="style16">Cayman 
				 Islands

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'cu')" id='cu' name='cu' value='cu_visited' class="style16">Cuba

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'an_cu')" id='an_cu' name='an_cu' value='an_cu_visited' class="style16">Curacao 
				 (Netherlands Antilles)<br><input type='checkbox' onclick="onBoxClicked('I1', 'dm')" id='dm' name='dm' value='dm_visited' class="style16">Dominica<br>

				 </p>

				 </td>

				 <td style="width: 208px" valign="top" class="style9">

				 <p class="auto-style24">

    <a name="map19">

				 <input type='checkbox' onclick="onBoxClicked('I1', 'do_rp')" id='do_rp' name='do_rp' value='do_rp_visited' class="style16">Dominican 
				 Republic<br>

    <a name="map16">
 				<input type='checkbox' onclick="onBoxClicked('I1', 'gl')" id='gl' name='gl' value='gl_visited' class="style16"><span class="style16">Greenland</span></a><br><input type='checkbox' onclick="onBoxClicked('I1', 'gd')" id='gd' name='gd' value='gd_visited' class="style16">Grenada<br><input type='checkbox' onclick="onBoxClicked('I1', 'fr_gp')" id='fr_gp' name='fr_gp' value='fr_gp_visited' class="style16">Guadeloupe

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'ht')" id='ht' name='ht' value='ht_visited' class="style16">Haiti

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'jm')" id='jm' name='jm' value='jm_visited' class="style16">Jamaica

<br class="style16">

				 <br><br class="style16"></p>

				 </td>

				 <td style="width: 209px" valign="top" class="style9">

				 <p class="auto-style24">

    <a name="map21">
 				<input type='checkbox' onclick="onBoxClicked('I3', 'fr_mq')" id='fr_mq' name='fr_mq' value='fr_mq_visited' class="style16">Martinique

				 </a><br>

    <a name="map18">
 				<input type='checkbox' onclick="onBoxClicked('I3', 'ms')" id='ms' name='ms' value='ms_visited' class="style16">Montserrat<br><input type='checkbox' onclick="onBoxClicked('I3', 'us_pr')" id='us_pr' name='us_pr' value='us_pr_visited' class="style16">Puerto 
				 Rico</a><br><input type='checkbox' onclick="onBoxClicked('I3', 'fr_bl')" id='fr_bl' name='fr_bl' value='fr_bl_visited' class="style16">St 
				 Barthelemy &amp; St Maarten<br><input type='checkbox' onclick="onBoxClicked('I3', 'kn')" id='kn' name='kn' value='kn_visited' class="style16">Saint 
				 Kitts and Nevis

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'lc')" id='lc' name='lc' value='lc_visited' class="style16">Saint 
				 Lucia<br>

</p>

				 </td>

				 <td style="width: 209px" valign="top" class="style9">

				 <p class="auto-style24">

    <a name="map17">
 				<input type='checkbox' onclick="onBoxClicked('I3', 'fr_pm')" id='fr_pm' name='fr_pm' value='fr_pm_visited' class="style16">Saint 
				 Pierre<br><input type='checkbox' onclick="onBoxClicked('I3', 'vc')" id='vc' name='vc' value='vc_visited' class="style16">Saint 
				 Vincent and Grenadine

</a><br><input type='checkbox' onclick="onBoxClicked('I3', 'tt')" id='tt' name='tt' value='tt_visited' class="style16">Trinidad 
				 and Tobago

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'tc')" id='tc' name='tc' value='tc_visited' class="style16">Turks 
				 and Caicos

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'us')" id='us' name='us' value='us_visited' class="style16">United 
				 States

<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'us_vi')" id='us_vi' name='us_vi' value='us_vi_visited' class="style16">US 
				 Virgin Islands <br></p>
				
</td>

</tr>

</table>



<h2 class="style1">South America</h2>
<div class="center">
<table style="height: 206px; width: 900px; text-align:center" class="auto-style223" align="center">
<tr>
<td valign="top" class="auto-style1" style="width: 266px">
		  		  		   <p class="auto-style24">

				  <input type='checkbox' onclick="onBoxClicked('I1', 'ar')" id='ar' name='ar' value='ar_visited' class="style16">Argentina

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'bz')" id='bz' name='bz' value='bz_visited' class="style16">Belize

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'bo')" id='bo' name='bo' value='bo_visited' class="style16">Bolivia

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'br')" id='br' name='br' value='br_visited' class="style16">Brazil

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'cl')" id='cl' name='cl' value='cl_visited' class="style16">Chile

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'co')" id='co' name='co' value='co_visited' class="style16">Colombia

							 </p>

							 </td>

							 <td style="width: 286pt" valign="top" class="style9">

				  		     <p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I1', 'cr')" id='cr' name='cr' value='cr_visited' class="style16">Costa 
							 Rica

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'cl_ei')" id='cl_ei' name='cl_ei' value='cl_ei_visited' class="style16">Easter 
							 Island

							 <br><input type='checkbox' onclick="onBoxClicked('I1', 'ec')" id='ec' name='ec' value='ec_visited' class="style16">Ecuador

							 <br><input type='checkbox' onclick="onBoxClicked('I1', 'sv')" id='sv' name='sv' value='sv_visited' class="style16">El 
							 Salvador

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I1', 'fk')" id='fk' name='fk' value='fk_visited' class="style16">Falkland 
							 Islands</p>

							 </td>

							 <td style="width: 286pt" valign="top" class="style9">

							 <p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I1', 'fr_gf')" id='fr_gf' name='fr_gf' value='fr_gf_visited' class="style16">French 
							 Guiana<br><input type='checkbox' onclick="onBoxClicked('I1', 'ec_ga')" id='ec_ga' name='ec_ga' value='ec_ga_visited' class="style16">Galapagos

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'gt')" id='gt' name='gt' value='gt_visited' class="style16">Guatemala

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'gy')" id='gy' name='gy' value='gy_visited' class="style16">Guyana

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'hn')" id='hn' name='hn' value='hn_visited' class="style16">Honduras

							 </p>

							 </td>

							 <td style="width: 286pt" valign="top" class="style9">

							 <p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I3', 'mx')" id='mx' name='mx' value='mx_visited' class="style16">Mexico

							 <br><input type='checkbox' onclick="onBoxClicked('I3', 'ni')" id='ni' name='ni' value='ni_visited' class="style16">Nicaragua

							 <br><input type='checkbox' onclick="onBoxClicked('I3', 'pa')" id='pa' name='pa' value='pa_visited' class="style16">Panama

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'py')" id='py' name='py' value='py_visited' class="style16">Paraguay

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'pe')" id='pe' name='pe' value='pe_visited' class="style16">Peru

							 </p>

							 </td>

							 <td style="width: 286pt" valign="top" class="style9">

							 <p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I3', 'gs')" id='gs' name='gs' value='gs_visited' class="style16">South 
							 Georgia and Sandwich Islands<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'sr')" id='sr' name='sr' value='sr_visited' class="style16">Suriname

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'uy')" id='uy' name='uy' value='uy_visited' class="style16">Uruguay

			<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 've')" id='ve' name='ve' value='ve_visited' class="style16">Venezuela

							</p>
			
</td>

</tr>

</table>

<div class="contentdiv">

<p class="auto-style23">URL Shortener and URL Extractor created by <a href="http://takien.com" target="_blank">

Takien</a></p>

<p class="auto-style23">Make your own version of this site.&nbsp;See the sourceforge 
project:&nbsp;<br><a href="http://sourceforge.net/projects/whereyoubin/">
http://sourceforge.net/projects/whereyoubin/</a></p>
</div></div></div></div></div></div></div></div>

</td>
</tr>
</table>
</div>
</div>



<map id="<?=$thisMap?>_image" name="<?=$thisMap?>_image">
<area shape="poly" alt="Canada" coords="182,94,217,59,306,39,343,45,373,42,415,28,402,21,425,17,490,9,486,16,449,29,423,45,443,56,451,68,429,93,456,150,436,149,422,149,414,159,392,173,391,158,389,148,369,162,330,178,317,155,290,143,191,146,175,144,182,135,189,132,187,125,196,103,189,102,182,100" nohref title="Canada" onClick="onBoxClicked2('I1','ca')" />
<area shape="poly" alt="United States" coords="372,175,346,187,337,207,322,214,314,224,314,248,308,251,303,232,290,224,281,233,264,230,248,240,246,249,233,232,226,233,219,221,208,223,180,217,164,208,160,185,173,169,180,159,187,150,198,144,221,144,240,144,267,144,292,144,321,160,326,178,356,167,361,161,374,159,387,150,391,152,392,156,387,164" nohref title="United States" onClick="onBoxClicked2('I3', 'us')" />
<area shape="poly" alt="United States" coords="214,64,207,69,191,84,178,94,182,102,192,102,192,105,192,114,185,123,175,102,159,96,141,93,89,118,87,114,110,102,103,100,107,87,128,82,137,77,119,78,121,71,139,69,144,66,139,61,159,59,164,55,175,55,194,52,200,53,221,55" nohref title="United States" onClick="onBoxClicked2('I3', 'us')" />
<area shape="poly" alt="United States" coords="9,257,5,262,12,264,16,273,27,273,29,265,21,260,16,255,11,253" nohref title="United States" onClick="onBoxClicked2('I3', 'us')" />
<area shape="poly" alt="Mexico" coords="278,279,267,281,264,289,258,289,257,296,249,290,246,294,233,290,228,289,219,285,212,281,205,273,205,260,196,248,189,230,183,223,180,226,189,246,191,258,182,249,176,237,173,219,176,217,182,217,205,224,219,223,224,232,232,233,242,248,240,264,242,273,251,281,264,278,267,267,283,266" nohref title="Mexico" onClick="onBoxClicked2('I3', 'mx')" />
<area shape="poly" alt="Guatemala" coords="271,297,269,297,269,297,267,297,267,299,267,299,267,301,265,301,265,303,264,303,264,301,262,301,262,299,258,299,258,299,258,299,258,297,257,297,257,297,258,297,258,294,258,294,258,292,264,292,264,290,264,290,264,290,265,290,265,289,264,289,264,285,265,285,265,283,267,283,267,283,271,283,270,285,271,285,270,289,269,289,269,292,273,292,273,292,273,292,273,294,273,294,273,296,271,296,271,296,271,296" nohref title="Guatemala" onClick="onBoxClicked2('I3', 'gt')" />
<area shape="poly" alt="Belize" coords="271,285,271,289,271,289,269,290,269,292,273,292,275,291,276,290,275,289,277,289,277,287,277,286,277,286,277,285,278,283,278,283,277,282,278,281,278,279,275,279,274,280,274,280,274,281,272,281,272,284" nohref title="Belize" onClick="onBoxClicked2('I1', 'bz')" />
<area shape="poly" alt="El Salvador" coords="267,299,267,299,267,301,267,301,267,301,267,303,265,303,265,303,267,303,267,305,273,305,273,303,274,303,274,303,274,303,274,301,274,301,274,301,274,299,273,299,273,299,271,299,271,297,269,297,269,299" nohref title="El Salvador" onClick="onBoxClicked2('I1', 'sv')" />
<area shape="poly" alt="Honduras" coords="271,297,271,297,271,297,273,297,273,299,274,299,274,299,274,299,274,301,276,301,276,303,274,303,274,305,276,305,276,305,278,305,278,305,280,305,280,303,280,303,280,301,281,301,281,299,285,299,285,299,287,299,287,297,289,297,289,297,292,297,292,297,292,297,292,296,292,296,292,292,289,292,289,292,281,292,281,292,274,292,274,294,273,294,273,296,273,296,273,296,271,296,271,297" nohref title="Honduras" onClick="onBoxClicked2('I3', 'hn')" />
<area shape="poly" alt="Costa Rica" coords="281,314,281,314,281,315,281,315,281,315,281,315,281,317,281,317,281,319,281,319,283,319,283,321,287,321,287,321,287,321,287,322,289,322,289,322,289,322,289,324,290,324,290,324,290,324,290,326,292,326,292,324,292,324,292,322,294,322,294,321,292,321,292,319,292,319,292,319,290,319,290,315,289,315,289,315,283,315,283,314" nohref title="Costa Rica" onClick="onBoxClicked2('I1', 'cr')" />
<area shape="poly" alt="Nicaragua" coords="281,314,289,315,290,315,292,303,292,297,287,297,287,299,285,299,281,301,280,303,278,305,276,305,276,306,278,308,280,312,280,312" nohref title="Nicaragua" onClick="onBoxClicked2('I3', 'ni')" />
<area shape="poly" alt="Panama" coords="294,322,294,324,292,324,292,326,293,327,296,328,297,328,297,328,297,328,297,332,302,332,302,332,304,331,303,330,305,330,305,328,303,328,305,328,306,327,306,325,307,325,308,325,312,325,312,324,312,325,314,326,314,326,312,327,312,328,311,329,312,330,312,330,314,330,314,330,315,330,315,328,317,328,317,326,317,324,315,324,315,324,315,324,316,323,314,322,312,322,312,322,306,322,306,322,303,322,303,324,301,324,301,324,299,324,299,324,297,324,297,322,296,322,296,322" nohref title="Panama" onClick="onBoxClicked2('I3', 'pa')" />
<area shape="poly" alt="Colombia" coords="354,353,356,354,353,354,347,356,347,356,346,358,347,362,346,363,347,374,347,379,346,385,344,381,346,378,342,374,335,376,330,371,328,367,321,362,317,363,308,356,314,349,314,344,315,342,314,338,314,331,319,326,326,315,330,314,333,314,338,308,342,308,340,312,338,312,333,319,337,331,340,333,346,335,349,337,354,338,354,340,354,347" nohref title="Colombia" onClick="onBoxClicked2('I1', 'co')" />
<area shape="poly" alt="Venezuela" coords="388,326,381,337,385,340,376,346,371,346,367,346,371,354,363,360,360,358,356,351,356,346,354,337,351,337,341,333,337,329,334,320,338,312,344,314,348,311,353,314,360,317,363,318,366,318,365,319,365,319,369,319,371,318,374,318,378,321,383,322" nohref title="Venezuela" onClick="onBoxClicked2('I3', 've')" />
<area shape="poly" alt="Guyana" coords="397,337,397,337,401,337,399,338,397,340,397,342,395,344,397,349,399,354,392,358,388,356,387,353,387,346,387,344,387,344,385,342,385,340,385,338,383,337,385,331,387,330,388,326,390,328,394,331" nohref title="Guyana" onClick="onBoxClicked2('I3', 'gy')" />
<area shape="poly" alt="Suriname" coords="410,346,410,346,410,347,410,347,410,351,410,353,406,353,404,353,406,353,401,354,399,353,399,347,399,347,397,347,395,346,397,342,397,340,399,340,401,338,403,338,408,338,410,338,410,338,410,340,410,344,410,346" nohref title="Suriname" onClick="onBoxClicked2('I3', 'sr')" />
<area shape="poly" alt="French Guiana" coords="419,342,419,344,420,344,420,346,420,346,422,347,420,349,419,351,417,354,413,354,410,354,410,353,411,351,411,347,411,347,410,344,410,344,411,342,411,340,413,338,417,340,417,342,417,342,417,342,419,342,419,344,419,342,419,344,419,344,419,344" nohref title="French Guiana" onClick="onBoxClicked2('I1', 'fr_gf')" />
<area shape="poly" alt="Brazil" coords="372,353,369,346,371,346,376,346,383,342,387,342,387,344,385,349,387,353,388,356,390,360,397,354,401,354,408,353,410,354,417,354,422,346,426,351,426,356,428,358,426,363,419,369,420,372,426,367,429,363,433,363,435,365,433,371,429,372,429,374,435,372,436,371,438,369,442,369,444,369,449,371,451,372,451,376,449,378,454,376,460,376,470,378,477,381,481,385,493,392,492,403,485,413,477,422,476,429,477,436,476,449,474,454,470,463,467,467,460,468,452,470,449,474,442,479,444,488,438,497,436,504,435,508,429,513,419,504,413,502,411,499,411,495,419,490,422,485,420,479,419,474,411,468,406,468,403,463,399,452,401,451,401,444,399,440,395,436,394,436,390,435,387,429,383,426,376,420,371,420,367,417,365,411,365,408,362,408,356,411,353,411,349,413,346,411,346,410,344,406,338,408,337,406,333,403,331,397,331,394,331,394,335,388,338,385,340,385,346,385,347,381,346,383,346,385,346,385,346,385,346,385,346,385,346,385,349,374,347,371,347,365,349,362,347,358,353,356,354,356,356,356,362,360,369,358" nohref title="Brazil" onClick="onBoxClicked2('I1', 'br')" />
<area shape="poly" alt="Ecuador" coords="321,371,321,372,319,376,315,378,314,378,314,378,312,379,308,383,308,387,305,385,299,383,305,376,305,374,301,376,299,372,299,371,299,371,301,369,303,367,303,365,305,363,305,362,306,358,308,360,312,362,314,362,315,363,319,363,322,365,322,369" nohref title="Ecuador" onClick="onBoxClicked2('I1', 'ec')" />
<area shape="poly" alt="Peru" coords="331,392,331,394,330,395,330,399,338,410,342,410,344,410,346,413,347,413,349,415,353,420,353,428,351,428,351,435,353,436,354,438,349,445,347,449,342,442,333,436,328,435,322,426,317,417,314,411,312,406,308,403,308,399,306,395,303,392,299,388,299,383,308,387,310,385,312,381,312,379,315,378,319,376,321,376,324,367,330,372,335,376,338,376,344,376,342,385,337,385,331,388" nohref title="Peru" onClick="onBoxClicked2('I3', 'pe')" />
<area shape="poly" alt="Bolivia" coords="388,433,388,436,392,436,395,438,397,442,401,447,397,452,392,451,387,452,383,460,379,463,374,465,369,463,363,467,360,461,360,461,356,454,356,449,354,449,353,444,354,438,354,436,353,433,353,429,353,426,353,422,351,415,353,413,356,411,362,410,363,410,363,413,369,420,371,422,372,422,376,422,378,424,381,426,385,428,387,429" nohref title="Bolivia" onClick="onBoxClicked2('I1', 'bo')" />
<area shape="poly" alt="Paraguay" coords="406,468,415,472,419,476,417,483,415,486,410,488,403,486,403,483,404,479,404,477,399,474,395,474,394,472,392,470,388,470,387,468,385,467,383,463,381,461,383,460,385,458,387,454,388,452,390,452,394,451,395,452,397,452,397,454,399,456,401,458,401,460,403,463,403,465" nohref title="Paraguay" onClick="onBoxClicked2('I3', 'py')" />
<area shape="poly" alt="Uruguay" coords="426,511,429,515,429,517,428,518,428,520,424,520,422,522,420,522,419,520,417,520,415,520,413,518,410,518,410,515,408,513,408,511,408,509,410,508,410,502,411,501,415,504,417,506,419,506,419,506,420,508,420,508,422,508,422,509,422,509,426,509" nohref title="Uruguay" onClick="onBoxClicked2('I3', 'uy')" />
<area shape="poly" alt="Argentina" coords="417,527,417,527,419,531,419,533,417,534,415,538,413,538,410,540,406,540,404,540,401,540,401,542,401,542,403,545,403,549,401,549,399,550,395,550,392,549,392,549,394,556,397,558,395,561,395,563,395,565,394,568,392,570,394,575,397,577,399,582,395,590,395,591,394,593,395,597,394,599,388,599,385,595,381,591,379,590,378,588,378,584,378,582,378,575,376,574,376,566,372,563,371,559,371,558,369,556,369,552,367,550,367,549,365,547,365,543,365,542,365,540,365,540,365,536,365,534,363,534,363,533,363,531,362,531,362,529,363,527,363,525,363,525,365,525,363,524,363,522,362,520,362,518,362,517,363,517,362,515,362,511,360,508,358,504,360,502,358,497,358,493,362,488,363,485,362,483,362,477,362,476,363,468,365,465,371,465,376,467,379,465,381,463,383,467,385,468,388,470,392,474,397,476,403,477,404,479,401,486,403,488,406,488,410,490,415,486,417,483,419,477,420,485,417,490,410,497,411,499,410,502,408,508,406,509,406,511,406,513,408,515,410,517,410,520,410,520,410,520,413,524,415,524" nohref title="Argentina" onClick="onBoxClicked2('I1', 'ar')" />
<area shape="poly" alt="Argentina" coords="401,604,403,604,403,604,403,604,404,604,404,606,404,606,404,606,406,606,406,606,406,607,408,607,410,607,410,609,410,607,410,609,411,609,411,609,413,609,413,609,413,611,417,611,417,611,417,613,408,613,408,613,406,613,406,613,406,613,406,609,404,609,404,609,404,609,404,607,403,607,403,606,403,606,403,606,401,606" nohref title="Argentina" onClick="onBoxClicked2('I1', 'ar')" />
<area shape="poly" alt="Chile" coords="394,599,395,597,397,599,395,600,392,604,387,602,383,600,379,597,372,588,371,581,363,574,363,574,365,572,369,568,365,559,363,554,358,549,356,545,356,542,356,540,354,536,354,529,356,529,356,511,354,511,354,508,353,501,353,493,353,483,353,477,351,476,351,472,353,467,353,461,351,456,349,452,347,449,351,445,354,449,356,458,358,460,363,467,363,470,362,476,362,479,362,485,362,485,358,493,358,499,358,502,358,508,362,515,362,515,362,517,362,517,362,520,362,520,362,520,362,524,363,524,363,525,363,525,363,525,362,529,362,531,363,536,365,542,369,554,376,568,378,582,378,590,381,591,388,599" nohref title="Chile" onClick="onBoxClicked2('I1', 'cl')" />
<area shape="poly" alt="Chile" coords="395,604,397,602,399,602,401,602,401,606,404,609,406,613,404,613,404,613,403,613,397,611,395,607,395,606" nohref title="Chile" onClick="onBoxClicked2('I1', 'cl')" />
<area shape="poly" alt="Falkland Islands" coords="422,599,428,600,429,600,435,597,433,595,428,593,426,593,422,595,422,597" nohref title="Falkland Islands" onClick="onBoxClicked2('I1', 'fk')" />
<area shape="poly" alt="South Georgia and Sandwich Islands" coords="493,609,499,615,499,615,499,613,495,609,493,609" nohref title="South Georgia and Sandwich Islands" onClick="onBoxClicked2('I3', 'gs')" />
<area shape="rect" alt="South Georgia and Sandwich Islands" coords="506,615,508,616" nohref title="South Georgia and Sandwich Islands" onClick="onBoxClicked2('I3', 'gs')" />
<area shape="rect" alt="South Georgia and Sandwich Islands" coords="524,623,524,623" nohref title="South Georgia and Sandwich Islands" onClick="onBoxClicked2('I3', 'gs')" />
<area shape="rect" alt="Saint Helena" coords="615,438,616,438" nohref title="Saint Helena" onClick="onBoxClicked2('I3', 'sh')" />
<area shape="poly" alt="Sao Tome and Principe " coords="666,354,664,362,666,363,670,363,672,360,672,356,670,354" nohref title="Sao Tome and Principe " onClick="onBoxClicked2('I3', 'st')" />
<area shape="poly" alt="Cape Verde" coords="534,287,542,297,549,297,549,290,536,285" nohref title="Cape Verde" onClick="onBoxClicked2('I1', 'cv')" />
<area shape="poly" alt="Canary Islands" coords="550,240,577,240,582,230,572,233,561,230,552,228" nohref title="Canary Islands" onClick="onBoxClicked2('I1', 'ic')" />
<area shape="poly" alt="Madeira (PT)" coords="558,210,569,210,569,203,565,203,565,205,559,205,559,208" nohref title="Madeira (PT)" onClick="onBoxClicked2('I3', 'pt_md')" />
<area shape="poly" alt="Azores" coords="509,182,522,188,529,186,529,180,520,176,511,176,506,173,501,173,501,176,508,180" nohref title="Azores" onClick="onBoxClicked2('I1', 'pt_az')" />
<area shape="rect" alt="Bermuda" coords="381,214,389,220" nohref title="Bermuda" onClick="onBoxClicked2('I1', 'bm')" />
<area shape="poly" alt="The Bahamas" coords="319,251,321,257,324,251,324,249,326,251,330,255,330,258,330,260,330,264,331,262,331,265,331,267,337,267,337,260,333,255,330,249,328,244,326,240,321,240,319,242,319,246,319,248,317,251" nohref title="The Bahamas" onClick="onBoxClicked2('I1', 'bs')" />
<area shape="poly" alt="Cuba" coords="296,265,301,262,306,264,308,265,315,269,317,271,319,271,315,273,315,273,319,274,324,274,330,274,331,274,335,274,335,273,335,271,330,267,328,267,322,265,314,260,310,258,297,258,294,262,292,264,292,265" nohref title="Cuba" onClick="onBoxClicked2('I1', 'cu')" />
<area shape="poly" alt="Jamaica" coords="314,280,314,286,320,286,325,286,325,280,322,280,319,280,315,280" nohref title="Jamaica" onClick="onBoxClicked2('I3', 'jm')" />
<area shape="poly" alt="Cayman Islands" coords="299,280,306,280,306,274,301,274,299,274,299,276" nohref title="Cayman Islands" onClick="onBoxClicked2('I1', 'ky')" />
<area shape="poly" alt="Haiti" coords="344,274,344,283,340,283,340,281,338,281,337,283,333,283,331,281,330,281,330,280,338,280,337,280,337,274" nohref title="Haiti" onClick="onBoxClicked2('I1', 'ht')" />
<area shape="poly" alt="Dominican Republic" coords="346,281,346,274,349,274,353,276,356,278,356,280,356,281,354,281,353,281,351,281,349,281,347,283,346,283,346,283,346,274" nohref title="Dominican Republic" onClick="onBoxClicked2('I1', 'do_rp')" />
<area shape="poly" alt="Turks and Caicos" coords="342,267,347,267,348,260,338,260,338,262,338,264" nohref title="Turks and Caicos" onClick="onBoxClicked2('I3', 'tc')" />
<area shape="poly" alt="Puerto Rico" coords="360,281,360,285,366,285,369,282,369,280,365,279,360,279,360,281" nohref title="Puerto Rico" onClick="onBoxClicked2('I3', 'us_pr')" />
<area shape="poly" alt="US Virgin Islands" coords="370,280,370,281,367,284,365,287,373,287,373,282,373,281,373,278,369,278" nohref title="US Virgin Islands" onClick="onBoxClicked2('I3', 'us_vi')" />
<area shape="rect" alt="Anguilla" coords="375,280,379,284" nohref title="Anguilla" onClick="onBoxClicked2('I1', 'ai')" />
<area shape="poly" alt="Saint Kitts and Nevis" coords="375,290,378,290,380,289,379,287,378,287,378,285,376,285" nohref title="Saint Kitts and Nevis" onClick="onBoxClicked2('I3', 'kn')" />
<area shape="poly" alt="Saint Barthelemy" coords="378,283,379,287,379,287,380,289,384,289,384,283,379,283" nohref title="Saint Barthelemy" onClick="onBoxClicked2('I3', 'fr_bl')" />
<area shape="poly" alt="Barbuda and Antigua" coords="385,285,385,288,389,288,389,283,387,283,385,283" nohref title="Barbuda and Antigua" onClick="onBoxClicked2('I1', 'ag')" />
<area shape="poly" alt="Montserrat" coords="381,294,385,294,385,289,381,289" nohref title="Montserrat" onClick="onBoxClicked2('I3', 'ms')" />
<area shape="poly" alt="Guadeloupe" coords="385,289,385,294,390,291,389,288,387,288,385,288" nohref title="Guadeloupe" onClick="onBoxClicked2('I1', 'fr_gp')" />
<area shape="rect" alt="Easter Island" coords="131,474,137,480" nohref title="Easter Island" onClick="onBoxClicked2('I1', 'cl_ei')" />
<area shape="rect" alt="Pitcairn Islands" coords="79,448,87,455" nohref title="Pitcairn Islands" onClick="onBoxClicked2('I3', 'pn')" />
<area shape="poly" alt="Galapagos" coords="260,358,260,366,268,366,268,362,268,356,262,356,260,356" nohref title="Galapagos" onClick="onBoxClicked2('I1', 'ec_ga')" />
<area shape="poly" alt="Dominica" coords="387,292,387,297,392,298,393,293,387,292" nohref title="Dominica" onClick="onBoxClicked2('I1', 'dm')" />
<area shape="poly" alt="Martinique" coords="387,298,387,300,392,302,393,298,388,297" nohref title="Martinique" onClick="onBoxClicked2('I3', 'fr_mq')" />
<area shape="poly" alt="Saint Lucia" coords="385,303,385,305,390,306,391,302,387,299,385,301" nohref title="Saint Lucia" onClick="onBoxClicked2('I3', 'lc')" />
<area shape="poly" alt="Barbados" coords="393,304,393,308,400,310,400,304,394,302,393,302" nohref title="Barbados" onClick="onBoxClicked2('I1', 'bb')" />
<area shape="poly" alt="Saint Vincent and Grenadine" coords="383,305,383,308,387,310,389,306,383,305" nohref title="Saint Vincent and Grenadine" onClick="onBoxClicked2('I3', 'vc')" />
<area shape="poly" alt="Grenada" coords="381,314,385,313,386,309,381,308,381,312" nohref title="Grenada" onClick="onBoxClicked2('I1', 'gd')" />
<area shape="poly" alt="Trinidad and Tobago" coords="379,315,378,321,379,321,385,321,387,320,388,317,388,316,388,315,388,312,387,312,386,313,383,314,383,315,379,315,379,315" nohref title="Trinidad and Tobago" onClick="onBoxClicked2('I3', 'tt')" />
<area shape="poly" alt="Spain" coords="613,192,611,192,611,198,615,198,615,200,616,201,618,201,619,200,619,197,625,197,625,200,631,200,632,198,641,191,641,182,645,182,645,180,647,180,647,178,648,178,648,176,654,176,654,175,654,173,652,173,652,171,650,171,650,172,648,171,648,173,648,176,643,176,643,171,640,171,638,171,638,169,636,169,635,168,616,167,616,166,609,166,606,173,609,173,613,175,613,176,616,176,616,178,615,178,615,182,613,182,613,191" nohref title="Spain" onClick="onBoxClicked2('I3', 'es')" />
<area shape="poly" alt="Portugal" coords="606,176,606,176,606,185,604,185,604,191,606,191,606,192,606,194,604,194,604,196,606,196,606,198,609,198,609,196,611,196,611,192,613,192,613,183,613,182,615,182,615,178,616,178,616,176,613,176,613,175,608,173,607,175" nohref title="Portugal" onClick="onBoxClicked2('I3', 'pt')" />
<area shape="poly" alt="Majorca, Minorca and Ibiza (Es)" coords="645,186,645,190,648,190,648,188,653,188,654,186,658,186,658,182,654,182,654,183,649,183,649,185,648,185,648,186" nohref title="Majorca, Minorca and Ibiza (Es)" onClick="onBoxClicked2('I3', 'es_ma')" />
<area shape="rect" alt="Gibraltar" coords="619,197,625,203" nohref title="Gibraltar" onClick="onBoxClicked2('I1', 'gi')" />
<area shape="poly" alt="France" coords="636,166,636,153,625,150,625,144,629,145,629,147,637,147,637,143,638,143,638,141,639,141,643,141,650,134,652,134,654,135,659,141,661,141,661,145,668,145,668,144,670,144,670,146,670,148,668,148,668,150,668,151,666,151,666,153,664,153,664,153,666,155,666,157,666,157,667,160,667,160,666,160,666,162,667,162,667,164,668,164,668,165,667,165,667,169,666,169,659,169,654,169,654,171,650,171,650,172,650,172,649,172,648,170,643,170,643,171,639,171,638,171,638,169,636,169,635,168,635,167,635,166" nohref title="France" onClick="onBoxClicked2('I1', 'fr')" />
<area shape="poly" alt="Belgium" coords="654,134,656,132,657,132,661,132,661,132,661,134,666,134,666,135,664,135,664,139,663,139,661,141,661,141,659,139,659,139,659,139,657,139" nohref title="Belgium" onClick="onBoxClicked2('I1', 'be')" />
<area shape="poly" alt="Netherlands" coords="657,130,663,125,666,123,668,123,668,125,668,128,666,128,666,132,664,132,664,132,664,134,661,134,661,132,657,132" nohref title="Netherlands" onClick="onBoxClicked2('I3', 'an')" />
<area shape="poly" alt="Guernsey" coords="629,140,629,147,633,147,633,140" nohref title="Guernsey" onClick="onBoxClicked2('I4', 'gg')" />
<area shape="poly" alt="Jersey" coords="633,144,633,147,637,147,637,141,633,141,633,143" nohref title="Jersey" onClick="onBoxClicked2('I5', 'je')" />
<area shape="poly" alt="United Kingdom" coords="623,137,623,139,629,139,629,137,639,137,639,135,647,135,647,134,645,134,645,130,645,132,647,130,647,130,650,130,650,126,643,126,643,123,641,121,641,119,639,119,639,116,638,116,638,114,634,112,634,110,636,110,636,107,632,107,632,103,631,103,631,105,627,105,627,109,623,109,625,112,627,112,627,116,627,118,632,118,632,121,632,123,632,125,627,125,627,128,625,128,625,132,627,132,627,134,629,134,629,135,623,135" nohref title="United Kingdom" onClick="onBoxClicked2('I3', 'gb')" />
<area shape="poly" alt="Isle of Man" coords="626,125,632,125,632,118,629,118,629,119,626,120" nohref title="Isle of Man" onClick="onBoxClicked2('I4', 'im_uk')" />
<area shape="poly" alt="United Kingdom" coords="616,119,616,121,625,121,625,118,623,118,623,116,618,116,618,118,618,118" nohref title="United Kingdom" onClick="onBoxClicked2('I3', 'gb')" />
<area shape="poly" alt="Ireland" coords="622,121,622,130,616,130,616,132,613,132,613,134,606,134,607,130,607,128,609,128,609,123,607,123,607,121,607,121,609,119,615,119,615,116,618,116,618,118,616,119,616,121" nohref title="Ireland" onClick="onBoxClicked2('I4', 'ie')" />
<area shape="poly" alt="Iceland" coords="574,78,574,80,575,80,575,82,577,82,577,80,581,80,581,82,582,82,582,84,590,84,590,82,595,82,595,80,600,80,600,78,602,78,602,77,604,77,604,75,602,75,602,73,600,73,600,71,591,71,591,73,588,73,588,71,584,71,584,73,581,73,581,75,575,75,575,77,575,78" nohref title="Iceland" onClick="onBoxClicked2('I4', 'is')" />
<area shape="poly" alt="Faroe Islands" coords="625,94,632,94,632,92,632,85,625,85,625,89" nohref title="Faroe Islands" onClick="onBoxClicked2('I1', 'fo')" />
<area shape="poly" alt="Greenland" coords="481,71,481,86,485,93,497,98,509,93,513,86,522,75,538,75,549,66,563,64,581,61,586,52,581,46,591,43,600,32,600,27,604,23,620,23,620,14,604,14,591,9,568,9,520,14,495,14,477,23,461,23,458,27,458,34,461,36,470,37,476,37,479,37,485,39,486,45,488,48,492,53,493,57,492,61,488,62" nohref title="Greenland" onClick="onBoxClicked2('I1', 'gl')" />
<area shape="poly" alt="Norway" coords="623,55,622,61,632,61,631,53,623,53" nohref title="Norway" onClick="onBoxClicked2('I3', 'no')" />
<area shape="poly" alt="Norway" coords="680,29,693,39,702,41,705,34,705,32,709,36,720,37,721,34,720,30,725,29,727,25,725,21,713,21,707,20,705,21,700,21,696,23,680,23,677,23,677,30" nohref title="Norway" onClick="onBoxClicked2('I3', 'no')" />
<area shape="poly" alt="Norway" coords="663,94,663,100,666,103,670,105,675,105,677,103,680,102,684,102,684,98,686,94,688,94,688,91,686,91,686,80,689,80,691,78,693,75,698,69,704,64,709,61,714,61,725,61,725,59,729,57,729,55,725,53,718,53,711,55,700,59,695,64,686,71,680,78,673,84,666,84,663,91" nohref title="Norway" onClick="onBoxClicked2('I3', 'no')" />
<area shape="poly" alt="Denmark" coords="673,119,679,119,679,116,682,116,682,112,680,109,677,107,675,107,673,109,672,112,672,116" nohref title="Denmark" onClick="onBoxClicked2('I1', 'dk')" />
<area shape="poly" alt="Sweden" coords="684,102,686,94,688,94,688,91,688,87,686,82,689,80,696,71,707,62,711,61,716,61,718,64,720,68,721,73,718,73,714,78,707,84,704,86,704,89,702,89,702,93,707,96,707,100,705,102,702,105,700,110,698,112,696,114,695,116,689,116,688,114,686,109,684,105,684,103,682,102" nohref title="Sweden" onClick="onBoxClicked2('I3', 'se')" />
<area shape="poly" alt="Finland" coords="716,61,725,61,725,59,729,57,729,53,729,53,736,53,743,55,741,57,737,57,737,59,737,59,736,61,736,62,739,66,737,68,737,71,739,73,741,78,743,78,745,84,746,87,746,89,743,91,741,93,739,94,734,94,734,96,721,96,720,94,716,93,714,86,723,77,723,73,721,73,720,68" nohref title="Finland" onClick="onBoxClicked2('I1', 'fi')" />
<area shape="poly" alt="Finland" coords="709,96,713,100,714,100,714,94,709,94" nohref title="Finland" onClick="onBoxClicked2('I1', 'fi')" />
<area shape="poly" alt="Germany" coords="668,123,668,130,666,130,666,132,664,132,664,134,666,134,666,137,664,137,664,137,664,139,668,139,668,141,668,142,668,143,668,143,670,143,672,144,670,146,670,148,668,148,668,148,668,150,677,150,677,151,678,151,678,150,681,150,681,151,682,151,682,150,684,150,686,150,688,150,688,148,689,148,690,147,691,146,691,145,692,145,692,144,691,144,691,143,689,143,689,141,688,141,688,137,691,137,691,135,696,135,696,130,695,130,695,123,693,121,691,121,689,119,688,119,686,121,680,121,680,119,679,119,675,119,675,119,673,121,673,123" nohref title="Germany" onClick="onBoxClicked2('I1', 'de')" />
<area shape="poly" alt="Switzerland" coords="666,150,676,150,676,151,678,151,678,152,678,153,679,153,680,153,680,155,679,155,677,155,677,155,675,157,666,157,666,155,664,155,663,155,663,153,664,153,664,151,666,151" nohref title="Switzerland" onClick="onBoxClicked2('I3', 'ch')" />
<area shape="poly" alt="Austria" coords="682,153,682,152,682,151,683,151,683,150,687,150,687,149,688,149,688,148,689,148,690,147,691,146,692,144,705,144,705,148,706,148,706,150,705,150,705,151,703,151,703,153,696,154,695,154,694,155,694,155,689,155,687,153,685,153" nohref title="Austria" onClick="onBoxClicked2('I1', 'at')" />
<area shape="poly" alt="Czech Republic" coords="688,139,688,137,692,137,692,136,694,136,694,135,696,135,696,135,698,137,700,137,700,137,700,137,703,138,704,138,704,139,707,139,707,140,707,140,708,140,708,141,709,141,709,143,707,143,707,143,707,144,698,144,700,143,696,143,696,143,696,144,691,144,691,143,689,143,689,141,688,141" nohref title="Czech Republic" onClick="onBoxClicked2('I1', 'cz')" />
<area shape="poly" alt="Poland" coords="695,126,695,123,696,123,696,121,700,121,700,119,704,119,704,118,707,118,707,119,709,119,709,121,711,119,714,119,716,119,716,121,721,121,723,121,723,121,725,121,725,125,727,125,727,128,727,132,729,134,729,135,729,137,728,138,726,138,726,139,725,139,725,141,724,141,724,142,722,142,722,141,721,141,709,141,709,139,707,139,707,138,703,138,703,137,699,137,699,136,697,136,696,135,696,130,695,130,695,123,696,123,696,121,696,123,695,125" nohref title="Poland" onClick="onBoxClicked2('I3', 'pl')" />
<area shape="poly" alt="Kalingrad (Russian Federation)" coords="714,118,714,119,716,119,716,121,721,121,721,118,721,116,716,116,716,116,716,118" nohref title="Kalingrad (Russian Federation)" onClick="onBoxClicked2('I3', 'ka')" />
<area shape="poly" alt="Lithuania" coords="718,114,718,112,732,112,732,114,734,114,734,114,736,114,736,116,737,116,737,118,736,118,736,118,736,119,734,121,732,121,732,123,725,123,725,121,723,119,721,116,718,116" nohref title="Lithuania" onClick="onBoxClicked2('I5', 'lt')" />
<area shape="poly" alt="Latvia" coords="718,114,716,114,716,109,718,109,718,107,727,107,727,105,734,105,734,107,737,107,737,109,739,109,739,112,739,114,737,114,737,116,736,116,736,114,732,114,732,112,718,112" nohref title="Latvia" onClick="onBoxClicked2('I5', 'lv')" />
<area shape="poly" alt="Estonia" coords="725,105,718,105,718,100,725,100,725,98,734,98,734,100,737,100,737,103,737,107,732,107,734,105" nohref title="Estonia" onClick="onBoxClicked2('I1', 'ee')" />
<area shape="poly" alt="Russian Federation" coords="1126,102,1120,105,1117,118,1136,121,1152,137,1152,135,1144,125,1149,125,1167,143,1172,157,1167,159,1152,135,1154,150,1151,167,1142,173,1133,167,1133,164,1138,155,1135,148,1126,150,1113,143,1106,143,1106,141,1104,141,1099,135,1088,125,1081,125,1081,123,1074,123,1074,125,1069,125,1069,128,1071,128,1071,130,1072,130,1072,141,1053,141,1042,143,1026,137,1015,137,1014,135,1012,135,1012,134,1010,134,1008,134,1008,132,1006,132,999,132,999,130,996,130,996,132,994,132,994,135,996,135,996,139,987,139,981,135,971,135,964,143,951,141,942,135,930,134,910,121,903,123,885,116,871,119,864,121,860,123,859,126,859,130,859,135,851,135,841,135,825,132,823,132,821,132,819,134,818,135,818,139,814,139,812,139,812,141,812,143,812,144,816,148,825,155,819,159,818,160,816,166,819,167,825,176,819,176,819,175,818,175,816,175,816,173,812,173,812,171,809,171,807,171,807,169,803,169,803,167,802,167,802,169,798,169,798,167,789,167,789,166,787,166,786,166,786,164,782,164,782,162,780,162,780,160,782,160,782,153,784,153,784,150,786,148,789,146,786,139,778,139,773,137,770,135,768,134,766,132,768,132,766,130,766,130,764,130,762,130,762,126,762,128,761,128,759,128,755,128,757,128,755,128,757,130,755,128,757,128,755,125,755,121,755,121,755,121,755,121,755,119,753,119,752,118,752,116,753,116,752,116,752,114,752,114,752,114,752,114,748,114,748,114,746,114,750,114,748,114,745,114,743,114,741,112,746,112,746,112,745,112,743,112,741,112,741,112,741,112,741,110,741,110,741,109,741,109,739,109,739,107,739,107,739,107,739,107,739,105,739,105,739,105,739,103,739,103,739,103,739,102,739,102,739,102,739,102,739,102,739,100,739,100,739,100,739,98,741,98,741,98,741,98,743,98,743,96,743,96,743,96,743,96,743,94,741,93,741,93,741,93,743,93,743,93,745,93,745,91,745,91,745,91,745,89,745,89,746,89,746,89,746,87,746,87,746,87,748,87,748,87,748,86,743,80,741,71,739,68,737,61,737,59,739,59,741,59,741,57,759,59,768,61,770,62,773,66,775,69,768,71,748,69,755,75,759,78,757,80,759,80,759,80,759,80,759,80,759,80,759,80,762,80,761,82,761,82,762,82,762,82,762,82,764,82,764,82,764,82,766,82,766,82,768,82,768,82,764,77,766,75,773,77,775,73,777,73,780,71,782,71,782,71,784,62,789,62,789,69,791,69,793,69,798,66,803,64,809,62,810,62,812,64,816,64,828,61,819,57,803,53,810,39,819,36,843,34,843,41,830,41,823,45,818,48,818,53,853,62,857,62,846,53,848,50,851,46,859,46,866,55,871,64,869,71,875,68,875,61,869,57,866,52,867,50,875,50,885,41,900,36,916,34,924,34,926,30,919,30,912,27,887,25,892,20,908,23,932,27,958,32,974,41,1003,43,1022,45,1031,52,1055,52,1058,34,1085,37,1085,41,1056,41,1056,46,1067,46,1078,48,1090,48,1092,52,1119,53,1174,57,1188,59,1233,68,1242,77,1233,78,1215,73,1217,77,1211,78,1229,86,1227,87,1226,89,1218,89,1215,93,1209,98,1204,94,1195,98,1192,98,1192,102,1197,105,1201,107,1204,110,1204,116,1206,116,1208,118,1208,121,1206,121,1208,134,1202,135,1193,126,1186,121,1179,112,1179,107,1183,93,1179,89,1177,94,1170,93,1163,89,1161,94,1161,102" nohref title="Russian Federation" onClick="onBoxClicked2('I3', 'ru')" />
<area shape="poly" alt="Belarus" coords="732,121,734,121,736,121,736,118,737,118,737,116,739,116,739,112,741,112,743,114,750,114,752,116,752,118,753,118,755,119,755,125,755,130,753,130,753,132,750,132,750,134,745,134,745,132,741,132,736,132,736,130,732,130,730,130,730,132,730,134,727,134,727,130,727,123,730,123,732,123" nohref title="Belarus" onClick="onBoxClicked2('I1', 'by')" />
<area shape="poly" alt="Ukraine" coords="771,137,773,137,777,137,778,139,786,139,787,144,787,144,789,144,789,146,787,146,787,148,787,148,786,148,786,150,784,150,784,151,782,151,782,151,782,151,782,151,780,151,780,151,778,153,778,153,778,153,778,153,777,153,775,155,775,155,775,155,775,155,775,155,773,155,773,155,773,155,771,155,771,157,771,155,771,157,771,159,777,159,777,160,773,160,773,162,771,162,770,164,768,164,768,162,768,162,766,162,764,160,764,157,762,157,761,155,761,153,761,153,761,153,759,153,759,153,761,153,761,153,761,153,761,153,759,153,759,153,759,153,759,153,759,155,757,155,757,155,755,157,753,157,753,157,753,159,752,160,748,160,748,159,750,159,750,155,752,155,752,153,750,153,750,150,750,150,748,150,748,150,748,148,748,148,748,148,748,148,748,148,746,148,748,148,746,148,746,148,748,148,748,148,746,148,746,148,746,148,746,146,743,146,743,148,736,148,736,150,730,150,730,148,727,148,727,150,725,150,725,146,725,143,724,143,724,142,725,142,725,139,727,139,727,139,729,137,729,137,729,137,729,135,729,134,730,134,730,132,730,130,734,130,736,130,736,132,739,132,745,132,745,134,750,134,750,134,750,134,750,134,750,134,750,134,750,132,752,132,753,132,753,132,753,130,753,132,753,132,753,132,753,132,753,132,753,130,755,130,755,130,755,130,755,130,755,130,755,130,757,130,757,130,757,130,757,130,757,130,757,130,757,130,757,128,759,128,759,128,761,128,762,128,762,130,764,130,764,132,766,132,766,134,768,134,766,134,766,134,766,134,766,134,766,134,766,134,766,134,768,134,766,134,768,135,770,135,770,135,770,135,770,135,771,135" nohref title="Ukraine" onClick="onBoxClicked2('I3', 'ua')" />
<area shape="poly" alt="Moldova" coords="745,157,746,157,746,159,750,159,750,157,750,155,752,155,752,153,750,150,748,148,745,146,741,146,741,148,741,150,743,150,743,151,745,151,745,153" nohref title="Moldova" onClick="onBoxClicked2('I3', 'md')" />
<area shape="poly" alt="Slovakia" coords="705,144,707,144,707,143,709,143,709,141,721,141,721,143,725,143,725,146,716,146,716,148,704,148,704,144" nohref title="Slovakia" onClick="onBoxClicked2('I3', 'sk')" />
<area shape="poly" alt="Hungary" coords="705,148,716,148,716,146,725,146,725,150,723,150,723,151,721,151,721,153,720,153,720,155,716,155,716,157,711,157,711,159,707,159,707,157,704,157,704,153,702,151,704,150,704,150,705,150" nohref title="Hungary" onClick="onBoxClicked2('I4', 'hu')" />
<area shape="poly" alt="Slovenia" coords="695,155,695,154,699,154,699,153,701,153,701,155,700,155,700,155,700,157,698,157,698,159,695,159,695,160,691,160,691,155" nohref title="Slovenia" onClick="onBoxClicked2('I3', 'si')" />
<area shape="poly" alt="Romania" coords="725,150,727,150,727,148,730,148,730,150,736,150,736,148,741,148,741,150,743,150,743,151,745,151,745,155,746,157,746,159,748,159,748,160,750,160,750,166,748,166,748,167,746,167,746,166,745,166,741,166,737,166,737,167,730,167,730,166,727,166,727,164,725,164,725,162,721,162,721,160,720,160,720,159,718,159,718,157,720,157,720,157,720,155,721,155,721,153,723,153,723,151,725,151,725,148" nohref title="Romania" onClick="onBoxClicked2('I3', 'ro')" />
<area shape="poly" alt="Bulgaria" coords="737,167,737,166,741,166,746,166,746,166,746,167,748,167,748,171,746,171,746,175,741,175,741,176,737,176,737,178,736,178,736,176,727,176,727,173,727,175,725,175,725,167,727,167,727,166,729,166,730,166,730,167" nohref title="Bulgaria" onClick="onBoxClicked2('I1', 'bg')" />
<area shape="poly" alt="Serbia" coords="713,157,713,162,714,162,714,169,716,169,716,173,718,171,718,173,720,175,720,173,725,173,725,166,727,164,727,164,725,164,725,162,721,162,721,160,720,160,720,159,718,159,718,157" nohref title="Serbia" onClick="onBoxClicked2('I3', 'rs')" />
<area shape="poly" alt="Croatia" coords="691,160,691,162,693,162,693,164,698,164,698,166,700,166,700,166,700,167,702,167,702,169,705,169,705,167,705,166,704,166,704,164,702,164,702,162,702,160,704,160,705,160,707,160,711,160,713,160,713,157,711,157,711,157,711,159,707,159,707,157,704,157,704,153,704,155,700,155,700,157,698,157,698,159,695,159,695,160" nohref title="Croatia" onClick="onBoxClicked2('I1', 'hr')" />
<area shape="poly" alt="Bosnia and Herzegovina" coords="705,169,705,171,711,171,713,171,713,169,714,169,714,169,716,169,714,169,714,166,714,162,713,162,713,160,702,160,702,162,702,164,704,164,704,166,705,166" nohref title="Bosnia and Herzegovina" onClick="onBoxClicked2('I1', 'ba')" />
<area shape="poly" alt="Macedonia" coords="718,175,718,178,720,178,720,180,723,180,723,178,727,178,727,175,725,175,725,173,720,173,720,175" nohref title="Macedonia" onClick="onBoxClicked2('I5', 'mk')" />
<area shape="poly" alt="Montenegro" coords="711,171,711,173,711,175,714,175,714,173,716,173,716,169,713,169,713,171" nohref title="Montenegro" onClick="onBoxClicked2('I3', 'me')" />
<area shape="poly" alt="Albania" coords="714,175,714,173,718,173,718,178,720,178,720,178,720,182,720,182,720,183,718,183,718,185,716,185,716,183,714,183,714,176,713,176,713,175" nohref title="Albania" onClick="onBoxClicked2('I1', 'al')" />
<area shape="poly" alt="Greece" coords="723,178,723,180,721,180,721,182,720,182,720,183,718,183,718,185,716,185,716,187,718,187,718,189,721,189,721,194,723,194,723,196,725,196,725,200,729,200,729,198,730,198,730,194,732,194,732,192,730,192,730,187,730,187,729,187,729,185,727,185,727,183,734,183,734,180,741,180,741,176,737,176,737,178,736,178,736,176,729,176,729,178" nohref title="Greece" onClick="onBoxClicked2('I4', 'gr')" />
<area shape="poly" alt="Crete (Greece)" coords="730,203,730,207,736,207,736,208,743,208,743,205,741,205,741,203" nohref title="Crete (Greece)" onClick="onBoxClicked2('I4', 'ct')" />
<area shape="poly" alt="Rhodes (Greece)" coords="746,200,746,206,752,206,752,200" nohref title="Rhodes (Greece)" onClick="onBoxClicked2('I4', 'rd')" />
<area shape="poly" alt="Italy" coords="683,163,683,169,689,169,689,165,691,166,691,167,693,167,693,169,695,171,695,173,698,173,698,175,700,175,700,176,704,176,704,178,707,178,707,180,711,180,711,182,711,183,704,183,704,185,705,185,705,191,704,191,704,192,700,192,700,192,700,189,700,183,698,183,698,182,696,180,695,180,693,179,691,178,691,177,691,176,691,174,687,174,687,176,685,176,684,173,682,173,682,171,680,171,680,169,679,169,679,166,677,166,677,164,673,164,673,166,672,166,673,167,672,167,672,166,672,165,669,165,668,164,668,162,667,162,667,160,668,160,668,159,668,158,670,157,675,157,677,155,678,157,684,157,684,153,688,153,688,155,691,155,691,159,689,159,689,160,688,160,688,160,687,163,687,163,686,163" nohref title="Italy" onClick="onBoxClicked2('I4', 'it')" />
<area shape="poly" alt="Sicily (Italy)" coords="688,195,696,199,698,199,699,197,700,195,700,192,695,191,692,191,688,192" nohref title="Sicily (Italy)" onClick="onBoxClicked2('I1', 'sq')" />
<area shape="rect" alt="Malta" coords="693,201,700,207" nohref title="Malta" onClick="onBoxClicked2('I3', 'mt')" />
<area shape="poly" alt="Sardinia (Italy)" coords="671,180,671,185,672,186,673,189,676,189,677,188,678,187,678,180,678,179,677,178,673,178,672,179" nohref title="Sardinia (Italy)" onClick="onBoxClicked2('I4', 'sx')" />
<area shape="poly" alt="Cyprus" coords="765,205,766,203,773,202,775,202,775,205,774,205,774,207,773,209,765,209" nohref title="Cyprus" onClick="onBoxClicked2('I1', 'cy')" />
<area shape="rect" alt="San Marino" coords="683,163,689,169" nohref title="San Marino" onClick="onBoxClicked2('I3', 'sm')" />
<area shape="poly" alt="Georgia" coords="791,169,791,167,793,167,793,166,794,166,794,167,798,167,798,169,802,169,802,167,803,167,803,169,807,169,807,171,812,171,812,173,816,173,816,175,818,175,818,176,818,178,816,178,812,178,805,178,802,178,802,176,800,176,798,176,798,171,794,171,794,169" nohref title="Georgia" onClick="onBoxClicked2('I1', 'ge')" />
<area shape="poly" alt="Armenia" coords="805,178,805,180,805,182,805,182,807,182,807,183,809,183,809,185,816,185,816,187,818,187,816,187,816,189,819,189,819,185,818,183,818,185,818,183,816,183,816,182,814,182,814,180,814,180,814,178" nohref title="Armenia" onClick="onBoxClicked2('I1', 'am')" />
<area shape="poly" alt="France" coords="673,170,673,177,678,177,678,170" nohref title="France" onClick="onBoxClicked2('I1', 'fr')" />
<area shape="poly" alt="Azerbaijan" coords="814,178,814,178,818,178,818,176,821,176,821,176,823,176,821,176,828,176,828,180,830,180,830,182,832,182,832,182,832,183,834,183,834,185,830,185,830,189,830,191,828,191,828,189,827,189,827,187,825,187,825,185,819,185,819,183,818,183,816,183,816,180,814,180" nohref title="Azerbaijan" onClick="onBoxClicked2('I1', 'az')" />
<area shape="poly" alt="Turkey" coords="739,180,741,180,741,175,746,175,746,176,750,176,750,180,748,180,748,182,745,182,745,180,743,180,743,182,739,182" nohref title="Turkey" onClick="onBoxClicked2('I3', 'tr')" />
<area shape="poly" alt="Turkey" coords="743,182,746,182,746,183,748,183,748,182,750,182,750,180,752,180,752,178,755,178,755,176,757,176,757,178,761,178,761,176,762,176,762,175,777,175,777,176,780,176,780,178,784,178,784,180,796,180,796,176,802,176,802,178,805,178,805,180,805,182,807,182,807,182,807,183,809,183,809,185,810,185,810,187,809,187,809,189,810,189,810,191,812,191,812,192,812,192,812,194,812,194,812,196,809,196,803,196,794,196,794,198,793,198,793,196,786,196,786,196,786,198,782,198,782,200,780,200,773,200,773,201,764,201,764,200,757,200,757,200,757,201,753,201,753,200,748,200,748,198,746,198,746,196,745,196,745,189,743,189,743,187,741,187,741,183,743,183" nohref title="Turkey" onClick="onBoxClicked2('I3', 'tr')" />
<area shape="poly" alt="Lebanon" coords="779,207,779,210,778,210,778,215,782,215,782,212,782,211,783,211,783,209,782,209,782,207" nohref title="Lebanon" onClick="onBoxClicked2('I1', 'lb')" />
<area shape="poly" alt="Israel" coords="777,215,777,219,776,219,776,222,777,222,777,224,777,225,775,228,775,228,777,228,777,230,777,232,780,232,780,228,779,228,779,223,779,223,779,221,780,221,780,220,781,220,781,219,780,219,780,215" nohref title="Israel" onClick="onBoxClicked2('I1', 'il')" />
<area shape="poly" alt="Gaza" coords="774,222,777,222,777,225,777,228,775,227,774,227" nohref title="Gaza" onClick="onBoxClicked2('I1', 'ps')" />
<area shape="poly" alt="West Bank" coords="779,223,779,228,781,230,783,229,783,227,783,225,783,224,783,220,780,220,780,221,780,223" nohref title="West Bank" onClick="onBoxClicked2('I3', 'ps')" />
<area shape="poly" alt="Jordan" coords="784,221,781,220,781,218,781,218,784,218,785,218,786,218,786,217,787,217,787,216,791,216,791,214,793,214,793,216,794,216,794,217,794,219,793,219,793,221,789,221,789,223,789,226,789,228,787,228,787,228,787,230,786,230,786,232,782,232,780,232,780,230,781,230,783,230,783,228,783,226,783,224,784,223" nohref title="Jordan" onClick="onBoxClicked2('I1', 'jo')" />
<area shape="poly" alt="Iraq" coords="793,212,793,212,794,212,796,212,796,210,800,210,800,203,802,205,802,200,803,200,803,196,809,196,814,196,814,198,814,200,816,200,816,201,818,201,818,203,819,203,819,207,819,208,819,212,821,212,821,214,821,216,823,216,823,216,823,217,827,217,827,219,827,219,828,219,828,221,830,221,830,224,830,226,832,226,832,228,834,228,834,228,834,230,830,230,830,228,827,228,827,230,825,230,825,232,823,232,823,232,823,233,819,233,819,232,818,232,816,232,816,230,812,230,812,228,810,228,810,226,809,226,809,224,807,224,807,223,803,223,803,221,800,221,800,219,796,219,794,219,794,217,794,216,794,216,793,216" nohref title="Iraq" onClick="onBoxClicked2('I1', 'iq')" />
<area shape="poly" alt="Saudi Arabia" coords="778,232,778,233,780,233,780,239,782,242,789,253,794,260,796,260,796,264,798,264,798,271,800,271,800,273,802,273,802,274,805,276,805,278,807,278,807,281,809,281,809,283,810,285,810,287,812,287,814,289,814,287,818,287,819,283,821,285,821,285,821,285,827,287,827,287,832,287,832,285,844,280,851,278,857,278,862,271,864,265,862,262,860,262,853,262,846,255,844,251,841,251,839,248,837,242,834,235,828,236,825,235,823,233,819,233,816,232,802,221,798,219,793,219,793,221,791,221,791,223,789,223,789,226,787,228,787,230,786,230,786,232" nohref title="Saudi Arabia" onClick="onBoxClicked2('I3', 'sa')" />
<area shape="poly" alt="Kuwait" coords="825,231,825,231,824,230,826,229,829,229,830,229,834,230,833,236,830,235,827,236,825,235,823,233,825,233" nohref title="Kuwait" onClick="onBoxClicked2('I1', 'kw')" />
<area shape="rect" alt="Qatar" coords="844,248,851,254" nohref title="Qatar" onClick="onBoxClicked2('I3', 'qa')" />
<area shape="poly" alt="Iran" coords="819,201,818,201,816,200,814,196,812,194,812,191,810,191,810,189,809,189,809,187,810,187,810,185,816,185,816,189,819,189,819,185,823,185,825,187,827,189,828,189,828,191,830,192,832,194,837,198,841,200,844,200,848,198,848,196,850,194,857,192,859,191,864,192,866,192,875,196,878,198,880,200,880,203,880,207,878,207,878,208,878,212,880,216,882,219,882,223,885,223,884,226,884,230,884,232,889,235,891,239,892,242,889,244,887,246,887,248,887,251,885,251,880,251,875,251,873,249,871,248,869,244,867,244,867,242,864,242,864,244,853,244,851,242,848,240,846,239,844,239,843,233,843,232,839,230,837,228,834,228,832,226,832,223,830,224,830,221,827,219,827,217,823,216,821,212,819,212,819,203" nohref title="Iran" onClick="onBoxClicked2('I1', 'ir')" />
<area shape="rect" alt="Bahrain" coords="840,243,845,251" nohref title="Bahrain" onClick="onBoxClicked2('I1', 'bh')" />
<area shape="poly" alt="Yemen" coords="814,289,816,287,819,285,821,285,825,287,827,287,827,287,827,289,827,289,832,289,835,285,835,283,843,280,848,280,851,278,851,281,855,285,857,290,853,292,851,296,848,296,839,301,835,303,830,305,828,306,823,308,818,308,816,305,814,301" nohref title="Yemen" onClick="onBoxClicked2('I3', 'ye')" />
<area shape="poly" alt="Oman" coords="851,278,851,281,855,285,857,290,859,289,864,289,880,269,882,267,882,262,873,255,869,253,867,253,867,255,866,255,866,255,866,257,864,257,864,258,864,260,862,260,862,262,864,265,862,271,857,278" nohref title="Oman" onClick="onBoxClicked2('I3', 'om')" />
<area shape="poly" alt="United Arab Emirates" coords="862,262,853,262,853,260,851,260,846,255,855,255,862,248,864,246,867,246,867,253,867,255,866,255,866,255,866,257,864,257,864,260,862,260" nohref title="United Arab Emirates" onClick="onBoxClicked2('I3', 'ae')" />
<area shape="poly" alt="Turkmenistan" coords="843,180,843,183,843,183,844,183,844,187,846,187,846,189,848,189,848,192,848,194,850,194,855,194,857,192,859,191,864,192,878,198,880,200,880,201,880,201,882,205,887,201,892,196,896,194,896,191,894,191,891,189,887,187,885,187,884,187,884,185,882,185,882,183,880,180,876,178,875,178,873,178,873,176,871,176,871,175,869,175,867,173,860,173,860,175,859,175,859,175,859,176,857,176,857,178,850,178,850,180,848,180,848,182,848,180" nohref title="Turkmenistan" onClick="onBoxClicked2('I3', 'tm')" />
<area shape="poly" alt="Uzbekistan" coords="853,178,853,171,851,171,851,167,850,164,850,162,853,162,853,160,857,160,859,159,860,159,862,160,862,164,867,164,871,164,875,166,876,166,878,167,887,167,887,171,889,171,891,173,892,175,894,176,896,176,898,176,898,178,900,176,900,178,903,178,905,178,905,176,907,176,908,176,908,176,910,176,910,178,914,178,916,178,916,178,917,178,917,182,916,182,916,183,912,183,910,183,908,180,907,180,905,182,903,183,903,185,900,185,901,185,901,187,901,189,901,191,903,191,903,191,903,194,903,196,901,196,900,194,898,192,896,191,892,191,891,189,887,187,882,183,880,180,876,178,873,176,867,173,860,173,859,175,857,176,857,178" nohref title="Uzbekistan" onClick="onBoxClicked2('I3', 'uz')" />
<area shape="poly" alt="Kyrgyzstan" coords="914,178,910,178,910,176,907,176,907,175,908,175,910,173,910,171,919,171,921,171,921,169,928,169,928,171,933,171,933,169,937,169,937,171,939,171,941,171,941,173,942,173,942,176,941,176,941,176,941,178,939,178,937,180,933,180,933,180,933,182,932,182,930,182,930,182,928,182,926,182,926,182,926,183,924,183,923,183,923,185,921,187,921,189,917,189,919,187,917,185,916,185,914,185,914,183,916,183,916,182,917,182,917,180,917,178" nohref title="Kyrgyzstan" onClick="onBoxClicked2('I1', 'kg')" />
<area shape="poly" alt="Tajikistan" coords="905,182,907,180,908,180,908,182,910,183,910,183,910,185,914,185,916,187,917,189,921,187,924,187,924,189,926,189,928,191,928,192,928,194,928,194,924,194,924,194,924,196,919,196,917,194,917,192,916,191,912,191,910,192,910,194,908,196,907,198,905,198,903,196,903,194,903,191,903,189,901,189,901,185,903,183" nohref title="Tajikistan" onClick="onBoxClicked2('I3', 'tj')" />
<area shape="poly" alt="Kazakhstan" coords="825,155,816,148,812,143,814,139,818,139,819,135,823,132,825,130,830,132,837,134,841,135,844,135,848,134,851,135,857,137,857,137,862,135,860,134,860,130,859,126,860,126,860,123,866,121,875,119,880,118,887,116,891,119,898,121,903,123,907,121,910,121,916,125,921,128,926,132,928,135,930,135,933,134,935,135,942,135,951,141,957,141,958,143,958,144,955,146,955,148,957,150,957,150,957,151,955,151,951,153,949,153,948,155,946,159,944,160,942,160,939,162,942,164,944,167,944,169,944,173,942,175,937,169,932,169,932,171,928,171,924,169,923,169,919,171,916,171,910,171,908,173,907,176,901,180,898,178,892,176,891,173,889,171,887,169,876,166,869,164,869,159,867,157,866,155,862,153,860,155,860,157,859,159,857,160,853,160,850,160,850,162,850,164,851,167,851,171,851,171,853,175,851,176,851,178,848,178,846,178,846,175,843,175,843,176,841,176,835,171,832,169,830,167,830,164,832,160,835,159,839,157,835,155,834,153,830,153,828,153,827,155" nohref title="Kazakhstan" onClick="onBoxClicked2('I1', 'kz')" />
<area shape="poly" alt="Afghanistan" coords="878,212,878,207,880,207,880,203,880,203,880,201,882,205,887,201,892,196,896,194,900,194,900,196,903,196,905,198,907,198,910,194,910,192,912,191,914,191,916,191,917,192,917,192,917,194,919,196,924,196,924,194,928,194,928,196,928,198,921,198,921,200,919,200,919,201,919,205,919,207,921,207,921,208,919,208,919,210,917,210,917,212,916,212,916,214,916,214,916,216,914,216,914,221,908,221,908,223,905,223,905,226,903,226,903,228,901,228,901,230,894,230,894,232,889,232,889,230,884,230,884,224,885,223,882,223,882,219" nohref title="Afghanistan" onClick="onBoxClicked2('I1', 'af')" />
<area shape="poly" alt="Pakistan" coords="884,230,889,230,889,232,894,232,894,230,901,230,901,228,903,228,903,226,905,226,905,223,908,223,908,221,914,221,914,216,916,216,916,210,916,212,917,212,917,210,919,210,919,208,921,208,921,207,919,207,919,200,921,200,921,198,928,198,928,196,930,196,930,198,933,198,933,200,937,200,937,201,939,201,939,203,942,203,942,205,942,207,941,207,941,208,933,208,930,208,930,212,932,212,932,214,933,214,933,216,935,216,935,217,937,217,937,226,935,226,935,228,933,228,933,230,932,230,932,232,930,232,930,233,930,235,928,235,928,237,926,237,926,239,923,239,923,239,919,242,919,244,921,244,924,249,926,249,926,251,924,255,923,257,921,255,921,255,917,255,917,257,916,257,916,257,914,258,912,257,910,255,910,251,907,249,905,249,903,249,903,251,887,251,887,246,889,244,892,242,889,235,884,232" nohref title="Pakistan" onClick="onBoxClicked2('I5', 'pk')" />
<area shape="poly" alt="India" coords="914,258,919,253,923,257,924,255,926,251,919,242,923,239,924,239,935,228,937,226,937,217,933,217,933,216,932,212,930,212,930,208,939,208,941,207,942,207,942,205,949,205,949,207,951,207,951,208,951,208,953,208,953,210,951,210,951,223,953,223,953,223,955,224,957,224,958,226,960,226,960,228,960,235,969,239,973,240,981,242,981,244,990,246,992,246,992,244,994,244,994,237,996,237,996,239,998,239,998,240,998,242,999,242,999,244,1001,244,1006,244,1008,240,1010,239,1014,235,1017,233,1022,233,1026,233,1028,237,1030,237,1026,240,1028,240,1026,242,1024,242,1022,244,1021,246,1021,251,1021,255,1019,255,1019,257,1019,258,1017,258,1017,264,1015,264,1015,260,1015,262,1014,262,1014,260,1012,260,1012,251,1008,251,1008,251,1008,253,1006,253,1006,251,1003,251,1003,249,1001,249,1001,248,999,248,998,246,996,246,996,248,998,249,998,251,998,253,999,253,999,255,999,257,999,258,999,260,999,262,1001,264,1003,264,1003,265,998,265,998,267,994,267,994,271,989,278,985,280,983,283,980,285,978,289,974,290,971,294,969,297,969,310,967,315,967,319,965,322,960,328,957,328,953,326,951,317,937,287,937,281,935,280,933,276,935,271,935,265,932,265,932,269,930,271,924,271,923,269,921,267,919,265,919,264,923,264,923,262,919,262,917,260,917,258,916,258" nohref title="India" onClick="onBoxClicked2('I1', 'in_di')" />
<area shape="poly" alt="Nepal" coords="960,228,969,228,971,228,971,230,973,230,973,230,973,232,974,232,976,233,980,233,980,235,983,235,983,233,987,233,987,235,989,235,989,237,990,237,990,239,994,239,994,244,992,244,992,246,990,246,981,244,980,240,973,240,958,235,957,233,958,228" nohref title="Nepal" onClick="onBoxClicked2('I4', 'np')" />
<area shape="poly" alt="Bhutan" coords="998,239,998,242,999,242,999,244,1003,244,1006,244,1006,242,1006,242,1006,240,1006,240,1006,239,1005,239,1005,237,999,237,999,239" nohref title="Bhutan" onClick="onBoxClicked2('I1', 'bt')" />
<area shape="poly" alt="Bangladesh" coords="1003,265,1003,264,1001,264,999,262,999,258,1001,258,999,257,999,255,999,253,998,253,998,249,996,248,996,246,998,246,1001,248,1003,249,1005,251,1006,251,1006,253,1008,253,1008,251,1012,251,1012,258,1012,260,1014,260,1014,260,1015,262,1015,264,1017,264,1017,265,1015,265,1015,267,1012,267,1012,265,1010,264,1006,264,1005,264,1005,265" nohref title="Bangladesh" onClick="onBoxClicked2('I1', 'bd')" />
<area shape="poly" alt="Burma Myanmar" coords="1014,271,1014,267,1015,267,1015,265,1017,265,1017,258,1019,258,1019,255,1021,253,1021,251,1021,246,1024,242,1026,242,1028,240,1028,239,1028,239,1030,237,1031,237,1031,237,1031,239,1035,239,1035,242,1037,242,1037,246,1037,248,1035,248,1035,253,1035,255,1037,257,1038,257,1038,258,1040,258,1040,260,1042,260,1042,264,1044,264,1044,265,1044,267,1047,267,1047,271,1046,273,1044,273,1044,274,1042,274,1042,276,1040,276,1040,278,1038,278,1038,283,1040,285,1040,287,1042,287,1044,290,1044,294,1044,299,1046,301,1046,305,1047,305,1047,314,1047,314,1047,315,1046,315,1046,317,1044,317,1044,314,1046,314,1046,308,1044,306,1042,305,1042,301,1040,299,1040,294,1040,292,1038,292,1038,289,1035,289,1035,290,1033,290,1033,292,1031,292,1031,294,1028,294,1028,292,1026,292,1026,285,1026,283,1024,281,1024,278,1022,278,1022,274,1021,274,1017,273,1015,273,1015,271" nohref title="Burma Myanmar" onClick="onBoxClicked2('I1', 'mm')" />
<area shape="poly" alt="Thailand" coords="1044,328,1044,317,1047,317,1047,308,1047,305,1046,305,1046,301,1044,299,1044,290,1042,285,1040,285,1038,281,1038,280,1038,278,1040,278,1040,276,1042,276,1042,274,1044,274,1044,273,1046,273,1047,271,1047,271,1049,273,1049,276,1051,276,1053,276,1053,281,1051,281,1051,281,1053,281,1053,285,1055,285,1055,283,1062,283,1062,281,1063,281,1065,281,1065,283,1067,283,1067,289,1069,289,1069,290,1071,290,1071,290,1071,292,1072,292,1072,296,1071,299,1063,299,1063,301,1062,301,1062,303,1060,303,1060,305,1062,305,1062,308,1062,310,1060,310,1058,308,1056,308,1056,306,1055,306,1055,305,1051,305,1051,314,1049,314,1049,321,1049,322,1051,322,1051,324,1053,324,1053,328,1055,331,1056,331,1056,333,1058,333,1058,335,1060,335,1060,337,1062,337,1062,338,1058,338,1058,337,1056,337,1056,335,1055,335,1055,337,1053,337,1053,333,1051,333,1051,331,1049,331,1049,330,1046,330,1046,328" nohref title="Thailand" onClick="onBoxClicked2('I3', 'th')" />
<area shape="poly" alt="Cambodia" coords="1062,310,1062,305,1060,305,1060,303,1062,303,1062,301,1063,299,1067,299,1069,299,1071,299,1072,299,1074,301,1074,301,1076,301,1076,299,1079,299,1079,301,1081,301,1081,305,1083,305,1083,306,1083,308,1081,308,1081,310,1081,310,1081,312,1079,312,1079,312,1079,314,1078,312,1078,315,1072,315,1072,317,1069,317,1069,319,1067,319,1067,317,1065,317,1065,315,1063,315,1063,314,1063,312,1062,312" nohref title="Cambodia" onClick="onBoxClicked2('I1', 'kh')" />
<area shape="poly" alt="Viet Nam" coords="1056,264,1056,264,1058,264,1058,262,1063,262,1063,260,1069,260,1069,260,1071,260,1071,262,1072,262,1072,265,1076,265,1076,267,1078,267,1078,269,1076,269,1074,269,1074,271,1072,271,1072,274,1071,274,1071,278,1072,278,1072,281,1074,281,1074,283,1076,283,1076,283,1076,285,1078,285,1078,287,1079,287,1079,287,1079,289,1081,289,1081,290,1083,290,1083,292,1085,292,1085,296,1087,296,1087,299,1088,299,1088,306,1090,306,1090,312,1088,312,1088,315,1087,315,1085,315,1085,317,1081,317,1081,319,1079,319,1079,321,1078,321,1078,322,1078,324,1076,324,1074,324,1074,326,1072,326,1072,315,1078,315,1078,314,1079,314,1079,312,1081,312,1081,310,1081,308,1083,308,1083,305,1081,305,1081,301,1081,296,1079,296,1079,294,1079,292,1078,292,1078,289,1078,290,1076,290,1076,289,1074,289,1074,287,1072,287,1072,283,1072,285,1072,283,1071,283,1069,281,1069,281,1069,280,1067,280,1067,278,1063,278,1063,274,1063,273,1062,273,1062,271,1060,271,1060,269,1058,267,1058,267,1056,267,1056,265" nohref title="Viet Nam" onClick="onBoxClicked2('I3', 'vn')" />
<area shape="poly" alt="Laos" coords="1047,271,1047,269,1049,267,1053,267,1053,264,1056,264,1056,267,1058,267,1058,269,1060,269,1060,271,1062,271,1062,274,1063,274,1063,276,1065,278,1067,278,1067,280,1069,280,1069,281,1071,281,1071,283,1071,283,1072,283,1072,285,1074,285,1074,287,1074,287,1076,289,1076,290,1078,290,1078,292,1079,292,1079,296,1081,296,1079,297,1079,299,1076,299,1076,299,1076,301,1074,301,1072,299,1072,296,1072,292,1071,292,1071,290,1069,290,1069,289,1067,287,1067,285,1067,283,1065,283,1065,281,1062,281,1062,283,1055,283,1055,285,1053,285,1053,283,1051,283,1051,280,1053,280,1053,276,1049,276,1049,273,1046,271" nohref title="Laos" onClick="onBoxClicked2('I1', 'la')" />
<area shape="poly" alt="China" coords="1096,262,1094,262,1094,265,1094,267,1091,268,1089,271,1088,273,1085,270,1084,267,1079,267,1074,266,1071,261,1069,260,1065,260,1061,261,1058,262,1056,262,1054,262,1052,263,1052,266,1052,267,1050,267,1047,268,1045,266,1043,263,1042,261,1040,258,1038,257,1035,254,1035,250,1037,246,1037,244,1036,242,1034,239,1031,237,1027,236,1023,234,1021,232,1016,233,1014,235,1011,237,1010,239,1006,239,1004,237,1001,236,999,237,998,237,998,239,997,239,996,237,992,237,992,239,990,237,988,234,985,233,982,234,979,234,976,233,970,230,969,228,967,227,960,228,960,226,956,225,952,222,951,218,952,213,952,210,951,205,946,204,943,203,941,203,934,198,931,197,930,196,929,196,930,194,929,193,929,192,928,189,927,188,923,186,926,183,929,183,929,182,931,183,934,182,940,179,944,174,945,173,945,170,944,166,942,163,941,161,945,160,949,159,948,156,948,154,951,153,955,154,957,151,956,149,956,147,960,143,962,145,964,146,966,148,970,149,971,149,973,149,977,157,979,160,984,162,988,163,989,161,992,161,996,164,998,165,1001,167,1005,172,1011,173,1014,172,1019,172,1026,174,1033,176,1039,176,1043,175,1050,173,1056,173,1061,169,1062,166,1060,164,1059,162,1062,161,1067,161,1075,157,1078,153,1081,154,1084,153,1081,151,1078,149,1075,149,1073,148,1071,149,1071,149,1065,146,1065,143,1069,141,1072,140,1073,136,1073,132,1070,127,1074,124,1080,124,1083,125,1088,126,1090,127,1096,134,1098,137,1103,141,1106,142,1108,142,1112,144,1115,144,1125,151,1129,151,1132,147,1133,147,1136,148,1136,150,1135,152,1138,155,1138,157,1133,161,1131,162,1132,165,1135,169,1134,171,1131,172,1130,172,1130,173,1126,176,1123,176,1119,182,1118,183,1116,186,1111,188,1110,188,1107,183,1106,181,1104,180,1100,184,1099,187,1095,188,1095,190,1102,195,1105,197,1108,193,1115,195,1118,197,1114,198,1108,203,1107,206,1109,208,1110,209,1112,210,1113,212,1115,216,1117,219,1121,221,1124,224,1124,226,1122,227,1121,228,1123,228,1127,230,1126,233,1125,239,1122,249,1115,259,1110,262,1107,262,1105,264,1105,262,1101,262,1099,262" nohref title="China" onClick="onBoxClicked2('I1', 'cn')" />
<area shape="poly" alt="China" coords="1083,276,1085,276,1087,274,1092,274,1092,276,1090,276,1090,280,1088,280,1088,281,1087,281,1087,283,1085,283,1083,281" nohref title="China" onClick="onBoxClicked2('I1', 'cn')" />
<area shape="poly" alt="Malaysia" coords="1053,337,1055,337,1055,335,1056,335,1056,337,1058,337,1058,338,1058,338,1060,338,1062,338,1062,337,1063,337,1063,338,1065,338,1065,342,1067,342,1067,346,1069,347,1069,351,1071,351,1071,356,1068,356,1068,358,1065,358,1065,356,1063,356,1063,354,1060,354,1060,354,1060,353,1058,353,1058,349,1056,349,1056,346,1055,346,1055,340,1053,340" nohref title="Malaysia" onClick="onBoxClicked2('I4', 'my')" />
<area shape="rect" alt="Singapore" coords="1068,356,1075,363" nohref title="Singapore" onClick="onBoxClicked2('I3', 'sg')" />
<area shape="poly" alt="North Korea" coords="1119,185,1119,182,1120,182,1120,180,1122,180,1122,176,1126,176,1128,176,1128,175,1129,175,1129,173,1131,173,1131,171,1135,171,1135,169,1136,169,1138,171,1138,173,1136,173,1136,175,1135,175,1135,178,1136,178,1136,183,1133,183,1133,185,1131,185,1131,187,1133,187,1133,189,1135,189,1135,191,1135,191,1131,192,1131,194,1124,194,1124,192,1122,192,1122,187,1120,187,1120,185" nohref title="North Korea" onClick="onBoxClicked2('I5', 'kp')" />
<area shape="poly" alt="South Korea" coords="1131,192,1131,192,1135,192,1135,191,1138,191,1138,192,1140,192,1140,194,1142,194,1142,196,1144,196,1145,196,1145,198,1145,200,1147,200,1147,205,1145,205,1145,207,1144,208,1142,208,1140,208,1140,210,1138,210,1138,208,1136,208,1136,205,1135,205,1135,200,1133,200,1133,198,1131,198,1131,198,1129,196,1129,194,1131,194" nohref title="South Korea" onClick="onBoxClicked2('I3', 'kr')" />
<area shape="poly" alt="Japan" coords="1154,207,1156,207,1160,205,1161,203,1169,203,1170,201,1172,200,1176,196,1177,194,1179,192,1179,191,1179,187,1177,187,1177,183,1176,183,1176,180,1174,178,1172,175,1170,173,1170,169,1172,169,1172,166,1170,164,1169,162,1169,159,1172,159,1172,162,1176,162,1176,164,1177,164,1177,164,1177,166,1185,166,1185,167,1188,167,1188,171,1185,171,1185,175,1181,175,1177,175,1177,173,1176,173,1176,178,1179,178,1179,180,1183,180,1183,182,1185,182,1185,183,1186,183,1186,187,1190,187,1188,187,1188,191,1186,191,1186,194,1188,194,1188,198,1190,198,1190,203,1188,203,1188,205,1186,205,1186,207,1183,207,1183,208,1177,208,1177,210,1176,210,1176,214,1172,214,1172,210,1172,210,1169,210,1169,216,1167,216,1167,217,1163,217,1161,219,1161,223,1160,223,1160,224,1158,224,1158,221,1156,221,1156,216,1156,217,1154,217,1154,216,1152,216,1152,212,1158,212,1154,210" nohref title="Japan" onClick="onBoxClicked2('I1', 'jp')" />
<area shape="poly" alt="Taiwan" coords="1126,260,1126,255,1128,255,1128,253,1129,253,1129,251,1133,251,1133,255,1135,255,1135,257,1133,257,1133,262,1131,262,1131,265,1129,265,1129,264,1128,264,1128,262,1126,262" nohref title="Taiwan" onClick="onBoxClicked2('I3', 'tw')" />
<area shape="poly" alt="Malaysia" coords="1092,358,1094,358,1094,360,1094,360,1095,362,1099,362,1103,362,1103,360,1104,360,1104,358,1112,358,1113,358,1113,354,1113,356,1115,356,1115,354,1117,354,1117,351,1119,351,1119,347,1120,347,1120,346,1129,346,1129,342,1129,344,1131,344,1131,340,1129,340,1129,338,1128,338,1128,337,1126,337,1124,335,1119,335,1120,335,1120,337,1119,337,1119,340,1117,340,1117,346,1112,346,1112,344,1110,344,1110,346,1108,346,1108,349,1106,349,1106,351,1103,351,1103,351,1101,353,1099,354,1099,356,1099,358,1095,358,1095,356,1092,356" nohref title="Malaysia" onClick="onBoxClicked2('I4', 'my')" />
<area shape="rect" alt="Brunei" coords="1112,342,1117,346" nohref title="Brunei" onClick="onBoxClicked2('I1', 'bn')" />
<area shape="poly" alt="Indonesia" coords="1033,342,1035,344,1035,346,1044,354,1046,354,1046,358,1047,358,1047,362,1053,367,1053,369,1055,369,1055,371,1056,371,1056,374,1058,374,1058,378,1060,378,1060,381,1067,388,1069,388,1069,390,1071,390,1071,392,1074,392,1074,390,1076,390,1076,388,1078,388,1078,378,1074,374,1072,374,1072,371,1071,369,1067,369,1067,363,1067,362,1065,362,1065,360,1063,360,1062,360,1062,358,1058,358,1058,356,1056,356,1056,356,1056,354,1055,354,1055,353,1051,353,1053,351,1051,351,1051,347,1049,347,1046,346,1046,344,1044,344,1044,340,1044,342,1040,342,1040,338,1040,340,1037,340,1037,338,1033,338" nohref title="Indonesia" onClick="onBoxClicked2('I1', 'id')" />
<area shape="poly" alt="Indonesia" coords="1090,360,1092,360,1092,358,1097,363,1099,363,1099,362,1103,362,1103,360,1104,360,1104,356,1104,358,1113,358,1113,356,1115,356,1115,354,1117,354,1117,351,1119,351,1119,347,1120,347,1120,346,1128,346,1128,354,1129,354,1129,356,1129,358,1131,358,1131,362,1129,362,1128,362,1128,367,1126,367,1126,371,1124,371,1124,374,1122,374,1122,378,1120,378,1120,381,1119,381,1119,383,1115,383,1115,381,1104,381,1104,379,1095,379,1095,376,1094,376,1094,372,1092,372,1092,363,1090,363,1090,362" nohref title="Indonesia" onClick="onBoxClicked2('I1', 'id')" />
<area shape="poly" alt="Indonesia" coords="1076,394,1076,397,1076,397,1076,397,1078,399,1083,399,1083,401,1088,401,1088,399,1090,399,1092,401,1094,401,1095,403,1106,403,1106,404,1117,404,1117,401,1112,399,1106,399,1106,397,1104,397,1104,395,1103,394,1099,394,1099,395,1094,395,1092,395,1090,394,1085,392,1078,392" nohref title="Indonesia" onClick="onBoxClicked2('I1', 'id')" />
<area shape="poly" alt="Indonesia" coords="1120,403,1120,406,1129,406,1131,410,1135,411,1152,411,1156,410,1156,406,1154,406,1154,404,1152,404,1152,406,1147,403,1138,403,1140,403,1140,401,1136,401,1129,403" nohref title="Indonesia" onClick="onBoxClicked2('I1', 'id')" />
<area shape="poly" alt="Indonesia" coords="1135,363,1135,374,1131,374,1133,374,1133,376,1131,376,1131,383,1131,383,1133,383,1133,390,1140,390,1138,390,1138,379,1140,379,1140,381,1142,381,1142,385,1144,385,1144,387,1147,387,1147,378,1145,378,1145,372,1151,372,1151,371,1151,369,1140,369,1140,365,1156,365,1158,362,1158,358,1140,358,1140,360,1138,360,1138,362,1136,362,1136,363" nohref title="Indonesia" onClick="onBoxClicked2('I1', 'id')" />
<area shape="poly" alt="Indonesia" coords="1167,356,1170,353,1174,353,1174,356,1172,356,1172,367,1167,367,1167,365" nohref title="Indonesia" onClick="onBoxClicked2('I1', 'id')" />
<area shape="poly" alt="Indonesia" coords="1168,377,1182,377,1181,385,1168,385" nohref title="Indonesia" onClick="onBoxClicked2('I1', 'id')" />
<area shape="poly" alt="Indonesia" coords="1183,372,1183,369,1186,367,1192,367,1193,369,1195,371,1195,376,1197,376,1197,378,1204,378,1202,376,1206,376,1206,374,1208,374,1208,372,1211,372,1211,371,1213,371,1213,372,1217,372,1217,374,1220,374,1220,376,1224,376,1224,378,1224,406,1220,406,1220,404,1218,404,1218,403,1209,403,1209,399,1213,399,1213,394,1211,394,1211,390,1208,390,1208,388,1204,388,1204,387,1201,387,1201,385,1197,385,1197,381,1197,383,1190,383,1190,381,1186,379,1188,378,1188,376,1190,376,1190,374,1186,374,1186,372" nohref title="Indonesia" onClick="onBoxClicked2('I1', 'id')" />
<area shape="poly" alt="Philippines" coords="1131,292,1131,289,1133,289,1133,281,1138,281,1138,283,1140,283,1140,287,1142,287,1142,290,1140,290,1140,296,1138,296,1138,297,1140,297,1140,299,1142,299,1142,301,1149,301,1149,303,1151,303,1151,306,1158,312,1161,315,1160,321,1160,324,1165,326,1163,330,1163,335,1160,338,1158,340,1154,340,1154,338,1152,337,1152,335,1151,333,1145,331,1142,317,1138,312,1128,326,1122,326,1124,324,1124,322,1126,321,1131,315,1135,305,1136,299,1133,299,1133,297,1131,296" nohref title="Philippines" onClick="onBoxClicked2('I3', 'ph')" />
<area shape="poly" alt="Timor Leste" coords="1154,404,1156,404,1156,403,1166,403,1166,405,1166,408,1160,408,1156,408,1156,406,1154,406" nohref title="Timor Leste" onClick="onBoxClicked2('I3', 'tl')" />
<area shape="poly" alt="Papua New Guinea" coords="1224,376,1224,406,1226,406,1227,406,1227,408,1231,408,1231,406,1233,406,1233,403,1234,403,1234,401,1236,401,1236,399,1238,399,1238,401,1242,401,1242,403,1243,403,1243,404,1245,404,1245,406,1247,406,1247,408,1247,408,1247,410,1250,410,1250,411,1254,411,1254,413,1258,413,1258,415,1265,415,1265,413,1250,399,1250,394,1250,392,1247,388,1243,387,1242,385,1240,383,1236,381,1233,379,1226,378,1224,378,1224,379" nohref title="Papua New Guinea" onClick="onBoxClicked2('I3', 'pg')" />
<area shape="poly" alt="Philippines" coords="1256,392,1259,390,1265,390,1265,388,1265,388,1266,388,1266,387,1268,387,1268,385,1270,385,1268,383,1266,381,1266,379,1263,379,1263,378,1263,376,1265,376,1265,378,1268,378,1268,379,1270,379,1270,381,1272,381,1272,383,1276,384,1275,387,1273,388,1272,389,1271,391,1270,392,1268,392,1268,393,1267,394,1265,395,1264,397,1259,395,1259,394,1256,394" nohref title="Philippines" onClick="onBoxClicked2('I3', 'ph')" />
<area shape="poly" alt="Philippines" coords="1275,390,1279,390,1280,390,1281,392,1283,394,1283,395,1283,401,1279,401,1277,398,1277,397,1276,394,1275,392" nohref title="Philippines" onClick="onBoxClicked2('I3', 'ph')" />
<area shape="rect" alt="Palau" coords="1193,328,1199,336" nohref title="Palau" onClick="onBoxClicked2('I3', 'pw')" />
<area shape="rect" alt="Northern Mariana Islands" coords="1233,289,1236,294" nohref title="Northern Mariana Islands" onClick="onBoxClicked2('I5', 'us_mp')" />
<area shape="rect" alt="Guam" coords="1229,299,1233,303" nohref title="Guam" onClick="onBoxClicked2('I1', 'us_gu')" />
<area shape="rect" alt="Micronesia" coords="1289,329,1298,337" nohref title="Micronesia" onClick="onBoxClicked2('I4', 'fm')" />
<area shape="rect" alt="Marshall Islands" coords="1348,328,1357,337" nohref title="Marshall Islands" onClick="onBoxClicked2('I4', 'mh')" />
<area shape="rect" alt="Nauru Island" coords="1329,365,1338,373" nohref title="Nauru Island" onClick="onBoxClicked2('I4', 'nr')" />
<area shape="rect" alt="Kirimati" coords="1357,356,1365,364" nohref title="Kirimati" onClick="onBoxClicked2('I1', 'ki')" />
<area shape="poly" alt="Solomon Islands" coords="1283,395,1283,399,1286,399,1286,401,1284,401,1284,403,1286,403,1286,404,1288,404,1288,406,1290,406,1295,408,1295,410,1295,410,1295,411,1300,411,1300,413,1302,413,1302,415,1302,417,1304,417,1306,415,1304,411,1304,408,1302,404,1302,403,1297,403,1293,399,1290,397,1288,395" nohref title="Solomon Islands" onClick="onBoxClicked2('I3', 'sb')" />
<area shape="rect" alt="Tuvalu" coords="1376,406,1384,414" nohref title="Tuvalu" onClick="onBoxClicked2('I3', 'tv')" />
<area shape="rect" alt="Tokelau" coords="1409,406,1417,414" nohref title="Tokelau" onClick="onBoxClicked2('I3', 'tk')" />
<area shape="rect" alt="Wallis and Futuna" coords="1392,423,1400,431" nohref title="Wallis and Futuna" onClick="onBoxClicked2('I3', 'fr_wf')" />
<area shape="poly" alt="Samoa" coords="1408,425,1408,434,1411,434,1412,429,1410,430,1412,428,1417,425,1413,423" nohref title="Samoa" onClick="onBoxClicked2('I3', 'ws')" />
<area shape="poly" alt="American Samoa" coords="1412,428,1412,429,1411,429,1412,434,1414,434,1418,434,1418,428,1415,426,1413,428" nohref title="American Samoa" onClick="onBoxClicked2('I1', 'us_as')" />
<area shape="poly" alt="Fiji" coords="1363,444,1372,438,1379,438,1379,442,1377,444,1373,445,1373,447,1370,451,1368,451,1363,449,1363,447" nohref title="Fiji" onClick="onBoxClicked2('I1', 'fj')" />
<area shape="poly" alt="Tonga" coords="1391,454,1397,444,1402,435,1404,433,1407,433,1407,438,1405,442,1402,449,1397,458,1397,461,1391,461,1389,461,1389,456" nohref title="Tonga" onClick="onBoxClicked2('I3', 'to')" />
<area shape="poly" alt="Vanuatu" coords="1322,433,1322,438,1323,440,1323,442,1323,445,1323,445,1325,447,1329,447,1331,445,1331,442,1332,440,1332,438,1332,429,1327,429,1325,431,1322,431" nohref title="Vanuatu" onClick="onBoxClicked2('I3', 'vu')" />
<area shape="poly" alt="New Caledonia" coords="1304,458,1316,470,1322,468,1320,467,1320,463,1313,456,1311,452,1311,449,1304,449" nohref title="New Caledonia" onClick="onBoxClicked2('I5', 'fr_nc')" />
<area shape="poly" alt="Norfolk Island" coords="1308,494,1308,504,1317,504,1317,494" nohref title="Norfolk Island" onClick="onBoxClicked2('I5', 'nf')" />
<area shape="poly" alt="New Zealand" coords="1261,568,1275,561,1281,559,1286,556,1297,549,1299,547,1304,547,1309,540,1315,536,1316,534,1316,525,1316,520,1323,520,1325,527,1325,529,1325,533,1329,534,1332,534,1332,538,1331,542,1327,545,1320,550,1315,554,1309,558,1306,558,1297,563,1279,574,1274,577,1259,579,1259,575" nohref title="New Zealand" onClick="onBoxClicked2('I5', 'nz')" />
<area shape="poly" alt="Australia" coords="1208,542,1209,540,1213,538,1218,538,1222,538,1226,533,1236,522,1238,518,1245,515,1254,502,1258,492,1258,479,1258,477,1254,474,1252,470,1250,468,1249,463,1247,460,1245,456,1243,454,1238,449,1238,442,1238,433,1236,429,1234,428,1233,426,1231,424,1231,420,1229,415,1226,415,1224,419,1222,422,1222,436,1220,436,1217,442,1215,444,1209,444,1209,442,1206,440,1204,438,1201,436,1199,435,1197,433,1197,428,1199,428,1199,426,1201,426,1201,424,1202,424,1202,422,1201,420,1199,419,1192,417,1188,417,1185,419,1181,420,1176,422,1174,424,1172,426,1172,433,1169,433,1169,431,1165,429,1163,428,1160,428,1156,429,1152,433,1151,435,1149,436,1145,438,1145,442,1140,442,1138,445,1136,449,1133,452,1129,454,1120,456,1115,458,1112,460,1108,461,1103,463,1101,465,1099,468,1099,490,1097,490,1097,501,1099,501,1099,509,1097,511,1097,513,1097,515,1095,515,1095,515,1094,517,1094,520,1094,522,1095,524,1103,524,1106,524,1110,522,1113,520,1129,518,1142,513,1147,511,1152,509,1163,509,1167,513,1170,518,1172,522,1176,524,1177,518,1181,518,1181,518,1179,520,1179,522,1179,524,1181,525,1185,527,1185,531,1183,533,1183,534,1185,536,1188,540,1193,542,1197,542,1197,540,1199,540,1202,542,1202,543,1206,543" nohref title="Australia" onClick="onBoxClicked2('I1', 'au')" />
<area shape="poly" alt="Andaman and Nicobar Islands " coords="1022,305,1022,319,1026,324,1028,331,1030,337,1035,338,1035,333,1033,331,1031,324,1030,315,1030,308,1030,303,1022,303" nohref title="Andaman and Nicobar Islands " onClick="onBoxClicked2('I1', 'in_an')" />
<area shape="poly" alt="Sri Lanka" coords="967,322,967,338,969,340,974,340,978,337,980,333,978,330,978,326,976,324,973,321,969,321,967,321" nohref title="Sri Lanka" onClick="onBoxClicked2('I3', 'lk')" />
<area shape="poly" alt="Maldive Islands" coords="932,342,933,349,937,349,942,349,942,337,937,337,935,340" nohref title="Maldive Islands" onClick="onBoxClicked2('I4', 'mv')" />
<area shape="poly" alt="India" coords="932,314,932,319,937,322,944,322,944,312,941,310,935,310,932,312" nohref title="India" onClick="onBoxClicked2('I1', 'in_di')" />
<area shape="poly" alt="Seychelles" coords="866,387,866,411,869,413,875,413,875,406,875,387" nohref title="Seychelles" onClick="onBoxClicked2('I3', 'sc')" />
<area shape="poly" alt="Mauritius" coords="871,460,875,460,876,460,876,454,876,452,873,452,871,452,869,454,869,458" nohref title="Mauritius" onClick="onBoxClicked2('I5', 'mu')" />
<area shape="poly" alt="Reunion" coords="864,463,869,463,869,458,869,456,862,456,860,456" nohref title="Reunion" onClick="onBoxClicked2('I3', 'fr_re')" />
<area shape="poly" alt="Madagascar" coords="818,444,818,451,819,454,818,458,816,460,814,463,814,470,814,476,816,479,819,479,819,481,823,481,823,479,830,479,832,477,832,474,834,468,835,463,835,461,837,458,839,451,841,445,844,442,846,435,844,433,844,426,843,422,843,420,839,420,839,424,837,426,837,428,834,429,832,433,828,436,823,436,821,438,819,440" nohref title="Madagascar" onClick="onBoxClicked2('I5', 'mg')" />
<area shape="poly" alt="Comoro Islands" coords="812,419,812,422,816,426,819,426,823,424,823,420,819,419,814,417" nohref title="Comoro Islands" onClick="onBoxClicked2('I1', 'km')" />
<area shape="poly" alt="Comoro Islands" coords="819,426,819,431,825,431,827,431,827,424,823,424" nohref title="Comoro Islands" onClick="onBoxClicked2('I1', 'km')" />
<area shape="poly" alt="Australia" coords="1190,549,1190,556,1188,559,1190,563,1192,565,1197,563,1208,558,1208,550,1206,549,1197,549,1193,547" nohref title="Australia" onClick="onBoxClicked2('I1', 'au')" />
<area shape="poly" alt="Sao Tome and Principe " coords="664,354,663,365,670,365,672,362,673,356,673,353,666,353" nohref title="Sao Tome and Principe " onClick="onBoxClicked2('I3', 'st')" />
<area shape="poly" alt="Equatorial Guinea" coords="668,346,670,351,675,353,677,351,675,346" nohref title="Equatorial Guinea" onClick="onBoxClicked2('I1', 'gq')" />
<area shape="poly" alt="Lesotho" coords="743,499,750,506,757,501,757,497,757,495,753,493,748,493,745,497" nohref title="Lesotho" onClick="onBoxClicked2('I4', 'ls')" />
<area shape="poly" alt="Swaziland" coords="762,488,768,488,768,483,766,483,766,481,764,481,764,483,762,483,762,483" nohref title="Swaziland" onClick="onBoxClicked2('I3', 'sz')" />
<area shape="poly" alt="South Africa" coords="748,506,752,511,748,515,746,518,745,517,745,518,741,520,725,520,718,520,714,520,711,517,711,511,711,504,707,502,707,499,705,497,704,493,704,493,711,493,713,495,714,495,718,492,720,477,720,477,721,477,723,481,721,485,723,486,729,485,730,479,734,479,736,481,737,481,739,481,753,467,757,465,764,465,766,470,764,472,768,472,768,479,766,481,768,481,764,481,762,483,761,486,762,488,764,488,768,486,768,488,770,486,771,488,771,490,766,495,766,497,764,499,761,502,759,499,757,495,750,492,748,493,743,499,752,506,755,502,757,499,757,495,761,502,757,508,753,511" nohref title="South Africa" onClick="onBoxClicked2('I3', 'za')" />
<area shape="poly" alt="Botswana" coords="723,447,739,447,741,447,745,451,748,454,752,461,755,463,753,465,748,470,741,479,737,481,736,479,732,479,729,481,729,483,727,486,721,486,721,485,723,481,721,477,720,477,718,479,718,468,720,467,720,463,721,460,723,460" nohref title="Botswana" onClick="onBoxClicked2('I1', 'bw')" />
<area shape="poly" alt="Zimbabwe" coords="741,445,746,452,750,458,752,461,757,463,755,465,764,465,766,467,770,465,771,458,773,454,775,447,775,444,771,440,768,438,764,436,759,435,757,435,755,438,752,442,748,444,748,445" nohref title="Zimbabwe" onClick="onBoxClicked2('I3', 'zw')" />
<area shape="poly" alt="Mozambique" coords="759,433,761,435,768,438,771,442,775,445,777,449,773,452,773,456,771,460,770,465,766,467,764,468,766,474,770,477,768,483,770,485,771,485,773,481,775,477,780,476,782,474,784,470,784,467,782,461,780,460,780,456,787,451,789,447,791,444,796,444,800,440,803,435,805,433,807,429,807,426,805,426,805,413,803,413,798,415,793,417,786,415,780,417,780,422,780,426,786,428,787,433,786,436,784,438,782,440,780,440,777,438,778,433,778,431,777,431,771,426,768,428,762,431" nohref title="Mozambique" onClick="onBoxClicked2('I5', 'mz')" />
<area shape="poly" alt="Malawi" coords="771,424,775,422,773,413,771,410,773,408,777,406,778,408,778,424,780,424,782,428,784,428,787,433,786,435,784,436,780,440,777,438,777,433,780,433,778,431,775,428,771,426" nohref title="Malawi" onClick="onBoxClicked2('I5', 'mw')" />
<area shape="poly" alt="Zambia" coords="736,415,737,415,743,415,746,417,752,419,755,422,757,424,761,422,759,419,757,417,755,415,753,413,753,410,755,404,761,401,766,401,771,404,771,410,775,420,773,422,771,424,771,426,759,433,757,436,748,444,743,445,734,444,730,440,727,436,727,424,730,424,736,422,737,413,737,415" nohref title="Zambia" onClick="onBoxClicked2('I3', 'zm')" />
<area shape="poly" alt="Angola" coords="686,442,686,435,688,428,691,422,693,417,693,411,693,406,691,408,691,401,691,399,691,397,689,397,689,395,691,392,705,392,709,395,709,397,711,401,714,401,718,397,721,395,723,395,727,397,729,408,730,413,736,413,737,415,736,420,730,424,729,424,727,433,727,438,732,442,732,445,727,445,718,445,718,444,705,444,695,444,693,440,688,442" nohref title="Angola" onClick="onBoxClicked2('I1', 'ao')" />
<area shape="poly" alt="Namibia" coords="686,442,691,440,695,444,720,444,720,445,732,445,732,442,739,444,741,445,741,447,723,447,723,458,720,461,720,463,720,467,718,468,718,492,714,495,711,493,705,493,702,493,702,492,700,492,700,483,698,483,698,474,696,470,695,463,693,460,691,454,688,449,686,445" nohref title="Namibia" onClick="onBoxClicked2('I5', 'na')" />
<area shape="poly" alt="Angola" coords="688,390,691,390,691,387,688,387,688,387,686,388,686,390" nohref title="Angola" onClick="onBoxClicked2('I1', 'ao')" />
<area shape="poly" alt="Tanzania" coords="759,385,761,394,762,397,764,401,768,403,771,406,777,406,778,410,780,415,784,417,786,415,791,415,796,415,803,413,807,413,802,404,800,403,800,395,798,395,798,390,800,390,800,387,798,383,794,379,793,378,791,374,787,372,784,372,780,369,777,371,777,374,775,374,775,376,773,376,771,374,771,374,771,371,766,371,764,372,764,379,764,379,764,383,761,383,761,383" nohref title="Tanzania" onClick="onBoxClicked2('I3', 'tz')" />
<area shape="poly" alt="Burundi" coords="759,383,757,381,757,379,759,379,759,378,761,378,761,376,764,376,764,379,764,381,762,381,761,381,761,383,759,385" nohref title="Burundi" onClick="onBoxClicked2('I1', 'bi')" />
<area shape="poly" alt="Rwanda" coords="757,376,764,376,764,371,764,371,757,371" nohref title="Rwanda" onClick="onBoxClicked2('I3', 'rw')" />
<area shape="poly" alt="Congo Kinshasa" coords="693,392,707,392,709,395,711,399,713,401,716,397,723,395,729,397,729,401,729,410,730,411,730,411,732,413,739,413,743,415,752,419,755,422,755,424,761,422,753,413,753,408,755,404,761,401,764,399,762,395,759,387,757,383,757,379,759,378,759,376,757,376,757,371,759,371,762,369,761,367,761,362,762,360,766,356,764,349,764,347,761,344,757,344,755,346,750,342,748,340,748,342,745,342,737,342,734,344,732,346,727,346,723,344,720,342,716,342,714,344,714,347,714,351,714,351,714,356,713,356,711,360,713,362,713,363,711,363,709,367,707,371,705,374,705,376,704,379,704,381,702,381,700,383,700,385,696,385,695,387,691,387,691,390,688,392,689,394" nohref title="Congo Kinshasa" onClick="onBoxClicked2('I1', 'cd')" />
<area shape="poly" alt="Congo Brazzaville" coords="684,381,686,387,693,387,696,385,698,385,700,383,704,381,709,365,711,363,711,360,713,356,714,356,714,347,705,349,705,353,702,354,695,356,691,354,691,356,693,358,695,358,695,360,696,360,696,363,695,363,695,365,696,365,696,369,698,369,698,371,696,371,696,372,696,374,688,374,688,376,686,376,686,379,684,379" nohref title="Congo Brazzaville" onClick="onBoxClicked2('I1', 'cg')" />
<area shape="poly" alt="Gabon" coords="686,379,686,376,688,376,688,374,696,374,696,369,696,365,695,365,695,363,696,363,696,360,695,360,695,358,693,358,691,356,691,354,686,354,684,354,684,358,684,360,677,360,677,363,675,363,675,372,677,374,679,378,682,381,684,381,684,379" nohref title="Gabon" onClick="onBoxClicked2('I1', 'ga')" />
<area shape="poly" alt="Equatorial Guinea" coords="677,358,677,354,684,354,684,360,677,360" nohref title="Equatorial Guinea" onClick="onBoxClicked2('I1', 'gq')" />
<area shape="poly" alt="Cameroon" coords="677,353,677,347,675,347,675,344,673,346,673,338,675,338,675,335,677,335,679,335,679,333,686,333,686,331,689,331,689,328,691,328,691,319,691,319,693,319,693,315,695,315,695,314,696,314,696,308,698,310,700,314,700,315,700,319,698,319,696,321,696,324,698,324,698,324,698,326,700,326,700,330,702,330,702,331,700,331,700,333,698,333,698,335,696,337,696,340,698,340,698,344,700,344,700,347,702,347,702,349,704,349,704,351,704,353,702,354,698,354,695,354,684,354,680,354,677,354,677,354" nohref title="Cameroon" onClick="onBoxClicked2('I1', 'cm')" />
<area shape="poly" alt="Uganda" coords="762,369,759,363,766,356,766,351,766,347,778,347,780,347,780,349,782,351,782,358,782,360,780,360,780,362,775,362,775,363,771,363,771,365,770,365,770,369,768,369,768,371,761,371" nohref title="Uganda" onClick="onBoxClicked2('I3', 'ug')" />
<area shape="poly" alt="Kenya" coords="800,387,793,378,791,374,787,372,784,372,780,369,780,365,778,363,780,362,780,360,782,360,782,358,782,351,780,347,780,346,778,347,778,346,780,346,780,344,786,344,786,342,787,342,787,344,791,344,791,346,794,346,794,347,798,347,798,349,800,349,800,347,803,347,805,346,809,346,810,347,810,351,809,351,809,351,807,353,807,367,809,367,809,369,810,371,810,372,809,372,809,372,807,374,807,376,805,376,805,378,803,379,803,381,802,381,802,383,800,383,800,385" nohref title="Kenya" onClick="onBoxClicked2('I4', 'ke')" />
<area shape="poly" alt="Somalia" coords="810,371,807,360,807,353,809,351,812,349,814,346,818,346,816,344,821,344,821,342,825,342,827,342,827,338,834,331,835,328,830,328,830,326,827,326,819,326,819,322,819,322,816,322,816,319,814,319,814,312,818,314,818,315,821,315,821,317,830,317,830,315,835,315,839,315,839,314,843,314,843,312,850,312,850,319,850,322,848,322,846,324,844,328,843,331,843,333,839,338,837,342,834,347,830,351,828,353,821,360,819,360,818,363,814,367" nohref title="Somalia" onClick="onBoxClicked2('I3', 'so')" />
<area shape="poly" alt="Ethiopia" coords="793,346,793,346,789,344,787,342,786,340,784,338,782,337,780,333,775,331,773,328,773,326,778,324,778,319,780,315,782,310,784,308,787,305,787,299,791,299,803,299,807,303,810,305,810,308,810,310,810,314,812,315,814,319,816,322,818,322,819,326,830,326,830,328,834,328,835,328,830,335,827,338,827,340,827,342,819,342,821,344,814,346,812,347,809,344,805,346,803,346,802,349,796,349,794,347" nohref title="Ethiopia" onClick="onBoxClicked2('I1', 'et')" />
<area shape="poly" alt="Djibouti" coords="814,315,812,315,810,314,810,314,810,308,814,308,816,308,818,310,818,314,816,312,814,314" nohref title="Djibouti" onClick="onBoxClicked2('I1', 'dj')" />
<area shape="poly" alt="Eritrea" coords="787,299,787,294,789,289,794,285,798,285,798,290,800,290,802,294,807,297,810,301,814,305,816,308,810,308,810,308,810,305,807,303,803,299" nohref title="Eritrea" onClick="onBoxClicked2('I1', 'er')" />
<area shape="poly" alt="Egypt" coords="739,221,739,265,771,265,773,265,782,258,784,258,782,255,780,249,777,246,775,242,773,240,773,237,770,235,770,233,770,232,771,232,771,233,773,233,773,235,775,235,775,237,778,237,778,233,778,232,777,230,777,230,777,230,777,226,774,226,774,224,771,224,743,223,743,221" nohref title="Egypt" onClick="onBoxClicked2('I1', 'eg')" />
<area shape="poly" alt="Libya" coords="739,221,739,271,739,273,736,273,736,276,732,276,730,273,716,265,711,262,704,260,700,260,698,262,698,260,689,260,688,257,682,253,679,249,677,249,677,227,679,225,680,225,680,220,682,220,682,219,685,215,687,215,689,215,689,216,695,216,696,216,696,217,700,217,700,219,700,221,702,221,702,223,705,223,705,223,705,224,711,224,711,224,714,226,714,226,716,228,716,224,718,224,718,219,720,219,720,216,729,216,729,217,732,217,732,219,736,219,736,221" nohref title="Libya" onClick="onBoxClicked2('I4', 'ly')" />
<area shape="poly" alt="Chad" coords="736,276,736,292,734,296,730,297,730,308,732,312,730,314,727,317,718,324,714,326,711,328,711,328,709,330,700,330,700,326,700,326,698,326,696,324,696,321,698,321,700,321,702,317,702,314,700,312,696,306,695,305,691,301,693,297,698,290,702,285,702,271,702,269,700,267,698,264,698,262,700,260,705,260,711,262,718,265,729,273,730,273,730,274,732,276" nohref title="Chad" onClick="onBoxClicked2('I1', 'td')" />
<area shape="poly" alt="Niger" coords="654,278,656,292,652,292,652,294,643,294,643,296,638,296,639,297,639,299,638,299,638,301,639,303,639,305,645,305,645,306,647,306,647,308,650,308,652,308,652,306,652,305,654,305,654,301,656,301,664,301,664,303,664,305,670,305,675,305,675,306,677,306,677,305,680,305,680,301,684,303,684,305,689,305,689,301,691,303,691,297,700,287,702,285,702,269,702,267,698,264,698,262,696,260,689,260,689,258,684,258,661,276,659,278" nohref title="Niger" onClick="onBoxClicked2('I3', 'ne')" />
<area shape="poly" alt="Nigeria" coords="663,344,672,344,673,342,675,337,677,333,680,333,684,333,689,330,691,328,691,319,693,315,695,314,696,312,698,310,698,308,689,301,689,303,689,305,684,305,680,303,680,305,679,305,677,305,677,306,675,306,675,305,672,305,664,305,666,303,664,303,663,301,659,299,657,301,654,303,652,305,652,308,650,310,650,312,652,312,652,319,650,319,650,321,648,322,648,335,654,335,654,337,657,338,659,340,661,340,661,344" nohref title="Nigeria" onClick="onBoxClicked2('I3', 'ng')" />
<area shape="poly" alt="Benin" coords="648,335,648,322,652,319,652,317,652,312,650,310,648,308,645,310,643,312,641,315,641,317,641,319,643,321,643,330,645,333,645,337,647,337" nohref title="Benin" onClick="onBoxClicked2('I1', 'bj')" />
<area shape="poly" alt="Togo" coords="641,319,643,321,643,324,643,331,645,333,645,335,645,337,641,337,639,333,639,330,638,321,638,317,636,315,638,314,641,314" nohref title="Togo" onClick="onBoxClicked2('I3', 'tg')" />
<area shape="poly" alt="Ghana" coords="625,315,636,315,636,317,636,317,638,322,638,330,639,331,639,335,641,335,641,337,641,338,636,338,636,340,632,340,632,342,625,340,623,335,623,335,623,331,625,331" nohref title="Ghana" onClick="onBoxClicked2('I1', 'gh')" />
<area shape="poly" alt="Burkina Faso" coords="625,315,636,315,638,314,643,314,647,308,647,308,645,305,641,305,639,303,638,299,638,299,639,299,638,296,634,296,634,296,634,297,632,297,632,299,629,299,629,301,623,301,623,303,622,303,622,305,620,305,620,306,618,306,618,308,616,310,616,312,615,312,615,314,613,315,613,317,615,317,615,319,616,319,618,321,623,321,623,321,625,321" nohref title="Burkina Faso" onClick="onBoxClicked2('I1', 'bf')" />
<area shape="poly" alt="Cote D'Ivoire" coords="606,344,611,344,611,342,620,342,620,340,622,340,622,342,623,342,623,335,623,335,623,331,623,324,627,324,625,322,623,322,623,321,618,321,615,319,615,317,604,317,604,328,602,328,602,333,602,333,602,335,604,335,604,337,606,337,606,338" nohref title="Cote D'Ivoire" onClick="onBoxClicked2('I1', 'ci')" />
<area shape="poly" alt="Liberia" coords="590,335,593,338,599,342,600,342,600,344,606,344,606,338,602,333,602,331,599,330,597,330,597,326,593,326,593,328,593,330,590,330,591,331,590,331" nohref title="Liberia" onClick="onBoxClicked2('I4', 'lr')" />
<area shape="poly" alt="Sierra Leone" coords="588,333,582,328,582,322,584,321,588,317,590,319,591,321,593,324,593,324,593,328,593,330,590,330,590,331,590,333,590,335,588,335" nohref title="Sierra Leone" onClick="onBoxClicked2('I3', 'sl')" />
<area shape="poly" alt="Guinea Conakry" coords="575,314,579,312,581,308,590,308,600,308,600,310,602,312,602,321,604,324,604,326,604,328,602,328,602,331,597,330,595,326,593,324,591,321,588,317,586,317,584,321,581,324,581,322,577,317,575,315" nohref title="Guinea Conakry" onClick="onBoxClicked2('I4', 'gn')" />
<area shape="poly" alt="Guinea Bissau" coords="575,312,581,310,581,305,579,306,575,306,575,306,574,308,568,308,570,310,570,312,572,312" nohref title="Guinea Bissau" onClick="onBoxClicked2('I4', 'gw')" />
<area shape="poly" alt="Senegal" coords="568,308,572,308,575,306,581,306,582,305,581,308,590,308,591,305,590,303,588,299,582,292,577,289,574,287,572,290,568,292,566,294,566,297,566,299,568,301,574,301,579,301,579,303,577,305,575,305,568,305,566,306" nohref title="Senegal" onClick="onBoxClicked2('I3', 'sn')" />
<area shape="poly" alt="The Gambia" coords="568,301,566,305,574,305,577,305,579,303,579,301,570,301" nohref title="The Gambia" onClick="onBoxClicked2('I3', 'gm')" />
<area shape="poly" alt="Mauritania" coords="570,289,572,289,574,287,579,289,582,292,584,296,588,297,590,294,600,294,611,294,613,294,613,253,613,251,616,251,616,249,607,244,607,242,604,242,604,248,590,248,590,260,586,260,586,262,584,262,584,267,568,267,568,271,570,273,572,276,572,287" nohref title="Mauritania" onClick="onBoxClicked2('I5', 'mr')" />
<area shape="poly" alt="Western Sahara" coords="570,265,570,262,574,262,574,260,574,258,579,251,581,246,584,240,602,240,604,240,604,246,604,246,602,248,590,248,590,258,590,260,586,260,586,262,584,262,584,265,584,267,570,267" nohref title="Western Sahara" onClick="onBoxClicked2('I3', 'eh')" />
<area shape="poly" alt="Mali" coords="613,292,613,251,616,251,648,276,654,280,654,292,652,294,645,294,641,294,636,296,634,297,632,299,631,301,623,301,620,303,613,315,607,317,602,315,600,308,593,308,591,305,590,297,590,294,613,294" nohref title="Mali" onClick="onBoxClicked2('I5', 'ml')" />
<area shape="poly" alt="Morocco" coords="586,239,586,237,590,235,599,228,599,221,602,216,613,208,616,205,616,204,617,204,617,208,622,208,622,204,623,204,622,205,623,205,622,206,625,206,625,211,631,211,631,207,632,207,632,215,633,215,633,218,632,218,632,219,626,219,625,219,625,220,624,220,624,221,623,221,623,223,624,223,624,224,622,224,622,225,620,225,620,226,619,226,619,227,617,227,617,228,616,228,616,230,609,230,609,230,609,232,606,232,606,233,602,233,602,239,590,240,586,237" nohref title="Morocco" onClick="onBoxClicked2('I5', 'ma')" />
<area shape="poly" alt="Algeria" coords="634,206,632,206,632,207,633,207,633,215,633,216,633,218,633,219,632,219,627,219,627,220,625,220,625,221,624,221,624,224,624,225,622,225,622,226,620,226,618,228,617,228,617,229,616,229,616,230,609,230,609,230,606,232,604,233,604,239,652,278,659,278,686,257,677,249,677,249,677,226,675,223,666,212,666,210,672,203,672,200,670,198,666,198,659,198,647,198,647,200,643,200,641,201,638,201,638,203,636,203,636,205,634,205" nohref title="Algeria" onClick="onBoxClicked2('I1', 'dz')" />
<area shape="poly" alt="Central African Republic" coords="709,330,711,328,718,324,725,319,732,312,736,315,736,322,739,328,743,330,745,333,750,338,752,338,750,340,746,340,748,342,737,342,734,344,732,346,730,346,727,346,720,342,716,342,714,344,714,347,705,349,705,353,704,353,704,349,702,349,702,347,700,347,700,344,698,344,698,340,696,340,696,335,698,333,698,331,702,331,702,330,707,330" nohref title="Central African Republic" onClick="onBoxClicked2('I1', 'cf')" />
<area shape="poly" alt="Tunisia" coords="672,200,673,196,679,196,682,198,682,200,680,200,680,201,682,201,682,208,680,208,680,210,682,210,682,212,684,212,684,214,686,214,683,218,680,222,679,225,677,226,676,225,675,223,672,217,666,210,666,208,672,203,673,201" nohref title="Tunisia" onClick="onBoxClicked2('I3', 'tn')" />
<area shape="poly" alt="Central African Republic" coords="709,330,711,328,718,324,725,319,732,312,736,315,736,322,739,328,743,330,745,333,750,338,752,338,750,340,746,340,748,342,737,342,734,344,732,346,730,346,727,346,720,342,716,342,714,344,714,347,705,349,705,353,704,353,704,349,702,349,702,347,700,347,700,344,698,344,698,340,696,340,696,335,698,333,698,331,702,331,702,330,707,330" nohref title="Central African Republic" onClick="onBoxClicked2('I1', 'cf')" />
<area shape="poly" alt="Mongolia" coords="998,130,1005,132,1008,134,1010,134,1012,134,1015,137,1017,137,1021,137,1021,137,1026,137,1026,137,1031,139,1038,141,1040,141,1047,143,1051,141,1053,139,1056,139,1063,141,1063,146,1067,148,1069,150,1072,148,1079,150,1083,151,1081,155,1076,153,1074,155,1071,159,1069,160,1063,162,1058,160,1058,162,1060,164,1062,166,1060,169,1058,171,1055,171,1051,171,1049,173,1044,175,1040,176,1031,175,1026,173,1017,171,1010,171,1012,173,1005,173,1005,171,996,164,994,162,992,160,989,160,987,162,983,160,974,153,973,150,965,146,962,143,969,139,974,135,974,135,981,135,983,137,989,139,996,139,996,135,996,135,996,132" nohref title="Mongolia" onClick="onBoxClicked2('I4', 'mn')" />
<area shape="rect" alt="Saint Helena" coords="611,435,618,442" nohref title="Saint Helena" onClick="onBoxClicked2('I3', 'sh')" />
<area shape="rect" alt="Curacao (Netherlands Antilles)" coords="352,305,358,312" nohref title="Curacao (Netherlands Antilles)" onClick="onBoxClicked2('I3', 'an_cu')" />
<area shape="poly" alt="Syria" coords="778,203,778,201,780,201,780,200,784,198,786,198,786,196,793,196,793,198,794,198,794,196,802,196,803,198,802,200,802,207,800,208,798,208,796,210,794,212,793,212,791,214,789,216,787,216,787,217,785,217,785,218,783,218,783,217,781,217,781,218,780,218,780,216,780,216,781,216,781,215,782,215,782,213,783,213,783,211,783,210,783,209,782,209,782,207,778,207" nohref title="Syria" onClick="onBoxClicked2('I3', 'sy')" />
<area shape="poly" alt="Hong Kong (China)" coords="1100,262,1105,262,1105,263,1105,270,1100,270,1100,267" nohref title="Hong Kong (China)" onClick="onBoxClicked2('I1', 'hk')" />
<area shape="poly" alt="Macau (China)" coords="1095,262,1099,262,1100,262,1100,270,1095,270,1095,264" nohref title="Macau (China)" onClick="onBoxClicked2('I1', 'mo')" />
<area shape="poly" alt="Vatican City" coords="687,174,687,176,687,179,691,179,691,174" nohref title="Vatican City" onClick="onBoxClicked2('I3', 'va')" />
<area shape="rect" alt="Monaco" coords="667,165,672,171" nohref title="Monaco" onClick="onBoxClicked2('I3', 'mc')" />
<area shape="poly" alt="Saint Pierre and Miquelon" coords="430,149,442,150,442,159,430,159" nohref title="Saint Pierre and Miquelon" onClick="onBoxClicked2('I3', 'fr_pm')" />
<area shape="rect" alt="Andorra" coords="643,170,648,176" nohref title="Andorra" onClick="onBoxClicked2('I1', 'ad')" />
<area shape="rect" alt="Liechtenstein" coords="678,150,684,157" nohref title="Liechtenstein" onClick="onBoxClicked2('I5', 'li')" />
<area shape="poly" alt="Luxembourg" coords="663,139,663,139,664,139,668,139,668,141,668,145,664,145,661,145,661,141,663,141" nohref title="Luxembourg" onClick="onBoxClicked2('I5', 'lu')" />
<area shape="rect" alt="Ceuta and Melilla (Es)" coords="617,202,622,208" nohref title="Ceuta and Melilla (Es)" onClick="onBoxClicked2('I1', 'es_ce')" />
<area shape="rect" alt="Ceuta and Melilla (Es)" coords="625,205,631,211" nohref title="Ceuta and Melilla (Es)" onClick="onBoxClicked2('I1', 'es_ce')" />
<area shape="rect" alt="Aruba" coords="346,305,352,312" nohref title="Aruba" onClick="onBoxClicked2('I3', 'aw')" />
<area shape="poly" alt="Sudan (The Republic of Sudan)" coords="739,265,739,273,735,273,736,294,732,294,729,301,730,310,735,315,739,316,743,316,747,319,759,318,760,317,765,319,770,314,770,308,771,306,774,307,775,307,775,310,775,314,778,318,780,320,785,307,787,305,787,299,788,293,788,289,795,284,796,283,789,276,789,266,783,260,773,264" nohref title="Sudan (The Republic of Sudan)" onClick="onBoxClicked2('I3', 'sd')" />
<area shape="poly" alt="South Sudan (The Republic of South Sudan)" coords="736,315,737,326,741,328,749,338,752,338,749,340,755,347,759,343,765,349,778,346,779,344,786,343,785,339,780,334,780,333,773,327,772,325,778,323,778,317,775,315,775,313,774,309,771,306,771,309,771,315,768,318,765,319,760,316,760,318,758,319,747,319,743,316" nohref title="South Sudan (The Republic of South Sudan)" onClick="onBoxClicked2('I3', 'ss')" />
<area shape="default" nohref="nohref" alt="" /></map>	


<?php include 'footer.php'; ?>
