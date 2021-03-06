<?php

namespace WithCandour\AardvarkSeo\Blueprints\CP;

use WithCandour\AardvarkSeo\Blueprints\Blueprint as AardvarkBlueprint;
use Statamic\Facades\Blueprint as StatamicBlueprint;

class SitemapSettingsBlueprint implements AardvarkBlueprint
{
    /**
     * @inheritDoc
     */
    public static function requestBlueprint()
    {
        return StatamicBlueprint::make()->setContents([
            'sections' => [
                'main' => [
                    'fields' => [
                        [
                            'handle' => 'enable_sitemap',
                            'field' => [
                                'type' => 'toggle',
                                'display' => __('aardvark-seo::sitemap.fields.enable_sitemap.display'),
                                'default' => true,
                            ],
                        ],
                        [
                            'handle' => 'sitemap_cache_expiration',
                            'field' => [
                                'type' => 'select',
                                'display' => __('aardvark-seo::sitemap.fields.sitemap_cache_expiration.display'),
                                'instructions' => __('aardvark-seo::sitemap.fields.sitemap_cache_expiration.instruct'),
                                'default' => '180',
                                'options' => [
                                    'null' => 'Forever',
                                    '60' => '1 Hour',
                                    '180' => '3 Hours',
                                    '720' => '12 Hours',
                                    '1140' => '1 Day',
                                    '10080' => '1 Week',
                                    '40320' => '1 Month',
                                    '120960' => '3 Months',
                                    '483840' => '1 Year',
                                ],
                            ],
                        ],
                        [
                            'handle' => 'exclude_content_section',
                            'field' => [
                                'type' => 'section',
                                'display' => __('aardvark-seo::sitemap.fields.exclude_content_section.display'),
                                'listable' => 'hidden',
                            ],
                        ],
                        [
                            'handle' => 'exclude_collections',
                            'field' => [
                                'type' => 'collections',
                                'display' => __('aardvark-seo::sitemap.fields.exclude_collections.display'),
                                'instructions' => __('aardvark-seo::sitemap.fields.exclude_collections.instruct'),
                                'width' => 50,
                            ],
                        ],
                        [
                            'handle' => 'exclude_taxonomies',
                            'field' => [
                                'type' => 'taxonomies',
                                'display' => __('aardvark-seo::sitemap.fields.exclude_taxonomies.display'),
                                'instructions' => __('aardvark-seo::sitemap.fields.exclude_taxonomies.instruct'),
                                'width' => 50,
                            ],
                        ],
                    ],
                ],
            ],
        ]);
    }
}
