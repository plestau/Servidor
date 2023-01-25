use paises;

CREATE TABLE `countries` (
  `id` int(11) NOT NULL auto_increment,
  `country` varchar(50) NOT NULL default '',
  `iso2` varchar(2) NOT NULL default '',
  `iso3` varchar(3) NOT NULL default '',
  `noc` varchar(3) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=241 ;

INSERT INTO `countries` (`id`, `country`, `iso2`, `iso3`, `noc`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', 'AFG'),
(2, 'Aland Islands', 'AX', 'ALA', ''),
(3, 'Albania', 'AL', 'ALB', 'ALB'),
(4, 'Algeria', 'DZ', 'DZA', 'ALG'),
(5, 'American Samoa', 'AS', 'ASM', 'ASA'),
(6, 'Andorra', 'AD', 'AND', 'AND'),
(7, 'Angola', 'AO', 'AGO', 'ANG'),
(8, 'Anguilla', 'AI', 'AIA', ''),
(9, 'Antarctica', 'AQ', '', ''),
(10, 'Antigua And Barbuda', 'AG', 'ATG', 'ANT'),
(11, 'Argentina', 'AR', 'ARG', 'ARG'),
(12, 'Armenia', 'AM', 'ARM', 'ARM'),
(13, 'Aruba', 'AW', 'ABW', 'ARU'),
(14, 'Australia', 'AU', 'AUS', 'AUS'),
(15, 'Austria', 'AT', 'AUT', 'AUT'),
(16, 'Azerbaijan', 'AZ', 'AZE', 'AZE'),
(17, 'Bahamas', 'BS', 'BHS', 'BAH'),
(18, 'Bahrain', 'BH', 'BHR', 'BRN'),
(19, 'Bangladesh', 'BD', 'BGD', 'BAN'),
(20, 'Barbados', 'BB', 'BRB', 'BAR'),
(21, 'Belarus', 'BY', 'BLR', 'BLR'),
(22, 'Belgium', 'BE', 'BEL', 'BEL'),
(23, 'Belize', 'BZ', 'BLZ', 'BIZ'),
(24, 'Benin', 'BJ', 'BEN', 'BEN'),
(25, 'Bermuda', 'BM', 'BMU', 'BER'),
(26, 'Bhutan', 'BT', 'BTN', 'BHU'),
(27, 'Bolivia', 'BO', 'BOL', 'BOL'),
(28, 'Bosnia And Herzegowina', 'BA', 'BIH', 'BIH'),
(29, 'Botswana', 'BW', 'BWA', 'BOT'),
(30, 'Bouvet Island', 'BV', '', ''),
(31, 'Brazil', 'BR', 'BRA', 'BRA'),
(32, 'British Indian Ocean Territory', 'IO', '', ''),
(33, 'Brunei Darussalam', 'BN', 'BRN', 'BRU'),
(34, 'Bulgaria', 'BG', 'BGR', 'BUL'),
(35, 'Burkina Faso', 'BF', 'BFA', 'BUR'),
(36, 'Burundi', 'BI', 'BDI', 'BDI'),
(37, 'Cambodia', 'KH', 'KHM', 'CAM'),
(38, 'Cameroon', 'CM', 'CMR', 'CMR'),
(39, 'Canada', 'CA', 'CAN', 'CAN'),
(40, 'Cape Verde', 'CV', 'CPV', 'CPV'),
(41, 'Cayman Islands', 'KY', 'CYM', 'CAY'),
(42, 'Central African Republic', 'CF', 'CAF', 'CAF'),
(43, 'Chad', 'TD', 'TCD', 'CHA'),
(44, 'Chile', 'CL', 'CHL', 'CHI'),
(45, 'China', 'CN', 'CHN', 'CHN'),
(46, 'Christmas Island', 'CX', '', ''),
(47, 'Cocos (Keeling) Islands', 'CC', '', ''),
(48, 'Colombia', 'CO', 'COL', 'COL'),
(49, 'Comoros', 'KM', 'COM', 'COM'),
(50, 'Congo', 'CG', 'COG', 'CGO'),
(51, 'Congo, The Democratic Republic Of The', 'CD', 'COD', 'COD'),
(52, 'Cook Islands', 'CK', 'COK', 'COK'),
(53, 'Costa Rica', 'CR', 'CRI', 'CRC'),
(54, 'Cote D''Ivoire', 'CI', 'CIV', 'CIV'),
(55, 'Croatia', 'HR', 'HRV', 'CRO'),
(56, 'Cuba', 'CU', 'CUB', 'CUB'),
(57, 'Cyprus', 'CY', 'CYP', 'CYP'),
(58, 'Czech Republic', 'CZ', 'CZE', 'CZE'),
(59, 'Denmark', 'DK', 'DNK', 'DEN'),
(60, 'Djibouti', 'DJ', 'DJI', 'DJI'),
(61, 'Dominica', 'DM', 'DMA', 'DMA'),
(62, 'Dominican Republic', 'DO', 'DOM', 'DOM'),
(63, 'Ecuador', 'EC', 'ECU', 'ECU'),
(64, 'Egypt', 'EG', 'EGY', 'EGY'),
(65, 'El Salvador', 'SV', 'SLV', 'ESA'),
(66, 'Equatorial Guinea', 'GQ', 'GNQ', 'GEQ'),
(67, 'Eritrea', 'ER', 'ERI', 'ERI'),
(68, 'Estonia', 'EE', 'EST', 'EST'),
(69, 'Ethiopia', 'ET', 'ETH', 'ETH'),
(70, 'Falkland Islands (Malvinas)', 'FK', 'FLK', ''),
(71, 'Faroe Islands', 'FO', 'FRO', ''),
(72, 'Fiji', 'FJ', 'FJI', 'FIJ'),
(73, 'Finland', 'FI', 'FIN', 'FIN'),
(74, 'France', 'FR', 'FRA', 'FRA'),
(75, 'French Guiana', 'GF', 'GUF', ''),
(76, 'French Polynesia', 'PF', 'PYF', ''),
(77, 'French Southern Territories', 'TF', '', ''),
(78, 'Gabon', 'GA', 'GAB', 'GAB'),
(79, 'Gambia', 'GM', 'GMB', 'GAM'),
(80, 'Georgia', 'GE', 'GEO', 'GEO'),
(81, 'Germany', 'DE', 'DEU', 'GER'),
(82, 'Ghana', 'GH', 'GHA', 'GHA'),
(83, 'Gibraltar', 'GI', 'GIB', ''),
(84, 'Greece', 'GR', 'GRC', 'GRE'),
(85, 'Greenland', 'GL', 'GRL', ''),
(86, 'Grenada', 'GD', 'GRD', 'GRN'),
(87, 'Guadeloupe', 'GP', 'GLP', ''),
(88, 'Guam', 'GU', 'GUM', 'GUM'),
(89, 'Guatemala', 'GT', 'GTM', 'GUA'),
(90, 'Guinea', 'GN', 'GIN', 'GUI'),
(91, 'Guinea-Bissau', 'GW', 'GNB', 'GBS'),
(92, 'Guyana', 'GY', 'GUY', 'GUY'),
(93, 'Haiti', 'HT', 'HTI', 'HAI'),
(94, 'Heard And Mc Donald Islands', 'HM', '', ''),
(95, 'Holy See (Vatican City State)', 'VA', 'VAT', ''),
(96, 'Honduras', 'HN', 'HND', 'HON'),
(97, 'Hong Kong', 'HK', 'HKG', 'HKG'),
(98, 'Hungary', 'HU', 'HUN', 'HUN'),
(99, 'Iceland', 'IS', 'ISL', 'ISL'),
(100, 'India', 'IN', 'IND', 'IND'),
(101, 'Indonesia', 'ID', 'IDN', 'INA'),
(102, 'Iran, Islamic Republic Of', 'IR', 'IRN', 'IRI'),
(103, 'Iraq', 'IQ', 'IRQ', 'IRQ'),
(104, 'Ireland', 'IE', 'IRL', 'IRL'),
(105, 'Israel', 'IL', 'ISR', 'ISR'),
(106, 'Italy', 'IT', 'ITA', 'ITA'),
(107, 'Jamaica', 'JM', 'JAM', 'JAM'),
(108, 'Japan', 'JP', 'JPN', 'JPN'),
(109, 'Jordan', 'JO', 'JOR', 'JOR'),
(110, 'Kazakhstan', 'KZ', 'KAZ', 'KAZ'),
(111, 'Kenya', 'KE', 'KEN', 'KEN'),
(112, 'Kiribati', 'KI', 'KIR', 'KIR'),
(113, 'Korea, Democratic People''S Republic Of', 'KP', 'PRK', 'PRK'),
(114, 'Korea, Republic Of', 'KR', 'KOR', 'KOR'),
(115, 'Kuwait', 'KW', 'KWT', 'KUW'),
(116, 'Kyrgyzstan', 'KG', 'KGZ', 'KGZ'),
(117, 'Lao People''S Democratic Republic', 'LA', 'LAO', 'LAO'),
(118, 'Latvia', 'LV', 'LVA', 'LAT'),
(119, 'Lebanon', 'LB', 'LBN', 'LIB'),
(120, 'Lesotho', 'LS', 'LSO', 'LES'),
(121, 'Liberia', 'LR', 'LBR', 'LBR'),
(122, 'Libyan Arab Jamahiriya', 'LY', 'LBY', 'LBA'),
(123, 'Liechtenstein', 'LI', 'LIE', 'LIE'),
(124, 'Lithuania', 'LT', 'LTU', 'LTU'),
(125, 'Luxembourg', 'LU', 'LUX', 'LUX'),
(126, 'Macau', 'MO', 'MAC', ''),
(127, 'Macedonia, The Former Yugoslav Republic Of', 'MK', 'MKD', 'MKD'),
(128, 'Madagascar', 'MG', 'MDG', 'MAD'),
(129, 'Malawi', 'MW', 'MWI', 'MAW'),
(130, 'Malaysia', 'MY', 'MYS', 'MAS'),
(131, 'Maldives', 'MV', 'MDV', 'MDV'),
(132, 'Mali', 'ML', 'MLI', 'MLI'),
(133, 'Malta', 'MT', 'MLT', 'MLT'),
(134, 'Marshall Islands', 'MH', 'MHL', ''),
(135, 'Martinique', 'MQ', 'MTQ', ''),
(136, 'Mauritania', 'MR', 'MRT', 'MTN'),
(137, 'Mauritius', 'MU', 'MUS', 'MRI'),
(138, 'Mayotte', 'YT', 'MYT', ''),
(139, 'Mexico', 'MX', 'MEX', 'MEX'),
(140, 'Micronesia, Federated States Of', 'FM', 'FSM', 'FSM'),
(141, 'Moldova, Republic Of', 'MD', 'MDA', 'MDA'),
(142, 'Monaco', 'MC', 'MCO', 'MON'),
(143, 'Mongolia', 'MN', 'MNG', 'MGL'),
(144, 'Montserrat', 'MS', 'MSR', ''),
(145, 'Morocco', 'MA', 'MAR', 'MAR'),
(146, 'Mozambique', 'MZ', 'MOZ', 'MOZ'),
(147, 'Myanmar', 'MM', 'MMR', 'MYA'),
(148, 'Namibia', 'NA', 'NAM', 'NAM'),
(149, 'Nauru', 'NR', 'NRU', 'NRU'),
(150, 'Nepal', 'NP', 'NPL', 'NEP'),
(151, 'Netherlands', 'NL', 'NLD', 'NED'),
(152, 'Netherlands Antilles', 'AN', 'ANT', 'AHO'),
(153, 'New Caledonia', 'NC', 'NCL', ''),
(154, 'New Zealand', 'NZ', 'NZL', 'NZL'),
(155, 'Nicaragua', 'NI', 'NIC', 'NCA'),
(156, 'Niger', 'NE', 'NER', 'NIG'),
(157, 'Nigeria', 'NG', 'NGA', 'NGR'),
(158, 'Niue', 'NU', 'NIU', ''),
(159, 'Norfolk Island', 'NF', 'NFK', ''),
(160, 'Northern Mariana Islands', 'MP', 'MNP', ''),
(161, 'Norway', 'NO', 'NOR', 'NOR'),
(162, 'Oman', 'OM', 'OMN', 'OMA'),
(163, 'Pakistan', 'PK', 'PAK', 'PAK'),
(164, 'Palau', 'PW', 'PLW', 'PLW'),
(165, 'Palestinian Territory, Occupied', 'PS', 'PSE', 'PLE'),
(166, 'Panama', 'PA', 'PAN', 'PAN'),
(167, 'Papua New Guinea', 'PG', 'PNG', 'PNG'),
(168, 'Paraguay', 'PY', 'PRY', 'PAR'),
(169, 'Peru', 'PE', 'PER', 'PER'),
(170, 'Philippines', 'PH', 'PHL', 'PHI'),
(171, 'Pitcairn', 'PN', 'PCN', ''),
(172, 'Poland', 'PL', 'POL', 'POL'),
(173, 'Portugal', 'PT', 'PRT', 'POR'),
(174, 'Puerto Rico', 'PR', 'PRI', 'PUR'),
(175, 'Qatar', 'QA', 'QAT', 'QAT'),
(176, 'Reunion', 'RE', 'REU', ''),
(177, 'Romania', 'RO', 'ROU', 'ROM'),
(178, 'Russian Federation', 'RU', 'RUS', 'RUS'),
(179, 'Rwanda', 'RW', 'RWA', 'RWA'),
(180, 'Saint Helena', 'SH', 'SHN', ''),
(181, 'Saint Kitts And Nevis', 'KN', 'KNA', 'SKN'),
(182, 'Saint Lucia', 'LC', 'LCA', 'LCA'),
(183, 'Saint Pierre And Miquelon', 'PM', 'SPM', ''),
(184, 'Saint Vincent And The Grenadines', 'VC', 'VCT', 'VIN'),
(185, 'Samoa', 'WS', 'WSM', 'SAM'),
(186, 'San Marino', 'SM', 'SMR', 'SMR'),
(187, 'Sao Tome And Principe', 'ST', 'STP', 'STP'),
(188, 'Saudi Arabia', 'SA', 'SAU', 'KSA'),
(189, 'Senegal', 'SN', 'SEN', 'SEN'),
(190, 'Serbia And Montenegro', 'CS', 'SCG', 'SCG'),
(191, 'Seychelles', 'SC', 'SYC', 'SEY'),
(192, 'Sierra Leone', 'SL', 'SLE', 'SLE'),
(193, 'Singapore', 'SG', 'SGP', 'SIN'),
(194, 'Slovakia', 'SK', 'SVK', 'SVK'),
(195, 'Slovenia', 'SI', 'SVN', 'SLO'),
(196, 'Solomon Islands', 'SB', 'SLB', 'SOL'),
(197, 'Somalia', 'SO', 'SOM', 'SOM'),
(198, 'South Africa', 'ZA', 'ZAF', 'RSA'),
(199, 'South Georgia And The South Sandwich Islands', 'GS', '', ''),
(200, 'Spain', 'ES', 'ESP', 'ESP'),
(201, 'Sri Lanka', 'LK', 'LKA', 'SRI'),
(202, 'Sudan', 'SD', 'SDN', 'SUD'),
(203, 'Suriname', 'SR', 'SUR', 'SUR'),
(204, 'Svalbard And Jan Mayen Islands', 'SJ', 'SJM', ''),
(205, 'Swaziland', 'SZ', 'SWZ', 'SWZ'),
(206, 'Sweden', 'SE', 'SWE', 'SWE'),
(207, 'Switzerland', 'CH', 'CHE', 'SUI'),
(208, 'Syrian Arab Republic', 'SY', 'SYR', 'SYR'),
(209, 'Taiwan, Province Of China', 'TW', '', ''),
(210, 'Tajikistan', 'TJ', 'TJK', 'TJK'),
(211, 'Tanzania, United Republic Of', 'TZ', 'TZA', 'TAN'),
(212, 'Thailand', 'TH', 'THA', 'THA'),
(213, 'Timor-Leste', 'TL', 'TLS', 'TLS'),
(214, 'Togo', 'TG', 'TGO', 'TOG'),
(215, 'Tokelau', 'TK', 'TKL', ''),
(216, 'Tonga', 'TO', 'TON', 'TGO'),
(217, 'Trinidad And Tobago', 'TT', 'TTO', 'TRI'),
(218, 'Tunisia', 'TN', 'TUN', 'TUN'),
(219, 'Turkey', 'TR', 'TUR', 'TUR'),
(220, 'Turkmenistan', 'TM', 'TKM', 'TKL'),
(221, 'Turks And Caicos Islands', 'TC', 'TCA', ''),
(222, 'Tuvalu', 'TV', 'TUV', ''),
(223, 'Uganda', 'UG', 'UGA', 'UGA'),
(224, 'Ukraine', 'UA', 'UKR', 'UKR'),
(225, 'United Arab Emirates', 'AE', 'ARE', 'UAE'),
(226, 'United Kingdom', 'GB', 'GBR', 'GBR'),
(227, 'United States', 'US', 'USA', 'USA'),
(228, 'United States Minor Outlying Islands', 'UM', '', ''),
(229, 'Uruguay', 'UY', 'URY', 'URU'),
(230, 'Uzbekistan', 'UZ', 'UZB', 'UZB'),
(231, 'Vanuatu', 'VU', 'VUT', 'VAN'),
(232, 'Venezuela', 'VE', 'VEN', 'VEN'),
(233, 'Viet Nam', 'VN', 'VNM', 'VIE'),
(234, 'Virgin Islands, British', 'VG', 'VGB', 'IVB'),
(235, 'Virgin Islands, U.S.', 'VI', 'VIR', 'ISV'),
(236, 'Wallis And Futuna', 'WF', 'WLF', ''),
(237, 'Western Sahara', 'EH', 'ESH', ''),
(238, 'Yemen', 'YE', 'YEM', 'YEM'),
(239, 'Zambia', 'ZM', 'ZMB', 'ZAM'),
(240, 'Zimbabwe', 'ZW', 'ZWE', 'ZIM');
