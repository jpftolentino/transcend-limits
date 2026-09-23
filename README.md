## Project Structure

The custom WordPress theme is located at:

`wp-content/themes/transcend-limits`

The project also includes two custom plugins:

* `wp-content/plugins/transcend-blocks` — custom Gutenberg blocks
* `wp-content/plugins/transcend-content` — Story content model and related functionality

When reviewing the project, please refer to both the custom theme and these plugin directories, as the site's implementation is intentionally separated between presentation, reusable blocks, and content functionality.


## Decision Log

### Framework / Library:
- I used Gutenberg and custom WordPress blocks to create reusable, editor-friendly components while keeping content management within WordPress.

### U of T Visual Identity:
- I approached the U of T visual identity by following the U of T Brand Portal standards, making sure the color, spacing, typography etc. met brand standards (also used provided websites as a reference).

### News Content Structure:
- I created a custom Story post type so news content is managed separately from the homepage. A custom Story Grid block dynamically retrieves and displays published Stories.

### Responsive Design:
- I chose Bootstrap for the responsive layout and styling, using its grid, breakpoints, and utilities rather than building a responsive system from scratch (Our teams mostly uses Bootstrap for all of the websites we are in charge of).

### Accessibility:
- I used semantic HTML and meaningful image alt text as baseline accessibility requirements and considered responsive navigation and content structure with accessibility in mind.

### Deliberately Not Built:
- I chose not to build unnecessary advanced features such as complex navigation, animations, additional custom blocks, or advanced Story filtering so I could focus on the core requirements.

### Time-Limit Trade-off:
- I prioritized a complete end-to-end content flow—from managing Stories in WordPress to displaying them as cards and linking to individual Story pages—over additional visual and functional enhancements.

### With Additional Time:
- I would perform a more comprehensive accessibility and performance audit, add automated testing, further refine responsive behavior, improve the Gutenberg editing experience and add some tracking using GA4 and Looker studios.
