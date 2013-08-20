# Palantir.net Drupal 8 Training

## Step 0 : Setup

Welcome to Drupal 8!

In the _0-setup_ branch you will find a module called *sitesurvey* that contains a set of scaffolding files that introduce Drupal 8 module structure.

Also included are Simpletests for the functionality required by the module. You can read the module specification in the sitesurvey/README.md file. In our examples, we will reference that module.

## Module structure

In Drupal 8, there are two required files for each module:
* sitesurvey.info.yml
  * A YAML file that registers your module with Drupal.
* sitesurvey.module
  * The module file. Note that, in some cases, this file may be empty.

Additional features and functionality can be built using basic patterns; some of these patterns come from Object Oriented systems (OO) such as Symfony. Others will look familiar to Drupal developers.

In our module, we have three additional files in module root:
* sitesurvey.install
  * Contains functions to run on installation and uninstallation. Largely unchanged from Drupal 7.
* sitesurvey.routing.yml
  * A new file, the routing YAML file defines the routes (think Drupal 7 menu paths) used by your module. We'll look at routes later, in branch _1-routing_.
