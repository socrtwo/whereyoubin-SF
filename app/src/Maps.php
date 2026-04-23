<?php
declare(strict_types=1);

namespace TravelLog;

/**
 * Place data for every map. Codes follow ISO where possible:
 *   - US states / DC:      USPS abbreviations
 *   - Canadian provinces:  ISO 3166-2:CA (e.g. BC, ON)
 *   - Australian states:   ISO 3166-2:AU (e.g. NSW, VIC)
 *   - Chinese provinces:   ISO 3166-2:CN (e.g. BJ, SH)
 *   - Indian states/UTs:   ISO 3166-2:IN (e.g. MH, DL)
 *   - Russian subjects:    ISO 3166-2:RU (e.g. MOW, SPE)
 *   - All country maps:    ISO 3166-1 alpha-2
 *
 * The flag emoji is rendered as an accent on the chip.
 */
final class Maps
{
    /** @return array<string, array{title:string, emoji:string, subtitle:string, places:array<string,string>}> */
    public static function all(): array
    {
        static $all = null;
        if ($all !== null) return $all;

        return $all = [
            'us'        => ['title' => 'United States',   'emoji' => '🇺🇸', 'subtitle' => 'All 50 states + DC',
                            'places' => self::us()],
            'europe'    => ['title' => 'Europe',          'emoji' => '🇪🇺', 'subtitle' => 'Sovereign countries',
                            'places' => self::europe()],
            'canada'    => ['title' => 'Canada',          'emoji' => '🇨🇦', 'subtitle' => 'Provinces & territories',
                            'places' => self::canada()],
            'africa'    => ['title' => 'Africa',          'emoji' => '🌍', 'subtitle' => 'Sovereign countries',
                            'places' => self::africa()],
            'russia'    => ['title' => 'Russia',          'emoji' => '🇷🇺', 'subtitle' => 'Federal subjects',
                            'places' => self::russia()],
            'china'     => ['title' => 'China',           'emoji' => '🇨🇳', 'subtitle' => 'Provinces, regions & SARs',
                            'places' => self::china()],
            'india'     => ['title' => 'India',           'emoji' => '🇮🇳', 'subtitle' => 'States & Union Territories',
                            'places' => self::india()],
            'samerica'  => ['title' => 'South America',   'emoji' => '🌎', 'subtitle' => 'Sovereign countries & territories',
                            'places' => self::southAmerica()],
            'caribbean' => ['title' => 'Caribbean',       'emoji' => '🏝️', 'subtitle' => 'Countries, territories & possessions',
                            'places' => self::caribbean()],
            'asia'      => ['title' => 'Asia',            'emoji' => '🌏', 'subtitle' => 'Sovereign countries',
                            'places' => self::asia()],
            'australia' => ['title' => 'Australia',       'emoji' => '🇦🇺', 'subtitle' => 'States & territories',
                            'places' => self::australia()],
            'pacific'   => ['title' => 'Pacific Islands', 'emoji' => '🐚', 'subtitle' => 'Countries, territories & possessions',
                            'places' => self::pacific()],
        ];
    }

    /** @return array{title:string, emoji:string, subtitle:string, places:array<string,string>} */
    public static function get(string $key): ?array
    {
        return self::all()[$key] ?? null;
    }

    // ----------------------------------------------------------------------
    //   Datasets
    // ----------------------------------------------------------------------

    /** @return array<string,string> */
    private static function us(): array
    {
        return [
            'AL' => 'Alabama', 'AK' => 'Alaska', 'AZ' => 'Arizona', 'AR' => 'Arkansas',
            'CA' => 'California', 'CO' => 'Colorado', 'CT' => 'Connecticut', 'DE' => 'Delaware',
            'DC' => 'District of Columbia', 'FL' => 'Florida', 'GA' => 'Georgia', 'HI' => 'Hawaii',
            'ID' => 'Idaho', 'IL' => 'Illinois', 'IN' => 'Indiana', 'IA' => 'Iowa',
            'KS' => 'Kansas', 'KY' => 'Kentucky', 'LA' => 'Louisiana', 'ME' => 'Maine',
            'MD' => 'Maryland', 'MA' => 'Massachusetts', 'MI' => 'Michigan', 'MN' => 'Minnesota',
            'MS' => 'Mississippi', 'MO' => 'Missouri', 'MT' => 'Montana', 'NE' => 'Nebraska',
            'NV' => 'Nevada', 'NH' => 'New Hampshire', 'NJ' => 'New Jersey', 'NM' => 'New Mexico',
            'NY' => 'New York', 'NC' => 'North Carolina', 'ND' => 'North Dakota', 'OH' => 'Ohio',
            'OK' => 'Oklahoma', 'OR' => 'Oregon', 'PA' => 'Pennsylvania', 'RI' => 'Rhode Island',
            'SC' => 'South Carolina', 'SD' => 'South Dakota', 'TN' => 'Tennessee', 'TX' => 'Texas',
            'UT' => 'Utah', 'VT' => 'Vermont', 'VA' => 'Virginia', 'WA' => 'Washington',
            'WV' => 'West Virginia', 'WI' => 'Wisconsin', 'WY' => 'Wyoming',
        ];
    }

    private static function canada(): array
    {
        return [
            'AB' => 'Alberta', 'BC' => 'British Columbia', 'MB' => 'Manitoba',
            'NB' => 'New Brunswick', 'NL' => 'Newfoundland and Labrador',
            'NS' => 'Nova Scotia', 'ON' => 'Ontario', 'PE' => 'Prince Edward Island',
            'QC' => 'Quebec', 'SK' => 'Saskatchewan',
            'NT' => 'Northwest Territories', 'NU' => 'Nunavut', 'YT' => 'Yukon',
        ];
    }

    private static function australia(): array
    {
        return [
            'NSW' => 'New South Wales', 'QLD' => 'Queensland', 'SA' => 'South Australia',
            'TAS' => 'Tasmania', 'VIC' => 'Victoria', 'WA' => 'Western Australia',
            'ACT' => 'Australian Capital Territory', 'NT' => 'Northern Territory',
        ];
    }

    private static function europe(): array
    {
        return [
            'AL' => 'Albania', 'AD' => 'Andorra', 'AT' => 'Austria', 'BY' => 'Belarus',
            'BE' => 'Belgium', 'BA' => 'Bosnia and Herzegovina', 'BG' => 'Bulgaria',
            'HR' => 'Croatia', 'CY' => 'Cyprus', 'CZ' => 'Czechia', 'DK' => 'Denmark',
            'EE' => 'Estonia', 'FI' => 'Finland', 'FR' => 'France', 'DE' => 'Germany',
            'GR' => 'Greece', 'HU' => 'Hungary', 'IS' => 'Iceland', 'IE' => 'Ireland',
            'IT' => 'Italy', 'XK' => 'Kosovo', 'LV' => 'Latvia', 'LI' => 'Liechtenstein',
            'LT' => 'Lithuania', 'LU' => 'Luxembourg', 'MT' => 'Malta', 'MD' => 'Moldova',
            'MC' => 'Monaco', 'ME' => 'Montenegro', 'NL' => 'Netherlands', 'MK' => 'North Macedonia',
            'NO' => 'Norway', 'PL' => 'Poland', 'PT' => 'Portugal', 'RO' => 'Romania',
            'SM' => 'San Marino', 'RS' => 'Serbia', 'SK' => 'Slovakia', 'SI' => 'Slovenia',
            'ES' => 'Spain', 'SE' => 'Sweden', 'CH' => 'Switzerland', 'TR' => 'Türkiye',
            'UA' => 'Ukraine', 'GB' => 'United Kingdom', 'VA' => 'Vatican City',
        ];
    }

    private static function africa(): array
    {
        return [
            'DZ' => 'Algeria', 'AO' => 'Angola', 'BJ' => 'Benin', 'BW' => 'Botswana',
            'BF' => 'Burkina Faso', 'BI' => 'Burundi', 'CV' => 'Cabo Verde', 'CM' => 'Cameroon',
            'CF' => 'Central African Republic', 'TD' => 'Chad', 'KM' => 'Comoros',
            'CG' => 'Congo (Brazzaville)', 'CD' => 'Congo (Kinshasa)', 'CI' => "Côte d'Ivoire",
            'DJ' => 'Djibouti', 'EG' => 'Egypt', 'GQ' => 'Equatorial Guinea', 'ER' => 'Eritrea',
            'SZ' => 'Eswatini', 'ET' => 'Ethiopia', 'GA' => 'Gabon', 'GM' => 'Gambia',
            'GH' => 'Ghana', 'GN' => 'Guinea', 'GW' => 'Guinea-Bissau', 'KE' => 'Kenya',
            'LS' => 'Lesotho', 'LR' => 'Liberia', 'LY' => 'Libya', 'MG' => 'Madagascar',
            'MW' => 'Malawi', 'ML' => 'Mali', 'MR' => 'Mauritania', 'MU' => 'Mauritius',
            'MA' => 'Morocco', 'MZ' => 'Mozambique', 'NA' => 'Namibia', 'NE' => 'Niger',
            'NG' => 'Nigeria', 'RW' => 'Rwanda', 'ST' => 'São Tomé and Príncipe', 'SN' => 'Senegal',
            'SC' => 'Seychelles', 'SL' => 'Sierra Leone', 'SO' => 'Somalia', 'ZA' => 'South Africa',
            'SS' => 'South Sudan', 'SD' => 'Sudan', 'TZ' => 'Tanzania', 'TG' => 'Togo',
            'TN' => 'Tunisia', 'UG' => 'Uganda', 'ZM' => 'Zambia', 'ZW' => 'Zimbabwe',
        ];
    }

    private static function russia(): array
    {
        // ISO 3166-2:RU — 83 federal subjects
        return [
            'AD' => 'Adygea', 'AL' => 'Altai Republic', 'ALT' => 'Altai Krai', 'AMU' => 'Amur',
            'ARK' => 'Arkhangelsk', 'AST' => 'Astrakhan', 'BA' => 'Bashkortostan', 'BEL' => 'Belgorod',
            'BRY' => 'Bryansk', 'BU' => 'Buryatia', 'CE' => 'Chechnya', 'CHE' => 'Chelyabinsk',
            'CHU' => 'Chukotka', 'CU' => 'Chuvashia', 'DA' => 'Dagestan', 'IN' => 'Ingushetia',
            'IRK' => 'Irkutsk', 'IVA' => 'Ivanovo', 'KB' => 'Kabardino-Balkaria', 'KGD' => 'Kaliningrad',
            'KL' => 'Kalmykia', 'KLU' => 'Kaluga', 'KAM' => 'Kamchatka', 'KC' => 'Karachay-Cherkessia',
            'KR' => 'Karelia', 'KEM' => 'Kemerovo', 'KHA' => 'Khabarovsk', 'KHM' => 'Khanty-Mansi',
            'KIR' => 'Kirov', 'KO' => 'Komi', 'KOS' => 'Kostroma', 'KDA' => 'Krasnodar',
            'KYA' => 'Krasnoyarsk', 'KGN' => 'Kurgan', 'KRS' => 'Kursk', 'LEN' => 'Leningrad',
            'LIP' => 'Lipetsk', 'MAG' => 'Magadan', 'ME' => 'Mari El', 'MO' => 'Mordovia',
            'MOS' => 'Moscow Oblast', 'MOW' => 'Moscow (City)', 'MUR' => 'Murmansk',
            'NEN' => 'Nenets', 'NIZ' => 'Nizhny Novgorod', 'NGR' => 'Novgorod', 'NVS' => 'Novosibirsk',
            'OMS' => 'Omsk', 'ORE' => 'Orenburg', 'ORL' => 'Oryol', 'PNZ' => 'Penza',
            'PER' => 'Perm Krai', 'PRI' => 'Primorsky', 'PSK' => 'Pskov', 'ROS' => 'Rostov',
            'RYA' => 'Ryazan', 'SA' => 'Sakha (Yakutia)', 'SAK' => 'Sakhalin', 'SAM' => 'Samara',
            'SPE' => 'Saint Petersburg', 'SAR' => 'Saratov', 'SE' => 'North Ossetia-Alania',
            'SMO' => 'Smolensk', 'STA' => 'Stavropol', 'SVE' => 'Sverdlovsk', 'TAM' => 'Tambov',
            'TA' => 'Tatarstan', 'TOM' => 'Tomsk', 'TUL' => 'Tula', 'TVE' => 'Tver',
            'TYU' => 'Tyumen', 'TY' => 'Tuva', 'UD' => 'Udmurtia', 'ULY' => 'Ulyanovsk',
            'VLA' => 'Vladimir', 'VGG' => 'Volgograd', 'VLG' => 'Vologda', 'VOR' => 'Voronezh',
            'YAN' => 'Yamalo-Nenets', 'YAR' => 'Yaroslavl', 'YEV' => 'Jewish Aut. Oblast',
            'ZAB' => 'Zabaykalsky',
        ];
    }

    private static function china(): array
    {
        return [
            'BJ' => 'Beijing', 'TJ' => 'Tianjin', 'SH' => 'Shanghai', 'CQ' => 'Chongqing',
            'HE' => 'Hebei', 'SX' => 'Shanxi', 'LN' => 'Liaoning', 'JL' => 'Jilin',
            'HL' => 'Heilongjiang', 'JS' => 'Jiangsu', 'ZJ' => 'Zhejiang', 'AH' => 'Anhui',
            'FJ' => 'Fujian', 'JX' => 'Jiangxi', 'SD' => 'Shandong', 'HA' => 'Henan',
            'HB' => 'Hubei', 'HN' => 'Hunan', 'GD' => 'Guangdong', 'HI' => 'Hainan',
            'SC' => 'Sichuan', 'GZ' => 'Guizhou', 'YN' => 'Yunnan', 'SN' => 'Shaanxi',
            'GS' => 'Gansu', 'QH' => 'Qinghai', 'NM' => 'Inner Mongolia', 'GX' => 'Guangxi',
            'XZ' => 'Tibet (Xizang)', 'NX' => 'Ningxia', 'XJ' => 'Xinjiang',
            'HK' => 'Hong Kong SAR', 'MO' => 'Macao SAR', 'TW' => 'Taiwan',
        ];
    }

    private static function india(): array
    {
        return [
            'AP' => 'Andhra Pradesh', 'AR' => 'Arunachal Pradesh', 'AS' => 'Assam',
            'BR' => 'Bihar', 'CT' => 'Chhattisgarh', 'GA' => 'Goa', 'GJ' => 'Gujarat',
            'HR' => 'Haryana', 'HP' => 'Himachal Pradesh', 'JH' => 'Jharkhand',
            'KA' => 'Karnataka', 'KL' => 'Kerala', 'MP' => 'Madhya Pradesh',
            'MH' => 'Maharashtra', 'MN' => 'Manipur', 'ML' => 'Meghalaya', 'MZ' => 'Mizoram',
            'NL' => 'Nagaland', 'OD' => 'Odisha', 'PB' => 'Punjab', 'RJ' => 'Rajasthan',
            'SK' => 'Sikkim', 'TN' => 'Tamil Nadu', 'TG' => 'Telangana', 'TR' => 'Tripura',
            'UP' => 'Uttar Pradesh', 'UT' => 'Uttarakhand', 'WB' => 'West Bengal',
            'AN' => 'Andaman & Nicobar Islands', 'CH' => 'Chandigarh',
            'DH' => 'Dadra & Nagar Haveli and Daman & Diu', 'DL' => 'Delhi',
            'JK' => 'Jammu & Kashmir', 'LA' => 'Ladakh', 'LD' => 'Lakshadweep',
            'PY' => 'Puducherry',
        ];
    }

    private static function southAmerica(): array
    {
        return [
            'AR' => 'Argentina', 'BO' => 'Bolivia', 'BR' => 'Brazil', 'CL' => 'Chile',
            'CO' => 'Colombia', 'EC' => 'Ecuador', 'FK' => 'Falkland Islands (UK)',
            'GF' => 'French Guiana (FR)', 'GY' => 'Guyana', 'PY' => 'Paraguay',
            'PE' => 'Peru', 'SR' => 'Suriname', 'UY' => 'Uruguay', 'VE' => 'Venezuela',
        ];
    }

    private static function caribbean(): array
    {
        return [
            'AI' => 'Anguilla (UK)', 'AG' => 'Antigua and Barbuda', 'AW' => 'Aruba (NL)',
            'BS' => 'Bahamas', 'BB' => 'Barbados', 'BQ' => 'Bonaire, Sint Eustatius & Saba (NL)',
            'VG' => 'British Virgin Islands (UK)', 'KY' => 'Cayman Islands (UK)',
            'CU' => 'Cuba', 'CW' => 'Curaçao (NL)', 'DM' => 'Dominica', 'DO' => 'Dominican Republic',
            'GD' => 'Grenada', 'GP' => 'Guadeloupe (FR)', 'HT' => 'Haiti',
            'JM' => 'Jamaica', 'MQ' => 'Martinique (FR)', 'MS' => 'Montserrat (UK)',
            'PR' => 'Puerto Rico (US)', 'BL' => 'Saint Barthélemy (FR)',
            'KN' => 'Saint Kitts and Nevis', 'LC' => 'Saint Lucia',
            'MF' => 'Saint Martin (FR)', 'VC' => 'Saint Vincent and the Grenadines',
            'SX' => 'Sint Maarten (NL)', 'TT' => 'Trinidad and Tobago',
            'TC' => 'Turks and Caicos (UK)', 'VI' => 'US Virgin Islands (US)',
        ];
    }

    private static function asia(): array
    {
        return [
            'AF' => 'Afghanistan', 'AM' => 'Armenia', 'AZ' => 'Azerbaijan', 'BH' => 'Bahrain',
            'BD' => 'Bangladesh', 'BT' => 'Bhutan', 'BN' => 'Brunei', 'KH' => 'Cambodia',
            'CN' => 'China', 'CY' => 'Cyprus', 'GE' => 'Georgia', 'IN' => 'India',
            'ID' => 'Indonesia', 'IR' => 'Iran', 'IQ' => 'Iraq', 'IL' => 'Israel',
            'JP' => 'Japan', 'JO' => 'Jordan', 'KZ' => 'Kazakhstan', 'KW' => 'Kuwait',
            'KG' => 'Kyrgyzstan', 'LA' => 'Laos', 'LB' => 'Lebanon', 'MY' => 'Malaysia',
            'MV' => 'Maldives', 'MN' => 'Mongolia', 'MM' => 'Myanmar', 'NP' => 'Nepal',
            'KP' => 'North Korea', 'OM' => 'Oman', 'PK' => 'Pakistan', 'PS' => 'Palestine',
            'PH' => 'Philippines', 'QA' => 'Qatar', 'SA' => 'Saudi Arabia', 'SG' => 'Singapore',
            'KR' => 'South Korea', 'LK' => 'Sri Lanka', 'SY' => 'Syria', 'TW' => 'Taiwan',
            'TJ' => 'Tajikistan', 'TH' => 'Thailand', 'TL' => 'Timor-Leste', 'TR' => 'Türkiye',
            'TM' => 'Turkmenistan', 'AE' => 'United Arab Emirates', 'UZ' => 'Uzbekistan',
            'VN' => 'Vietnam', 'YE' => 'Yemen', 'HK' => 'Hong Kong (CN)', 'MO' => 'Macao (CN)',
        ];
    }

    private static function pacific(): array
    {
        return [
            'AS' => 'American Samoa (US)', 'CK' => 'Cook Islands (NZ)',
            'FJ' => 'Fiji', 'PF' => 'French Polynesia (FR)', 'GU' => 'Guam (US)',
            'KI' => 'Kiribati', 'MH' => 'Marshall Islands', 'FM' => 'Micronesia',
            'NR' => 'Nauru', 'NC' => 'New Caledonia (FR)', 'NZ' => 'New Zealand',
            'NU' => 'Niue (NZ)', 'NF' => 'Norfolk Island (AU)',
            'MP' => 'Northern Mariana Islands (US)', 'PW' => 'Palau',
            'PG' => 'Papua New Guinea', 'PN' => 'Pitcairn Islands (UK)',
            'WS' => 'Samoa', 'SB' => 'Solomon Islands',
            'TK' => 'Tokelau (NZ)', 'TO' => 'Tonga', 'TV' => 'Tuvalu',
            'VU' => 'Vanuatu', 'WF' => 'Wallis and Futuna (FR)',
            'HM' => 'Heard & McDonald Islands (AU)', 'UM' => 'US Minor Outlying Is. (US)',
        ];
    }
}
