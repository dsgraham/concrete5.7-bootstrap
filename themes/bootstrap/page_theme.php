<?php
namespace Concrete\Package\ThemeC57Bootstrap\Theme\Bootstrap;
use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme 
{
  protected $pThemeGridFrameworkHandle = 'bootstrap3'; 

  public function registerAssets()
  {
    $this->providesAsset('css', 'bootstrap/*');
    $this->providesAsset('javascript', 'bootstrap/*');
  }

  public function getThemeDefaultBlockTemplates()
  {
    return array(
      'autonav' => 'bootstrap_navbar'
    );
  }

  public function getThemeEditorClasses()
  {
    return array(
      array('title' => t('Primary Button'), 'menuClass' => '', 'spanClass' => 'btn btn-primary'),
      array('title' => t('Default Button'), 'menuClass' => '', 'spanClass' => 'btn btn-default'),
    );
  }

}