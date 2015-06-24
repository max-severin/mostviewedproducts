# mostviewedproducts

## Description
Plugin for Webasyst Shop-Script 6 that keeps track of hits of products by users and shows most viewed products

## Installing
### Auto
...

### Manual
1. Get the code into your web server's folder /PATH_TO_WEBASYST/wa-apps/shop/plugins

2. Add the following line into the /PATH_TO_WEBASYST/wa-config/apps/shop/plugins.php file (this file lists all installed shop plugins):

		'mostviewedproducts' => true,

3. Done. Configure the plugin in the plugins settings tab of shop backend.

## Specificity
To output the array with most viewed products in shop frontend paste in the template the following code: **{shopMostviewedproductsPlugin::getMostViewedProducts($count)}**  
Where **$count** is a number of array elements