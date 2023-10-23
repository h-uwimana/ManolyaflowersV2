<?php

namespace App\Controller\Admin\crud;

use App\Entity\Inventory;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InventoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Inventory::class;
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
