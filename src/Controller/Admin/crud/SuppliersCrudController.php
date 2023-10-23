<?php

namespace App\Controller\Admin\crud;

use App\Entity\Suppliers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SuppliersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Suppliers::class;
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
