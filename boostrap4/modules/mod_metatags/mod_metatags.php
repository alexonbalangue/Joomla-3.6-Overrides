<?php
/**
 * @package	Module for Joomla!
 * @subpackage  mod_metatags
 * @version	2.4.6
 * @author	AlexonBalangue.me
 * @copyright	(C) 2012-2016 Alexon Balangue. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;
//webutation-site-verification
	$app = JFactory::getApplication();
	$docs = JFactory::getDocument();
	$docs->setGenerator('');//remove generator
		$sitename = $app->getCfg('sitename');
		$site_url = JURI::current();
		$Keyword = $app->getCfg('MetaKeys');
		$newsKeyword = /****$app->getCfg('MetaKeys');***/ $params->get('news-keywords');
		$auteur = $params->get('author-userid-website'); //$app->getCfg('MetaAuthor');
		$desciption = $app->getCfg('MetaDesc');
		
		$language  = $docs->language;
		$site_root = JURI::root();
		$site_base = JURI::base();
		//$site_all = $params->get('protocoles').'://'.$_SERVER['SERVER_NAME'].'/';
		
		$custom_link_jsonjd_search  = $params->get('jsonjd-search');
		$witgetdotcom  = $params->get('witgetdotcom');
		$audiencemeta  = $params->get('audiencemeta');
		$blogcatalogdotcom  = $params->get('blogcatalogdotcom');
		$googlekey  = $params->get('googlekey');
		$Pinterestkey  = $params->get('Pinterestkey');
		$pingdomkey  = $params->get('pingdomkey');
		$rights_standard  = $params->get('rights-standard');
		$startver  = $params->get('startver');
		$yandexkey  = $params->get('yandexkey');
		$bingkey    = $params->get('bingkey');
		$alexakey   = $params->get('alexakey');
		$detectify_verification   = $params->get('detectify-verification');
		$format_detection_SafariiOS   = $params->get('format_detection_SafariiOS');

		$RevisitAfter   = $params->get('Revisit-After');
		$Rating   = $params->get('Rating');
		$Distribution   = $params->get('Distribution');
		$Location   = $params->get('Location');
		$Copyright   = '(c) '.date('Y').' '.$_SERVER['SERVER_NAME'];
		$Publisher   = $params->get('Publisher');
		$DateCreationyyyymmdd   = $params->get('Date-Creation-yyyymmdd');
		$DateRevisionyyyymmdd   = $params->get('Date-Revision-yyyymmdd');
		$Category   = $params->get('Category');
		
		
		$georegion   = $params->get('georegion');
		$geoplacename   = $params->get('geoplacename');
		$geoposition   = $params->get('geoposition');
		$ICBM   = $params->get('ICBM');
		
		
		$robots   = $params->get('robots');
		$CSP   = $params->get('Content-Security-Policy');
		$urlgooglechrome_webapps   = $params->get('urlgooglechrome-webapps');
		$mybitcoin_account   = $params->get('mybitcoin-account');
		$blazerr_ssl   = $params->get('blazerr_ssl');
		
		$wotverification   = $params->get('wot-verification');
		$sefewebnorton   = $params->get('sefeweb-norton');
		$bitly   = $params->get('bitly-verification');
		$okpays   = $params->get('okpays-verification');
		$myblogguestkey = $params->get('myblogguestkey');
		$baidukey = $params->get('baidukey');
		$majestickey = $params->get('majestickey');
		
		$expires   = $params->get('expires');
		$logoimg   = $site_root.$params->get('logoimg');
		$classification   = $params->get('classification-meta');
		$twittercards   = $params->get('choosetwitter_card');
		
		$Tynpush   = $params->get('Tynpush');
		$backlinks_frontendh   = $params->get('backlinks-frontendh');
		$backlinks_frontendf   = $params->get('backlinks-frontendf');
		$jsonLD_type   = $params->get('json-ld-TYPE');
		$jsonLD_custom   = $params->get('schema_custom');
		
		$freewebsubmission_backlinks   = $params->get('freewebsubmission_backlink');
		$addme_backlinks   = $params->get('addme_backlink');
		$sonicrun_backlinks   = $params->get('sonicrun_backlink');
		$addpro_backlinks   = $params->get('addpro_backlink');
		$hypersmash_idsite   = $params->get('hypersmash_idsite');
		$ineedhits_idsite   = $params->get('ineedhits_idsite');
		
		$Twittersite   = $params->get('websitetwitter');
		$TwitterCreate   = $params->get('creatortwitter');
		$TwitterDev  = $params->get('developpertwitter');
		$show_mobile   = $params->get('show_mobile');

		/**For twitter Cards META-Tags**/
		$tw_pix = $site_root.$params->get('photo_twitter');
		$tw_movie = $site_root.$params->get('video_twitter');
		$tw_pix_width = $params->get('photo_twitterwidth');
		$tw_pix_height = $params->get('photo_twitterheight');
		$tw_movie_width = $params->get('video_twitterwidth');
		$tw_movie_height = $params->get('video_twitterheight');
		$langsapps = $params->get('langsapps');
		
		$Twprd_label1 = $params->get('twitterprod_label1');
		$Twprd_label2 = $params->get('twitterprod_label2');
		$Twprd_data1 = $params->get('twitterprod_data1');
		$Twprd_data2 = $params->get('twitterprod_data2');
		
		$Tw_imgsrc0 = $site_root.$params->get('twitterimg_src0');
		$Tw_imgsrc1 = $site_root.$params->get('twitterimg_src1');
		$Tw_imgsrc2 = $site_root.$params->get('twitterimg_src2');
		$Tw_imgsrc3 = $site_root.$params->get('twitterimg_src3');
		$shareaholicsite_idAPI = $params->get('shareaholicsite_idAPI');
		
		/**Facebook/ogp**/
		$ogtypes = $params->get('ogtype');
		$ogpimages = $site_root.$params->get('ogpgraph_img');
		$fbapp_idopgme = $params->get('fbappid');
		$fbapp_admin = $params->get('fbadmins');
		$fb_profils = $params->get('fbprofils_id');
		/**Contact meta**/
		$CoB_Name = $params->get('Co-B_Name');
		$CoB_Organization = $params->get('Co-B_Organization');
		$CoB_StreetAddress = $params->get('Co-B_StreetAddress');
		$CoB_Zipcode = $params->get('Co-B_Zipcode');
		$CoB_City = $params->get('Co-B_City');
		$CoB_Country = $params->get('Co-B_Country');
		$CoB_PhoneNumber = $params->get('Co-B_PhoneNumber');
		$CoB_FaxNumber = $params->get('Co-B_FaxNumber');
		$CoB_NetworkAddress = $params->get('Co-B_NetworkAddress');
		/**autres**/
		$linkstantkey = $params->get('linkstant');
		$googletranslatecustomization = $params->get('googletranslatecustomization');
		$gganalystic = $params->get('analyse-domainname');
		$gganalystic_UA = $params->get('analyse-UA');
		$optimizelyKEYjs = $params->get('optimizelyKEYjs');
		$visualwebsiteoptimizer = $params->get('visualwebsiteoptimizers-idaccount');
		/**Mobile**/
		$logoimg_mobile_startup = $site_root.$params->get('mobile-icons-startup');
		$logoimg_mobile = $site_root.$params->get('mobile-icons-logo');
		$logoimg_mobile72x72 = $site_root.$params->get('mobile-icons-logo72x72');
		$logoimg_mobile114x114 = $site_root.$params->get('mobile-icons-logo114x114');
		$show_mobile_device = $params->get('show_device');
		$myAffiliateDataapps = $params->get('myAffiliateDataapps-APPLE');
		/**Pinned Website windows 7**/
		$JltaskIcons_final = $params->get('pinned7-icons');
		$JltaskNames_1 = $params->get('pinned7-ltaskNames-1');
		$JltaskNames_2 = $params->get('pinned7-ltaskNames-2');
		$JltaskNames_3 = $params->get('pinned7-ltaskNames-3');
		$JltaskNames_4 = $params->get('pinned7-ltaskNames-4');
		$JltaskNames_5 = $params->get('pinned7-ltaskNames-5');
		$JltaskNames_6 = $params->get('pinned7-ltaskNames-6');
		$JltaskNames_7 = $params->get('pinned7-ltaskNames-7');
		$JltaskNames_8 = $params->get('pinned7-ltaskNames-8');
		$JltaskNames_9 = $params->get('pinned7-ltaskNames-9');
		$JltaskPages_1 = $params->get('pinned7-ltaskPages-1');
		$JltaskPages_2 = $params->get('pinned7-ltaskPages-2');
		$JltaskPages_3 = $params->get('pinned7-ltaskPages-3');
		$JltaskPages_4 = $params->get('pinned7-ltaskPages-4');
		$JltaskPages_5 = $params->get('pinned7-ltaskPages-5');
		$JltaskPages_6 = $params->get('pinned7-ltaskPages-6');
		$JltaskPages_7 = $params->get('pinned7-ltaskPages-7');
		$JltaskPages_8 = $params->get('pinned7-ltaskPages-8');
		$JltaskPages_9 = $params->get('pinned7-ltaskPages-9');
		
		/**Pinned Website windows 8**/
		$pinned8_color = $params->get('pinned8-color');
		$pinned8_navbutton_color = $params->get('pinned8-navbutton-color');
		$pinned8_square70x70logo = $site_root.$params->get('pinned8-square70x70logo');
		$pinned8_square150x150logo = $site_root.$params->get('pinned8-square150x150logo');
		$pinned8_square144x144logo = $site_root.$params->get('pinned8-square144x144logo');
		$pinned8_wide310x150logo = $site_root.$params->get('pinned8-wide310x150logo');
		$pinned8_square310x310logo = $site_root.$params->get('pinned8-square310x310logo');
		$pinned8_linksrss = $params->get('pinned8-linksrss');		
		$opensearch_url = $params->get('URL-OpenSearch');		
		$sitemap_url = $params->get('URL-Sitemap');		
		$pinned8_badgebrowser = $params->get('pinned8_badgebrowser');		
		$pinned8_IEconfig = $params->get('pinned8_IEconfig');		
		$doYouHave_AffilateApple = $params->get('doYouHave_AffilateApple');
		$myAccountGoogleplus = $params->get('myAccountGoogleplus');
		$hitparadidsite = $params->get('hitparad-id-site');
		$viglink_idsite = $params->get('viglink_idsite');
		$nospartenaires_backlink = $params->get('nospartenaires_backlink');
		$lxwfr_backlink = $params->get('lxwfr_backlink');
		$plazoo_backlink = $params->get('plazoo_backlink');
		$oobdoo_backlink = $params->get('oobdoo_backlink');
		$quantcast_backlink = $params->get('quantcast_backlink');
		$AddShoppers_backlink = $params->get('AddShoppers_backlink');
		$thumbshots_backlink = $params->get('thumbshots_backlink');
		$activesearchresults_backlink = $params->get('activesearchresults_backlink');
		$APPID_webstoreGoogle = $params->get('APPID_webstoreGoogle');
		$Pingback_url = $params->get('Pingback_url');
		$pagerank_url = $params->get('pagerank_url');
		$hebdotop_idsite = $params->get('hebdotop_idsite');
		
		/**Mesure d'audiance***/
		$num_s_xiti = $params->get('xiti-s');		
		$shareaholicsite_shareablepage = $params->get('shareaholicsite-shareable_page');		
		$shareaholicsite_analytics = $params->get('shareaholicsite-analytics');		
		/**json LD ordganisation***/
		$JsonLD_organisation_legalName = $params->get('JsonLD-organisation-legalName');	
		$JsonLD_organisation_founder = $params->get('JsonLD-organisation-founder');	
		$JsonLD_organisation_foundingDate = $params->get('JsonLD-organisation-foundingDate');	
		$JsonLD_organisation_medialogo = $site_root.$params->get('JsonLD-organisation-medialogo');
		$JsonLD_organisation_fax = $params->get('JsonLD-organisation-fax');	
		$JsonLD_organisation_taxID = $params->get('JsonLD-organisation-taxID');	
		$JsonLD_organisation_vatID = $params->get('JsonLD-organisation-vatID');	
		$JsonLD_organisation_telephone = $params->get('JsonLD-organisation-telephone');	
		$JsonLD_organisation_minValue = $params->get('JsonLD-organisation-minValue');	
		$JsonLD_organisation_maxValue = $params->get('JsonLD-organisation-maxValue');		
		/**json LD person***/
		$JsonLD_person_honorificPrefix = $params->get('JsonLD-person-honorificPrefix');	
		$JsonLD_person_name = $params->get('JsonLD-person-name');	
		$JsonLD_person_mediaimage = $site_root.$params->get('JsonLD-person-mediaimage');	
		$JsonLD_person_birthDate = $params->get('JsonLD-person-birthDate');	
		$JsonLD_person_faxNumber = $params->get('JsonLD-person-faxNumber');	
		$JsonLD_person_telephone = $params->get('JsonLD-person-telephone');	
		$JsonLD_person_gender = $params->get('JsonLD-person-gender');	
		/*piwik*/		
		$show_piwik = $params->get('show_piwik');
		$urldomain_piwik_interne = $params->get('url-piwik');
		$idsite_piwik = $params->get('site-id-piwik');
		$setCookieDomain_piwik = $params->get('setCookieDomain-piwik');
		/*Twitter theme*/
		$Twitterwidgettheme  = $params->get('twitterwidgettheme');
		$TwitterWthemelink  = $params->get('twitterwidgetthemelink');
		$TwitterWthemeborder  = $params->get('twitterwidgetthemeborder');
		$Twitterautoload  = $params->get('witterautoload');
		$Twitterdnt  = $params->get('witterdnt');
		$Twittercsp  = $params->get('wittercsp');
		
		
require JModuleHelper::getLayoutPath('mod_metatags', $params->get('layout', 'default'));
