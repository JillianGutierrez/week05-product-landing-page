# Documentation

This folder contains supporting documentation for the Coffee Break By: Maus Foodhouse landing page project.

## Contents

| File | Description |
|------|-------------|
| `before.png` | Initial wireframe or unstyled prototype |
| `after.png` | Final polished responsive interface |
| `components.png` | Blade components folder structure in VS Code |
| `color-palette.md` | Color palette reference |

## Before & After Comparison

### Before
The initial state of the project was a plain Laravel installation with no styling or components. The HTML structure existed but had no Tailwind CSS utility classes, no layout system, and no visual hierarchy.

**Characteristics:**
- No CSS framework applied
- Unstyled HTML elements
- No responsive breakpoints
- No component separation

### After
The final landing page is a fully responsive, component-based product page built with Laravel Blade Components and Tailwind CSS v4.

**Improvements:**
- Full responsive layout (mobile, tablet, desktop)
- Reusable Blade Components for every section
- Consistent orange/warm color palette
- Clear visual hierarchy with typography and spacing
- Hover effects, shadows, and smooth transitions
- Mobile hamburger menu with JavaScript toggle

## Color Palette Reference

| Name | Hex | Usage |
|------|-----|-------|
| Orange 500 | `#f97316` | Primary brand color, buttons, accents |
| Orange 50 | `#fff7ed` | Section backgrounds |
| Orange 100 | `#ffedd5` | Feature card backgrounds |
| Gray 900 | `#111827` | Headings, footer background |
| Gray 600 | `#4b5563` | Body text |
| Gray 100 | `#f3f4f6` | Card borders |
| White | `#ffffff` | Card backgrounds, navbar |
| Yellow 400 | `#facc15` | Star ratings |

## Typography

| Element | Class | Size |
|---------|-------|------|
| Page Heading (H1) | `text-4xl sm:text-5xl lg:text-6xl font-extrabold` | 36–60px |
| Section Heading (H2) | `text-3xl sm:text-4xl font-extrabold` | 30–36px |
| Card Heading (H3) | `text-lg sm:text-xl font-bold` | 18–20px |
| Body Text | `text-sm sm:text-base` | 14–16px |
| Labels / Badges | `text-sm font-semibold uppercase tracking-wider` | 14px |
