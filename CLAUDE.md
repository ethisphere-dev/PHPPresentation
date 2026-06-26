# PHPPresentation

PHP library for reading and writing presentation files (PPTX, ODP).

## Fork status: frozen

This is a **frozen fork** of [`PHPOffice/PHPPresentation`](https://github.com/PHPOffice/PHPPresentation), intentionally kept on a ~2023-era base (roughly 100+ commits behind upstream's tip). Do not try to sync it to upstream as routine maintenance.

- **Why it was forked:** chart bugs the upstream maintainer wasn't merging at the time (axis min/max bounds = 0, mixed numeric/string series values, default axis format code), plus a Lato default-font change that worked around not being able to set the font from the ECA app.
- **Why those reasons are mostly gone:** as of 2026-06 every one of those bugs is fixed upstream (the bounds fix is our own upstream PR [#771](https://github.com/PHPOffice/PHPPresentation/pull/771)). The only genuinely fork-unique change left is the **Lato default font** in `src/PhpPresentation/Style/Font.php` (Calibri -> Lato).
- **Why it stays frozen:** ECA is largely on ice, so the cost of regression-testing the consuming app against a library ~3 years newer has no payoff. We accept staying on the 2023 base.

**If ECA comes back and an upgrade is wanted**, do not do a 3-way merge from upstream (it conflicts in every patched file). Instead: branch off `develop`, replace the whole tree wholesale with upstream's tip, then re-apply the Lato default on top. That branch descends from `develop`, so it merges conflict-free with no manual resolution.

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
