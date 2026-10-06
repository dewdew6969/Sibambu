---
name: anti-ai-slop-design
description: "Guidelines and heuristics to prevent generic 'AI slop' in web and UI design. Use when creating, styling, reviewing, or refactoring user interfaces, landing pages, or web apps to ensure high-craft aesthetic excellence, distinctive brand identity, intentional typography, asymmetric rhythm, and professional UX."
---

# Anti-AI-Slop Design & Craftsmanship Playbook

This skill exists to eliminate the "AI median aesthetic" — generic layouts, predictable 3-card grids, clichéd purple/indigo gradients, floating abstract blobs, and repetitive hero sections.

---

## 1. Defining "AI Slop" in Web Design & What to Avoid

| AI Slop Symptom | Why It Looks Like Slop | High-Craft Alternative |
| :--- | :--- | :--- |
| **Predictable 3-Card Grid** | The statistical average of every generated SaaS website. | Varied layout rhythm: Bento-grids, asymmetric split cards, featured hero item + compact list. |
| **Generic Purple/Blue Gradients** | Defaults chosen by models lacking domain knowledge. | Curated industry palettes: e.g. for SiBambu: Deep forest green `#15803D`, eco-botanical `#16A34A`, parchment `#F8FAFC`, slate `#0F172A`, gold accent `#F59E0B`. |
| **Floating Blob Orbs Behind Cards** | Laziest attempt at "modern" design. | Geometric precision, subtle grid lines, clean border strokes (`1px solid rgba(0,0,0,0.08)`), subtle texture or real photography. |
| **Overuse of Centered Text** | Everything is centered, destroying scannability. | Left-aligned hierarchy with clear anchor headings, strong contrast, and left-aligned body text for natural reading flow. |
| **Vague Buzzword Copy** | "Supercharge your workflow with next-gen synergy". | Concrete facts & real numbers (e.g., *"1.108 ton sampah per hari di Karawang", "1.2 juta ton di TPA Jalupang"*). |
| **Stock Emojis as Icons** | Using 🚀, 🔥, 💡 as UI icons instead of proper SVGs. | Cohesive stroke SVG icons (Lucide, Heroicons, Phosphor) with uniform stroke width (`1.75px` or `2px`). |

---

## 2. The 5 Pillars of Distinctive UI

### 1. Typography Hierarchy with Intent
- **Pairing:** Never stick to default system fonts without styling. Pair a strong, characterful heading font (e.g. *Plus Jakarta Sans*, *Outfit*, *Space Grotesk*, or *Syne*) with an ultra-legible body font (e.g. *Inter*, *Public Sans*).
- **Scale:** Maintain an intentional modular scale (e.g. `H1: 2.75rem-3.5rem`, `H2: 1.75rem-2.25rem`, `H3: 1.25rem`, `Body: 1rem / 1.625 line-height`, `Small/Meta: 0.8125rem`).
- **Letter Spacing:** Tighter tracking for large titles (`letter-spacing: -0.025em` to `-0.03em`), neutral tracking for body text.

### 2. Spacing and Asymmetric Rhythm
- Use an 8-point spacing grid (`8px`, `16px`, `24px`, `32px`, `48px`, `64px`, `96px`).
- Don't give every section equal height. High-value sections (Hero, Live Demo, Metrics) deserve generous breathing room, while functional tables or FAQs should be compact and dense.

### 3. Tactile Micro-Interactions
- Interactive elements must respond with clear visual affordances:
  - Button Hover: Subtle lift (`transform: translateY(-1.5px)`), deeper shadow, smooth color shift over `150ms-200ms cubic-bezier(0.16, 1, 0.3, 1)`.
  - Active/Press: Compress slightly (`transform: scale(0.98)`).
  - Focus States: Never remove outline rings without replacing them with accessible high-contrast rings (`ring-2 ring-emerald-500 ring-offset-2`).

### 4. Color Elevation & Depth
- **Surface Elevation:** Do not use pure `#000000` or muddy `#888888`. Use tinted darks (`#0F172A` Slate, `#064E3B` Deep Emerald) and tinted lights (`#F8FAFC`, `#F0FDF4`).
- **Glassmorphism Discipline:** If using frosted glass (`backdrop-filter: blur(12px)`), always give it a subtle 1px border (`border: 1px solid rgba(255, 255, 255, 0.15)`) and balanced opacity (`rgba(255, 255, 255, 0.8)` in light mode, `rgba(15, 23, 42, 0.75)` in dark mode).

### 5. Content-First Design
- Real data tables, actual steps from manual books, and clear diagrams.
- Meaningful badges, status pills, and interactive calculators over empty marketing fluff.

---

## 3. Checklist Before Finalizing Any UI

- [ ] Does the page have a distinct visual character that fits the project domain?
- [ ] Are all icons crisp SVGs with matching stroke widths and sizes?
- [ ] Does the color contrast pass WCAG AA standards (minimum 4.5:1 for body text)?
- [ ] Is there clear visual hierarchy with only ONE primary call-to-action per viewport?
- [ ] Are interactive elements responsive on mobile viewports (minimum touch target `44x44px`)?
- [ ] Is all copy grounded in real project context (no placeholder jargon)?
