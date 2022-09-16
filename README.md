# Whats this?

Package that reduce headache when deploying project that use voyager

-   generate seeder for all changes in admin table for easy deployment

# Installation

-   `composer require vortechron/voyager-extended`
-   run vendor:publish

# Usage

-   disable any changes to voyager stuff in production. only allow for local development.
-   `php artisan vext:regen` whenever u want push changes to production
-   add `php artisan vext:reseed` in deployment script to sync back

# Notes

if u want to overide default user page

-   /views/vendor/voyager/users/edit-add.blade.php
    -   @extends('voyager::bread.edit-add')
