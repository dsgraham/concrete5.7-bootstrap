<?php
namespace Concrete\Package\ThemeC57Bootstrap;

use \Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die(_('Access Denied'));

class Controller extends Package 
{
  protected $pkgHandle = 'theme_c57_bootstrap';
  protected $appVersionRequired = '5.7.0';
  protected $pkgVersion = '1.0';

  public function getPackageDescription()
  {
    return t('A basic starter bootstrap theme.');
  }

  public function getPackageName()
  {
    return t('Bootstrap');
  }

  public function install()
  {
    $pkg = parent::install();
    Theme::add('bootstrap', $pkg);
  }

  public function uninstall()
  {
    parent::uninstall();
  }

  public function upgrade()
  {
    //$pkg = Package::getByHandle($this->pkgHandle);
    // Nothing to do here yet...
    parent::upgrade();
  }
}