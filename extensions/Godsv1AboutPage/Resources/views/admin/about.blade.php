{{-- extensions/Others/Godsv1AboutPage/Resources/views/admin/about.blade.php --}}

<x-filament-panels::page>
    <div class="godsv1-about-admin space-y-6">

        <div class="rounded-2xl border border-white/5 bg-white/[0.03] px-4 py-3">
            <div class="text-sm font-semibold text-white/90">Godsv1 About Page</div>
            <div class="text-xs text-white/55">Edit the content shown on your public About page.</div>
        </div>

        @livewire(\Paymenter\Extensions\Others\Godsv1AboutPage\Livewire\AboutPageEditor::class)

    </div>

    <style>
        /* ---- Page heading: no glow ---- */
        .fi-page-header h1,
        .fi-page-header-heading,
        .fi-page-heading,
        .fi-header-heading {
            text-shadow: none !important;
            box-shadow: none !important;
            outline: none !important;
            filter: none !important;
        }

        .fi-page-header,
        .fi-page-header * {
            --tw-ring-shadow: 0 0 #0000 !important;
            --tw-ring-offset-shadow: 0 0 #0000 !important;
            box-shadow: none !important;
            outline: none !important;
        }

        /* ---- Kill rings/outlines on this page only ---- */
        .godsv1-about-admin,
        .godsv1-about-admin * {
            --tw-ring-shadow: 0 0 #0000 !important;
            --tw-ring-offset-shadow: 0 0 #0000 !important;
        }

        /* ---- Spacing: slightly more breathing room between sections ---- */
        .godsv1-about-admin .fi-section {
            margin-top: 1.25rem !important;
            overflow: visible !important; /* prevents any clipping */
        }

        .godsv1-about-admin .fi-section-content {
            padding-top: 0.85rem !important;
        }

        .godsv1-about-admin .fi-section-content > * + * {
            margin-top: 1rem !important;
        }

        /* ---- Buttons: clearer + no clipping into boxes ---- */
        .godsv1-about-admin button.fi-btn,
        .godsv1-about-admin a.fi-btn,
        .godsv1-about-admin .fi-btn {
            position: relative;
            z-index: 10;
            border-radius: 0.9rem !important;
            padding: 0.55rem 0.85rem !important;
            line-height: 1.1 !important;
            border: 1px solid rgba(255,255,255,0.10) !important;
            background: rgba(255,255,255,0.06) !important;
            color: rgba(255,255,255,0.92) !important;
            box-shadow: none !important;
            outline: none !important;
        }

        .godsv1-about-admin button.fi-btn:hover,
        .godsv1-about-admin a.fi-btn:hover,
        .godsv1-about-admin .fi-btn:hover {
            background: rgba(255,255,255,0.10) !important;
        }

        .godsv1-about-admin .fi-btn.fi-btn-color-primary,
        .godsv1-about-admin .fi-btn-color-primary {
            border-color: rgba(168,85,247,0.35) !important;
            background: rgba(168,85,247,0.95) !important;
            color: #fff !important;
        }

        .godsv1-about-admin .fi-btn.fi-btn-color-primary:hover,
        .godsv1-about-admin .fi-btn-color-primary:hover {
            background: rgba(168,85,247,0.85) !important;
        }

        /* Ensure the header/action row has breathing room above the first card */
        .godsv1-about-admin .fi-header,
        .godsv1-about-admin .fi-page-header,
        .godsv1-about-admin .fi-page-header-ctn {
            margin-bottom: 0.75rem !important;
        }

        /* Keep borders subtle/dark */
        .godsv1-about-admin .fi-section,
        .godsv1-about-admin .fi-card {
            border-color: rgba(255, 255, 255, 0.04) !important;
        }
    </style>
</x-filament-panels::page>
