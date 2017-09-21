<?php 
	$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') 
                === FALSE ? 'http' : 'https';
			if(isset($_SERVER['HTTPS'])):
				if ($_SERVER["HTTPS"] == "on"): 
					$protocol = "https:";
				else:
					$protocol = "http:";
				endif;
			else :
				$protocol = "http:";
			endif;
	define('url_root',$protocol.'//'.$_SERVER["SERVER_NAME"].'/kandc/exe/');
	define('url_root2',$protocol.'//'.$_SERVER["SERVER_NAME"].'/kandc/exe');


	function emitConditionalGet($timestamp)
	{
		// See also http://www.mnot.net/cache_docs/
		// and code sample http://simonwillison.net/2003/Apr/23/conditionalGet/
	
		$gmdate_exp    = gmdate('D, d M Y H:i:s', time() + 1) . ' GMT';
		$last_modified = gmdate('D, d M Y H:i:s', $timestamp) . ' GMT';
		$etag          = '"'.md5($last_modified).'"';
	
		// If the client provided any of the if-modified-since or if-none-match
		// infos, take them into account:
	
		$if_modified_since = isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])
						   ? stripslashes($_SERVER['HTTP_IF_MODIFIED_SINCE']) : false;
		$if_none_match     = isset($_SERVER['HTTP_IF_NONE_MATCH'])
						   ? stripslashes($_SERVER['HTTP_IF_NONE_MATCH'])     : false;
	
		if (!$if_modified_since && !$if_none_match)
		{
			return;  // the client does not cache anything
		}
	
		if ($if_none_match && $if_none_match != $etag)
		{
			return;  // ETag mismatch: the page changed!
		}
		if ($if_modified_since && $if_modified_since != $last_modified)
		{
			return;  // if-modified-since mismatch: the page changed!
		}
	
		// Nothing changed since last time client visited this page.
	
		header("HTTP/1.0 304 Not Modified");
		header("Last-Modified: $last_modified");
		header("ETag: $etag");
		header("Cache-Control: private, max-age=1, must-revalidate");
		header("Expires: $gmdate_exp");
		header("Pragma: private, cache");
		header("Content-Type: text/html; charset=utf-8");
		exit;
	}
	
	function emitDefaultHeaders($timestamp)
	{
		$gmdate_exp    = gmdate('D, d M Y H:i:s', time() + 1) . ' GMT';
		$last_modified = gmdate('D, d M Y H:i:s', $timestamp) . ' GMT';
		$etag          = '"'.md5($last_modified).'"';
	
		header("Last-Modified: $last_modified");
		header("ETag: $etag");
		header("Cache-Control: private, max-age=1, must-revalidate");
		header("Expires: $gmdate_exp");
		header("Pragma: private, cache");
		header("Content-Type: text/html; charset=utf-8");
	}
	
	function getTimestamp()
	{
		// Find out when this page's contents last changed; in a static system,
		// this would be the file time of the backing HTML/PHP page. Add your
		// own logic here:
		return filemtime($SCRIPT_FILENAME);
	}
	function curPageURL_fix() {
		 $pageURL = 'http';
		 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
		 return $pageURL;
		}
?>