# PROJNAME

## Getting Started with this Charm-based Project

Welcome to the PROJNAME built upon the powerful Charm framework! 
Setting up the project is a breeze, and you'll be up and running in no time.
Just follow these simple steps, and you'll be coding with the Force on your side. 🚀

1. Clone the repository: Clone the PROJNAME's repo to a new folder on your local machine.
   ```bash
   git clone https://github.com/youruser/PROJNAME.git /path/to/PROJNAME
   cd /path/to/PROJNAME
   ```
2. Install dependencies: Run `composer install` to fetch all required dependencies.
   ```bash
   composer install
   ```
3. Create necessary directories: Ensure the var/cache, var/logs, and data directories are in place.
   ```bash
   mkdir -p var/cache var/logs data
   ```
4. Set permissions: If your web server runs as a different user, grant read, write, and execute permissions to the directories.
   ```bash
   chmod -R 0777 var/cache var/logs data
   ```
5. Create local environment: Execute bob c:env Local, and the trusty assistant will create a local environment for you.
   ```bash
   bob c:env Local
   ```
6. Depending on your project's setup you should now run any initial commands, like for migrating the database:
   ```bash
   bob db:sync
   ```
7. Install additionally needed packages depending on your project, like `npm install` for your node assets
8. Configure web server: Update your Apache or Nginx configuration to handle rewrites to the `index.php` file.
   For apache2 you can find a `.htaccess` and for nginx a `nginx.conf` file in this repository.
9. If your project uses cron or the queue, make sure the commands are executed regularly, like `bob cron:run`.
   It is recommended to run the cron / queue daemon on linux hosts, but you can also use a classic systemd service
   or crontab. See `var/Services` for examples, including Initrc + OpenRC. You can also easily create a default
   systemd service for the cron daemon via `bob cron:info systemd`.
10. Open the new project in your browser or run a development server with `bob serve`.

For more information on setting up a charm project, see the [Charm Installation Guide](https://neoground.com/docs/charm/start.installation).

You can learn more about the Bob CLI tool in the [Bob Documentation](https://github.com/neoground/charm-toolkit).

