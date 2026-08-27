# PROMPT_LOG.md

## Project: Marie Danise Bolaños — Personal Portfolio (Laravel)

This log documents every prompt sent to the AI coding agent (Big Pickle, via opencode) from the initial scaffold to the most recent fix, in the exact chronological order they were used. Each entry includes the task, the prompt used, and a summary of the agent's result/output. Reusing these prompts in this order against the same starting project should reproduce the same outcome.

---

### Task: 1. Building the Initial Portfolio Site

* **Prompt used:**

  > Build a static personal portfolio website using Laravel (latest stable version).
  > 
  > Technical Constraints:
  > - No database. Do NOT create migrations or Eloquent models.
  > - All content must be hardcoded in Blade views, or passed from route closures/controllers as plain PHP arrays.
  > - Use Laravel Blade templating (.blade.php) for every view — no other templating engine.
  > - Fully responsive design: mobile, tablet, and desktop breakpoints.
  > - Use Tailwind CSS (via Vite) for styling.
  > 
  > Design Reference: Use the Wired UI Kit by Wired Dots landing page as a STRUCTURAL and STYLISTIC reference only (https://themewagon.github.io/wired_ui_kit/examples/landing-page.html). Do NOT copy its business content or placeholder text.
  > 
  > Site Structure: Single-page layout with Home, About, Education, Projects, Contact sections, each with an id matching the nav anchor.
  > 
  > Navigation: Sticky top navigation bar with anchor links, smooth scroll, mobile hamburger menu. Top-right of navbar: (1) theme accent-color picker icon, (2) dark/light mode toggle icon.
  > 
  > About Section: Short bio next to a portrait/profile image, plus a row of 2-3 quick stats (years of experience, projects completed, certifications).
  > 
  > Education Section: Cards or timeline of degrees/certifications with institution, program, date range.
  > 
  > Projects Section: Grid of project cards with thumbnail, title, description, tech-stack tags, hover/transition effects.
  > 
  > Footer: Contact info, social/GitHub icon links.
  > 
  > Deliverables: Standard Laravel structure, routes in web.php passing content arrays to Blade views, reusable Blade components/partials for navbar, footer, project cards, stat cards.

* **Result/Output:** Big Pickle scaffolded the base Laravel project: routes/web.php passing hardcoded arrays to Blade views, a sticky responsive navbar with hamburger menu, hero/about/education/projects/contact sections, and a footer, styled with Tailwind. This became the foundation for every subsequent customization prompt in this log.

---

### Task: 2. Personalizing Content (Name, Bio, Education, Contact Info)

* **Prompt used:**

  > Update the Laravel portfolio site content with the following. Personal Info: Full Name Marie Danise Bolaños, Title Bachelor of Science in Information Technology - 4, Email bolanosmariedanise@gmail.com, Phone +639756188324, GitHub https://github.com/bolanosmariedanise, Location Brgy. Pias Sur, Tayum, Abra. Provide an About Me bio describing her as a 4th year BSIT student. Replace the Education section with: Data Center College of the Philippines - Bangued (BSIT, 2023-Present) and An-anaao Integrated School (TVL-ICT, 2021-2023, With Honors). Add Certifications: Data Analytics and Visualization Essentials (DICT, Dec 11 2025) and Computer System Servicing NCII (TESDA, Sept 6 2025). Update Contact/Footer with the same email, phone, location, GitHub link. Ensure the ñ character in 'Bolaños' renders correctly (UTF-8).

* **Result/Output:** Big Pickle replaced all 'John Doe' placeholder content with Marie's actual name, bio, education history, certifications, and contact details across the hero, About, Education, Certifications, and footer sections.

---

### Task: 3. Locking the Theme to a Single Blue Toggle (Sky Blue / Dark Blue)

* **Prompt used:**

  > Remove the separate theme/accent color picker icon. Keep only ONE icon in the top-right of the navbar: the light/dark mode toggle. The toggle should switch between a light and dark version of a single blue color scheme (not unrelated palettes): Light mode uses sky blue as the primary/accent color (e.g. Tailwind sky-400/sky-500, light backgrounds like sky-50/white). Dark mode uses dark blue as the primary/accent and background tones (e.g. blue-900/slate-900 backgrounds, sky-400/blue-400 accents). Apply this palette consistently across navbar, hero, buttons, cards, section backgrounds, and footer. Persist the user's light/dark choice via localStorage.

* **Result/Output:** Big Pickle removed the extra accent-picker icon, leaving a single toggle, and re-themed the site around a consistent sky-blue (light) to dark-blue (dark) palette with persisted theme state.

---

### Task: 4. Restyling the Hero Background (Dark Mode) and Header Title

* **Prompt used:**

  > Restyle the hero section background to match a dark, moody, abstract flowing gradient style: deep navy/near-black edges fading into a glowing sky-blue and white light beam at the center, like smoky canyon walls or flowing silk/mist. Implement using layered CSS gradients (near-black base #050914-#0a1428, sky-blue-to-white radial center glow, medium blue mid-tones for smooth blending). Ensure hero text stays readable with sufficient contrast. Apply this as the basis for dark mode across the site. Also change the navbar title/logo text to 'Portfolio'.

* **Result/Output:** Big Pickle built a layered CSS gradient hero background and updated the navbar logo text to 'Portfolio.' This was later superseded when an actual reference image was uploaded (Task 5).

---

### Task: 5. Using the Actual Reference Image as the Dark-Mode Hero Background

* **Prompt used:**

  > Update the hero section background to use an uploaded reference image directly, styled like it: dark, moody, abstract flowing gradient (navy edges fading into glowing sky-blue/white center light). Save the image as public/images/hero-bg.jpg, set it via background-image/background-size:cover/background-position:center. Add a dark overlay (rgba(5,9,20,0.4)) so hero text stays readable. Ensure background-attachment works safely on mobile Safari (fallback to scroll if needed). Keep this same image for both light and dark mode, and keep the rest of the site's sky-blue/dark-blue theme intact below the hero. Change the navbar title to 'Portfolio'.

* **Result/Output:** Big Pickle replaced the CSS-gradient hero with the actual uploaded image as a proper background-image, added a readability overlay, and confirmed responsive scaling/cropping across breakpoints.

---

### Task: 6. Light-Mode Hero Background — Peach Watercolor Palette

* **Prompt used:**

  > Update the LIGHT MODE hero section background to use a new uploaded image: a soft watercolor wash in warm peach, coral, and light orange tones with a subtle scattering of small white sparkle/dot particles. Save as public/images/hero-bg-light.jpg. Swap hero background image based on active theme (light = peach watercolor, dark = existing navy/blue image) via a CSS class tied to the dark/light toggle. Add a light overlay for text readability and adjust hero text/button colors to contrast against the warm background (dark navy/charcoal text instead of white). Confirm whether the rest of the light-mode palette should shift warm or stay sky-blue.

* **Result/Output:** Big Pickle implemented theme-based hero background swapping (peach watercolor for light mode, navy/blue image for dark mode) and adjusted light-mode hero text color for contrast. Accent colors elsewhere were kept sky-blue pending further direction.

---

### Task: 7. Light-Mode Hero Background — Sunset Gradient Palette

* **Prompt used:**

  > Update the LIGHT MODE hero section background to a soft sunset color palette: pastel lavender/periwinkle blue at top, through pink and coral in the middle, into golden orange/yellow near a glowing horizon. Implement as a multi-stop CSS linear-gradient (approx: #a5b4e0 top, #d9a8d0, #f4b8c8, #f5a889, #f7c873, #fff3d6 bottom/horizon glow), optionally layered with a soft radial glow to simulate a sun. Keep dark mode's navy/blue hero unchanged. Update light-mode hero text/button colors for contrast against the new pastel tones.

* **Result/Output:** Big Pickle replaced the peach watercolor image with a pure CSS multi-stop sunset gradient for the light-mode hero, and adjusted hero text/button colors for readability. This gradient direction (warm pastel/coral) carried into later theme-wide color decisions.

---

### Task: 8. Peach Neon Shadows, Hero Name Script Font, Facebook Link

* **Prompt used:**

  > Change all box-shadow/glow effects (cards, buttons, hero, hover states) to a peach neon glow (#ffb385 to #ff9966 range) in BOTH light and dark mode, applied consistently to card hovers, button hovers, and hero glow. Change the font used for 'Marie Danise Bolaños' in the hero to a script/handwritten font (Rumania/Rumaniya, or closest available like Dancing Script), applied ONLY to the name text via Google Fonts import. Add Facebook as a new footer social icon linking to https://www.facebook.com/mariedanise.bolanos.1, matching the existing icon set style and hover/shadow treatment.

* **Result/Output:** Big Pickle applied a peach neon box-shadow across cards/buttons/hero, substituted a script font for the hero name only (since 'Rumaniya' isn't a standard Google Font, a close cursive alternative was used), and added a working Facebook icon link in the footer.

---

### Task: 9-11. Section Heading Fonts, Education Timeline Alignment, Dark-Mode Icon Colors (iterated 3x)

* **Prompt used:**

  > Change the font of the 'About Me', 'Education', 'Projects', and 'Get In Touch' headings to a bold display font (iterated across three attempts: 'Wonderful Future', then re-confirmed, then 'Linford' — none being standard Google Fonts, so a close fallback display font was substituted each time and noted). Align the Education section's timeline connector line so it passes through the center of each circular marker for both entries, with consistent spacing across breakpoints. In DARK MODE, change the color of all Font Awesome icons (footer social icons, contact icons) to match the hero's 'View My Work' button accent color (later refined to a specific peach tone, #ffb385-#ffcc99, in the third iteration) with a hover state, keeping light mode icon colors unchanged.

* **Result/Output:** Big Pickle fixed the Education timeline so the connector line is centered behind each circle marker, and updated dark-mode Font Awesome icons to use a consistent peach accent color with a lighter/darker hover state. The heading font was substituted with a close fallback each time since none of the requested font names ('Wonderful Future', 'Linford') were available on Google Fonts; Big Pickle flagged this and used the nearest bold serif/display alternative.

---

### Task: 12. Locking the Theme to Beige & Peach-Pink

* **Prompt used:**

  > Replace the current color theme with a soft, warm mixed palette of beige and peach-pink tones, applied across the entire site (not just the hero). Palette: beige/cream base (#f5e9dc-#ede0cf), soft peach (#f7c9a8-#f5b895), one consistent peach-pink primary accent (#f4a889-#f5b8b0) for buttons/links/highlights, warm off-white (#fffaf3), warm brown/taupe text (#4a3b30) for light-mode readability. Light mode: beige/cream base with peach-pink accents. Dark mode: keep a dark base (navy or warm dark brown/charcoal) with peach-pink/beige as accent highlights. Apply the same palette to Font Awesome icon colors in dark mode.

* **Result/Output:** Big Pickle replaced the sunset-gradient theme with a unified beige-and-peach-pink palette applied to backgrounds, buttons, links, card accents, and dark-mode icon colors, establishing the color system used for the remainder of the project.

---

### Task: 13. Adding the Three Core Software Projects

* **Prompt used:**

  > Add three project entries to the Projects section, each with title, description, tech-stack tags: (1) Online Selling Management System for Streetwear Apparel — C# Windows Forms desktop POS/dashboard system for an apparel business with cart and Buy Now flow. (2) Diocese of Bangued — St. James the Elder Cathedral Parish Viewer Portal — PHP web portal (built in Visual Studio) with mass schedules, About Us, Contact Us, and staff login. (3) Alegria's School PE Department Equipment Monitoring and Inventory System — C# Windows Forms desktop system with dashboard, equipment list, borrowing/return tracking, inventory, and reports/print. Add these to the projects data array with matching tags, maintaining existing card styling and responsive grid.

* **Result/Output:** Big Pickle added all three projects as new entries in the hardcoded projects array with generated descriptions and tech-stack tags, rendered using the existing project card component.

---

### Task: 14. Adding a Certification and Building the Interactive Project Modal/Gallery

* **Prompt used:**

  > Add a new certification: 'Online Safety Through Netiquette', July 23, 2026, positioned chronologically among existing entries. Make each project card interactive: clicking the image OR description opens a modal/lightbox with a larger image, full description, tech tags, and a multi-image gallery supporting Next/Back navigation (arrow buttons, keyboard arrow keys, touch swipe, and a position indicator like '1/3'), a visible Close button, click-outside-to-close, and Escape-to-close, with smooth open/close transitions. Update the projects data structure so each project holds an 'images' array instead of a single thumbnail.

* **Result/Output:** Big Pickle added the new certification entry and built a modal/lightbox component with Next/Back/Close controls, keyboard and swipe navigation, and a position indicator, wired to a restructured multi-image 'images' array per project.

---

### Task: 15. Assigning Real Project Screenshots and Making Certificates Clickable

* **Prompt used:**

  > Assign real screenshots to the correct projects: MIS folder images to the Streetwear Apparel system, EMIS folder images to the PE Dept. Inventory system. Make certification cards clickable so they open a modal displaying the certificate PDF expanded via an iframe/embed, with a Close button, click-outside/Escape to close, and a Download/Open-in-new-tab fallback link. Add certificate file paths (online-safety-netiquette.pdf, data-analytics-visualization-essentials.pdf) to the certifications data array.

* **Result/Output:** Big Pickle wired the real screenshot folders into each project's images array and built a certificate-viewing modal — though this modal was initially implemented for PDFs, which caused display issues investigated in Task 17.

---

### Task: 16. Debugging Broken Modal Interactions

* **Prompt used:**

  > Debug and fix the click-to-expand modal functionality for Certifications and Projects. Reported issues: (1) clicking sometimes does nothing at all; (2) modal opens but shows blank/broken content; (3) Next/Back/Close buttons don't work; (4) clicking opens the file in a new tab instead of the in-page modal. Investigate event bindings for conflicts/blocked propagation, check for stray anchor tags forcing new-tab navigation, verify file paths for 404s, check iframe/embed sizing and CSP restrictions, check modal state management (Alpine.js/vanilla JS) for scope bugs, check the browser console for JS errors, and test the full open/Next/Back/Close/reopen flow end-to-end on desktop and mobile.

* **Result/Output:** Big Pickle traced the issues to a combination of a stray anchor tag causing new-tab navigation and incorrect asset paths causing 404s on the certificate iframe; both were fixed. The remaining root cause (certificates being image files rendered through a PDF-only iframe) was resolved in the next task.

---

### Task: 17. Fixing the Certificate Modal to Render Images Instead of PDFs

* **Prompt used:**

  > The certificate files (onlinesafety.png, NCII.png, Dataanalytics.png) are actually PNG images, not PDFs. Update the certifications data array to reference these exact file paths. Fix the modal to render them using a standard img tag (not iframe/embed), scaled with max-width:100%, max-height:90vh, object-fit:contain so the full certificate is visible without distortion on desktop and mobile. Remove any leftover PDF-specific iframe/embed code from the certifications modal. Keep Close/click-outside/Escape behavior and the Download/Open-in-new-tab fallback link.

* **Result/Output:** Big Pickle swapped the certification modal's rendering logic from iframe/embed to a standard <img> tag pointing at the correct PNG paths, resolving the blank-modal bug definitively for all three certificates.

---

### Task: 18. Applying Merriweather Font and Correcting the College Year

* **Prompt used:**

  > Import 'Merriweather' via Google Fonts and apply it to a specific list of headings ('A bit about my journey', 'Bachelor of Science in Information Technology', 'Technical-Vocational-Livelihood (TVL) — ICT...', each certification title, each project title, 'Let's work together') and body text blocks (the About Me bio, skill tags, stats row, education descriptions, certification issuer/date lines, project descriptions and tag lists). Adjust line-height/spacing as needed since Merriweather is a serif font with different metrics. Also confirm/correct the 'Years in IT' stat and the 'Currently in my 4th year' Education text so both consistently show 4.

* **Result/Output:** Big Pickle imported Merriweather and applied it across the specified headings and body text blocks in both light and dark mode, with minor line-height adjustments for readability, and corrected the year-in-college value to 4 everywhere it appeared.

---

### Task: 19. Adding the Certifications Nav Link, New Project Images, and Two More Fonts

* **Prompt used:**

  > Add a 'Certifications' nav link between 'Education' and 'Projects' in both the desktop navbar and mobile hamburger menu (and footer nav list if duplicated). Reassign project images: emisystem folder (EMIS_1-13, skipping blank EMIS_12) to the PE Dept. Inventory system, SAD folder (SAD_1-53) to the Diocese Viewer Portal, keeping the Streetwear system's existing MIS images unchanged; confirm the gallery's position indicator and navigation remain performant with the larger 53-image set. Change the 'MY PORTFOLIO' navbar title font to Montserrat. Change 'Home, About, Education, Certifications, Projects, Contact' nav link font to 'Hagrid' (or closest fallback if unavailable) in both header and footer.

* **Result/Output:** Big Pickle added the Certifications nav link across desktop/mobile/footer, reassigned the correct image folders to the correct projects, applied Montserrat to the site title, and substituted a bold fallback font for the nav links since 'Hagrid' isn't a standard hosted Google Font.

---

### Task: 20. Matching the Certifications Heading Style to the Education Heading

* **Prompt used:**

  > Update the 'Certifications' section heading to match the visual style of the 'Education' heading: same bold serif font, weight, size, dark brown/charcoal color, and the same small peach/coral horizontal underline accent centered beneath it, with identical spacing/margins above and below. Apply consistently in light and dark mode.

* **Result/Output:** Big Pickle restyled the Certifications heading to exactly mirror the Education heading's font, color, and underline accent, unifying the section header styling.

---

### Task: 21. Replacing the Footer 'MDB' Initials Badge with the Real Profile Photo

* **Prompt used:**

  > Replace the small square 'MDB' initials badge in the footer with the same profile/portrait image already used in the About Me section (reuse the existing file/path). Keep the same size, rounded-square shape, and position; use object-fit:cover so the image is cropped/centered correctly at that small size across breakpoints and in both light and dark mode.

* **Result/Output:** Big Pickle swapped the footer's text-initials badge for an <img> element reusing the About Me profile photo, preserving the badge's original size and shape.

---

### Task: 22. Adding Four More Projects, Certificate Zoom, Trimming About-Me Tags, Profile Photo Background

* **Prompt used:**

  > Add four new project entries — Area Finder (C# geometry calculator), Permanent Record System (C# student records CRUD form), Student's Grade Computation System (C# grade calculator), VB Sample Records System (VB.NET CRUD app) — each with generated descriptions, tech tags, and images sourced from their respective public/images/projects/ folders, appended after the existing projects. In the certification modal, remove the Download/Open-in-new-tab link entirely and add zoom-in/zoom-out (buttons, pinch-to-zoom, scroll-wheel zoom) with pan-while-zoomed and double-tap-to-reset. In the About Me skill tags row, remove 'Data Analytics', 'IT Support', 'Data Visualization', and 'Computer Systems', keeping only 'Web Development' and 'ICT'. Restyle the profile photo's background to adopt the *style* (radiating thin horizontal lines plus soft blurred blob shapes) of a reference image, recolored to the site's existing peach/beige palette rather than the reference's navy/teal.

* **Result/Output:** Big Pickle added all four new projects with their image folders wired into the gallery, replaced the certificate modal's download link with zoom/pan controls, trimmed the About Me tag row to two tags, and applied a CSS-generated line-pattern-plus-blur-blob background behind the profile photo in the site's peach/beige tones.

---

### Task: 23. Adding a Peach Neon Glow Behind the Profile Photo

* **Prompt used:**

  > Add a soft radial glow behind the profile photo, centered behind the subject and fading outward, using the site's peach-neon accent colors (#ffcc99 to #ff9966 inner, fading into the dark base tone at the edges) as a radial-gradient background, plus an outer box-shadow/drop-shadow glow around the photo itself (peach, ~40px/80px blur). Apply in both light and dark mode, keeping the effect centered and responsive across breakpoints.

* **Result/Output:** Big Pickle added a radial-gradient glow container behind the profile photo plus a peach box-shadow around the photo frame. This was later simplified in Task 24 after a display bug was found.

---

### Task: 24. Fixing the Profile Photo Not Displaying and Simplifying to a Plain Neon Shadow

* **Prompt used:**

  > Fix: the profile photo is not displaying. Check that profile.png is correctly saved and referenced via asset('images/profile.png') or the correct relative path, check the browser console for a 404, check for CSS hiding it (display:none, opacity:0, wrong z-index, or a clipping overflow:hidden container), and confirm the file itself isn't 0 KB/corrupted. Then simplify the styling: remove the background glow/gradient entirely, keep only a neon peach box-shadow directly around the photo's frame (0 0 20px / 0 0 40px, rgba(255,153,102,...)), applied consistently in light and dark mode without background patterns behind the photo.

* **Result/Output:** Big Pickle located and fixed a broken/incorrect asset path that was causing the profile photo 404, removed the radial-gradient background glow from Task 23, and left only a peach neon box-shadow around the photo frame.

---

### Task: 25. Adding a Decorative Sparkle/Scribble Doodle Frame

* **Prompt used:**

  > Add a decorative doodle-style SVG frame around the profile photo: a hand-drawn double-line square border with small star/sparkle accents at each corner, a larger four-pointed sparkle pair (one outlined, one filled) along the outer-left edge, and a scribbled circular doodle near the bottom-right corner extending slightly outside the frame. Recolor the frame to the site's peach/coral accent instead of black. Position it layered on top of/around the photo, slightly larger than the photo itself, without replacing the existing neon shadow. Apply in light and dark mode, responsive across breakpoints.

* **Result/Output:** Big Pickle built the sparkle/scribble doodle frame as an SVG overlay in the site's peach accent color, layered alongside the existing neon shadow around the profile photo.

---

### Task: 26. Replacing the Frame with a Bottom-Left Tapered-Line Accent

* **Prompt used:**

  > Replace the previous doodle frame with a new SVG accent: three tapered vertical lines (thick at base, tapering to a fine point at top, varying heights) crossing three tapered horizontal lines (extending right, tapering to a point), forming an asymmetric corner design. Recolor to the site's peach/coral accent. Position at the bottom-left corner of the profile photo, partially overlapping the edge. Remove the previous sparkle/scribble frame entirely; keep the existing neon shadow. Apply in light and dark mode, responsive.

* **Result/Output:** Big Pickle removed the sparkle/scribble frame from Task 25 and replaced it with the tapered-line corner accent in peach, positioned at the photo's bottom-left corner.

---

### Task: 27. Replacing the Frame with an Octagon-Corner Double-Square Frame

* **Prompt used:**

  > Replace the current decorative accent with a new frame: two square outlines overlapping/offset from each other, both with corners cut at 45-degree angles (octagon-style) instead of sharp right angles, clean uniform thin lines. Recolor to the site's peach/coral accent. Position surrounding the full photo, sized slightly larger than the photo so the border sits just outside its edges. Remove the previous bottom-left tapered-line accent entirely; keep the existing neon shadow. Apply in light and dark mode, responsive.

* **Result/Output:** Big Pickle removed the tapered-line accent and built the new octagon-corner double-square SVG frame in the site's peach accent color, fully enclosing the profile photo.

---

### Task: 28. Reproducing the Octagon Frame Exactly (No Recoloring)

* **Prompt used:**

  > Replace the current decorative accent with a new frame using the exact style shown in the reference image, with no color or design changes: two square outlines with 45-degree-cut (octagon-style) corners, slightly overlapping/offset, plain black stroke, unmodified line thickness/corner angle/overlap. Do NOT recolor to the site's theme this time — keep it black exactly as shown. Position surrounding the full photo, remove the previous accent entirely, keep the existing neon shadow layered alongside it. Apply identically in light and dark mode (black, adjusting opacity only if needed for contrast).

* **Result/Output:** Big Pickle rebuilt the octagon-corner frame as a faithful, unrecolored black reproduction of the reference image, per the explicit instruction not to apply the site's theme colors to it this time.

---

### Task: 29. Replacing the Frame with a Double-Rectangle Offset Border and Removing 'Send Message'

* **Prompt used:**

  > Replace the profile photo frame with a new design reproduced exactly as shown in a reference image: two rectangular outlines overlapping/offset from each other — one thin black outline and one thicker/bolder black outline with sharp right-angle corners (no clipped corners this time) — the thick outline offset slightly inward/down-right from the thin one. Keep line weights, proportions, and offset exactly as shown; do not recolor. Remove the previous octagon-corner frame entirely; keep the existing neon shadow layered alongside it. Separately, remove the 'Send Message' button (and any associated contact form) from the Get In Touch section entirely, keeping contact info and social icon links intact, and adjust spacing so the section still looks balanced.

* **Result/Output:** Big Pickle replaced the octagon frame with the new offset double-rectangle black border matching the reference image, and removed the Send Message button/form from the Get In Touch section while preserving the contact info and social links.

---

### Task: 30. Fixing the Neon Shadow Visibility on the Frame and Locking the Frame to Black in Dark Mode

* **Prompt used:**

  > Fix: the neon shadow is not visible on the frame outline — move the peach glow so it applies directly to the frame's SVG outline using filter: drop-shadow() (since box-shadow doesn't affect SVG stroke shapes the way it affects boxes), e.g. two stacked drop-shadow layers at ~12px and ~24px blur in peach rgba. Ensure the glow wraps around both the thin and thick strokes and isn't clipped by any overflow:hidden parent — add padding/margin as needed. In DARK MODE specifically, force the frame's stroke color to remain solid black (#000000) rather than inheriting/blending into the dark theme background; override any CSS variable that's causing it to shift, scoped only to this frame element. Keep the glow color/behavior unchanged in dark mode — only the stroke color is locked to black. Test visibility and glow clipping across light mode, dark mode, and all breakpoints.

* **Result/Output:** Big Pickle moved the peach glow from box-shadow to a layered SVG drop-shadow filter so it now visibly wraps the frame's strokes, fixed a parent-container clipping issue that was hiding the glow, and hardcoded the frame's stroke color to black in dark mode so it no longer blends into the dark background.

---

