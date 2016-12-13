![Web Semantics, Inc. PyroCMS 3 Admin Theme](https://websemantics.github.io/pyrocms-theme/assets/img/pyrocms.svg)
> Hand crafted, multi-skinned, responsive and easily customizable PyroCMS 3 admin theme built for a much refined and intuitive user experience. An absolute labor of love to make possible ultimate control over style and layout. Welcome to a new way to build PyroCMS 3 Admin themes.

## Introduction

The idea of this project is to build an extensible and modular Admin theme with varieties of style components and layout scaffoldings to enable deep customization and maximum code reuse. Every single line of code or style while writing this theme was carefully placed to perform a function or improve overall user experience for desktop and mobile devices.

The theme allows for a lighter approach to customize core styles to suit different requirements through the concept of [Skins](#skins). This projects hopes to build a catalog of Admin UI styles and layouts that the community can use and share.

Head over to the [Skins](#skins) section to learn more about how that works and the options available for customization.

## Features

- Easy to customize and style,
- Comes with 6 Skins out-of-the-box,
- Supports the official [PyroCMS theme](https://github.com/pyrocms/pyrocms-theme),
- Allows to `sort` and `exclude` modules from the navigation menu (Sidebar),
- Supports different layouts (for example, with / without top Navbar),
- Comes with new login page.

## Install

1- Use `composer ` to install as follows,

```bash
composer require websemantics/pyrocms-theme
```

2- Change value of `ADMIN_THEME` in the project `.env` file,  

```
ADMIN_THEME=websemantics.theme.pyrocms
```

## Skins

This theme was designed to enable drastic changes to the style, layout and user experience with minimal effort on the behalf of the developer by introducing a new concept, `Skins`.

A skin is a lightway approach to redesign and customize the default theme styles to suite your needs.  The `default theme skin`, [Plus Skin](https://github.com/websemantics/plus-skin), shown below, features a sidebar, one of many layout options provided with this theme.

Customization can range from changes to the theme variables, adding additional styles to overriding theme views.

![Plus Skin](https://github.com/websemantics/plus-skin/raw/master/resources/img/plus.png)

### Available Skins

The theme comes with a number of skins as you can see below; each of these skins come as an addon package that you can require individually or through this theme.

| [Official](https://github.com/websemantics/pyrocms-skin) | [Default](https://github.com/websemantics/plus-skin) |
|---|---|
| ![Official Skin](https://github.com/websemantics/pyrocms-skin/raw/master/resources/img/pyrocms.png) | ![Default Skin](https://github.com/websemantics/plus-skin/raw/master/resources/img/plus.png) |

| [Classic](https://github.com/websemantics/classic-skin) | [Navy Blue](https://github.com/websemantics/blue-skin) |
|---|---|
| ![Classic Skin](https://github.com/websemantics/classic-skin/raw/master/resources/img/classic.png) | ![Navy Blue Skin](https://github.com/websemantics/blue-skin/raw/master/resources/img/blue.png) |

| [Github](https://github.com/websemantics/github-skin) | [Horizon](https://github.com/websemantics/horizon-skin) |
|---|---|
| ![Github Skin](https://github.com/websemantics/github-skin/raw/master/resources/img/github.png) | ![Horizon Skin](https://github.com/websemantics/horizon-skin/raw/master/resources/img/horizon.png)  |

| [Stone](https://github.com/websemantics/stone-skin) | Add Yours! |
|---|---|
| ![Stone Skin](https://github.com/websemantics/stone-skin/raw/master/resources/img/stone.png) | ![Yours Skin](https://websemantics.github.io/pyrocms-theme/assets/img/nopreview.png) |

### Official Skin

While enjoying many of the skins provided in this theme you can still go back to the official PyroCMS 3 admin theme without having to actually switch themes. This project decided to build on the great work done on the [official PyroCMS theme](https://github.com/pyrocms/pyrocms-theme) to keep the theme lean and guarantee that all of PyroCMS official Admin theme default styles are supported out-of-the-box. It actually goes further than that by adding few features to enhance appearance and user experience as described below,

- Retina display support for the brand logo using SVG images
- Enhanced user experience provided as an animation for the modules `push` menu (slowly opens/closes)
- Support for Image Select, a way to present images with `select` field type (radio mode)
- Brand new login page with animated logo

### Change Active Skin

To change the current active skin, head over to `setting` then `themes` or click on `Theme Settings` button at the footer. A list of the available skins will be presented with preview pictures. Select your favorite skin and click save, vola!

You can also set the value of `PYROCMS_SKIN` in the project `.env` to the skin namespace,  

```
PYROCMS_SKIN=websemantics.skin.github
```

## How to Create a Skin

Let's say you want to create a new skin called. `sunshine`. Simply, follow these steps,

- Create a new skin addon (requires [Builder extension](github.com/websemantics/builder-extension)),

```bash
php artisan make:addon vendor.skin.sunshine
```

- Change skin settings from skin config file, `sunshine-skin/resources/config/skin.php`.

- Switch to the new skin as described in, [Change Active Skin](#change-active-skin) section.

### Embedded Skins

The great thing about skins is that, they don't have to be their own addon package. A skin can also be specified within any addon type including `extensions` and `modules`.

All is required for the theme to find and use a skin is,

- The skin main config files `addon/resources/config/skin.php`,
- A preview image `addon/resources/img/name.png` and,
- The skin main style file, `addon/resources/scss/skin.scss`.

Check out the [Plus Skin](https://github.com/websemantics/plus-skin) for details.

## Control Layout

This theme comes with few very powerful features that were aimed to change the skin layout using `sass` and theme configuration variables,

### Show Navbar

When building a skin, you can decide on whether you want to have a navbar or not. Turning this feature `on` / `off` will show the navbar with an attached toggle button to `show` / `hide` the sidebar and the classic menu, other navbar items. Also, some sidebar links will be removed, for example, `View Site`, `Logout` etc as will be provided by the navbar,

### Sidebar

This theme allows to `sort` and `exclude` modules from the Sidebar. You can sort modules in the Sidebar via the `sidebar` config variable @ `resources/config/config.php`. Simply, list the modules' slugs in the `sort` array, for example,

```php
  'sidebar' => [
    'sort' => [
      'anomaly.module.posts',
      'anomaly.module.pages'
    ]
  ]
```

This will show the `Posts` module in top of the sidebar list followed by the `pages` module. The remaining modules will be listed as per the default control panel navigation behaviour.

For exclusion, listing all undesired modules in the `exclude` config variable. Here's an example,

```php
  'sidebar' => [
    'exclude' => [
      'anomaly.module.addons',
      'anomaly.module.variables'
    ]
  ]
```

Feel free to mix and match between `exclude` and `sort` to achieved the desired look.

### Toggle Button

There are two types of toggle buttons the theme uses to collapse the Sidebar. The default one uses the `toggle` css class and is used by default. A more elaborate button that has animation uses `hip-toggle` class. Check the styles @ `pyrocms-theme/resources/scss/theme/components/_toggle.scss`.

For how to use the Hip Toggle Button with your own skin, check the `Github` skin implementation. More docs to come for better usage.

## Inspirations

Future expansions for the theme,

- [Multi-Level Accordion Menu](https://codyhouse.co/demo/multi-level-accordion-menu/animated.html).
- [Animated Page Transition](https://codyhouse.co/demo/animated-page-transition-2/index.html).
- [Responsive Sidebar Navigation](https://codyhouse.co/demo/responsive-sidebar-navigation/index.html#0).

## Support

Star :star: this repository if you find this project useful, to show support or simply, for being awesome :)

You can also [![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/websemanticsca).

Need help or have a question? post at [StackOverflow](https://stackoverflow.com/questions/tagged/pyrocms-theme+websemantics).

*Please don't use the issue trackers for support/questions.*

## Contribution

Contributions to this project are accepted in the form of feedback, bugs reports and even better - pull requests.

## Resources

- [Auto Pyro](https://github.com/websemantics/auto-pyro), PyroCMS deploy tool for faster development experience.
- [Template Template](https://github.com/pyrocms-templates/template-template), Default Builder extension template for building Builder extension templates.
- [Registry](https://github.com/pyrocms-templates), List of all Builder extension available template.
- [Awesome PyroCMS](https://github.com/websemantics/awesome-pyrocms), Curated list of PyroCMS addons and resources.
- [PyroCMS Cheatsheet](http://websemantics.github.io/pyrocms-cheatsheet), List of commands and features for PyroCMS 3.
- [PyroCMS](https://github.com/pyrocms/pyrocms), MVC PHP Content Management System built to be easy to use, theme and develop with. It is used by individuals and organizations of all sizes around the world.

## License

[MIT license](http://opensource.org/licenses/mit-license.php)
Copyright (c) Web Semantics, Inc.
