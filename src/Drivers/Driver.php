<?php

namespace Spatie\SiteSearch\Drivers;

use Spatie\SiteSearch\Models\SiteSearchIndex;
use Spatie\SiteSearch\SearchResults\SearchResults;

interface Driver
{
    public static function make(SiteSearchIndex $siteSearchIndex): self;

    public function createIndex(string $indexName): self;

    public function updateDocument(string $indexName, array $documentProperties): self;

    public function updateManyDocuments(string $indexName, array $documents): self;

    public function deleteIndex(string $indexName): self;

    public function search(string $indexName, string $query): SearchResults;
}
