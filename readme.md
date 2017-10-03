# Installation
```
composer require --dev classy-org/php-classy-standards
```

# Use
```
# Testing php files comply with Classy coding standards
vendor/bin/php-classy-fixer fix --dry-run

# Fixing files
vendor/bin/php-classy-fixer fix

# Configure git to automatically fix php files on commit
ln -s ../../vendor/bin/php-classy-precommit-hook .git/hooks/pre-commit
```

Since php-classy-standards is a simple wrapper around [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) with
pre-configured rules we use at Classy, you can pass to it any argument [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
is accepting. Example:
```
vendor/bin/php-classy-fixer fix --dry-run ./folder/with/files/to/check
```
