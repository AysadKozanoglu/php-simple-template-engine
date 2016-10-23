<?php

/***************************************************************************
*
*   Author   : Aysad Kozanoglu
*   Package  : Simple Template Engine
*   Version  : 1.0.3
*   
*   Site     : http://onweb.pe.hu
*   Email    : aysadx@gmail.com
*	File     : tpl.class.php
*
*
***************************************************************************/

// Template engine
class template
{
	/**
	* Template variables and their replacements
	*
	* @var array
	*/
	var $tpl_vars;

	/**
	* Constructor
	*/
	function template()
	{
		$this->tpl_vars = array();
	}

	/**
	* Assign our variables and replacements
	*
	* @param  array  Template variables and replacements
	* @return none
	*/
	function assign($var_array)
	{
		// Must be an array...
		if (!is_array($var_array))
		{
			die('template::assign() - $var_array must be an array.');
		}
		$this->tpl_vars = array_merge($this->tpl_vars, $var_array);
	}

	/**
	* Parse the template file
	*
	* @param  string  Template file
	* @return string  Parsed template data
	*/
	function parse($tpl_file)
	{
		// Make sure it's a valid file, and it exists
		if (!is_file($tpl_file))
		{
			die('template::parse() - "' . $tpl_file . '" does not exist or is not a file.');
		}
		$tpl_content = file_get_contents($tpl_file);

		foreach ($this->tpl_vars AS $var => $content)
		{
			$tpl_content = str_replace('{' . $var . '}', $content, $tpl_content);
		}
		return $tpl_content;
	}

	/**
	* Output the template
	*
	* @param string Template file
	*/
	function display($tpl_file)
	{
		echo $this->parse($tpl_file);
	}
}

?>