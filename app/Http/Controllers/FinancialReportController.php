<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Prism\Prism\Prism;

class FinancialReportController extends Controller
{
    /**
     * Get financial report data for the Figured intern challenge
     */
    public function getFinancialReport(): JsonResponse
    {
        $reportData = [
            'company' => [
                'name' => 'Windy Farm',
                'report_type' => 'Profit & Loss',
                'basis' => 'Accrual basis',
                'period' => 'Actuals + Forecast for the period ending 31 March 2025',
                'actuals_to' => '31 July 2025'
            ],
            'columns' => [
                ['month' => 'Apr 24', 'type' => 'Actual'],
                ['month' => 'May 24', 'type' => 'Actual'],
                ['month' => 'Jun 24', 'type' => 'Actual'],
                ['month' => 'Jul 24', 'type' => 'Actual'],
                ['month' => 'Aug 24', 'type' => 'Actual'],
                ['month' => 'Sep 24', 'type' => 'Actual'],
                ['month' => 'Oct 24', 'type' => 'Actual'],
                ['month' => 'Nov 24', 'type' => 'Actual'],
                ['month' => 'Dec 24', 'type' => 'Actual'],
                ['month' => 'Jan 25', 'type' => 'Actual'],
                ['month' => 'Feb 25', 'type' => 'Actual'],
                ['month' => 'Mar 25', 'type' => 'Actual'],
                ['month' => 'Total', 'type' => 'Total']
            ],
            'sections' => [
                [
                    'id' => 'income',
                    'name' => 'Income',
                    'level' => 1,
                    'collapsible' => true,
                    'expanded' => true,
                    'subsections' => [
                        [
                            'id' => 'sheep',
                            'name' => 'Sheep',
                            'level' => 2,
                            'collapsible' => true,
                            'expanded' => true,
                            'subsections' => [
                                [
                                    'id' => 'sheep_income',
                                    'name' => 'Income',
                                    'level' => 3,
                                    'collapsible' => true,
                                    'expanded' => true,
                                    'line_items' => [
                                        [
                                            'name' => 'Sales',
                                            'account_id' => '7d05a53d-613d-4eb2-a2fc-dcb6adb80b80',
                                            'values' => [0, 0, 435, 435, 435, 870, 435, 435, 61304, 60435, 81043, 435, 206261]
                                        ]
                                    ]
                                ],
                                [
                                    'id' => 'sheep_costs',
                                    'name' => 'Costs',
                                    'level' => 3,
                                    'collapsible' => true,
                                    'expanded' => true,
                                    'line_items' => [
                                        [
                                            'name' => 'Purchases',
                                            'account_id' => '573a170b-6792-4cfa-b8ce-6f8fd27f5458',
                                            'values' => [0, 0, 10304, 730, 0, 0, 0, 0, 0, 0, 0, 0, 11035]
                                        ],
                                        [
                                            'name' => 'Rent',
                                            'account_id' => '28113b99-6df2-4123-a2d0-5f54dcf8017b',
                                            'values' => [0, 205, 205, 205, 0, 0, 0, 0, 0, 0, 0, 0, 616]
                                        ]
                                    ]
                                ]
                            ],
                            'gross_profit' => [
                                'name' => 'Sheep Gross Profit',
                                'values' => [0, 0, 435, 435, 435, 870, 435, 435, 61304, 60435, 81043, 435, 206261]
                            ]
                        ],
                        [
                            'id' => 'other_income',
                            'name' => 'Other Income',
                            'level' => 2,
                            'collapsible' => true,
                            'expanded' => true,
                            'subsections' => [
                                [
                                    'id' => 'other',
                                    'name' => 'Other',
                                    'level' => 3,
                                    'collapsible' => true,
                                    'expanded' => true,
                                    'line_items' => [
                                        [
                                            'name' => 'Other Revenue',
                                            'account_id' => 'ba3f61ed-2992-4468-bd4d-fd3ee2cb16c9',
                                            'values' => [0, 3652, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3652]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ],
                    'total' => [
                        'name' => 'Gross Profit',
                        'values' => [0, 3652, 435, 435, 435, 870, 435, 435, 61304, 60435, 81043, 435, 209913]
                    ]
                ],
                [
                    'id' => 'operating_expenses',
                    'name' => 'Operating Expenses',
                    'level' => 1,
                    'collapsible' => true,
                    'expanded' => true,
                    'subsections' => [
                        [
                            'id' => 'other_operating',
                            'name' => 'Other',
                            'level' => 2,
                            'collapsible' => true,
                            'expanded' => true,
                            'line_items' => [
                                [
                                    'name' => 'Consulting & Accounting',
                                    'account_id' => '5f29a204-d41f-4727-9831-8f70b3ac4a95',
                                    'values' => [1800, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3600]
                                ],
                                [
                                    'name' => 'Light, Power, Heating',
                                    'account_id' => '2e277847-022c-48f3-8467-0207230004d6',
                                    'values' => [0, 0, 78, 83, 84, 80, 77, 79, 84, 87, 92, 93, 838]
                                ],
                                [
                                    'name' => 'Office Expenses',
                                    'account_id' => '935e0fbe-6749-41c8-a024-11321e44dfac',
                                    'values' => [4000, 0, 4000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8000]
                                ],
                                [
                                    'name' => 'Printing & Stationery',
                                    'account_id' => 'df1a5320-2622-4fde-9174-e3fbf3ad03ce',
                                    'values' => [256, 0, 256, 0, 0, 0, 0, 0, 0, 0, 0, 0, 512]
                                ]
                            ]
                        ]
                    ],
                    'total' => [
                        'name' => 'Operating Expenses',
                        'values' => [6056, 0, 6134, 83, 84, 80, 77, 79, 84, 87, 92, 93, 12950]
                    ]
                ]
            ],
            'summary' => [
                [
                    'name' => 'Operating Surplus',
                    'values' => [-6056, 3652, -5699, 352, 350, 790, 357, 356, 61221, 60347, 80952, 342, 196963]
                ],
                [
                    'name' => 'Net Profit',
                    'values' => [-6056, 3652, -5699, 352, 350, 790, 357, 356, 61221, 60347, 80952, 342, 196963]
                ]
            ]
        ];

        return response()->json($reportData);
    }

    /**
     * Generate AI commentary using Prism
     */
    public function generateCommentary(Request $request): JsonResponse
    {
        try {
            // Check if OpenAI API key is configured
            if (empty(env('OPENAI_API_KEY'))) {
                return response()->json([
                    'error' => 'OpenAI API key not configured. Please add OPENAI_API_KEY to your .env file.'
                ], 500);
            }

            $prompt = $request->input('prompt', 'Provide general business insights');

            $response = Prism::text()
                ->using('openai', 'gpt-4')
                ->withPrompt(
                "You are Otis the cow from Barnyard, your barnyard financial guru.
                Take a look at this farm financial data: "
                . json_encode($this->getFinancialReport()) .
                ". Tell me where the cash cows are and where we’re just shoveling money into the mud.
                Break it down into income, expenses, and profit, then give me some udderly brilliant
                recommendations to fatten up the farm’s wallet. Respond in character as Otis, the cow, and keep it light and fun!"
            )

            ->generate();

            return response()->json([
                'response' => $response->text
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to generate commentary: ' . $e->getMessage()
            ], 500);
        }
    }
}
