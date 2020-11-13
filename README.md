# autoStartPhp - Tutorial
Supporting files for the blog article available at [https://pierre.photos/blog/article/9/php-check-start-script](https://pierre.photos/blog/article/9/php-check-start-script).

## Summary
- `autoStart.php`: check the status of a script and execute it if it's not already running.
- `main.php`: a basic process with a loop running for 2 minutes. This is the targeted script of `autoStart.php`
- `ProcessControler.php`: class containing the methodes used by `autoStart.php` to detect if the script is running or not, and to start it.
