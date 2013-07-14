# Palantir.net Drupal 8 Training

Welcome to Drupal 8!

The modules in this git repository are designed to help train developers on best practices for Drupal 8.

The modules are written is a specific order, and branches in the repository indicate the development state of the code. Authors should:

* Create the module scaffolding:
  * module.info.yml
  * module.module
  * README.md file explaining the module features.
  * Commit to the _initial_ branch
* Write tests.
  * Commit tests to the _tests_ branch.
* Write scaffolding for features -- the folders and files that will hold the final code.
  * Commit to the _structure_ branch
* Write the working code.
  * Commit to the _final_ branch.

This structure will allow students to walk through code samples at their own pace. When teaching a course, we will walk through the basic steps:

* Install Drupal 8
* Git clone the _master_ branch
* Checkout the _initial_ branch
* Checkout the _tests_ branch
* Checkout the _structure_ branch
* Write code to make the tests pass.
* Refer to the _final_ branch if students get stuck

With this branch structure, changes should be merged up. That is, the pattern is that changes to _initial_ are replicated to all branches that follow.

