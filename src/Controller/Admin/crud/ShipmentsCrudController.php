<?php

namespace App\Controller\Admin\crud;

use App\Entity\Shipments;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ShipmentsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Shipments::class;
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
