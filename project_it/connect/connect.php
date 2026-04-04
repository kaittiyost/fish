<?php
	$host="localhost";
	$dbuser="root";
	$password="abcd1234";
	$dbname="project_it";
	
	// Create global mysqli connection for compatibility shim
	$global_mysqli_conn = @mysqli_connect($host, $dbuser, $password) or die ("Not Connect Database");
	@mysqli_select_db($global_mysqli_conn, $dbname);
	@mysqli_query($global_mysqli_conn, "SET NAMES 'utf8'");

	// --- MySQL Compatibility Shim for PHP 7/8 ---

	if (!function_exists('mysql_connect')) {
		function mysql_connect($host, $dbuser, $password) {
			global $global_mysqli_conn;
			return $global_mysqli_conn;
		}
	}

	if (!function_exists('mysql_select_db')) {
		function mysql_select_db($dbname, $conn = null) {
			global $global_mysqli_conn;
			return mysqli_select_db($global_mysqli_conn, $dbname);
		}
	}

	if (!function_exists('mysql_query')) {
		function mysql_query($sql, $conn = null) {
			global $global_mysqli_conn;
			return mysqli_query($global_mysqli_conn, $sql);
		}
	}

	if (!function_exists('mysql_fetch_array')) {
		function mysql_fetch_array($result, $result_type = MYSQLI_BOTH) {
            if (!is_object($result)) return false;
			return mysqli_fetch_array($result, $result_type);
		}
	}

	if (!function_exists('mysql_fetch_assoc')) {
		function mysql_fetch_assoc($result) {
            if (!is_object($result)) return false;
			return mysqli_fetch_assoc($result);
		}
	}

	if (!function_exists('mysql_fetch_object')) {
		function mysql_fetch_object($result) {
            if (!is_object($result)) return false;
			return mysqli_fetch_object($result);
		}
	}

	if (!function_exists('mysql_fetch_row')) {
		function mysql_fetch_row($result) {
            if (!is_object($result)) return false;
			return mysqli_fetch_row($result);
		}
	}

	if (!function_exists('mysql_num_rows')) {
		function mysql_num_rows($result) {
            if (!is_object($result)) return false;
			return mysqli_num_rows($result);
		}
	}

	if (!function_exists('mysql_insert_id')) {
		function mysql_insert_id($conn = null) {
			global $global_mysqli_conn;
			return mysqli_insert_id($global_mysqli_conn);
		}
	}

	if (!function_exists('mysql_error')) {
		function mysql_error($conn = null) {
			global $global_mysqli_conn;
			return mysqli_error($global_mysqli_conn);
		}
	}

	if (!function_exists('mysql_close')) {
		function mysql_close($conn = null) {
			global $global_mysqli_conn;
			if ($global_mysqli_conn) {
				return mysqli_close($global_mysqli_conn);
			}
			return true;
		}
	}

	if (!function_exists('mysql_real_escape_string')) {
		function mysql_real_escape_string($string, $conn = null) {
			global $global_mysqli_conn;
			return mysqli_real_escape_string($global_mysqli_conn, $string);
		}
	}
?>