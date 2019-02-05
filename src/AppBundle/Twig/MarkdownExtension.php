<?php
/**
 * Created by PhpStorm.
 * User: wilsonc
 * Date: 2/4/19
 * Time: 11:45 PM
 */

namespace AppBundle\Twig;


use AppBundle\Service\MarkdownTransformer;

class MarkdownExtension extends \Twig_Extension
{

  private $markdownTransformer;

  public function __construct(MarkdownTransformer $markdownTransformer)
  {

    $this->markdownTransformer = $markdownTransformer;
  }

  public function getFilters()
  {
    return [
      new \Twig_SimpleFilter('markdownify', [$this, 'parseMarkdown'], ['is_safe' => ['html']]),
    ];
  }

  public function getName()
  {
    return 'app_markdown';
  }

  public function parseMarkdown($str) {
    return $this->markdownTransformer->parse($str);
  }

}