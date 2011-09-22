<?php

namespace Admingenerator\GeneratorBundle\Builder\Admin;

/**
 * This builder generate form for Filters
 * @author cedric Lombardot
 */
class FiltersBuilderType extends FiltersBuilder
{
    public function getOutputName()
    {
        return 'Form/BaseType/FiltersType.php';
    }

    public function getTemplateName()
    {
        return 'EditBuilderType' . self::TWIG_EXTENSION;
    }
}
