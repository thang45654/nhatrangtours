<?php

use Illuminate\Support\Str;

if (!function_exists('gen_token')) {
	function gen_token($length = 8): string
	{
		return Str::random($length);
	}
}