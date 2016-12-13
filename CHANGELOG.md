1.2.0
  date: 2016-12-13
  changes:
  - Separate `skins` from the theme and into their own addon `composer` packages.
  - Make `core` folder available for style imports to improve inheritance across themes.
  - Improve docs with details of how to make / use `skins`.
  - Add `gitignore.`

1.1.2
    date: 2016-12-09
    changes:
    - Fixes issue #9.
1.1.1
  date: 2016-12-08
  changes:
  - Enable `sort` and `exclude` modules from the Sidebar.
  - Fix small typos.
1.0.2
  date: 2016-12-07
  changes:
  - Make it easy to change the theme skin with a direct link from the footer.
  - Remove buttons' border for Github skin.
  - Add an optional animated toggle button `hip-toggle`, used by Github skin.
  - Remove `.btn` elements outline and hide `banner` partial if not official skin.
1.0.1
  date: 2016-12-06
  changes:
  - Remove `resources\config\variables.php` as it is no longer required (Pyro will drop support in next major release).
1.0.0
  date: 2016-11-24
  changes:
  - Big jump from 0.0.1 to 1.0.0 for no good reason except I can ;P
  - Improve on the theme's variables, `_variables.scss` to include the `pyrocms.theme.pyrocms`'s also.
  - Fixes to accommodate working with https://github.com/websemantics/lcss2php, in v1.1.
