# WordPress ReadMe

Welcome to WordPress, a semantic personal publishing platform!

## Installation: Famous 5-minute install

1. Unzip the package in an empty directory and upload everything.
2. Open `wp-admin/install.php` in your browser to set up a `wp-config.php` file with your database connection details. If this doesn't work, you can manually edit `wp-config-sample.php`.
3. Once the configuration file is set up, the installer will set up the necessary tables for your site.
4. If you didn't enter a password during installation, note the generated password or use `admin` as the username.
5. Log in to the admin dashboard using the credentials you provided.

## Updating

### Using the Automatic Updater

1. Open `wp-admin/update-core.php` in your browser and follow the instructions.

### Updating Manually

1. Before updating, ensure you have backups of any modified files.
2. Delete your old WordPress files, saving any modifications.
3. Upload the new files.
4. Visit `/wp-admin/upgrade.php` in your browser.

## Migrating from other systems

WordPress can import from various systems. Refer to [our import tools](wp-admin/import.php) after installing WordPress.

## System Requirements

- PHP version 7.0 or greater
- MySQL version 5.5.5 or greater

### Recommendations

- PHP version 7.4 or greater
- MySQL version 8.0 or greater OR MariaDB version 10.4 or greater
- The mod_rewrite Apache module
- HTTPS support
- A link to [wordpress.org](https://wordpress.org) on your site

## Online Resources

- [HelpHub](https://wordpress.org/documentation/)
- [The WordPress Blog](https://wordpress.org/news/)
- [WordPress Planet](https://planet.wordpress.org/)
- [WordPress Support Forums](https://wordpress.org/support/forums/)
- [WordPress IRC Channel](https://web.libera.chat/#wordpress)

## Final Notes

- Join us in the [Support Forums](https://wordpress.org/support/forums/) for suggestions, ideas, or bug reports.
- Explore the robust plugin API with the [Plugin Developer Handbook](https://developer.wordpress.org/plugins/).
- Share the love for WordPress!

## License

WordPress is released under the terms of the GPL (GNU General Public License) version 2 or any later version. See [license.txt](license.txt).
