# Plate

## How to use Plate?
* Download or clone the repository into your `wp-content/themes` folder
* Rename the theme folder
* Change `Theme Name` and `Text Domain` in `style.css`
* Activate the theme in the WordPress back end under `Appearance > Themes`
* Replace `favicon.ico` and `favicon.png`
* Replace `screenshot.png`
* Replace images in the `library/images` folder
* Paste your CSS and JS files into the `library/assets` folder
* If you use Bower or NPM, paste the folders and manifest files into the theme root directory
* Remove jQuery from your pasted JS files since we're using the jQuery provided by WordPress
* Update the Bower or NPM paths in your CSS and JS files
* Drop your theme folder into CodeKit
* Change the CSS and JS paths in the `plate_scripts_and_styles` function in `functions.php`
* Install the plugin `Disable Gutenberg` and activate it
* Install the plugin `Advanced Custom Fields PRO` and activate it
* Change the menus in the `register_nav_menus` function in `functions.php`
* Change the `header.php`
* Change the `footer.php`
* Add your ACF field groups in the WordPress back end under `Custom Fields`
* Change the `page.php`
* Change the `page-custom.php` and add more templates if necessary
* Change the `404.php`

## Recommended plugins
* [Autoptimize](https://wordpress.org/plugins/autoptimize/)
* [Optimize Database after Deleting Revisions](https://wordpress.org/plugins/rvg-optimize-database/)
* [Regenerate Thumbnails](https://wordpress.org/plugins/regenerate-thumbnails/)
* [Search & Replace](https://wordpress.org/plugins/search-and-replace/)
* [WP Super Cache](https://wordpress.org/plugins/wp-super-cache/)
* [Wordfence Security – Firewall & Malware Scan](https://wordpress.org/plugins/wordfence/)
* [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/)
* [ACF Content Analysis for Yoast SEO](https://wordpress.org/plugins/acf-content-analysis-for-yoast-seo/)
