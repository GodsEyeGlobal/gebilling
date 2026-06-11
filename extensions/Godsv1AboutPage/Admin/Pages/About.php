<?php

namespace Paymenter\Extensions\Others\Godsv1AboutPage\Admin\Pages;

use BackedEnum;
use Filament\Pages\Page;
use UnitEnum;

class About extends Page
{
    protected static string|UnitEnum|null $navigationGroup = 'Godsv1 Theme';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationLabel = 'About Page';

    protected static ?string $slug = 'godsv1-theme/about';

    public function getView(): string
    {
        return 'godsv1-about-page::admin.about';
    }
}
