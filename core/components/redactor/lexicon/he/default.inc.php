<?php
/**
 * Default Language file for Redactor
 *
 * @package redactor
 * @subpackage lexicon
 */

$_lang['setting_redactor'] = 'Redactor';

$_lang['setting_area_general'] = 'General settings';

$_lang['setting_redactor.air'] = 'Air-Mode';
$_lang['setting_redactor.air_desc'] = 'When enabled, Redactor will hide the regular toolbar and instead show a smaller toolbar when you select text inside the edit panel. To change the available buttons with Air-Mode enabled, see the <code>airButtons</code> configuration option.';

$_lang['setting_redactor.autoresize'] = 'Autoresize';
$_lang['setting_redactor.autoresize_desc'] = 'When enabled, the editor will automatically grow as big as needed to show all the text without having to scroll inside the frame. ';

$_lang['setting_redactor.linkAnchor'] = 'Anchor Links';
$_lang['setting_redactor.linkAnchor_desc'] = 'When enabled, the <em>insert link</em> modal will include a tab for inserting anchor links.';

$_lang['setting_redactor.linkEmail'] = 'Email Links';
$_lang['setting_redactor.linkEmail_desc'] = 'When enabled, the <em>insert link</em> modal will include a tab for inserting <code>mailto:</code> links.';

$_lang['setting_redactor.linkResource'] = 'Resource Links';
$_lang['setting_redactor.linkResource_desc'] = 'When enabled, the <em>resource link</em> modal will include a tab for inserting links to other MODX Resources.';

$_lang['setting_redactor.minHeight'] = 'Min Height';
$_lang['setting_redactor.minHeight_desc'] = 'Used together with the <code>Autoresize</code> option, the Min Height configuration lets you set either a minimum (when autoresize is enabled) or fixed (when autoresize is disabled) height for the text area. The height is in pixels and only needs the integer numbers added in the setting.';

$_lang['setting_redactor.modalOverlay'] = 'Overlay';
$_lang['setting_redactor.modalOverlay_desc'] = 'When enabled, an overlay will prevent clicking other things when Redactor opens a modal window (for links, uploads etc.)';

$_lang['setting_redactor.placeholder'] = 'Placeholder';
$_lang['setting_redactor.placeholder_desc'] = 'When not 0, this lets you set a placeholder text for the editor if no content is available for the editor yet.';

$_lang['setting_redactor.shortcuts'] = 'Shortcuts';
$_lang['setting_redactor.shortcuts_desc'] = 'When enabled, you can use the following shortcuts when editing with Redactor:</p>
    <ul>
        <li><b>ctrl + z</b> Undo typing/action</li>
        <li><b>ctrl + shift + z</b> Redo typing/action</li>
        <li><b>ctrl + m</b> Remove formatting </li>
        <li><b>ctrl + b</b> Bold text</li>
        <li><b>ctrl + i</b> Italicize text</li>
        <li><b>ctrl + j</b> Insert unordered list</li>
        <li><b>ctrl + k</b> Insert ordered list</li>
        <li><b>ctrl + l</b> Superscript</li>
        <li><b>ctrl + h</b> Subscript</li>
        <li><b>tab</b> Indent text</li>
        <li><b>shift + tab</b> Outdent text</li>
    </ul>
    <p>Of course the MODX shortcuts like <b>ctrl + s</b> to save still work when using Redactor.';

$_lang['setting_redactor.tabindex'] = 'Tab Index';
$_lang['setting_redactor.tabindex_desc'] = 'The tab index order of the text editing field. ';

$_lang['setting_redactor.visual'] = 'Visual';
$_lang['setting_redactor.visual_desc'] = 'When this setting is enabled, the editor starts in visual mode (with the toolbar and all that goodness), but when it is disabled the code (HTML) view is the default. Very useful as a user setting!';

$_lang['setting_redactor.wym'] = 'WYM (Visual Structure)';
$_lang['setting_redactor.wym_desc'] = 'WYM ("What you mean", aka Visual Structure) mode is a special mode in which through the use of background colors and indentation, the markup structure is made visible. If you want to train your editors to make clean markup, this is a great option to enable. <a href="http://imperavi.com/redactor/examples/wym/">View an example.</a>';

$_lang['setting_redactor.direction'] = 'Direction';
$_lang['setting_redactor.direction_desc'] = 'Sets the text direction, either <code>ltr</code> (left-to-right) or <code>rtl</code> (right-to-left).';

$_lang['setting_redactor.lang'] = 'Language';
$_lang['setting_redactor.lang_desc'] = 'Sets the language for the editor itself. The following languages are included in the package:
    <ul>
        <li>ar (Arabic)</li>
        <li>bg (Bulgarian)</li>
        <li>by (Belarusian Belarus)</li>
        <li>cs (Czech)</li>
        <li>da (Danish)</li>
        <li>de (German)</li>
        <li>en (English)</li>
        <li>es (Spanish)</li>
        <li>fi (Finnish)</li>
        <li>fr (French)</li>
        <li>he (Hebrew)</li>
        <li>id (Indonesian)</li>
        <li>it (Italian)</li>
        <li>ja (Japanese)</li>
        <li>nl (Dutch)</li>
        <li>no_NB (Norwegian Bokm?l)</li>
        <li>pl (Polish)</li>
        <li>ru (Russian)</li>
        <li>sv (Swedish)</li>
        <li>ua (Ukrainian)</li>
        <li>zh_cn (Chinese)</li>
        <li>az (Azerbaijani)</li>
        <li>ba (Bosnian)</li>
        <li>ca (Catalan)</li>
        <li>el (Greek)</li>
        <li>eo (Esperanto)</li>
        <li>es_ar (Argentinian Spanish)</li>
        <li>fa (Persian)</li>
        <li>ge (Georgian)</li>
        <li>hr (Croatian)</li>
        <li>hu (Hungarian)</li>
        <li>ko (Korean)</li>
        <li>lt (Lithuanian)</li>
        <li>lv (Latvian)</li>
        <li>mk (Macedonian)</li>
        <li>pt_br (Brazilian Portuguese)</li>
        <li>pt_pt (Portuguese)</li>
        <li>ro (Romanian)</li>
        <li>sk (Slovak)</li>
        <li>sl (Slovenian)</li>
        <li>sq (Albanian)</li>
        <li>sr-cir (Serbian (Cyrillic))</li>
        <li>sr-lat (Serbian (Latin))</li>
        <li>th (Thai)</li>
        <li>tr (Turkish)</li>
        <li>vi (Vietnamese)</li>
        <li>zh_tw (Chinese Traditional)</li>
    </ul>
    Additional languages are <a href="http://imperavi.com/redactor/docs/languages/">available from the Imperavi website</a> and can be uploaded to the <code>assets/components/redactor/lang/</code> directory.';

$_lang['setting_redactor.allowedTags'] = 'Allowed Tags';
$_lang['setting_redactor.allowedTags_desc'] = 'Either use the Allowed Tags setting, or the Denied Tags setting - not both! When using the Allowed Tags setting, you can whitelist accepted tags in the content - others will be stripped.';

$_lang['setting_redactor.boldTag'] = 'Bold Tag';
$_lang['setting_redactor.boldTag_desc'] = 'The HTML tag to use for bold pieces of content. Either <code>b</code> or <code>strong</code>.';

$_lang['setting_redactor.cleanup'] = 'Cleanup';
$_lang['setting_redactor.cleanup_desc'] = 'When enabled, any time text is pasted into the editor it will be parsed and cleaned up to only leave the important markup.';

$_lang['setting_redactor.convertDivs'] = 'Convert Divs';
$_lang['setting_redactor.convertDivs_desc'] = 'With Convert Divs enabled, Redactor will automatically replace <code>&lt;div></code> tags with <code>&ltp></code> tags.';

$_lang['setting_redactor.convertLinks'] = 'Convert Links';
$_lang['setting_redactor.convertLinks_desc'] = 'When Convert Links is enabled, Redactor will automatically parse links in the content, and add the proper <code>&lt;a href=""></code> tags into the markup.';

$_lang['setting_redactor.deniedTags'] = 'Denied Tags';
$_lang['setting_redactor.deniedTags_desc'] = 'Either use the Allowed Tags setting, or the Denied Tags setting - not both! When using the Denied Tags setting, you can blacklist tags that are not allowed in the markup.';

$_lang['setting_redactor.formattingPre'] = 'Formatting in Pre';
$_lang['setting_redactor.formattingPre_desc'] = 'When this setting is enabled, you can use formatting options (like bold, italics etc) within <code>&lt;pre&gt;</code> tags.';

$_lang['setting_redactor.italicTag'] = 'Italic Tag';
$_lang['setting_redactor.italicTag_desc'] = 'The HTML tag to use for italic pieces of content. Either <code>i</code> or <code>em</code>.';

$_lang['setting_redactor.linebreaks'] = 'Linebreaks';
$_lang['setting_redactor.linebreaks_desc'] = 'When enabled, line breaks will be processed as <code>&lt;br&gt;</code> tags instead of new paragraphs. Note that enabling linebreaks mode will automatically disable <code>Paragraphy</code> mode.';

$_lang['setting_redactor.marginFloatLeft'] = 'Left Float Margin';
$_lang['setting_redactor.marginFloatLeft_desc'] = 'When positioning images as left or right, Redactor lets you put in a <em>CSS class</em> or <em>margins</em> to prevent the image from colliding with the text floating around it. You can define the margin or CSS class for the left align with this setting. Either provide the margin like the value part of a CSS declaration: <code>0 10px 10px 0</code> or provide a class name prefixed with a dot: <code>.imageFloatLeftInContent</code>. If you want multiple classname, only prefix the first with a dot.';

$_lang['setting_redactor.marginFloatRight'] = 'Right Float Margin';
$_lang['setting_redactor.marginFloatRight_desc'] = 'When positioning images as left or right, Redactor lets you put in a <em>CSS class</em> or <em>margins</em> to prevent the image from colliding with the text floating around it. You can define the margin or CSS class for the right align with this setting. Either provide the margin like the value part of a CSS declaration: <code>0 0 10px 10px</code> or provide a class name prefixed with a dot: <code>.imageFloatRightInContent</code>. If you want multiple classname, only prefix the first with a dot.';

$_lang['setting_redactor.paragraphy'] = 'Paragraphy';
$_lang['setting_redactor.paragraphy_desc'] = 'When enabled, all stuff will be put inside <code>&lt;p&gt;</code> tags (paragraphs). Note that if you enable the <code>Linebreaks</code> setting, the paragraphy mode will be disabled.';

$_lang['setting_redactor.css'] = 'Stylesheet';
$_lang['setting_redactor.css_desc'] = 'Put in a full URL to a CSS file to use your own styling for formatting.';

$_lang['setting_redactor.iframe'] = 'Iframe';
$_lang['setting_redactor.iframe_desc'] = 'When enabled, the editor will be placed inside an iframe. This allows you to use the <code>Iframe CSS</code> setting to use your own CSS for the editor.';

$_lang['setting_redactor.linkProtocol'] = 'Protocol';
$_lang['setting_redactor.linkProtocol_desc'] = 'The protocol (<code>http://</code>, <code>https://</code> or leave empty) to build links with.';

$_lang['setting_redactor.mobile'] = 'Mobile';
$_lang['setting_redactor.mobile_desc'] = 'When enabled and the user visits on an identified phone or tablet (using barebones UA sniffing), Redactor will provide a simplified version of the editor in the form of a regular textarea instead of contenteditable fields.';

$_lang['setting_redactor.observeImages'] = 'Observe Images';
$_lang['setting_redactor.observeImages_desc'] = 'When enabled, clicking an image in the edit area will open up a modal window letting users change the alignment and add alt/title attributes.';

$_lang['setting_redactor.browse_recursive'] = 'Browse Recursive';
$_lang['setting_redactor.browse_recursive_desc'] = 'When enabled the image browser will recursively show subfolders of the image_upload_path in the media source. You may want to disable this if you have a large number of subfolders that are not used for browsing.';

$_lang['setting_redactor.date_files'] = 'Date Files';
$_lang['setting_redactor.date_files_desc'] = 'Enable this setting to have file uploads prefixed with a full timestamp to make sure file uploads are unique.';

$_lang['setting_redactor.date_images'] = 'Date Images';
$_lang['setting_redactor.date_images_desc'] = 'Enable this setting to have image uploads prefixed with a full timestamp to make sure image uploads are unique.';

$_lang['setting_redactor.file_upload_path'] = 'File Upload Path';
$_lang['setting_redactor.file_upload_path_desc'] = 'The path, relative to the root of the media source as defined by the <code>Media Source</code> setting, in which file uploads should be placed. You can use the following placeholders (no output filters, please):
    <ul>
        <li><code>&#91;&#91;+year&#93;&#93;</code> numeric representation (4 digits) of the current year.</li>
        <li><code>&#91;&#91;+month&#93;&#93;</code> numeric representation (2 digits) of the current month with leading zero</em></li>
        <li><code>&#91;&#91;+day&#93;&#93;</code> numeric representation (2 digits) of the current day in the month</li>
        <li><code>&#91;&#91;+user&#93;&#93;</code> the ID of the currently logged in user.</li>
        <li><code>&#91;&#91;+username&#93;&#93;</code> the username of the currently logged in user.</li>
        <li><code>&#91;&#91;+pagetitle&#93;&#93;</code> the pagetitle of the current resource.</li>
        <li><code>&#91;&#91;+id&#93;&#93;</code> the id of the currently resource.</li>
        <li><code>&#91;&#91;+alias&#93;&#93;</code> the alias of the current resource.</li>
    </ul>
    Also see <code>Image Upload Path</code>, <code>Media Source</code> and <a href="https://www.modmore.com/extras/redactor/documentation/media-sources/">Using Media Sources with Redactor</a>';

$_lang['setting_redactor.image_upload_path'] = 'Image Upload Path';
$_lang['setting_redactor.image_upload_path_desc'] = 'The path, relative to the root of the media source as defined by the <code>Media Source</code> setting, in which image uploads should be placed. You can use the following placeholders (no output filters, please):
    <ul>
        <li><code>&#91;&#91;+year&#93;&#93;</code> numeric representation (4 digits) of the current year.</li>
        <li><code>&#91;&#91;+month&#93;&#93;</code> numeric representation (2 digits) of the current month with leading zero</em></li>
        <li><code>&#91;&#91;+day&#93;&#93;</code> numeric representation (2 digits) of the current day in the month</li>
        <li><code>&#91;&#91;+user&#93;&#93;</code> the ID of the currently logged in user.</li>
        <li><code>&#91;&#91;+username&#93;&#93;</code> the username of the currently logged in user.</li>
        <li><code>&#91;&#91;+pagetitle&#93;&#93;</code> the pagetitle of the current resource.</li>
        <li><code>&#91;&#91;+id&#93;&#93;</code> the id of the currently resource.</li>
        <li><code>&#91;&#91;+alias&#93;&#93;</code> the alias of the current resource.</li>
    </ul>
    Also see <code>Image Upload Path</code>, <code>Media Source</code> and <a href="https://www.modmore.com/extras/redactor/documentation/media-sources/">Using Media Sources with Redactor</a>';
    
$_lang['setting_redactor.file_upload_path'] = 'File Upload Path';
$_lang['setting_redactor.file_upload_path_desc'] = 'The path, relative to the root of the media source as defined by the <code>Media Source</code> setting, in which file uploads should be placed. You can use the following placeholders (no output filters, please):
    <ul>
        <li><code>&#91;&#91;+year&#93;&#93;</code> numeric representation (4 digits) of the current year.</li>
        <li><code>&#91;&#91;+month&#93;&#93;</code> numeric representation (2 digits) of the current month with leading zero</em></li>
        <li><code>&#91;&#91;+day&#93;&#93;</code> numeric representation (2 digits) of the current day in the month</li>
        <li><code>&#91;&#91;+user&#93;&#93;</code> the ID of the currently logged in user.</li>
        <li><code>&#91;&#91;+username&#93;&#93;</code> the username of the currently logged in user.</li>
        <li><code>&#91;&#91;+pagetitle&#93;&#93;</code> the pagetitle of the current resource.</li>
        <li><code>&#91;&#91;+id&#93;&#93;</code> the id of the currently resource.</li>
        <li><code>&#91;&#91;+alias&#93;&#93;</code> the alias of the current resource.</li>
    </ul>
    Also see <code>Image Upload Path</code>, <code>Media Source</code> and <a href="https://www.modmore.com/extras/redactor/documentation/media-sources/">Using Media Sources with Redactor</a>';

$_lang['setting_redactor.mediasource'] = 'Media Source';
$_lang['setting_redactor.mediasource_desc'] = 'Choose (or provide the ID of) a Media Source to use for uploading and browsing images and files. This can be any type of Media Source that implements uploading and browsing of images. </p>
    <p>Also see <code>File Upload Path</code>, <code>Image Upload Path</code> and <a href="https://www.modmore.com/extras/redactor/documentation/media-sources/">Using Media Sources with Redactor</a>';

$_lang['setting_redactor.prefetch_ttl'] = 'Prefetch TTL';
$_lang['setting_redactor.prefetch_ttl_desc'] = 'Used in the Resource search typeahead, the prefetch contains the top level resources that are published and not deleted. This data is preloaded when the typeahead field is instantiated, providing very quick access to important resources that may be requested, however the typeahead will continue to search further down the resource tree when the users start typing. The prefetch TTL is how long (in microseconds) the prefetch data should be considered valid and stored in the users\' LocalStorage.';

$_lang['setting_redactor.typeahead.include_introtext'] = 'Include Introtext';
$_lang['setting_redactor.typeahead.include_introtext_desc'] = 'When enabled, the typeahead will include the introtext for each of the resources, providing you with more information about the resource.';

$_lang['setting_redactor.airButtons'] = 'Air Buttons';
$_lang['setting_redactor.airButtons_desc'] = 'The buttons, separated by commas, that should be used in the toolbar which is visible when Air Mode is enabled and text is selected. See <code>Buttons</code> for the options. Use a <code>|</code> (pipe) to add a separator. Defaults to: <code>formatting, |, bold, italic, deleted, |, unorderedlist, orderedlist, outdent, indent, |, fontcolor, backcolor</code>';

$_lang['setting_redactor.buttonSource'] = 'Source Button';
$_lang['setting_redactor.buttonSource_desc'] = 'When disabled, the source button (<code>html</code> in the buttons configuration) will be removed.';

$_lang['setting_redactor.buttons'] = 'Buttons';
$_lang['setting_redactor.buttons_desc'] = 'The buttons that appear in the Redactor toolbar. Note that when using <code>Air Mode</code> you should configure <code>Air Buttons</code> instead. Use a <code>|</code> (pipe) to add a separator. Defaults to: <code>html, |, formatting, |, bold, italic,
    deleted, |, unorderedlist, orderedlist, outdent,
    indent, |, image, video, file, table, link, |,
    fontcolor, backcolor, |, alignment, |, horizontalrule </code> Additional buttons that are available: <code>underline, alignleft, aligncenter, alignright, justify</code>';

$_lang['setting_redactor.colors'] = 'Colors';
$_lang['setting_redactor.colors_desc'] = 'The colors (hexcodes) that are available with the <code>fontcolor</code> and <code>backcolor</code> toolbar buttons. Defaults to: <code>#ffffff, #000000, #eeece1, #1f497d, #4f81bd, #c0504d, #9bbb59, #8064a2, #4bacc6, #f79646, #ffff00, #f2f2f2, #7f7f7f, #ddd9c3, #c6d9f0, #dbe5f1, #f2dcdb, #ebf1dd, #e5e0ec, #dbeef3, #fdeada, #fff2ca, #d8d8d8, #595959, #c4bd97, #8db3e2, #b8cce4, #e5b9b7, #d7e3bc, #ccc1d9, #b7dde8, #fbd5b5, #ffe694, #bfbfbf, #3f3f3f, #938953, #548dd4, #95b3d7, #d99694, #c3d69b, #b2a2c7, #b7dde8, #fac08f, #f2c314, #a5a5a5, #262626, #494429, #17365d, #366092, #953734, #76923c, #5f497a, #92cddc, #e36c09, #c09100, #7f7f7f, #0c0c0c, #1d1b10, #0f243e, #244061, #632423, #4f6128, #3f3151, #31859b, #974806, #7f6000</code>';

$_lang['setting_redactor.formattingTags'] = 'Formatting Tags';
$_lang['setting_redactor.formattingTags_desc'] = 'The options you get when clicking the <code>formatting</code> button in the Redactor toolbar. Defaults to: <code>p, blockquote, pre, h1, h2, h3, h4</code> which are the only currently supported formatting tags. (Need more? <a href="mailto:support@modmore.com?subject=I+need+more+formatting+tags+for+Redactor+because">Let us know!</a>)';

$_lang['setting_redactor.browse_recursive'] = 'Browse Recursive';
$_lang['setting_redactor.browse_recursive_desc'] = 'When enabled the image browser will recursively show subfolders of the image_upload_path in the media source. You may want to disable this if you have a large number of subfolders that are not used for browsing.';

$_lang['setting_redactor.image_browse_path'] = 'Image Browse Path';
$_lang['setting_redactor.image_browse_path_desc'] = 'The path to browse when choosing images, relative to the root of the media source as defined by the <code>Media Source</code> setting, in images which should be browsed through the choose image modal window.';

$_lang['setting_redactor.buttonFullScreen'] = 'Fullscreen Button';
$_lang['setting_redactor.buttonFullScreen_desc'] = 'When enabled, a fullscreen button will be located in the right of the toolbar.';

$_lang['setting_redactor.dynamicThumbs'] = 'Dynamic Thumbs';
$_lang['setting_redactor.dynamicThumbs_desc'] = 'When enabled, dynamic thumbnails will be generated for previewing images.';

$_lang['setting_redactor.displayImageNames'] = 'Display Image Names';
$_lang['setting_redactor.displayImageNames_desc'] = 'When enabled, file names will be displayed when browsing for images.';

$_lang['setting_redactor.cleanFileNames'] = 'Clean Files Names';
$_lang['setting_redactor.cleanFileNames_desc'] = 'When enabled, special characters will be removed from files on upload.';

$_lang['setting_redactor.file_browse_path'] = 'File Browse Path';
$_lang['setting_redactor.file_browse_path_desc'] = 'The path to browse when choosing files, relative to the root of the media source as defined by the <code>Media Source</code> setting, in which files should be available through the insert file modal window.';

$_lang['setting_redactor.browse_files'] = 'Browse Files';
$_lang['setting_redactor.browse_files_desc'] = 'When enabled, allows uploaded files to be selected.';

$_lang['redactor.browse_warning'] = "Uh oh, there aren't any images here. Change your image_browse_path setting to browse another location or upload some images to [[+path]].";
$_lang['redactor.browse_files_warning'] = "Uh oh, there aren't any files here. Change your file_browse_path setting to browse another location or upload some images to [[+path]].";

$_lang['setting_redactor.searchImages'] = "Search Images";
$_lang['setting_redactor.searchImages_desc'] = "When enabled, a search bar can be used to filter images in the choose image modal window.";

$_lang['setting_redactor.clipsJson'] = 'Clips JSON';
$_lang['setting_redactor.clipsJson_desc'] = 'If set and a valid JSON String, adds the Redactor Clips plugin to the toolbar.';

$_lang['setting_redactor.stylesJson'] = 'Styles JSON';
$_lang['setting_redactor.stylesJson_desc'] = 'If set and a valid JSON String, adds the Redactor Styles plugin to the toolbar.';

$_lang['setting_redactor.additionalPlugins'] = 'Additional Plugins';
$_lang['setting_redactor.additionalPlugins_desc'] = 'Define as a comma separated list of "pluginname:pluginfile" to load additional Redactor plugins. ';

$_lang['setting_redactor.fullpage'] = 'Fullpage';
$_lang['setting_redactor.fullpage_desc'] = 'Allows editing of a complete HTML-page (including html, head, body and other tags) in iframe and fullpage mode.';

$_lang['setting_redactor.dragUpload'] = 'Drag Upload';
$_lang['setting_redactor.dragUpload_desc'] = 'This setting allows users to drag and drop images from their computers into Redactor and upload these images to server. This feature works in all latest browsers, except for IE.';

$_lang['setting_redactor.convertImageLinks'] = 'Convert Image Links';
$_lang['setting_redactor.convertImageLinks_desc'] = 'Converts links like http://site.com/image.jpg into img tags upon pressing Return key.';

$_lang['setting_redactor.convertVideoLinks'] = 'Convert Video Links';
$_lang['setting_redactor.convertVideoLinks_desc'] = 'Converts links like https://www.youtube.com/watch?v=DcRp9V5GbqQ into Youtube embedded player upon pressing Return key.';

$_lang['setting_redactor.tidyHtml'] = 'Tidy HTML';
$_lang['setting_redactor.tidyHtml_desc'] = 'Set to false to turn off nice output code formatting.';

$_lang['setting_redactor.observeLinks'] = 'Observe Links';
$_lang['setting_redactor.observeLinks_desc'] = 'Set to true to allow follow/edit links by putting cursor to the link right in Redactor.';

//$_lang['setting_redactor.imageFloatMargin'] = 'Image Float Margin';
//$_lang['setting_redactor.imageFloatMargin_desc'] = 'Custom margin for images setting.';

$_lang['setting_redactor.tabSpaces'] = 'Tab Spaces';
$_lang['setting_redactor.tabSpaces_desc'] = 'Set to true to use space instead of margins for Chinese language.';

$_lang['setting_redactor.removeEmptyTags'] = 'Remove Empty Tags';
$_lang['setting_redactor.removeEmptyTags_desc'] = 'This setting allows to turn on and off removing of empty tags.';

$_lang['setting_redactor.sanitizeReplace'] = 'Sanitize Replace';
$_lang['setting_redactor.sanitizeReplace_desc'] = 'The replacement character used when sanitizing names of uploaded files.';

$_lang['setting_redactor.sanitizePattern'] = 'Sanitize Pattern';
$_lang['setting_redactor.sanitizePattern_desc'] = 'A RegEx pattern applied when sanitizing names of uploaded files.';

$_lang['setting_redactor.linkSize'] = 'Link Size';
$_lang['setting_redactor.linkSize_desc'] = 'Maximum number of characters when displaying a URL.';

$_lang['setting_redactor.advAttrib'] = 'Advanced Attributes';
$_lang['setting_redactor.advAttrib_desc'] = 'If Enabled attributes such as class, id, and title will be available when editing links and images.';

$_lang['setting_redactor.linkNofollow'] = 'Link No-Follow';
$_lang['setting_redactor.linkNofollow_desc'] = 'This setting will add nofollow attribute to the links added via Redactor.';

$_lang['setting_redactor.typewriter'] = 'Typewriter';
$_lang['setting_redactor.typewriter_desc'] = 'Stress-free typewriter mode. http://imperavi.com/redactor/examples/typewriter/';

$_lang['setting_redactor.buttonsHideOnMobile'] = 'Hidden Mobile Buttons';
$_lang['setting_redactor.buttonsHideOnMobile_desc'] = 'With this option, you can specify which buttons of the toolbar can be hidden on mobile devices.';

$_lang['setting_redactor.toolbarOverflow'] = 'Toolbar Overflow';
$_lang['setting_redactor.toolbarOverflow_desc'] = 'With this option, you can specify a toolbar button to build only one row on mobile devices.';

$_lang['setting_redactor.imageTabLink'] = 'Image Tab Link';
$_lang['setting_redactor.imageTabLink_desc'] = 'With this option you can enable/disabled a tab with insert image as link.';

$_lang['setting_redactor.cleanSpaces'] = 'Clean Spaces';
$_lang['setting_redactor.cleanSpaces_desc'] = 'Removes extra space in pasted text when true and leave extra spaces when \'false\'.';

$_lang['setting_redactor.predefinedLinks'] = 'Predefined Links';
$_lang['setting_redactor.predefinedLinks_desc'] = 'This setting allowing to add a list of predefined links in "Add link" modal. http://imperavi.com/redactor/docs/settings/#set-predefinedLinks';

$_lang['setting_redactor.shortcutsAdd'] = 'Additional Shortcuts';
$_lang['setting_redactor.shortcutsAdd_desc'] = 'This setting add your custom shortcuts to Redactor. http://imperavi.com/redactor/docs/settings/#set-shortcutsAdd';

$_lang['setting_redactor.commemorateRebecca'] = 'Commemorate Rebecca';
$_lang['setting_redactor.commemorateRebecca_desc'] = 'Wishes <a href="http://www.zeldman.com/2014/06/10/the-color-purple/" target="_blank">Rebecca Meyer\'s</a> a Happy Birthday by setting the Redactor toolbar to <strong style="color:#663399;color:rebeccapurple;">her favorite color</strong> the seventh of each June.';

$_lang['setting_redactor.toolbarFixed'] = 'Toolbar Fixed';
$_lang['setting_redactor.toolbarFixed_desc'] = 'If this option is turned on, Redactor\'s toolbar will remain at the top of the browser\'s window at all times. To disable you may need to set redactor.toolbarFixedBox to No.';

$_lang['setting_redactor.toolbarFixedBox'] = 'Toolbar Fixed Box';
$_lang['setting_redactor.toolbarFixedBox_desc'] = 'This option makes a fixed toolbar to the width of the editor.';



