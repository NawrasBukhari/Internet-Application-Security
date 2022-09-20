<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecretInformationController extends Controller
{
    public function index()
    {
        return view('secret');
    }

    public function configure()
    {
        $protocol = 'https://';
        if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == 'off') {
            $protocol = 'http://';
        }

        return [
            'x-content-type-options' => 'nosniff',
            'x-download-options' => 'noopen',
            'x-frame-options' => 'sameorigin',
            'x-permitted-cross-domain-policies' => 'none',
            'x-xss-protection' => '1; mode=block',
            'referrer-policy' => 'unsafe-url',
            'hsts' => [
                'enable' => true,
                'max-age' => 31536000,
                'include-sub-domains' => true,
            ],
            'hpkp' => [
                'hashes' => false,
                'include-sub-domains' => false,
                'max-age' => 15552000,
                'report-only' => false,
                'report-uri' => null,
            ],
            'custom-csp' => null,
            'csp' => [
                'report-only' => false,
                'report-uri' => false,
                'upgrade-insecure-requests' => false,
                'default-src' => [
                    'self' => true,
                ],
                'script-src' => [
                    'allow' => [
                        $protocol . 'ajax.googleapis.com',
                        $protocol . 'code.jquery.com',
                        $protocol . 'www.googletagmanager.com',
                        $protocol . 'www.google-analytics.com',
                    ],
                    'self' => true,
                    'unsafe-inline' => true,
                    'unsafe-eval' => true,
                    'data' => true,
                ],
                'style-src' => [
                    'allow' => [
                        $protocol . 'fonts.googleapis.com',
                    ],
                    'self' => true,
                    'unsafe-inline' => true,
                ],
                'img-src' => [
                    'allow' => [
                        $protocol . 'www.google-analytics.com',
                    ],
                    'self' => true,
                    'data' => true,
                ],
                'font-src' => [
                    'allow' => [
                        $protocol . 'fonts.gstatic.com',
                    ],
                    'self' => true,
                    'data' => true,
                ],
                'object-src' => [
                    'allow' => [],
                    'self' => false,
                ],
            ],
        ];

    }
}
