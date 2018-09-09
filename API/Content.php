<?php
namespace Timeline\API;

use Grav\Common\Grav;
use Grav\Common\Plugin;
use Grav\Common\Page\Page;
use Grav\Common\Page\Media;
use Grav\Common\Page\Header;
use Grav\Common\Page\Collection;
use RocketTheme\Toolbox\Event\Event;

require 'vendor/autoload.php';
use PHPExtra\Sorter\Sorter;
use PHPExtra\Sorter\Strategy\SimpleSortStrategy;
use PHPExtra\Sorter\Strategy\ComplexSortStrategy;
use PHPExtra\Sorter\Comparator\NumericComparator;
use PHPExtra\Sorter\Comparator\DateTimeComparator;
use PHPExtra\Sorter\Comparator\UnicodeCIComparator;

/**
 * Content API
 */
class Content
{
    /**
     * Initialize class
     *
     * @param string $orderBy  Property to order by.
     * @param string $orderDir Direction to order.
     */
    public function __construct($orderBy = 'date', $orderDir = 'desc')
    {
        $this->orderBy = $orderBy;
        $this->orderDir = $orderDir;
    }

    /**
     * Create page-structure recursively
     * 
     * @param string  $route Route to page
     * @param string  $mode  Placeholder for operation-mode, private.
     * @param integer $depth Placeholder for recursion depth, private.
     * 
     * @return array Page-structure with children and media
     */
    public function buildTree($route, $mode = false, $depth = 0)
    {
        $page = Grav::instance()['page'];
        $depth++;
        $mode = '@page.self';
        if ($depth > 1) {
            $mode = '@page.children';
        }
        $pages = $page->evaluate([$mode => $route]);
        $pages = $pages->published()->order($this->orderBy, $this->orderDir);
        $paths = array();
        foreach ($pages as $page) {
            $route = $page->rawRoute();
            $path = $page->path();
            $title = $page->title();
            $date = $page->date();
            $template = $page->template();
            $markdown = $page->rawMarkdown();
            $content = $page->content();
            $datetime = \DateTime::createFromFormat('U', $date);
            $date = $datetime->format('Y-m-d H:i:s');
            $paths[$route]['depth'] = $depth;
            $paths[$route]['route'] = $route;
            $paths[$route]['datetime'] = $date;
            $paths[$route]['template'] = $template;
            $paths[$route]['markdown'] = $markdown;
            $paths[$route]['content'] = $content;
            $header = $page->find($route)->header();
            $header = $page->toArray($header)['header'];
            $paths[$route]['header'] = $header;
            $media = new Media($path);
            foreach ($media->all() as $filename => $file) {
                $paths[$route]['media'][$filename] = $file;
            }
            if (!empty($paths[$route])) {
                $children = $this->buildTree($route, $mode, $depth);
                if (!empty($children)) {
                    if (isset($header['order']['by'], $header['order']['dir'])) {
                        $orderBy = $header['order']['by'];
                        $orderDir = $header['order']['dir'];
                        $children = $this->sortLeaf($children, $orderBy, $orderDir);
                    }
                    $paths[$route]['children'] = $children;
                }
            }
        }
        if (!empty($paths)) {
            return $paths;
        } else {
            return null;
        }
    }

    /**
     * Sort array using PHPExtra/Sorter
     *
     * @param array  $array    Array to sort.
     * @param string $orderBy  Property to sort by.
     * @param string $orderDir Direction to sort.
     * 
     * @return array
     */
    public function sortLeaf(Array $array, $orderBy = null, $orderDir = null)
    {
        if (!$orderBy) {
            $orderBy = $this->orderBy;
        }
        if ($orderBy == 'date') {
            $orderBy = 'datetime';
        }
        if (!$orderDir) {
            $orderDir = $this->orderDir;
        }
        $strategy = new ComplexSortStrategy();
        if ($orderDir == 'asc') {
            $strategy->setSortOrder(Sorter::ASC);
        } elseif ($orderDir == 'desc') {
            $strategy->setSortOrder(Sorter::DESC);
        }
        $strategy->sortBy($orderBy);
        $strategy->setMaintainKeyAssociation(true);
        $sorter = new Sorter();
        return $sorter->setStrategy($strategy)->sort($array);
    }
}