<?php

namespace App\Controller\Admin\crud;

use App\Entity\Productattributes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductattributesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Productattributes::class;
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
