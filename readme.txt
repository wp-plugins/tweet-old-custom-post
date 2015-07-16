=== Tweet Old Custom Post ===
Contributors: dejanmarkovic,nytogroup
Tags:Tweet Old Custom Post, Tweet old post, Tweets, Promote old posts by tweeting them, Promote old custom posts,Tweet custom posts, Tweet cpt's,  Twitter, Auto Tweet, Hashtags, Twitter Hashtags, Tweet Posts, Tweet, Post Tweets, Wordpress Twitter Plugin, Twitter Plugin, Tweet Selected Posts, Twitter, Promote Posts, Tweet Random Post, Share Post, Promote Post, Post Tweets, Wordpress Twitter, Drive Traffic, Tweet Selected Posts
Requires at least: 2.7
Tested up to: 4.2
Stable tag: trunk
Donate Link: : http://nytogroup.com/tweet-old-custom-post/
License: GPLv2 or later


Plugin that automatically tweets your old posts (including custom posts) which helps you increase the traffic on your website.

== Description ==

Tweet Old Custom Post is a plugin designed to tweet your old posts which helps you increase the traffic on your website + keeps your old posts alive.

Tweet Old Custom Post is an updated version of Tweet Old Post. Since the version 4.10, Tweet Old Post, has been rewritten and it has a totally new look and a code-base. Tweet Old Custom Post is using the old code-base (based on version 4.10), which has been extended with custom posts features.

This plugin helps you to keep your old posts alive by tweeting about them and driving more traffic to them (your website) from twitter. It also helps you to promote your content. You can set the time and the number of tweets to post, to attract more traffic.For questions, comments, or feature requests, contact us: contact us: <a target="blank" href="http://dejanmarkovic.com/">Dejan Markovic</a>  or <a target="blank" href="http://nytogroup.com/contact/">NYTO GROUP</a>.

For updates follow us on  <a target="blank" href="http://twitter.com/dejanmmarkovic/">@dejanmmarkovic</a> or <a target="blank" href="http://twitter.com/nytogroup/">@nytogroup</a>

Tweet Old Custom Post GitHub repo is available here <a target="blank" href="https://github.com/dejanmarkovic/tweet-old-custom-post">Tweet Old Custom Post</a>
Feel free to check my projects on GitHub <a target="blank" href="https://github.com/dejanmarkovic">https://github.com/dejanmarkovic</a>

**Tweet Old Custom Post provides the following features:**

- Share new and old posts,
- Choose the time between the tweets,
- Choose the number of posts to Tweet,
- Choose maximum age of the post in order to be eligible to tweet,
- Use hashtags to focus on topics,
- Include links back to your site,
- Exclude categories,
- Exclude specific posts,
- Exclude categories of custom posts.

**Please,let me know if you have any  ideas, comments!**

== Installation ==

Following are the steps to install the Tweet Old Custom Post plugin:

1. Download the latest version of the Tweet Old Post Plugin Classic to your computer from here.
2. With an FTP program, access your site's server.
3. Upload (copy) the Plugin file(s) or folder to the /wp-content/plugins folder.
4. In your WordPress Administration Panels, click on Plugins from the menu.
5. You should see Tweet Old Custom Post Plugin listed. If not, with your FTP program, check the folder to see if it is installed. If it isn't, upload the file(s) again. If it is, delete the files and upload them again.
6. To turn the Tweet Old Custom Post Plugin on, click Activate.
7. Check your Administration Panels or WordPress blog to see if the Plugin is working.
8. You can change the plugin options from Tweet Old Custom Post under settings menu.

Alternatively you can also follow the following steps to install the Tweet Old Custom Post plugin

1. In your WordPress Administration Panels, click on Add New option under Plugins from the menu.
2. Click on upload at the top.
3. Browse the location and select the Tweet Old Custom Post Plugin and click install now.
4. To turn the Tweet Old Custom Post Plugin on, click Activate.
5. Check your Administration Panels or WordPress blog to see if the Plugin is working.
6. You can change the plugins settings using Tweet Old Custom Post options under settings menu.

== Frequently Asked Questions ==

If you have any questions please contact me at,
http://dejanmarkovic.com/


**Plugin page gets blank while trying to authorize**

- Make sure "Tweet Old Custom Post Admin URL (Current URL)" is showing your current URL.
- Click on "Update Tweet Old Custom Post Options".
- Try to authorize again.
- If it still does not work try changing browser. Chrome does not work sometimes.
- If it still does not work download and install http://wordpress.org/plugins/clean-options/
- If it still does not work enable log, mail me the log file. Log file is generated in Tweet Old Custom Post root folder as log.txt


**Too many redirects while trying to authorize**

- Make sure "Tweet Old Custom Post Admin URL (Current URL)" is showing your current URL.
- Click on "Update Tweet Old Custom Post Options".
- Try to authorize again.


**If new version doesn't works**

- Manually upload it in your plugins folder, activate and use.
- Note: Do not upgrade your plugin if you want to use the older version.


**Tweet Old Custom Post does not posts any tweets?**

- If its not tweeting any tweets try playing around with the options. Try setting maxtweetage to none and try again.
- Try removing categories from excluded option. Some of them have posted issues of tweet not getting post when categories are selected in exclued category section.


**Tweet Old Custom Post giving SimpleXmlElement error?**

- If it is giving SimpleXmlElement error, check with your hosting provider on which version of PHP are they supporting.
Tweet Old Custom Post supports PHP 5 onwards. It will give SimpleXmlElement error if your hosting provider supports PHP 4
or PHP less than 5


**Tweets not getting posted?**

- If your tweets are not getting posted, try de-authorizing and again authorizing your twitter account with
plugin.


**Plugin flooded your tweeter account with tweets?**

- Please, check your settings and increase the minimum interval between tweets. If your plugin is not updated please update your plugin to the latest version.


**Not able to authorize your twitter account with Tweet Old Custom Post**

- If you are not able to authorise your twitter account set you blog URL in Administration → Settings → General.

**Any more questions?**

- Contact us at http://nytogroup.com/contact/


== Screenshots ==

1. Screenshot 1 Basic configurable options for Tweet Old Custom Post to function, with ability to tweet at random interval.
2. Screenshot 2 configurable categories. Select categories to exclude from tweeting.

== Changelog ==
version 15.0.1
1. Fix for code that is handling custom posts on themes that don't have CPT implementation in tocp-admin.php
2. Fix for code that is handling handling the css in in tocp-admin.php
3. Fixed multiple notices in debug mode
4. fixed the issue with admin URL