# Databees Operations Dashboard

A call-center operations dashboard prototype built with Laravel and Filament.
It brings call volume, queue health, agent availability, staffing, handle time,
and skill-level performance into one rearrangeable workspace.

The repository currently uses deterministic demo data so the interface and
information hierarchy can be evaluated without an external telephony system.
It does not claim a live contact-center integration.

## What it demonstrates

- Call totals split into answered, abandoned, and IVR-dropped traffic.
- Average handle, talk, after-call-work, and speed-to-answer indicators.
- Five-second agent-status polling across available, connected, outbound,
  manual, after-call-work, and auxiliary states.
- Seven-day call-volume and agent-distribution charts.
- Searchable, sortable skill statistics covering queues, connected calls, and
  agent availability.
- A rearrangeable Filament dashboard with per-user widget preferences.

## Stack

- PHP 8.2+
- Laravel 12
- Filament 4 and Livewire 3
- Tailwind CSS 4 and Vite 7
- Pest 4
- Sushi for deterministic in-memory skill metrics

## Run locally

```bash
composer run setup
php artisan db:seed
php artisan serve
```

Open `http://127.0.0.1:8000/admin` and sign in with:

```text
Email: test@example.com
Password: password
```

For asset development, run `npm run dev` in a second terminal.

## Verify

```bash
composer test
vendor/bin/pint --format agent
```

## Data boundary

The widgets and `SkillStat` model contain sample operational figures. A real
deployment should replace that boundary with an authenticated, observable
adapter for its telephony or workforce source while keeping the dashboard
components independent of vendor payloads.

## License

MIT
