<?php if(!defined('KIRBY')) exit ?>

# slide blueprint

title: Services
pages:
  template: service
  sort:     title asc

deletable: false

files: false
fields:
  title:
    label: Title
    type:  text
  summary:
    label: Summary
    type:  textarea
  description:
    label: SEO Summary
    type: textarea
    buttons: false