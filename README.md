# stomt-kirby-extension
A STOMT plugin for the Kirby CMS

# STOMT($pagename, $widgetType = 'addTab', $position = 'right', $label = 'Quick Feedback', $colorText = '#ffffff', $colorBackground ='#000000', $colorHover = '#ccc');



- **$pagename** (string)  
  Your pagename stomt.com/{pagename} 
- **$widgetType** (string)  
  Make sure to pick the right widget type from https://stomt.co/web | default: addTap
- **$position** (string)  
  Choose between top, left, right, bottom | default: right
- **$label** (string)  
  Choose a good call-to-action which will be displayed | default: "Quick Feedback"
- **$colorText** (string)  
  Pick a font color for your feedback button | default: "Quick Feedback"
- **$colorBackground** (string)  
  Pick a background color for your feedback button | default: "Quick Feedback"
- **$colorHover** (string)  
  Pick a hover color for your feedback button | default: "Quick Feedback"

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
