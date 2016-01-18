# Active Directory test for PHP

This is a repository used to test Active Directory connections from PHP.

## Installation

Make sure you have Composer installed. The [global  installation is recommended](https://getcomposer.org/doc/00-intro.md#globally) on Linux/Unix systems, but things are a bit different [on Windows machines](https://getcomposer.org/doc/00-intro.md#installation-windows).

```bash
# get the currenr repository
$ git clone git@github.com:tekkie/ad-php.git

# grab dependencies
$ cd ad-php
$ composer install
```

## Usage

```bash
# success case
$ php demo.php
```

```bash
# invalid admin credentials
$ php demo-error.php

Connection issue:
    Bind to Active Directory failed. Check the login credentials and/or server details. AD said: Invalid DN syntax%
```
