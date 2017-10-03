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
