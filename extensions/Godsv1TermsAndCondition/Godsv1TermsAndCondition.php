<?php

namespace Paymenter\Extensions\Others\Godsv1TermsAndCondition;

use App\Classes\Extension\Extension;
use App\Classes\Extension\Attributes\ExtensionMeta;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Livewire\Livewire;

#[ExtensionMeta(
    name: 'Godsv1 Terms & Conditions',
    description: 'Adds a customizable Terms & Conditions page (theme-aware) and a Filament editor.',
    author: 'TamelessHosting',
    version: '1.0.0'
)]
class Godsv1TermsAndCondition extends Extension
{
    public function boot(): void
    {
        $base = base_path('extensions/Others/Godsv1TermsAndCondition/Resources/views');

        /**
         * Register BOTH namespaces to prevent “No hint path defined” during the transition.
         */
        View::addNamespace('godsv1-terms-page', $base);
        View::addNamespace('godsv1-terms-and-condition', $base);

        /**
         * Register BOTH Livewire aliases to prevent breaking any blade usage.
         */
        Livewire::component(
            'godsv1-terms-page.editor',
            \Paymenter\Extensions\Others\Godsv1TermsAndCondition\Livewire\TermsPageEditor::class
        );

        Livewire::component(
            'godsv1-terms-and-condition.editor',
            \Paymenter\Extensions\Others\Godsv1TermsAndCondition\Livewire\TermsPageEditor::class
        );

        // Public route
        if (!Route::has('godsv1.terms.show')) {
            require base_path('extensions/Others/Godsv1TermsAndCondition/routes/web.php');
        }
    }

    public function getConfig($values = [])
    {
        return [];
    }
}
