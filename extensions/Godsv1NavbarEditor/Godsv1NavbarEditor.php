<?php

namespace Paymenter\Extensions\Others\Godsv1NavbarEditor;

use App\Classes\Extension\Attributes\ExtensionMeta;
use App\Classes\Extension\Extension;
use Illuminate\Support\Facades\View;
use Livewire\Livewire;
use Paymenter\Extensions\Others\Godsv1NavbarEditor\Livewire\NavbarEditor;

#[ExtensionMeta(
    name: 'Godsv1 Navbar Editor',
    description: 'Navbar editor for the Godsv1 theme.',
    author: 'TamelessHosting',
    version: '1.0.0'
)]
class Godsv1NavbarEditor extends Extension
{
    public function boot(): void
    {
        $viewsPath = base_path('extensions/Others/Godsv1NavbarEditor/Resources/views');

        // Blade namespace: godsv1-navbar-editor::...
        View::addNamespace('godsv1-navbar-editor', $viewsPath);

        // Livewire component alias used by @livewire(...)
        Livewire::component('godsv1-navbar-editor.navbar-editor', NavbarEditor::class);
    }
}
