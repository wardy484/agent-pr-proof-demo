# Codex PR Proof Demo

A deliberately small Laravel application for demonstrating a complete,
reviewer-friendly development loop:

1. start with a focused GitHub issue;
2. let Codex implement the change;
3. keep the pull request small;
4. prove the behaviour with tests and a screenshot or short video;
5. explain the change in a concise PR description.

The sample application is **ShipLog**, a tiny release board. It uses in-memory
sample data so the demo stays focused on workflow rather than infrastructure.

## Run locally

```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan serve
```

Visit <http://127.0.0.1:8000>.

## Check the baseline

```bash
php artisan test
vendor/bin/pint --test
```

## Demo boundary

The open GitHub issue is intentionally not implemented on the default branch.
That gap is the starting point for the Codex ticket-to-PR demonstration.
