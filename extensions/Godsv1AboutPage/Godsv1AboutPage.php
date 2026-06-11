<?php
// extensions/Others/Godsv1AboutPage/Godsv1AboutPage.php

namespace Paymenter\Extensions\Others\Godsv1AboutPage;

use App\Classes\Extension\Extension;
use App\Classes\Extension\Attributes\ExtensionMeta;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Livewire\Livewire;

#[ExtensionMeta(
    name: 'Godsv1 About Page',
    description: 'Adds a customizable About page (theme-aware) and a Filament editor.',
    author: 'TamelessHosting',
    version: '1.0.0'
)]
class Godsv1AboutPage extends Extension
{
    public function boot(): void
    {
        $base = base_path('extensions/Others/Godsv1AboutPage/Resources/views');
        View::addNamespace('godsv1-about-page', $base);

        // Livewire component registration
        if (class_exists(\Paymenter\Extensions\Others\Godsv1AboutPage\Livewire\AboutPageEditor::class)) {
            Livewire::component(
                'godsv1-about-page.editor',
                \Paymenter\Extensions\Others\Godsv1AboutPage\Livewire\AboutPageEditor::class
            );
        }

        // Routes
        if (!Route::has('godsv1.about.show')) {
            require base_path('extensions/Others/Godsv1AboutPage/routes/web.php');
        }
    }

    public function getConfig($values = [])
    {
        return [];
    }
}
