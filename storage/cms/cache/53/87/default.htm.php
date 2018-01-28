<?php 
class Cms5a6f1f2391dea091401657_147e3ab18575c9bb3ab3df32fb688cdbClass extends \Cms\Classes\LayoutCode
{
public function onStart()
{
    Event::listen('cms.page.init', function($controller, $page) {
        $messageIds = [$page->title, $page->seo_title];
        
            if (isset($page->apiBag['staticPage']))
            {
                $vars = $page->apiBag['staticPage']->getViewBag();
                $messageIds[] = $vars->property('seo_title');
                $vars->setProperty('seo_title', Message::get($vars->property('seo_title')));
            }
            
            Message::importMessages($messageIds);
            $page->title = Message::get($page->title);
            
            if ($page->seo_title)
            {
                $page->seo_title = Message::get($page->seo_title);
            }
        });
    $this['rootPath'] = url('/');
    $this['currentLocale'] = app()->getLocale();
}
}
