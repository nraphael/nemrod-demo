<?php


namespace Conjecto\Bundle\DemoBundle\RdfResource;

use Conjecto\Nemrod\Resource as BaseResource;
use Conjecto\Nemrod\ResourceManager\Annotation\Resource;
use Conjecto\Nemrod\ResourceManager\Annotation\Property;
use Conjecto\Nemrod\Framing\Annotation as Serializer;

/**
 * Class ExampleResource
 * @package Conjecto\Bundle\DemoBundle\RdfResource
 * @Resource(types={"hbsko:Person"}, uriPattern = "https://librarydata.hbs.edu/HBSKOntology/Person/")
 * @Serializer\JsonLd(frame="@Demo/Person/person.jsonld")
 */
class Person extends BaseResource
{

    /**
     * @Property("hbsko:Person", cascade={"persist"})
     */
    protected $alumnus;
}