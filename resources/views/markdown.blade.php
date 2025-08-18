<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge Instructions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .markdown-content h1 { @apply text-3xl font-bold mb-6 text-gray-900; }
        .markdown-content h2 { @apply text-2xl font-semibold mb-4 mt-8 text-gray-800; }
        .markdown-content h3 { @apply text-xl font-medium mb-3 mt-6 text-gray-700; }
        .markdown-content p { @apply mb-4 text-gray-700 leading-relaxed; }
        .markdown-content ul { @apply mb-4 ml-6 list-disc; }
        .markdown-content ol { @apply mb-4 ml-6 list-decimal; }
        .markdown-content li { @apply mb-2 text-gray-700; }
        .markdown-content code { @apply bg-gray-100 px-2 py-1 rounded text-sm font-mono; }
        .markdown-content pre { @apply bg-gray-100 p-4 rounded-lg overflow-x-auto mb-4; }
        .markdown-content pre code { @apply bg-transparent p-0; }
        .markdown-content blockquote { @apply border-l-4 border-gray-300 pl-4 italic text-gray-600 mb-4; }
        .markdown-content a { @apply text-blue-600 hover:text-blue-800 underline; }
        .markdown-content hr { @apply my-8 border-gray-300; }
        .markdown-content table { @apply min-w-full border-collapse border border-gray-300 mb-4; }
        .markdown-content th { @apply border border-gray-300 px-4 py-2 bg-gray-100 font-semibold; }
        .markdown-content td { @apply border border-gray-300 px-4 py-2; }
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