--TEST--
Bug #60717 (Order of traits in use statement can cause unexpected unresolved abstract method)
--FILE--
<?php

	interface HTML\Helper
	{
		function text($text);
		function attributes(array $attributes = null);
		function textArea(array $attributes, $value);
	}

	trait HTML\TextUTF8
	{
		function text($text) {}
	}

	trait HTML\TextArea
	{
		function textArea(array $attributes, $value) {}
		abstract function attributes(array $attributes = null);
		abstract function text($text);
	}

	trait HTML\HTMLAttributes
	{
		function attributes(array $attributes = null) {	}
		abstract function text($text);
	}

	class HTML\HTMLHelper implements HTML\Helper
	{
		use HTML\TextArea, HTML\HTMLAttributes, HTML\TextUTF8;
	}

	class HTML\HTMLHelper2 implements HTML\Helper
	{
		use HTML\TextArea, HTML\TextUTF8, HTML\HTMLAttributes;
	}

	class HTML\HTMLHelper3 implements HTML\Helper
	{
		use HTML\HTMLAttributes, HTML\TextArea, HTML\TextUTF8;
	}

	class HTML\HTMLHelper4 implements HTML\Helper
	{
		use HTML\HTMLAttributes, HTML\TextUTF8, HTML\TextArea;
	}

	class HTML\HTMLHelper5 implements HTML\Helper
	{
		use HTML\TextUTF8, HTML\TextArea, HTML\HTMLAttributes;
	}

	class HTML\HTMLHelper6 implements HTML\Helper
	{
		use HTML\TextUTF8, HTML\HTMLAttributes, HTML\TextArea;
	}

	$o = new HTML\HTMLHelper;
    $o = new HTML\HTMLHelper2;
    $o = new HTML\HTMLHelper3;
    $o = new HTML\HTMLHelper4;
    $o = new HTML\HTMLHelper5;
    $o = new HTML\HTMLHelper6;
    echo 'Done';
--EXPECT--
Done
