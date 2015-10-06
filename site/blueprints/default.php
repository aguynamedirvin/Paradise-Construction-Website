<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true

fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  description:
    label: SEO Summary
    type: textarea
    buttons: false