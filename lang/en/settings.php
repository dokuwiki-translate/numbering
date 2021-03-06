<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author Myron Turner <turnermm02@shaw.ca> 
 * @author Aleksandr Selivanov <alexgearbox@gmail.com>
 */
 
$lang['nstart']                = 'The number at which you want to start your count';
$lang['padding']              = 'Character to pad the number with, if the number is smaller than the minimum number of digits desired for the number';
$lang['pad_length']         = 'The minimum number of digits in the number string.  This does not control the size of the number itself, which can outgrow the padded size';
$lang['set_date']             = 'If set to true the date will be printed with the number';
$lang['datestyle']            = 'This sets the date format for strftime, which can include Dokuwiki format specifiers for bold, italic, etc. The default uses italics.';
$lang['format']                = 'This is a string which is used to format the returned value, where %d represents the date , %n the number, %i&lt;n&gt; image number n, and %R a text selection from the editor.   Like the date style this can also take format specifiers.<br /> For instance: ** Date: %d Number: %n **';
$lang['imgs']                   = 'Comma separated list of images located in data/media, e.g <b>:image.png,:wiki:other_image.png, . . .</b> These will be inserted into the format string in  the order in which they are listed at positions %i1. . . %i&lt;n&gt;';
$lang['use_imgs']            = 'If set to true, the plugin will attempt to insert images into the format string';
$lang['bureaucracy']     = 'For use with bureaucracy plugin. Comma separated list of numeric fields which require unique sequential numbers. See <a href="https://forum.dokuwiki.org/post/68370">forum</a>.'; 
$lang['multi_db'] = 'Use individual counts for each separate  bureaucracy number field specified in the <code>bureaucracy</code> option.';