<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 01/10/2017
 * Time: 13:47
 */

declare(strict_types=1);

namespace Greenter\Xml\Builder;

use Greenter\Builder\BuilderInterface;
use Greenter\Model\DocumentInterface;

/**
 * Class SummaryBuilder
 * @package Greenter\Xml\Builder
 */
class SummaryBuilder extends TwigBuilder implements BuilderInterface
{

    /**
     * Create xml for document.
     *
     * @param DocumentInterface $document
     * @return string
     */
    public function build(DocumentInterface $document): ?string
    {
        return $this->render('summary.xml.twig', $document);
    }
}