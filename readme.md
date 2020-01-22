# Plate

## How to use Plate?
* Clone the repository into your `wp-content/themes` folder
* Rename the theme folder
* Change `Theme Name` in `style.css`
* Activate the theme in the WordPress back end under `Appearance > Themes`
* Delete other theme folders in the `wp-content/themes` folder
* Replace `favicon.ico` and `favicon.png`
* Replace `screenshot.png`
* Replace images in the `library/images` folder
* Paste your CSS and JS files into the `library/assets` folder
* If you use Bower or NPM, paste the folders and manifest files into the theme root directory
* Remove jQuery from your pasted JS files since we're using the jQuery provided by WordPress
* Update the Bower or NPM paths in your CSS and JS files
* Drop your theme folder into CodeKit
* Reconfigure your CSS and JS files in CodeKit (Check the option `Run Autoprefixer on the CSS file`)
* Change the CSS and JS paths in the `plate_scripts_and_styles` function in `functions.php`
* Restructure your CSS file in the `library/assets/css` folder
* Add `editor.scss` to your `library/assets/css` folder
* Add `gutenberg-editor.scss` to your `library/assets/css` folder
* Uncomment editor style in the `plate_lunch` function in `functions.php`
* Uncomment gutenberg editor style in the `plate_block_editor_styles` function in `functions.php`
* Add your Google Fonts to the `plate_fonts` function in `functions.php`
* Change the menus in the `register_nav_menus` function in `functions.php`
* Change the `header.php`
* Change the `footer.php`
* Change the `templates/loop.php`
* Change the `404.php`
* Install the plugin `Advanced Custom Fields PRO` and activate it
* Change the `title` in the `plate_block_categories` function in `functions.php`
* Add your Gutenberg/ACF blocks in the `plate_acf_block_types` function in `functions.php`
* Add your ACF field groups in the WordPress back end under `Custom Fields`
* Optionally uncomment and use the `acf_add_options_page` function in `functions.php`

## Suggested WordPress configuration
* Add .htaccess to the root folder
```
# BEGIN WordPress
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
# END WordPress
```
* Delete the `Hello Dolly` plugin under `Plugins > Installed Plugins`
* Change `Tagline` under `Settings > General`
* Change `Your homepage displays` to `A static page` under `Settings > Reading`
* Change `Common Settings` to `Post name` under `Settings > Permalinks`

## Set up WP Pusher
* Create a new remote repository on GitHub or BitBucket
* Connect your local repository to the remote repository with `git remote set-url origin <URL>`
* Commit and push your changes to the remote repository
* Install the plugin `WP Pusher` and activate it
* Install the theme under `WP Pusher > Install Theme` and check the option `Link installed theme`
* Optionally set up `Push-to-Deploy`

## Recommended plugins
* [Autoptimize](https://wordpress.org/plugins/autoptimize/)
* [Optimize Database after Deleting Revisions](https://wordpress.org/plugins/rvg-optimize-database/)
* [Regenerate Thumbnails](https://wordpress.org/plugins/regenerate-thumbnails/)
* [Search & Replace](https://wordpress.org/plugins/search-and-replace/)
* [WP Pusher](https://wppusher.com/)
* [WP Super Cache](https://wordpress.org/plugins/wp-super-cache/) or [LiteSpeed Cache](https://wordpress.org/plugins/litespeed-cache/)
* [Wordfence Security – Firewall & Malware Scan](https://wordpress.org/plugins/wordfence/)
* [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/)
* [ACF Content Analysis for Yoast SEO](https://wordpress.org/plugins/acf-content-analysis-for-yoast-seo/)
