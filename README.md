# plugin-rnd-axm-ads
Publish AxM Ads on your website easily!

**Version: 1.0.0**

# Why do we use this?

As the Alexa Master community grows very fast, the company has developed an Ad Publisher tool named AxM Ads. It helps webmasters to monetize their websites by posting text/image/video ads on their pages. If you use RND Framework, it is really easy to render those ads using this plugin. 

# How to install?

1. Download and put **rnd-axm-ads** into plugins folder.
2. Register a free user account in www.alexamaster.net
3. Visit AxM Ads section and create your Ad Unit.
4. Put the Ad HTML Code on to your website.
5. Find your Publisher ID and copy it.
6. Replace {{YOUR-PUBLISHER-ID}} in main PHP file with it.
7. Create more Ad Units and enjoy!

# Special Note:

If you have read the official documentation carefully, you can see that each ad code has a unique HTML code. Depending on your page layout, this HTML code can be embedded anywhere on the page’s body. Also you can add different ad units to the same page under system limitations. Once you have placed HTML tags carefully, this plugin can render ads on those places automatically, if your Publisher ID is valid.


# Respect Privacy:

Everyone deserves to have an ads free experience, though we must monetize our traffic to survive. If you are a developer who respects privacy, you can turn off ads using a simple javascript variable defined “axmadsRespectPrivacy”. Also you can limit your ads by using a variable named “axmadsOnlyVIP” which will only pay you for  direct sales (Not for impressions or clicks).
