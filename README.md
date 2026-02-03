## Project Status

✔️ Stable version  
✔️ Core features implemented  
🧪 No longer actively developed# Portfolio — Stéphane Mougeot

Personal developer portfolio focused on **PHP / Symfony backend development**.

Symfony-based project highlighting backend practices, secure form handling, and structured application architecture.

---

## Purpose

Provide a clear overview of:

- Backend skills (PHP, Symfony)
- Real project structure and architecture choices
- Secure form handling and validation
- Professional and training background
- Complementary technical skills (Unity / C# / 3D)

---

## Core Features

- Secure contact form
- Flash message workflow
- Clean controller / form architecture
- Environment-based configuration
- Production mail sending setup
- Backend-oriented project structure

---

## Security Features

- CSRF protection (Symfony Forms)
- Server-side validation
- Honeypot anti-spam field
- Rate limiting by IP on contact form
- Controlled mail headers (reply-to handling)
- No secrets stored in repository

---

## Tech Stack

- PHP 8+
- Symfony 6.4 / 7.x
- Twig
- Tailwind CSS
- Symfony Forms
- Symfony Mailer
- Symfony Rate Limiter

---

## Production Notes

- Designed for deployment on shared hosting (O2switch)
- Production mailer configuration tested
- Optimized Composer autoloader
- Separate environment configuration
- Debug disabled in production

---

## Status

UI currently **work in progress (alpha layout)** — main focus is backend structure, security, and reliability.

---

## Live Demo

https://portfolio.lapalmenumerique.fr

---

## Installation Notes

Environment variables must be configured locally:

Mailer credentials and secrets are **not included** in the repository.

---

## Run Locally

```bash
composer install
symfony serve


## License

Personal portfolio project — provided for demonstration purposes only.  
Code may not be reused or redistributed for commercial projects without permission.
