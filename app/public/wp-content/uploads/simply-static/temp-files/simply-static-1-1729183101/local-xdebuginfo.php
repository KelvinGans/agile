<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">body {background-color: #fff; color: #222; font-family: sans-serif;}
pre {margin: 0; font-family: monospace;}
a:link, a:hover, a:visited {color: black; text-decoration: underline;}
table {border-collapse: separate; border: 1px solid #666; width: 934px; box-shadow: 1px 2px 3px #ccc; border-bottom: none; border-right: none; border-spacing: 0;}
.center {text-align: center;}
.center table {margin: 1em auto; text-align: left;}
.center th {text-align: center !important;}
td, th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px; border-left: none; border-top: none;}
th {top: 0; background: inherit; position: sticky;}
h1 {font-size: 150%;}
h2 {font-size: 125%;}
.p {text-align: left;}
.e {background-color: #e5f5d5; width: 300px; font-weight: bold;}
.h {background-color: #bbde94; font-weight: bold;}
.v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
.i {background-color: #ddd; text-align: center; font-size: 1em; font-family: serif; width: 1em;}
.v i {color: #999;}
.d {background-color: #ddd; width: 1em; text-align: center;}
.l {background-color: #bbde94;}
img {float: right; border: 0;}
hr {width: 934px; background-color: #ccc; border: 0; height: 1px;}</style>
<title>Xdebug 3.3.0</title>
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW,NOARCHIVE">
</head>
<body><div class="center">
<table>
<tr><td colspan="2" class="l"><svg xmlns="http://www.w3.org/2000/svg" width="176" height="91" viewbox="0 0 351 181"><title>Xdebug</title>
<g fill="none" fill-rule="evenodd" stroke="#FFF"><g transform="translate(5 5)"><path fill="#317E1E" fill-rule="nonzero" stroke-width="5" d="M127.9 85.5l68.2 70.7.4 17.3h-38.6l-60.8-59.7-60 59.7h-39v-17.6l69.7-69.8-69.6-71.2V-2.5h38.7l60.2 60 61-60h38.3v16l-68.5 72z"></path><circle cx="75.9" cy="74.6" r="3.5" stroke-opacity=".8" stroke-width="4"></circle><circle cx="105.1" cy="85" r="3.5" stroke-opacity=".8" stroke-width="4"></circle><circle cx="158.4" cy="15" r="3.5" stroke-opacity=".8" stroke-width="4"></circle><circle cx="50.9" cy="140" r="3.5" stroke-opacity=".8" stroke-width="4"></circle><circle cx="180.4" cy="158.5" r="3.5" stroke-opacity=".8" stroke-width="4"></circle><path stroke-linecap="square" stroke-linejoin="round" stroke-width="4" d="M32.6 158.2L42 149M104.3 69.1l49.4-49.4"></path><path stroke-linejoin="round" stroke-width="4" d="M102.3 82.7L30.3 10H11.2M167.4 10H183M11.2 160.7l79.2-78"></path><path stroke-linejoin="round" stroke-opacity=".7" stroke-width="4" d="M116.3 74.6L181 10"></path><path stroke-linejoin="round" stroke-width="4" d="M20.7 19.7l52.7 52.6"></path><path stroke-linejoin="round" stroke-opacity=".7" stroke-width="4" d="M116.3 96.7l32 32"></path><path stroke-linejoin="round" stroke-width="4" d="M155.2 133.6l22.1 22M53.6 137.5L97 94.9l67.1 66.6h4.9"></path></g><g fill="#000" fill-rule="nonzero" stroke-width="4"><path d="M158.3 107.7V72.9c0-.5 0-.5-.8-.5-.7 0-.7 0-.7.6v34.7c0 .6 0 .5.7.5.8 0 .7 0 .7-.5zm3.9 11.2a22.5 22.5 0 0 1-20-.7c-3.4-2-5.2-4.8-5.2-8.4V69.6c0-3 1.5-5.6 4.3-7.4a17 17 0 0 1 9.2-2.4c3 0 5.6.3 7.7 1V47H178v73h-15l-.8-1.1zM200.9 84V73.2c0-.8 0-.8-.8-.8s-.8 0-.8.8V84h1.6zm-1.6 12.5v11c0 .7 0 .7.8.7.7 0 .8 0 .8-.8V97.2h19.8v10.4c0 8.9-7.3 13.2-20.7 13.2-13.3 0-20.5-4.5-20.5-13.7V73.6c0-9.2 7.2-13.8 20.5-13.8 13.4 0 20.7 4.4 20.7 13.4v23.3h-21.4zM243.3 107.7V73c0-.6 0-.6-.7-.6-.8 0-.8 0-.8.5v34.8c0 .6 0 .5.8.5.7 0 .7 0 .7-.5zm-5.4 11.1l-.9 1.3h-15V47h19.8v13.8c2.1-.7 4.7-1 7.9-1 3.1 0 6.1.8 8.8 2.3 3 1.6 4.6 4.2 4.6 7.5v40.2c0 3.6-1.8 6.4-5.3 8.4a22.5 22.5 0 0 1-19.9.6zM285.8 119.7c-2.1.8-4.7 1.1-7.8 1.1a17 17 0 0 1-9.1-2.4c-2.8-1.7-4.4-4.2-4.4-7.2v-51h19.8v47.5c0 .6 0 .5.8.5.7 0 .7 0 .7-.4V60h19.8v60h-19.8v-.4zM328.3 108.3V73c0-.6 0-.6-.7-.6-.8 0-.8 0-.8.6V108c0 .6 0 .6.8.6.7 0 .7 0 .7-.4zm-.9 11.8c-2 .5-4.2.7-6.9.7a17 17 0 0 1-9.1-2.4c-2.9-1.7-4.4-4.2-4.4-7.2V71c0-7.4 5.2-11.2 14.6-11.2 2.3 0 5 .7 8.3 2l1.7-1.7H348v57.3c0 4.4-1 9.5-2.8 12-2.1 3.2-7.7 4.5-17 4.5h-18.4v-12h14.9c1.1 0 2-.7 2.7-1.8z"></path></g></g></svg></td></tr>
<tr>
<td class="e">Version </td>
<td class="v">3.3.0 </td>
</tr>
<tr><td colspan="2" style="background-color: white; text-align: center"><a style="color: #317E1E; background-color: transparent; font-weight: bold; text-decoration: underline" href="https://xdebug.org/support">Support Xdebug on Patreon, GitHub, or as a business</a></td></tr>
</table>
<table>
<tr class="h"><th colspan="3">Enabled Features<br>(through 'xdebug.mode' setting)</th></tr>
<tr class="h">
<th>Feature</th>
<th>Enabled/Disabled</th>
<th>Docs</th>
</tr>
<tr>
<td class="e">Development Helpers</td>
<td class="v">✘ disabled</td>
<td class="d"><a href="https://xdebug.org/docs/develop">⊕</a></td>
</tr>
<tr>
<td class="e">Coverage</td>
<td class="v">✘ disabled</td>
<td class="d"><a href="https://xdebug.org/docs/code_coverage">⊕</a></td>
</tr>
<tr>
<td class="e">GC Stats</td>
<td class="v">✘ disabled</td>
<td class="d"><a href="https://xdebug.org/docs/garbage_collection">⊕</a></td>
</tr>
<tr>
<td class="e">Profiler</td>
<td class="v">✘ disabled</td>
<td class="d"><a href="https://xdebug.org/docs/profiler">⊕</a></td>
</tr>
<tr>
<td class="e">Step Debugger</td>
<td class="v">✘ disabled</td>
<td class="d"><a href="https://xdebug.org/docs/remote">⊕</a></td>
</tr>
<tr>
<td class="e">Tracing</td>
<td class="v">✘ disabled</td>
<td class="d"><a href="https://xdebug.org/docs/trace">⊕</a></td>
</tr>
</table>
<table>
<tr class="h"><th colspan="2">Optional Features</th></tr>
<tr>
<td class="e">Compressed File Support </td>
<td class="v">yes (gzip) </td>
</tr>
<tr>
<td class="e">Clock Source </td>
<td class="v">clock_gettime_nsec_np </td>
</tr>
<tr>
<td class="e">&#039;xdebug://gateway&#039; pseudo-host support </td>
<td class="v">no </td>
</tr>
<tr>
<td class="e">&#039;xdebug://nameserver&#039; pseudo-host support </td>
<td class="v">no </td>
</tr>
<tr>
<td class="e">Systemd Private Temp Directory </td>
<td class="v">not enabled </td>
</tr>
</table>
<table>
<tr class="h"><th colspan="3">Diagnostic Log</th></tr>
<tr><td class="v" colspan="3">No messages</td></tr>
</table>
<table>
<tr class="h"><th colspan="2">PHP</th></tr>
<tr class="h"><th colspan="2">Build Configuration</th></tr>
<tr>
<td class="e">Version (Run Time) </td>
<td class="v">8.3.11 </td>
</tr>
<tr>
<td class="e">Version (Compile Time) </td>
<td class="v">8.3.11 </td>
</tr>
<tr>
<td class="e">Debug Build </td>
<td class="v">no </td>
</tr>
<tr>
<td class="e">Thread Safety </td>
<td class="v">disabled </td>
</tr>
<tr class="h"><th colspan="2">Settings</th></tr>
<tr>
<td class="e">Configuration File (php.ini) Path </td>
<td class="v">/var/folders/g1/43z0w1wj4p5dlcfxvdr9zhx80000gn/T//local-lightning-php/php-8.3.11/build/lib </td>
</tr>
<tr>
<td class="e">Loaded Configuration File </td>
<td class="v">/Users/mac/Library/Application Support/Local/run/D60lyRhip/conf/php/php.ini </td>
</tr>
<tr>
<td class="e">Scan this dir for additional .ini files </td>
<td class="v">(none) </td>
</tr>
<tr>
<td class="e">Additional .ini files parsed </td>
<td class="v">(none) </td>
</tr>
</table>
<table>
<tr class="h">
<th>Directive</th>
<th>Local Value</th>
<th>Master Value</th>
<th>Docs</th>
</tr>
<tr>
<td class="e">xdebug.cli_color</td>
<td class="v">0</td>
<td class="v">0</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.cli_color">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.client_discovery_header</td>
<td class="v">HTTP_X_FORWARDED_FOR,REMOTE_ADDR</td>
<td class="v">HTTP_X_FORWARDED_FOR,REMOTE_ADDR</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.client_discovery_header">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.client_host</td>
<td class="v">localhost</td>
<td class="v">localhost</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.client_host">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.client_port</td>
<td class="v">9003</td>
<td class="v">9003</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.client_port">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.cloud_id</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.cloud_id">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.collect_assignments</td>
<td class="v">Off</td>
<td class="v">Off</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.collect_assignments">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.collect_params</td>
<td class="v">On</td>
<td class="v">On</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.collect_params">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.collect_return</td>
<td class="v">Off</td>
<td class="v">Off</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.collect_return">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.connect_timeout_ms</td>
<td class="v">200</td>
<td class="v">200</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.connect_timeout_ms">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.discover_client_host</td>
<td class="v">Off</td>
<td class="v">Off</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.discover_client_host">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.dump.COOKIE</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.dump.COOKIE">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.dump.ENV</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.dump.ENV">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.dump.FILES</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.dump.FILES">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.dump.GET</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.dump.GET">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.dump.POST</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.dump.POST">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.dump.REQUEST</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.dump.REQUEST">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.dump.SERVER</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.dump.SERVER">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.dump.SESSION</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.dump.SESSION">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.dump_globals</td>
<td class="v">On</td>
<td class="v">On</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.dump_globals">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.dump_once</td>
<td class="v">On</td>
<td class="v">On</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.dump_once">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.dump_undefined</td>
<td class="v">Off</td>
<td class="v">Off</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.dump_undefined">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.file_link_format</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.file_link_format">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.filename_format</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.filename_format">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.force_display_errors</td>
<td class="v">Off</td>
<td class="v">Off</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.force_display_errors">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.force_error_reporting</td>
<td class="v">0</td>
<td class="v">0</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.force_error_reporting">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.gc_stats_output_name</td>
<td class="v">gcstats.%p</td>
<td class="v">gcstats.%p</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.gc_stats_output_name">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.halt_level</td>
<td class="v">0</td>
<td class="v">0</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.halt_level">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.idekey</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.idekey">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.log</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.log">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.log_level</td>
<td class="v">7</td>
<td class="v">7</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.log_level">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.max_nesting_level</td>
<td class="v">512</td>
<td class="v">512</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.max_nesting_level">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.max_stack_frames</td>
<td class="v">-1</td>
<td class="v">-1</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.max_stack_frames">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.mode</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.mode">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.output_dir</td>
<td class="v">/var/tmp/</td>
<td class="v">/var/tmp/</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.output_dir">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.profiler_append</td>
<td class="v">Off</td>
<td class="v">Off</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.profiler_append">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.profiler_output_name</td>
<td class="v">cachegrind.out.%p</td>
<td class="v">cachegrind.out.%p</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.profiler_output_name">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.scream</td>
<td class="v">Off</td>
<td class="v">Off</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.scream">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.show_error_trace</td>
<td class="v">Off</td>
<td class="v">Off</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.show_error_trace">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.show_exception_trace</td>
<td class="v">Off</td>
<td class="v">Off</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.show_exception_trace">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.show_local_vars</td>
<td class="v">Off</td>
<td class="v">Off</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.show_local_vars">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.start_upon_error</td>
<td class="v">default</td>
<td class="v">default</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.start_upon_error">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.start_with_request</td>
<td class="v">default</td>
<td class="v">default</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.start_with_request">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.trace_format</td>
<td class="v">0</td>
<td class="v">0</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.trace_format">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.trace_options</td>
<td class="v">0</td>
<td class="v">0</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.trace_options">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.trace_output_name</td>
<td class="v">trace.%c</td>
<td class="v">trace.%c</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.trace_output_name">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.trigger_value</td>
<td class="v"><i>no value</i></td>
<td class="v"><i>no value</i></td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.trigger_value">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.use_compression</td>
<td class="v">1</td>
<td class="v">1</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.use_compression">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.var_display_max_children</td>
<td class="v">128</td>
<td class="v">128</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.var_display_max_children">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.var_display_max_data</td>
<td class="v">512</td>
<td class="v">512</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.var_display_max_data">⊕</a></td>
</tr>
<tr>
<td class="e">xdebug.var_display_max_depth</td>
<td class="v">3</td>
<td class="v">3</td>
<td class="d"><a href="https://xdebug.org/docs/all_settings#xdebug.var_display_max_depth">⊕</a></td>
</tr>
</table>
</div></body>
</html>