# WpNoonce
Wordpress plugin implementing wp_nonce_* functionality in OOP.
This repo has been created for testing proposes *DO NOT USE FOR PRODUCTION* and think that it will be unmaintained and may disapear.

 # Installation and QA/QC
 To avoid pollution of packagist, the installation method will be manual.
 First clone the repo:
 ```
cd $YOURLIBPATH
git clone https://github.com/jgpATs2w/wpnoonce.git
cd wpnoonce
composer install
composer run test
composer run phpcs
```

# Usage

Add the package to your composer
 ```composer
"repositories":[
    ...
    {"type": "path", "url":"$YOURLIBPATH/wpnoonce/"}]
```
Ensure composer autoload is present in wp-config.php
 ```
require_once '/vendor/autoload.php';
```
Now you're ready to use WpNoonce:
```
$wpNonce= new Jgpats2w\WpNoonce\Nonce();
```

## Testing

For unit testing, simply install phpunit and run test:
```
composer install
comporer run test
```

For integration testing, [wp-cli](http://wp-cli.org/) is required. Considering you've a Wordpress installation
in `$WP_PATH`, a database user $DB_USER:$DB_PASS:
```
cd $WP_PATH
mkdir wp-content/plugins/wpnoonce
wp scaffold plugin-tests wpnoonce
# Type 'r' to replace default test configuration files
cd wp-content/plugins/wpnoonce
bin/install-wp-tests.sh wptestphpunit $DB_USER $DB_PASS localhost latest
# If you've already ddbb created include skip parameter: ... localhost latest true
 
cd $YOURLIBPATH/wpnoonce
composer run test-wp
```

For more information on automated testing wordpress plugins 
[read this post](https://www.smashingmagazine.com/2017/12/automated-testing-wordpress-plugins-phpunit/).

#  Decisions
The code structure is very basic, a simple class that allows sharing arguments betweent the different functions. I have not seeing the need to use any design
pattern.  
I've focused in TDD and code quality, preparing the environment to run automated unit and integration tests, and to continously check and fix deviations from
the coding standars (thanks to intellij+phpcs).
