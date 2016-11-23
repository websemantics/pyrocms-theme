![Web Semantics, Inc. PyroCMS 3 Admin Theme](https://websemantics.github.io/pyrocms-theme/assets/img/pyrocms.svg)
> Hand crafted, multi-skinned, responsive and easily customizable PyroCMS 3 admin theme built for a much refined and intuitive user experience. An absolute labor of love to make possible ultimate control over style and layout. Welcome to a new way to build PyroCMS 3 admin themes.

## Default Layout

Screenshot below shows the default theme skin features a sidebar, one of many layout options provided with this theme. 

![Pyrocms Theme Default](https://websemantics.github.io/pyrocms-theme/assets/skin/default.png)

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

## Introduction 

This project builds on the great work done on the [offical PyroCMS theme](https://github.com/pyrocms/pyrocms-theme) to keep the theme lean and guarantee that, all of PyroCMS official admin theme default styles are supported out-of-the-box. It actually goes further than that by adding few features to enhance appearance and user experience as described below.

Special care has been taken to make this theme work on desktop and mobile devices with a number of layout options. The theme comes with a dozen of skins to demonstrate how it works and the options available for customization.

| ![Github Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/github.png) |
|---|

The previous screenshot shows the Github skin, nice & clean, exactly how UI is meant to be.

Every single line of code or style was carefully placed to perform a function or improve overall user experience. The style rules were streamlined and organized in an easy to follow fashion making this theme easy to understand and extremely straightforward to extend and customize. A number of skins have been built to demonstrate how to customize and style this theme for your ultimate satisfaction.

## Skins

This theme was designed to enable drastic changes to the style, layout and user experience with minimal effort on the behalf of the developer using theme variables. 

A skin is a light way to redesign and customize the default theme design to suite your needs. The theme comes with a number of skins as you can see below.

| Official | Default | Classic | Navy Blue |
|---|---|---|---|
| ![Official Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/pyrocms.png) | ![Default Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/default.png) | ![Classic Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/classic.png)  | ![Navy Blue Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/blue.png)  | 

| Github | Horizon | Stone | Add yours? |
|---|---|---|---|
| ![Github Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/github.png) | ![Horizon Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/horizon.png) | ![Stone Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/stone.png)  | ![Yours Skin](https://websemantics.github.io/pyrocms-theme/assets/skin/nopreview.png)  | 

To change the current skin, head over to `setting` then `themes`. A list of the available themes will be presented with preview pictures. Select your favorite skin and click on save, vola!.

#### Official Theme Skin

Great news! While enjoying many of the skins provided in this theme you can still go back to the official PyroCMS 3 admin theme without having to actually switch themes; just follow the instructions from the previous section.

There has been few enhancements made to the official theme including:

- Retina display support for the brand logo using SVG images
- Enhanced user experience provided as an animation for the modules push menu (slowly opens/closes)
- Support for Image Select, a way to present images with the radio mode of the field type select
- Brand new login page with some sexy animation

## How to Create a Skin

Skins are located at `resources/scss/skin` and the theme main style files can be found at, `resources/scss/theme`. 

```
MORE DETAILS BE ADDED LATER
```

## Control Layout

This theme comes with few very powerful features that were aimed to change the skin layout using sass variables, 

1- Show Navbar

When building a skin, you can decide on whether you want to have a navbar or not. Turning this feature on / off will show the navbar with an attached toggle button to show/hide the sidebar and the classic menu, other navbar items. Also, some sidebar links will be removed, for example, View Site, Logout ets as will be provided by the navbar,

```
MORE DETAILS BE ADDED LATER
```

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
