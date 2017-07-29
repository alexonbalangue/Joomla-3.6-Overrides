<?php

/**
 * @package	Module for Joomla!
 * @subpackage  mod_metatags
 * @version	2.4.8
 * @author	AlexonBalangue.me
 * @copyright	(C) 2012-2017 Alexon Balangue. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die;

?>

<?php
/*********************[ JSON LD ]************************/
if($jsonLD_type == 'json-ld-person'){
$docs->addScriptDeclaration('{"@context": "http://schema.org","@type": "Person","honorificPrefix": "'.$JsonLD_person_honorificPrefix.'","name": "'.$JsonLD_person_name.'","birthDate": "'.$JsonLD_person_birthDate.'","faxNumber": "'.$JsonLD_person_faxNumber.'","gender": "'.$JsonLD_person_gender.'","telephone": "'.$JsonLD_person_telephone.'","description": "'.$desciption.'","image": "'.$JsonLD_person_mediaimage.'","url": "'.JURI::base().'","address": {"@type": "PostalAddress","streetAddress": "'.$CoB_StreetAddress.'","addressLocality": "'.$CoB_City.'","postalCode": "'.$CoB_Zipcode.'""addressContry": "'.$CoB_Country.'"}}', 'application/ld+json');
}

if($jsonLD_type == 'json-ld-organisation'){
$docs->addScriptDeclaration('{"@context": "http://schema.org", "@type": "Organization", "brand": "'.$sitename.'", "legalName": "'.$JsonLD_organisation_legalName.'", "founder": "'.$JsonLD_organisation_founder.'", "foundingDate": "'.$JsonLD_organisation_foundingDate.'", "logo": "'.$JsonLD_organisation_medialogo.'", "faxNumber": "'.$JsonLD_organisation_fax.'", "taxID": "'.$JsonLD_organisation_taxID.'", "vatID": "'.$JsonLD_organisation_vatID.'", "telephone": "'.$JsonLD_organisation_telephone.'", "description": "'.$desciption.'", "image": "'.$JsonLD_organisation_medialogo.'", "url": "'.JURI::base().'", "address": { "@type": "PostalAddress", "streetAddress": "'.$CoB_StreetAddress.'", "addressLocality": "'.$CoB_City.'", "postalCode": "'.$CoB_Zipcode.'", "addressContry": "'.$CoB_Country.'" }, "numberOfEmployees": { "@type": "QuantitativeValue", "minValue": "'.$JsonLD_organisation_minValue.'", "maxValue": "'.$JsonLD_organisation_maxValue.'" },"openingHoursSpecification": [ { "@type": "OpeningHoursSpecification", "dayOfWeek": [ "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ], "opens": "09:00", "closes": "18:00" }],"contactPoint": [{ "@type": "ContactPoint", "telephone": "'.$JsonLD_organisation_telephone.'", "contactType": "customer service", "contactOption": "TollFree", "areaServed": "FR" },{ "@type": "ContactPoint", "telephone": "'.$JsonLD_organisation_telephone.'", "contactType": "emergency", "contactOption": [ "HearingImpairedSupported", "TollFree" ], "areaServed": "FR" },{ "@type": "ContactPoint", "telephone": "+33699119497", "contactType": "technical support", "contactOption": "TollFree", "areaServed": [  "GB", "FR" ], "availableLanguage": ["English","French"]}]}', 'application/ld+json');}
$docs->addScriptDeclaration('{"@context": "http://schema.org", "@type": "Organization", "brand": "'.$sitename.'", "legalName": "'.$JsonLD_organisation_legalName.'", "founder": "'.$JsonLD_organisation_founder.'", "foundingDate": "'.$JsonLD_organisation_foundingDate.'", "logo": "'.$JsonLD_organisation_medialogo.'", "faxNumber": "'.$JsonLD_organisation_fax.'", "taxID": "'.$JsonLD_organisation_taxID.'", "vatID": "'.$JsonLD_organisation_vatID.'", "telephone": "'.$JsonLD_organisation_telephone.'", "description": "'.$desciption.'", "image": "'.$JsonLD_organisation_medialogo.'", "url": "'.JURI::base().'", "address": { "@type": "PostalAddress","streetAddress": "'.$CoB_StreetAddress.'","addressLocality": "'.$CoB_City.'","postalCode": "'.$CoB_Zipcode.'","addressContry": "'.$CoB_Country.'"},"numberOfEmployees": {"@type": "QuantitativeValue","minValue": "'.$JsonLD_organisation_minValue.'","maxValue": "'.$JsonLD_organisation_maxValue.'"}}', 'application/ld+json');
if($jsonLD_type == 'json-ld-custom'){
	$docs->addScriptDeclaration($jsonLD_custom, 'application/ld+json');
}
if(!empty($custom_link_jsonjd_search)){
	$docs->addScriptDeclaration('{"@context": "http://schema.org","@type": "WebSite", "url": "'.$site_base.'", "potentialAction": {"@type": "SearchAction","target": "'.$custom_link_jsonjd_search.'?q={search_term_string}","query-input": "required name=search_term_string"}}', 'application/ld+json');
}
/*********************[ META-TAGS SEO BASIC/ADVANCE ]************************/
$docs->addCustomTag('<link rel="canonical" href="'.JURI::current().'">'); 
		if(!empty($CSP)){ 
			$docs->setMetaData( 'Content-Security-Policy', $CSP, true ); 
			$docs->setMetaData( 'Content-Security-Policy-Report-Only', $CSP, true ); 
			$docs->setMetaData( 'X-Content-Security-Policy', $CSP, true ); 
			$docs->setMetaData( 'X-Content-Security-Policy-Report-Only', $CSP, true ); 
			$docs->setMetaData( 'X-WebKit-CSP', $CSP, true ); 
			$docs->setMetaData( 'X-WebKit-CSP-Report-Only', $CSP, true ); 
		}
		if(!empty($sitename)){
			$docs->setMetaData('application-name', $sitename);
			$docs->setMetaData('apple-mobile-web-app-title', $sitename);
			$docs->setMetaData('msapplication-tooltip', $sitename);
			$docs->setMetaData('DC.title', $sitename);
			$docs->setMetaData('DC.title.alternative', $sitename);
			$docs->setMetaData('og:title', $sitename);
			$docs->setMetaData('og:site_name', $sitename);
			$docs->setMetaData('wt.ti', $sitename);
			$docs->setMetaData('ZOOMTITLE', $sitename);
			$docs->setMetaData('shareaholic:site_name', $sitename);
		}
		$docs->setMetaData('shareaholic:url', JURI::current());
		$docs->setMetaData('shareaholic:language', $language);
		if(!empty($desciption)){
			$docs->setMetaData('DC.description', $desciption);
			$docs->setMetaData('dcterms.description', $desciption);
			$docs->setMetaData('EssayDirectory', $desciption);
			$docs->setMetaData('fdse-description', $desciption);
			$docs->setMetaData('msapplication-tooltip', $desciption);
			$docs->setMetaData( 'abstract', $desciption );
			$docs->setMetaData( 'collection', $desciption );
		$docs->setMetaData( 'subject', $desciption );
		$docs->setMetaData( 'wt.cg_n', $desciption );
		$docs->setMetaData( 'ZOOMDESCRIPTION', $desciption );
		$docs->setMetaData( 'FSPageDescription', $desciption );
		
		}
		$docs->setMetaData( 'DCS.dcsuri', JURI::current() );
		$docs->setMetaData( 'DC.language', $app->getCfg('language') );
		$docs->setMetaData( 'dcterms.language', $app->getCfg('language') );
		$docs->setMetaData( 'msapplication-starturl', './' );
		$docs->setMetaData( 'msapplication-tooltip', $sitename );
		$docs->setMetaData( 'msapplication-window', 'width=1024;height=768' );
		$docs->setMetaData( 'SKYPE_TOOLBAR', 'SKYPE_TOOLBAR_PARSER_COMPATIBLE' );
		$docs->setMetaData( 'startIndex', JURI::current() );
		if(!empty($Keyword)){
			$docs->setMetaData('DC.subject', $Keyword);
			$docs->setMetaData('fdse-keywords', $Keyword);
			$docs->setMetaData('note', $Keyword );
		}
		if(!empty($newsKeyword)){
			$docs->setMetaData('news_keywords', $newsKeyword );
		}
		
		if(!empty($RevisitAfter)){
			$docs->setMetaData('Revisit-After', $RevisitAfter);
		}
		if(!empty($Rating)){
			$docs->setMetaData('Rating', $Rating);
		}
		if(!empty($rights_standard)){
			$docs->setMetaData('rights-standard', ';'.$rights_standard);
		}
		if(!empty($Distribution)){
			$docs->setMetaData('Distribution', $Distribution);
		}
		if(!empty($Location)){
			$docs->setMetaData('Location', $Location);
		}
		if(!empty($Copyright)){
			$docs->setMetaData('Copyright', $Copyright);
			$docs->setMetaData('DC.rights', $Copyright);
			$docs->setMetaData('DC.dateCopyrighted', date("Y"));
			$docs->setMetaData('dcterms.dateCopyrighted', date("Y"));
		}
		if(!empty($Publisher)){
			$docs->setMetaData('Publisher', $Publisher);
			$docs->setMetaData('DC.publisher', $Publisher);
			$docs->setMetaData('dcterms.publisher', $Publisher);
		}
			$docs->setMetaData('ZOOMWORDS', $Keyword);
		if(!empty($witgetdotcom)){
			$docs->setMetaData('widget', $witgetdotcom);
		}
		if(!empty($blogcatalogdotcom)){
			$docs->setMetaData('blogcatalog', $blogcatalogdotcom);
		}
		if(!empty($audiencemeta)){
			$docs->setMetaData('audience', $audiencemeta);
		}
		$docs->setMetaData('ZOOMPAGEBOOST', '5');
		$docs->setMetaData('FSLanguage', $language);
		if(!empty($DateCreationyyyymmdd)){
			$docs->setMetaData('Date-Creation-yyyymmdd', explode('-', $DateCreationyyyymmdd));
			$docs->setMetaData('DC.created', explode('-', $DateCreationyyyymmdd));
			$docs->setMetaData('dcterms.created ', explode('-', $DateCreationyyyymmdd));
			$docs->setMetaData( 'creation_date', explode('-', $DateCreationyyyymmdd) );
		}
		if(!empty($DateRevisionyyyymmdd)){
			$docs->setMetaData('Date-Revision-yyyymmdd', explode('-', $DateRevisionyyyymmdd));
		}
		if(!empty($Category)){
			$docs->setMetaData('Category', $Category);
		}
		if(!empty($Publisher)){
			$docs->setMetaData('DC.publisher', $Publisher);
		}

		if(!empty($auteur)){
			$docs->setMetaData('author', $auteur);
			$docs->setMetaData('DC.creator', $auteur);
			$docs->setMetaData('creator', $auteur);
			$docs->setMetaData('dcterms.creator', $auteur);
			$docs->setMetaData('dcterms.rightsHolder', $auteur);
			$docs->setMetaData('host-admin', $auteur );		
			$docs->setMetaData('operator', $auteur );
			$docs->setMetaData('FLBlogAuthor', $auteur );
			$docs->setMetaData('shareaholic:article_author_name', $auteur );
			$docs->setMetaData('shareaholic:article_author', $auteur );
			
		}
		$docs->setMetaData('shareaholic:shareable_page', JURI::current() );
		if(!empty($language)){
			$docs->setMetaData('DC.language', $language);
			$docs->setMetaData('gwt:property', 'locale='.$language);
			
		}
		$docs->setMetaData('mobile-agent', 'format=html5; url='.JURI::current());
		if(!empty($expires)){
			$docs->setMetaData('expires', $expires);
			
		}
		if(!empty($classification)){
			switch($classification){
						case "1" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_1')); break;
						case "2" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_2')); break;
						case "3" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_3')); break;
						case "4" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_4')); break;
						case "5" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_5')); break;
						case "6" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_6')); break;
						case "7" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_7')); break;
						case "8" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_8')); break;
						case "9" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_9')); break;
						case "10" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_10')); break;
						case "11" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_11')); break;
						case "12" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_12')); break;
						case "13" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_13')); break;
						case "14" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_14')); break;
						case "15" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_15')); break;
						case "16" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_16')); break;
						case "17" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_17')); break;
						case "18" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_18')); break;
						case "19" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_19')); break;
						case "20" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_20')); break;
						case "21" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_21')); break;
						case "22" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_22')); break;
						case "23" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_23')); break;
						case "24" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_24')); break;
						case "25" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_25')); break;
						case "26" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_26')); break;
						case "27" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_27')); break;
						case "28" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_28')); break;
						case "29" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_29')); break;
						case "30" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_30')); break;
						case "31" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_31')); break;
						case "32" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_32')); break;
						case "33" : $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_33')); break;
			}
			/*****
			 * // Show output number case not this methode
			 * $classification_final = $classification;
			 * $docs->setMetaData('classification', JText::_('JFIELD_MOD_METATAGS_CLASSIFICATION_OPTION_'));
			 * 
			 *****/ 
		}
		if(!empty($startver)){
			$docs->setMetaData('startver', $startver);
			
		}
		if(!empty($shareaholicsite_idAPI)){
			$docs->addCustomTag("<script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='".$shareaholicsite_idAPI."' data-cfasync='false' async='async'></script>");
		}
		$docs->setMetaData('shareaholic:article_visibility', 'private');
		if(!empty($shareaholicsite_shareablepage)){ $docs->setMetaData('shareaholic:shareable_page', $shareaholicsite_shareablepage); }
		if(!empty($shareaholicsite_analytics)){ $docs->setMetaData('shareaholic:analytics', $shareaholicsite_analytics); }
		if(!empty($robots)){
			$docs->setMetaData('robots', $robots);
			$docs->setMetaData('baiduspider', $robots);
			$docs->setMetaData('dse-robots', $robots);
			$docs->setMetaData('googlebot', $robots);
			$docs->setMetaData('googlebot-mobile', $robots);
			$docs->setMetaData('ia_archive', $robots);
			$docs->setMetaData('msnbot', $robots);
			$docs->setMetaData('slurp', $robots);
			$docs->setMetaData('teoma', $robots);
		}	


			$docs->setMetaData('format-print', 'A4');
			$docs->setMetaData('resolutions', '2x, 4x, 8x');

/*********************[ META-TAGS GEO MAP ]************************/
	
		if(!empty($georegion)){ $docs->setMetaData('geo.region', $georegion); }		
		if(!empty($geoplacename)){ $docs->setMetaData('geo.placename', $geoplacename); }	
		if(!empty($geoposition)){ $docs->setMetaData('geo.position', $geoposition); }	
		if(!empty($ICBM)){ $docs->setMetaData('ICBM', $ICBM); }
		if(!empty($language)){ $docs->setMetaData('FSLanguage', $language); }


/*********************[ FACEBOOK/OPENGRAPH OGP.ME ]*******************$logo_tld*****/
		/**Namespace URI: http://ogp.me/ns/website#**/
		$docs->addCustomTag( '<meta property="og:title" content="'.$sitename.'">
			<meta property="og:type" content="'.$ogtypes.'">
			<meta property="og:url" content="'.JURI::current().'">
			<meta property="shareaholic:image" content="'.$ogpimages.'">
			<meta property="og:image" content="'.$ogpimages.'">
			<meta property="og:locale" content="'.$language.'">
			<meta property="og:description" content="'.$desciption.'">
			<meta property="og:site_name" content="'.$sitename.'">
			<meta property="og:admins" content="'.$fbapp_admin.'">
			<meta property="og:app_id" content="'.$fbapp_idopgme.'">
			<meta property="og:profile_id" content="'.$fb_profils.'">
			<meta property="fb:admins" content="'.$fbapp_admin.'">
			<meta property="fb:app_id" content="'.$fbapp_idopgme.'">
			<link rel="search" href="'.JURI::current().'">
			<link rel="image_src" href="'.$logoimg.'">' );
		
/*********************[ META-TAGS Reputation/Security/Bank ]************************/

		if(!empty($bitly)){
			$docs->setMetaData('bitly-verification', $bitly);
		}
			$docs->setMetaData('fdse-index-as', JURI::current());
			$docs->setMetaData('Identifier-URL', JURI::current());
			$docs->setMetaData('msapplication-starturl', JURI::current().'?pinned=true');	

		if(!empty($wotverification)){
			$docs->setMetaData('wot-verification', $wotverification);
		}	

		if(!empty($okpays)){
			$docs->setMetaData('okpay-verification', $okpays);
		}
/*********************[ META-TAGS SEARCH/CRAWL/SPIDER ]************************/

		if(!empty($googlekey)){
			$docs->setMetaData('google-site-verification', $googlekey);
		}	
		if(!empty($Pinterestkey)){
			$docs->setMetaData('p:domain_verify', $Pinterestkey);
		}
		if(!empty($pingdomkey)){
			$docs->setMetaData('pingdom', $pingdomkey);
		}
		if(!empty($yandexkey)){
			$docs->setMetaData('yandex-verification', $yandexkey);
		}	
		if(!empty($bingkey)){
			$docs->setMetaData('msvalidate.01', $bingkey);
		}		
		if(!empty($alexakey)){
			$docs->setMetaData('alexaVerifyID', $alexakey);
		}
		if(!empty($baidukey)){
			$docs->setMetaData('baidu-site-verification', $baidukey);
		}
		if(!empty($majestickey)){
			$docs->setMetaData('majestic-site-verification', $majestickey);
		}
		if(!empty($myblogguestkey)){
			$docs->setMetaData('myblogguest-verification', $myblogguestkey);
		}
		if(!empty($sefewebnorton)){
			$docs->setMetaData('norton-safeweb-site-verification', $sefewebnorton);
		}
		
/*********************[ META-TAGS TWITTER CARD ]************************/
		if(!empty($twittercards)){
			$docs->setMetaData('twitter:card', $twittercards);
		}
		
		if($twittercards == 'summary'){
			
			if(!empty($TwitterDev)){ $docs->addCustomTag('<link rel="me" href="https://twitter.com/'.$TwitterDev.'">'); }
	
		$docs->setMetaData('twitter:widgets:theme', $Twitterwidgettheme);	
		$docs->setMetaData('twitter:widgets:link-color', $TwitterWthemelink);	
		$docs->setMetaData('twitter:widgets:border-color', $TwitterWthemeborder);	
		$docs->setMetaData('twitter:widgets:autoload', $Twitterautoload);	
		$docs->setMetaData('twitter:dnt', $Twitterdnt);	
		$docs->setMetaData('twitter:widgets:csp', $Twittercsp);	
		$docs->setMetaData('twitter:card', $twittercards);
		$docs->setMetaData('twitter:site', '@'.$Twittersite);
		
		$docs->setMetaData('twitter:description', $desciption);
		$docs->setMetaData('twitter:image:src', $tw_pix);
		$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);
				
		if(!empty($nameiphoneapps)){ $docs->setMetaData('twitter:app:name:iphone', $nameiphoneapps); }
		if(!empty($nameipadapps)){ $docs->setMetaData('twitter:app:name:ipad', $nameipadapps); }
		if(!empty($nameandroidapps)){ $docs->setMetaData('twitter:app:name:googleplay', $nameandroidapps); }
		if(!empty($urliphoneapps)){ $docs->setMetaData('twitter:app:url:iphone', $urliphoneapps); }
		if(!empty($urlipadapps)){ $docs->setMetaData('twitter:app:url:ipad', $urlipadapps); }
		if(!empty($urlandroidapps)){ $docs->setMetaData('twitter:app:url:googleplay', $urlandroidapps); }
		if(!empty($idiphoneapps)){ $docs->setMetaData('twitter:app:id:iphone', $idiphoneapps); }
		if(!empty($idipadapps)){ $docs->setMetaData('twitter:app:id:ipad', $idipadapps); }
		if(!empty($idandroidapps)){ $docs->setMetaData('twitter:app:id:googleplay', $idandroidapps); }
		
		}
		if($twittercards == 'summary_large_image'){
			if(!empty($TwitterDev)){ $docs->addCustomTag('<link rel="me" href="https://twitter.com/'.$TwitterDev.'">'); }
	
		$docs->setMetaData('twitter:widgets:theme', $Twitterwidgettheme);	
		$docs->setMetaData('twitter:widgets:link-color', $TwitterWthemelink);	
		$docs->setMetaData('twitter:widgets:border-color', $TwitterWthemeborder);	
		$docs->setMetaData('twitter:widgets:autoload', $Twitterautoload);	
		$docs->setMetaData('twitter:dnt', $Twitterdnt);	
		$docs->setMetaData('twitter:widgets:csp', $Twittercsp);	
	
		$docs->setMetaData('twitter:card', $twittercards);
		$docs->setMetaData('twitter:site', '@'.$Twittersite);
		$docs->setMetaData('twitter:creator', '@'.$TwitterCreate);
		$docs->setMetaData('twitter:title', $sitename);
		$docs->setMetaData('twitter:description', $desciption);
		$docs->setMetaData('twitter:image:src', $tw_pix);
		$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);
		
		if(!empty($nameiphoneapps)){ $docs->setMetaData('twitter:app:name:iphone', $nameiphoneapps); }
		if(!empty($nameipadapps)){ $docs->setMetaData('twitter:app:name:ipad', $nameipadapps); }
		if(!empty($nameandroidapps)){ $docs->setMetaData('twitter:app:name:googleplay', $nameandroidapps); }
		if(!empty($urliphoneapps)){ $docs->setMetaData('twitter:app:url:iphone', $urliphoneapps); }
		if(!empty($urlipadapps)){ $docs->setMetaData('twitter:app:url:ipad', $urlipadapps); }
		if(!empty($urlandroidapps)){ $docs->setMetaData('twitter:app:url:googleplay', $urlandroidapps); }
		if(!empty($idiphoneapps)){ $docs->setMetaData('twitter:app:id:iphone', $idiphoneapps); }
		if(!empty($idipadapps)){ $docs->setMetaData('twitter:app:id:ipad', $idipadapps); }
		if(!empty($idandroidapps)){ $docs->setMetaData('twitter:app:id:googleplay', $idandroidapps); }
		if(!empty($urlgooglechrome_webapps)){ $docs->setMetaData('application-url', $urlgooglechrome_webapps); }
		if(!empty($mybitcoin_account)){ $docs->setMetaData('bitcoin', $mybitcoin_account); }
		if(!empty($detectify_verification)){ $docs->setMetaData('detectify-verification', $detectify_verification); }
		
		if(!empty($blazerr_ssl)){ 
			$docs->setMetaData('blazerr-ssl', $blazerr_ssl);
			$docs->setMetaData('blazerr-secure', $blazerr_ssl); 
		}
		
		}
		if($twittercards == 'product'){
			if(!empty($TwitterDev)){ $docs->addCustomTag('<link rel="me" href="https://twitter.com/'.$TwitterDev.'">'); }
	
		$docs->setMetaData('twitter:widgets:theme', $Twitterwidgettheme);	
		$docs->setMetaData('twitter:widgets:link-color', $TwitterWthemelink);	
		$docs->setMetaData('twitter:widgets:border-color', $TwitterWthemeborder);	
		$docs->setMetaData('twitter:widgets:autoload', $Twitterautoload);	
		$docs->setMetaData('twitter:dnt', $Twitterdnt);	
		$docs->setMetaData('twitter:widgets:csp', $Twittercsp);	
		
		$docs->setMetaData('twitter:card', $twittercards);
		$docs->setMetaData('twitter:site', '@'.$Twittersite);
		$docs->setMetaData('twitter:creator', '@'.$TwitterCreate);
		$docs->setMetaData('twitter:title', $sitename);
		$docs->setMetaData('twitter:description', $desciption);
		$docs->setMetaData('twitter:image:src', $tw_pix);
		$docs->setMetaData('twitter:data1', $Twprd_data1);
		$docs->setMetaData('twitter:label1', $Twprd_label1);
		$docs->setMetaData('twitter:data2', $Twprd_data2);
		$docs->setMetaData('twitter:label2', $Twprd_label2);
		$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);
		
		if(!empty($nameiphoneapps)){ $docs->setMetaData('twitter:app:name:iphone', $nameiphoneapps); }
		if(!empty($nameipadapps)){ $docs->setMetaData('twitter:app:name:ipad', $nameipadapps); }
		if(!empty($nameandroidapps)){ $docs->setMetaData('twitter:app:name:googleplay', $nameandroidapps); }
		if(!empty($urliphoneapps)){ $docs->setMetaData('twitter:app:url:iphone', $urliphoneapps); }
		if(!empty($urlipadapps)){ $docs->setMetaData('twitter:app:url:ipad', $urlipadapps); }
		if(!empty($urlandroidapps)){ $docs->setMetaData('twitter:app:url:googleplay', $urlandroidapps); }
		if(!empty($idiphoneapps)){ $docs->setMetaData('twitter:app:id:iphone', $idiphoneapps); }
		if(!empty($idipadapps)){ $docs->setMetaData('twitter:app:id:ipad', $idipadapps); }
		if(!empty($idandroidapps)){ $docs->setMetaData('twitter:app:id:googleplay', $idandroidapps); }
		
		}
		if($twittercards == 'photo'){
			if(!empty($TwitterDev)){ $docs->addCustomTag('<link rel="me" href="https://twitter.com/'.$TwitterDev.'">'); }
	
		$docs->setMetaData('twitter:widgets:theme', $Twitterwidgettheme);	
		$docs->setMetaData('twitter:widgets:link-color', $TwitterWthemelink);	
		$docs->setMetaData('twitter:widgets:border-color', $TwitterWthemeborder);	
		$docs->setMetaData('twitter:widgets:autoload', $Twitterautoload);	
		$docs->setMetaData('twitter:dnt', $Twitterdnt);	
		$docs->setMetaData('twitter:widgets:csp', $Twittercsp);	
		
		$docs->setMetaData('twitter:card', $twittercards);
		$docs->setMetaData('twitter:site', '@'.$Twittersite);
		$docs->setMetaData('twitter:creator', '@'.$TwitterCreate);
		$docs->setMetaData('twitter:title', $sitename);
		$docs->setMetaData('twitter:image:src', $tw_pix);
		$docs->setMetaData('twitter:image:src:width', $tw_pix_width);
		$docs->setMetaData('twitter:image:src:height', $tw_pix_height);
		$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);
		
		if(!empty($nameiphoneapps)){ $docs->setMetaData('twitter:app:name:iphone', $nameiphoneapps); }
		if(!empty($nameipadapps)){ $docs->setMetaData('twitter:app:name:ipad', $nameipadapps); }
		if(!empty($nameandroidapps)){ $docs->setMetaData('twitter:app:name:googleplay', $nameandroidapps); }
		if(!empty($urliphoneapps)){ $docs->setMetaData('twitter:app:url:iphone', $urliphoneapps); }
		if(!empty($urlipadapps)){ $docs->setMetaData('twitter:app:url:ipad', $urlipadapps); }
		if(!empty($urlandroidapps)){ $docs->setMetaData('twitter:app:url:googleplay', $urlandroidapps); }
		if(!empty($idiphoneapps)){ $docs->setMetaData('twitter:app:id:iphone', $idiphoneapps); }
		if(!empty($idipadapps)){ $docs->setMetaData('twitter:app:id:ipad', $idipadapps); }
		if(!empty($idandroidapps)){ $docs->setMetaData('twitter:app:id:googleplay', $idandroidapps); }
		
		}
		if($twittercards == 'app'){
			if(!empty($TwitterDev)){ $docs->addCustomTag('<link rel="me" href="https://twitter.com/'.$TwitterDev.'">'); }
	
		$docs->setMetaData('twitter:widgets:theme', $Twitterwidgettheme);	
		$docs->setMetaData('twitter:widgets:link-color', $TwitterWthemelink);	
		$docs->setMetaData('twitter:widgets:border-color', $TwitterWthemeborder);	
		$docs->setMetaData('twitter:widgets:autoload', $Twitterautoload);	
		$docs->setMetaData('twitter:dnt', $Twitterdnt);	
		$docs->setMetaData('twitter:widgets:csp', $Twittercsp);	
	
		$docs->setMetaData('twitter:card', $twittercards);
		$docs->setMetaData('twitter:site', '@'.$Twittersite);
		$docs->setMetaData('twitter:creator', '@'.$TwitterCreate);
		$docs->setMetaData('twitter:description', $desciption);
		$docs->setMetaData('twitter:app:id:iphone', $idiphoneapps);
		$docs->setMetaData('twitter:app:id:ipad', $idipadapps);
		$docs->setMetaData('twitter:app:id:googleplay', $idandroidapps);
		$docs->setMetaData('twitter:app:country', $langsapps);
		$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);
		}
		if($twittercards == 'gallery'){
			if(!empty($TwitterDev)){ $docs->addCustomTag('<link rel="me" href="https://twitter.com/'.$TwitterDev.'">'); }
	
		$docs->setMetaData('twitter:widgets:theme', $Twitterwidgettheme);	
		$docs->setMetaData('twitter:widgets:link-color', $TwitterWthemelink);	
		$docs->setMetaData('twitter:widgets:border-color', $TwitterWthemeborder);	
		$docs->setMetaData('twitter:widgets:autoload', $Twitterautoload);	
		$docs->setMetaData('twitter:dnt', $Twitterdnt);	
		$docs->setMetaData('twitter:widgets:csp', $Twittercsp);	
	
		$docs->setMetaData('twitter:card', $twittercards);
		$docs->setMetaData('twitter:site', '@'.$Twittersite);
		$docs->setMetaData('twitter:creator', '@'.$TwitterCreate);
		$docs->setMetaData('twitter:title', $sitename);
		$docs->setMetaData('twitter:description', $desciption);
		$docs->setMetaData('twitter:image0:src', $Tw_imgsrc0);
		$docs->setMetaData('twitter:image1:src', $Tw_imgsrc1);
		$docs->setMetaData('twitter:image2:src', $Tw_imgsrc2);
		$docs->setMetaData('twitter:image3:src', $Tw_imgsrc3);
		$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);
		
		if(!empty($nameiphoneapps)){ $docs->setMetaData('twitter:app:name:iphone', $nameiphoneapps); }
		if(!empty($nameipadapps)){ $docs->setMetaData('twitter:app:name:ipad', $nameipadapps); }
		if(!empty($nameandroidapps)){ $docs->setMetaData('twitter:app:name:googleplay', $nameandroidapps); }
		if(!empty($urliphoneapps)){ $docs->setMetaData('twitter:app:url:iphone', $urliphoneapps); }
		if(!empty($urlipadapps)){ $docs->setMetaData('twitter:app:url:ipad', $urlipadapps); }
		if(!empty($urlandroidapps)){ $docs->setMetaData('twitter:app:url:googleplay', $urlandroidapps); }
		if(!empty($idiphoneapps)){ $docs->setMetaData('twitter:app:id:iphone', $idiphoneapps); }
		if(!empty($idipadapps)){ $docs->setMetaData('twitter:app:id:ipad', $idipadapps); }
		if(!empty($idandroidapps)){ $docs->setMetaData('twitter:app:id:googleplay', $idandroidapps); }
		
		}
		if($twittercards == 'player'){
			if(!empty($TwitterDev)){ $docs->addCustomTag('<link rel="me" href="https://twitter.com/'.$TwitterDev.'">'); }
	
		$docs->setMetaData('twitter:widgets:theme', $Twitterwidgettheme);	
		$docs->setMetaData('twitter:widgets:link-color', $TwitterWthemelink);	
		$docs->setMetaData('twitter:widgets:border-color', $TwitterWthemeborder);	
		$docs->setMetaData('twitter:widgets:autoload', $Twitterautoload);	
		$docs->setMetaData('twitter:dnt', $Twitterdnt);	
		$docs->setMetaData('twitter:widgets:csp', $Twittercsp);	
		
		$docs->setMetaData('twitter:card', $twittercards);	
		$docs->setMetaData('twitter:site', '@'.$Twittersite);
		$docs->setMetaData('twitter:creator', '@'.$TwitterCreate);
		$docs->setMetaData('twitter:title', $sitename);
		$docs->setMetaData('twitter:description', $desciption);
		$docs->setMetaData('twitter:image:src', $tw_pix);
		$docs->setMetaData('twitter:player', $tw_movie);
		$docs->setMetaData('twitter:player:width', $tw_movie_width);
		$docs->setMetaData('witter:player:height', $tw_movie_height);
		$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);
		
		if(!empty($nameiphoneapps)){ $docs->setMetaData('twitter:app:name:iphone', $nameiphoneapps); }
		if(!empty($nameipadapps)){ $docs->setMetaData('twitter:app:name:ipad', $nameipadapps); }
		if(!empty($nameandroidapps)){ $docs->setMetaData('twitter:app:name:googleplay', $nameandroidapps); }
		if(!empty($urliphoneapps)){ $docs->setMetaData('twitter:app:url:iphone', $urliphoneapps); }
		if(!empty($urlipadapps)){ $docs->setMetaData('twitter:app:url:ipad', $urlipadapps); }
		if(!empty($urlandroidapps)){ $docs->setMetaData('twitter:app:url:googleplay', $urlandroidapps); }
		if(!empty($idiphoneapps)){ $docs->setMetaData('twitter:app:id:iphone', $idiphoneapps); }
		if(!empty($idipadapps)){ $docs->setMetaData('twitter:app:id:ipad', $idipadapps); }
		if(!empty($idandroidapps)){ $docs->setMetaData('twitter:app:id:googleplay', $idandroidapps); }
		
		}

/*********************[ Tynt How Copy/Past your website? ]************************/
		if(!empty($Tynpush)){
			$docs->addCustomTag( '<script type="text/javascript">if(document.location.protocol==\'http:\'){ var Tynt=Tynt||[];Tynt.push(\''.$Tynpush.'\'); (function(){var s=document.createElement(\'script\');s.async="async";s.type="text/javascript";s.src=\'http://tcr.tynt.com/ti.js\';var h=document.getElementsByTagName(\'script\')[0];h.parentNode.insertBefore(s,h);})();}</script>' );

		}
/*********************[ AUTRES/LINK ]************************/

$docs->addCustomTag( '<link rel="meta" type="application/rdf+xml" href="'.JURI::base().'dublincore.rdf">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="profile" href="http://dublincore.org/documents/2008/08/04/dc-html/">
<link type="text/plain" rel="author" href="'.JURI::base().'humans.txt">
<meta prefix="fb: http://ogp.me/ns/fb#" property="fb:app_id" content="'.$fbapp_idopgme.'">' );


/*********************[ AUTRES  ]************************/
//JVersion::getShortVersion()
$jversion = new JVersion();
if( version_compare( $jversion->getShortVersion(), '3.1', 'ge' ) ):
   $jversion_out = '3.7';
else:
   $jversion_out = '2.5';
endif;
$docs->setMetaData('shareaholic:joomla_version', $jversion_out);
		$docs->setMetaData('MSSmartTagsPreventParsing', 'true');
		//$docs->setMetaData( 'X-UA-Compatible', 'IE=edge,chrome=1', true ); Seo not validate
		$docs->setMetaData( 'web_author', $auteur);
		$docs->setMetaData( 'MSThemeCompatible', 'yes' );
		$docs->setMetaData( 'presdate', date("m-d-Y") );
		$docs->setMetaData( 'host', $_SERVER['SERVER_NAME'] );		
		$docs->setMetaData( 'linkage', JURI::base() );			
		$docs->setMetaData( 'msapplication-tap-highlight', 'yes' );	
		$docs->setMetaData( 'DP.PopRank', '2.00000' );	
		$docs->setMetaData( 'msapplication-window', 'width=250;height=250' );	
/*********************[ AUTRES / Contact Business or Individual  ]************************/
		if(!empty($CoB_Name)){ $docs->setMetaData( 'contactName', $CoB_Name ); }
		if(!empty($CoB_Organization)){ $docs->setMetaData( 'contactOrganization', $CoB_Organization ); }
		if(!empty($CoB_StreetAddress)){ $docs->setMetaData( 'contactStreetAddress1', $CoB_StreetAddress ); }
		if(!empty($CoB_Zipcode)){ $docs->setMetaData( 'contactZipcode', $CoB_Zipcode ); }
		if(!empty($CoB_City)){ $docs->setMetaData( 'contactCity', $CoB_City ); }
		if(!empty($CoB_Country)){ $docs->setMetaData( 'contactCountry', $CoB_Country ); }
		if(!empty($CoB_PhoneNumber)){ $docs->setMetaData( 'contactPhoneNumber', $CoB_PhoneNumber ); }
		if(!empty($CoB_FaxNumber)){ $docs->setMetaData( 'contactFaxNumber', $CoB_FaxNumber ); }
		if(!empty($CoB_NetworkAddress)){ $docs->setMetaData( 'contactNetworkAddress', $CoB_NetworkAddress ); }
		if(!empty($format_detection_SafariiOS)){ $docs->setMetaData( 'format-detection', 'telephone='.$format_detection_SafariiOS ); }
		$docs->setMetaData( 'contact', $CoB_PhoneNumber.' '.$CoB_NetworkAddress.' \''.$CoB_StreetAddress.', '.$CoB_City.', '.$CoB_Country.'\'' );
		$docs->setMetaData( 'fragment', '!' );

		

/*********************[ AUTRES Traduction ]************************/
		if(!empty($googletranslatecustomization)){
			$docs->addCustomTag('<meta name="google-translate-customization" content="'.$googletranslatecustomization.'">' );
		}

/*********************[ AUTRES analystic ]************************/

if(!empty($gganalystic_UA)){ 
	$docs->addCustomTag('<script>{function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\'); ga(\'create\', \''.$gganalystic_UA.'\', \''.$gganalystic.'\'); ga(\'send\', \'pageview\');</script>	<link rel="shortlink" href="'.JURI::base().'">'); 
}


if(!empty($optimizelyKEYjs)){ $docs->addCustomTag('<script src="//cdn.optimizely.com/js/'.$optimizelyKEYjs.'.js"></script>'); }

if(!empty($visualwebsiteoptimizer)){ $docs->addCustomTag('<script type=\'text/javascript\'>var _vwo_code=(function(){var account_id='.$visualwebsiteoptimizer.',settings_tolerance=2000,library_tolerance=2500,use_existing_jquery=false,f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById(\'_vis_opt_path_hides\');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement(\'script\');b.src=a;b.type=\'text/javascript\';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName(\'head\')[0].appendChild(b);},init:function(){settings_timer=setTimeout(\'_vwo_code.finish()\',settings_tolerance);this.load(\'//dev.visualwebsiteoptimizer.com/j.php?a=\'+account_id+\'&amp;u=\'+encodeURIComponent(d.URL)+\'&amp;r=\'+Math.random());var a=d.createElement(\'style\'),b=\'body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}\',h=d.getElementsByTagName(\'head\')[0];a.setAttribute(\'id\',\'_vis_opt_path_hides\');a.setAttribute(\'type\',\'text/css\');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();</script>');
}
//PIWIK
if($show_piwik == 1){
	
	echo '<script>var _paq = _paq || []; _paq.push(["setDocumentTitle", document.domain + "/" + document.title]); _paq.push(["setCookieDomain", "'.$setCookieDomain_piwik.'"]); _paq.push(["setDomains", ["'.$setCookieDomain_piwik.'"]]); _paq.push(["setCustomVariable", 1, "type", "client", "visit"]); _paq.push(["setDoNotTrack", true]); _paq.push(["alcoolisables"]); _paq.push([\'trackPageView\']); _paq.push([\'enableLinkTracking\']); (function() { var u="https://'.$urldomain_piwik_interne.'"; _paq.push([\'setTrackerUrl\', u+\'piwik.php\']); _paq.push([\'setSiteId\', '.$idsite_piwik.']); var d=document, g=d.createElement(\'script\'), s=d.getElementsByTagName(\'script\')[0]; g.type=\'text/javascript\'; g.async=true; g.defer=true; g.src=u+\'piwik.js\'; s.parentNode.insertBefore(g,s); })();</script><noscript><p><img src="https://'.$urldomain_piwik_interne.'piwik.php?idsite='.$idsite_piwik.'&amp;rec=1" style="border:0;" alt="Tracker visitor intern with Piwik on '.JURI::base().'"></p></noscript>';
	

}
if($show_piwik == 2){
echo '<img src="https://'.$urldomain_piwik_interne.'piwik.php?idsite='.$idsite_piwik.'&amp;rec=1" style="border:0" alt="Tracker visitor interne with Piwik on '.JURI::base().'">';	
	
}
/*********************[ AUTRES Smartphone/Mobile ]************************/
if($show_mobile == 1){
	$docs->setMetaData('viewport', 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no');
	$docs->setMetaData('HandheldFriendly', 'true');
	$docs->setMetaData('apple-mobile-web-app-capable', 'YES');
	$docs->setMetaData('mobileoptimized', '480');
}	
		if($doYouHave_AffilateApple == 1){ 
				if(!empty($myAffiliateDataapps) AND !empty($idiphoneapps)){ 
					$docs->setMetaData('apple-itunes-app','app-id='.$idiphoneapps.', affiliate-data='.$myAffiliateDataapps.', app-argument='.JURI::base()); 
				}
		} else if($doYouHave_AffilateApple == 2) {
			if(!empty($idiphoneapps)){ 
						$docs->setMetaData('apple-itunes-app','app-id='.$idiphoneapps.', app-argument='.JURI::base()); 
			}
		}
if(!empty($logoimg_mobile_startup)){
	$docs->addCustomTag('<link href="'.$logoimg_mobile_startup.'" rel="apple-touch-startup-image">'); 
}
if(!empty($plogoimg_mobile)){
	$docs->addCustomTag('<link href="'.$logoimg_mobile.'" rel="apple-touch-icon">');
	}
if(!empty($plogoimg_mobile72x72)){
	$docs->addCustomTag('<link href="'.$logoimg_mobile72x72.'" sizes="72x72" rel="apple-touch-icon">');
	}
if(!empty($plogoimg_mobile114x114)){
	$docs->addCustomTag('<link href="'.$logoimg_mobile114x114.'" sizes="114x114" rel="apple-touch-icon">');
}
if(!empty($opensearch_url)){
	$docs->addCustomTag('<link rel="search" type="application/opensearchdescription+xml" title="'.$sitename.'" href="'.$opensearch_url.'">');
}
if(!empty($sitemap_url)){
	$docs->addCustomTag('<link rel="sitemap" type="application/xml" title="'.$sitename.'" href="'.$sitemap_url.'">');
	$docs->setMetaData('FSOnSitemap', $sitemap_url); }

/*********************[ Pinned website on windows 8/8.1 ]************************/
if(!empty($pinned8_color)){ 
	$docs->setMetaData('msapplication-TileColor', $pinned8_color); 
}
if(!empty($pinned8_navbutton_color)){ $docs->setMetaData('msapplication-navbutton-color', $pinned8_navbutton_color); }
if(!empty($pinned8_square70x70logo)){ $docs->setMetaData('msapplication-square70x70logo', $pinned8_square70x70logo); }
if(!empty($pinned8_square150x150logo)){ $docs->setMetaData('msapplication-square150x150logo', $pinned8_square150x150logo); }
if(!empty($pinned8_square144x144logo)){ $docs->setMetaData('msapplication-TileImage', $pinned8_square144x144logo); }
if(!empty($pinned8_wide310x150logo)){ $docs->setMetaData('msapplication-wide310x150logo', $pinned8_wide310x150logo); }
if(!empty($pinned8_square310x310logo)){ $docs->setMetaData('msapplication-square310x310logo', $pinned8_square310x310logo); }
if(!empty($pinned8_linksrss)){
$docs->setMetaData('msapplication-notification', 'frequency=30;polling-uri='.$pinned8_linksrss.'&amp;amp;id=1;polling-uri2='.$pinned8_linksrss.'&amp;amp;id=2;polling-uri3='.$pinned8_linksrss.'&amp;amp;id=3;polling-uri4='.$pinned8_linksrss.'&amp;amp;id=4;polling-uri5='.$pinned8_linksrss.'&amp;amp;id=5; cycle=1');
}
if(!empty($pinned8_badgebrowser)){ 
	$docs->setMetaData('msapplication-badge', 'frequency=30;polling-uri='.$pinned8_badgebrowser); 	
}
if(!empty($pinned8_IEconfig)){ 
	$docs->setMetaData('msapplication-config', $pinned8_IEconfig);  	
}
/*********************[ Jump List "Tasks" for Pinned Sites on windows 7 ]************************/
$docs->setMetaData('msapplication-task', 'name='.$sitename.';action-uri='.JURI::root().';icon-uri='.JURI::root().$JltaskIcons_final); //final
if(!empty($JltaskNames_1) AND !empty($JltaskPages_1)){
	
	$docs->setMetaData('msapplication-task', 'name='.$JltaskNames_1.';action-uri='.$JltaskPages_1.';icon-uri='.JURI::root().$JltaskIcons_final); //final
}
if(!empty($JltaskNames_2) AND !empty($JltaskPages_2)){
	
	$docs->setMetaData('msapplication-task', 'name='.$JltaskNames_2.';action-uri='.$JltaskPages_2.';icon-uri='.JURI::root().$JltaskIcons_final); //final
}
if(!empty($JltaskNames_3) AND !empty($JltaskPages_3)){
	
	$docs->setMetaData('msapplication-task', 'name='.$JltaskNames_3.';action-uri='.$JltaskPages_3.';icon-uri='.JURI::root().$JltaskIcons_final); //final
}
if(!empty($JltaskNames_4) AND !empty($JltaskPages_4)){
	
	$docs->setMetaData('msapplication-task', 'name='.$JltaskNames_4.';action-uri='.$JltaskPages_4.';icon-uri='.JURI::root().$JltaskIcons_final); //final
}
if(!empty($JltaskNames_5) AND !empty($JltaskPages_5)){
	
	$docs->setMetaData('msapplication-task', 'name='.$JltaskNames_5.';action-uri='.$JltaskPages_5.';icon-uri='.JURI::root().$JltaskIcons_final); //final
}
if(!empty($JltaskNames_6) AND !empty($JltaskPages_6)){
	
	$docs->setMetaData('msapplication-task', 'name='.$JltaskNames_6.';action-uri='.$JltaskPages_6.';icon-uri='.JURI::root().$JltaskIcons_final); //final
}
if(!empty($JltaskNames_7) AND !empty($JltaskPages_7)){
	
	$docs->setMetaData('msapplication-task', 'name='.$JltaskNames_7.';action-uri='.$JltaskPages_7.';icon-uri='.JURI::root().$JltaskIcons_final); //final
}
if(!empty($JltaskNames_8) AND !empty($JltaskPages_8)){
	
	$docs->setMetaData('msapplication-task', 'name='.$JltaskNames_8.';action-uri='.$JltaskPages_8.';icon-uri='.JURI::root().$JltaskIcons_final); //final
}
if(!empty($JltaskNames_9) AND !empty($JltaskPages_9)){	
	$docs->setMetaData('msapplication-task', 'name='.$JltaskNames_9.';action-uri='.$JltaskPages_9.';icon-uri='.JURI::root().$JltaskIcons_final); //final
}

/*********************[ AUTRES (Front-End Output Show) ]************************/
if(!empty($backlinks_frontendh)){ $docs->addCustomTag($backlinks_frontendh);}

if(!empty($backlinks_frontendf)){ echo $backlinks_frontendf; }

		if(!empty($linkstantkey)){
			$docs->setMetaData('linkstant', $linkstantkey);
			echo '<script src="http://www.linkstant.com/linkstant.js"></script>';
		}
/************** [ Mesure d'audiance ]************************/
$finale_xiti = html_entity_decode($sitename);
$finale_xiti = preg_replace('/\s/', '_', $finale_xiti);
if(!empty($num_s_xiti)){
echo '<a href="http://www.xiti.com/xiti.asp?s='.$num_s_xiti.'" title="WebAnalytics" target="_top"><script type="text/javascript">Xt_param = \'s='.$num_s_xiti.'&amp;p='.$finale_xiti.'\';try {Xt_r = top.document.referrer;}catch(e) {Xt_r = document.referrer; }Xt_h = new Date();Xt_i = \'<img width="39" height="25" border="0" alt="XITI to Ainternet" \';Xt_i += \'src="http://logv4.xiti.com/hit.xiti?\'+Xt_param;Xt_i += \'&amp;hl=\'+Xt_h.getHours()+\'x\'+Xt_h.getMinutes()+\'x\'+Xt_h.getSeconds();if(parseFloat(navigator.appVersion)>=4){Xt_s=screen;Xt_i+=\'&amp;r=\'+Xt_s.width+\'x\'+Xt_s.height+\'x\'+Xt_s.pixelDepth+\'x\'+Xt_s.colorDepth;}document.write(Xt_i+\'&amp;ref=\'+Xt_r.replace(/[<>"]/g, \'\').replace(/&amp;/g, \'$\')+\'" title="Internet Audience">\');//--></script><noscript>Mesure d\'audience ROI statistique webanalytics par <img width="39" height="25" src="http://logv4.xiti.com/hit.xiti?s='.$num_s_xiti.'&amp;p='.$finale_xiti.'" alt="WebAnalytics">
</noscript></a>';
}

if(!empty($myAccountGoogleplus)){
	$docs->addCustomTag('<link rel="publisher" href="https://plus.google.com/+'.$myAccountGoogleplus.'">');
}

if($nospartenaires_backlink == 1){
	echo '<a href="http://www.nospartenaires.com"><img src="http://www.nospartenaires.com/visuel80.jpg" alt="Nos Partenaires"></a>';
}


if($thumbshots_backlink == 1){
	echo '<a href="http://www.thumbshots.com" target="_blank" title="Thumbnails Screenshots by Thumbshots">Thumbnail Screenshots by Thumbshots</a>';
}

if($activesearchresults_backlink == 1){
	echo '<a href="http://www.activesearchresults.com/"><img src="http://www.activesearchresults.com/images/asrbutton.png" alt="Active Search Results" width="88" height="31"></a>';
}

if(!empty($hitparadidsite)){
	echo '<a href="http://www.hit-parade.com/hp.asp?site='.$hitparadidsite.'" target="_top"><img src="http://loga.hit-parade.com/logohp1.gif?site='.$hitparadidsite.'" alt="Hit-Parade"  width="77" height="15"></a>';
}

if(!empty($APPID_webstoreGoogle)){
	$docs->addCustomTag('<link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/'.$APPID_webstoreGoogle.'">');
}

if(!empty($Pingback_url)){
	$docs->addCustomTag('<link rel="pingback" href="'.$Pingback_url.'">');
}


if($pagerank_url == 1){
	echo '<a href="http://www.pagerank.fr/" target="_blank" title="Mon PageRank"><img src="http://www.pagerank.fr/pagerank-actuel.gif?uri='.$_SERVER['SERVER_NAME'].'" style="border: none;" alt="PageRank Actuel"/></a>';
}

if(!empty($hebdotop_idsite)){
	echo '<script type="text/javascript" src="http://www.hebdotop.com/cgi-bin/hebdotop.eur?id='.$hebdotop_idsite.'"></script>';
}
if(!empty($viglink_idsite)){
	echo '<a href="http://www.viglink.com/?vgref='.$viglink_idsite.'">  <img alt="VigLink badge" height="31" src="//www.viglink.com/images/badges/88x31.png" title="Links monetized by VigLink" width="88">
</a>';
}
if($freewebsubmission_backlinks == 1){
	echo '<a href="http://www.freewebsubmission.com"><img src="http://www.freewebsubmission.com/images/fwsbutton11.gif" width="88" height="31" border="0" alt="Submit Your Site To The Web\'s Top 50 Search Engines for Free!"></a> ';
}
if($addme_backlinks == 1){
	echo '<a href="http://www.addme.com/submission/free-submission-start.php">Search Engine Submission - AddMe</a> ';
}
if(!empty($hypersmash_idsite)){
	echo '<a href="http://www.hypersmash.com/dreamhost/" id="'.$hypersmash_idsite.'">Read more</a>';
}
if(!empty($ineedhits_idsite)){
	echo '<a href="http://www.ineedhits.com/free-tools/submit-free.aspx?source=FTSFbutton"><img src="http://www.ineedhits.com/images/trackingbuttons/SFbutton.gif?ref='.$ineedhits_idsite.'" border="0" height="32" width="90" alt="Submit your website to 20 Search Engines - FREE with ineedhits!"></a><a href="http://www.ineedhits.com/optimization/optimization.aspx" style="font-family: Arial; font-size:11px; color: Gray; font-weight:bolder; text-decoration:none">SEO Services</a>';
}
if($addpro_backlinks == 1){
	echo '<span style="display:inline-block;width:160px;height:30px;text-align:center;border:#000 1px dotted;font-family:Arial,Verdana,sans-serif;font-size:11px;background-color:#FFFFFF;"><strong style="display:block;padding:0px;margin:0px;">AddPro.com</strong><a href="http://www.addpro.com/" title="Search Engine Optimization" style="font-family:Arial,Verdana,sans-serif;font-size:11px;text-decoration:none;">Search 
Engine Optimization</a></span>';
}
if($sonicrun_backlinks == 1){
	echo '<A HREF="http://www.sonicrun.com"><IMG SRC="http://www.sonicrun.com/images/srbutton1.gif" WIDTH=88 HEIGHT=31 BORDER=0 ALT="Sonic Run: Internet Search Engine"></A> ';
}


//////////////////////////////////////////////////////////
if($plazoo_backlink == 1){
	echo '<a href="http://www.plazoo.com" target="_blank"><img src="http://www.plazoo.com/external/images/button_small1.gif" border="0" alt="RSS Search"></a>';
}
if($oobdoo_backlink == 1){
	echo '<A HREF="http://www.oobdoo.com/"><IMG SRC="http://www.oobdoo.com/logos/inter3.gif"
ALT="ooBdoo" BORDER="0" WIDTH="80" height="38"ALIGN="TOP"></A>';
}
if(!empty($quantcast_backlink)){
	echo '<script type="text/javascript">var _qevents = _qevents || [];(function() {var elem = document.createElement(\'script\');elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";elem.async = true;elem.type = "text/javascript";var scpt = document.getElementsByTagName(\'script\')[0];scpt.parentNode.insertBefore(elem, scpt);})();_qevents.push({qacct:"p-'.$quantcast_backlink.'"});</script><noscript><div style="display:none;"><img src="//pixel.quantserve.com/pixel/p-'.$quantcast_backlink.'.gif" border="0" height="1" width="1" alt="Quantcast"/></div></noscript>';
}
if(!empty($AddShoppers_backlink)){
	echo '<script type="text/javascript">var js = document.createElement(\'script\'); js.type = \'text/javascript\'; js.async = true; js.id = \'AddShoppers\';js.src = (\'https:\' == document.location.protocol ? \'https://shop.pe/widget/\' : \'http://cdn.shop.pe/widget/\') + \'widget_async.js#'.$AddShoppers_backlink.'\';document.getElementsByTagName("head")[0].appendChild(js);</script>';
}

?>
