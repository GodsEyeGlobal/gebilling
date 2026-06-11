<?php

namespace Paymenter\Extensions\Others\Godsv1TermsAndCondition\Admin\Pages;

use BackedEnum;
use Filament\Pages\Page;
use UnitEnum;

class Terms extends Page
{
    protected static string|UnitEnum|null $navigationGroup = 'Godsv1 Theme';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Terms & Conditions';

    protected static ?string $slug = 'godsv1-theme/terms';

    public function getView(): string
    {
        return 'godsv1-terms-and-condition::admin.terms';
    }
}
