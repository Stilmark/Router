<?php

define('ROOT', __DIR__);
require(ROOT . '/vendor/autoload.php');

use Stilmark\Timesheet\iCalParser;
use Stilmark\Parse\Str;
use Stilmark\Parse\Dump;

// $response = (new iCal())->loadFile('https://calendar.google.com/calendar/ical/c_4380ba8f58c9905e989ff18e44927cccdc24469200c6ad0de0eb28226986a967%40group.calendar.google.com/public/basic.ics')->limit(2)->parseFile();

$response = iCalParser::process('https://calendar.google.com/calendar/ical/c_4380ba8f58c9905e989ff18e44927cccdc24469200c6ad0de0eb28226986a967%40group.calendar.google.com/public/basic.ics');

echo Dump::json($response, JSON_PRETTY_PRINT);
/*
- calendars
	- id
	- user_id
	- name
	- description
	- timezone
	- url
	- created_at
	- updated_at
	- processed_at
- timesheets
	- calendar_id
	- start

*/