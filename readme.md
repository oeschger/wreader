## WReader
Contributors: oeschger and pickettj
Tags: feed, rss, archive, shortcode, custom, template, html, customizable
Requires at least: 3.0
Tested up to: 3.7.5
Stable tag: trunk

Reads multiple feeds. Output can be customized via templates. Is displayed via Shortcodes.

### Description

This plugin was created with the iTunes Podcast Feed in mind. However, you can feed it any RSS feed you like. If you would like to display some tags which are not supported right now, please feel free to contact me.

### Quick Start

Create a template "myfeeds" in `Settings > WReader`.
Add your Feeds.
Create a page and paste in one of these shortocdes:

	[wreader template="myfeeds"]
	[wreader template="myfeeds" limit="10"]
	[wreader template="myfeeds" cachetime="300"]


### Parameters

- `template`: (required) name of the template
- `limit`: (optional) maximum number of items per feed. default: 15
- `cachetime`: (optional) time in seconds to cache results. default: 300
- `nocache`: (optional) set to "1" to deactivate cache. not recommended, will make your multifeed-page very slow. default: 0

### Force Cache Refresh

To clear the cache, call the site with parameter `?nocache=1`. So if your site is `example.com/archives`, open `example.com/archives?nocache=1` in your browser. You should then see the refreshed page immediately.

### Placeholders

You can specify a custom template to display the archive elements.
Go to `Settings > WReader` for plugin preferences.
Use HTML and any of the following template placeholders.

- `%TITLE%` - Item title (&lt;title&gt;).
- `%SUBTITLE%` - Item subtitle (&lt;itunes:subtitle&gt;).
- `%CONTENT%` - Item content (&lt;content:encoded&gt;).
- `%CONTENT|...%` - Same as above but truncated to the given amount of words.
- `%SUMMARY%` - Item summary (&lt;itunes:summary&gt;).
- `%LINK%` - Item link (&lt;link&gt;).
- `%DESCRIPTION%` - Item description (&lt;itunes:description&gt; or &lt;description&gt;).
- `%DESCRIPTION|...%` - Same as above but truncated to the given amount of words.
- `%THUMBNAIL%` - Thumbnail tag in original size (&lt;itunes:image&gt;).
- `%THUMBNAIL|...x...%` - Same as above but with certain dimensions. Example: `%THUMBNAIL|75x75%`.
- `%DATE%` - Item publish date (&lt;pubDate&gt;) in WordPress default format.
- `%DATE|...%` - Same as above but in a custom format. Example: `%DATE|Y/m/d%`.

Use these placeholders to access global feed data:

- `%FEEDTITLE%` - Feed title (&lt;title&gt;).
- `%FEEDSUBTITLE%` - Feed subtitle (&lt;itunes:subtitle&gt;).
- `%FEEDSUMMARY%` - Feed summary (&lt;itunes:summary&gt;).
- `%FEEDLINK%` - Feed link (&lt;link&gt;).
- `%FEEDLANGUAGE%` - Feed language (&lt;language&gt;).
- `%FEEDTHUMBNAIL%` - Feed image (&lt;itunes:image&gt;).
- `%FEEDTHUMBNAIL|...x...%` - Same as above but with certain dimensions. Example: `%FEEDTHUMBNAIL|75x75%`.

## Installation

1. Upload the `wreader` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to `Settings > WReader` and create a template
1. Place `[wreader template="mytemplate"]` in your post or page
