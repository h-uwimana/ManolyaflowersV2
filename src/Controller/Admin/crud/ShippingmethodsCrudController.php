<?php

namespace App\Controller\Admin\crud;

use App\Entity\Shippingmethods;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ShippingmethodsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Shippingmethods::class;
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
