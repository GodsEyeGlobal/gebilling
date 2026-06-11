<?php

namespace Paymenter\Extensions\Others\Godsv1NavbarEditor\Admin\Pages;

use Filament\Pages\Page;
use Paymenter\Extensions\Others\Godsv1NavbarEditor\Livewire\NavbarEditor;

class Navbar extends Page
{
    protected static string|\UnitEnum|null $navigationGroup = 'Godsv1 Theme';
    protected static ?string $navigationLabel = 'Navbar';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-bars-3';
    protected static ?string $title = 'Navbar';
    protected static ?string $slug = 'godsv1-theme/navbar';

    public function mount(): void
    {
        // Register BOTH names here too (guaranteed to run for this route).
        $lw = app('livewire');

        if (is_object($lw) && method_exists($lw, 'component')) {
            $lw->component('godsv1-navbar-editor.navbar-editor', NavbarEditor::class);
            $lw->component('godsv1-navbar-editor-navbar-editor', NavbarEditor::class);
        }
    }

    public function getView(): string
    {
        return 'godsv1-navbar-editor::admin.navbar';
    }
}
