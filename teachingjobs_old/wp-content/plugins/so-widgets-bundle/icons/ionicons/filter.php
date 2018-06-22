<?php

function siteorigin_widgets_icons_ionicons_filter( $icons ){
	return array_merge($icons, array(
		"alert" => '&#xf101;',
		"alert-circled" => '&#xf100;',
		"android-add" => '&#xf2c7;',
		"android-add-circle" => '&#xf359;',
		"android-alarm-clock" => '&#xf35a;',
		"android-alert" => '&#xf35b;',
		"android-apps" => '&#xf35c;',
		"android-archive" => '&#xf2c9;',
		"android-arrow-back" => '&#xf2ca;',
		"android-arrow-down" => '&#xf35d;',
		"android-arrow-dropdown" => '&#xf35f;',
		"android-arrow-dropdown-circle" => '&#xf35e;',
		"android-arrow-dropleft" => '&#xf361;',
		"android-arrow-dropleft-circle" => '&#xf360;',
		"android-arrow-dropright" => '&#xf363;',
		"android-arrow-dropright-circle" => '&#xf362;',
		"android-arrow-dropup" => '&#xf365;',
		"android-arrow-dropup-circle" => '&#xf364;',
		"android-arrow-forward" => '&#xf30f;',
		"android-arrow-up" => '&#xf366;',
		"android-attach" => '&#xf367;',
		"android-bar" => '&#xf368;',
		"android-bicycle" => '&#xf369;',
		"android-boat" => '&#xf36a;',
		"android-bookmark" => '&#xf36b;',
		"android-bulb" => '&#xf36c;',
		"android-bus" => '&#xf36d;',
		"android-calendar" => '&#xf2d1;',
		"android-call" => '&#xf2d2;',
		"android-camera" => '&#xf2d3;',
		"android-cancel" => '&#xf36e;',
		"android-car" => '&#xf36f;',
		"android-cart" => '&#xf370;',
		"android-chat" => '&#xf2d4;',
		"android-checkbox" => '&#xf374;',
		"android-checkbox-blank" => '&#xf371;',
		"android-checkbox-outline" => '&#xf373;',
		"android-checkbox-outline-blank" => '&#xf372;',
		"android-checkmark-circle" => '&#xf375;',
		"android-clipboard" => '&#xf376;',
		"android-close" => '&#xf2d7;',
		"android-cloud" => '&#xf37a;',
		"android-cloud-circle" => '&#xf377;',
		"android-cloud-done" => '&#xf378;',
		"android-cloud-outline" => '&#xf379;',
		"android-color-palette" => '&#xf37b;',
		"android-compass" => '&#xf37c;',
		"android-contact" => '&#xf2d8;',
		"android-contacts" => '&#xf2d9;',
		"android-contract" => '&#xf37d;',
		"android-create" => '&#xf37e;',
		"android-delete" => '&#xf37f;',
		"android-desktop" => '&#xf380;',
		"android-document" => '&#xf381;',
		"android-done" => '&#xf383;',
		"android-done-all" => '&#xf382;',
		"android-download" => '&#xf2dd;',
		"android-drafts" => '&#xf384;',
		"android-exit" => '&#xf385;',
		"android-expand" => '&#xf386;',
		"android-favorite" => '&#xf388;',
		"android-favorite-outline" => '&#xf387;',
		"android-film" => '&#xf389;',
		"android-folder" => '&#xf2e0;',
		"android-folder-open" => '&#xf38a;',
		"android-funnel" => '&#xf38b;',
		"android-globe" => '&#xf38c;',
		"android-hand" => '&#xf2e3;',
		"android-hangout" => '&#xf38d;',
		"android-happy" => '&#xf38e;',
		"android-home" => '&#xf38f;',
		"android-image" => '&#xf2e4;',
		"android-laptop" => '&#xf390;',
		"android-list" => '&#xf391;',
		"android-locate" => '&#xf2e9;',
		"android-lock" => '&#xf392;',
		"android-mail" => '&#xf2eb;',
		"android-map" => '&#xf393;',
		"android-menu" => '&#xf394;',
		"android-microphone" => '&#xf2ec;',
		"android-microphone-off" => '&#xf395;',
		"android-more-horizontal" => '&#xf396;',
		"android-more-vertical" => '&#xf397;',
		"android-navigate" => '&#xf398;',
		"android-notifications" => '&#xf39b;',
		"android-notifications-none" => '&#xf399;',
		"android-notifications-off" => '&#xf39a;',
		"android-open" => '&#xf39c;',
		"android-options" => '&#xf39d;',
		"android-people" => '&#xf39e;',
		"android-person" => '&#xf3a0;',
		"android-person-add" => '&#xf39f;',
		"android-phone-landscape" => '&#xf3a1;',
		"android-phone-portrait" => '&#xf3a2;',
		"android-pin" => '&#xf3a3;',
		"android-plane" => '&#xf3a4;',
		"android-playstore" => '&#xf2f0;',
		"android-print" => '&#xf3a5;',
		"android-radio-button-off" => '&#xf3a6;',
		"android-radio-button-on" => '&#xf3a7;',
		"android-refresh" => '&#xf3a8;',
		"android-remove" => '&#xf2f4;',
		"android-remove-circle" => '&#xf3a9;',
		"android-restaurant" => '&#xf3aa;',
		"android-sad" => '&#xf3ab;',
		"android-search" => '&#xf2f5;',
		"android-send" => '&#xf2f6;',
		"android-settings" => '&#xf2f7;',
		"android-share" => '&#xf2f8;',
		"android-share-alt" => '&#xf3ac;',
		"android-star" => '&#xf2fc;',
		"android-star-half" => '&#xf3ad;',
		"android-star-outline" => '&#xf3ae;',
		"android-stopwatch" => '&#xf2fd;',
		"android-subway" => '&#xf3af;',
		"android-sunny" => '&#xf3b0;',
		"android-sync" => '&#xf3b1;',
		"android-textsms" => '&#xf3b2;',
		"android-time" => '&#xf3b3;',
		"android-train" => '&#xf3b4;',
		"android-unlock" => '&#xf3b5;',
		"android-upload" => '&#xf3b6;',
		"android-volume-down" => '&#xf3b7;',
		"android-volume-mute" => '&#xf3b8;',
		"android-volume-off" => '&#xf3b9;',
		"android-volume-up" => '&#xf3ba;',
		"android-walk" => '&#xf3bb;',
		"android-warning" => '&#xf3bc;',
		"android-watch" => '&#xf3bd;',
		"android-wifi" => '&#xf305;',
		"aperture" => '&#xf313;',
		"archive" => '&#xf102;',
		"arrow-down-a" => '&#xf103;',
		"arrow-down-b" => '&#xf104;',
		"arrow-down-c" => '&#xf105;',
		"arrow-expand" => '&#xf25e;',
		"arrow-graph-down-left" => '&#xf25f;',
		"arrow-graph-down-right" => '&#xf260;',
		"arrow-graph-up-left" => '&#xf261;',
		"arrow-graph-up-right" => '&#xf262;',
		"arrow-left-a" => '&#xf106;',
		"arrow-left-b" => '&#xf107;',
		"arrow-left-c" => '&#xf108;',
		"arrow-move" => '&#xf263;',
		"arrow-resize" => '&#xf264;',
		"arrow-return-left" => '&#xf265;',
		"arrow-return-right" => '&#xf266;',
		"arrow-right-a" => '&#xf109;',
		"arrow-right-b" => '&#xf10a;',
		"arrow-right-c" => '&#xf10b;',
		"arrow-shrink" => '&#xf267;',
		"arrow-swap" => '&#xf268;',
		"arrow-up-a" => '&#xf10c;',
		"arrow-up-b" => '&#xf10d;',
		"arrow-up-c" => '&#xf10e;',
		"asterisk" => '&#xf314;',
		"at" => '&#xf10f;',
		"backspace" => '&#xf3bf;',
		"backspace-outline" => '&#xf3be;',
		"bag" => '&#xf110;',
		"battery-charging" => '&#xf111;',
		"battery-empty" => '&#xf112;',
		"battery-full" => '&#xf113;',
		"battery-half" => '&#xf114;',
		"battery-low" => '&#xf115;',
		"beaker" => '&#xf269;',
		"beer" => '&#xf26a;',
		"bluetooth" => '&#xf116;',
		"bonfire" => '&#xf315;',
		"bookmark" => '&#xf26b;',
		"bowtie" => '&#xf3c0;',
		"briefcase" => '&#xf26c;',
		"bug" => '&#xf2be;',
		"calculator" => '&#xf26d;',
		"calendar" => '&#xf117;',
		"camera" => '&#xf118;',
		"card" => '&#xf119;',
		"cash" => '&#xf316;',
		"chatbox" => '&#xf11b;',
		"chatbox-working" => '&#xf11a;',
		"chatboxes" => '&#xf11c;',
		"chatbubble" => '&#xf11e;',
		"chatbubble-working" => '&#xf11d;',
		"chatbubbles" => '&#xf11f;',
		"checkmark" => '&#xf122;',
		"checkmark-circled" => '&#xf120;',
		"checkmark-round" => '&#xf121;',
		"chevron-down" => '&#xf123;',
		"chevron-left" => '&#xf124;',
		"chevron-right" => '&#xf125;',
		"chevron-up" => '&#xf126;',
		"clipboard" => '&#xf127;',
		"clock" => '&#xf26e;',
		"close" => '&#xf12a;',
		"close-circled" => '&#xf128;',
		"close-round" => '&#xf129;',
		"closed-captioning" => '&#xf317;',
		"cloud" => '&#xf12b;',
		"code" => '&#xf271;',
		"code-download" => '&#xf26f;',
		"code-working" => '&#xf270;',
		"coffee" => '&#xf272;',
		"compass" => '&#xf273;',
		"compose" => '&#xf12c;',
		"connection-bars" => '&#xf274;',
		"contrast" => '&#xf275;',
		"crop" => '&#xf3c1;',
		"cube" => '&#xf318;',
		"disc" => '&#xf12d;',
		"document" => '&#xf12f;',
		"document-text" => '&#xf12e;',
		"drag" => '&#xf130;',
		"earth" => '&#xf276;',
		"easel" => '&#xf3c2;',
		"edit" => '&#xf2bf;',
		"egg" => '&#xf277;',
		"eject" => '&#xf131;',
		"email" => '&#xf132;',
		"email-unread" => '&#xf3c3;',
		"erlenmeyer-flask" => '&#xf3c5;',
		"erlenmeyer-flask-bubbles" => '&#xf3c4;',
		"eye" => '&#xf133;',
		"eye-disabled" => '&#xf306;',
		"female" => '&#xf278;',
		"filing" => '&#xf134;',
		"film-marker" => '&#xf135;',
		"fireball" => '&#xf319;',
		"flag" => '&#xf279;',
		"flame" => '&#xf31a;',
		"flash" => '&#xf137;',
		"flash-off" => '&#xf136;',
		"folder" => '&#xf139;',
		"fork" => '&#xf27a;',
		"fork-repo" => '&#xf2c0;',
		"forward" => '&#xf13a;',
		"funnel" => '&#xf31b;',
		"gear-a" => '&#xf13d;',
		"gear-b" => '&#xf13e;',
		"grid" => '&#xf13f;',
		"hammer" => '&#xf27b;',
		"happy" => '&#xf31c;',
		"happy-outline" => '&#xf3c6;',
		"headphone" => '&#xf140;',
		"heart" => '&#xf141;',
		"heart-broken" => '&#xf31d;',
		"help" => '&#xf143;',
		"help-buoy" => '&#xf27c;',
		"help-circled" => '&#xf142;',
		"home" => '&#xf144;',
		"icecream" => '&#xf27d;',
		"image" => '&#xf147;',
		"images" => '&#xf148;',
		"information" => '&#xf14a;',
		"information-circled" => '&#xf149;',
		"ionic" => '&#xf14b;',
		"ios-alarm" => '&#xf3c8;',
		"ios-alarm-outline" => '&#xf3c7;',
		"ios-albums" => '&#xf3ca;',
		"ios-albums-outline" => '&#xf3c9;',
		"ios-americanfootball" => '&#xf3cc;',
		"ios-americanfootball-outline" => '&#xf3cb;',
		"ios-analytics" => '&#xf3ce;',
		"ios-analytics-outline" => '&#xf3cd;',
		"ios-arrow-back" => '&#xf3cf;',
		"ios-arrow-down" => '&#xf3d0;',
		"ios-arrow-forward" => '&#xf3d1;',
		"ios-arrow-left" => '&#xf3d2;',
		"ios-arrow-right" => '&#xf3d3;',
		"ios-arrow-thin-down" => '&#xf3d4;',
		"ios-arrow-thin-left" => '&#xf3d5;',
		"ios-arrow-thin-right" => '&#xf3d6;',
		"ios-arrow-thin-up" => '&#xf3d7;',
		"ios-arrow-up" => '&#xf3d8;',
		"ios-at" => '&#xf3da;',
		"ios-at-outline" => '&#xf3d9;',
		"ios-barcode" => '&#xf3dc;',
		"ios-barcode-outline" => '&#xf3db;',
		"ios-baseball" => '&#xf3de;',
		"ios-baseball-outline" => '&#xf3dd;',
		"ios-basketball" => '&#xf3e0;',
		"ios-basketball-outline" => '&#xf3df;',
		"ios-bell" => '&#xf3e2;',
		"ios-bell-outline" => '&#xf3e1;',
		"ios-body" => '&#xf3e4;',
		"ios-body-outline" => '&#xf3e3;',
		"ios-bolt" => '&#xf3e6;',
		"ios-bolt-outline" => '&#xf3e5;',
		"ios-book" => '&#xf3e8;',
		"ios-book-outline" => '&#xf3e7;',
		"ios-bookmarks" => '&#xf3ea;',
		"ios-bookmarks-outline" => '&#xf3e9;',
		"ios-box" => '&#xf3ec;',
		"ios-box-outline" => '&#xf3eb;',
		"ios-briefcase" => '&#xf3ee;',
		"ios-briefcase-outline" => '&#xf3ed;',
		"ios-browsers" => '&#xf3f0;',
		"ios-browsers-outline" => '&#xf3ef;',
		"ios-calculator" => '&#xf3f2;',
		"ios-calculator-outline" => '&#xf3f1;',
		"ios-calendar" => '&#xf3f4;',
		"ios-calendar-outline" => '&#xf3f3;',
		"ios-camera" => '&#xf3f6;',
		"ios-camera-outline" => '&#xf3f5;',
		"ios-cart" => '&#xf3f8;',
		"ios-cart-outline" => '&#xf3f7;',
		"ios-chatboxes" => '&#xf3fa;',
		"ios-chatboxes-outline" => '&#xf3f9;',
		"ios-chatbubble" => '&#xf3fc;',
		"ios-chatbubble-outline" => '&#xf3fb;',
		"ios-checkmark" => '&#xf3ff;',
		"ios-checkmark-empty" => '&#xf3fd;',
		"ios-checkmark-outline" => '&#xf3fe;',
		"ios-circle-filled" => '&#xf400;',
		"ios-circle-outline" => '&#xf401;',
		"ios-clock" => '&#xf403;',
		"ios-clock-outline" => '&#xf402;',
		"ios-close" => '&#xf406;',
		"ios-close-empty" => '&#xf404;',
		"ios-close-outline" => '&#xf405;',
		"ios-cloud" => '&#xf40c;',
		"ios-cloud-download" => '&#xf408;',
		"ios-cloud-download-outline" => '&#xf407;',
		"ios-cloud-outline" => '&#xf409;',
		"ios-cloud-upload" => '&#xf40b;',
		"ios-cloud-upload-outline" => '&#xf40a;',
		"ios-cloudy" => '&#xf410;',
		"ios-cloudy-night" => '&#xf40e;',
		"ios-cloudy-night-outline" => '&#xf40d;',
		"ios-cloudy-outline" => '&#xf40f;',
		"ios-cog" => '&#xf412;',
		"ios-cog-outline" => '&#xf411;',
		"ios-color-filter" => '&#xf414;',
		"ios-color-filter-outline" => '&#xf413;',
		"ios-color-wand" => '&#xf416;',
		"ios-color-wand-outline" => '&#xf415;',
		"ios-compose" => '&#xf418;',
		"ios-compose-outline" => '&#xf417;',
		"ios-contact" => '&#xf41a;',
		"ios-contact-outline" => '&#xf419;',
		"ios-copy" => '&#xf41c;',
		"ios-copy-outline" => '&#xf41b;',
		"ios-crop" => '&#xf41e;',
		"ios-crop-strong" => '&#xf41d;',
		"ios-download" => '&#xf420;',
		"ios-download-outline" => '&#xf41f;',
		"ios-drag" => '&#xf421;',
		"ios-email" => '&#xf423;',
		"ios-email-outline" => '&#xf422;',
		"ios-eye" => '&#xf425;',
		"ios-eye-outline" => '&#xf424;',
		"ios-fastforward" => '&#xf427;',
		"ios-fastforward-outline" => '&#xf426;',
		"ios-filing" => '&#xf429;',
		"ios-filing-outline" => '&#xf428;',
		"ios-film" => '&#xf42b;',
		"ios-film-outline" => '&#xf42a;',
		"ios-flag" => '&#xf42d;',
		"ios-flag-outline" => '&#xf42c;',
		"ios-flame" => '&#xf42f;',
		"ios-flame-outline" => '&#xf42e;',
		"ios-flask" => '&#xf431;',
		"ios-flask-outline" => '&#xf430;',
		"ios-flower" => '&#xf433;',
		"ios-flower-outline" => '&#xf432;',
		"ios-folder" => '&#xf435;',
		"ios-folder-outline" => '&#xf434;',
		"ios-football" => '&#xf437;',
		"ios-football-outline" => '&#xf436;',
		"ios-game-controller-a" => '&#xf439;',
		"ios-game-controller-a-outline" => '&#xf438;',
		"ios-game-controller-b" => '&#xf43b;',
		"ios-game-controller-b-outline" => '&#xf43a;',
		"ios-gear" => '&#xf43d;',
		"ios-gear-outline" => '&#xf43c;',
		"ios-glasses" => '&#xf43f;',
		"ios-glasses-outline" => '&#xf43e;',
		"ios-grid-view" => '&#xf441;',
		"ios-grid-view-outline" => '&#xf440;',
		"ios-heart" => '&#xf443;',
		"ios-heart-outline" => '&#xf442;',
		"ios-help" => '&#xf446;',
		"ios-help-empty" => '&#xf444;',
		"ios-help-outline" => '&#xf445;',
		"ios-home" => '&#xf448;',
		"ios-home-outline" => '&#xf447;',
		"ios-infinite" => '&#xf44a;',
		"ios-infinite-outline" => '&#xf449;',
		"ios-information" => '&#xf44d;',
		"ios-information-empty" => '&#xf44b;',
		"ios-information-outline" => '&#xf44c;',
		"ios-ionic-outline" => '&#xf44e;',
		"ios-keypad" => '&#xf450;',
		"ios-keypad-outline" => '&#xf44f;',
		"ios-lightbulb" => '&#xf452;',
		"ios-lightbulb-outline" => '&#xf451;',
		"ios-list" => '&#xf454;',
		"ios-list-outline" => '&#xf453;',
		"ios-location" => '&#xf456;',
		"ios-location-outline" => '&#xf455;',
		"ios-locked" => '&#xf458;',
		"ios-locked-outline" => '&#xf457;',
		"ios-loop" => '&#xf45a;',
		"ios-loop-strong" => '&#xf459;',
		"ios-medical" => '&#xf45c;',
		"ios-medical-outline" => '&#xf45b;',
		"ios-medkit" => '&#xf45e;',
		"ios-medkit-outline" => '&#xf45d;',
		"ios-mic" => '&#xf461;',
		"ios-mic-off" => '&#xf45f;',
		"ios-mic-outline" => '&#xf460;',
		"ios-minus" => '&#xf464;',
		"ios-minus-empty" => '&#xf462;',
		"ios-minus-outline" => '&#xf463;',
		"ios-monitor" => '&#xf466;',
		"ios-monitor-outline" => '&#xf465;',
		"ios-moon" => '&#xf468;',
		"ios-moon-outline" => '&#xf467;',
		"ios-more" => '&#xf46a;',
		"ios-more-outline" => '&#xf469;',
		"ios-musical-note" => '&#xf46b;',
		"ios-musical-notes" => '&#xf46c;',
		"ios-navigate" => '&#xf46e;',
		"ios-navigate-outline" => '&#xf46d;',
		"ios-nutrition" => '&#xf470;',
		"ios-nutrition-outline" => '&#xf46f;',
		"ios-paper" => '&#xf472;',
		"ios-paper-outline" => '&#xf471;',
		"ios-paperplane" => '&#xf474;',
		"ios-paperplane-outline" => '&#xf473;',
		"ios-partlysunny" => '&#xf476;',
		"ios-partlysunny-outline" => '&#xf475;',
		"ios-pause" => '&#xf478;',
		"ios-pause-outline" => '&#xf477;',
		"ios-paw" => '&#xf47a;',
		"ios-paw-outline" => '&#xf479;',
		"ios-people" => '&#xf47c;',
		"ios-people-outline" => '&#xf47b;',
		"ios-person" => '&#xf47e;',
		"ios-person-outline" => '&#xf47d;',
		"ios-personadd" => '&#xf480;',
		"ios-personadd-outline" => '&#xf47f;',
		"ios-photos" => '&#xf482;',
		"ios-photos-outline" => '&#xf481;',
		"ios-pie" => '&#xf484;',
		"ios-pie-outline" => '&#xf483;',
		"ios-pint" => '&#xf486;',
		"ios-pint-outline" => '&#xf485;',
		"ios-play" => '&#xf488;',
		"ios-play-outline" => '&#xf487;',
		"ios-plus" => '&#xf48b;',
		"ios-plus-empty" => '&#xf489;',
		"ios-plus-outline" => '&#xf48a;',
		"ios-pricetag" => '&#xf48d;',
		"ios-pricetag-outline" => '&#xf48c;',
		"ios-pricetags" => '&#xf48f;',
		"ios-pricetags-outline" => '&#xf48e;',
		"ios-printer" => '&#xf491;',
		"ios-printer-outline" => '&#xf490;',
		"ios-pulse" => '&#xf493;',
		"ios-pulse-strong" => '&#xf492;',
		"ios-rainy" => '&#xf495;',
		"ios-rainy-outline" => '&#xf494;',
		"ios-recording" => '&#xf497;',
		"ios-recording-outline" => '&#xf496;',
		"ios-redo" => '&#xf499;',
		"ios-redo-outline" => '&#xf498;',
		"ios-refresh" => '&#xf49c;',
		"ios-refresh-empty" => '&#xf49a;',
		"ios-refresh-outline" => '&#xf49b;',
		"ios-reload" => '&#xf49d;',
		"ios-reverse-camera" => '&#xf49f;',
		"ios-reverse-camera-outline" => '&#xf49e;',
		"ios-rewind" => '&#xf4a1;',
		"ios-rewind-outline" => '&#xf4a0;',
		"ios-rose" => '&#xf4a3;',
		"ios-rose-outline" => '&#xf4a2;',
		"ios-search" => '&#xf4a5;',
		"ios-search-strong" => '&#xf4a4;',
		"ios-settings" => '&#xf4a7;',
		"ios-settings-strong" => '&#xf4a6;',
		"ios-shuffle" => '&#xf4a9;',
		"ios-shuffle-strong" => '&#xf4a8;',
		"ios-skipbackward" => '&#xf4ab;',
		"ios-skipbackward-outline" => '&#xf4aa;',
		"ios-skipforward" => '&#xf4ad;',
		"ios-skipforward-outline" => '&#xf4ac;',
		"ios-snowy" => '&#xf4ae;',
		"ios-speedometer" => '&#xf4b0;',
		"ios-speedometer-outline" => '&#xf4af;',
		"ios-star" => '&#xf4b3;',
		"ios-star-half" => '&#xf4b1;',
		"ios-star-outline" => '&#xf4b2;',
		"ios-stopwatch" => '&#xf4b5;',
		"ios-stopwatch-outline" => '&#xf4b4;',
		"ios-sunny" => '&#xf4b7;',
		"ios-sunny-outline" => '&#xf4b6;',
		"ios-telephone" => '&#xf4b9;',
		"ios-telephone-outline" => '&#xf4b8;',
		"ios-tennisball" => '&#xf4bb;',
		"ios-tennisball-outline" => '&#xf4ba;',
		"ios-thunderstorm" => '&#xf4bd;',
		"ios-thunderstorm-outline" => '&#xf4bc;',
		"ios-time" => '&#xf4bf;',
		"ios-time-outline" => '&#xf4be;',
		"ios-timer" => '&#xf4c1;',
		"ios-timer-outline" => '&#xf4c0;',
		"ios-toggle" => '&#xf4c3;',
		"ios-toggle-outline" => '&#xf4c2;',
		"ios-trash" => '&#xf4c5;',
		"ios-trash-outline" => '&#xf4c4;',
		"ios-undo" => '&#xf4c7;',
		"ios-undo-outline" => '&#xf4c6;',
		"ios-unlocked" => '&#xf4c9;',
		"ios-unlocked-outline" => '&#xf4c8;',
		"ios-upload" => '&#xf4cb;',
		"ios-upload-outline" => '&#xf4ca;',
		"ios-videocam" => '&#xf4cd;',
		"ios-videocam-outline" => '&#xf4cc;',
		"ios-volume-high" => '&#xf4ce;',
		"ios-volume-low" => '&#xf4cf;',
		"ios-wineglass" => '&#xf4d1;',
		"ios-wineglass-outline" => '&#xf4d0;',
		"ios-world" => '&#xf4d3;',
		"ios-world-outline" => '&#xf4d2;',
		"ipad" => '&#xf1f9;',
		"iphone" => '&#xf1fa;',
		"ipod" => '&#xf1fb;',
		"jet" => '&#xf295;',
		"key" => '&#xf296;',
		"knife" => '&#xf297;',
		"laptop" => '&#xf1fc;',
		"leaf" => '&#xf1fd;',
		"levels" => '&#xf298;',
		"lightbulb" => '&#xf299;',
		"link" => '&#xf1fe;',
		"load-a" => '&#xf29a;',
		"load-b" => '&#xf29b;',
		"load-c" => '&#xf29c;',
		"load-d" => '&#xf29d;',
		"location" => '&#xf1ff;',
		"lock-combination" => '&#xf4d4;',
		"locked" => '&#xf200;',
		"log-in" => '&#xf29e;',
		"log-out" => '&#xf29f;',
		"loop" => '&#xf201;',
		"magnet" => '&#xf2a0;',
		"male" => '&#xf2a1;',
		"man" => '&#xf202;',
		"map" => '&#xf203;',
		"medkit" => '&#xf2a2;',
		"merge" => '&#xf33f;',
		"mic-a" => '&#xf204;',
		"mic-b" => '&#xf205;',
		"mic-c" => '&#xf206;',
		"minus" => '&#xf209;',
		"minus-circled" => '&#xf207;',
		"minus-round" => '&#xf208;',
		"model-s" => '&#xf2c1;',
		"monitor" => '&#xf20a;',
		"more" => '&#xf20b;',
		"mouse" => '&#xf340;',
		"music-note" => '&#xf20c;',
		"navicon" => '&#xf20e;',
		"navicon-round" => '&#xf20d;',
		"navigate" => '&#xf2a3;',
		"network" => '&#xf341;',
		"no-smoking" => '&#xf2c2;',
		"nuclear" => '&#xf2a4;',
		"outlet" => '&#xf342;',
		"paintbrush" => '&#xf4d5;',
		"paintbucket" => '&#xf4d6;',
		"paper-airplane" => '&#xf2c3;',
		"paperclip" => '&#xf20f;',
		"pause" => '&#xf210;',
		"person" => '&#xf213;',
		"person-add" => '&#xf211;',
		"person-stalker" => '&#xf212;',
		"pie-graph" => '&#xf2a5;',
		"pin" => '&#xf2a6;',
		"pinpoint" => '&#xf2a7;',
		"pizza" => '&#xf2a8;',
		"plane" => '&#xf214;',
		"planet" => '&#xf343;',
		"play" => '&#xf215;',
		"playstation" => '&#xf30a;',
		"plus" => '&#xf218;',
		"plus-circled" => '&#xf216;',
		"plus-round" => '&#xf217;',
		"podium" => '&#xf344;',
		"pound" => '&#xf219;',
		"power" => '&#xf2a9;',
		"pricetag" => '&#xf2aa;',
		"pricetags" => '&#xf2ab;',
		"printer" => '&#xf21a;',
		"pull-request" => '&#xf345;',
		"qr-scanner" => '&#xf346;',
		"quote" => '&#xf347;',
		"radio-waves" => '&#xf2ac;',
		"record" => '&#xf21b;',
		"refresh" => '&#xf21c;',
		"reply" => '&#xf21e;',
		"reply-all" => '&#xf21d;',
		"ribbon-a" => '&#xf348;',
		"ribbon-b" => '&#xf349;',
		"sad" => '&#xf34a;',
		"sad-outline" => '&#xf4d7;',
		"scissors" => '&#xf34b;',
		"search" => '&#xf21f;',
		"settings" => '&#xf2ad;',
		"share" => '&#xf220;',
		"shuffle" => '&#xf221;',
		"skip-backward" => '&#xf222;',
		"skip-forward" => '&#xf223;',
		"social-android" => '&#xf225;',
		"social-android-outline" => '&#xf224;',
		"social-angular" => '&#xf4d9;',
		"social-angular-outline" => '&#xf4d8;',
		"social-apple" => '&#xf227;',
		"social-apple-outline" => '&#xf226;',
		"social-bitcoin" => '&#xf2af;',
		"social-bitcoin-outline" => '&#xf2ae;',
		"social-buffer" => '&#xf229;',
		"social-buffer-outline" => '&#xf228;',
		"social-chrome" => '&#xf4db;',
		"social-chrome-outline" => '&#xf4da;',
		"social-codepen" => '&#xf4dd;',
		"social-codepen-outline" => '&#xf4dc;',
		"social-css3" => '&#xf4df;',
		"social-css3-outline" => '&#xf4de;',
		"social-designernews" => '&#xf22b;',
		"social-designernews-outline" => '&#xf22a;',
		"social-dribbble" => '&#xf22d;',
		"social-dribbble-outline" => '&#xf22c;',
		"social-dropbox" => '&#xf22f;',
		"social-dropbox-outline" => '&#xf22e;',
		"social-euro" => '&#xf4e1;',
		"social-euro-outline" => '&#xf4e0;',
		"social-facebook" => '&#xf231;',
		"social-facebook-outline" => '&#xf230;',
		"social-foursquare" => '&#xf34d;',
		"social-foursquare-outline" => '&#xf34c;',
		"social-freebsd-devil" => '&#xf2c4;',
		"social-github" => '&#xf233;',
		"social-github-outline" => '&#xf232;',
		"social-google" => '&#xf34f;',
		"social-google-outline" => '&#xf34e;',
		"social-googleplus" => '&#xf235;',
		"social-googleplus-outline" => '&#xf234;',
		"social-hackernews" => '&#xf237;',
		"social-hackernews-outline" => '&#xf236;',
		"social-html5" => '&#xf4e3;',
		"social-html5-outline" => '&#xf4e2;',
		"social-instagram" => '&#xf351;',
		"social-instagram-outline" => '&#xf350;',
		"social-javascript" => '&#xf4e5;',
		"social-javascript-outline" => '&#xf4e4;',
		"social-linkedin" => '&#xf239;',
		"social-linkedin-outline" => '&#xf238;',
		"social-markdown" => '&#xf4e6;',
		"social-nodejs" => '&#xf4e7;',
		"social-octocat" => '&#xf4e8;',
		"social-pinterest" => '&#xf2b1;',
		"social-pinterest-outline" => '&#xf2b0;',
		"social-python" => '&#xf4e9;',
		"social-reddit" => '&#xf23b;',
		"social-reddit-outline" => '&#xf23a;',
		"social-rss" => '&#xf23d;',
		"social-rss-outline" => '&#xf23c;',
		"social-sass" => '&#xf4ea;',
		"social-skype" => '&#xf23f;',
		"social-skype-outline" => '&#xf23e;',
		"social-snapchat" => '&#xf4ec;',
		"social-snapchat-outline" => '&#xf4eb;',
		"social-tumblr" => '&#xf241;',
		"social-tumblr-outline" => '&#xf240;',
		"social-tux" => '&#xf2c5;',
		"social-twitch" => '&#xf4ee;',
		"social-twitch-outline" => '&#xf4ed;',
		"social-twitter" => '&#xf243;',
		"social-twitter-outline" => '&#xf242;',
		"social-usd" => '&#xf353;',
		"social-usd-outline" => '&#xf352;',
		"social-vimeo" => '&#xf245;',
		"social-vimeo-outline" => '&#xf244;',
		"social-whatsapp" => '&#xf4f0;',
		"social-whatsapp-outline" => '&#xf4ef;',
		"social-windows" => '&#xf247;',
		"social-windows-outline" => '&#xf246;',
		"social-wordpress" => '&#xf249;',
		"social-wordpress-outline" => '&#xf248;',
		"social-yahoo" => '&#xf24b;',
		"social-yahoo-outline" => '&#xf24a;',
		"social-yen" => '&#xf4f2;',
		"social-yen-outline" => '&#xf4f1;',
		"social-youtube" => '&#xf24d;',
		"social-youtube-outline" => '&#xf24c;',
		"soup-can" => '&#xf4f4;',
		"soup-can-outline" => '&#xf4f3;',
		"speakerphone" => '&#xf2b2;',
		"speedometer" => '&#xf2b3;',
		"spoon" => '&#xf2b4;',
		"star" => '&#xf24e;',
		"stats-bars" => '&#xf2b5;',
		"steam" => '&#xf30b;',
		"stop" => '&#xf24f;',
		"thermometer" => '&#xf2b6;',
		"thumbsdown" => '&#xf250;',
		"thumbsup" => '&#xf251;',
		"toggle" => '&#xf355;',
		"toggle-filled" => '&#xf354;',
		"transgender" => '&#xf4f5;',
		"trash-a" => '&#xf252;',
		"trash-b" => '&#xf253;',
		"trophy" => '&#xf356;',
		"tshirt" => '&#xf4f7;',
		"tshirt-outline" => '&#xf4f6;',
		"umbrella" => '&#xf2b7;',
		"university" => '&#xf357;',
		"unlocked" => '&#xf254;',
		"upload" => '&#xf255;',
		"usb" => '&#xf2b8;',
		"videocamera" => '&#xf256;',
		"volume-high" => '&#xf257;',
		"volume-low" => '&#xf258;',
		"volume-medium" => '&#xf259;',
		"volume-mute" => '&#xf25a;',
		"wand" => '&#xf358;',
		"waterdrop" => '&#xf25b;',
		"wifi" => '&#xf25c;',
		"wineglass" => '&#xf2b9;',
		"woman" => '&#xf25d;',
		"wrench" => '&#xf2ba;',
		"xbox" => '&#xf30c;',
	));
}
add_filter('siteorigin_widgets_icons_ionicons', 'siteorigin_widgets_icons_ionicons_filter');
