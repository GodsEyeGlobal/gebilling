<?php

namespace Paymenter\Extensions\Others\Godsv1FooterEditor;

use App\Classes\Extension\Attributes\ExtensionMeta;
use App\Classes\Extension\Extension;
use Illuminate\Support\Facades\View;
use Livewire\Livewire;
use Paymenter\Extensions\Others\Godsv1FooterEditor\Livewire\FooterEditor;

#[ExtensionMeta(
    name: 'Godsv1 Footer Editor',
    description: 'Footer editor for the Godsv1 theme.',
    author: 'TamelessHosting',
    version: '1.0.0'
)]
class Godsv1FooterEditor extends Extension
{
    public function boot(): void
    {
        $viewsPath = base_path('extensions/Others/Godsv1FooterEditor/Resources/views');

        // Blade namespace: godsv1-footer-editor::...
        View::addNamespace('godsv1-footer-editor', $viewsPath);

        // Livewire component alias used by @livewire(...)
        Livewire::component('godsv1-footer-editor.footer-editor', FooterEditor::class);
    }
}
