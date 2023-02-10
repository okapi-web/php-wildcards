<!--suppress HtmlDeprecatedAttribute -->
<h1 align="center">PHP Wildcards</h1>

<!-- Main Badges -->
<p align="center">
  <!-- License: MIT -->
  <a href="https://opensource.org/licenses/MIT" target="_blank">
    <img alt="License: MIT" src="https://img.shields.io/badge/License-MIT-9C0000.svg?labelColor=ebdbb2&style=flat&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCI+PHBhdGggdmVjdG9yLWVmZmVjdD0ibm9uLXNjYWxpbmctc3Ryb2tlIiBkPSJNMCAyLjk5NWgxLjI4djguMDFIMHpNMi41NCAzaDEuMjh2NS4zNEgyLjU0em0yLjU1LS4wMDVoMS4yOHY4LjAxSDUuMDl6bTIuNTQuMDA3aDEuMjh2MS4zMzZINy42M3oiIGZpbGw9IiM5YzAwMDAiLz48cGF0aCB2ZWN0b3ItZWZmZWN0PSJub24tc2NhbGluZy1zdHJva2UiIGQ9Ik03LjYzIDUuNjZoMS4yOFYxMUg3LjYzeiIgZmlsbD0iIzdjN2Q3ZSIvPjxwYXRoIHZlY3Rvci1lZmZlY3Q9Im5vbi1zY2FsaW5nLXN0cm9rZSIgZD0iTTEwLjE3NyAzLjAwMmgzLjgyNnYxLjMzNmgtMy44MjZ6bS4wMDMgMi42NThoMS4yOFYxMWgtMS4yOHoiIGZpbGw9IiM5YzAwMDAiLz48L3N2Zz4="/>
  </a>

  <!-- Twitter: @WalterWoshid -->
  <a href="https://twitter.com/WalterWoshid" target="_blank">
    <img alt="Twitter: @WalterWoshid" src="https://img.shields.io/badge/@WalterWoshid-Twitter?labelColor=ebdbb2&style=flat&logo=twitter&logoColor=458588&color=458588&label=Twitter"/>
  </a>

  <!-- PHP: >=8.0 -->
  <a href="https://www.php.net" target="_blank">
    <img alt="PHP: >=8.0" src="https://img.shields.io/badge/PHP->=8.0-4C5789.svg?labelColor=ebdbb2&style=flat&logo=php&logoColor=4C5789"/>
  </a>

  <!-- Packagist -->
  <a href="https://packagist.org/packages/okapi-web/php-wildcards" target="_blank">
    <img alt="Packagist" src="https://img.shields.io/packagist/v/okapi-web/php-wildcards?label=Packagist&labelColor=ebdbb2&style=flat&color=fe8019&logo=packagist"/>
  </a>

  <!-- Build -->
  <!--suppress HtmlUnknownTarget -->
  <a href="../../actions/workflows/tests.yml" target="_blank">
    <img alt="Build" src="https://img.shields.io/github/actions/workflow/status/okapi-web/php-wildcards/tests.yml?label=Build&labelColor=ebdbb2&style=flat&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIGhlaWdodD0iMTYiPjxwYXRoIGZpbGw9IiM2YWFiMjAiIGQ9Ik0zMy45MTQgNDEzLjYxMmgxNDkuNTV2MjcuNTk1SDI3LjQ5NGMtMjYuMzQ4IDAtMzQuMTM2LTEzLjE5NC0yMS43MjktMzQuMzFMMTM3LjkxIDE4Ny43NTNWNjEuOTc1aC0yNi4wNzVjLTE5LjUwNCAwLTE5LjUwNC0yNy41OTUgMC0yNy41OTVoMTg5LjkzYzE5LjUwNSAwIDE5LjUwNSAyNy41OTUgMCAyNy41OTVIMjc1LjY5djEzMi44MjhoLTI3Ljk2M1Y2MS45NzVoLTgxLjg1NHYxMzIuODI4TDMzLjkxNCA0MTMuNjEyem0xMzUuNi0xNjkuMTg3TDg0LjY5MiAzODYuNTc0aDcwLjYwMWwxMDQuMzc1LTExMi45MDctMTUuNTgyLTI5LjI0MmgtNzQuNTd6bTE0NS45OTYgOS43ODNMMjA5LjUgMzY3LjUwNmwxMDYuMDEgMTEwLjI4NiAzMy41MzgtMzMuNTM4LTgwLjY1LTc2Ljc0OCA4MC42NS03OS43Ni0zMy41MzgtMzMuNTM4em01Ni45NDMgMzMuNTM3IDgwLjY1IDc5Ljc2LTgwLjY1IDc2Ljc1IDMzLjUzOCAzMy41MzdMNTEyIDM2Ny41MDYgNDA1Ljk5IDI1NC4yMDhsLTMzLjUzNyAzMy41Mzd6Ii8+PC9zdmc+">
  </a>
</p>

<!-- Coverage -->
<p align="center">
  <!-- Coverage - PHP 8.0 -->
  <a href="https://app.codecov.io/gh/okapi-web/php-wildcards/flags" target="_blank">
    <img alt="Coverage - PHP 8.0" src="https://img.shields.io/codecov/c/github/okapi-web/php-wildcards?flag=ubuntu-latest-8.0&label=Coverage - PHP 8.0&labelColor=ebdbb2&style=flat&logo=codecov&logoColor=FFC107&color=FFC107"/>
  </a>

  <!-- Coverage - PHP 8.1 -->
  <a href="https://app.codecov.io/gh/okapi-web/php-wildcards/flags" target="_blank">
    <img alt="Coverage - PHP 8.1" src="https://img.shields.io/codecov/c/github/okapi-web/php-wildcards?flag=ubuntu-latest-8.1&label=Coverage - PHP 8.1&labelColor=ebdbb2&style=flat&logo=codecov&logoColor=FFC107&color=FFC107"/>
  </a>

  <!-- Coverage - PHP 8.2 -->
  <a href="https://app.codecov.io/gh/okapi-web/php-wildcards/flags" target="_blank">
    <img alt="Coverage - PHP 8.2" src="https://img.shields.io/codecov/c/github/okapi-web/php-wildcards?flag=ubuntu-latest-8.2&label=Coverage - PHP 8.2&labelColor=ebdbb2&style=flat&logo=codecov&logoColor=FFC107&color=FFC107"/>
  </a>
</p>

<h2 align="center">A PHP library that converts wildcards to regular expressions.</h3>



## Installation

```shell
composer require okapi-web/php-wildcards
```



# Usage

```php
<?php

use Okapi\Wildcards\Regex;

// Simple wildcard
$regex = Regex::fromWildcard('*.php');
$regex->matches('index.php'); // true
$regex->matches('index.html'); // false

// Wildcard with groups
$regex = Regex::fromWildcard('(*.php)|(*.html)');
$regex->matches('index.php'); // true
$regex->matches('index.html'); // true
$regex->matches('index.js'); // false

// Wildcard with optional characters
$regex = Regex::fromWildcard('index[*].php');
$regex->matches('index.php'); // true
$regex->matches('index.test.php'); // true
$regex->matches('index_2.php'); // true

```

### Supported Wildcards

- <b>*</b>  = any number of characters<br>
- <b>?</b>  = any single character<br>
- <b>[ ]</b> = optional characters<br>
- <b>( )</b> = group<br>
- <b>|</b>  = or<br>



## Testing

- Run `composer run-script test`
  or
- Run `composer run-script test-coverage`



## Show your support

Give a ⭐ if this project helped you!



## 📝 License

Copyright © 2023 [Valentin Wotschel](https://github.com/WalterWoshid).<br>
This project is [MIT](https://opensource.org/licenses/MIT) licensed.
