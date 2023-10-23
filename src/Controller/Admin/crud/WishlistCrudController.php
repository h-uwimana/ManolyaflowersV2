<?php

namespace App\Controller\Admin\crud;

use App\Entity\Wishlist;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class WishlistCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Wishlist::class;
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
