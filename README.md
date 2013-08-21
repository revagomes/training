# Palantir.net Drupal 8 Training

## Step 0 : Setup

Welcome to Drupal 8!

In the _0-setup_ branch you will find a module called *sitesurvey* that contains a set of scaffolding files that introduce Drupal 8 module structure.

Also included are Simpletests for the functionality required by the module. You can read the module specification in the [sitesurvey/README.md](https://github.com/palantirnet/training/tree/0-setup/sitesurvey) file. In our examples, we will reference that module.

## Lesson 1: Routing

For our first lesson, we will cover the basic layout and organization of Drupal 8 modules. Our goals for this code session are:

* Create the HTML page that displays at /sitesurvey as defined by the requirements.
* The page may be blank, but must return a 200 status code for all users.
* If returning a form, the form may be blank.

### Success criteria

* Requests to the _/sitesurvey_ path should return status 200 and valid HTML.
* The _Sitesurvey Form_ test should return *7 passes, 22 fails, and 0 exceptions*

To get started, we need to review the module structure.

## Module structure

### Root files

In Drupal 8, there are two required files for each module:
* **sitesurvey.info.yml**
  * A [YAML](http://yaml.org/) file that registers your module with Drupal. See [this change record to learn about this file](https://drupal.org/node/1935708). For this lesson, we have filled out the file for you.
* **sitesurvey.module**
  * The module file. Note that, in some cases, this file may be empty.

Additional features and functionality can be built using basic patterns; some of these patterns come from Object Oriented systems (OO) such as Symfony. Others will look familiar to Drupal developers.

In our module, we have three additional files in module root:
* **sitesurvey.install**
  * Contains functions to run on installation and uninstallation. Largely unchanged from Drupal 7.
* **sitesurvey.routing.yml**
  * A new file, the [routing YAML file](https://drupal.org/node/1800686) defines the routes (think Drupal 7 menu paths) used by your module. We'll look at routes in our first task, and show the answers in branch _1-routing_.
* **sitesurvey.views.inc**
  * A file containing specific hook implementations. Since Views is now in core, we will provide Views support for our module data in the _5-views_ branch.

### Subdirectories

In addition to our root directory, most modules also contain three additional directories:

* **config**
  * Stores YAML files related to module configuration. We will explore these files in later branches, such as _5-views_.
* **lib**
  * The library directory holds OO code and is designed around the [PSR-0 standard for PHP](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md). It encourages code re-use across multiple projects. The biggest changes to Drupal are found in this directory.
* **tests**
  * For projects using [PHPUnit](http://www.phpunit.de/) for testing. See [this change notice for more information](https://drupal.org/node/2012184). We will explore these files in the _6-phpunit_ branch.

#### /lib

The library directory (/lib) stores most of the code for your project. It used PSR-0 conventions to encourage code re-use. Once you get used to the patterns used in Drupal, you may find it an excellent way to keep code organized.

The library structure also helps enforce separation of concerns in your code. As a general rule when looking at /lib, each file should be a single class. Each class should have a single responsibility.

The base structure of /lib is as follows:

    lib/
      Drupal/           <-- The Drupal project namespace
        sitesurvey/     <-- The project namespace
          Controller/   <-- Contains classes for route controllers
          Form/         <-- Contains classes for forms
          Plugin/       <-- Holds Drupal plugin definitions
            Block/      <-- Contains classes for blocks
          Tests/        <-- Contains classes for Simpletests

There are other directories that may go in _lib/Drupal/sitesurvey_, which we will address later.

#### Tests

For the Site Survey module, we have created tests for the defined functionality. In each lesson, your goal will be to make specific tests pass.

The test structure is as follows:

    /lib/Drupal/sitesurvey/Tests
      SitesurveyBlockTest.php     <-- Tests block access and output rules
      SitesurveyDataTest.php      <-- Tests data storage and admin page
      SitesurveyFormTest.php      <-- Tests form usage and data storage
      SitesurveyTestBase.php      <-- Abstract base class for test setup

## Hints

For this lesson, the primary files we are concerned with are:

* sitesurvey.routing.yml
* lib/Drupal/sitesurvey/Form/SitesurveyForm.php

