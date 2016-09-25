<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "وەڵامەکەت لەسەر ^site_title سەرنجێکی لەسەر هەیە ^c_handle:\n\n^open^c_content^close\n\nوەڵامەکەت بریتی بوو لە:\n\n^open^c_context^close\n\nتۆ دەتوانیت وەڵام بدەیتەوە بە زیادکردنی سەرنجی خۆت:\n\n^url\n\nسوپاس,\n\n^site_title",
		'a_commented_subject' => 'وەڵامەکەت ^site_title سەرنجێکی لەسەر هەیە',

		'a_followed_body' => "وەڵامەکەت لەسەر ^site_title پرسیارێکی پەیوەندیداری هەیە لەلایەن ^q_handle:\n\n^open^q_title^close\n\nوەڵامەکەت بریتی بوو:\n\n^open^a_content^close\n\nکلیک لە خوارەوە بکە بۆ وەڵامدانەوەی پرسیارە نوێکە:\n\n^url\n\nسوپاس,\n\n^site_title",
		'a_followed_subject' => ' وەڵامەکەت لەسەر ^site_title پرسیارێکی پەیوەندیداری لەسەر هەیە',

		'a_selected_body' => "پیرۆزە! وەڵامەکەت لەسەر ^site_title هەڵبژێردراوە بە باشترین لەلایەن ^s_handle:\n\n^open^a_content^close\n\nپرسیارەکە بریتی بوو لە:\n\n^open^q_title^close\n\nکلیک لە خوارەوە بکە بۆ بینینی وەڵامەکەت:\n\n^url\n\nسوپاس,\n\n^site_title",
		'a_selected_subject' => 'وەڵامەکەت لە ^site_title هەڵبژێردرا!',

		'c_commented_body' => "سەرنجێکی نوێ لەلایەن ^c_handle زیادکراوە لەدوای کۆمێنتەکەت لەسەر ^site_title:\n\n^open^c_content^close\n\nگفتوگۆکە ئەمەی خوارەوەیە:\n\n^open^c_context^close\n\nدەتوانیت وەڵام بدەیتەوە بە زیادکردنی سەرنجێکی تر:\n\n^url\n\nسوپاس،\n\n^site_title",
		'c_commented_subject' => 'سەرنجەکەت ^site_title زیادکرا بۆ',

		'confirm_body' => "بەیارمەتیت کلیک لەخوارەوە بکە بۆ دوپاتکردنەوەی ئیمەیڵەکەت بۆ ^site_title.\n\n^url\n\nسوپاس,\n^site_title",
		'confirm_subject' => '^site_title - دوپاتکردنەوەی ناونیشانی ئیمەیڵ',

		'feedback_body' => "سەرنجەکان:\n^message\n\nName:\n^name\n\nئیمەیڵ:\n^email\n\nپەڕی پێشتر:\n^previous\n\nUser:\n^url\n\nIP ناونیشان:\n^ip\n\nوێبگەڕ:\n^browser",
		'feedback_subject' => '^ هەڵسەنگاندن',

        'flagged_body' => "بابەتێک لەلایەن ^p_handle ^flags وەریگرتووە:\n\n^open^p_context^close\n\nکلیک لەخوارەوە بکە بۆ بینینی بابەتەکە:\n\n^url\n\n\nکلیک لەخوارەوە بکە بۆ پێداچوونەوە بە گشت بابەتە نیشان کراوەکان\n\n^a_url\n\n\nسوپاس،\n\n^site_title",
		'flagged_subject' => 'بابەتێکی ئاڵا لەسەرکراوی هەیە ^site_title',

		'moderate_body' => "بابەتێک لەلایەن ^p_handle پێویستی بە داناپێدانانی تۆیە:\n\n^open^p_context^close\n\nکلیک لەخوارەوە بکە بۆ پەسەندکردن یان هەڵوەشاندنەوەی بابەتەکە:\n\n^url\n\n\nکلیک لەخوارەوە بکە بۆ پێداچوونەوە بە گشت بابەتە ڕیزکراوەکان:\n\n^a_url\n\nسوپاس,\n\n^site_title",
		'moderate_subject' => '^site_title سەرپەرشتیاریکردن',

		'new_password_body' => "وەشەی تێپەڕبوونی نوێت بۆ ^site_title is below.\n\nوشەی تێپەڕبوون: ^password\n\nوا پێشنیار کراوە کە  ڕاستەوخۆ ئەم وشەی تێپەڕبوونە بگۆڕیت لە دوای چوونە ژوورەوەت.\n\nسوپاس,\n^site_title\n^url",
		'new_password_subject' => '^site_title - وشەی تێپەڕبوونە نوێکەت',

		'private_message_body' => "پەیامێکی تایبەتیت بۆ نێردراوە لەلایەن ^f_handle لەسەر ^site_title:\n\n^open^message^close\n\n^moreسوپاس,\n\n^site_title\n\n\nبۆ بەستکردنی پەیامە تایبەتییەکان, سەردانی پەڕی هەژمارەکەت بکە:\n^a_url",
		'private_message_info' => "زانیاری زیاتر دەربارەی ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "کلیک لەخوارەوە بکە بۆ وەڵامدانەوەی ^f_handle بە پەیامی تایبەتی:\n\n^url\n\n",
		'private_message_subject' => 'پەیام لەلایەن ^f_handle لەسەر ^site_title',

		'q_answered_body' => "پرسیارەکەت لەسەر ^site_title وەڵامدراوەتەوە لەلایەن ^a_handle:\n\n^open^a_content^close\n\nپرسیارەکەت بریتی بوو:\n\n^open^q_title^close\n\nئەگەر ئارەزووی ئەم پرسیارە دەکەیت, دەتوانیت وەکو باشترین هەڵی بژێریت:\n\n^url\n\nسوپاس,\n\n^site_title",
		'q_answered_subject' => 'پرسیارەکەت ^site_title وەڵامدرایەوە',

		'q_commented_body' => "پرسیارەکەت لەسەر ^site_title سەرنجێکی لەسەر هەیە لەلایەن ^c_handle:\n\n^open^c_content^close\n\nپرسیرەکەت بریتی بوو لە:\n\n^open^c_context^close\n\nدەتوانیت وەڵام بدەیتەوە بە زیادکردنی وەڵامی خۆت:\n\n^url\n\nسوپاس,\n\n^site_title",
		'q_commented_subject' => 'پرسیارەکەت ^site_title سەرنجێکی لەسەر هەیە',

		'q_posted_body' => "پرسیارێکی نوێ ئاراستە کراوە لەلایەن ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nکلیک لە خوارەوە بکە بۆ بینینی پرسیارەکە:\n\n^url\n\nسوپاس,\n\n^site_title",
		'q_posted_subject' => '^site_title پرسیارێکی نوێ هەیە',

		'reset_body' => "بەیارمەتیت کلیک لەخوارەوە بکە بۆ نوێکردنەوەی وشەی تێپەڕبوونەکت بۆ  ^site_title.\n\n^url\n\nیان, یان کۆدەکە بنوسە لەم بۆشاییەی پێت دراوە.\n\nCode: ^code\n\nئەگەر داوات لێ نەکراوە بۆ نوێکردنەوەی وشەی تێپەڕبوونەکەت, بەیارمەتیت ئەم پەیامە پشتگوێ بخە.\n\nسوپاس،\n^site_title",
		'reset_subject' => '^site_title - نوێکردنەوەی تێپەڕە وشەی لەبیرکراو',

		'to_handle_prefix' => "^,\n\n",

		'welcome_body' => "سوپاس بۆ تۆمارکرنت بۆ ^site_title.\n\n^custom^confirmوردەکاری چوونە ژوورەوەت بەم شێوەیەی خوارەوەیە:\n\nن: ^handle\n\nئیمەیڵ: ^email\nوشەی تێپەڕبوون: ^password\n\nبە یارمەتیت ئەم زانیارییە باش بپارێزە بۆ داهاتوو.\n\nسوپاس,\n\n^site_title\n^url",
		'welcome_confirm' => "بە یارمەتیت کلیک لە خوارەوە بکە بۆ دوپاتکردنەوەی ئیمیڵەکەت.\n\n^url\n\n",
		'welcome_subject' => 'بەخێربێیت بۆ ^site_title!',
		'remoderate_body' => "بابەتێکی دەستکاری کراو لەلایەن ^p_handle requires your reapprovalپێویستی بە دووبارە دانپێدانانی تۆ هەیە:\n\n^open^p_context^close\n\nکلیک لەخوارەوە بکە بۆ دانپێدانان یان شاردنەوەی بابەتی دەستکاریکراو:\n\n^url\n\n\nکلیک لەخوارەوە بکە بۆ پێداچوونەوە بە هەموو بابەتە ڕیزکراوەکان\n\n^a_url\n\n\nسوپاس،\n\n^site_title",
		'remoderate_subject' => "^site_title چاودێریکردن",
		'u_registered_body' => "بەکارهێنەرێکی تازە تۆماربوو وەکو ^u_handle.\n\nلەخوارەوە کلیک بکە بۆ بینینی پڕۆفایلی بەکارهێنەر:\n\n^url\n\nسوپاس,\n\n^site_title",
		'u_registered_subject' => "^site_title بەکارهێنەرێکی تۆماربووی تازەی هەیە",
		'u_to_approve_body' => "بەکارهێنەرێکی تازە تۆماربوو وەکو ^u_handle.\n\nکلیک بکە بۆ دانپێدانان بە بەکارهێنەرەکە:\n\n^url\n\nکلیک لەخوارەوە بکە بۆ چاوخشاندن بەهەموو ئەو بەکارهێنەرانەی چاوەڕوانی دانپێدانان:\n\n^a_url\n\nسوپاس،\n\n^site_title",
		'u_approved_body' => "تۆ دەتوانیت پڕۆفایلە نوێکەت لێرە ببینیت:\n\n^url\n\nسوپاس،\n\n^site_title",
		'u_approved_subject' => "^site_title بەکارهێنەرەکەت دانی پێدانرا",
		'wall_post_body' => "^f_handle بابەتێکی لەسەر دیواری بەکارهێنەرکەت کرد لە ^site_title:\n\n^open^post^close\n\nدەتوانی لێرە وەڵامی بابەتەکە بدەیتەوە:\n\n^url\n\nسوپاس،\n\n^site_title",
		'wall_post_subject' => "بابەت بنوسە لەسەر ^site_title دیوارەکەت",
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/