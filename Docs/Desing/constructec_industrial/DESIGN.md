---
name: Constructec Industrial
colors:
  surface: '#f9f9ff'
  surface-dim: '#d0daef'
  surface-bright: '#f9f9ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#eff3ff'
  surface-container: '#e6eeff'
  surface-container-high: '#dee9fd'
  surface-container-highest: '#d9e3f7'
  on-surface: '#121c2a'
  on-surface-variant: '#414750'
  inverse-surface: '#273140'
  inverse-on-surface: '#ebf1ff'
  outline: '#717781'
  outline-variant: '#c1c7d1'
  surface-tint: '#18629c'
  primary: '#135f99'
  on-primary: '#ffffff'
  primary-container: '#3878b4'
  on-primary-container: '#fdfcff'
  inverse-primary: '#9ccaff'
  secondary: '#855300'
  on-secondary: '#ffffff'
  secondary-container: '#fcae45'
  on-secondary-container: '#6e4400'
  tertiary: '#7a5500'
  on-tertiary: '#ffffff'
  tertiary-container: '#9a6c00'
  on-tertiary-container: '#fffbff'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d0e4ff'
  primary-fixed-dim: '#9ccaff'
  on-primary-fixed: '#001d35'
  on-primary-fixed-variant: '#00497b'
  secondary-fixed: '#ffddb8'
  secondary-fixed-dim: '#ffb95f'
  on-secondary-fixed: '#2a1700'
  on-secondary-fixed-variant: '#653e00'
  tertiary-fixed: '#ffdeab'
  tertiary-fixed-dim: '#f7bd55'
  on-tertiary-fixed: '#271900'
  on-tertiary-fixed-variant: '#5f4100'
  background: '#f9f9ff'
  on-background: '#121c2a'
  surface-variant: '#d9e3f7'
  slate-gray: '#1F2937'
  off-white: '#F9FAFB'
  border-gray: '#E5E7EB'
  blueprint-bg: '#F3F4F6'
typography:
  display-lg:
    fontFamily: Montserrat
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Montserrat
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
  headline-lg-mobile:
    fontFamily: Montserrat
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  headline-md:
    fontFamily: Montserrat
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  body-sm:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
  label-bold:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '600'
    lineHeight: 16px
    letterSpacing: 0.05em
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  unit: 4px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 40px
  container-max: 1280px
---

## Brand & Style

The design system is engineered for the construction and engineering sector, prioritizing a sense of structural integrity, precision, and institutional trust. The brand personality is grounded and authoritative, aimed at industrial stakeholders who value efficiency and professional reliability.

The visual style is a sophisticated blend of **Corporate Modern** and **Minimalism**, heavily inspired by the clean, functional aesthetic of high-end architectural portfolios. It utilizes high-density layouts, clear boundaries, and a "utility-first" approach similar to the Laravel/Filament ecosystem. The goal is to evoke the feeling of a blueprint or a well-managed project site: organized, sturdy, and meticulous.

## Colors

The palette transitions the vibrant hues of the logo into a professional, industrial context. The Primary Blue is used strategically for primary actions and brand identifiers, while the Secondary Orange/Gold serves as a high-visibility accent for notifications and highlights, reminiscent of construction safety signals.

The interface is dominated by a range of **Slate Grays** and **Off-Whites**, creating a "Laravel-esque" environment that is easy on the eyes for long-term administrative use. Surface colors use very subtle shifts in gray to distinguish between different content areas, rather than heavy use of color, maintaining a focused and serious tone.

## Typography

This design system employs a dual-font strategy to balance character with utility. 

**Montserrat** is used for headlines and display text. Its geometric precision and wide stance suggest the strength of steel beams and architectural foundations. 

**Inter** is utilized for all body copy, inputs, and interface labels. Chosen for its exceptional legibility in data-heavy environments, it ensures that technical specifications and project details are communicated without ambiguity. Small labels should frequently use uppercase with increased tracking to mimic technical drawing annotations.

## Layout & Spacing

The layout follows a **Fixed Grid** philosophy on desktop to maintain a controlled, professional presentation, transitioning to a fluid model on mobile. 

We utilize a 12-column grid with a generous 24px gutter to prevent the interface from feeling cramped despite high information density. Spacing is strictly mathematical, based on a 4px baseline unit. 

- **Desktop (1280px+):** Centered container, 40px outer margins.
- **Tablet (768px - 1279px):** Fluid width, 24px outer margins, columns collapse to 6 or 8 depending on content.
- **Mobile (<767px):** 16px outer margins, single-column stack.

## Elevation & Depth

To maintain the Filament-inspired aesthetic, this design system avoids heavy shadows and floating elements. Instead, it uses **Tonal Layers** and **Low-Contrast Outlines**.

Depth is created by stacking surfaces of slightly different gray values (e.g., a `slate-gray` sidebar against an `off-white` main content area). Where shadows are necessary for modals or dropdowns, they are "Ambient Shadows"—extremely diffused (20px-30px blur), low opacity (5-8%), and slightly tinted with the primary blue to maintain color harmony. High-contrast 1px borders in `border-gray` define the perimeter of all cards and input groups.

## Shapes

The shape language is "Soft but Structured." While a completely sharp 0px radius can feel too aggressive, a highly rounded look feels too consumer-focused. 

We use a consistent **0.25rem (4px)** radius for standard components like buttons and inputs. Larger containers like cards may use **0.5rem (8px)**. This subtle rounding provides a modern touch while retaining the "blocky" and reliable feel required for an engineering and construction brand.

## Components

### Buttons
Primary buttons use the Brand Blue with white text, using the `soft` (4px) corner radius. Secondary buttons should be "Ghost" style with a 1px border. All buttons use `label-bold` typography to emphasize action.

### Input Fields
Inputs are styled with an `off-white` background and a `border-gray` outline. On focus, the border transitions to Primary Blue with a subtle 2px outer glow. Labels always sit above the input in `body-sm` bold.

### Cards
Cards are the primary container for information. They feature a white background, a 1px `border-gray` outline, and no shadow. For "active" or "hovered" states, a subtle ambient shadow may be applied to suggest interactability.

### Chips & Status Indicators
Status indicators (e.g., "In Progress," "Completed") use highly desaturated versions of the status color (red, green, orange) with high-contrast text. They should have a 2px radius to distinguish them from more rounded "pill" systems.

### Lists & Tables
Tables are central to this system. They should use a "Zebra-stripe" pattern with `off-white` and white rows, with clear `border-gray` dividers. Header cells should use the `slate-gray` background with white `label-bold` text for maximum hierarchy.