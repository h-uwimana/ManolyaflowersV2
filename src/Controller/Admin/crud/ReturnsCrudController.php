<?php

namespace App\Controller\Admin\crud;

use App\Entity\Returns;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReturnsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Returns::class;
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
