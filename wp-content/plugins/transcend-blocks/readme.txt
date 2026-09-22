=== Transcend Blocks ===
Contributors:      John
Tags:              block
Tested up to:      7.1.1
Stable tag:        0.1.0
License:           GPL-2.0-or-later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html

Custom Gutenberg blocks for the Transcend Limits website.

== Description ==

Transcend Blocks contains the reusable custom Gutenberg blocks used by
Transcend Limits.

The plugin is intentionally separate from the theme so that the site's
custom UI components can remain independent of the block theme.

== Development ==

Block source files live in the `src` directory.

Build the production assets with:

    npm run build

Start the development build watcher with:

    npm run start

Compiled assets are generated in the `build` directory.

== Architecture ==

Blocks use the `transcend/*` namespace.

Examples include:

    transcend/site-header
    transcend/site-footer
    transcend/story-card
    transcend/story-grid

== License ==

GPL-2.0-or-later
