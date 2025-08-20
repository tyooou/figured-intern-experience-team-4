<?php

namespace App\Http\Controllers;

use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\Table\TableExtension;
use League\CommonMark\Extension\Strikethrough\StrikethroughExtension;
use League\CommonMark\Extension\TaskList\TaskListExtension;
use League\CommonMark\Extension\Autolink\AutolinkExtension;
use League\CommonMark\MarkdownConverter;

class MarkdownController extends Controller
{
    public function showChallenge()
    {
        $markdownPath = base_path('CHALLENGE.md');
        
        if (!file_exists($markdownPath)) {
            abort(404);
        }
        
        $markdown = file_get_contents($markdownPath);
        
        // Configure environment with extensions
        $environment = new Environment([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
            'max_nesting_level' => 10,
        ]);

        // Add extensions for better rendering
        $environment->addExtension(new CommonMarkCoreExtension());
        $environment->addExtension(new TableExtension());
        $environment->addExtension(new StrikethroughExtension());
        $environment->addExtension(new TaskListExtension());
        $environment->addExtension(new AutolinkExtension());

        $converter = new MarkdownConverter($environment);
        $html = $converter->convert($markdown);
        
        return view('markdown', ['content' => $html]);
    }
}