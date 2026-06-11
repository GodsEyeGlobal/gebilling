<?php

namespace Paymenter\Extensions\Others\Godsv1FooterEditor\Admin\Pages;

use Filament\Pages\Page;
use Paymenter\Extensions\Others\Godsv1FooterEditor\Livewire\FooterEditor;

class Footer extends Page
{
    protected static string|\UnitEnum|null $navigationGroup = 'Godsv1 Theme';
    protected static ?string $navigationLabel = 'Footer';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-group';
    protected static ?string $title = 'Footer';
    protected static ?string $slug = 'godsv1-theme/footer';

    public function mount(): void
    {
        // Register BOTH names here too (guaranteed to run for this route).
        $lw = app('livewire');

        if (is_object($lw) && method_exists($lw, 'component')) {
            $lw->component('godsv1-footer-editor.footer-editor', FooterEditor::class);
            $lw->component('godsv1-footer-editor-footer-editor', FooterEditor::class);
        }
    }

    public function getView(): string
    {
        return 'godsv1-footer-editor::admin.footer';
    }
}
