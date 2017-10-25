# Collect feedback from your Kirby website via STOMT
![Version](https://img.shields.io/badge/version-1.0.0-green.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)

Use the [STOMT widget](https://stomt.co/web) on your Kirby website.  
   
Create a user-account on [stomt.com/signup](https://www.stomt.com/signup) and then [create a page for your project](https://www.stomt.com/createTarget). You can then use our website widgets to collect feedback from your website. The feedback will be collected on STOMT where your audience can vote the feedback and where you can react and manage it in a transparent way. 

**Demo:** [STOMT Widgets Showcase](https://stomt.co/web)

# STOMT($pagename, $widgetType, $position, $label, $colorText, $colorBackground, $colorHover);



- **$pagename** (string) **| required**   
  Your pagename stomt.com/{pagename}   
- **$widgetType** (string) **| default: addTab**  
  Make sure to pick the right widget type from https://stomt.co/web
- **$position** (string) **| default: right**  
  Choose between top, left, right, bottom  
- **$label** (string)  **| default: "Quick Feedback"**  
  Choose a good call-to-action which will be displayed 
- **$colorText** (string) **| default: #FFFFFF**  
  Pick a font color for your feedback button  
- **$colorBackground** (string) **| default: #000000**  
  Pick a background color for your feedback button 
- **$colorHover** (string) **| default: #CCCCCC**  
  Pick a hover color for your feedback button 

## Installation

### 1. Clone or download

1. Clone or download this repository.
2. Unzip the archive if needed and rename the folder to `getcached`.

Make sure that the plugin folder structure looks like this:

```
site/plugins/STOMT/
```

### 2. Git Submodule

If you know your way around Git, you can download this plugin as a submodule:

```
$ cd path/to/kirby
$ git submodule add https://github.com/stomt/stomt-kirby-extension site/plugins/STOMT
```

## Usage

Use `STOMT($pagename, $widgetType)` anywhere on your website.

## Use-Cases
STOMT itself collects feedback [from their blog](https://www.stomt.com/blog) to their [blogs STOMT page](https://www.stomt.com/stomt-blog).

The game "Empires of the Undergrowth" [links to their STOMT page](http://eotugame.com) and uses the integration in-game and [on their forum](http://forum.eotugame.com) (to reduce feedback related discussions).

## Costs: Free

There will be premium features on the STOMT platform.

## Screenshots from the different widgets

<img width="759" alt="stomt creation form" src="https://user-images.githubusercontent.com/1251793/31425890-80f59ce4-ae61-11e7-9372-b5cef940a8ee.png">
<img width="892" alt="stomt sidebar widget" src="https://user-images.githubusercontent.com/1251793/31425892-812973a2-ae61-11e7-8123-f5accc2e8735.png">
<img width="736" alt="stomt inline feed" src="https://user-images.githubusercontent.com/1251793/31425891-810e95dc-ae61-11e7-87cb-dbf2264e491f.png">


