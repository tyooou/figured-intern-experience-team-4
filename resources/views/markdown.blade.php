<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge Instructions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .markdown-content h1 {
            font-size: 1.875rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #1f2937;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 0.5rem;
        }
        .markdown-content h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            margin-top: 2rem;
            color: #374151;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 0.25rem;
        }
        .markdown-content h3 {
            font-size: 1.25rem;
            font-weight: 500;
            margin-bottom: 0.75rem;
            margin-top: 1.5rem;
            color: #4b5563;
        }
        .markdown-content h4 {
            font-size: 1.125rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            margin-top: 1rem;
            color: #6b7280;
        }
        .markdown-content p {
            margin-bottom: 1rem;
            color: #374151;
            line-height: 1.625;
        }
        .markdown-content ul, .markdown-content ol {
            margin-bottom: 1rem;
            margin-left: 1.5rem;
            color: #374151;
        }
        .markdown-content ul {
            list-style-type: disc;
        }
        .markdown-content ol {
            list-style-type: decimal;
        }
        .markdown-content li {
            margin-bottom: 0.5rem;
            line-height: 1.5;
        }
        .markdown-content code {
            background-color: #f3f4f6;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.875rem;
            font-family: ui-monospace, SFMono-Regular, "SF Mono", Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            color: #dc2626;
            font-weight: 500;
        }
        .markdown-content pre {
            background-color: #f9fafb;
            padding: 1rem;
            border-radius: 0.5rem;
            overflow-x: auto;
            margin-bottom: 1rem;
            border: 1px solid #e5e7eb;
        }
        .markdown-content pre code {
            background-color: transparent;
            padding: 0;
            color: #374151;
            font-weight: normal;
        }
        .markdown-content blockquote {
            border-left: 4px solid #d1d5db;
            padding-left: 1rem;
            font-style: italic;
            color: #6b7280;
            margin-bottom: 1rem;
            background-color: #f9fafb;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        .markdown-content a {
            color: #2563eb;
            text-decoration: underline;
        }
        .markdown-content a:hover {
            color: #1d4ed8;
        }
        .markdown-content hr {
            margin-top: 2rem;
            margin-bottom: 2rem;
            border-color: #d1d5db;
        }
        .markdown-content table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
            font-size: 0.875rem;
        }
        .markdown-content th, .markdown-content td {
            border: 1px solid #d1d5db;
            padding: 0.75rem 1rem;
            text-align: left;
        }
        .markdown-content th {
            background-color: #f3f4f6;
            font-weight: 600;
            color: #374151;
        }
        .markdown-content td {
            color: #6b7280;
        }
        .markdown-content tbody tr:nth-child(even) {
            background-color: #f9fafb;
        }
        .markdown-content strong {
            font-weight: 600;
            color: #1f2937;
        }
        .markdown-content em {
            font-style: italic;
        }
        /* Task list styling */
        .markdown-content .task-list-item {
            list-style-type: none;
            margin-left: -1.5rem;
            padding-left: 1.5rem;
        }
        .markdown-content .task-list-item input[type="checkbox"] {
            margin-right: 0.5rem;
        }
        /* Emoji styling */
        .markdown-content img.emoji {
            width: 1.2em;
            height: 1.2em;
            display: inline-block;
            margin: 0 0.1em;
            vertical-align: -0.1em;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen py-8">
        <div class="max-w-4xl mx-auto px-4">
            <div class="bg-white rounded-lg shadow-sm p-8">
                <div class="markdown-content">
                    {!! $content !!}
                </div>
                
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <a href="/" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                        ← Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>