<?php
namespace WReader;

const DEFAULT_TEMPLATE = 'default';
const DEFAULT_LIMIT = 15;
const DEFAULT_CACHETIME = 300;
const SHORTCODE = 'wreader';

namespace WReader\Settings;

const DEFAULT_BEFORE_TEMPLATE = '<table>
<thead>
<th style="width:74px"></th>
<th>Title</th>
<th>Description</th>
</thead>
<tbody>';
const DEFAULT_BODY_TEMPLATE = '<tr class="wreader_element">
	<td class="wr_thumbnail">%THUMBNAIL|64x64%</td>
	<td class="wr_title" style="vertical-align:top">
		<a href="%LINK%"><strong>%TITLE%</strong></a><br/><em>%SUBTITLE%</em>
	</td>
	<td class="description" style="vertical-align:top">
		%SUMMARY%
	</td>
</tr>';
const DEFAULT_AFTER_TEMPLATE = '</tbody>
</table>';
