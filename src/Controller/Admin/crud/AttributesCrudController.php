<?php

namespace App\Controller\Admin\crud;

use App\Entity\Attributes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AttributesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Attributes::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
