<?php

namespace App\Controller\Admin\crud;

use App\Entity\Shoppingcart;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ShoppingcartCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Shoppingcart::class;
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
