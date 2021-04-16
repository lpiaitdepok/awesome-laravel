<?php

/* laravel version
type on *.blade.php
*/

{{ Illuminate\Foundation\Application::VERSION }}

// or
{{app()->version()}}


// lets you "extend" a template
@extends ('base')
?>
