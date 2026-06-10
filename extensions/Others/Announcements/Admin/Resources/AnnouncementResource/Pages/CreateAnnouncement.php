<?php

namespace GEBilling\Extensions\Others\Announcements\Admin\Resources\AnnouncementResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use GEBilling\Extensions\Others\Announcements\Admin\Resources\AnnouncementResource;

class CreateAnnouncement extends CreateRecord
{
    protected static string $resource = AnnouncementResource::class;
}
