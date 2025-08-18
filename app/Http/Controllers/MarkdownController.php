<?php

namespace App\Http\Controllers;

use League\CommonMark\CommonMarkConverter;

class MarkdownController extends Controller
{
    public function showChallenge()
    {
        $markdownPath = base_path('CHALLENGE.md');
        
        if (!file_exists($markdownPath)) {
            abort(404);
        }
        
        $markdown = file_get_contents($markdownPath);
        $converter = new CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);
        
        $html = $converter->convert($markdown);
        
        return view('markdown', ['content' => $html]);
    }
}