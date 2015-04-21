# concrete5.7-bootstrap
A Bootstrap 3 starter theme for Concrete5.7+

## Installation
  * Download or clone into the /packages directory of your Concrete5 site
  * Log into your site, go to _Extend concrete5_ and install the package
  * Go to _Pages and Themes_ and activate the Bootstrap theme
 
## Notes
  * This package is meant to be a boilerplate/starter theme. It includes a few styles, but is otherwise default Bootstrap.
  * There is an autonav template that will give you the standard Bootstrap navbar component, which is used by default on that block type.
  * The package includes Bootstrap's source code and a modified Grunt file. If you make changes to any of the less files in `css/build/bootstrap-3.3.4/` run `grunt dist` from that directory to compile. There are additional tasks added to this command and `grunt watch` that will copy the generated css and js files to the correct locations.
  
