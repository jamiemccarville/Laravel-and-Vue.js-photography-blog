# Project Notes

Hi Jānis and Emīls!  I just wanted to take a second and gives some notes about my thought process as I developed the project.  Without any specific guidelines for the structure there were obviously some decisions to be made about how to put everything together.  Below I will give a brief overview of my choices.

## Modular

I decided that as it was a Vue.js project, that it made sense to use multiple components and not just put all of the code into a single component.  Even though this project only has one page, using multiple components is representative of what the process would look like while developing most other Vue.js projects.

## Global Style Sheet

I decided to use a global style sheet as opposed to keeping the styles in and scoped to their own components.  This allowed me to utilize both scss and BEM easily across all of the styles.

## Responsive Design

My approach was to trying and keep the look and feel similar to the required design across all screen sizes.

### Main Content Size

I wanted to have the width of the main content section expand as the screen size expanded, but to a maximum of 560px (the width that it is for 1440px screen size).  This kept content in that section from expanding too much and no longer matching the feel of the design.

### Breakpoints

I chose 950px as the breakpoint for the design to go from flex: column to flex: row for the following reasons:

  1. This would keep the design in column for the standard iPad screen (768px) but display in row for the iPad pro (1024px)
  2. So why specifically 950px?  This was the point just before the aside section would start to be squised by the shrinking screen, making the button text move to two lines.

### Aside Content Size

I kept the aside content similar to the provided design through different screen sizes.  I kept it the same width as the main section through 414px (iphone XS Max) and then made the width a percentage of the screen width through 949px - when the design switches from column to row.  Similar to the main content, the aside content keeps the same width as the 1440px design once the display switches to row.  

### Main and Aside Content Together

From when the design switches to flex: row at 950px, the space between the main and aside content increase as a percentage of the screen width, to their maximum distance apart at 1440px.   They are centered and the available space on either side increases/decreases as the screen size changes.  I felt that this gave the design a unified feel through multiple screen sizes.

I hope these notes provided some insight to my thought process and design decisions.  I had a lot of fun developing this project and I'm excited to pass it back 😃.
