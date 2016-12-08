![Web Semantics, Inc. PyroCMS 3 Admin Theme](https://websemantics.github.io/pyrocms-theme/assets/img/pyrocms.svg)
> Hand crafted, multi-skinned, responsive and easily customizable PyroCMS 3 admin theme built for a much refined and intuitive user experience. An absolute labor of love to make possible ultimate control over style and layout. Welcome to a new way to build PyroCMS 3 admin themes.

## Introduction

The idea of this project is to build all the style components and layout scaffoldings of a great Admin theme once to eliminate any urges of re-inventing the wheel. The theme allows for a light approach to customize core styles to suit different requirements through the concept of [Skins](#skins).

This projects hopes to build a catalog of Admin UI styles and layouts that the community can use and share. Pull requests for new skins are encouraged and will be accepted. Contributions to the original author of all new skins is evident as described in [How to Create a Skin](#how-to-create-a-skin) section.

Every single line of code or style while writing this theme was carefully placed to perform a function or improve overall user experience. Special care has been taken to make this theme work on desktop and mobile devices with a number of layout options. The theme comes with a dozen of [Skins](#skins) to demonstrate how it works and the options available for customization.

| ![Github Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/github.png) |
|---|

The previous screenshot shows the Github skin, nice & clean, exactly how UI is meant to be!

## Features

- Easy to style (see [Skins](#skins))
- Comes with 6 Skins out-of-the-box
- Supports the official [PyroCMS theme](https://github.com/pyrocms/pyrocms-theme)
- Allows to `sort` and `exclude` modules from the navigation menu (Sidebar)
- Supports different layouts (for example, with / without top Navbar)
- Comes with new login page

## Install

1- Use `composer ` to install as follows,

```bash
composer require websemantics/pyrocms-theme
```

2- Change `ADMIN_THEME` in `.env` file,  

```
ADMIN_THEME=websemantics.theme.pyrocms
```

You're all set!

## Skins

This theme was designed to enable drastic changes to the style, layout and user experience with minimal effort on the behalf of the developer using theme variables.

![Pyrocms Theme Default](https://websemantics.github.io/pyrocms-theme/assets/skin/default.png)

Screenshot above shows the default theme skin features a sidebar, one of many layout options provided with this theme.

A skin is a light way to redesign and customize the default theme design to suite your needs. The theme comes with a number of skins as you can see below.

| Official | Default | Classic | Navy Blue |
|---|---|---|---|
| ![Official Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/pyrocms.png) | ![Default Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/default.png) | ![Classic Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/classic.png)  | ![Navy Blue Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/blue.png)  |

| Github | Horizon | Stone | Add yours? |
|---|---|---|---|
| ![Github Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/github.png) | ![Horizon Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/horizon.png) | ![Stone Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/stone.png)  | ![Yours Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/nopreview.png)  |

To change the current skin, head over to `setting` then `themes` or click on `Theme Settings` button at the footer. A list of the available skins will be presented with preview pictures. Select your favorite skin and click on save, vola!.

### Official Theme Skin

While enjoying many of the skins provided in this theme you can still go back to the official PyroCMS 3 admin theme without having to actually switch themes. This project decided to build on the great work done on the [official PyroCMS theme](https://github.com/pyrocms/pyrocms-theme) to keep the theme lean and guarantee that all of PyroCMS official Admin theme default styles are supported out-of-the-box. It actually goes further than that by adding few features to enhance appearance and user experience as described below,

- Retina display support for the brand logo using SVG images
- Enhanced user experience provided as an animation for the modules `push` menu (slowly opens/closes)
- Support for Image Select, a way to present images with `select` field type (radio mode)
- Brand new login page with animated logo

### How to Create a Skin

Let's say you want to create a new skin called `sunshine`. There are four steps to accomplish that,

- Create a new folder for the new skin at, `websemantics/pyrocms-theme/resources/scss/skin/sunshine`.
- Copy the files of an existing skin, for example, `websemantics/pyrocms-theme/resources/scss/skin/blue` to start.
- Add the skin meta data to the `skins` configuration variable at `websemantics/pyrocms-theme/resources/config/config.php`,
```
'sunshine' => [
    'name' => 'Sunshine',
    'description' => 'Sunshine is amazing, .. absolutely not, only in winter!!',
    'author' => 'You, or Your company, Inc.'
]
```
- Optionally, add a preview image (1920 × 1080) for your new skin at `websemantics/pyrocms-theme/docs/assets/skin/sunshine.png`.

You're set! Now, create a pull request when you're done ʕ-̫͡-ʔ

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

Need help or have a question? post at [StackOverflow](https://stackoverflow.com/questions/tagged/pyrocms-theme websemantics).

*Please don't use the issue trackers for support/questions.*

## Contribution

Contributions to this project are accepted in the form of feedback, bugs reports and even better - pull requests.

## Resources

- [Auto Pyro](https://github.com/websemantics/auto-pyro), PyroCMS deploy tool for faster development experience.
- [Template Template](https://github.com/pyrocms-templates/template-template), Default Pyro Builder template for building Pyro Builder templates.
- [Registry](https://github.com/pyrocms-templates), List of all Pyro Builder available template.
- [Awesome PyroCMS](https://github.com/websemantics/awesome-pyrocms), Curated list of PyroCMS addons and resources.
- [PyroCMS Cheatsheet](http://websemantics.github.io/pyrocms-cheatsheet), List of commands and features for PyroCMS 3.
- [PyroCMS](https://github.com/pyrocms/pyrocms), MVC PHP Content Management System built to be easy to use, theme and develop with. It is used by individuals and organizations of all sizes around the world.

## License

[MIT license](http://opensource.org/licenses/mit-license.php)
Copyright (c) Web Semantics, Inc.
