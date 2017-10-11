# Collect feedback from your website via STOMT
![Version](https://img.shields.io/badge/version-1.0.0-green.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)

Use the [STOMT widget](https://stomt.co/web) on your Kirby website

# STOMT($pagename, $widgetType, $position, $label, $colorText, $colorBackground, $colorHover);



- **$pagename** (string) | required 
  Your pagename stomt.com/{pagename} 
- **$widgetType** (string)  
  Make sure to pick the right widget type from https://stomt.co/web | default: addTab
- **$position** (string)  
  Choose between top, left, right, bottom | default: right
- **$label** (string)  
  Choose a good call-to-action which will be displayed | default: "Quick Feedback"
- **$colorText** (string)  
  Pick a font color for your feedback button | default: #FFFFFF
- **$colorBackground** (string)  
  Pick a background color for your feedback button | default: #000000
- **$colorHover** (string)  
  Pick a hover color for your feedback button | default: #CCCCCC

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
