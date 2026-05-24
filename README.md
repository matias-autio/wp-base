# WP Base

WordPress development environment with a Twenty Twenty-Five child theme, managed by Docker and Composer.

## Getting Started

```bash
composer install
docker compose up -d
```

Visit http://localhost:8080 and complete the WordPress setup.

## Custom CSS

Add your styles to:

```
wp-content/themes/twenty-twenty-five-child/css/custom.css
```

Changes are picked up automatically — no build step required.

## Installing a Plugin

```bash
composer require wpackagist-plugin/plugin-name
```

The plugin will be installed to `wp-content/plugins/` and available in the container immediately.

## Linting

```bash
composer lint        # check for coding standard issues
composer lint:fix    # auto-fix issues
```

## Updating WordPress

The WordPress version is pinned in `docker-compose.yaml`. To update:

1. Change the image tag (e.g. `wordpress:7.1.0-php8.3-apache`)
2. Rebuild the container:

```bash
docker compose down
docker compose up -d
```

Available tags: https://hub.docker.com/_/wordpress/tags
