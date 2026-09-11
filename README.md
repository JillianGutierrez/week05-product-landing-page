# Coffee Break By: Maus Foodhouse atbp.

# 1. Introduction

## What is a Product Landing Page?

A product landing page is a webpage that presents a product, service, or business in a clear and organized way. It usually contains important information such as the main features, products, pricing, customer feedback, and contact information.

For this project, I created a product landing page for **Coffee Break By: Maus Foodhouse atbp.** The website focuses on presenting the business, its food and drinks, pricing options, customer testimonials, and contact information.

## Why Landing Pages Are Important for Businesses

Landing pages are useful for businesses because they give customers a convenient way to learn about the business in one place.

For a food and beverage business, a landing page can help customers:

- Learn more about the business.
- Explore the available food and drinks.
- Check prices.
- Read customer reviews.
- Find the business location.
- Check business hours.
- Contact the business.

A good landing page can also help make a small or local business look more professional online.

## Purpose of the Project

The purpose of this project was to apply the concepts discussed in **ITST 302** by creating a responsive landing page using **Laravel, Blade Components, Tailwind CSS, JavaScript, and Vite**.

I decided to use a real local food business for the project so that the website would have an actual business purpose and realistic content.

---

# 2. Objectives

The main objectives I accomplished in this activity were:

- Create a complete product landing page.
- Apply responsive web design principles.
- Create a responsive navigation bar.
- Create a mobile hamburger menu.
- Use Laravel Blade Components.
- Practice reusable component development.
- Use Tailwind CSS for styling.
- Apply responsive Tailwind classes.
- Use Flexbox and CSS Grid.
- Create desktop, tablet, and mobile layouts.
- Design a consistent user interface.
- Add hover effects and transitions.
- Create a features section.
- Create a food and drink menu showcase.
- Create a pricing section with three plans.
- Create a testimonials section.
- Create a call-to-action section.
- Create a responsive footer.
- Use images to improve the visual presentation.
- Practice Git and GitHub version control.
- Organize the project properly.
- Document the development process.

---

# 3. Responsive Web Design

Responsive web design allows a website to adjust its layout depending on the screen size of the device.

For this project, I tested the website on desktop, tablet, and mobile layouts.

## Mobile-First Design

The website was designed to remain usable on smaller screens.

On mobile:

- The desktop navigation changes into a hamburger menu.
- Content is stacked vertically.
- Cards adjust to the available screen width.
- Buttons become easier to tap.
- Images resize properly.
- Text sizes adjust for smaller screens.
- Spacing is reduced where needed.

The mobile layout was tested at approximately:

**375 × 812 px**

## Responsive Breakpoints

Tailwind CSS responsive breakpoints were used throughout the project.

Some of the responsive classes used include:

```text
sm
md
lg
````

These were used for different screen sizes and were applied to:

* Navigation
* Text
* Cards
* Images
* Buttons
* Section spacing
* Grid layouts

The tablet layout was tested at approximately:

**768 × 1024 px**

The desktop layout was tested at approximately:

**1440 × 900 px**

## Flexbox

Flexbox was used for areas that needed horizontal or vertical alignment.

For example, the navigation uses Flexbox to align the logo, menu links, and buttons.

Example:

```html
<div class="flex items-center justify-between">
    ...
</div>
```

## CSS Grid

CSS Grid was used for sections containing multiple cards.

For example, the pricing section uses a responsive three-column grid on larger screens.

Example:

```html
<div class="grid gap-6 md:grid-cols-3">
    ...
</div>
```

On smaller screens, the cards automatically stack so that the content remains readable.

## User Experience (UX)

Responsive design is important because users do not always access websites using a desktop computer.

While developing this project, I had to check how the website looked and worked on different screen sizes.

I paid attention to:

* Navigation
* Text readability
* Button sizes
* Card spacing
* Image sizes
* Section spacing
* Mobile menu behavior

This helped make the website easier to use on different devices.

---

# 4. Tailwind CSS

Tailwind CSS was used as the main styling framework of the project.

## Utility-First CSS

Tailwind CSS provides utility classes that can be directly added to HTML and Blade elements.

Instead of creating many separate CSS classes, I used utility classes for:

* Colors
* Spacing
* Font sizes
* Borders
* Shadows
* Rounded corners
* Flexbox
* Grid
* Responsive layouts
* Hover effects
* Transitions

For example:

```html
<div class="rounded-3xl bg-white/40 p-7 shadow-lg backdrop-blur-2xl">
    ...
</div>
```

This creates a rounded glass-style card with padding, shadow, and background effects.

## Advantages of Tailwind CSS

Tailwind CSS made the development process easier because I could make quick changes directly in the Blade files.

Some advantages I experienced were:

* Easy responsive styling.
* Faster UI adjustments.
* Consistent spacing.
* Easy hover effects.
* Easy layout changes.
* Less custom CSS needed.
* Simple responsive breakpoints.

## Responsive Utility Classes

I used responsive utility classes to change the design depending on the screen size.

Example:

```html
<h2 class="text-3xl sm:text-4xl lg:text-5xl">
    GOOD FOOD, GOOD MOOD!
</h2>
```

The heading becomes larger on bigger screens.

Another example:

```html
<div class="grid gap-6 md:grid-cols-3">
    ...
</div>
```

This changes the layout into three columns on medium screens and larger.

## Component Styling

Tailwind classes were also used inside the Blade Components.

For example, the project uses classes such as:

```text
rounded-3xl
shadow
border
backdrop-blur-2xl
transition
hover:-translate-y-2
```

These classes were used to create the rounded glass-style cards and interactive hover effects.

---

# 5. Blade Components

## What are Blade Components?

Blade Components are reusable parts of a Laravel application.

Instead of putting the entire website inside one Blade file, the interface can be divided into smaller components.

For this project, different parts of the website were separated into Blade Components.

## Blade Components Used

```text
resources/views/components/
├── navbar.blade.php
├── hero.blade.php
├── feature-card.blade.php
├── pricing-card.blade.php
├── testimonial-card.blade.php
├── button.blade.php
└── footer.blade.php
```

Additional section components were also created:

```text
resources/views/components/
├── features.blade.php
├── menu.blade.php
├── pricing.blade.php
├── testimonials.blade.php
└── cta.blade.php
```

## Why Reusable Components Improve Maintainability

Reusable components make the project easier to organize and update.

For example, the project has a reusable button component:

```blade
<x-button>
    Explore Menu
</x-button>
```

Instead of writing the same button code repeatedly, the button component can be reused in different sections.

If the button design needs to be changed later, it can be updated in the component.

## Modular UI Development

Using components helped me:

* Keep the code organized.
* Separate different sections.
* Reuse UI elements.
* Make changes more easily.
* Keep the home page cleaner.
* Understand Laravel's component-based structure.

The main page uses components such as:

```blade
<x-navbar />

<x-hero />

<x-features />

<x-menu />

<x-pricing />

<x-testimonials />

<x-cta />

<x-footer />
```

## Blade Components Folder

![Blade Components Folder](screenshots/blade-components-folder.png)

---

# 6. User Interface Design

The design was created specifically for a coffee and food business.

I wanted the website to have a warm, modern, and clean appearance while still matching the food and coffee theme.

## Color Palette

The main colors used in the interface are:

* Orange
* Cream
* White
* Light beige
* Dark brown

Orange is mainly used for buttons, highlights, and important elements.

Cream and white are used for backgrounds.

Dark brown is used for text and darker sections.

Keeping the color palette limited helped make the different sections look consistent.

## Typography

The website uses clean and readable typography.

Large and bold text was used for major headings such as:

```text
GOOD FOOD, GOOD MOOD!
```

Smaller text was used for descriptions and supporting information.

Responsive text classes were also used so that headings would not become too large on mobile devices.

## Iconography

Simple icons were used for interface elements.

The mobile navigation uses a hamburger icon which changes into a close icon when the menu is opened.

## Button Styles

The buttons use a consistent rounded style.

Examples include:

* Explore Menu
* Contact Us
* Choose Starter
* Choose Best Seller
* Choose Premium

The primary buttons use orange backgrounds, while secondary buttons use an outlined orange style.

Hover transitions were also added to make the buttons feel more interactive.

## Card Design

Cards are used for:

* Features
* Pricing
* Testimonials

The card design uses:

* Rounded corners
* Soft shadows
* Borders
* Glass-style backgrounds
* Hover effects
* Consistent spacing

The feature cards also use actual images to make the section more connected to the business.

## Layout Consistency

The same visual style was maintained throughout the website.

The design uses:

* Consistent spacing
* Consistent typography
* Orange accent colors
* Rounded elements
* Similar card styles
* Consistent buttons
* Responsive layouts

This helps the website feel like one complete design.

---

# 7. Folder Structure

The project follows the Laravel folder structure and also includes folders required for the activity.

```text
week05-product-landing-page/
│
├── app/
├── bootstrap/
├── config/
├── database/
│
├── public/
│   └── images/
│
├── resources/
│   ├── css/
│   │   └── app.css
│   │
│   ├── js/
│   │   └── app.js
│   │
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       ├── components/
│       │   ├── navbar.blade.php
│       │   ├── hero.blade.php
│       │   ├── feature-card.blade.php
│       │   ├── features.blade.php
│       │   ├── menu.blade.php
│       │   ├── pricing-card.blade.php
│       │   ├── pricing.blade.php
│       │   ├── testimonial-card.blade.php
│       │   ├── testimonials.blade.php
│       │   ├── cta.blade.php
│       │   ├── button.blade.php
│       │   └── footer.blade.php
│       │
│       └── pages/
│           └── home.blade.php
│
├── routes/
├── screenshots/
├── documentation/
├── tests/
├── composer.json
├── package.json
├── vite.config.js
└── README.md
```

## `resources/views/layouts`

This folder contains the main Blade layout.

```text
resources/views/layouts/
└── app.blade.php
```

The layout contains the main HTML structure, page title, and Vite asset loading.

## `resources/views/components`

This folder contains the reusable Blade Components used throughout the website.

Examples include:

```text
navbar.blade.php
hero.blade.php
feature-card.blade.php
pricing-card.blade.php
testimonial-card.blade.php
button.blade.php
footer.blade.php
```

## `resources/views/pages`

This folder contains the main pages of the website.

The main page is:

```text
resources/views/pages/
└── home.blade.php
```

The home page combines the different components into one complete landing page.

## `public`

The `public` folder contains files that can be accessed by the website.

The project uses:

```text
public/images/
```

for the logo, storefront image, food images, feature images, and customer image.

## `screenshots`

This folder contains screenshots documenting the website and the development process.

## `documentation`

This folder contains supporting documentation and the before-and-after comparison materials.

---

# 8. Screenshots

The following screenshots document the different parts of the responsive landing page and the development process.

## Desktop View

![Desktop View](screenshots/desktop-view.png)

The desktop screenshot shows the landing page in a large-screen layout.

## Tablet View

![Tablet View](screenshots/tablet-view.png)

The tablet screenshot shows how the layout adjusts for a medium-sized screen while keeping the content organized and readable.

## Mobile View

![Mobile View](screenshots/mobile-view.png)

The mobile screenshot shows the responsive layout on a smaller screen, including the mobile navigation and vertically arranged content.

## Navigation Bar - Desktop

![Navigation Bar Desktop](screenshots/navigation-bar-web.png)

This screenshot shows the full-width navigation bar on the desktop version.

## Navigation Bar - Mobile

![Navigation Bar Mobile](screenshots/navigation-bar-mobile.png)

This screenshot shows the responsive mobile navigation with the hamburger menu.

## Hero Section

![Hero Section](screenshots/hero-section.png)

This screenshot shows the main hero section with the business name, main headline, description, buttons, and storefront background.

## Features Section - 1

![Features Section 1](screenshots/features-section1.png)

This screenshot shows the first part of the features section with the feature cards and images.

## Features Section - 2

![Features Section 2](screenshots/features-section2.png)

This screenshot shows the continuation of the features section and its responsive card layout.

## Pricing Section - 1

![Pricing Section 1](screenshots/pricing-section1.png)

This screenshot shows the first part of the pricing section with the available pricing plans.

## Pricing Section - 2

![Pricing Section 2](screenshots/pricing-section2.png)

This screenshot shows the second view of the pricing section and its responsive layout.

## Testimonials - 1

![Testimonials 1](screenshots/testimonials1.png)

This screenshot shows the customer testimonials section and review content.

## Testimonials - 2

![Testimonials 2](screenshots/testimonials2.png)

This screenshot shows the continuation of the testimonials section.

## Footer

![Footer](screenshots/footer.png)

This screenshot shows the footer containing the business information, navigation links, social media links, contact details, and copyright information.

## Blade Components Folder

![Blade Components Folder](screenshots/blade-components-folder.png)

This screenshot shows the Blade Components folder used to organize the reusable components of the project.

## GitHub Repository

The GitHub repository screenshot will be added after the final repository setup and push.

Save the screenshot inside the `screenshots` folder as:

```text
github-repository.png
```

Then add it using:

![GitHub Repository](screenshots/github-repository.png)

---

# 9. Design Requirements

The project follows a modern and consistent design approach.

The design uses:

* A limited and harmonious color palette.
* Consistent spacing.
* Readable typography.
* Rounded cards and buttons.
* Responsive layouts.
* Clear visual hierarchy.
* Sufficient text contrast.
* Hover effects.
* Simple transitions and animations.

The interface was designed specifically for **Coffee Break By: Maus Foodhouse atbp.**

I did not directly copy an existing website. The layout, colors, sections, and styling were adjusted to fit the identity of the business.

---

# 10. Before-and-After Comparison

The interface went through several improvements during development. The comparison below shows the difference between the early version and the final polished interface.

## Before

The initial version focused more on the basic structure and placement of the website content.

![Before Design](documentation/before-design.png)

The early version needed improvements in:

- Visual hierarchy
- Spacing
- Navigation
- Card styling
- Responsive behavior
- Overall presentation

## After

The final version has a more polished and responsive interface.

![After Design](documentation/after-design.png)

The final version includes:

- Full-width navigation bar
- Responsive mobile navigation
- Hero section with storefront background
- Food and drink images
- Glass-style feature cards
- Menu showcase
- Three pricing plans
- Customer testimonials
- Call-to-action section
- Responsive footer
- Hover effects
- Improved spacing
- Desktop, tablet, and mobile layouts

## My Development Experience

During the development of the project, I made several changes after checking how the website looked and worked.

One of the areas I improved was the navigation bar. I changed it into a full-width solid navigation bar instead of a floating or transparent header.

I also worked on the mobile navigation so that the hamburger menu could open and close properly.

For the features section, I added actual images for the six features. This made the section more visually appealing and connected it better to the food and beverage theme.

I also adjusted the glass-style cards, spacing, buttons, and responsive layouts as I continued testing the website.

The pricing and call-to-action sections were also adapted to fit the actual business.

The original activity requirements included generic actions such as:

- Register
- Contact Sales
- Start Free Trial

Since my project is for a food business rather than a software service, I changed these into more realistic actions such as:

- Explore Menu
- Contact Us
- Visit the Business

This allowed the landing page to remain realistic while still following the purpose of the assignment.

# 11. Responsive Testing

The website was tested using different screen sizes.

### Mobile

```text
375 × 812 px
```

### Tablet

```text
768 × 1024 px
```

### Desktop

```text
1440 × 900 px
```

During testing, I checked:

* Navigation bar
* Mobile menu
* Hero section
* Features section
* Menu section
* Pricing section
* Testimonials
* CTA section
* Footer
* Images
* Buttons
* Text spacing

The goal was to make sure that the website remained usable and visually consistent on different screen sizes.

---

# 12. Main Website Sections

The final landing page contains the following sections:

## Navigation Bar

Contains the business logo, navigation links, and action buttons.

## Hero Section

Introduces the business with the main message:

**GOOD FOOD, GOOD MOOD!**

It also includes buttons for exploring the menu and contacting the business.

## Features Section

Highlights the main things customers can expect from the business, including:

* Freshly Prepared Drinks
* Delicious Food
* Affordable Prices
* Filling Rice Meals
* Variety of Drinks
* Made for Every Craving

## Menu Section

Showcases different food and drink categories, including:

* Coffee
* Milk Tea
* Milkshakes
* Java Rice
* Burgers
* Fries

## Pricing Section

Contains three options:

* **Starter - Quick Break**
* **Best Seller - Coffee + Meal**
* **Premium - Full Craving**

Each pricing card includes a price, included food or drink options, and an action button.

## Testimonials Section

Contains customer feedback from:

* Lian
* Jil
* Jel

The section uses a shared customer photo together with the review boxes.

## Call-to-Action Section

Encourages visitors to:

* Explore the menu.
* Contact the business.
* Visit the physical location.

## Footer

Contains business information, navigation links, social media links, contact details, and copyright information.

---

# 13. Technology Stack

The project was developed using:

* **Laravel**
* **PHP**
* **Blade**
* **Tailwind CSS**
* **JavaScript**
* **Vite**
* **HTML5**
* **CSS3**
* **Git**
* **GitHub**

---

# 14. Business Information

## Coffee Break By: Maus Foodhouse atbp.

**Location:**
Plaza of Magdalena, Laguna

**Contact Number:**
09398130110

**Facebook:**
[https://www.facebook.com/Coffeebreakbymau](https://www.facebook.com/Coffeebreakbymau)

**Business Hours:**
10 AM - 8 PM

---

# 15. GitHub Repository

The project repository is available on GitHub:

[https://github.com/JillianGutierrez/week05-product-landing-page](https://github.com/JillianGutierrez/week05-product-landing-page)

Git was used throughout the development process to keep track of changes and improvements.

The commits were organized into meaningful development stages, such as:

1. Initialize Laravel project
2. Add website images and assets
3. Add project documentation
4. Improve responsive navigation
5. Refine hero section
6. Improve features and menu sections
7. Finalize pricing section
8. Complete testimonials, CTA, and footer
9. Add responsive screenshots
10. Complete final documentation

The purpose of using meaningful commits was to show the development process of the project.

---

# 16. Getting Started

## Requirements

Before running the project, make sure the following are installed:

* PHP
* Composer
* Node.js
* npm
* XAMPP
* Git

## Installation

Clone the repository:

```bash
git clone https://github.com/JillianGutierrez/week05-product-landing-page.git
```

Go to the project folder:

```bash
cd week05-product-landing-page
```

Install Laravel dependencies:

```bash
composer install
```

Install Node dependencies:

```bash
npm install
```

Create the environment file:

```bash
copy .env.example .env
```

Generate the Laravel application key:

```bash
php artisan key:generate
```

Run the Laravel development server:

```bash
php artisan serve
```

In another terminal, run Vite:

```bash
npm run dev
```

After running the servers, open the Laravel development URL shown in the terminal.

---

# 17. Learning Reflection

This project helped me understand how Laravel, Blade Components, and Tailwind CSS can work together to create a responsive website.

One of the main things I learned was that designing a website is not only about making the desktop version look good. I also needed to check how the website behaved on tablet and mobile screens.

I experienced some challenges while working on the responsive navigation. I had to make sure that the mobile hamburger menu could open and close properly and that the navigation was still easy to use on a smaller screen.

I also learned how useful Blade Components are. Instead of putting the whole website in one large file, I separated the different parts of the website into components such as the navbar, hero, features, menu, pricing, testimonials, CTA, button, and footer.

Another part of the project was improving the UI design. I used an orange and cream color palette, glass-style cards, rounded layouts, shadows, images, and hover effects to make the website match the coffee and food business.

I also learned that a project requirement can sometimes be adapted depending on the type of website being created. The original activity included actions such as "Register," "Contact Sales," and "Start Free Trial." Since my project is for a food business, I changed these into more realistic actions such as "Explore Menu" and "Contact Us."

Git also helped me understand the importance of version control. By creating meaningful commits, I was able to keep track of the different stages of development.

Overall, this project gave me more experience with:

* Responsive Web Design
* Tailwind CSS
* Laravel
* Blade Components
* UI/UX Design
* JavaScript
* Git and GitHub
* Project Organization
* Documentation

---

# 18. Conclusion

The **Coffee Break By: Maus Foodhouse atbp. Product Landing Page** demonstrates the use of Laravel, Blade Components, Tailwind CSS, JavaScript, Vite, and responsive web design.

The final website includes:

* Responsive Navigation Bar
* Hero Section
* Features Section
* Menu Showcase
* Pricing Section
* Testimonials
* Call-to-Action Section
* Footer

The project was designed to provide a professional online presentation for a real local food and beverage business.

Through this activity, I was able to practice responsive design, reusable components, Tailwind CSS, UI design, Git version control, and project documentation.

The project also helped me understand that a good website needs to consider both appearance and usability, especially across different screen sizes.

---

# 19. Author

**Jillian Gutierrez**

**Course:** ITST 302

**Activity:** Week 5 - Product Landing Page

**GitHub Repository:**

[https://github.com/JillianGutierrez/week05-product-landing-page](https://github.com/JillianGutierrez/week05-product-landing-page)

```
