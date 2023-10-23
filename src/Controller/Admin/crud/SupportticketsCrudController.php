<?php

namespace App\Controller\Admin\crud;

use App\Entity\Supporttickets;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SupportticketsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Supporttickets::class;
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
