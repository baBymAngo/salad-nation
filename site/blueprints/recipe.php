<?php if(!defined('KIRBY')) exit ?>

title: Recipe
pages: false
fields:
 title:
    label: Title
    type:  text
 introduction:
 	label: Intro
 	type: textarea
 tags:
 	label: Tags
 	type: tags
 published:
 	label: date
 	type: date
 line-a:
 	type: line
 recipeTitle: 
 	label: Recipe Title
 	type: title
 servings:
 	label: Servings
 	type: number
 ingredients:
 	label: Ingredient
 	type: structure
 	entry: >
 		{{ingredient}}
 	fields:
 		ingredient:
 		  label: Ingredient
 		  type: text
 instructions:
 	label: Instructions
 	type: textarea
