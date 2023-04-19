<?php
 /**
 * MyBB 1.8 Chinese (Simplified) Language Pack
 * https://github.com/delgh1/mybb-chinese-translation
 * Maintainer: Jing Luo
 * Apr 19, 2023
 */

// Help Document 1
$l['d1_name'] = "用户注册";
$l['d1_desc'] = "注册用户后获得的功能和好处。";
$l['d1_document'] = "论坛的一些部分可能要求你注册并登录。注册是免费的并且只花几分钟就可以完成。
<br /><br />你被鼓励注册；注册后你将可以发帖，设置偏好，维护个人资料。
<br /><br />一些功能基本上要求注册，例如订阅，更换风格，访问个人记事本，及给论坛成员发送电子邮件。";

// Help Document 2
$l['d2_name'] = "更新个人资料";
$l['d2_desc'] = "更新你的账号的个人资料。";
$l['d2_document'] = "你在浏览论坛的途中可能决定更新一些资料，例如你的即时消息账号，或者你的电子邮件地址。你可以从用户控制面板中更改任何这些信息。要访问用户控制面板，只需点击大多数页面的左上角的 \"用户控制面板\"。从那里在\"你的个人资料\"下选择合适的链接，更改或更新任何项目，然后按页面底端的提交按钮生效。";

// Help Document 3
$l['d3_name'] = "MyBB上cookies的使用";
$l['d3_desc'] = "MyBB使用cookies来保存一些关于你的注册的相关信息。";
$l['d3_document'] = "如果你已注册，MyBB使用cookies保存你的登录信息，如果未注册，保存你的上一次访问。
<br /><br />Cookies是小的文本文件保存在你的电脑上；这个论坛设置的cookies只能被用于这个网站，并没有安全风险。
<br /><br />Cookies在这个论坛上同时追踪你阅读的主题，以及何时阅读。
<br /><br />要清除本论坛设置的所有cookies，你可以点击 <a href=\"misc.php?action=clearcookies&amp;my_post_key={1}\">这里</a>。";

// Help Document 4
$l['d4_name'] = "登录和登出";
$l['d4_desc'] = "如何登录和登出。";
$l['d4_document'] = "你登录时，你在你的机器上设置一个cookie，以便无需每次浏览论坛时都输入用户名和密码。登出会清除cookie，以确保别人不能以你的身份浏览论坛。
<br /><br />要登录，按论坛右上角的登录链接。要登出，按同样位置的登出链接。如果你不能登出，清除你的机器上的所有cookies有同样的效果。";

// Help Document 5
$l['d5_name'] = "发布新主题";
$l['d5_desc'] = "在一个板块中发布一个新主题。";
$l['d5_document'] = "当你去到你有兴趣的板块并想发布新的主题，只需按板块上方或下方的 \"新主题\"按钮。请注意你可能没有在每个板块都有发布新主题的权限，因为管理员可能将发帖限制到管理人员，或者完全将板块存档。";

// Help Document 6
$l['d6_name'] = "发表回复";
$l['d6_desc'] = "回复一个板块的主题。";
$l['d6_document'] = "在你浏览论坛时，你可能会遇到你想回复的主题。要回复，按主题下方或上方的 \"新回复\" 按钮。注意，你的管理员可能限制特定个人在一些板块发布回复。
<br /><br />版主可能关闭一个主题，用户不能回复。没有管理员或版主的帮助，用户不能打开这样的主题。";

// Help Document 7
$l['d7_name'] = "MyCode";
$l['d7_desc'] = "学习如何使用MyCode来增强你的帖子。";
$l['d7_document'] = "你可以使用MyCode (BB Codes)来给你的忒子增加特效或格式。MyCodes时简化版的HTML，使用一种你可能已经熟悉的HTML tags格式。
<br /><br />下表是一个MyCodes的快速指南：
<br /><br />
<table class=\"tborder\" cellspacing=\"0\" cellpadding=\"5\" border=\"0\" style=\"width:90%\">
<tbody>
<tr>
<td class=\"tcat\" style=\"width:55%\"><span class=\"smalltext\"><strong>Input</strong></span></td>
<td class=\"tcat\" style=\"width:35%\"><span class=\"smalltext\"><strong>Output</strong></span></td>
<td class=\"tcat\" style=\"width:10%\"><span class=\"smalltext\"><strong>Notes</strong></span></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[b]</span>This text is bold<span style=\"font-weight: bold; color: #ff0000;\">[/b]</span></td>
<td class=\"trow1\"><span style=\"font-weight: bold;\" class=\"mycode_b\">This text is bold</span></td>
<td class=\"trow1\"></td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[i]</span>This text is italicized<span style=\"font-weight: bold; color: #ff0000;\">[/i]</span></td>
<td class=\"trow2\"><span style=\"font-style: italic;\" class=\"mycode_i\">This text is italicized</span></td>
<td class=\"trow2\"></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[u]</span>This text is underlined<span style=\"font-weight: bold; color: #ff0000;\">[/u]</span></td>
<td class=\"trow1\"><span style=\"text-decoration: underline;\" class=\"mycode_u\">This text is underlined</span></td>
<td class=\"trow1\"></td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[s]</span>This text is struck out<span style=\"font-weight: bold; color: #ff0000;\">[/s]</span></td>
<td class=\"trow2\"><span style=\"text-decoration: line-through;\" class=\"mycode_s\">This text is struck out</span></td>
<td class=\"trow2\"></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[url]</span>http://www.example.com/<span style=\"font-weight: bold; color: #ff0000;\">[/url]</span></td>
<td class=\"trow1\"><a href=\"http://www.example.com/\" class=\"mycode_url\" rel=\"nofollow\">http://www.example.com/</a></td>
<td class=\"trow1\">URLs will auto-link if proper protocol is included (vaild protocols are http, https, ftp, news, irc, ircs and irc6).</td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[url=http://www.example.com/]</span>Example.com<span style=\"font-weight: bold; color: #ff0000;\">[/url]</span></td>
<td class=\"trow2\"><a href=\"http://www.example.com/\" class=\"mycode_url\" rel=\"nofollow\">Example.com</a></td>
<td class=\"trow2\"></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[email]</span>example@example.com<span style=\"font-weight: bold; color: #ff0000;\">[/email]</span></td>
<td class=\"trow1\"><a href=\"mailto:example@example.com\" class=\"mycode_email\">example@example.com</a></td>
<td class=\"trow1\"></td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[email=example@example.com]</span>E-mail Me!<span style=\"font-weight: bold; color: #ff0000;\">[/email]</span></td>
<td class=\"trow2\"><a href=\"mailto:example@example.com\" class=\"mycode_email\">E-mail Me!</a></td>
<td class=\"trow2\">A subject can be included by adding <strong>?subject=Subject Here</strong> after the email address.</td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[quote]</span>Quoted text will be here<span style=\"font-weight: bold; color: #ff0000;\">[/quote]</span></td>
<td class=\"trow1\"><blockquote class=\"mycode_quote\"><cite>Quote:</cite>Quoted text will be here</blockquote></td>
<td class=\"trow1\"></td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[quote='Admin' pid='1' dateline='946684800']</span>Quoted text will be here<span style=\"font-weight: bold; color: #ff0000;\">[/quote]</span></td>
<td class=\"trow2\"><blockquote class=\"mycode_quote\"><cite><span> (01-01-2000, 12:00 AM)</span>Admin Wrote:  <a href=\"http://www.example.com/showthread.php?pid=1#pid1\" class=\"quick_jump\" rel=\"nofollow\"></a></cite>Quoted text will be here</blockquote></td>
<td class=\"trow2\">This format is used when quoting posts. <strong>pid</strong> links to a post, <strong>dateline</strong> is a <a href=\"https://www.unixtimestamp.com/\">UNIX timestamp</a>.</td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[code]</span>Text with preserved formatting<span style=\"font-weight: bold; color: #ff0000;\">[/code]</span></td>
<td class=\"trow1\"><div class=\"codeblock\"><div class=\"title\">Code:</div><div class=\"body\" dir=\"ltr\"><code>Text with preserved formatting</code></div></div></td>
<td class=\"trow1\"></td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[php]</span>&lt;?php echo \"Hello world!\";?&gt;<span style=\"font-weight: bold; color: #ff0000;\">[/php]</span></td>
<td class=\"trow2\"><div class=\"codeblock phpcodeblock\"><div class=\"title\">PHP Code:</div><div class=\"body\"><div dir=\"ltr\"><code><span style=\"color: #0000BB\">&lt;?php&nbsp;</span><span style=\"color: #007700\">echo&nbsp;</span><span style=\"color: #DD0000\">\"Hello&nbsp;world!\"</span><span style=\"color: #007700\">;</span><span style=\"color: #0000BB\">?&gt;</span></code></div></div></div></div></td>
<td class=\"trow2\"></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[img]</span>https://secure.php.net/images/php.gif<span style=\"font-weight: bold; color: #ff0000;\">[/img]</span></td>
<td class=\"trow1\"><img src=\"https://secure.php.net/images/php.gif\" class=\"mycode_img\"></td>
<td class=\"trow1\"></td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[img=50x50]</span>https://secure.php.net/images/php.gif<span style=\"font-weight: bold; color: #ff0000;\">[/img]</span></td>
<td class=\"trow2\"><img src=\"https://secure.php.net/images/php.gif\" width=\"50\" height=\"50\" class=\"mycode_img\"></td>
<td class=\"trow2\">Format is width x height</td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[color=red]</span>This text is red<span style=\"font-weight: bold; color: #ff0000;\">[/color]</span></td>
<td class=\"trow1\"><span style=\"color: red;\" class=\"mycode_color\">This text is red</span></td>
<td class=\"trow1\">Can use either <a href=\"https://www.w3schools.com/cssref/css_colors.asp\">CSS color name</a> or HEX code.</td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[size=large]</span>This text is large<span style=\"font-weight: bold; color: #ff0000;\">[/size]</span></td>
<td class=\"trow2\"><span style=\"font-size: large\" class=\"mycode_size\">This text is large</span></td>
<td class=\"trow2\">Acceptable values: xx-small, x-small, small, medium, large, x-large, xx-large</td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[size=30]</span>This text is 30px<span style=\"font-weight: bold; color: #ff0000;\">[/size]</span></td>
<td class=\"trow1\"><span style=\"font-size: 30px\" class=\"mycode_size\">This text is 30px</span></td>
<td class=\"trow1\">Accepts number from 1 to 50</td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[font=Impact]</span>This font is Impact<span style=\"font-weight: bold; color: #ff0000;\">[/font]</span></td>
<td class=\"trow2\"><span style=\"font-family: Impact;\" class=\"mycode_font\">This font is Impact</span></td>
<td class=\"trow2\">Font must be installed on your computer</td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[align=center]</span>This is centered<span style=\"font-weight: bold; color: #ff0000;\">[/align]</span></td>
<td class=\"trow1\"><div style=\"text-align: center;\" class=\"mycode_align\">This is centered</div></td>
<td class=\"trow1\">Acceptable values: left, center, right, justify</td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[list]</span><br />[*]List Item #1<br />[*]List Item #2<br />[*]List Item #3<br /><span style=\"font-weight: bold; color: #ff0000;\">[/list]</span></td>
<td class=\"trow2\"><ul class=\"mycode_list\"><li>List item #1</li><li>List item #2</li><li>List Item #3</li></ul></td>
<td class=\"trow2\"></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[list=1]</span><br />[*]List Item #1<br />[*]List Item #2<br />[*]List Item #3<br /><span style=\"font-weight: bold; color: #ff0000;\">[/list]</span></td>
<td class=\"trow1\"><ol class=\"mycode_list\" type=\"1\"><li>List item #1</li><li>List item #2</li><li>List Item #3</li></ol></td>
<td class=\"trow1\"><strong>1</strong> can be used for a numbered list, <strong>a</strong> can be used for an alphabetical list, <strong>i</strong> for a roman numerals list.</td>
</tr>
<tr>
<td class=\"trow2\">A line that<span style=\"font-weight: bold; color: #ff0000;\">[hr]</span>divides</td>
<td class=\"trow2\">A line that<hr class=\"mycode_hr\">divides</td>
<td class=\"trow2\"></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[video=youtube]</span>https://www.youtube.com/watch?v=dQw4w9WgXcQ<span style=\"font-weight: bold; color: #ff0000;\">[/video]</span></td>
<td class=\"trow1\"><iframe src=\"//www.youtube.com/embed/dQw4w9WgXcQ\" allowfullscreen=\"\" width=\"460\" height=\"255\" frameborder=\"0\"></iframe></td>
<td class=\"trow1\">Currently accepts Dailymotion, Facebook, LiveLeak, Metacafe, Mixer, MySpace TV, Twitch, Vimeo, Yahoo Videos and YouTube.</td>
</tr>
</tbody></table>
<br /><br />另外，管理员可能创建了更多MyCodes以供使用。关于是否有及如何使用，请联络管理员。";
