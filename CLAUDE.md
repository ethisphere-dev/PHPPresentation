# PHPPresentation

PHP library for reading and writing presentation files (PPTX, ODP).

## Commands

| Task | Command |
|------|---------|
| Install | `composer install` |
| Test | `./vendor/bin/phpunit -c phpunit.xml.dist` |
| Static analysis | `./vendor/bin/phpstan analyse -c phpstan.neon.dist` |
| Run samples | `composer run samples` |

Run a single test file:
```sh
./vendor/bin/phpunit tests/PhpPresentation/Tests/Shape/Chart/Type/BarTest.php
```

## Project Structure

```
src/PhpPresentation/
  Reader/          # File format readers
  Writer/          # File format writers (PowerPoint2007, ODPresentation)
  Shape/           # Shape and drawing objects
  Slide/           # Slide management
  Style/           # Styling classes
tests/             # PHPUnit test suite
samples/           # 20+ example scripts demonstrating API usage
docs/              # mkdocs-based documentation
```

## Architecture

- PSR-4 autoloading via Composer (`PhpOffice\PhpPresentation` namespace)
- Supports PowerPoint 2007 (PPTX) and ODPresentation (ODP) formats
- Reader/Writer pattern — `Reader\PowerPoint2007` reads PPTX, `Writer\PowerPoint2007` writes it
- PHP 8.0+ required; CI runs on 8.1
- PHPStan level 6 for static analysis
- Code formatting via PHP-CS-Fixer (`.php-cs-fixer.dist.php`)
