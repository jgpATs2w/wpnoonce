# WP_Nonce
Wordpress plugin implementing wp_nonce_* functionality in OOP

 # Installation
 
 Add the package to your composer
 ```composer
"repositories":[
    ...
    {
      "type":"package",
      "package": {
        "name": "jgpats2w/wpnonce",
        "version":"master",
        "source": {
          "url": "https://github.com/jgpATs2w/WpNonce.git",
          "type": "git",
          "reference":"master"
        }
      }
    }
  ]
```

 ```

```


## Testing

For unit testing, simply install phpunit and run test:
```
cd $WP_PATH/wp-content/plugins
composer install
comporer run test
```

For integration testing, [wp-cli](http://wp-cli.org/) is required. Once wp is installed::
```
cd $WP_PATH
wp scaffold plugin-tests wp_nonce
# type 'r' twice to replace default test configuration files
cd wp-content/plugins/wp_nonce
bin/install-wp-tests.sh wptestphpunit wptest gsPZx5FZOT51T0jS localhost latest
#if you've already ddbb created include skip parameter: bin/install-wp-tests.sh wptestphpunit wptest gsPZx5FZOT51T0jS localhost latest true
phpunit tests/WPNonceTest.php

```

For more information on testing wordpress plugins [read this post](https://www.smashingmagazine.com/2017/12/automated-testing-wordpress-plugins-phpunit/).
