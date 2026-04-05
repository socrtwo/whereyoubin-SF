<?php
error_reporting(0);

session_start();

include '../../config.php'; 

$thisMap = $indiaCookie;

$thisDomain = OWN_DOMAIN_INDIA;

include '../../header.php';
?>

<h2 class="style1">Indian States and Union Territories</h2>
<div class="center">
<table style="height: 206px; width: 535px; margin-left:auto; margin-right:auto" class="auto-style8" align="center">
<tr>
<td valign="top" class="auto-style1" style="width: 266px">
<p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I3', 'an')" id='an' name='an' value='an_visited' class="style16">Andaman and Nicobar (Union Territory)
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'as')" id='as' name='as' value='as_visited' class="style16">Andhra Pradesh
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ar')" id='ar' name='ar' value='ar_visited' class="style16">Arunachal Pradesh
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'am')" id='am' name='am' value='am_visited' class="style16">Assam
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'br')" id='br' name='br' value='br_visited' class="style16">Bihar
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ch')" id='ch' name='ch' value='ch_visited' class="style16">Chandigarh (Union Territory)
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'cg')" id='cg' name='cg' value='cg_visited' class="style16">Chattisgarh
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'dn')" id='dn' name='dn' value='dn_visited' class="style16">Dadra and Nagar Haveli (Union Territory)
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'dd')" id='dd' name='dd' value='dd_visited' class="style16">Daman and Diu (Union Territory)
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'dl')" id='dl' name='dl' value='dl_visited' class="style16">Delhi (Union Territory)
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ga')" id='ga' name='ga' value='ga_visited' class="style16">Goa
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'gj')" id='gj' name='gj' value='gj_visited' class="style16">Gujarat
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'hr')" id='hr' name='hr' value='hr_visited' class="style16">Haryana
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'hp')" id='hp' name='hp' value='hp_visited' class="style16">Himachal Pradesh
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'jk')" id='jk' name='jk' value='jk_visited' class="style16">Jammu and Kashmir
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'jh')" id='jh' name='jh' value='jh_visited' class="style16">Jharkhand
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ka')" id='ka' name='ka' value='ka_visited' class="style16">Karnataka

</p>
</td>
<td valign="top" class="auto-style1" style="width: 267px">
<p class="auto-style24"><input type='checkbox' onclick="onBoxClicked('I3', 'kl')" id='kl' name='kl' value='kl_visited' class="style16">Kerala
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ld')" id='ld' name='ld' value='ld_visited' class="style16">Lakshadweep (Union Territory)
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'mp')" id='mp' name='mp' value='mp_visited' class="style16">Madhya Pradesh
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'mh')" id='mh' name='mh' value='mh_visited' class="style16">Maharashtra
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'mn')" id='mn' name='mn' value='mn_visited' class="style16">Manipur
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'ml')" id='ml' name='ml' value='ml_visited' class="style16">Meghalaya
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'mz')" id='mz' name='mz' value='mz_visited' class="style16">Mizoram
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'nl')" id='nl' name='nl' value='nl_visited' class="style16">Nagaland
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'or')" id='or' name='or' value='or_visited' class="style16">Orissa
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'py')" id='py' name='py' value='py_visited' class="style16">Puducherry (Union Territory)
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'pb')" id='pb' name='pb' value='pb_visited' class="style16">Punjab
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'rj')" id='rj' name='rj' value='rj_visited' class="style16">Rajasthan 
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'sk')" id='sk' name='sk' value='sk_visited' class="style16">Sikkim
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'tn')" id='tn' name='tn' value='tn_visited' class="style16">Tamil Nadu
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'tr')" id='tr' name='tr' value='tr_visited' class="style16">Tripura
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'up')" id='up' name='up' value='up_visited' class="style16">Uttar Pradesh
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'uk')" id='uk' name='uk' value='uk_visited' class="style16">Uttarakhand
<br class="style16"><input type='checkbox' onclick="onBoxClicked('I3', 'wb')" id='wb' name='wb' value='wb_visited' class="style16">West Bengal
		

</p>
				

</td>

</tr>

</table>


<div class="contentdiv"><center>

<p>URL Shortener and URL Extractor created by <a href="http://takien.com" target="_blank">

Takien</a></p>

<p>Make your own version of this site.&nbsp;See the sourceforge project:&nbsp;<br><a href="http://sourceforge.net/projects/whereyoubin/">
http://sourceforge.net/projects/whereyoubin/</a></p>
</center></div></div>

</td>
</tr>
</table>
</div>
</div>



<map id="<?=$thisMap?>_image" name="<?=$thisMap?>_image">
<area shape="poly" alt="Lakshadweep" coords="129,869,114,905,127,935,129,972,143,1022,163,1081,219,1059,201,963,191,926,172,896,140,867" title="Lakshadweep" onClick="onBoxClicked2('I1', 'ld')">
<area shape="poly" alt="Andaman and Nicobar" coords="834,834,823,950,910,1101,950,1106,903,776" title="Andaman and Nicobar" onClick="onBoxClicked2('I1', 'an')">
<area shape="poly" alt="Kerala" coords="247,880,252,893,251,902,253,908,261,908,263,913,259,916,266,934,276,964,283,983,279,999,285,1009,294,1027,308,1042,314,1037,313,1023,317,1020,314,1012,321,992,323,996,315,992,317,965,306,970,302,963,306,948,298,941,298,933,290,934,292,926,284,923,284,920,291,917,281,907,276,904,275,904,268,898,262,897,255,889,254,882" title="Kerala" onClick="onBoxClicked2('I1', 'kl')">
<area shape="poly" alt="Tamil Nadu" coords="292,913,297,916,305,916,309,911,315,913,320,912,326,910,337,904,329,897,332,890,332,883,336,879,338,879,343,873,348,873,348,876,352,874,354,878,356,879,356,880,356,882,368,881,371,869,383,867,395,868,399,859,404,860,405,862,411,862,420,852,427,855,430,872,421,897,409,907,404,905,401,909,403,915,409,918,412,935,407,941,405,948,410,951,411,965,409,971,402,967,389,972,389,978,380,988,378,997,383,1006,355,1010,349,1019,343,1027,347,1032,335,1043,326,1046,312,1044,310,1040,315,1033,315,1023,319,1017,315,1008,323,993,316,987,317,963,307,965,307,947,298,940,299,932,292,930,286,920,292,916" title="Tamil Nadu" onClick="onBoxClicked2('I1', 'tn')">
<area shape="poly" alt="Karnataka" coords="332,825,332,834,320,834,311,826,312,841,317,841,319,837,323,837,328,841,338,841,342,838,346,837,352,843,349,846,354,848,355,851,360,851,369,864,362,874,359,873,356,878,351,874,342,874,338,880,334,881,331,884,329,897,337,903,325,913,309,911,305,918,292,915,268,898,263,897,246,876,232,867,230,837,226,824,223,813,213,796,219,791,223,780,223,772,217,767,227,761,229,747,225,743,228,733,238,736,250,728,259,725,275,722,275,704,301,715,303,702,314,701,326,686,343,682,345,697,338,709,344,713,335,720,335,746,329,745,328,749,336,750,337,755,332,769,321,768,317,782,320,797,309,796,309,822,322,821" title="Karnataka" onClick="onBoxClicked2('I1', 'ka')">
<area shape="poly" alt="Goa" coords="221,775,222,774,221,776,222,777,223,779,222,782,220,788,219,791,216,792,214,792,212,791,211,789,211,787,210,785,209,782,209,781,208,779,207,777,206,773,202,769,199,762,204,761,208,763,212,768,217,768,219,769,220,770,221,771,222,772,222,774" title="Goa" onClick="onBoxClicked2('I1', 'ga')">
<area shape="poly" alt="Andhra Pradesh" coords="582,668,496,749,456,773,442,767,429,777,424,797,428,846,411,862,406,862,404,860,398,859,393,868,373,867,367,881,357,882,357,874,362,874,370,865,352,844,346,837,338,841,328,841,323,837,320,837,316,841,312,841,311,826,320,834,332,834,333,826,323,820,311,822,308,794,321,797,322,790,318,783,319,777,322,767,332,769,337,751,328,749,329,745,335,746,336,732,337,720,342,715,341,706,347,694,344,674,355,661,350,654,356,645,361,649,368,641,372,633,371,626,376,630,386,629,390,634,391,640,399,640,403,637,409,641,417,638,424,642,426,651,423,660,429,674,444,681,466,709,501,698,508,684,513,691,520,686,527,687,530,672,538,668,537,663,546,661,565,675,582,661" title="Andhra Pradesh" onClick="onBoxClicked2('I1', 'as')">
<area shape="poly" alt="Orissa" coords="673,562,675,572,657,581,662,602,637,633,614,642,605,646,591,655,580,663,566,674,547,660,537,663,537,670,529,671,526,686,514,689,506,682,502,695,475,704,469,700,476,689,500,659,488,624,513,636,510,615,507,601,518,585,534,587,539,571,546,553,555,547,564,540,578,546,595,542,593,556,610,552,631,554,628,537,658,552,662,562" title="Orissa" onClick="onBoxClicked2('I1', 'or')">
<area shape="poly" alt="Chattisgarh" coords="543,562,537,569,533,587,516,584,506,601,513,635,488,624,499,655,488,673,466,706,437,671,437,653,445,648,458,652,458,645,444,631,447,587,465,554,469,547,476,542,498,519,501,510,485,503,487,490,510,498,526,493,544,491,560,505,570,525,563,539,543,554" title="Chattisgarh" onClick="onBoxClicked2('I1', 'cg')">
<area shape="poly" alt="Maharashtra" coords="442,604,455,651,436,653,436,669,425,668,420,642,371,625,371,633,368,641,360,649,356,645,350,654,354,661,343,674,342,681,327,685,319,694,314,700,303,701,299,713,275,704,274,722,252,725,238,735,228,733,224,744,229,748,227,761,216,767,197,760,184,678,182,646,181,615,184,607,190,606,194,613,209,609,207,591,223,594,219,577,240,567,223,554,245,552,275,571,298,572,302,586,323,569,341,562,360,576,405,570,436,575,449,582" title="Maharashtra" onClick="onBoxClicked2('I1', 'mh')">
<area shape="poly" alt="Madhya Pradesh" coords="489,445,524,472,512,496,487,491,501,518,447,579,387,570,372,566,346,572,349,560,334,561,304,574,280,567,237,548,244,530,259,505,271,485,267,448,277,442,303,459,290,485,342,462,331,447,349,443,351,431,326,434,322,419,354,399,388,385,407,393,396,426,376,435,376,472,401,473,389,435" title="Madhya Pradesh" onClick="onBoxClicked2('I1', 'mp')">
<area shape="poly" alt="Gujarat" coords="239,537,234,549,223,556,241,567,220,577,223,591,211,589,207,609,201,608,198,602,194,601,190,605,184,606,186,601,193,600,192,595,189,593,188,583,186,547,191,536,181,529,176,555,159,576,126,588,101,573,70,525,115,516,125,499,88,507,43,472,44,460,75,450,97,453,105,459,127,450,135,458,146,454,147,442,174,447,183,451,214,459,222,475,225,490,250,513" title="Gujarat" onClick="onBoxClicked2('I1', 'gj')">
<area shape="poly" alt="Rajasthan " coords="351,433,350,443,332,450,337,463,298,479,293,450,269,441,258,490,232,493,216,458,197,450,175,444,147,437,138,413,119,392,100,352,132,323,148,338,186,324,197,313,210,305,220,278,255,272,262,295,285,303,307,344,328,336,356,368,379,384,320,416,324,432" title="Rajasthan " onClick="onBoxClicked2('I1', 'rj')">
<area shape="poly" alt="Haryana" coords="333,323,349,324,348,340,337,349,334,333,325,337,314,333,307,343,303,326,298,318,295,311,292,307,290,302,289,298,283,295,260,292,262,276,275,276,280,289,288,285,298,284,304,284,314,269,316,268,333,260,333,241,357,264,341,281,341,309,333,309" title="Haryana" onClick="onBoxClicked2('I1', 'hr')">
<area shape="poly" alt="Punjab" coords="322,246,326,253,332,253,332,258,321,268,314,268,306,282,289,284,281,288,279,276,273,274,260,274,254,272,237,275,237,256,254,244,263,240,258,232,257,218,260,209,271,205,279,203,300,187,294,204,302,209,305,219,308,228,315,228,324,232,329,246" title="Punjab" onClick="onBoxClicked2('I1', 'pb')">
<area shape="poly" alt="Chandigarh" coords="325,249,326,252,332,252,331,246,324,246,324,249" title="Chandigarh" onClick="onBoxClicked2('I1', 'ch')">
<area shape="poly" alt="Jammu & Kashmir" coords="397,156,411,170,403,197,355,175,327,165,308,166,300,184,282,192,265,186,251,173,238,167,230,153,229,137,227,125,247,110,249,105,237,98,217,86,191,73,226,47,243,47,257,46,267,44,279,45,294,48,356,83,340,98,404,75,446,88,437,114" title="Jammu & Kashmir" onClick="onBoxClicked2('I1', 'jk')">
<area shape="poly" alt="Himachal Pradesh" coords="391,214,391,222,387,230,379,233,370,234,366,238,362,243,357,261,349,257,343,248,337,243,331,240,327,233,321,229,309,223,306,214,298,202,302,190,305,178,314,168,329,169,342,178,350,179,356,177,364,177,369,185,377,186,380,194,383,200,388,206" title="Himachal Pradesh" onClick="onBoxClicked2('I1', 'hp')">
<area shape="poly" alt="Uttarakhand" coords="434,251,455,260,455,270,447,278,441,286,438,299,429,313,415,310,404,306,394,300,390,287,383,281,375,275,361,272,362,261,360,251,359,241,369,233,380,229,389,227,395,225,401,223,409,235,411,236,413,238,415,239,420,239,424,241,430,242,431,246" title="Uttarakhand" onClick="onBoxClicked2('I1', 'uk')">
<area shape="poly" alt="Uttar Pradesh" coords="572,393,560,397,576,424,539,444,540,487,526,488,527,464,491,449,427,441,413,435,402,425,410,395,407,387,401,383,382,379,365,368,350,351,353,332,340,292,356,261,361,283,372,285,373,278,391,292,393,304,408,313,427,312,464,325,480,348,556,369" title="Uttar Pradesh" onClick="onBoxClicked2('I1', 'up')">
<area shape="poly" alt="Bihar" coords="689,427,678,442,658,456,654,466,639,477,627,462,619,461,614,464,608,471,599,473,589,475,579,480,566,467,548,473,542,451,546,443,559,433,579,428,561,397,576,396,558,369,575,368,585,380,605,391,613,387,620,393,637,394,656,403,693,402,679,421" title="Bihar" onClick="onBoxClicked2('I1', 'br')">
<area shape="poly" alt="West Bengal" coords="693,464,716,475,711,493,736,533,729,563,703,574,698,545,695,559,682,570,676,572,670,562,662,561,656,550,654,539,649,534,644,529,623,516,627,505,639,508,657,493,671,487,676,482,683,475,692,376,713,372,748,391,740,417,702,402,693,421,725,441" title="West Bengal" onClick="onBoxClicked2('I1', 'wb')">
<area shape="poly" alt="Jharkhand" coords="682,477,661,493,621,512,646,527,655,550,626,535,629,554,612,553,595,555,597,540,590,541,575,544,566,539,574,526,570,520,564,513,562,506,555,499,541,474,562,471,573,474,574,480,591,479,599,477,607,475,622,463,640,480,655,471,664,452,677,444,686,452" title="Jharkhand" onClick="onBoxClicked2('I1', 'jh')">
<area shape="poly" alt="Sikkim" coords="711,358,711,360,711,362,713,366,714,371,710,371,706,371,703,373,700,375,696,375,691,375,687,372,686,368,686,365,687,361,688,358,690,357,690,355,691,352,691,348,693,345,697,345,700,345,703,343,707,341,713,340,716,345,716,350,714,353,711,357" title="Sikkim" onClick="onBoxClicked2('I1', 'sk')">
<area shape="poly" alt="Arunachal Pradesh" coords="977,362,954,354,916,381,914,371,939,355,933,333,912,339,883,353,869,374,856,378,819,380,814,362,804,363,801,354,837,342,831,338,850,319,871,310,876,301,891,291,918,297,919,290,932,283,944,285,954,303,947,319,953,314,977,318,983,328,967,346" title="Arunachal Pradesh" onClick="onBoxClicked2('I1', 'ar')">
<area shape="poly" alt="Meghalaya" coords="842,434,838,443,816,441,811,441,808,441,806,441,804,441,803,441,803,441,801,441,800,441,796,443,794,443,786,443,767,443,744,434,750,429,754,418,785,419,795,423,797,422,799,420,801,418,804,416,808,412,813,412,823,407,823,416,826,422,838,426" title="Meghalaya" onClick="onBoxClicked2('I1', 'ml')">
<area shape="poly" alt="Assam" coords="875,413,871,408,868,417,857,423,863,429,850,462,844,464,834,473,825,469,830,450,835,445,843,435,839,425,825,421,822,406,795,421,774,417,753,418,750,429,746,431,743,411,749,390,762,383,775,387,795,387,807,386,811,384,818,383,827,380,847,378,871,375,884,352,914,339,932,334,938,354,890,389" title="Assam" onClick="onBoxClicked2('I1', 'am')">
<area shape="poly" alt="Nagaland" coords="911,406,910,408,910,410,910,414,908,416,906,418,904,422,900,421,898,420,890,424,875,423,875,429,869,434,861,425,867,419,871,410,877,414,877,406,880,397,885,394,885,389,890,392,892,386,895,382,905,376,913,369,915,382,911,397,911,400,912,404" title="Nagaland" onClick="onBoxClicked2('I1', 'nl')">
<area shape="poly" alt="Manipur" coords="902,444,900,448,897,453,894,459,892,465,887,481,883,475,877,477,872,475,865,475,859,472,852,471,853,460,854,453,857,447,858,444,859,441,861,438,862,434,867,437,870,437,872,436,874,434,875,430,876,424,885,423,893,422,901,424,902,431,906,437" title="Manipur" onClick="onBoxClicked2('I1', 'mn')">
<area shape="poly" alt="Mizoram" coords="869,493,869,497,869,502,869,508,864,516,858,514,863,541,854,552,843,546,837,517,834,512,834,504,834,501,833,497,833,495,832,493,832,491,832,488,831,483,830,478,831,471,837,470,843,464,847,464,852,471,858,472,861,476,864,480,865,485,866,490" title="Mizoram" onClick="onBoxClicked2('I1', 'mz')">
<area shape="poly" alt="Tripura" coords="827,491,820,491,817,495,817,501,816,503,813,504,814,501,812,518,807,518,804,507,801,509,801,517,797,509,796,491,796,489,796,487,796,485,798,481,801,481,803,480,805,479,807,479,809,478,809,478,813,477,815,477,821,468,829,472,828,479,830,486" title="Tripura" onClick="onBoxClicked2('I1', 'tr')">
<area shape="poly" alt="Puducherry" coords="253,908,258,916,262,913,260,908" title="Puducherry" onClick="onBoxClicked2('I1', 'py')">
<area shape="poly" alt="Puducherry" coords="403,915,409,919,410,907,404,905,401,909,402,915" title="Puducherry" onClick="onBoxClicked2('I1', 'py')">
<area shape="poly" alt="Puducherry" coords="405,948,411,951,414,946,409,939,406,942" title="Puducherry" onClick="onBoxClicked2('I1', 'py')">
<area shape="poly" alt="Daman & Diu" coords="185,598,186,601,193,600,192,595,188,593" title="Daman & Diu" onClick="onBoxClicked2('I1', 'dd')">
<area shape="poly" alt="Delhi" coords="334,313,335,321,341,323,346,323,347,320,341,310,336,310" title="Delhi" onClick="onBoxClicked2('I1', 'dl')">
<area shape="poly" alt="Dadra and Nagar Haveli" coords="191,605,195,601,198,602,200,606,203,609,199,611,194,613,193,608,191,606,192,605" title="Dadra and Nagar Haveli" onClick="onBoxClicked2('I1', 'dn')">
<area shape="default" alt="">
</map>	
     
<? include '../../footer.php'; ?>
