# Site Survey

The Site Survey module allows users to provide feedback about your site.

The primary features of the module are:

* A page that holds a form which any user with the "respond to site survey" permission may submit.
* The form fields are:
  * Name
  * Why did you visit the site today?
  * Did you find what you were looking for?
    * Yes
    * No
  * Would you recommend the site to your friends?
    * Yes
    * No
  * What one thing could we do to improve the site?
  * How did you hear about the site?
    * Search engine
    * Friend recommended
    * Advertisement
* A database table that holds answers to the site survey. The table contains:
  * name (varchar 80)
  * purpose (text)
  * success (bool)
  * recommend (bool)
  * improve (text)
  * hear (varchar 20)
  * submitted (date)
* A block that appears on all pages containing a link to the form.
* An admin View of all submissions, sortable and paginated.

