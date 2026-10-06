---
name: wordpress-mastery
description: "Best practices, architecture patterns, and security guidelines for custom WordPress development. Use when creating custom WordPress themes, templates, block patterns, custom post types, settings pages, or integrating WordPress sites with REST APIs."
---

# WordPress Custom Development & Architecture Skill

Guidelines for building lightweight, secure, and modern custom WordPress websites and themes without bloated page builders or unnecessary plugin overhead.

---

## 1. Modern Custom WordPress Theme Structure

A clean custom WordPress theme structure in `wp-content/themes/<theme-name>/`:

```text
wp-content/themes/sibambu-custom/
├── style.css             # Theme metadata & core styles
├── index.php             # Fallback template
├── front-page.php        # Custom landing page (Home)
├── page.php              # Standard page template
├── single.php            # Single post template
├── header.php            # Global header & navigation
├── footer.php            # Global footer & legal links
├── functions.php         # Theme setup, assets enqueuing, custom post types
├── template-parts/       # Modular template components
│   ├── hero.php
│   ├── features.php
│   ├── stats.php
│   └── cta.php
└── assets/
    ├── css/
    ├── js/
    └── images/
```

---

## 2. Secure Coding Practices (WordPress Standards)

1. **Input Sanitization & Output Escaping:**
   - Always sanitize inputs: `sanitize_text_field()`, `sanitize_email()`, `absint()`.
   - Always escape outputs: `esc_html()`, `esc_attr()`, `esc_url()`, `wp_kses_post()`.
   - Never output raw `$_POST` or `$_GET` data.
2. **Nonces for Form Actions:**
   - Verify nonces on every custom form submission: `wp_nonce_field( 'action_name', 'nonce_name' )` and `check_admin_referer()`.
3. **Asset Enqueuing:**
   - Never hardcode `<link>` or `<script>` tags in `header.php`. Always use `wp_enqueue_style()` and `wp_enqueue_script()` hooked to `wp_enqueue_scripts`.

---

## 3. SEO, Performance & Google Play Compliance

- **Permalinks:** Set permalinks to `%postname%` (`/privacy-policy`, `/terms-and-conditions`, `/manual-book`).
- **Data Safety Compliance:** Ensure the `/delete-account` and `/privacy-policy` endpoints are accessible without authentication or redirect loops.
- **Asset Optimization:** Enqueue modern system/Google webfonts using `preconnect` and `display=swap`. Ensure WebP format for raster images.
