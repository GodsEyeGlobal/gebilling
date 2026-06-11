<?php

namespace Paymenter\Extensions\Others\Godsv1CartEditor\Admin\Pages;

use Filament\Pages\Page;
use Filament\Panel;

class CartEditor extends Page
{
    protected static string|\UnitEnum|null $navigationGroup = 'Godsv1 Theme';
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $title = 'Cart Editor';

    public static function getSlug(?Panel $panel = null): string
    {
        return 'godsv1-theme/cart-editor';
    }

    public function getView(): string
    {
        return 'godsv1-cart-editor::admin.cart';
    }
}
