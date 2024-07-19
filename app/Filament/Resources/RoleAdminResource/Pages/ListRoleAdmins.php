<?php

namespace App\Filament\Resources\RoleAdminResource\Pages;

use App\Filament\Resources\RoleAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoleAdmins extends ListRecords
{
    protected static string $resource = RoleAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
