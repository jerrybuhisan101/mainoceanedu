<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Timezone
 *
 * @author CMSHelplive
 */
class Element_Timezone extends Element_Select
{

    public function __construct($label, $name, array $properties = null)
    {
        $options = array(
            null => '--Select Timezone--',
            'Africa/Abidjan' => 'Abidjan',
            'Africa/Accra' => 'Accra',
            'Africa/Addis_Ababa' => 'Addis Ababa',
            'Africa/Algiers' => 'Algiers',
            'Africa/Asmara' => 'Asmara',
            'Africa/Bamako' => 'Bamako',
            'Africa/Bangui' => 'Bangui',
            'Africa/Banjul' => 'Banjul',
            'Africa/Bissau' => 'Bissau',
            'Africa/Blantyre' => 'Blantyre',
            'Africa/Brazzaville' => 'Brazzaville',
            'Africa/Bujumbura' => 'Bujumbura',
            'Africa/Cairo' => 'Cairo',
            'Africa/Casablanca' => 'Casablanca',
            'Africa/Ceuta' => 'Ceuta',
            'Africa/Conakry' => 'Conakry',
            'Africa/Dakar' => 'Dakar',
            'Africa/Dar_es_Salaam' => 'Dar es Salaam',
            'Africa/Djibouti' => 'Djibouti',
            'Africa/Douala' => 'Douala',
            'Africa/El_Aaiun' => 'El Aaiun',
            'Africa/Freetown' => 'Freetown',
            'Africa/Gaborone' => 'Gaborone',
            'Africa/Harare' => 'Harare',
            'Africa/Johannesburg' => 'Johannesburg',
            'Africa/Juba' => 'Juba',
            'Africa/Kampala' => 'Kampala',
            'Africa/Khartoum' => 'Khartoum',
            'Africa/Kigali' => 'Kigali',
            'Africa/Kinshasa' => 'Kinshasa',
            'Africa/Lagos' => 'Lagos',
            'Africa/Libreville' => 'Libreville',
            'Africa/Lome' => 'Lome',
            'Africa/Luanda' => 'Luanda',
            'Africa/Lubumbashi' => 'Lubumbashi',
            'Africa/Lusaka' => 'Lusaka',
            'Africa/Malabo' => 'Malabo',
            'Africa/Maputo' => 'Maputo',
            'Africa/Maseru' => 'Maseru',
            'Africa/Mbabane' => 'Mbabane',
            'Africa/Mogadishu' => 'Mogadishu',
            'Africa/Monrovia' => 'Monrovia',
            'Africa/Nairobi' => 'Nairobi',
            'Africa/Ndjamena' => 'Ndjamena',
            'Africa/Niamey' => 'Niamey',
            'Africa/Nouakchott' => 'Nouakchott',
            'Africa/Ouagadougou' => 'Ouagadougou',
            'Africa/Porto-Novo' => 'Porto-Novo',
            'Africa/Sao_Tome' => 'Sao Tome',
            'Africa/Tripoli' => 'Tripoli',
            'Africa/Tunis' => 'Tunis',
            'Africa/Windhoek' => 'Windhoek',
            'America/Adak' => 'Adak',
            'America/Anchorage' => 'Anchorage',
            'America/Anguilla' => 'Anguilla',
            'America/Antigua' => 'Antigua',
            'America/Araguaina' => 'Araguaina',
            'America/Argentina/Buenos_Aires' => 'Argentina - Buenos Aires',
            'America/Argentina/Catamarca' => 'Argentina - Catamarca',
            'America/Argentina/Cordoba' => 'Argentina - Cordoba',
            'America/Argentina/Jujuy' => 'Argentina - Jujuy',
            'America/Argentina/La_Rioja' => 'Argentina - La Rioja',
            'America/Argentina/Mendoza' => 'Argentina - Mendoza',
            'America/Argentina/Rio_Gallegos' => 'Argentina - Rio Gallegos',
            'America/Argentina/Salta' => 'Argentina - Salta',
            'America/Argentina/San_Juan' => 'Argentina - San Juan',
            'America/Argentina/San_Luis' => 'Argentina - San Luis',
            'America/Argentina/Tucuman' => 'Argentina - Tucuman',
            'America/Argentina/Ushuaia' => 'Argentina - Ushuaia',
            'America/Aruba' => 'Aruba',
            'America/Asuncion' => 'Asuncion',
            'America/Atikokan' => 'Atikokan',
            'America/Bahia' => 'Bahia',
            'America/Bahia_Banderas' => 'Bahia Banderas',
            'America/Barbados' => 'Barbados',
            'America/Belem' => 'Belem',
            'America/Belize' => 'Belize',
            'America/Blanc-Sablon' => 'Blanc-Sablon',
            'America/Boa_Vista' => 'Boa Vista',
            'America/Bogota' => 'Bogota',
            'America/Boise' => 'Boise',
            'America/Cambridge_Bay' => 'Cambridge Bay',
            'America/Campo_Grande' => 'Campo Grande',
            'America/Cancun' => 'Cancun',
            'America/Caracas' => 'Caracas',
            'America/Cayenne' => 'Cayenne',
            'America/Cayman' => 'Cayman',
            'America/Chicago' => 'Chicago',
            'America/Chihuahua' => 'Chihuahua',
            'America/Costa_Rica' => 'Costa Rica',
            'America/Creston' => 'Creston',
            'America/Cuiaba' => 'Cuiaba',
            'America/Curacao' => 'Curacao',
            'America/Danmarkshavn' => 'Danmarkshavn',
            'America/Dawson' => 'Dawson',
            'America/Dawson_Creek' => 'Dawson Creek',
            'America/Denver' => 'Denver',
            'America/Detroit' => 'Detroit',
            'America/Dominica' => 'Dominica',
            'America/Edmonton' => 'Edmonton',
            'America/Eirunepe' => 'Eirunepe',
            'America/El_Salvador' => 'El Salvador',
            'America/Fortaleza' => 'Fortaleza',
            'America/Glace_Bay' => 'Glace Bay',
            'America/Godthab' => 'Godthab',
            'America/Goose_Bay' => 'Goose Bay',
            'America/Grand_Turk' => 'Grand Turk',
            'America/Grenada' => 'Grenada',
            'America/Guadeloupe' => 'Guadeloupe',
            'America/Guatemala' => 'Guatemala',
            'America/Guayaquil' => 'Guayaquil',
            'America/Guyana' => 'Guyana',
            'America/Halifax' => 'Halifax',
            'America/Havana' => 'Havana',
            'America/Hermosillo' => 'Hermosillo',
            'America/Indiana/Indianapolis' => 'Indiana - Indianapolis',
            'America/Indiana/Knox' => 'Indiana - Knox',
            'America/Indiana/Marengo' => 'Indiana - Marengo',
            'America/Indiana/Petersburg' => 'Indiana - Petersburg',
            'America/Indiana/Tell_City' => 'Indiana - Tell City',
            'America/Indiana/Vevay' => 'Indiana - Vevay',
            'America/Indiana/Vincennes' => 'Indiana - Vincennes',
            'America/Indiana/Winamac' => 'Indiana - Winamac',
            'America/Inuvik' => 'Inuvik',
            'America/Iqaluit' => 'Iqaluit',
            'America/Jamaica' => 'Jamaica',
            'America/Juneau' => 'Juneau',
            'America/Kentucky/Louisville' => 'Kentucky - Louisville',
            'America/Kentucky/Monticello' => 'Kentucky - Monticello',
            'America/Kralendijk' => 'Kralendijk',
            'America/La_Paz' => 'La Paz',
            'America/Lima' => 'Lima',
            'America/Los_Angeles' => 'Los Angeles',
            'America/Lower_Princes' => 'Lower Princes',
            'America/Maceio' => 'Maceio',
            'America/Managua' => 'Managua',
            'America/Manaus' => 'Manaus',
            'America/Marigot' => 'Marigot',
            'America/Martinique' => 'Martinique',
            'America/Matamoros' => 'Matamoros',
            'America/Mazatlan' => 'Mazatlan',
            'America/Menominee' => 'Menominee',
            'America/Merida' => 'Merida',
            'America/Metlakatla' => 'Metlakatla',
            'America/Mexico_City' => 'Mexico City',
            'America/Miquelon' => 'Miquelon',
            'America/Moncton' => 'Moncton',
            'America/Monterrey' => 'Monterrey',
            'America/Montevideo' => 'Montevideo',
            'America/Montserrat' => 'Montserrat',
            'America/Nassau' => 'Nassau',
            'America/New_York' => 'New York',
            'America/Nipigon' => 'Nipigon',
            'America/Nome' => 'Nome',
            'America/Noronha' => 'Noronha',
            'America/North_Dakota/Beulah' => 'North Dakota - Beulah',
            'America/North_Dakota/Center' => 'North Dakota - Center',
            'America/North_Dakota/New_Salem' => 'North Dakota - New Salem',
            'America/Ojinaga' => 'Ojinaga',
            'America/Panama' => 'Panama',
            'America/Pangnirtung' => 'Pangnirtung',
            'America/Paramaribo' => 'Paramaribo',
            'America/Phoenix' => 'Phoenix',
            'America/Port-au-Prince' => 'Port-au-Prince',
            'America/Port_of_Spain' => 'Port of Spain',
            'America/Porto_Velho' => 'Porto Velho',
            'America/Puerto_Rico' => 'Puerto Rico',
            'America/Rainy_River' => 'Rainy River',
            'America/Rankin_Inlet' => 'Rankin Inlet',
            'America/Recife' => 'Recife',
            'America/Regina' => 'Regina',
            'America/Resolute' => 'Resolute',
            'America/Rio_Branco' => 'Rio Branco',
            'America/Santa_Isabel' => 'Santa Isabel',
            'America/Santarem' => 'Santarem',
            'America/Santiago' => 'Santiago',
            'America/Santo_Domingo' => 'Santo Domingo',
            'America/Sao_Paulo' => 'Sao Paulo',
            'America/Scoresbysund' => 'Scoresbysund',
            'America/Sitka' => 'Sitka',
            'America/St_Barthelemy' => 'St Barthelemy',
            'America/St_Johns' => 'St Johns',
            'America/St_Kitts' => 'St Kitts',
            'America/St_Lucia' => 'St Lucia',
            'America/St_Thomas' => 'St Thomas',
            'America/St_Vincent' => 'St Vincent',
            'America/Swift_Current' => 'Swift Current',
            'America/Tegucigalpa' => 'Tegucigalpa',
            'America/Thule' => 'Thule',
            'America/Thunder_Bay' => 'Thunder Bay',
            'America/Tijuana' => 'Tijuana',
            'America/Toronto' => 'Toronto',
            'America/Tortola' => 'Tortola',
            'America/Vancouver' => 'Vancouver',
            'America/Whitehorse' => 'Whitehorse',
            'America/Winnipeg' => 'Winnipeg',
            'America/Yakutat' => 'Yakutat',
            'America/Yellowknife' => 'Yellowknife',
            'Antarctica/Casey' => 'Casey',
            'Antarctica/Davis' => 'Davis',
            'Antarctica/DumontDUrville' => 'DumontDUrville',
            'Antarctica/Macquarie' => 'Macquarie',
            'Antarctica/Mawson' => 'Mawson',
            'Antarctica/McMurdo' => 'McMurdo',
            'Antarctica/Palmer' => 'Palmer',
            'Antarctica/Rothera' => 'Rothera',
            'Antarctica/Syowa' => 'Syowa',
            'Antarctica/Troll' => 'Troll',
            'Antarctica/Vostok' => 'Vostok',
            'Arctic/Longyearbyen' => 'Longyearbyen',
            'Asia/Aden' => 'Aden',
            'Asia/Almaty' => 'Almaty',
            'Asia/Amman' => 'Amman',
            'Asia/Anadyr' => 'Anadyr',
            'Asia/Aqtau' => 'Aqtau',
            'Asia/Aqtobe' => 'Aqtobe',
            'Asia/Ashgabat' => 'Ashgabat',
            'Asia/Baghdad' => 'Baghdad',
            'Asia/Bahrain' => 'Bahrain',
            'Asia/Baku' => 'Baku',
            'Asia/Bangkok' => 'Bangkok',
            'Asia/Beirut' => 'Beirut',
            'Asia/Bishkek' => 'Bishkek',
            'Asia/Brunei' => 'Brunei',
            'Asia/Choibalsan' => 'Choibalsan',
            'Asia/Chongqing' => 'Chongqing',
            'Asia/Colombo' => 'Colombo',
            'Asia/Damascus' => 'Damascus',
            'Asia/Dhaka' => 'Dhaka',
            'Asia/Dili' => 'Dili',
            'Asia/Dubai' => 'Dubai',
            'Asia/Dushanbe' => 'Dushanbe',
            'Asia/Gaza' => 'Gaza',
            'Asia/Harbin' => 'Harbin',
            'Asia/Hebron' => 'Hebron',
            'Asia/Ho_Chi_Minh' => 'Ho Chi Minh',
            'Asia/Hong_Kong' => 'Hong Kong',
            'Asia/Hovd' => 'Hovd',
            'Asia/Irkutsk' => 'Irkutsk',
            'Asia/Jakarta' => 'Jakarta',
            'Asia/Jayapura' => 'Jayapura',
            'Asia/Jerusalem' => 'Jerusalem',
            'Asia/Kabul' => 'Kabul',
            'Asia/Kamchatka' => 'Kamchatka',
            'Asia/Karachi' => 'Karachi',
            'Asia/Kashgar' => 'Kashgar',
            'Asia/Kathmandu' => 'Kathmandu',
            'Asia/Khandyga' => 'Khandyga',
            'Asia/Kolkata' => 'Kolkata',
            'Asia/Krasnoyarsk' => 'Krasnoyarsk',
            'Asia/Kuala_Lumpur' => 'Kuala Lumpur',
            'Asia/Kuching' => 'Kuching',
            'Asia/Kuwait' => 'Kuwait',
            'Asia/Macau' => 'Macau',
            'Asia/Magadan' => 'Magadan',
            'Asia/Makassar' => 'Makassar',
            'Asia/Manila' => 'Manila',
            'Asia/Muscat' => 'Muscat',
            'Asia/Nicosia' => 'Nicosia',
            'Asia/Novokuznetsk' => 'Novokuznetsk',
            'Asia/Novosibirsk' => 'Novosibirsk',
            'Asia/Omsk' => 'Omsk',
            'Asia/Oral' => 'Oral',
            'Asia/Phnom_Penh' => 'Phnom Penh',
            'Asia/Pontianak' => 'Pontianak',
            'Asia/Pyongyang' => 'Pyongyang',
            'Asia/Qatar' => 'Qatar',
            'Asia/Qyzylorda' => 'Qyzylorda',
            'Asia/Rangoon' => 'Rangoon',
            'Asia/Riyadh' => 'Riyadh',
            'Asia/Sakhalin' => 'Sakhalin',
            'Asia/Samarkand' => 'Samarkand',
            'Asia/Seoul' => 'Seoul',
            'Asia/Shanghai' => 'Shanghai',
            'Asia/Singapore' => 'Singapore',
            'Asia/Taipei' => 'Taipei',
            'Asia/Tashkent' => 'Tashkent',
            'Asia/Tbilisi' => 'Tbilisi',
            'Asia/Tehran' => 'Tehran',
            'Asia/Thimphu' => 'Thimphu',
            'Asia/Tokyo' => 'Tokyo',
            'Asia/Ulaanbaatar' => 'Ulaanbaatar',
            'Asia/Urumqi' => 'Urumqi',
            'Asia/Ust-Nera' => 'Ust-Nera',
            'Asia/Vientiane' => 'Vientiane',
            'Asia/Vladivostok' => 'Vladivostok',
            'Asia/Yakutsk' => 'Yakutsk',
            'Asia/Yekaterinburg' => 'Yekaterinburg',
            'Asia/Yerevan' => 'Yerevan',
            'Atlantic/Azores' => 'Azores',
            'Atlantic/Bermuda' => 'Bermuda',
            'Atlantic/Canary' => 'Canary',
            'Atlantic/Cape_Verde' => 'Cape Verde',
            'Atlantic/Faroe' => 'Faroe',
            'Atlantic/Madeira' => 'Madeira',
            'Atlantic/Reykjavik' => 'Reykjavik',
            'Atlantic/South_Georgia' => 'South Georgia',
            'Atlantic/Stanley' => 'Stanley',
            'Atlantic/St_Helena' => 'St Helena',
            'Australia/Adelaide' => 'Adelaide',
            'Australia/Brisbane' => 'Brisbane',
            'Australia/Broken_Hill' => 'Broken Hill',
            'Australia/Currie' => 'Currie',
            'Australia/Darwin' => 'Darwin',
            'Australia/Eucla' => 'Eucla',
            'Australia/Hobart' => 'Hobart',
            'Australia/Lindeman' => 'Lindeman',
            'Australia/Lord_Howe' => 'Lord Howe',
            'Australia/Melbourne' => 'Melbourne',
            'Australia/Perth' => 'Perth',
            'Australia/Sydney' => 'Sydney',
            'Europe/Amsterdam' => 'Amsterdam',
            'Europe/Andorra' => 'Andorra',
            'Europe/Athens' => 'Athens',
            'Europe/Belgrade' => 'Belgrade',
            'Europe/Berlin' => 'Berlin',
            'Europe/Bratislava' => 'Bratislava',
            'Europe/Brussels' => 'Brussels',
            'Europe/Bucharest' => 'Bucharest',
            'Europe/Budapest' => 'Budapest',
            'Europe/Busingen' => 'Busingen',
            'Europe/Chisinau' => 'Chisinau',
            'Europe/Copenhagen' => 'Copenhagen',
            'Europe/Dublin' => 'Dublin',
            'Europe/Gibraltar' => 'Gibraltar',
            'Europe/Guernsey' => 'Guernsey',
            'Europe/Helsinki' => 'Helsinki',
            'Europe/Isle_of_Man' => 'Isle of Man',
            'Europe/Istanbul' => 'Istanbul',
            'Europe/Jersey' => 'Jersey',
            'Europe/Kaliningrad' => 'Kaliningrad',
            'Europe/Kiev' => 'Kiev',
            'Europe/Lisbon' => 'Lisbon',
            'Europe/Ljubljana' => 'Ljubljana',
            'Europe/London' => 'London',
            'Europe/Luxembourg' => 'Luxembourg',
            'Europe/Madrid' => 'Madrid',
            'Europe/Malta' => 'Malta',
            'Europe/Mariehamn' => 'Mariehamn',
            'Europe/Minsk' => 'Minsk',
            'Europe/Monaco' => 'Monaco',
            'Europe/Moscow' => 'Moscow',
            'Europe/Oslo' => 'Oslo',
            'Europe/Paris' => 'Paris',
            'Europe/Podgorica' => 'Podgorica',
            'Europe/Prague' => 'Prague',
            'Europe/Riga' => 'Riga',
            'Europe/Rome' => 'Rome',
            'Europe/Samara' => 'Samara',
            'Europe/San_Marino' => 'San Marino',
            'Europe/Sarajevo' => 'Sarajevo',
            'Europe/Simferopol' => 'Simferopol',
            'Europe/Skopje' => 'Skopje',
            'Europe/Sofia' => 'Sofia',
            'Europe/Stockholm' => 'Stockholm',
            'Europe/Tallinn' => 'Tallinn',
            'Europe/Tirane' => 'Tirane',
            'Europe/Uzhgorod' => 'Uzhgorod',
            'Europe/Vaduz' => 'Vaduz',
            'Europe/Vatican' => 'Vatican',
            'Europe/Vienna' => 'Vienna',
            'Europe/Vilnius' => 'Vilnius',
            'Europe/Volgograd' => 'Volgograd',
            'Europe/Warsaw' => 'Warsaw',
            'Europe/Zagreb' => 'Zagreb',
            'Europe/Zaporozhye' => 'Zaporozhye',
            'Europe/Zurich' => 'Zurich',
            'Indian/Antananarivo' => 'Antananarivo',
            'Indian/Chagos' => 'Chagos',
            'Indian/Christmas' => 'Christmas',
            'Indian/Cocos' => 'Cocos',
            'Indian/Comoro' => 'Comoro',
            'Indian/Kerguelen' => 'Kerguelen',
            'Indian/Mahe' => 'Mahe',
            'Indian/Maldives' => 'Maldives',
            'Indian/Mauritius' => 'Mauritius',
            'Indian/Mayotte' => 'Mayotte',
            'Indian/Reunion' => 'Reunion',
            'Pacific/Apia' => 'Apia',
            'Pacific/Auckland' => 'Auckland',
            'Pacific/Chatham' => 'Chatham',
            'Pacific/Chuuk' => 'Chuuk',
            'Pacific/Easter' => 'Easter',
            'Pacific/Efate' => 'Efate',
            'Pacific/Enderbury' => 'Enderbury',
            'Pacific/Fakaofo' => 'Fakaofo',
            'Pacific/Fiji' => 'Fiji',
            'Pacific/Funafuti' => 'Funafuti',
            'Pacific/Galapagos' => 'Galapagos',
            'Pacific/Gambier' => 'Gambier',
            'Pacific/Guadalcanal' => 'Guadalcanal',
            'Pacific/Guam' => 'Guam',
            'Pacific/Honolulu' => 'Honolulu',
            'Pacific/Johnston' => 'Johnston',
            'Pacific/Kiritimati' => 'Kiritimati',
            'Pacific/Kosrae' => 'Kosrae',
            'Pacific/Kwajalein' => 'Kwajalein',
            'Pacific/Majuro' => 'Majuro',
            'Pacific/Marquesas' => 'Marquesas',
            'Pacific/Midway' => 'Midway',
            'Pacific/Nauru' => 'Nauru',
            'Pacific/Niue' => 'Niue',
            'Pacific/Norfolk' => 'Norfolk',
            'Pacific/Noumea' => 'Noumea',
            'Pacific/Pago_Pago' => 'Pago Pago',
            'Pacific/Palau' => 'Palau',
            'Pacific/Pitcairn' => 'Pitcairn',
            'Pacific/Pohnpei' => 'Pohnpei',
            'Pacific/Port_Moresby' => 'Port Moresby',
            'Pacific/Rarotonga' => 'Rarotonga',
            'Pacific/Saipan' => 'Saipan',
            'Pacific/Tahiti' => 'Tahiti',
            'Pacific/Tarawa' => 'Tarawa',
            'Pacific/Tongatapu' => 'Tongatapu',
            'Pacific/Wake' => 'Wake',
            'Pacific/Wallis' => 'Wallis',
            'UTC' => 'UTC',
            'UTC-12' => 'UTC-12',
            'UTC-11.5' => 'UTC-11:30',
            'UTC-11' => 'UTC-11',
            'UTC-10.5' => 'UTC-10:30',
            'UTC-10' => 'UTC-10',
            'UTC-9.5' => 'UTC-9:30',
            'UTC-9' => 'UTC-9',
            'UTC-8.5' => 'UTC-8:30',
            'UTC-8' => 'UTC-8',
            'UTC-7.5' => 'UTC-7:30',
            'UTC-7' => 'UTC-7',
            'UTC-6.5' => 'UTC-6:30',
            'UTC-6' => 'UTC-6',
            'UTC-5.5' => 'UTC-5:30',
            'UTC-5' => 'UTC-5',
            'UTC-4.5' => 'UTC-4:30',
            'UTC-4' => 'UTC-4',
            'UTC-3.5' => 'UTC-3:30',
            'UTC-3' => 'UTC-3',
            'UTC-2.5' => 'UTC-2:30',
            'UTC-2' => 'UTC-2',
            'UTC-1.5' => 'UTC-1:30',
            'UTC-1' => 'UTC-1',
            'UTC-0.5' => 'UTC-0:30',
            'UTC+0' => 'UTC+0',
            'UTC+0.5' => 'UTC+0:30',
            'UTC+1' => 'UTC+1',
            'UTC+1.5' => 'UTC+1:30',
            'UTC+2' => 'UTC+2',
            'UTC+2.5' => 'UTC+2:30',
            'UTC+3' => 'UTC+3',
            'UTC+3.5' => 'UTC+3:30',
            'UTC+4' => 'UTC+4',
            'UTC+4.5' => 'UTC+4:30',
            'UTC+5' => 'UTC+5',
            'UTC+5.5' => 'UTC+5:30',
            'UTC+5.75' => 'UTC+5:45',
            'UTC+6' => 'UTC+6',
            'UTC+6.5' => 'UTC+6:30',
            'UTC+7' => 'UTC+7',
            'UTC+7.5' => 'UTC+7:30',
            'UTC+8' => 'UTC+8',
            'UTC+8.5' => 'UTC+8:30',
            'UTC+8.75' => 'UTC+8:45',
            'UTC+9' => 'UTC+9',
            'UTC+9.5' => 'UTC+9:30',
            'UTC+10' => 'UTC+10',
            'UTC+10.5' => 'UTC+10:30',
            'UTC+11' => 'UTC+11',
            'UTC+11.5' => 'UTC+11:30',
            'UTC+12' => 'UTC+12',
            'UTC+12.75' => 'UTC+12:45',
            'UTC+13' => 'UTC+13',
            'UTC+13.75' => 'UTC+13:45',
            'UTC+14' => 'UTC+14'
        );
        parent::__construct($label, $name, $options, $properties);
    }

}
