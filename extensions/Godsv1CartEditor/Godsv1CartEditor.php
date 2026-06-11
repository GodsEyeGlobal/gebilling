<?php

namespace Paymenter\Extensions\Others\Godsv1CartEditor;

use App\Classes\Extension\Extension;
use App\Classes\Extension\Attributes\ExtensionMeta;
use Illuminate\Support\Facades\View;
use Livewire\Livewire;
use Paymenter\Extensions\Others\Godsv1CartEditor\Livewire\CartEditor as CartEditorLivewire;

#[ExtensionMeta(
    name: 'Godsv1 Cart Editor',
    description: 'Edit text and toggle sections on the Godsv1 cart page.',
    author: 'TamelessHosting',
    version: '1.0.0'
)]
class Godsv1CartEditor extends Extension
{
    public function boot(): void
    {
        View::addNamespace(
            'godsv1-cart-editor',
            base_path('extensions/Others/Godsv1CartEditor/Resources/views')
        );

        Livewire::component('godsv1-cart-editor.editor', CartEditorLivewire::class);
    }

    public function getConfig($values = []): array
    {
        return [];
    }
}
