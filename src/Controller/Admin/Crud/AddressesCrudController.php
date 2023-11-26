<?php

namespace App\Controller\Admin\Crud;

use App\Entity\Addresses;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AddressesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Addresses::class;
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
