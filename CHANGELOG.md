## Change Log
All notable changes to this project will be documented in this section.

#### [1.2.3] - 2016-12-13
##### Changed
  - Improve style inheritance across themes and skins.
  - Load the theme and skin variables `LoadThemeVariables` for field types and other addons.
  - Install skins with `composer scripts`.

#### [1.2.2] - 2016-12-13
##### Changed
  - Remove skins dependencies. Skins must be composer required after the theme.

#### [1.2.0] - 2016-12-13
##### Changed
  - Separate `skins` from the theme and into their own addon `composer` packages.
  - Make `core` folder available for style imports to improve inheritance across themes.
  - Improve docs with details of how to make / use `skins`.
  - Add `gitignore.`

#### [1.1.2] - 2016-12-09
##### Changed
  - Fixes issue #9.

#### [1.1.1] - 2016-12-08
##### Changed
  - Enable `sort` and `exclude` modules from the Sidebar.
  - Fix small typos.

#### [1.0.2] - 2016-12-07w
##### Changed
  - Make it easy to change the theme skin with a direct link from the footer.
  - Remove buttons' border for Github skin.
  - Add an optional animated toggle button `hip-toggle`, used by Github skin.
  - Remove `.btn` elements outline and hide `banner` partial if not official skin.

#### [1.0.1] - 2016-12-06
##### Changed
  - Remove `resources\config\variables.php` as it is no longer required (Pyro will drop support in next major release).

#### [1.0.0] - 2016-11-24
##### Changed
  - Big jump from 0.0.1 to 1.0.0 for no good reason except I can ;P
  - Improve on the theme's variables, `_variables.scss` to include the `pyrocms.theme.pyrocms`'s also.
  - Fixes to accommodate working with https://github.com/websemantics/lcss2php, in v1.1.
